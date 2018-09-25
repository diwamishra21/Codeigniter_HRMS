<?php
/* 
 * This is Custom redirect hendler page
 * Description : Heandel All Redirect url...
 * Authour : Maneesh Tiwari || Shiv Tiwari
 * 
 */

function redirect_to($url){
    if(!empty($url)){
        redirect($url);
    }
}

