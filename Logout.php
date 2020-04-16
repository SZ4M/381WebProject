<?php
setcookie('vaa','',time()-7200,'/');
header('location:index.php?bye=Good bye!');
?>