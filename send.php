<?php
$cid=$argv[1];
$uid=$argv[2];
while (1) {
system("clear");
echo "Message: ";
$text=trim(fgets(STDIN));
system("echo '$cid;$uid;$text' > ~/.chat/senddata.txt");
system("php ~/.chat/msgsend.php");
}
?>
