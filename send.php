<?php
$user=trim(shell_exec('echo $USER'));
$cid=$argv[1];
$uid=$argv[2];
while (1) {
system("clear");
echo "Message: ";
$text=rawurlencode(trim(fgets(STDIN)));
system("echo '$cid;$uid;$text' > /home/$user/.chat/senddata.txt");
system("php /home/$user/.chat/msgsend.php");
}
?>
