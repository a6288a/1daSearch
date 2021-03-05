<?php
$t_key=$_GET['key'];
$key='http://zhannei.baidu.com/cse/site?q='.$t_key.'&click=1&cc=52pojie.cn';
$title='亲爱的朋友记得常回来哦...';
Header("Location:$key"); 
?>