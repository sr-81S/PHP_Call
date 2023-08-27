<?php
header('Content-type: text/xml');
?>
<Response>
    <Dial callerId="+19474652764"><?php  echo $_POST['To'];?></Dial>
</Response>