<?php 

include __DIR__ . '/db/database.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vue-Dischi Backend1</title>
  
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <header>
    <img
      src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg"
      alt="spotify logo"
      class="logo-spotify"
    />
  </header>

  <div class="container">
    <?php
      foreach ($response as $disc) {
    ?>
      <div class="card-box">
        <img class="poster-img" src="<?php echo $disc['poster'] ?>" alt="poster" />

        <h2><?php echo $disc['title'] ?></h2>

        <div class="name"><?php echo $disc['author'] ?></div>
        <div class="date"><?php echo $disc['year'] ?></div>
      </div>
    <?php
      }
    ?>
  </div>
</body>

</html>