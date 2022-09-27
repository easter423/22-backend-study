<?php

$fp = fopen("./guestbook.txt","r") or die("Failed to read file");

while(($line = fgets($fp)) !==false):
    $name = explode(' ', $line)[0];
    $message = explode(' ',$line)[1];
?>

<?= $name ?>님이 방명록을 남기셨습니다. <br/>
<p>
    <?= $message ?>
</p>
<hr/>

<?php
    endwhile
?>
