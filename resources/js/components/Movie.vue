<template>
  <div class="col">
    <div class="card">
      <div class="img-container">
        <img class="card-img-top" :src="movie.coverImg" :alt="movie.title" />
      </div>
      <div class="card-body">
        <h5 class="card-title">
          <strong>{{ movie.title }}</strong>
        </h5>
        <p class="card-text">
          {{ movie.description }}
        </p>
        <span><strong>Voto: </strong>{{ movie.rating }}</span>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Movie",
  props: ["movie"],
};
</script>

<style lang="scss">
@import "../../sass/partials/_movie.scss";
</style>