<?php
<?php 
class Producer
{
    private $id_user;
    private $user_id_prod;
    private $amount_fund;
    private $id_type_prod;
    private $retenido;
    
    public function __construct()
{

        $this->id_user= "";
        $this->user_id_prod = "";
        $this->amount_fund = "";
        $this->id_type_prod = "";
        $this->retenido = "";

}
   // functions getter and setter
public function getId_user() {
    return $this->id_user;
}

public function setId_user($id) {
    $this->id_user = $id;
}

public function getUser_id_prod() {
    return $this->user_id_prod;
}

public function setUser_id_prod($id) {
    $this->user_id_prod = $id;
}
public function getAmount_fund() {
    return $this->amount_fund;
}

public function setAmount_fund($requestid) {
    $this->amount_fund = $requestid;
}

public function getId_type_prod() {
    return $this->id_type_prod;
}

public function setId_type_prod($id_type_prod) {
    $this->id_type_prod = $id_type_prod;
}
public function getRetenido() {
    return $this->retenido;
}

public function setRetenido($retenido) {
    $this->retenido = $retenido;
}

//--------------------------------------------------------------//
//--------------------------------------------------------------//
//----------------------GETTER Y SETTER USUARIOS----------------//

 
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





//--------------------------------------------------------------//
//--------------------------------------------------------------//


public function save(){
    $sql_user ="INSERT INTO `users`(`id`, `first_name`, `last_name`, `email`, `password`, `user`, `direccion`, `country`, `state`, `city`, `zip`, `id_type_user`) VALUES(null, :first_name, :last_name, :email, :pass, :user,:direccion, :country, :states, :city, :zip , :id_type_user)";
    $sql_last_user="SELECT * FROM users ORDER BY id_user DESC LIMIT 1";
    $sql_producer= "INSERT INTO `producer`(`user_id_prod`, `id_type_prod`, `id_user`, `amount_fund`, `retenido`) VALUES(NULL,:id_type_prod,:id_user,0.00,0.00)";
    try {
        $db = new db();
        $db = $db->conectDB();
        $result = $db->prepare($sql_user);
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
            $result_user = $db->query($sql_last_user);
            // OBTENER DATOS DEL usuario 
                if($result_user->rowCount()>0){
                    $productor = $result_user->fetchAll(PDO::FETCH_OBJ);
                    foreach ($productor as $value) {
                        $user_register=$value->user_id;
                    }
                    $result_prod = $db->prepare($sql_producer);
                    $result_prod->bindParam(':id_type_prod',$this->id_type_prod);
                    $result_prod->bindParam(':id_user',$user_register);
                    if ($result_prod->rowCount()>0) {
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
                }else{
                    echo json_encode("Ocurrio un error al registrar el usuario");
                }
        
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

  

}//end class producer
?>