<?php
// index.php - صفحة اختبار بسيطة
$host = $_SERVER['HTTP_HOST'] ?? 'unknown';
$ip = $_SERVER['SERVER_ADDR'] ?? 'unknown';
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
?>
<!doctype html>
<html lang="ar">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>موقعي - اختبار PHP</title>
  <style>
    body{font-family: Tahoma, Arial, sans-serif; background:#0f1724; color:#e6eef8; display:flex; align-items:center; justify-content:center; height:100vh; margin:0;}
    .card{max-width:900px; width:90%; background:#0b1220; padding:24px; border-radius:12px; box-shadow:0 8px 30px rgba(2,6,23,0.6);}
    h1{margin:0 0 8px 0}
    p.small{color:#9fb0d6}
    .info{margin-top:16px; background:rgba(255,255,255,0.02); padding:12px; border-radius:8px; font-family:monospace}
    a.btn{display:inline-block; margin-top:14px; padding:8px 12px; background:#2563eb; color:#fff; border-radius:8px; text-decoration:none}
  </style>
</head>
<body>
  <div class="card">
    <h1>مرحباً — صفحة اختبار PHP</h1>
    <p class="small">هذي صفحة بسيطة تعمل داخل حاوية Docker على المنفذ 80.</p>

    <div class="info">
      <div><strong>Host:</strong> <?= htmlspecialchars($host) ?></div>
      <div><strong>Server IP:</strong> <?= htmlspecialchars($ip) ?></div>
      <div><strong>Protocol:</strong> <?= htmlspecialchars($protocol) ?></div>
      <div><strong>PHP Version:</strong> <?= phpversion() ?></div>
    </div>

    <a class="btn" href="/">Refresh</a>
  </div>
</body>
</html>
