<template>
  <div class="row row-cols-3">
    <Movie v-for="movie in moviesData" :key="movie.id" :movie="movie"></Movie>
  </div>
</template>

<script>
import Movie from "./Movie.vue";
export default {
  name: "MoviesContainer",
  components: { Movie },
  data() {
    return {
      moviesData: [],
    };
  },
  mounted() {
    axios.get("/api/movies").then((resp) => {
      this.moviesData = resp.data;
    });
  },
};
</script>

<style lang="scss">
</style>