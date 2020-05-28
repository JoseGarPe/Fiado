<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

use \Firebase\JWT\JWT;
$app = new \Slim\App;

    $app->response->headers['Content-type'] ='application/json';
    $app->response->headers['secret_id'] ='user';
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Allow: GET, POST, OPTIONS, PUT, DELETE");
    $method = $_SERVER['REQUEST_METHOD'];
    if($method == "OPTIONS") {
        die();
    }
    function jwt_token($client_secret, $id_secret){
        
    //client_secret & client_id 
    // desarrollador;
   $client_dev='4ba4e43af92ba04145ed3b987b3d238ec2fe3d39a4d1a5a29e85c89113aed745';
   $id_dev='725e5a219d91686cee29d5734d835d8b35745e880f718fbeda30064a66d1a9aa';
   // Aplaudo
   $client_appl='613cda37ef3c7be55a607a697e6389eaa0ed86c6eed804574d360fe45b1896b6';
   $id_appl='7e26e8e19f60c97a9e0b57fe7567e757894f691ac1c430e23eded80b47c0531b';
   // Usuario normal
   $client_user='198146354625538ee717c0b50db16adbf51dc7aa708a3821e65af4b6546409da';
   $id_user='d278e71ded2f4fe6b00e3125373fe280b1f4de389b3d01aa94972990b616f3fd';
   //-----------------------------------------------------------------------------//
        if ($client_secret==$client_dev && $id_secret==$id_dev) {
                    
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
                         "id_secret" => $id_secret,
                         "client_secret" => $client_secret
                 ));
         
                 http_response_code(200);
         
                 $jwt = JWT::encode($token, $secret_key);
           
           
            $respon=array();
            http_response_code(200);
            $respon['error']='false';
            $respon['message']='User was succesfully registered.';
            $respon['token']=$jwt;
           // echoResponse(200,$respon);
        
           return json_encode($respon);
                }
                elseif($client_secret==$client_appl && $id_secret==$id_appl){
                          
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
                         "id_secret" => $id_secret,
                         "client_secret" => $client_secret
                 ));
         
                 http_response_code(200);
         
                 $jwt = JWT::encode($token, $secret_key);
                        $respon=array();
                        http_response_code(200);
                        $respon['error']='false';
                        $respon['message']='User was succesfully registered.';
                        $respon['token']=$jwt;
                    // echoResponse(200,$respon);
        
                    return json_encode($respon);
                }
                elseif ($client_secret==$client_user && $id_secret==$id_user) {             
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
                                 "id_secret" => $id_secret,
                                 "client_secret" => $client_secret
                         ));
                 
                         http_response_code(200);
                 
                         $jwt = JWT::encode($token, $secret_key);
                                $respon=array();
                                http_response_code(200);
                                $respon['error']='false';
                                $respon['message']='User was succesfully registered.';
                                $respon['token']=$jwt;
                            // echoResponse(200,$respon);
                
                            return json_encode($respon);
                   
                }
                else{
                    $respon=array();
                    http_response_code(400);
                    $respon['error']='true';
                    $respon['message']='Invalid credentials.';
                // echoResponse(200,$respon);
        
                return json_encode($respon);
                }
        
    }
 function echoResponse($status_code, $response) {
$app = new \Slim\App;
// Http response code
$app->status($status_code);
 
echo json_encode($response);
}
$authtentication=function() use($app){

   
   // $user=$app->request->headers->get('HTTP_TOKEN');
   /* $user= $app->response->headers['token'];
    session_start();
    $local_token=$_SESSION['token'];
    if ($user!=$local_token) {
        
            $respon = array();
            $respon['status']=400;
            $respon['error']='true';
            $respon['message']='TOKEN LOST';
            $respon['token1']=$local_token;
            $respon['token2']=$user;
            echo json_encode($respon);
    }elseif (!isset($_SESSION['token'])) {
            $respon = array();
            $respon['status']=400;
            $respon['error']='true';
            $respon['message']='TOKEN NULL';
          
            echo json_encode($respon);
    }elseif (!isset($user)) {
        #    $respon = array();
            $respon['status']=400;
            $respon['error']='true';
            $respon['message']='TOKEN no SPECIFY';
          
            echo json_encode($respon);
    }*/

};



// GET TIPOS DE PRODUCTORES 
$app->get('/api/type_prod',function(Request $request, Response $response)use($app){
    try {
                                                       
        $user_request = new Producer();
        $data=$user_request->selectAll_type_prod();
        $respon=array();
        //$data['Headers']= $app->response->headers['Content-type'] ;
        //$app->response->setStatus(201);
            if (!empty($data)) {
                http_response_code(200);
                $respon['success']='true';
                $respon['data']=$data;
                echo json_encode($respon);
         //   echo $response->withJson($respon,201);  //imprime un json con status 200: OK CREATED
            }
    }catch (Exception $e){

    http_response_code(401);

   $respon= array(
        "message" => "Access denied.",
        "error" => $e->getMessage()
    );
    echo json_encode($respon);
 //echo $response->withJson($respon,401);

     }
});
// GET TIPOS DE Usuarios
$app->get('/api/type_user',function(Request $request, Response $response)use($app){
    try {
                                                       
        $user_request = new User();
        $data=$user_request->selectAll_type_user();
        $respon=array();
        //$data['Headers']= $app->response->headers['Content-type'] ;
        //$app->response->setStatus(201);
            if (!empty($data)) {
                http_response_code(200);
                $respon['success']='true';
                $respon['data']=$data;
                echo json_encode($respon);
         //   echo $response->withJson($respon,201);  //imprime un json con status 200: OK CREATED
            }
    }catch (Exception $e){

    http_response_code(401);

   $respon= array(
        "message" => "Access denied.",
        "error" => $e->getMessage()
    );
    echo json_encode($respon);
 //echo $response->withJson($respon,401);

     }
});

//GET Todas las consultas

$app->get('/api/loansR',function(Request $request, Response $response)use($app){
  
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
    $sql ="SELECT * FROM request";
    $headers=$request->getHeaders();
    try{
           $db = new db();
            $db = $db->conectDB();
            $result = $db->query($sql);
            if($result->rowCount()>0){
                $solicitud = $result->fetchAll(PDO::FETCH_OBJ);
             // $solicitud['header']= $arrayName = array('Content-type' => $app->response->headers['Content-type'], 'secret_id'=>$app->response->headers['secret_id']); 
             // $solicitud['header']= $app->response->headers['secret_id'] ;
              //  $solicitud['header']=$headers['Content-type'];
                $respon = array();
                $respon['error']='false';
                $respon['message']='Datos Solicitudes';
                $respon['request']=$solicitud;
          
                echo $response->withJson($respon,201);
            }else{
                echo json_encode("No existen solicitudes en la Base");
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
});


//GET una solicitud

$app->get('/api/clientes/{id}', function(Request $request, Response $response){

  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
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
        
            $respon = array();
            $respon['status']=400;
            $respon['error']='true';
            $respon['message']='Ocurrio un error al consultar';
            $respon['request']=$e.getMessage();
            json_encode($respon);
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

$app->post('/api/loans', function(Request $request, Response $response){
  /* OBETENER VALORES DEL METODO POST*/
  if ($request->getParam('user_id') !=null){
   $user_id =$request->getParam('user_id');
    if ($request->getParam('initial_amount')!=null) {
      $initial_amount = $request->getParam('initial_amount');
       if ($request->getParam('total_installments')!=null) {
            $total_installments=$request->getParam('total_installments');
          if ($request->getParam('interest_rate')!=null) {
                 $interest_rate=$request->getParam('interest_rate');
                 if ($request->getParam('installment_amount')!=null) {
                  $installment_amount=$request->getParam('installment_amount');
                  if ($request->getParam('reason')!=null) {
                                          
                        $reason=$request->getParam('reason');
                        $status='Solicitado';
                  }else{

                    $respon = array();
                    $respon['status']=400;
                    $respon['error']='true';
                    $respon['message']='Failed to receive request';
                    echo $response->withJson($respon,400); 
                  }
                  }else{
                    $respon = array();
                    $respon['status']=400;
                    $respon['error']='true';
                    $respon['message']='Failed to receive request';
                    echo $response->withJson($respon,400); 


                  }
              
          }else{
            $respon = array();
            $respon['status']=400;
            $respon['error']='true';
            $respon['message']='Failed to receive request';
            echo $response->withJson($respon,400); 

          }
        } else{
            $respon = array();
            $respon['status']=400;
            $respon['error']='true';
            $respon['message']='Failed to receive request';
            echo $response->withJson($respon,400); 

        }
     }else{

      $respon = array();
            $respon['status']=400;
            $respon['error']='true';
            $respon['message']='Failed to receive request';
            echo $response->withJson($respon,400);     
     }
  }else{
      $respon = array();
            $respon['status']=400;
            $respon['error']='true';
            $respon['message']='Failed to receive request';
           
           
           echo $response->withJson($respon,400);       

  }
  /* VALIDAR TOKEN---*/
        $headers=$request->getHeaders();

    if (isset($headers['HTTP_AUTHORIZATION']) || $headers['HTTP_AUTHORIZATION'] != NULL) {
      
    $authHeader=$headers['HTTP_AUTHORIZATION'];
    
    $arr=explode(" ",$authHeader[0]);
    $jwt=$arr[1];  
    //  $jwt=$authHeader[0];
           $secret_key = "fiado_productores_2020";
              try {
                  $decoded = JWT::decode($jwt, $secret_key, array('HS256'));
                  // Access is granted. Add code of the operation here 
                  /*echo json_encode(array(
                      "message" => "Access granted:"
                  ));*/
                 //query mysql
                            $sql ="INSERT INTO `request`(`request_id`, `user_id`, `initial_amount`, `total_installments`, `interest_rate`, `installment_amount`, `reason`, `status`) VALUES(null,:user_id,:initial_amount,:total_installments,:interest_rate,:installment_amount,:reason,:status)";
                            try{
                                $db = new db();
                                $db = $db->conectDB();
                                $result = $db->prepare($sql);
                                //ENVIAR DATOS A LOS PARAMETROS DE LA CONSULTA
                                $result->bindParam(':user_id',$user_id);
                                $result->bindParam(':initial_amount',$initial_amount);
                                $result->bindParam(':total_installments',$total_installments);
                                $result->bindParam(':interest_rate',$interest_rate);
                                $result->bindParam(':installment_amount',$installment_amount);
                                $result->bindParam(':reason',$reason);
                                $result->bindParam(':status',$status);
                                $result->execute();
                                if($result->rowCount() >0){
                                 $data=array();
                                     $req_entri= array();
                                     $req_entri['user_id']=$user_id;
                                     $req_entri['initial_amount']=$initial_amount;
                                     $req_entri['total_installments']=$total_installments;
                                     $req_entri['interest_rate']=$interest_rate;
                                     $req_entri['installment_amount']=$installment_amount;
                                     $req_entri['reason']=$reason;

                                 $data['success']=true;
                                 $data['msg']='Request Received';
                                 $data['request']=$req_entri;
                                   // echo json_encode($data);
                                   echo $response->withJson($data,201);

                                }else{
                                        $respon = array();
                                    $respon['status']=500;
                                    $respon['error']='true';
                                    $respon['message']='Failed to receive request';
                                   
                                   
                                   echo $response->withJson($respon,500);        }
                             
                                $result = null;
                                $db=null;
                            }catch(PDOException $e){
                                
                                    $respon = array();
                                    $respon['status']=400;
                                    $respon['error']='true';
                                    $respon['message']='Ocurrio un error al consultar';
                                    $respon['request']=$e.getMessage();
                                 
                                   echo $response->withJson($respon,500);   
                            }


              }catch (Exception $e){

              http_response_code(401);

             $respon= array(
                  "message" => "Access denied.",
                  "error" => $e->getMessage(),
                  "key"=>$authHeader

              );
           echo $response->withJson($respon,401);
       
          }
    }else{
             $respon= array(
                  "message" => "Access denied.",
                  "error" => "Token not Found"

              );
           echo $response->withJson($respon,401);
    }

});


//PUT ACTUALIZAR solicitud

$app->put('/api/request/update/{id}', function(Request $request, Response $response){
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
        
            $respon = array();
            $respon['status']=400;
            $respon['error']='true';
            $respon['message']='Ocurrio un error al consultar';
            $respon['request']=$e.getMessage();
            json_encode($respon);
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
        
            $respon = array();
            $respon['status']=400;
            $respon['error']='true';
            $respon['message']='Ocurrio un error al consultar';
            $respon['request']=$e.getMessage();
            json_encode($respon);
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
//* 
$app->post('/api/producerContribution/new', function(Request $request, Response $response){
    $user_id_prod =$request->getParam('user_id_prod');
    $contribution_amount = $request->getParam('contribution_amount');
    $request_id=$request->getParam('request_id');
   
   
    $producer_response = new Producer_Response();
    $producer_response->setUser_id_prod($user_id_prod);
    $producer_response->setRequest_id($request_id);
    $producer_response->setContribution_amount($contribution_amount);
    $data=$producer_response->save();
    $respon=array();
    //$data['Headers']= $app->response->headers['Content-type'] ;
    //$app->response->setStatus(201);
        if (!empty($data)) {
            $respon['success']='true';
            $respon['data']=$data;

           echo $response->withJson($respon,201);  //imprime un json con status 200: OK CREATED
        }
   // echoResponse(200,$respon);

   echo json_encode($data);
});

//*--------------------------LOGIN-----------------**/
$app->post('/api/login', function(Request $request, Response $response){
    $email=$request->getParam('email');
    $password = $request->getParam('password');
   
   
    $user = new User();
    $user->setEmail($email);
    $user->setPassword($password);
    $data=$user->login();
    $respon=array();
    //$data['Headers']= $app->response->headers['Content-type'] ;
    http_response_code(200);
    $respon['error']='false';
    $respon['message']='User was succesfully registered.';
    $respon['user_data']=$data;
   // echoResponse(200,$respon);

   echo json_encode($respon);
});
//*--------------------------LOGIN-----------------**/
$app->post('/api/jwt/token', function(Request $request, Response $response){
    if ($request->getParam('client_secret')!=null) {
        $client_secret=$request->getParam('client_secret');
        if ($request->getParam('id_secret')!=null) {
            $id_secret= $request->getParam('id_secret');
            // VALIDAR SI CLIENT_SECRET Y ID_SECRET SON CORRECTOS
            try {
               echo jwt_token($client_secret,$id_secret);
            } catch (Exception $e){
                http_response_code(401);
               $respon= array(
                    "message" => "Access denied.",
                    "error" => $e->getMessage()
                );
             echo $response->withJson($respon,401);
            }
            // END VALIDACION
        }else{
            $respon=array();
            http_response_code(400);
            $respon['error']='true';
            $respon['message']='Invalid credentials, id_secret not found';
            // echoResponse(200,$respon);
            echo json_encode($respon);
        }
    }else{
        
        $respon=array();
        http_response_code(400);
        $respon['error']='true';
        $respon['message']='Invalid credentials, client_secret not found';
        // echoResponse(200,$respon);
        echo json_encode($respon);
    }
 });
//*--------------------------VALIDAR TOKEN-----------------**/
$app->get('/api/protected', function(Request $request, Response $response)use($app){
 
 /*  
    $user = new User();
    $user->setEmail($email);
    $user->setPassword($password);
    $data=$user->login();
    $respon=array();*/
 // $authHeader= $app->response->headers['Authorization'];
    $headers=$request->getHeaders();

    if (isset($headers['HTTP_AUTHORIZATION']) || $headers['HTTP_AUTHORIZATION'] != NULL) {
      
    $authHeader=$headers['HTTP_AUTHORIZATION'];

        $arr=explode(" ",$authHeader[0]);
        $jwt=$arr[1];
           $secret_key = "fiado_productores_2020";
              try {

                  $decoded = JWT::decode($jwt, $secret_key, array('HS256'));

                  // Access is granted. Add code of the operation here 
                 

                  echo json_encode(array(
                      "message" => "Access granted:",
                      "DATA"=>$decoded,
                  ));

              }catch (Exception $e){

              http_response_code(401);

             $respon= array(
                  "message" => "Access denied.",
                  "error" => $e->getMessage(),
                  "key"=>$authHeader

              );
           echo $response->withJson($respon,401);
           /*   $headers = $request->getHeaders();
          foreach ($headers as $name => $values) {
              echo $name . ": " . implode(", ", $values);
          }
          $headers=$request->getHeader("HTTP_AUTHORIZATION");
           
            $arr =implode(" ",$headers);
            $jwt=$arr[1];
            echo $jwt;*/
          }
    }else{
             $respon= array(
                  "message" => "Access denied.",
                  "error" => "Token not Found"

              );
           echo $response->withJson($respon,401);
    }
   /* foreach ($headers as $key) {
       $authHeader=$key->HTTP_AUTHORIZATION;
    }*/
  
   
 //  $arr =explode(" ",$authHeader);
 //  $jwt=$arr[1];


/*  http_response_code(200);
    $respon['error']='false';
    $respon['message']='User was succesfully registered.';
  $respon['user_data']=$data;
   echoResponse(200,$respon);

   echo json_encode($respon);*/
});
//----------------------------------------------------------------------------------------------------------//
//-------------------------------------- insertar usuario --------------------------------------------------//
$app->post('/api/user/new', function(Request $request, Response $response){
    if ($request->getParam('first_name') !=null){
        $first_name =$request->getParam('first_name');
        if ($request->getParam('last_name') !=null){
            $last_name =$request->getParam('last_name');
            if ($request->getParam('email') !=null){
                $email =$request->getParam('email');
                if ($request->getParam('password') !=null){
                    $password =$request->getParam('password');
                    if ($request->getParam('user') !=null){
                        $user =$request->getParam('user');
                        if ($request->getParam('direccion') !=null){
                            $direccion =$request->getParam('direccion');
                            if ($request->getParam('country') !=null){
                                $country =$request->getParam('country');
                                if ($request->getParam('state') !=null){
                                    $state =$request->getParam('state');
                                    if ($request->getParam('city') !=null){
                                        $city =$request->getParam('city');
                                        if ($request->getParam('zip') !=null){
                                            $zip =$request->getParam('zip');
                                            if ($request->getParam('type_user') !=null){
                                                $type_user =$request->getParam('type_user');

                                                try {
                                                       
                                                    $user_request = new User();
                                                    $user_request->setFirst_name($first_name);
                                                    $user_request->setLast_name($last_name);
                                                    $user_request->setEmail($email);
                                                    $user_request->setPassword($password);
                                                    $user_request->setUser($user);
                                                    $user_request->setDireccion($direccion);
                                                    $user_request->setCountry($country);
                                                    $user_request->setState($state);
                                                    $user_request->setCity($city);
                                                    $user_request->setZip($zip);
                                                    $user_request->setType_user($type_user);
                                                    $data=$user_request->save();
                                                    $respon=array();
                                                    //$data['Headers']= $app->response->headers['Content-type'] ;
                                                    //$app->response->setStatus(201);
                                                        if (!empty($data)) {
                                                            http_response_code(200);
                                                            $respon['success']='true';
                                                            $respon['data']=$data;
                                                            echo json_encode($respon);
                                                     //   echo $response->withJson($respon,201);  //imprime un json con status 200: OK CREATED
                                                        }
                                                }catch (Exception $e){
                                  
                                                http_response_code(401);
                                  
                                               $respon= array(
                                                    "message" => "Access denied.",
                                                    "error" => $e->getMessage(),
                                                    "key"=>$authHeader
                                  
                                                );
                                             echo $response->withJson($respon,401);
                                           
                                                 }
                                            }else{
                                                http_response_code(400);
                                                $respon = array();
                                                $respon['status']=400;
                                                $respon['error']='true';
                                                $respon['message']='Failed to receive request';
                                                echo json_encode($respon);
                                        
                                            }
                                        }else{
                                            http_response_code(400);
                                            $respon = array();
                                            $respon['status']=400;
                                            $respon['error']='true';
                                            $respon['message']='Failed to receive request';
                                            echo json_encode($respon);
                                    
                                        }
                                    }else{
                                        http_response_code(400);
                                        $respon = array();
                                        $respon['status']=400;
                                        $respon['error']='true';
                                        $respon['message']='Failed to receive request';
                                        echo json_encode($respon);
                                
                                    }
                                }else{
                                    http_response_code(400);
                                    $respon = array();
                                    $respon['status']=400;
                                    $respon['error']='true';
                                    $respon['message']='Failed to receive request';
                                    echo json_encode($respon);
                            
                                }
                            }else{
                                http_response_code(400);
                                $respon = array();
                                $respon['status']=400;
                                $respon['error']='true';
                                $respon['message']='Failed to receive request';
                                echo json_encode($respon);
                        
                            }
                        }else{
                            http_response_code(400);
                            $respon = array();
                            $respon['status']=400;
                            $respon['error']='true';
                            $respon['message']='Failed to receive request';
                            echo json_encode($respon);
                    
                        }
                    }else{
                        http_response_code(400);
                        $respon = array();
                        $respon['status']=400;
                        $respon['error']='true';
                        $respon['message']='Failed to receive request';
                        echo json_encode($respon);
                
                    }
                }else{
                    http_response_code(400);
                    $respon = array();
                    $respon['status']=400;
                    $respon['error']='true';
                    $respon['message']='Failed to receive request';
                    echo json_encode($respon);
            
                }
            }else{
                http_response_code(400);
                $respon = array();
                $respon['status']=400;
                $respon['error']='true';
                $respon['message']='Failed to receive request';
                echo json_encode($respon);
        
            }
        }else{
            http_response_code(400);
            $respon = array();
            $respon['status']=400;
            $respon['error']='true';
            $respon['message']='Failed to receive request';
            echo json_encode($respon);
    
        }
    }else{
        http_response_code(400);
        $respon = array();
        $respon['status']=400;
        $respon['error']='true';
        $respon['message']='Failed to receive request';
        echo json_encode($respon);

    }

   // echoResponse(200,$respon);

  // echo json_encode($data);
});

//----------------------------------------------------------------------------------------------------------//
//----------------------------------------------------------------------------------------------------------//
//-------------------------------------- insertar producer --------------------------------------------------//
$app->post('/api/producer/new', function(Request $request, Response $response){
    if ($request->getParam('first_name') !=null){
        $first_name =$request->getParam('first_name');
        if ($request->getParam('last_name') !=null){
            $last_name =$request->getParam('last_name');
            if ($request->getParam('email') !=null){
                $email =$request->getParam('email');
                if ($request->getParam('password') !=null){
                    $password =$request->getParam('password');
                    if ($request->getParam('user') !=null){
                        $user =$request->getParam('user');
                        if ($request->getParam('direccion') !=null){
                            $direccion =$request->getParam('direccion');
                            if ($request->getParam('country') !=null){
                                $country =$request->getParam('country');
                                if ($request->getParam('state') !=null){
                                    $state =$request->getParam('state');
                                    if ($request->getParam('city') !=null){
                                        $city =$request->getParam('city');
                                        if ($request->getParam('zip') !=null){
                                            $zip =$request->getParam('zip');
                                            if ($request->getParam('id_type_prod') !=null){
                                                $id_type_prod =$request->getParam('id_type_prod');

                                                try {
                                                       
                                                    $user_request = new Producer();
                                                    $user_request->setFirst_name($first_name);
                                                    $user_request->setLast_name($last_name);
                                                    $user_request->setEmail($email);
                                                    $user_request->setPassword($password);
                                                    $user_request->setUser($user);
                                                    $user_request->setDireccion($direccion);
                                                    $user_request->setCountry($country);
                                                    $user_request->setState($state);
                                                    $user_request->setCity($city);
                                                    $user_request->setZip($zip);
                                                    $user_request->setId_type_prod($id_type_prod);
                                                    $data=$user_request->save();
                                                    $respon=array();
                                                    //$data['Headers']= $app->response->headers['Content-type'] ;
                                                    //$app->response->setStatus(201);
                                                        if (!empty($data)) {
                                                            http_response_code(200);
                                                            $respon['success']='true';
                                                            $respon['data']=$data;
                                                            echo json_encode($respon);
                                                     //   echo $response->withJson($respon,201);  //imprime un json con status 200: OK CREATED
                                                        }
                                                }catch (Exception $e){
                                  
                                                http_response_code(401);
                                  
                                               $respon= array(
                                                    "message" => "Access denied.",
                                                    "error" => $e->getMessage(),
                                                    "key"=>$authHeader
                                  
                                                );
                                             echo $response->withJson($respon,401);
                                           
                                                 }
                                            }else{
                                                http_response_code(400);
                                                $respon = array();
                                                $respon['status']=400;
                                                $respon['error']='true';
                                                $respon['message']='Failed to receive request';
                                                echo json_encode($respon);
                                        
                                            }
                                        }else{
                                            http_response_code(400);
                                            $respon = array();
                                            $respon['status']=400;
                                            $respon['error']='true';
                                            $respon['message']='Failed to receive request';
                                            echo json_encode($respon);
                                    
                                        }
                                    }else{
                                        http_response_code(400);
                                        $respon = array();
                                        $respon['status']=400;
                                        $respon['error']='true';
                                        $respon['message']='Failed to receive request';
                                        echo json_encode($respon);
                                
                                    }
                                }else{
                                    http_response_code(400);
                                    $respon = array();
                                    $respon['status']=400;
                                    $respon['error']='true';
                                    $respon['message']='Failed to receive request';
                                    echo json_encode($respon);
                            
                                }
                            }else{
                                http_response_code(400);
                                $respon = array();
                                $respon['status']=400;
                                $respon['error']='true';
                                $respon['message']='Failed to receive request';
                                echo json_encode($respon);
                        
                            }
                        }else{
                            http_response_code(400);
                            $respon = array();
                            $respon['status']=400;
                            $respon['error']='true';
                            $respon['message']='Failed to receive request';
                            echo json_encode($respon);
                    
                        }
                    }else{
                        http_response_code(400);
                        $respon = array();
                        $respon['status']=400;
                        $respon['error']='true';
                        $respon['message']='Failed to receive request';
                        echo json_encode($respon);
                
                    }
                }else{
                    http_response_code(400);
                    $respon = array();
                    $respon['status']=400;
                    $respon['error']='true';
                    $respon['message']='Failed to receive request';
                    echo json_encode($respon);
            
                }
            }else{
                http_response_code(400);
                $respon = array();
                $respon['status']=400;
                $respon['error']='true';
                $respon['message']='Failed to receive request';
                echo json_encode($respon);
        
            }
        }else{
            http_response_code(400);
            $respon = array();
            $respon['status']=400;
            $respon['error']='true';
            $respon['message']='Failed to receive request';
            echo json_encode($respon);
    
        }
    }else{
        http_response_code(400);
        $respon = array();
        $respon['status']=400;
        $respon['error']='true';
        $respon['message']='Failed to receive request';
        echo json_encode($respon);

    }

   // echoResponse(200,$respon);

  // echo json_encode($data);
});

//----------------------------------------------------------------------------------------------------------//



?>