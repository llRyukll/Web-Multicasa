<?php

$msg = utf8_encode($_POST['mensaje']);

$to = "irvinggt07@gmail.com";
$subject = "Multicasa cliente";
"CC: irvinggt07@gmail.com";

mail($to,$subject,$msg);
echo "<script type='text/javascript'>";
echo "alert('Tu mensaje ha sido enviado con éxito')";
echo"</script>"; 
echo "<script type='text/javascript'>";
echo "window.location.href='inicio_publico.php'";
echo"</script>"; 
?> 