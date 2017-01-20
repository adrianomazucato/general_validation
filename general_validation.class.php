<?php
/**
 *
 */
class validation{

  function cnicValidate($match){
    $regEx="/[0-9]{5}-[0-9]{7}-[0-9]{1}/";
    if ( preg_match($regEx,$match) ) {
      return true;
    }else {
      return false;
    }

  }
  function nameValidate($match){
    $regEx="/^[a-zA-Z ]*$/";

    if ( preg_match($regEx,$match) ) {
      return true;
    }else {
      return false;
    }

  }
  function emailValidate($match){
    $check=filter_var($match, FILTER_VALIDATE_EMAIL);
    if ( $check ) {
      return true;
    }else{
      return false;
    }
  }
  function urlValidate($match){
    $regEx='/^(((http|https|ftp):\/\/)?([[a-zA-Z0-9]\-\.])+(\.)([[a-zA-Z0-9]]){2,4}([[a-zA-Z0-9]\/+=%&_\.~?\-]*))*$/';
    if( preg_match($regEx,$match) ){
      return true;
    }else {
      return false;
    }
  }
  function dateValidate($match){
     $regEx = "/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/";
       if(preg_match($regEx,$match)){
       return true;
     }else {
       return false;
     }
  }
  function ipValidate(){
    $regEx='/^((?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?))*$/';
        if(preg_match($regEx,$match)){
        return true;
      }else {
        return false;
      }
  }
  function mobileValidate($match){
       $regEx="/^\(?([0-9]{4})\)?[-. ]?([0-9]{7})$/";
       if (preg_match($regEx,$match)) {
         return true;
       }else {
         return false;
       }
   }

   function majorcreditcardsValidate($match){
     $regEx='/^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6011[0-9]{12}|622((12[6-9]|1[3-9][0-9])|([2-8][0-9][0-9])|(9(([0-1][0-9])|(2[0-5]))))[0-9]{10}|64[4-9][0-9]{13}|65[0-9]{14}|3(?:0[0-5]|[68][0-9])[0-9]{11}|3[47][0-9]{13})*$/';
       if (preg_match($regEx,$match)) {
         return true;
       }else {
         return false;
       }
   }
   function passwordmatchValidate($match){
// Test for a strong password with this regex.
// The password must contain one lowercase letter, one uppercase letter, one number,
 // and be at least 6 characters long.
      $regEx='/^(?=^.{6,}$)((?=.*[A-Za-z0-9])(?=.*[A-Z])(?=.*[a-z]))^.*$/';
      if (preg_match($regEx,$match)) {
        return true;
      }else {
        return false;
      }

   }
   function ssnValidate($match){
      $regEx='/^([0-9]{3}[-]*[0-9]{2}[-]*[0-9]{4})*$/';
      if (preg_match($regEx,$match)) {
        return true;
      }else {
        return false;
      }

   }

}


 ?>
