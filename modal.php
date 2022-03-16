<!-- Modal -->
<div class="modal fade" id="edit-profile-modal" tabindex="-1" role="dialog" aria-labelledby="edit-profile" aria-hidden="true">
         <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="edit-profile">Edit profile</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>

               <div class="modal-body">
                  <form>
                     <div class="form-row">
                        <div class="form-group col-md-12">
                           <label>User Name
                           </label>
                           <input type="text" required id="user_name1" value="<?=$user[0]['user_name'];?>" class="form-control" placeholder="Enter Phone number">
                        </div>
                        <div class="form-group col-md-12">
                           <label>Phone number
                           </label>
                           <input type="text" required id="user_phone1" value="<?=$user[0]['user_phone'];?>" class="form-control" placeholder="Enter Phone number">
                        </div>
                        <div class="form-group col-md-12">
                           <label>Email id
                           </label>
                           <input type="text" required id="user_email1" value="<?=$user[0]['user_email'];?>" class="form-control" placeholder="Enter Email id
                              ">
                        </div>
                     </div>
                  </form>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn d-flex w-50 text-center justify-content-center btn-outline-primary" data-dismiss="modal">CANCEL
                  </button>
                  <button onclick="update_User()" type="button" class="btn d-flex w-50 text-center justify-content-center btn-primary">UPDATE</button>
               </div>
            </div>
         </div>
      </div>




      <!-- Modal -->
      <div class="modal fade" id="add-rest-modal" tabindex="-1" role="dialog" aria-labelledby="add-rest" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="add-address">Add New Restaurant</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <form name="add_rest_submit" action="post" id="add_rest_submit">
                     <div class="form-row">
                        <div class="form-group col-md-12">
                           <label for="inputPassword4">Restaurant Name</label>
                           <div class="input-group">
                              <input type="text" required name="rest_name" class="form-control" placeholder="Name of the Restaurant">

                           </div>
                        </div>
                        <div class="form-group col-md-12">Restaurant
                           <label for="inputPassword4">Complete Address
                           </label>
                           <input type="text" required name="rest_address" class="form-control" placeholder="Complete Address e.g. house number, street name, landmark">
                        </div>
                        <div class="form-group col-md-12">
                           <label for="inputPassword4">Restaurant Color
                           </label>
                           <input type="text" name="rest_color" class="form-control" placeholder="The Hex Color Of the resturant ex #ffffff,#000000">
                        </div>
                        <div class="form-group col-md-12">
                           <label for="inputPassword4">Restaurant Order
                           </label>
                           <input type="number" value="0" required name="rest_order" class="form-control" placeholder="The order in leftside menu">
                        </div>
                     </div>
                 
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn d-flex w-50 text-center justify-content-center btn-outline-primary" data-dismiss="modal">CANCEL
                  </button>
                  <button type="submit"  class="btn d-flex w-50 text-center justify-content-center btn-primary">SUBMIT</button>
               </div>
               </form>
            </div>
         </div>
      </div>
      <!-- Modal -->


      <!-- Modal -->
      <div class="modal fade" id="add-recipe-modal" tabindex="-1" role="dialog" aria-labelledby="add-recipe" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 60%;">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="recipe_title_box">Add New Recipe</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <form name="add_recipe_submit" action="post" id="add_recipe_submit">
                     <div class="form-row">
                     <div class="form-group col-md-12">
                           <label for="inputPassword4">Recipe Photo</label>
                           <div class="input-group">
                              <select required type="text" name="recipe_image" class="form-control">
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                                 <option value="3">3</option>
                                 <option value="4">4</option>
                              </select>

                           </div>
                        </div>
                        <div class="form-group col-md-12">
                           <label for="inputPassword4">Recipe Category</label>
                           <div class="input-group">
                              <input required type="text" name="rest_category" class="form-control" >
                           </div>
                        </div>
                        <div class="form-group col-md-12">
                           <label for="inputPassword4">Recipe Ratting</label>
                           <div class="input-group">
                              <input required type="text" name="rest_ratting" class="form-control" >
                           </div>
                        </div>

                        <div class="form-group col-md-12">
                           <label for="inputPassword4">Recipe Name</label>
                           <div class="input-group">
                              <input required type="text" name="recipe_name" class="form-control" >
                           </div>
                        </div>
                        <div class="form-group col-md-12">
                           <label for="inputPassword4">Recipe Ingredients
                           </label>
                           <textarea class="editor" name="recipe_Ingredients" class="form-control"></textarea>

                        </div>
                        <div class="form-group col-md-12">
                           <label for="inputPassword4">Recipe Directions
                           </label>
                           <textarea class="editor" name="recipe_directions" class="form-control"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                           <label for="inputPassword4">Recipe Order
                           </label>
                           <input required type="number" name="recipe_order" class="form-control" value="0">
                        </div>
                     </div>
                 
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn d-flex w-50 text-center justify-content-center btn-outline-primary" data-dismiss="modal">CANCEL
                  </button>
                  <button type="submit"  class="btn d-flex w-50 text-center justify-content-center btn-primary">SUBMIT</button>
               </div>
               </form>
            </div>
         </div>
      </div>
      <!-- Modal -->

       <!-- Modal -->
       <div class="modal fade" id="show-recipe-modal" tabindex="-1" role="dialog" aria-labelledby="show-recipe" aria-hidden="true" >
         <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 60%;">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="recipe_title">Recipe</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                     <div id="recipeData"></div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn d-flex w-50 text-center justify-content-center btn-outline-primary" data-dismiss="modal">CANCEL
                  </button>
               </div>
            </div>
         </div>
      </div>





      <!-- Modal -->      
      <div class="modal fade" id="delete-resturant" tabindex="-1" role="dialog" aria-labelledby="delete-resturant" aria-hidden="true">
         <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="delete-resturant">Delete</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <p class="mb-0 text-black">Are you sure you want to delete Resturant?</p>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn d-flex w-50 text-center justify-content-center btn-outline-primary" data-dismiss="modal">CANCEL
                  </button>
                  <button type="button" onclick="deleteRest()" class="btn d-flex w-50 text-center justify-content-center btn-primary">DELETE</button>
               </div>
            </div>
         </div>
      </div>

      <!-- Modal -->      
      <div class="modal fade" id="delete-recipe" tabindex="-1" role="dialog" aria-labelledby="delete-recipe" aria-hidden="true">
         <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="delete-recipe">Delete</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <p class="mb-0 text-black">Are you sure you want to delete Recipe?</p>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn d-flex w-50 text-center justify-content-center btn-outline-primary" data-dismiss="modal">CANCEL
                  </button>
                  <button type="button" onclick="deleteRecipeNow()" class="btn d-flex w-50 text-center justify-content-center btn-primary">DELETE</button>
               </div>
            </div>
         </div>
      </div>
      