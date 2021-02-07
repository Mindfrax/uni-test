<?php
    require_once './config.php';


    function getBibView(){
        $curl = curl_init();
        // userId
        
        $userid = 7444948;
        $url = "https://api.zotero.org/users/$userid/items?format=bib";
        //$url = "https://api.zotero.org/users/$userid/collections?v=3";
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        //print_r(htmlspecialchars($result));
        //echo $result ;
        $wordbreak = "<div class=\"csl-entry\">";
        $array_content = explode($wordbreak, $result, -1);
        foreach ($array_content as $value) {
            echo $value . "<br>";
        }
    
    
    
    
    curl_close($curl);
    }
