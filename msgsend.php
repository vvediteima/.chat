<?php
$user=trim(shell_exec('echo $USER'));
$req=system("cat /home/$user/.chat/senddata.txt");
$req=explode(";",$req);
$k=file_get_contents("http://3.120.174.176/clientserver/?act=send&cid=".$req[0]."&uid=".$req[1]."&text=".rawurlencode(trim($req[2]))."");
echo $k;
?>
