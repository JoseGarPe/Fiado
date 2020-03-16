const User = require('../models/user');
//module.exports = router;
module.exports = function(app){
  app.get('/api/requests',(req,res)=>{
    User.getUser((err,data)=>{
      res.status(200).json(data);
    });
  //  res.json([]);
});

app.post('/api/requests',(req,res)=>{
    const userData ={
      request_id:null,
      user_id:req.body.user_id,
      initial_amount:req.body.initial_amount,
      total_installments:req.body.total_installments,
      interest_rate:req.body.interest_rate,
      installment_amount:req.body.installment_amount,
      reason:req.body.reason,
      status:'Solicitado',
      amount_entered :0.00
    };
      User.insertRequest(userData,(err,data)=>{
        if (data) {
          res.status(200).json({
              success:true,
              msg:"Request Received",
              request: data
          });
        }else {
          res.status(501).json({
            success:false,
            msg:"Failed to receive request"
          });
        }
      });
});
 app.post('/api/Contribution',(req,res)=>{
   const userData={
     response_id:null,
     user_id_prod:req.body.user_id_prod,
      contribution_amount:req.body.contribution_amount,
      request_id:req.body.request_id
   };
   User.insertContribution(userData,(err,data)=>{
     if (data && data.insertId) {
       res.status(200).json({
         success:true,
         contribution_data:data
       });
     }else {
       res.status(500),json({
         success:false,
         msg:'Error'
       });
     }
   });
 });


}
