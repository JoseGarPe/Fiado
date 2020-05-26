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
  

}//end class producer
?>