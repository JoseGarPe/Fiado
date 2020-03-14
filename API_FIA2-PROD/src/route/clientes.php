<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

$app = new \Slim\App;

//GET Todas las consultas

$app->get('/api/clientes', function(Request $request, Response $response){
    $sql ="SELECT * FROM request";
  
    try{
        $db = new db();
        $db = $db->conectDB();
        $result = $db->query($sql);
        if($result->rowCount()>0){
            $solicitud = $result->fetchAll(PDO::FETCH_OBJ);
            echo json_encode($solicitud);
        }else{
            echo json_encode("No existen solicitudes en la Base");
        }
        $result = null;
        $db=null;
    }catch(PDOException $e){
        
        echo '{ "error": {"text":'.$e.getMessage().'}}';
    }
});


//GET una solicitud

$app->get('/api/clientes/{id}', function(Request $request, Response $response){
    $id_cliente = $request->getAttribute('id');
    $sql ="SELECT * FROM request WHERE user_id=$id_cliente";
    try{
        $db = new db();
        $db = $db->conectDB();
        $result = $db->query($sql);
        if($result->rowCount()>0){
            $solicitud = $result->fetchAll(PDO::FETCH_OBJ);
            echo json_encode($solicitud);
        }else{
            echo json_encode("No existen solicitudes en la Base");
        }
        $result = null;
        $db=null;
    }catch(PDOException $e){
        
        echo '{ "error": {"text":'.$e.getMessage().'}}';
    }
});


//POST crear solicitud
/* 
    {
  "user_id":"15",
  "initial_amount":"1500",
  "total_installments":"7",
  "interest_rate":"0.15",
  "installment_amount":"25.5",
  "reason":"cirugia"
}
*/

$app->post('/api/clientes/nuevo', function(Request $request, Response $response){
    $user_id =$request->getParam('user_id');
    $initial_amount = $request->getParam('initial_amount');
    $total_installments=$request->getParam('total_installments');
    $interest_rate=$request->getParam('interest_rate');
    $installment_amount=$request->getParam('installment_amount');
    $reason=$request->getParam('reason');
    $status='Solicitado';
    $sql ="INSERT INTO `request`(`request_id`, `user_id`, `initial_amount`, `total_installments`, `interest_rate`, `installment_amount`, `reason`, `status`) VALUES(null,:user_id,:initial_amount,:total_installments,:interest_rate,:installment_amount,:reason,:status)";
    try{
        $db = new db();
        $db = $db->conectDB();
        $result = $db->prepare($sql);
        $result->bindParam(':user_id',$user_id);
        $result->bindParam(':initial_amount',$initial_amount);
        $result->bindParam(':total_installments',$total_installments);
        $result->bindParam(':interest_rate',$interest_rate);
        $result->bindParam(':installment_amount',$installment_amount);
        $result->bindParam(':reason',$reason);
        $result->bindParam(':status',$status);
        $result->execute();
        
            echo json_encode("Creado");
     
        $result = null;
        $db=null;
    }catch(PDOException $e){
        
        echo '{ "error": {"text":'.$e->getMessage().'}';
    }
});


//PUT ACTUALIZAR solicitud

$app->put('/api/clientes/update/{id}', function(Request $request, Response $response){
    $request_id =$request->getAttribute('id');
    $user_id =$request->getParam('user_id');
    $initial_amount = $request->getParam('initial_amount');
    $total_installments=$request->getParam('total_installments');
    $interest_rate=$request->getParam('interest_rate');
    $installment_amount=$request->getParam('installment_amount');
    $reason=$request->getParam('reason');
    $status='Solicitado';
    $sql ="UPDATE `request` SET `user_id`=:user_id,`initial_amount`=:initial_amount,`total_installments`=:total_installments,`interest_rate`=:interest_rate,`installment_amount`=:installment_amount,`reason`=:reason WHERE `request_id`=$request_id";
    try{
        $db = new db();
        $db = $db->conectDB();
        $result = $db->prepare($sql);
        $result->bindParam(':user_id',$user_id);
        $result->bindParam(':initial_amount',$initial_amount);
        $result->bindParam(':total_installments',$total_installments);
        $result->bindParam(':interest_rate',$interest_rate);
        $result->bindParam(':installment_amount',$installment_amount);
        $result->bindParam(':reason',$reason);
        $result->execute();
        
            echo json_encode("modificado");
     
        $result = null;
        $db=null;
    }catch(PDOException $e){
        
        echo '{ "error": {"text":'.$e->getMessage().'}';
    }
});



//PUT ELIMINAR solicitud

$app->delete('/api/clientes/delete/{id}', function(Request $request, Response $response){
    $request_id =$request->getAttribute('id');
    $sql ="DELETE FROM request WHERE `request_id`=$request_id";
    try{
        $db = new db();
        $db = $db->conectDB();
        $result = $db->prepare($sql);
        if($result->rowCount() >0){
            echo json_encode("Solicitud eliminada");
        }else{
            echo json_encode("Solicitud no existe");
        }
        $result->execute();
        
            echo json_encode("modificado");
     
        $result = null;
        $db=null;
    }catch(PDOException $e){
        
        echo '{ "error": {"text":'.$e->getMessage().'}';
    }
});

//POST crear solicitud
/* 
    {
  "user_id_prod":"1",
  "contribution_amount":"1500",
  "request_id":"1"
}
*/

$app->post('/api/ResponseProd/nuevo', function(Request $request, Response $response){
    $user_id_prod =$request->getParam('user_id_prod');
    $contribution_amount = $request->getParam('contribution_amount');
    $request_id=$request->getParam('request_id');
   
   
    $producer_response = new Producer_Response();
    $producer_response->setUser_id_prod($user_id_prod);
    $producer_response->setRequest_id($request_id);
    $producer_response->setContribution_amount($contribution_amount);
    $data=$producer_response->save();
    echo json_encode($data);
});
