<?php
setcookie('vaa','',time()-7200,'/');
setcookie('waa','',time()-7200,'/');
setcookie('saa','',time()-7200,'/');
setcookie('eaa','',time()-7200,'/');
header('location:index.php?bye=Good bye!');
?>