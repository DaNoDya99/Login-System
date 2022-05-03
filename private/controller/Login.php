<?php

class Login extends Controller
{
    public function index()
    {
        # code...
        $errors = array();

        if (count($_POST) > 0) {
    
            if($_POST['sign'] == 'true')
            {
                $this->redirect('signup');
            }

            $user = new User();

            if ($row = $user->where('email', $_POST['email'])) {
                
                $row = $row[0];
                
                if(password_verify($_POST['password'],$row->password)){
                    $this->redirect('captcha');
                }   
            }
            
            $errors['email'] = "Wrong email or password.";
        }

        $this->view('login',['errors'=>$errors]);
    }
}