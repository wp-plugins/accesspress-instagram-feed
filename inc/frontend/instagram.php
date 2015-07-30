<?php
class InstaWCD{    
    function userID(){
        $username = strtolower($this->username); // sanitization
        $token = $this->access_token;
        
    if(!empty($username) && !empty($token)) {

        $url = "https://api.instagram.com/v1/users/search?q=".$username."&access_token=".$token;
        
        $get = wp_remote_get($url);
        $response = wp_remote_retrieve_body( $get ); 
        $json = json_decode($response);

        foreach($json->data as $user){
            if($user->username == $username){
                return $user->id;
            }
        }
            return '00000000'; // return this if nothing is found
         }
    }


    function userMedia(){

        $url = 'https://api.instagram.com/v1/users/'.$this->userID().'/media/recent/?access_token='.$this->access_token;

        $content = wp_remote_get($url);
        $response = wp_remote_retrieve_body( $content );
          return $json = json_decode($response, true);
    }
}
$insta = new InstaWCD();
        $insta->username = $username;
        $insta->access_token = $access_token;
?>