<template>
  <div class="gw_team_portfolio">
    <div class="gw_team_title">
      <div class="title_flex">
        <div class="left">
          <span>Portfolio</span>
          <h3 v-on:click="addnew()">Creative Portfolio</h3>


        </div>
        <!-- End Left -->
        <div class="portfolio_filter">
          <ul>
            <li>
              <a
                v-on:click="activetab = 1"
                :class="[activetab === 1 ? 'active' : '']"
                >IOS APPS</a
              >
            </li>
            <!-- End iosItems tabcontent 2 -->
            <li>
              <a
                v-on:click="activetab = 2"
                :class="[activetab === 2 ? 'active' : '']"
                >WEBSITES</a
              >
            </li>
            <!-- End .webItems tabcontent 2 -->
            <li>
              <a
                v-on:click="activetab = 3"
                :class="[activetab === 3 ? 'active' : '']"
                >POS & resturant</a
              >
            </li>
            <!-- End Mix tabcontent 3 -->
            <li>
              <a
                v-on:click="activetab = 4"
                :class="[activetab === 4 ? 'active' : '']"
                >ANDROID APPS</a
              >
            </li>
            <!-- End ANDROID tabcontent 4 -->
          </ul>
        </div>
        <!-- End .portfolio-filter -->
      </div>
    </div>
    <!-- End gw_team_title -->

    <div v-if="activetab === 1" class="tabcontent">
      <ul class="portfolio_list">
        <CoolLightBox :items="iosItems" :index="index" @close="index = null">
        </CoolLightBox>
        <li
          v-for="(image, imageIndex) in iosItems"
          :key="imageIndex"
          @click="index = imageIndex"
        >
          <div class="inner">
            <div class="entry gw_team_portfolio_animation_wrap">
              <img class="image" :src="image.thumb" alt="Portfolio" />
            </div>
          </div>
        </li>
        <!-- End li -->
      </ul>
      <!-- End .portfolio_list -->
    </div>
    <!-- End .tabcontent 1 -->

    <div v-if="activetab === 2" class="tabcontent">
      <ul class="portfolio_list">
        <CoolLightBox :items="webItems" :index="index" @close="index = null">
        </CoolLightBox>
        <li
          v-for="(image, imageIndex) in webItems"
          :key="imageIndex"
          @click="index = imageIndex"
        >
          <div class="inner">
            <div class="entry gw_team_portfolio_animation_wrap">
              <img class="image" :src="image.thumb" alt="Portfolio" />
            </div>
          </div>
        </li>
        <!-- End li -->
      </ul>
      <!-- End .portfolio_list -->
    </div>
    <!-- End .tabcontent 2 -->

    <div v-if="activetab === 3" class="tabcontent">
      <ul class="portfolio_list">
        <CoolLightBox
          :items="systemsItems"
          :index="index"
          @close="index = null"
        >
        </CoolLightBox>
        <li
          v-for="(image, imageIndex) in systemsItems"
          :key="imageIndex"
          @click="index = imageIndex"
        >
          <div class="inner">
            <div class="entry gw_team_portfolio_animation_wrap">
              <img class="image" :src="image.thumb" alt="Portfolio" />
            </div>
          </div>
        </li>
        <!-- End li -->
      </ul>
      <!-- End .portfolio_list -->
    </div>
    <!-- End .tabcontent 3 -->

    <div v-if="activetab === 4" class="tabcontent">
      <ul class="portfolio_list">
        <CoolLightBox :items="androidItems" :index="index" @close="index = null">
        </CoolLightBox>
        <li
          v-for="(image, imageIndex) in androidItems"
          :key="imageIndex"
          @click="index = imageIndex"
        >
          <div class="inner">
            <div class="entry gw_team_portfolio_animation_wrap">
              <img class="image" :src="image.thumb" alt="Portfolio" />
            </div>
          </div>
        </li>
        <!-- End li -->
      </ul>
      <!-- End .portfolio_list -->
    </div>
    <!-- End .tabcontent 4 -->

  </div>
</template>

<script>
  export default {
    methods: {
      addnew(){
        alert("hello");
      }
    },
    data() {
      return {
        activetab: 1,
        iosItems: [
          {
            src: require("../assets/img/portfolio/q1.jpg"),
            thumb: require("../assets/img/portfolio/q1.jpg"),
          },
          {
            src: require("../assets/img/portfolio/q2.jpg"),
            thumb: require("../assets/img/portfolio/q2.jpg"),
          },
          {
            src: require("../assets/img/portfolio/q3.jpg"),
            thumb: require("../assets/img/portfolio/q3.jpg"),
          },
          {
            src: require("../assets/img/portfolio/q4.jpg"),
            thumb: require("../assets/img/portfolio/q5.jpg"),
          },
          {
            src: require("../assets/img/portfolio/q5.jpg"),
            thumb: require("../assets/img/portfolio/q5.jpg"),
          },
          {
            src: require("../assets/img/portfolio/q6.jpg"),
            thumb: require("../assets/img/portfolio/q6.jpg"),
          },
          {
            src: require("../assets/img/portfolio/q7.jpg"),
            thumb: require("../assets/img/portfolio/q7.jpg"),
          },
          {
            src: require("../assets/img/portfolio/q8.jpg"),
            thumb: require("../assets/img/portfolio/q8.jpg"),
          },
          {
            src: require("../assets/img/portfolio/q9.jpg"),
            thumb: require("../assets/img/portfolio/q9.jpg"),
          },
          {
            src: require("../assets/img/portfolio/q10.jpg"),
            thumb: require("../assets/img/portfolio/q10.jpg"),
          },
        ],
        webItems: [
          {
            src: require("../assets/img/portfolio/4.jpg"),
            thumb: require("../assets/img/portfolio/4.jpg"),
          },
          {
            src: require("../assets/img/portfolio/10.png"),
            thumb: require("../assets/img/portfolio/10.png"),
          },
          {
            src: require("../assets/img/portfolio/11.png"),
            thumb: require("../assets/img/portfolio/11.png"),
          },
          {
            src: require("../assets/img/portfolio/9.png"),
            thumb: require("../assets/img/portfolio/9.png"),
          },
        ],
        systemsItems: [
          {
            src: require("../assets/img/portfolio/1.jpg"),
            thumb: require("../assets/img/portfolio/1.jpg"),
          },
          {
            src: require("../assets/img/portfolio/2.jpg"),
            thumb: require("../assets/img/portfolio/2.jpg"),
          },
          {
            src: require("../assets/img/portfolio/3.jpg"),
            thumb: require("../assets/img/portfolio/3.jpg"),
          },
          {
            src: require("../assets/img/portfolio/5.jpg"),
            thumb: require("../assets/img/portfolio/5.jpg"),
          },
          {
            src: require("../assets/img/portfolio/6.jpg"),
            thumb: require("../assets/img/portfolio/6.jpg"),
          },
          {
            src: require("../assets/img/portfolio/7.jpg"),
            thumb: require("../assets/img/portfolio/7.jpg"),
          },
          {
            src: require("../assets/img/portfolio/8.jpg"),
            thumb: require("../assets/img/portfolio/8.jpg"),
          },
          {
            src: require("../assets/img/portfolio/12.png"),
            thumb: require("../assets/img/portfolio/12.png"),
          },
        ],
        androidItems: [
          {
            src: require("../assets/img/portfolio/q2.jpg"),
            thumb: require("../assets/img/portfolio/q2.jpg"),
          },
          {
            src: require("../assets/img/portfolio/q6.jpg"),
            thumb: require("../assets/img/portfolio/q6.jpg"),
          },
          {
            src: require("../assets/img/portfolio/q6.jpg"),
            thumb: require("../assets/img/portfolio/q6.jpg"),
          },
          {
            src: require("../assets/img/portfolio/q10.jpg"),
            thumb: require("../assets/img/portfolio/q10.jpg"),
          },
        ],
        index: null,
        
      };
    },
  };
</script>

<style lang="scss" scoped></style>
