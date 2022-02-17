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

      <div>
        <select v-model='selectedValue' name="genres" id="genre-select">
          <option disabled value="Selezione">Seleziona un genere</option>
          <option selected>Tutti</option>
          <option v-for='(genre, index) in genres'>{{genre}}</option>
        </select>
      </div>
    </header>

    <div class="container">
      <div v-for="discInfo in discArray">
        <div class="card-box" v-if='selectedValue == "Tutti"' v-show='show'>
          <img class="poster-img" :src='discInfo.poster'>

          <h2>{{discInfo.title.toUpperCase()}}</h2>

          <div class="name">{{discInfo.author}}</div>
          <div class="date">{{discInfo.year}}</div>
        </div>

        <div class="card-box" v-if='selectedValue == discInfo.genre'>
          <img class="poster-img" :src='discInfo.poster'>

          <h2>{{discInfo.title.toUpperCase()}}</h2>

          <div class="name">{{discInfo.author}}</div>
          <div class="date">{{discInfo.year}}</div>
        </div>
      </div>
    </div>
  </div>
  <script src="../javascript/vue.js"></script>
</body>
</html>