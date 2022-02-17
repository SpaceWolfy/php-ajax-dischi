<?php 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vue-Dischi Backend2</title>

  <link rel="stylesheet" href="../css/style.css">

  <!-- Vue.JS - Sviluppatori  -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <!-- Api call -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
  <div id="app">
    <header>
      <img
        src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg"
        alt="spotify logo"
        class="logo-spotify"
      />
    </header>

    <div class="container">
      <div class="card-box" v-for="discInfo in discArray">
        <img class="poster-img" :src='discInfo.poster'>

        <h2>{{discInfo.title.toUpperCase()}}</h2>

        <div class="name">{{discInfo.author}}</div>
        <div class="date">{{discInfo.year}}</div>
      </div>
    </div>
  </div>
  <script src="../javascript/vue.js"></script>
</body>
</html>