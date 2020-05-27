<?php 

use \Firebase\JWT\JWT;
class User
{
    private $user_id;
    private $client_id;
    private $client_secret;
    private $token;
    private $first_name;
    private $last_name;
    private $email;
    private $password;
    private $user;
    private $direccion;
    private $country;
    private $state;
    private $city;
    private $zip;
    private $created;
    private $modified;
    private $type_user;
    
    
    public function __construct()
{

        $this->user_id= "";
        $this->client_id = "";
        $this->client_secret = "";
        $this->token = "";
        $this->first_name= "";
        $this->last_name= "";
        $this->email= "";
        $this->password= "";
        $this->user= "";
        $this->direccion= "";
        $this->country= "";
        $this->state= "";
        $this->city= "";
        $this->zip= "";
        $this->created= "";
        $this->modified= "";
        $this->type_user= "";
        $this->user_status ="";

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

    
    public function getFirst_name() {
        return $this->first_name;
    }

    public function setFirst_name($first_name) {
        $this->first_name = $first_name;
    }

    
    public function getLast_name() {
        return $this->last_name;
    }

    public function setLast_name($last_name) {
        $this->last_name = $last_name;
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
        $this->password = hash("sha256", $password);
        //$this->password =  $password;
    }
    public function getUser() {
        return $this->user;
    }

    public function setUser($user) {
        $this->user = $user;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function getCountry() {
        return $this->country;
    }

    public function setCountry($country) {
        $this->country = $country;
    }
    public function getState() {
        return $this->state;
    }

    public function setState($state) {
        $this->state = $state;
    }
    public function getCity() {
        return $this->city;
    }

    public function setCity($city) {
        $this->city = $city;
    }
    public function getZip() {
        return $this->zip;
    }

    public function setZip($zip) {
        $this->zip = $zip;
    }

    public function getCreated() {
        return $this->created;
    }

    public function setCreated($created) {
        $this->created = $created;
    }
    public function getModified() {
        return $this->modified;
    }

    public function setModified($modified) {
        $this->modified = $modified;
    }

    
    public function getType_user() {
        return $this->type_user;
    }

    public function setType_user($type_user) {
        $this->type_user = $type_user;
    }
    public function getUser_status() {
        return $this->user_status;
    }

    public function setUser_status($user_status) {
        $this->user_status = $user_status;
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
   //     $issuer_claim = "chiltex"; // this can be the servername
   //     $audience_claim = "fia2";
        $issuedat_claim = time(); // issued at
        $notbefore_claim = $issuedat_claim + 10; //not before in seconds
        $expire_claim = $issuedat_claim + 600; // expire time in seconds
        $token = array(
   //         "iss" => $issuer_claim,
     //       "aud" => $audience_claim,
            "iat" => $issuedat_claim,
            "nbf" => $notbefore_claim,
            "exp" => $expire_claim,
            "data" => array(
                "id" => $user_id,
//                "firstname" => $firstname,
  //              "lastname" => $lastname,
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
    // ----------------------------------------------------------------------------------------------------------------------//
    // ----------------------------------------------------------------------------------------------------------------------//
    // ------------------------------------------------INSERT USERS----------------------------------------------------------//
    // ----------------------------------------------------------------------------------------------------------------------//
    // ----------------------------------------------------------------------------------------------------------------------//
    public function save(){
        $sql ="INSERT INTO `users`(`id`, `first_name`, `last_name`, `email`, `password`, `user`, `direccion`, `country`, `state`, `city`, `zip`, `id_type_user`) VALUES(null, :first_name, :last_name, :email, :pass, :user,:direccion, :country, :states, :city, :zip , :id_type_user)";
        try {
            $db = new db();
            $db = $db->conectDB();
            $result = $db->prepare($sql);
            $result->bindParam(':first_name',$this->first_name);
            $result->bindParam(':last_name',$this->last_name);
            $result->bindParam(':email',$this->email);
            $result->bindParam(':pass',$this->password);
            $result->bindParam(':user',$this->user);
            $result->bindParam(':direccion',$this->direccion);
            $result->bindParam(':country',$this->country);
            $result->bindParam(':states',$this->state);
            $result->bindParam(':city',$this->city);
            $result->bindParam(':zip',$this->zip);
            $result->bindParam(':id_type_user',$this->type_user);
            $result->execute();
            if($result->rowCount() >0){
                $data = array();
                $data['status']='201';
                $data['message']='User successfully created';
                return $data;
            }else{
                $data = array();
                $data['status']='400';
                $data['message']='User not created';
                return $data;
            }
        }catch(PDOException $e){
            $app->status(400);
            echo '{ "error": {"text":'.$e->getMessage().'}}';
        }
    }
//-----------------------------------------------------------//

public function selectAll_type_user(){
    $sql ="SELECT * FROM type_user";
    try{
           $db = new db();
            $db = $db->conectDB();
            $result = $db->query($sql);
            if($result->rowCount()>0){
                $solicitud = $result->fetchAll(PDO::FETCH_OBJ);
                $respon = array();
                $respon['error']='false';
                $respon['message']='Tipo de Usuarios';
                $respon['request']=$solicitud;
                return $respon;
            }else{
                $respon = array();
                $respon['error']='True';
                $respon['message']='Tipo de Usuarios No creados';
                $respon['request']='Not Found';
                return $respon;
            }
            $result = null;
            $db=null;
       
    }catch(PDOException $e){
            $respon = array();
            $respon['status']=400;
            $respon['error']='true';
            $respon['message']='Ocurrio un error al consultar';
            $respon['request']=$e.getMessage();
            echo json_encode($respon);
    }
}
}//end class