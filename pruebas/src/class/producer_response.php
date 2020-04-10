<?php 
class Producer_Response
{
    private $response_id;
    private $user_id_prod;
    private $request_id;
    private $contribution_amount;
    
    public function __construct()
{

        $this->response_id= "";
        $this->user_id_prod = "";
        $this->request_id = "";
        $this->contribution_amount = "";

}
    
    public function getResponse_id() {
        return $this->response_id;
    }

    public function setResponse_id($id) {
        $this->response_id = $id;
    }
    
    public function getUser_id_prod() {
        return $this->user_id_prod;
    }

    public function setUser_id_prod($id) {
        $this->user_id_prod = $id;
    }
    public function getRequest_id() {
        return $this->request_id;
    }

    public function setRequest_id($requestid) {
        $this->request_id = $requestid;
    }
    
    public function getContribution_amount() {
        return $this->contribution_amount;
    }

    public function setContribution_amount($contribution_amount) {
        $this->contribution_amount = $contribution_amount;
    }
    
    
    public function save(){
         $sql ="INSERT INTO `response_producer`(`response_id`, `user_id_prod`, `request_id`, `contribution_amount`) VALUES (null,:user_id_prod,:request_id,:contribution_amount)";
         $sql_prod="SELECT * FROM `producer` WHERE user_id_prod = $this->user_id_prod";
         $sql_request_update="UPDATE `request` SET `amount_entered`=:amount_entered WHERE `request_id`=:request_id"; 
         $sql_producer_update="UPDATE `producer` SET `amount_fund`=:amount_fund WHERE `user_id_prod`=:user_id_prod"; 
         $sql_request="SELECT * FROM `request` WHERE request_id = $this->request_id";
    try{
        $db = new db();
        $db = $db->conectDB();
        $result_prod = $db->query($sql_prod);
        $result_request = $db->query($sql_request);
        // OBTENER DATOS DEL PRODUCTOR
            if($result_prod->rowCount()>0){
                $productor = $result_prod->fetchAll(PDO::FETCH_OBJ);

            }else{
                echo json_encode("No existen productores en la Base");
            }
         // OBTENER DATOS DE LA SOLICITUD
            if($result_request->rowCount()>0){
                $solicitud = $result_request->fetchAll(PDO::FETCH_OBJ);

            }else{
                echo json_encode("No existen Solicitudes en la Base");
            }   
            //datos productor
            foreach((array)$productor as $value){
                $fondos = $value->amount_fund;
            }
            // datos solicitud
        
            foreach($solicitud as $value2){
                $cantidad_ingresada= $value2->amount_entered;
                $user_id = $value2->user_id;
                $initial_amount =$value2->initial_amount;
            }

            if($this->contribution_amount <= $fondos){
                
                
                $actu_cantidad = $cantidad_ingresada + $this->contribution_amount;
                $fondeo_total=($actu_cantidad/$initial_amount)*100;
                
                $result = $db->prepare($sql);
                $result->bindParam(':user_id_prod',$this->user_id_prod);
                $result->bindParam(':request_id',$this->request_id);
                $result->bindParam(':contribution_amount',$this->contribution_amount);
                $result->execute();
                        if($result->rowCount() >0){
                              $result_request = $db->prepare($sql_request_update);
                                $result_request->bindParam(':request_id',$this->request_id);
                                $result_request->bindParam(':amount_entered',$actu_cantidad);
                            $result_request->execute();
                            if ($result_request->rowCount()>0) {
                                $fondos_actualizados = $fondos-$this->contribution_amount;
                                   $result_producer = $db->prepare($sql_producer_update);
                                $result_producer->bindParam(':user_id_prod',$this->user_id_prod);
                                $result_producer->bindParam(':amount_fund',$fondos_actualizados);
                            $result_producer->execute();
                            $data = array();
                                    $data['status']='201';
                                    $data['request_id']=$this->request_id;
                                    $data['contribution_amount']=$this->contribution_amount;
                                    $data['user_id_prod']=$this->user_id_prod;
                                    $data['user_id']=$user_id;
                                    $data['initial_amount']=$initial_amount;
                                    $data['amount_entered']=$actu_cantidad;
                                    $data['fondeo']=round($fondeo_total,2);
                                    return $data;

                            }else{
                                    $data = array();
                                    $data['status']='Contribution NOT Create';
                                    $data['request_id']='';
                                    $data['contribution_amount']='';
                                    $data['user_id_prod']='';
                                    $data['user_id']='';
                                    $data['initial_amount']='';
                                    $data['amount_entered']='';
                                    return $data;
                            }
                        }else{
                            
                        }
                
                            /** -Json response- */
                                   
            }else{
                       /** -Json response- */
                                   $data = array();
                                    $data['status']='Contribution NOT Create';
                                    $data['request_id']='';
                                    $data['contribution_amount']='';
                                    $data['user_id_prod']='';
                                    $data['user_id']='';
                                    $data['initial_amount']='';
                                    $data['amount_entered']='';
                                    return $data;
                
                
            }
        
        
            
         
     
        $result = null;
        $db=null;
    }catch(PDOException $e){
        
        $app->status(400);
        echo '{ "error": {"text":'.$e->getMessage().'}';
    }
        
    }
}
?>