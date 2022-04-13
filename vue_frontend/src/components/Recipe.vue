<template>
  <div class="gw_team_recipe">
    <h1 ></h1>

    <div class="gw_team_title">
      <div class="title_flex">
        <div class="left">
          
<button type="button" class="btn btn-primary" @click="showModal()">

    <font-awesome-icon icon="fa-solid fa-plus"/>
    Add Recipe
   </button>
<br/><br/>

          <h3>Latest Recipe</h3>
        </div>
      </div>
    </div>
    <ul class="gw_team_recipe_inner">
     

      <RecipeItem v-on:click.stop="showModalDisplay(recipe)" v-for="recipe in recipes" 
      :key="recipe.id" 
      :recipe_name="recipe.recipe_name" 
      :recipe_Ingredients="recipe.recipe_Ingredients" 
      :recipe_directions="recipe.recipe_directions" 
      :recipe_image="recipe.recipe_image" 
      :recipe_order="recipe.recipe_order" 
      :rest_category="recipe.rest_category"
      :recipe_id="recipe.recipe_id"
      />

    </ul>
    <div v-if="recipes.length == 0">
            <h1 style="margin-top:20px;text-align: center;" class="mt-2 mb-2">No Recipe Found</h1>
            <p style="text-align: center;">Uh-oh! Looks like the resturant you are trying to access, does not <br>have any recipe. Please add one.</p>
      </div>

     
<!-- Start Modalbox -->
    <transition name="fade">
      <!-- Modal -->
      <div
        :class="{ 'modal-mask': isActive }"
        id="modal"
        @click="closeModal"
        v-if="isVisible"
        
      >
        <div
          class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-user"
          @click.stop
        >
          <div class="modal-content" style="background-color:#481D24;height: 1000px;">
            <div class="gw_team_modalbox_about">
              <div class="close" @click="closeModal">
                <img
                  class="svg"
                  src="../assets/img/svg/cancel.svg"
                  alt="cancel-img"
                />
              </div>
              <!-- End .close -->
              <div class="my_box">
               <form @submit.prevent="addRecipe" >

                <div class="row">
                  <h1>{{ model_header_title }}</h1>
                     <div class="form-group col-md-12">
                           <label for="inputPassword4">Recipe Photo</label>
                           <div class="input-group">
                              <select required type="text" v-model="recipe_image" class="form-control">
                                 <option selected value="1">1</option>
                                 <option value="2">2</option>
                                 <option value="3">3</option>
                                 <option value="4">4</option>
                              </select>

                           </div>
                        </div>
                        <div class="form-group col-md-12">
                           <label for="inputPassword4">Recipe Category</label>
                           <div class="input-group">
                              <input required type="text" v-model="rest_category" class="form-control" >
                           </div>
                        </div>
                        <div class="form-group col-md-12">
                           <label for="inputPassword4">Recipe Name</label>
                           <div class="input-group">
                              <input required type="text" v-model="recipe_name" class="form-control" >
                               
                           </div>
                        </div>
                           <div class="form-group col-md-12">
                           <label for="inputPassword4">Recipe Ingredients
                           </label>
                           <quill-editor
                                :content="recipe_Ingredients"
                                @change="onEditorRecipe_Ingredients($event)"
                              />

                        </div>

                        <div class="form-group col-md-12">
                           <label for="inputPassword4">Recipe Directions
                           </label>
                           <quill-editor
                                :content="recipe_directions"
                                @change="onEditorRecipe_directions($event)"
                              />
                        </div>
                        <div class="form-group col-md-12">
                           <label for="inputPassword4">Recipe Order
                           </label>
                           <input required type="number" v-model="recipe_order" class="form-control" value="0">
                        </div>
                        <div style="display:block;margin-top:30px;">
                           <hr>
                          <button type="submit" style="margin-top:10px;display: block;width: 100%;" class="btn btn-primary">Save</button></div>
                        </div>
             </form> 
              </div>
              

            </div>
            <!-- End .gw_team_modalbox_about -->
          </div>
        </div>
      </div>
    </transition>
<!-- End Modalbox -->

 <RecipeItemModel 
      :recipe_name="recipe_name" 
      :recipe_Ingredients="recipe_Ingredients" 
      :recipe_directions="recipe_directions" 
      :recipe_image="recipe_image" 
      :recipe_order="recipe_order" 
      :rest_category="rest_category" 
      :recipe_id="recipe_id" 
      :isShowActive="isShowActive" 
      :isShowVisible="isShowVisible" 
  />

<!-- <buttton class="btn btn-danger" @click="showModalDisplay">adfdf</buttton> -->

  </div>
</template>

<script>
import axios from 'axios';
import RecipeItem from '@/components/RecipeItem.vue'
import RecipeItemModel from '@/components/RecipeItemModel.vue'


export default {
  
  data() {
    return {
      rest_category:"",
      recipe_name: "",
      recipe_Ingredients: "",
      recipe_directions: "",
      recipe_image: 1,
      recipe_order: 1,
      recipes: null,
      isActive: false,
      isVisible: false,
      isShowActive: false,
      recipe_id: 0,
      model_header_title: "Add New Recipe",
      isShowVisible: false
    };
  }, computed:{
    
  },
   mounted() {
       this.getAllRecipe();
  },
  methods: {
     onEditorRecipe_Ingredients({ quill, html, text }) {
        console.log('editor change!', quill, html, text)
       this.recipe_Ingredients = html
      },
     onEditorRecipe_directions({ quill, html, text }) {
        console.log('editor change!', quill, html, text)
       this.recipe_directions = html
       
      },
    showModal: function() {
      this.model_header_title = "Add New Recipe";
      this.recipe_id = 0;
      this.recipe_name = "";
      this.recipe_Ingredients = "";
      this.recipe_directions = "";
      this.recipe_image = 1;
      this.recipe_order = 0;
      this.rest_category = "";
      this.isShowActive = false;
      this.isShowVisible = false;
      this.isActive = true;
      this.isVisible = true;
    },
    closeModal: function() {
       this.isActive = false;
       this.isVisible = false;
       this.isShowActive = false;
       this.isShowVisible = false;
    },
    showModalDisplay:function(recipe){
       this.recipe_id = recipe.recipe_id;
       this.recipe_name = recipe.recipe_name;
       this.recipe_Ingredients = recipe.recipe_Ingredients;
       this.recipe_directions = recipe.recipe_directions;
       this.recipe_image = recipe.recipe_image;
       this.recipe_order = recipe.recipe_order;
       this.rest_category = recipe.rest_category;
       this.isShowActive = true;
       this.isShowVisible = true;
    },
    getAllRecipe(){
        axios.get(this.$APIUrl+"getRecipe")
        .then(response => (this.recipes = response.data))
    },
    addRecipe: function(){
      this.UseRecipe();
    },
    UseRecipe: async function(){
        var self = this;
        var param = 'addRecipe';
        if(this.recipe_id != 0){
          param = 'updateRecipe';
        }
        axios.post(this.$APIUrl+param, {
            recipe_name: this.recipe_name,
            recipe_Ingredients: this.recipe_Ingredients,
            recipe_directions: this.recipe_directions,
            recipe_image: this.recipe_image,
            recipe_order: this.recipe_order,
            rest_ratting: 0,
            rest_category: this.rest_category,
            recipe_id: this.recipe_id,
          })
          .then(function (response) {
            if(response.data["Data"] === "Saved"){
                self.recipes = null;
                self.closeModal();
                self.getAllRecipe();
                self.$swal.fire(
                  'Success!',
                  'The recipe is Saved!',
                  'success'
                )
               // self.recipes = null;
              
            }else{
              alert("All Field is required");
            }

          })
          .catch(function (error) {
            console.log(error);
          });

   }
  },
  components:{
    RecipeItem,
    RecipeItemModel
  }
};
</script>

<style lang="scss" scoped></style>
