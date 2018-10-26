<?php
$file = 'ip.txt';
if (is_file($file)) {
  $ipP = file_get_contents($file);
} else {
  $ipP = file_get_contents('https://api.ipify.org/');
  file_put_contents($file, $ipP);
}
?>
<html>
<head>
</head>
<body>
  <h3>Hello World!</h3>
  <b>Hostname:</b> <?= $host= gethostname() ?><br>
  <b>IP:</b> <?= gethostbyname($host)?><br />
  <b>IP (public):</b> <?= $ipP ?><br />
  <b>URI:</b> <?= $_SERVER['REQUEST_URI'] ?><br />

  <pre><?= '$_ENV = ' . print_r($_ENV, true) ?></pre>
  <pre><?= '$_COOKIE = ' . print_r($_COOKIE, true) ?></pre>
  <pre><?= '$_GET = ' . print_r($_GET, true) ?></pre>
  <pre><?= '$_POST = ' . print_r($_POST, true) ?></pre>
  <pre><?= '$_SESSION = ' . print_r($_SESSION, true) ?></pre>
  <pre><?= '$_SERVER = ' . print_r($_SERVER, true) ?></pre>
</body>
</html>
