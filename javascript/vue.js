new Vue({
  el: "#app",
  data: {
    selectedValue: "Tutti",
    discArray: [],
    genres: [],
    show: true,
  },

  mounted() {
    axios
      .get("http://localhost/php-ajax-dischi/php/api/dischi.php")
      .then((result) => {
        this.discArray = result.data;

        this.discArray.forEach((disc) => {
          if (!this.genres.includes(disc.genre)) {
            this.genres.push(disc.genre);
          }
        });
      });
  },
});
