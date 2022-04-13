<template>
      <li>

        <div class="list_inner">
          <div class="image" @click="displayModal()">

            <div
              class="main"
              :style="{ backgroundImage: 'url(' + getRecupeUrl + ')' }"
            ><span class="badge badge-dark">{{rest_category}} </span></div>
          </div>
          <!-- End .image -->
          <div class="details">
            <div class="extra">
              <p class="date">
                By <a @click="displayModal()">{{rest_category}}</a>
              </p>
            </div>
            <!-- End meta info -->
            <h3 class="title">
              {{ recipe_name }}
            </h3>
            <div class="gw_team_read_more">
              <a @click="displayModal()"><span>Read More</span></a>
            </div>
              
          </div>
          <!-- End .details -->
            <div class="list_inner_action" >
               <button style="margin:10px;" class="btn btn-warning lg" @click="updateRecipe()"><font-awesome-icon icon="fa-solid fa-edit"/> Edit </button>   
               <button class="btn btn-danger lg" @click="removeRecipe()"><font-awesome-icon icon="fa-solid fa-trash"  /> Remove </button> 
            </div>
        </div>       
      </li>
      <!-- End single blog -->


</template>



<script>
import axios from 'axios';

export default {
  data() {
    return {
    // "isDeleted":0
    };
  },
  computed:{
    getRecupeUrl:function(){
      return require("../assets/img/recipe/" + this.recipe_image + ".jpg");
    }
  },
  props: [
      "recipe_name",
      "recipe_Ingredients",
      "recipe_directions",
      "recipe_image",
      "recipe_order",
      "rest_category",
      "recipe_id"
  ],
  methods:{
    displayModal:function(){
      this.$parent.showModalDisplay(this);
    },
    removeConfirmed:function(){
       var self = this;
        axios.post(this.$APIUrl+'removeRecipe', {
            recipe_id: this.recipe_id,
            key: "key123"
          })
          .then(function (response) {
            console.log(response.data["status"]);
            if(response.data["status"] == 1){
                self.$parent.recipes = null;
              //  self.closeModal();
                self.$parent.getAllRecipe();
            }else{
                alert("Server Error!");
            }
          })
          .catch(function (error) {
            console.log(error);
          });
    },
    updateRecipe:function(){
       this.$parent.recipe_name = this.recipe_name;
       this.$parent.recipe_Ingredients = this.recipe_Ingredients;
       this.$parent.recipe_directions = this.recipe_directions;
       this.$parent.recipe_image = this.recipe_image;
       this.$parent.recipe_order = this.recipe_order;
       this.$parent.rest_category = this.rest_category;
       this.$parent.recipe_id = this.recipe_id;
       //this.$parent.showModal();
        this.$parent.model_header_title = "Update recipe " + this.recipe_name;
        this.$parent.isActive = true;
        this.$parent.isVisible = true;

    },
    removeRecipe:function(){
     const swalWithBootstrapButtons = this.$swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
      },
      buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
      title: 'Delete ' + this.recipe_name + ' ?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'No, cancel!',
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {
        this.removeConfirmed();
        swalWithBootstrapButtons.fire(
          'Deleted!',
          'Recipe has been deleted.',
          'success'
        )
      }
    })
    }
  }
};
</script>