<?php

$msg = $_POST['mensaje'];
$to = "irvinggt07@gmail.com";
$subject = "Multicasa cliente";
"CC: irvinggt07@gmail.com";

mail($to,$subject,$msg);
?> 