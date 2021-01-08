<?php
require_once __DIR__ . '/vars.php'
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <!-- viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- css -->
  <link rel="stylesheet" href="style.css">
  <!-- vue -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
  <!-- api axios -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js" charset="utf-8"></script>
  <title>Dischi</title>
</head>
<body>
  <div id="root">
    <header>
      <div class="container">
        <img src="img/logo.png" alt="">
      </div>
    </header>
    <main>
      <div class="container-flex">
        <div class="selection">
          <select>
            <option value="">Tutti</option>
            <option value="Pop">Pop</option>
            <option value="Rock">Rock</option>
            <option value="Metal">Metal</option>
            <option value="Jazz">Jazz</option>
          </select>
        </div>
        
        <?php foreach($dischi['response'] as $k => $v):
          echo "<div class='box'>"
          ?>      
            <img src= <?=$v["poster"];?> alt="">
            <h2><?= $v["title"]; ?></h2>
            <h4><?= $v["author"]; ?></h4>
            <h4><?= $v["year"]; ?></h4>
            <?php
        
          echo"</div>";
          endforeach;
          ?>
        
      </div>
    </main>
  </div>
</body>
</html>

