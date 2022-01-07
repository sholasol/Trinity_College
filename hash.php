<?php 
ini_set('display_errors', 1);




class Hash {
    public static function make($string, $salt=''){
        return hash('sha256', $string. $salt);
    }
    
    public static function salt($length){
        return random_bytes($length);
    }
    
    public static function unique(){
        return self::make(uniqid());
    }
}






$pass = "password";



$pp = Hash::make($pass);


echo $pp;
//echo 'something';

?>