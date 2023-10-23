<?php

namespace App\controllers;

use App\controllers\controller;

class users extends controller{

    private $name;
    private $email;
    private $mobile;
    private $password;
    private $cpassword;

    #make this constructor to allow no parameters but still instantiate the class
    public function __construct($name = null, $email = null, $mobile = null, $password = null, $cpassword = null){
        $this->name = $name;
        $this->email = $email;
        $this->mobile = $mobile;
        $this->password = $password;
        $this->cpassword = $cpassword;
    }
        

    private function create_account($request){

        if($_POST[$request]){
            $this->name = $_POST['name'];
            $this->email = $_POST['email'];
            $this->mobile = $_POST['mobile'];
            $this->password = $_POST['password'];
            $this->cpassword = $_POST['cpassword'];

            if(!empty($this->name) && !empty($this->email) && !empty($this->mobile) && !empty($this->password)){
                if($this->password == $this->cpassword){
                        
                    $this->password = password_hash($this->password, PASSWORD_DEFAULT);

                    // $sql = "INSERT INTO users (name, email, mobile, password) VALUES ('$this->name', '$this->email', '$this->mobile', '$this->password')";

                    // $result = $this->connect()->query($sql);

                    // if($result){
                    //     header("Location: ./login");
                    // }else{
                    //     return "Something went wrong";
                    // }

                }else{

                    return "Password and Confirm Password do not match";

                }
            }else{

                return "All fields are required";

            }
        }
    }


}