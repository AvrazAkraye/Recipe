<template>
  <div class="gw_team_home">
    <div class="home_content">
      <div class="avatar">
        <div
          class="image avatar_img"
          :style="{ backgroundImage: 'url(' + src1 + ')' }"
        ></div>
      </div>
      <!-- End .avatar -->
      <div class="details">
        <h3 class="name">GW ICT Solutions</h3>
        <p class="job">
          We believe that reaching your full innovative potential at Gateway requires hard work, dedication, and imagination. We worked our way up to be one of the most renowned companies in Kurdistan, yet our ambition knows no boundaries, for we are on the horizon to be a nationally and internationally recognized conglomerate on the tech scene.
        </p>

        <Social />
      </div>
      <!-- End .details -->
    </div>
  </div>
</template>

<script>
  import Social from "./Social";
  export default {
    components: {
      Social,
    },
    data() {
      return {
        src1: require("../assets/img/slider/1.jpg"),
      };
    },
  };
</script>

<style lang="scss"></style>
