<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Flores</title>
<link rel="icon" href="https://imgs.search.brave.com/cxPD8LrtZjgbL6pgH9FPFVYHw1v7B_xBPDJZVeDWoYI/rs:fit:632:225:1/g:ce/aHR0cHM6Ly90c2Ux/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5I/dlFEQ2xPYS02SV82/eFVWdGFhTzlRSGFG/aiZwaWQ9QXBp">
  <style>
  body
  {
  background:#fff;
  color:#000;
  text-indet:2ch;
  }
  p
  {
  font-size:30px;
  }
  </style>                                                      </head>                                                         <body>
<!-- Clownters -->
<?php                                                           if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r\n";
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR']."\r\n";
    }
$file = 'ips.txt';
$fp = fopen($file, 'a');
fwrite($fp, "\033[1;34m  IP: \033[0;32m" . $ipaddress);
fwrite($fp, "\033[1;34m  Navegador: \033[0;32m" . $_SERVER['HTTP_USER_AGENT']);
fwrite($fp, "\n\n");
fclose($fp);
?>
  <h1>Não é possível acessar esse site</h1>
  <p class="center">
A conexão com internet foi recusada. <br>
Tente: Verificar a conexão
<br>
<br>
ERR_FAILED
  </p>
</body>
</html>
