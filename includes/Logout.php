<?php
setcookie('vaa','',time()-8400,'/');
setcookie('waa','',time()-8400,'/');
setcookie('saa','',time()-8400,'/');
setcookie('eaa','',time()-8400,'/');

header('location:../index.php?bye=Good bye!');
?>