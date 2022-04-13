<template>
     <!-- Start first modal -->
        <transition name="fade">
          <!-- Modal -->
          <div
            :class="{ 'modal-mask': isShowActive }"
            id="modal"
            @click="closeModalDisplay"
            v-if="isShowVisible"
          >
            <div
              class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-user" @click.stop=""
             
            >
              <div class="modal-content" style="background-color:#481D24;height: 1000px;">
                <div class="gw_team_modalbox_recipe">
                  <div class="close" @click="closeModalDisplay">
                    <img
                      class="svg"
                      src="../assets/img/svg/cancel.svg"
                      alt="cancel-img"
                    />
                  </div>


                    <h2 class="title text-info">
                     {{ recipe_name }}
                    </h2>
                    <hr>
                  <!-- END DETAILS -->
                  <div class="main_content ">
                    <h4  class="">Recipe Ingredients</h4>
                    <div class="descriptions">
                      <div v-html="recipe_Ingredients" />
                       <hr>
                    </div>
                    <h4 class="">Recipe Directions</h4>

                    <div class="descriptions">
                      <div v-html="recipe_directions" />
                    </div>
                    <!-- END DESCRIPTION -->
                  </div>
                </div>
                <!-- END MODALBOX NEWS -->
              </div>
            </div>
          </div>
        </transition>
        <!-- End second modal -->


</template>


<script>
export default {
  data() {
    return {
     
    };
  },
  computed:{
    getRecupeUrl:function(){
      return require("../assets/img/recipe/" + this.recipe_image + ".jpg");
    }
    
  },
  methods:{
    showModalDisplay: function(recipe) {
      this.rest_category= recipe.rest_category;
      this.recipe_name = recipe.recipe_name ;
      this.recipe_Ingredients= recipe.recipe_Ingredients;
      this.recipe_directions= recipe.recipe_directions;
      this.recipe_image = recipe.recipe_image ;
      this.recipe_order = recipe.recipe_order ;
      this.rest_ratting = 0 ;
    },
    closeModalDisplay: function() {
       this.$parent.closeModal();
    },
  },
  props: [
      "recipe_name",
      "recipe_Ingredients",
      "recipe_directions",
      "recipe_image",
      "recipe_order",
      "rest_category",
      "rest_id",
      "isShowActive",
      "isShowVisible"
  ]
};
</script>