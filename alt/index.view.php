<!doctype html>
<html lang="en">
  <head>
    n<meta charset="UTF-8"/>

    <title>Document</title>

    <style> body { display: grid; place-items: center; height: 100vh;
      margin: 0;  font-family: sans-serif; } </style>
  </head>

  <body>

    <h1>Proceed</h1>
    
    <?php foreach($filtered as $item) : ?>
      <?= $item['title'] ?>
    <?php endforeach ?>

  </body>
</html>

