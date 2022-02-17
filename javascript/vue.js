new Vue({
  el: "#app",
  data: {
    discArray: [],
  },

  mounted() {
    axios
      .get("http://localhost/php-ajax-dischi/php/api/dischi.php")
      .then((result) => {
        this.discArray = result.data;
      });
  },
});
