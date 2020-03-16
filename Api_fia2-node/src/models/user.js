const mysql=require('mysql');
connection = mysql.createConnection({
  host:'localhost',
  user:'root',
  password:'',
  database:'api-fia2'
});
let userModel ={};
userModel.getUser=(callback)=>{
  if (connection) {
    connection.query('SELECT * FROM request',(err,rows)=>{
      if (err) {
        throw err;
      }else{
        callback(null,rows);
      }
    }
  );

  }
};
userModel.insertRequest=(userData,callback)=>{
  if (connection) {
    connection.query("INSERT INTO request SET ?",userData,
    (err,result)=>{
      if (err) {
        throw err;
      }else {
        callback(null,
          {
              "insertId": result.insertId,
              "user_id":userData.user_id,
              "initial_amount":userData.initial_amount,
              "total_installments":userData.total_installments,
              "interest_rate":userData.interest_rate,
              "installment_amount":userData.installment_amount,
              "reason":userData.reason,
              "status":result[7]
          }
        );
      }
    }
  );
  }
};
module.exports=userModel;
