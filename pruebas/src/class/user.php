<?php 

use \Firebase\JWT\JWT;
class User
{
    private $user_id;
    private $client_id;
    private $client_secret;
    private $token;
    
    public function __construct()
{

        $this->user_id= "";
        $this->client_id = "";
        $this->client_secret = "";
        $this->token = "";

}

    
    public function getUser_id() {
        return $this->user_id;
    }

    public function setUser_id($id) {
        $this->user_id = $id;
    }
    
    public function getClient_id() {
        return $this->client_id;
    }

    public function setClient_id($id) {
        $this->client_id = $id;
    }
    public function getClient_secret() {

        return $this->client_secret;
    }

    public function setClient_secret($requestid) {
    /*	$pass = hash("sha256", $requestid);
        $this->client_secret = $pass;*/
        $this->client_secret = $requestid;
    }
    
    public function getToken() {
        return $this->token;
    }

    public function setToken($token) {
        $this->token = $token;
    }
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }


 /*
    INSERT INTO `user` (`user_id`, `client_id`, `client_secret`, `token`) VALUES ('1', 'desarrollador', '9ff772b2f7bc2efe8a884e75c190e488db8b6ac98e71593815aac9424ba7a03f', 'ss');
 */
    public function login(){
    	$sql_prod="SELECT * FROM `users` WHERE email = '$this->email' AND password= '$this->password'";  
    	 $sql_token="UPDATE `users` SET `token`=:token WHERE `id`=:user_id"; 
         try {
        $db = new db();
        $db = $db->conectDB();
        $result_prod = $db->query($sql_prod);
            if($result_prod->rowCount()>0){
                $user_login = $result_prod->fetchAll(PDO::FETCH_OBJ);
                foreach ($user_login as $key) {
                    $user_id = $key->id;
                    $firstname = $key->first_name;
                    $lastname = $key->last_name;

                } 


                //--------------------------------------------------//

        $secret_key = "fiado_productores_2020";
        $issuer_claim = "chiltex"; // this can be the servername
        $audience_claim = "fia2";
        $issuedat_claim = time(); // issued at
        $notbefore_claim = $issuedat_claim + 10; //not before in seconds
        $expire_claim = $issuedat_claim + 600; // expire time in seconds
        $token = array(
            "iss" => $issuer_claim,
            "aud" => $audience_claim,
            "iat" => $issuedat_claim,
            "nbf" => $notbefore_claim,
            "exp" => $expire_claim,
            "data" => array(
                "id" => $id,
                "firstname" => $firstname,
                "lastname" => $lastname,
                "email" => $this->email
        ));

        http_response_code(200);

        $jwt = JWT::encode($token, $secret_key);
                //--------------------------------------------------//
               // $token=bin2hex(openssl_random_pseudo_bytes(8));

                                 $result_request = $db->prepare($sql_token);
                                $result_request->bindParam(':user_id',$user_id);
                                $result_request->bindParam(':token',$jwt);
                                 $result_request->execute();
                                 session_start();
                                    session_unset();
                                               $_SESSION['token']=$jwt;
                                               
                                 $respon= array();
                                 $respon['status']=200;
                                 $respon['error']='false';
                                 $respon['jwt']=$jwt;
                                 $respon['expireAt']=$expire_claim;

                                 return $respon;

            }else{
                   $respon = array();
            $respon['status']=400;
            $respon['error']='true';
            $respon['message']="User or Pass, incorrect";
           return  json_encode($respon);
            }
             
         } catch (PDOException $e) {
                  $respon = array();
            $respon['status']=400;
            $respon['error']='true';
            $respon['message']='Ocurrio un error al consultar';
            $respon['request']=$e->getMessage();
            return json_encode($respon);
         }
    }
}