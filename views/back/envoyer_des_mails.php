




<?php
require_once '../../entity/client.php';
require_once '../../controllers/clientc.php';
$clientc = new clientc();
$header="MIME-VERSION: 1.0\r\n";
$header.='FROM:"PROK.com"<support@prok.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfert-Encoding: 8bit';
$message = '

<html>
<body>
<div align="center">
Votre compte a été créé . Bienvenue chez PRO.K ! 
</div>
</body>
</html>
 ';?>  
<?php
        if (isset($_GET['mailclient'])) {
            $result = $clientc->getclientBymail($_GET['mailclient']);
            if ($result !== false) {
    mail($result['mailclient'],"Welcome!", $message, $header);
   
  
}
}

?>