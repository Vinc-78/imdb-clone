<template>
  <div>
    <div class="input-group mt-5">
      <form method="post" class="w-100" @submit.prevent="filterMovies">
        <select class="custom-select mb-3" v-model="categoryToFilter">
          <option
            v-for="category in categoriesData"
            :key="category.id"
            :value="category.id"
          >
            {{ category.name }}
          </option>
        </select>
        <div class="input-group-append">
          <button class="btn btn-outline-secondary mx-auto">Filtra</button>
        </div>
      </form>
    </div>
    <div class="row row-cols-3 mt-3">
      <Movie v-for="movie in moviesData" :key="movie.id" :movie="movie"></Movie>
    </div>
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
      categoriesData: [],
      categoryToFilter: "",
    };
  },
  mounted() {
    this.fetchMoviesData();
    this.fetchCategoriesData();
  },

  methods: {
    fetchMoviesData() {
      axios.get("/api/movies").then((resp) => {
        this.moviesData = resp.data;
      });
    },

    fetchCategoriesData() {
      axios.get("/api/categories").then((resp) => {
        this.categoriesData = resp.data;
      });
    },

    filterMovies() {
      axios.post(`api/categories/${this.categoryToFilter}`).then((resp) => {
        this.moviesData = resp.data.movies;
      });
    },
  },
};
</script>

<style lang="scss">
</style>