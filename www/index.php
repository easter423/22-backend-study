<?php

class GuestbookMessage
{
    public string $name;
    public string $message;
    public string $created_date;
}

$fp = fopen("./guestbook.txt","r") or die("Failed to read file");

$guest_book_messages=[];

while(($line = fgets($fp)) !==false){
    $message = new GuestbookMessage();
    $message->name = explode(' ', $line)[0];
    $message->message = explode(' ',$line)[1];
    $message->created_date = explode(' ',$line)[2];
    $guest_book_messages[] = $message;
}

foreach($guest_book_messages as $guest_book_message):
?>

    <?= $guest_book_message->name ?>님이 방명록을 남기셨습니다. <br/>
    <p>
        <?= $guest_book_message->message ?>
    </p>
    <?= $guest_book_message->created_date ?> 작성됨 <br/>
    <hr/>

<?php
    endforeach
?>
