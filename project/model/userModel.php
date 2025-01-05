<?php

    function getConnection(){
        $con = mysqli_connect('127.0.0.1', 'root', '', 'gmpdb');
        return $con;
    }

    function login($username, $password){
        $con = getConnection();
        $sql = "SELECT * from ggu where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count =  mysqli_num_rows($result);

        if($count ==1){
            return true;
        }else{
            return false;
        }
    }

    function addUser($username, $password, $email, $gender, $dob, $contactno, $address ,$catagory){
        $con = getConnection();
        $sql1 = "SELECT * from ggu where username='{$username}'";
        $result = mysqli_query($con, $sql1);
        $count =  mysqli_num_rows($result);
        if($count == 1){
            return 2;
        }else{
            $sql = "INSERT into ggu VALUES('', '{$username}', '{$password}', '{$email}', '{$gender}', '{$dob}', '{$contactno}', '{$address}', '{$catagory}')";        
            $con = getConnection();
            if(mysqli_query($con, $sql)){
                return 1;
            }else{
                return 0;
            }
        }
        
    }

    function getUser($id){
        $con = getConnection();
    }

    function getAllUser(){

    }

    function updateUser($user){

    }

    function deleteUser($id){

    }

    function checkUserEmail($username, $email){
        $con = getConnection();
        $sql = "SELECT * from ggu where username='{$username}' and email='{$email}'";
        $result = mysqli_query($con, $sql);
        $count =  mysqli_num_rows($result);
        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function changePassword($username, $email, $password){
        $con = getConnection();
        $sql = "UPDATE ggu SET password = '{$password}' WHERE email = '{$email}' and username = '{$username}'";
        mysqli_query($con, $sql);
    }
?>