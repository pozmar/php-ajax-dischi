
const myApp = new Vue({
  el: "#root",
  data: {
    cds: [],
    selectedGenre: "",
  },
  mounted: function(){
    axios.get("http://localhost/php-ajax-dischi/parte-2/vars.php").then(r =>{
      this.cds = r.data.response;
    })
  },
  computed: {
    filteredCds: function(){
      return this.cds.filter(cd =>{
        return cd.genre.toLowerCase().includes(this.selectedGenre.toLowerCase())
      })
    }

  }
})
