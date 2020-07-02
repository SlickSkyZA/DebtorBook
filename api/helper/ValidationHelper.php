<?php 
  class ValidationHelper{
     
     //   ****************Name Validation ********************
     public static function validateName($name){
        return preg_match("/^[a-zA-Z ]*$/",$name);
      }

    //   ****************Email Validation ********************
      public static function validateEmail($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);
      }

    //   ****************URL Validation ********************
    public static function validateUrl($url){
        return preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url);
      }


      //   ****************Password Validation ********************
    public static function validatePassword($password){
        return preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/",$password);
      }


  }
?>