<?php


    // $newdata = "https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl=data";
    $newdata = "https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dmlld3xlbnwwfHwwfHw%3D&w=1000&q=80";
    $saveto = "tools/qr_code/qrimage.png";

    $ch = curl_init($newdata);
    curl_setopt($ch,CURLOPT_HEADER,0);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_BINARYTRANSFER,1);

    $raw = curl_exec($ch);
    curl_close($ch);

    if (file_exists($saveto)){
        unlink($saveto);
    }

    $fp = fopen($saveto,'x');
    fwrite($fp,$raw);
    fclose($fp);


?>

