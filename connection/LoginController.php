<?php 
session_start();
require_once "connection/ApiController.php";
$portCont = new portalController();

if (! empty($_GET["action"])) {
    switch ($_GET["action"]) {
      
         case "login":
            if(isset($_POST['login'])){
                $uid = $_POST['uid'];
                $password = md5($_POST['password']);
                $role = $_POST['role'];

                if(!empty($uid) && !empty($password) && !empty($password))
                {
                    $userCredentials = $portCont->userLogin($password, $uid, $role);
                    if(!empty($userCredentials))
                    {

                        $email = $userCredentials[0]["email"];
                        $code = rand(6666,9999);
                        $portCont->generatedMailValidation($email, $uid, $code);
                        require "api/mailler/securitymail.php";
                        
                        if($userCredentials[0]["designation"] == 1)
                        {
                            if($userCredentials[0]["status"] == 'VERIFIED')
                            {
                                $_SESSION['user_id'] = $userCredentials[0]["user_id"];
                                $user_id = $_SESSION['user_id'];
                                
                                if (isset($_POST['remember_me'])) {
                                    function generateRandomToken($length = 32) {
                                        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                                        $token = '';
                                    
                                        for ($i = 0; $i < $length; $i++) {
                                            $token .= $characters[mt_rand(0, strlen($characters) - 1)];
                                        }
                                    
                                        return $token;
                                    }
                                    
                                    $token = generateRandomToken();
                                    $portCont->saveTokenToDatabase($user_id, $token);
                                    setcookie('remember_me_cookie', $token, time() + (30 * 24 * 60 * 60)); // Cookie expires in 30 days
                                }
                                
                                header('Location: ?message=security');
                                exit;    
                            }else{
                                $_SESSION['user_id'] = $userCredentials[0]["user_id"];
                                $user_id = $_SESSION['user_id'];
                                
                                if (isset($_POST['remember_me'])) {
                                    function generateRandomToken($length = 32) {
                                        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                                        $token = '';
                                    
                                        for ($i = 0; $i < $length; $i++) {
                                            $token .= $characters[mt_rand(0, strlen($characters) - 1)];
                                        }
                                    
                                        return $token;
                                    }
                                    
                                    $token = generateRandomToken();
                                    $portCont->saveTokenToDatabase($user_id, $token);
                                    setcookie('remember_me_cookie', $token, time() + (30 * 24 * 60 * 60)); // Cookie expires in 30 days
                                }
                                
                                header('Location: ?message=verification');
                                exit;    
                            }
                           
                        }
                        else if($userCredentials[0]["designation"] == 2)
                        {
                            if($userCredentials[0]["status"] == 'VERIFIED')
                            {
                                $_SESSION['user_id'] = $userCredentials[0]["user_id"];
                                $user_id = $_SESSION['user_id'];
                                
                                if (isset($_POST['remember_me'])) {
                                    function generateRandomToken($length = 32) {
                                        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                                        $token = '';
                                    
                                        for ($i = 0; $i < $length; $i++) {
                                            $token .= $characters[mt_rand(0, strlen($characters) - 1)];
                                        }
                                    
                                        return $token;
                                    }
                                    
                                    $token = generateRandomToken();
                                    $portCont->saveTokenToDatabase($user_id, $token);
                                    setcookie('remember_me_cookie', $token, time() + (30 * 24 * 60 * 60)); // Cookie expires in 30 days
                                }
                                
                                header('Location: ?message=security');
                                exit;    
                            }else{
                                $_SESSION['user_id'] = $userCredentials[0]["user_id"];
                                $user_id = $_SESSION['user_id'];
                                
                                if (isset($_POST['remember_me'])) {
                                    function generateRandomToken($length = 32) {
                                        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                                        $token = '';
                                    
                                        for ($i = 0; $i < $length; $i++) {
                                            $token .= $characters[mt_rand(0, strlen($characters) - 1)];
                                        }
                                    
                                        return $token;
                                    }
                                    
                                    $token = generateRandomToken();
                                    $portCont->saveTokenToDatabase($user_id, $token);
                                    setcookie('remember_me_cookie', $token, time() + (30 * 24 * 60 * 60)); // Cookie expires in 30 days
                                }
                                
                                header('Location: ?message=verification');
                                exit;    
                            }
                        }
                        else{
                            if($userCredentials[0]["status"] == 'VERIFIED')
                            {
                                $_SESSION['user_id'] = $userCredentials[0]["user_id"];
                                $user_id = $_SESSION['user_id'];
                                
                                if (isset($_POST['remember_me'])) {
                                    function generateRandomToken($length = 32) {
                                        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                                        $token = '';
                                    
                                        for ($i = 0; $i < $length; $i++) {
                                            $token .= $characters[mt_rand(0, strlen($characters) - 1)];
                                        }
                                    
                                        return $token;
                                    }
                                    
                                    $token = generateRandomToken();
                                    $portCont->saveTokenToDatabase($user_id, $token);
                                    setcookie('remember_me_cookie', $token, time() + (30 * 24 * 60 * 60)); // Cookie expires in 30 days
                                }
                                
                                header('Location: ?message=security');
                                exit;    
                            }else{
                                $_SESSION['user_id'] = $userCredentials[0]["user_id"];
                                $user_id = $_SESSION['user_id'];
                                
                                if (isset($_POST['remember_me'])) {
                                    function generateRandomToken($length = 32) {
                                        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                                        $token = '';
                                    
                                        for ($i = 0; $i < $length; $i++) {
                                            $token .= $characters[mt_rand(0, strlen($characters) - 1)];
                                        }
                                    
                                        return $token;
                                    }
                                    
                                    $token = generateRandomToken();
                                    $portCont->saveTokenToDatabase($user_id, $token);
                                    setcookie('remember_me_cookie', $token, time() + (30 * 24 * 60 * 60)); // Cookie expires in 30 days
                                }
                                
                                header('Location: ?message=verification');
                                exit;    
                            }
                        }

                    }else{
                        header('Location: ?message=error'); 
                    }
                }else{
                    header('Location: ?message=error'); 
                }
            }
            break;


    }
}

?>