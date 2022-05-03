<?php

class Captcha extends Controller
{

    public function index(){

        if(array_key_exists("choice",$_POST))
        {
            if($_POST["choice"] == "choice1"){
            
                $this->redirect('color');
            }
        }

        if(array_key_exists("try",$_POST))
        {
            if($_POST["try"] == "try"){
            
                $this->redirect('login');
            }
        }

        $this->view('captcha');
    }

    public function check_choice()
    {
        if(empty($_POST)){
            return true;
        }
        if(array_key_exists("choice",$_POST))
        {
            if($_POST["choice"] == "choice1"){
            
                return true;
            }
            else{
                return false;
            }
        }
    }

}