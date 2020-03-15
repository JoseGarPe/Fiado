<?php 
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
    	$pass = hash("sha256", $requestid);
        $this->client_secret = $pass;
    }
    
    public function getToken() {
        return $this->token;
    }

    public function setToken($token) {
        $this->token = $token;
    }

    public function login{
    	$sql_prod="SELECT * FROM `user` WHERE client_id = $this->client_id AND client_secret= $this->client_secret";  
    	 $sql_token="UPDATE `user` SET `token`=:token WHERE `user_id`=:user_id"; 
        $db = new db();
        $db = $db->conectDB();
        $result_prod = $db->query($sql_prod);
            if($result_prod->rowCount()>0){
                $user_login = $result_prod->fetchAll(PDO::FETCH_OBJ);
                foreach ($variable as $key) {
                	$user_id = $key->user_id;
                } $token=bin2hex(openssl_random_pseudo_bytes(8));

                				 $result_request = $db->prepare($sql_request_update);
                                $result_request->bindParam(':user_id',$user_id);
                                $result_request->bindParam(':token',$token);
                           		 $result_request->execute();
                           		 $respon= array();
                           		 $respon['status']=200;
                           		 $respon['error']='false';
                           		 $respon['token']=$token;
                           		 return $respon;

            }else{
            	   $respon = array();
            $respon['status']=400;
            $respon['error']='true';
            $respon['message']='User or Pass, incorrect';
            json_encode($respon);
            }
    }
}