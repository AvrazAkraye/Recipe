<template>
  <ul class="social">
    <li v-for="(social, i) in socialList" :key="i">
      <a :href="social.link" target="_blank" rel="noreferrer"
        ><img class="svg" :src="social.src" alt="social"
      /></a>
    </li>
  </ul>
  <!-- End. social -->
</template>

<script>
  export default {
    data() {
      return {
        socialList: [
          {
            link: "https://www.facebook.com/Gateway-ICT-Solutions-101155624642883//",
            src: require("../assets/img/svg/social/facebook.svg"),
          },
          {
            link: "https://www.linkedin.com/company/gateway-company-ict/",
            src: require("../assets/img/svg/social/dribbble.svg"),
          },
        ],
      };
    },
  };
</script>

<style lang="scss" scoped></style>
