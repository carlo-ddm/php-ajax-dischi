const app = new Vue ({
  el: '#app',
  data: {
    apiUrl: 'http://localhost:8888/php-ajax-dischi/api.php',
    dischi: []
  },

  mounted() {
    this.getApi()
  },

  methods: {
    getApi(){
      axios.get(this.apiUrl)
      .then(r => {
        this.dischi = r.data
      })
    }
  },
})

