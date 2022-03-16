<?php

if(isset($_POST['getRest']) & isset($_POST['key']) & $_POST['key'] == 'WG'){
   require_once("db/Db.class.php");
   $db = new DB();
   $rest_id = $_POST['rest_id'];
   $resturant = $db->query("SELECT * FROM resturant where `rest_id` = $rest_id");
   $rest = $resturant[0];

   $allRecipe = $db->query("SELECT * FROM recipe WHERE rest_id = $rest_id");
?>

<span class="float-right text-info">
   
<p class="mb-4 ml-2 text-black font-weight-bold">
   <a class="text-danger" data-toggle="modal" data-target="#delete-resturant" href="#"><i class="icofont-ui-delete"></i> DELETE</a>
</p>

</span>

<h1><?=$rest['rest_name'];?></h1>
<h6><?=$rest['rest_address'];?></h6>
<hr>
   
<span class="float-right text-info">
   
<p class="mb-4 ml-2 text-black font-weight-bold">
<a class="text-primary mr-3" onclick="cleanModal()" data-toggle="modal" data-target="#add-recipe-modal" href="#"><i class="icofont-ui-add"></i> Add Recipe</a> </p>
</p>

</span>

         <div class="container">
            <div class="row d-none-m">
               <div class="col-md-12">

                  <h4 class="font-weight-bold mt-0 mb-3"> Recipes <small class="h6 mb-0 ml-2">(<?=count($allRecipe)?>)
                  </h4>
               </div>
            </div>
               
               <div class="col-md-12">
                  <div class="row">
                  
                  <?php
                  if(count($allRecipe) == 0){
                     echo '
                           <div class="col-md-12 text-center pt-5 pb-5">
                              <h1 class="mt-2 mb-2">No Recipe Found</h1>
                              <p>Uh-oh! Looks like the resturant you are trying to access, does not <br>have any recipe. Please add one.</p>
                              <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#add-recipe-modal" href="#">Add Recipe</a>
                           </div>
                  ';
                  }
                  for ($i=0; $i < count($allRecipe); $i++) { 
                     $recipe = $allRecipe[$i];
                  ?>
                     <div class="col-md-4 col-sm-6 mb-4 pb-2">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                           <div class="list-card-image">
                              <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> <?=$recipe['rest_ratting']?></span></div>
                              <div class="member-plan position-absolute"><span class="badge badge-dark"><?=$recipe['rest_category']?></span></div>
                              <a href="#" onclick="show_recipe(<?=$recipe['recipe_id']?>)">
                              <img style="height: 330px;object-fit: cover;" src="img/recipe/<?=$recipe['recipe_image']?>.jpg" class="img-fluid item-img">
                              </a>
                           </div>
                           <div class="p-3 position-relative">
                              <div class="list-card-body">
                                 <h6 onclick="show_recipe(<?=$recipe['recipe_id']?>)" class="mb-1"><a href="#" class="text-black"><?=$recipe['recipe_name']?></a></h6>
                                 <!-- <p class="text-gray mb-3"><?=$recipe['recipe_name']?></p> -->
                              </div>
                           </div>
                           <p class="mb-4 ml-2 text-black font-weight-bold">
                              <a class="text-primary mr-3" href="#" onclick="show_recipe(<?=$recipe['recipe_id']?>)"><i class="icofont-data"></i> Compnent</a> </p>
                           </p>
                           <p class="mb-4 ml-2 text-black font-weight-bold">
                              <a class="text-primary mr-3" onclick="editRecipe(<?=$recipe['recipe_id']?>)" href="#"><i class="icofont-ui-edit"></i> EDIT</a>
                              <a class="text-danger" onclick="deleteRecipe(<?=$recipe['recipe_id']?>)" href="#"><i class="icofont-ui-delete"></i> DELETE</a>
                           </p>

                        </div>
                     </div>
                  <?php   
                  }
                  ?>

                  </div>

               </div>

         </div>

         </div>
<?php
}
?>
