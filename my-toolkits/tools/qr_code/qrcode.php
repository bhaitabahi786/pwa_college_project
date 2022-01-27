<?php

include('../tools_navbar.php');

if (isset($_POST["submit"])) {
    $data = $_POST["data"];

    $url = "https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl={$data}";
    $output["img"] = $url;
}

$image = '';
$error = '';

if (isset($_POST["dwld"])) {
    
    if(empty($_POST["imagedwld"]))
    {
        $error = '<p class="text-danger"><b>Enter URL</b></p>';
    }
    else if(!filter_var($_POST["url"], FILTER_VALIDATE_URL))
    { 
        $error = '<p class="text-danger"><b>Invalid URL</b></p>';
    }
    else
    {  
        $url = $_POST["imagedwld"];
        $start = curl_init();
        curl_setopt($start, CURLOPT_URL, $url);
        curl_setopt($start, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($start, CURLOPT_SSLVERSION, 3);
        $file_data = curl_exec($start);
        curl_close($start);
        $file_path = 'qrimg/' . uniqid() . '.jpg';
        $file = fopen($file_path, 'w+');
        fputs($file, $file_data);
        fclose($file);
        $image = '<img src="'.$file_path.'" class="img-thumbnail" width="250" />';
    }


    // $newdata = $_POST["imagedwld"];
    // echo $newdata;
    // $saveto = "qrimage.jpg";

    // $ch = curl_init($newdata);
    // curl_setopt($ch,CURLOPT_HEADER,0);
    // curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    // curl_setopt($ch,CURLOPT_BINARYTRANSFER,1);

    // $raw = curl_exec($ch);
    // curl_close($ch);

    // if (file_exists($saveto)){
    //     unlink($saveto);
    // }

    // $fp = fopen($saveto,'x');
    // fwrite($fp,$raw);
    // fclose($fp);


    // $filepath = 'qrimg/' . $newdata;
    // if(!empty($newdata) && file_exists($filepath)){
    //     header("Cache-Control: public");
	// 	header("Content-Description: FIle Transfer");
	// 	header("Content-Disposition: attachment; filename=$newdata");
	// 	header("Content-Type: application/zip");
	// 	header("Content-Transfer-Emcoding: binary");

	// 	readfile($filepath);
	// 	exit;
    // }
    // else{
    //     echo "file error";
    // }
    // echo $newdata;
  
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <title></title>
</head>
<body >
    <div class="center col s12 m7 l6 container" >
    <div class="row">
    <form action="" method="post" class="col s12">
        <div class="row">
            <div class="col s12 ">
                <h2 class=" ">QR Code Generator</h2>
                <?php if (isset($output)) { ?>
                <div class=" ">
                    <img src="<?php echo $output["img"] ?>" alt="QR Code" id="img" >
                    
                </div>
                <?php } ?>
                
                    <div class="input-field col s12 ">
                        <label for="data" class=" ">Data</label>
                        <input type="text" class=" validate" id="data" name="data"  required>
                    </div>

                    <div>
                        <p>share link here</p>
                        <input type="url" value="<?php echo "$url" ?>" id="imgurl"/>
                        
                        <button onclick="myFunction()" class="waves-effect waves-light deep-purple darken-3 btn-small"><i class="material-icons">content_copy</i></button>  
      

                    </div>
                    <br />
                    <br />

                        <button type="submit" name="submit" id="qrcode" class=" btn waves-effect waves-light">Generate QR Code!</button>
                    
                </form>
            </div>
        </div>
        
    </div>
 </div> 
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="dwld.js">  </script>
    <script src="FileSaver.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.js"></script>
    <script>
function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("imgurl");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);
  
  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}
</script>

</body>
</html>




