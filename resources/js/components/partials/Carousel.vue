<template>
  <div class="container">
    <div class="row">
      <div class="col-8">
        <div
          id="carouselExampleControls"
          class="carousel slide"
          data-ride="carousel"
        >
          <div class="carousel-inner">
            <div
              class="carousel-item"
              :class="i === 0 ? 'active' : ''"
              v-for="(movie, i) in moviesData"
              :key="movie.id"
              style="height: 300px"
            >
              <img
                class="d-block w-100"
                :src="movie.coverImg"
                alt="First slide"
                style="height: 100%; object-fit: cover"
              />
            </div>
          </div>

          <a
            class="carousel-control-prev"
            href="#carouselExampleControls"
            role="button"
            data-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a
            class="carousel-control-next"
            href="#carouselExampleControls"
            role="button"
            data-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-4">
              <h2>sidebar</h2>
      </div>
    </div>

  </div>
</template>

<script>
export default {
  props: {
    moviesData: Array,
  },
};
</script>

<style>
</style>