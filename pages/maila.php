<?php
$message = $_POST['message'];
    
    if(isset($_POST["message"]) && !empty($_POST["message"])){

    $to = "a.raymond@codeur.online";
 
    $subject = "automatic-visualtgr";
 
    mail($to,$subject,$message);
 
    echo '<body onLoad="alert(\'votre message a été transmis\')">';
	echo '<meta http-equiv="refresh" content="0;URL=index.php">';  
    }
    else{
        echo '<body onLoad="alert(\'message manquant\')">';
        echo '<meta http-equiv="refresh" content="0;URL=credits.php#contact">';  
    }
?>