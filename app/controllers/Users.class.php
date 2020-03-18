<?php

class Users extends Controller{

    public function __construct(){
        //load user model
        $this->userModel = $this->model("User");
    }

    public function index(){
        redirect('users/register');
    }

    public function register(){

        if(!isset($_SERVER['REQUEST_METHOD']) && $_SERVER["REQUEST_METHOD"] == "POST"){
            $data = (object)[
                'first_name' => $_POST['first_name'],
                'last_name' => $_POST['last_name'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'repeat_password' => $_POST['repeat_password'],
                'email_err' => '',
                'password_err'=>'',
                'repeat_password_err'=>''
            ];

            if($this->userModel->check($_POST['email']) !== 0){
                $data->email_err = 'Email already taken!';
            }else if($_POST['password'] !== $_POST['repeat_password']){

                $data->password_err = 'Passwords do not match!';
                $data->repeat_password_err ='Passwords do not match!';

            }else{

                $this->userModel->add($data->first_name, $data->last_name, $data->email, $data->password);
                redirect("users/login");
            }

            $this->view('users/register', $data);

        }else{

            $data = (object)[
                'first_name' => '',
                'last_name' => '',
                'email' => '',
                'password' => '',
                'repeat_password' =>'',
                'email_err' => '',
                'password_err'=>'',
                'repeat_password_err'=>''
            ];

            $this->view('users/register', $data);
        }

        
    }


    public function login(){
        $this->view('users/login');
    }

    public function logout(){
        logout();
        redirect('');
    }


}