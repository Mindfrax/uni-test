<?php

    function getAtomView()
    {
    $curl = curl_init();
    // userId
    $userid = "7444948";

    $url = "https://api.zotero.org/users/$userid/items?format=atom";

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);

    /*RAW RESPONSE
    print_r(htmlspecialchars($result));
    */
    /*Atom view*/
    echo $result ;
    curl_close($curl);
    }
