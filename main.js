const { createApp } = Vue;
createApp({
  data() {
    return {
      discs: [],
      url: "server.php",
      active: false,
    };
  },
  mounted() {
    this.getDiscs();
  },
  methods: {
    getDiscs() {
      axios.get(this.url).then((res) => {
        console.log(res.data);
        this.discs = res.data;
      });
    },
    getSingleDisc() {
      this.active = true;
    },
  },
}).mount("#app");
