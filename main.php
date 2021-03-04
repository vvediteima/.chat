<?php
$user=trim(shell_exec('echo $USERNAME'));
echo "Type 'j' to join or 'c' to create: ";
$act=trim(fgets(STDIN));
if ($act=='c') {
    $cid=file_get_contents("http://3.120.174.176/clientserver/?act=new");
    $uid=1;
}
else if ($act=='j') {
    echo "Key In ChatId: ";
    $cid=trim(fgets(STDIN));
    $uid=file_get_contents("http://3.120.174.176/clientserver/?act=join&cid=$cid");
}
system("mate-terminal -e 'php /home/$user/.chat/send.php $cid $uid'");
$old='';
while (1) {
///////////
$new=file_get_contents("http://3.120.174.176/clientserver/?act=show&cid=$cid");
if ($old!=$new) {
$old=$new;
system("clear");
echo $old;
}
///////////
}
?>
