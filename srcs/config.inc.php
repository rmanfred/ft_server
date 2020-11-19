<?php
   $cfg['blowfish_secret'] = '.24633480'; //create your own
   $i = 0;
   $i++;
   $cfg['Servers'][$i]['host'] = 'localhost';
   $cfg['Servers'][$i]['connect_type'] = 'tcp';
   $cfg['Servers'][$i]['compress'] = false;
   $cfg['Servers'][$i]['auth_type'] = 'cookie';
   $cfg['Servers'][$i]['AllowNoPassword'] = true;
   $cfg['Servers'][$i]['user'] = 'root';
 ?>
 