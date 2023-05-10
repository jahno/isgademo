<?php 
class Controller{



    public function checkRequestV2($base_url,$req){
        $met = $req . "Ctl";
        $str = str_replace($base_url, " ", $met);
        $s = str_replace("/", "", trim($str));

        if(method_exists(Controller::class,$s)){
           return  $this->$s();  
        }else{
            return "Aucun resultat";
        }
    }

    public function checkRequest($base_url,$req){
        $met = (App::getParam('route') )  ?  App::getParam('route')."Ctl" :  'index'  . "Ctl";
        $str = str_replace($base_url, " ", $met);
        $s = str_replace("/", "", trim($str));

     

        if(method_exists(Controller::class,$met)){
           return  $this->$s();  
        }else{
            return "Aucun resultat";
        }
    }

    public function indexCtl(){
        return $this->getView('index');
    }
 

    public function loginCtl(){
        return $this->getView('login');
    }

    public function logoutCtl(){
     session_destroy();
     header('Location: ?route=index');

    }

    public function homeCtl(){
        return $this->getView('home');
    }

    private function loginTraitementCtl(){

        $user = new User();

       $res=  $user->login(App::postParam('email'),App::postParam('password'));
     
       if(!empty($res)){
        App::setSession('user',$res);
        header('Location: ?route=index');
       }else{
        App::setSession('user',"Login ou mot de passe incorrect");
         header('Location: ?route=login');
       }
       
    }

    private function getView($vi){
        if(App::isConnect()){
            include "view/$vi.php";
        }else{
            include "view/login.php";
        }
    }


    
}


?>