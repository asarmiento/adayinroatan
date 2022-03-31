<template>
  <div class="loading show col-md-12 text-center">
    <div class="spin"></div>
    <small>Cargando ....</small>
  </div>
</template>

<script>
  export default {
    name: "loader"
  }
</script>

<style scoped>
  .loading {

  }
  .loading.show {
    opacity: 1;
  }
  .loading .spin {
    margin: 0 auto ;
    border: 7px solid hsl(5, 85%, 57%);
    border-top-color: #2C2B7C;
    border-bottom-color: #EF4436;
    border-radius: 50%;
    width: 5em;
    height: 5em;
    animation: spin 1s linear infinite;
  }
  @keyframes spin {
    to {
      transform: rotate(360deg);
    }
  }


</style>
