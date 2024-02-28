const { createApp } = Vue;
createApp({
  data() {
    return {
      discs: [],
      single: [],
      url: "server.php",
      active: false,
    };
  },
  mounted() {
    this.getDiscs();
  },
  methods: {
    close() {
      this.active = false;
    },
    getDiscs() {
      axios.get(this.url).then((res) => {
        // console.log(res.data);
        this.discs = res.data;
      });
    },
    getSingleDisc(item) {
      this.active = true;

      axios.get(`${this.url}?author=${item.author}`).then((res) => {
        this.single = res.data;
      });
    },
  },
}).mount("#app");
