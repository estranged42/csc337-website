<?php include 'cookies_lib.php'; ?>
<!doctype html>
<html>
<head>
  <title>Hello World</title>
</head>
<body>
  <section>
    <h2>Found Cookies</h2>
    <ul>
    <?php foreach($_COOKIE as $key => $v): ?>
      <li><?php echo "{$key}: {$v}"; ?></li>
    <?php endforeach; ?>
    </ul>
  </section>

  <section>
    <a href="cookies.php?clear=true">Clear Cookies</a>
  </section>

  <pre>
<?php print_r($_COOKIE); ?>
  </pre>
</body>
</html>
