<template>
  <div class="col text-center p-4">
    <div class="card h-100">
      <div class="album_img">
        <img :src="album.poster" />
      </div>
      <h3 class="py-3">{{ album.title }}</h3>
      <div class="info">
        <div class="author">
          {{ album.author }}
        </div>
        <div class="year">
          {{ album.year }}
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "SingleAlbumComponent",
  props: {
    album: Object,
  },
};
</script>

<style lang="scss" scoped>
.card {
  padding: 1rem;
  border-radius: 0;
  height: 100%;
  background-color: #2e3a46;
  h3 {
    color: white;
    text-transform: uppercase;
  }
  .info {
    color: white;
  }
}
</style>
