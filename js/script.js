
var r_id = 0;

    function update_User(){
        var user_name1 = $('#user_name1').val();
        var user_phone1 = $('#user_phone1').val();
        var user_email1 = $('#user_email1').val();
        var data = {
                    "updateProfile":"updateProfile",
                    "key":"WG",
                    "user_name":user_name1,
                    "user_phone":user_phone1,
                    "user_email":user_email1
                };
          $.ajax({
              url: 'ajax.php',
              contentType: 'application/x-www-form-urlencoded',
              type: 'post',
              data: data,
              success: function( data, textStatus, jQxhr ){
                console.log(data.user_name);
                $('#user_name').html(user_name1);
                $('#user_phone').html(user_phone1);
                $('#user_email').html(user_email1);
              },
              error: function( jqXhr, textStatus, errorThrown ){
                console.log(errorThrown);
              }, complete: function() {
                $('#edit-profile-modal').modal('hide');
              }
          });
      };
    

      $('#add_rest_submit').on('submit',(function(e) {
        e.preventDefault();
        var fd = new FormData(this);
        fd.append('addRest','WG');
        fd.append('key','WG');
        console.log(fd);
        $.ajax({
          type:'POST',
          url: 'ajax.php',
          data:fd,
          contentType: false,
          dataType: 'html',
          processData: false,
          success: function( data, textStatus, jQxhr ){
            if(data == 1){
              location.reload();
            }else{
              alert("SERVER ERROR!");
            }
          },
          error: function( jqXhr, textStatus, errorThrown ){
            console.log(errorThrown);
          }, complete: function() {
           // $('#edit-profile-modal').modal('hide');
          }
      });
      }));


      
      $('#add_recipe_submit').on('submit',(function(e) {
        e.preventDefault();
        var fd = new FormData(this);

        if(er_id === 0){
          fd.append('addRecipe','WG');
        }else{
          fd.append('updateRecipe1','WG');
          fd.append('recipe_id',er_id);
          console.log(er_id);
        }

        fd.append('key','WG');
        fd.append('rest_id',r_id);
        console.log(r_id);
        $.ajax({
          type:'POST',
          url: 'ajax.php',
          data:fd,
          contentType: false,
          dataType: 'html',
          processData: false,
          success: function( data, textStatus, jQxhr ){
            console.log(data);
            if(data == 1){
              getRestData(r_id);
              $('#add-recipe-modal').modal('hide');
            }else{
              alert("SERVER ERROR!");
            }
          },
          error: function( jqXhr, textStatus, errorThrown ){
            console.log(errorThrown);
          }, complete: function() {
           // $('#edit-profile-modal').modal('hide');
          }
      });
      }));


function show_recipe(recipe_id){
  var spinner = '<div class="col-md-12 mt-120 text-center load-more"><button class="btn btn-primary" type="button" disabled=""><span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>Loading...</button>   </div>';
  $('#recipeData').html(spinner);
  var data = {
    "recipe_id":recipe_id,
    "key":"WG",
    "getRecipehtml":"WG"
};
    $.ajax({
      type:'post',
      url: 'ajax.php',
      data:data,
      contentType: false,
      dataType: 'html',
      contentType: 'application/x-www-form-urlencoded',
      success: function( data, textStatus, jQxhr ){
        $('#recipeData').html(data);
        $('#show-recipe-modal').modal('show');
      },
      error: function( jqXhr, textStatus, errorThrown ){
        console.log(errorThrown);
      }, complete: function() {
      // $('#edit-profile-modal').modal('hide');
      }
    });
}
function getRestData(rest_id){
  r_id = rest_id;
  var spinner = '<div class="col-md-12 mt-120 text-center load-more"><button class="btn btn-primary" type="button" disabled=""><span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>Loading...</button>   </div>';
  $('#resturantData').html(spinner);

  var data = {
    "rest_id":rest_id,
    "key":"WG",
    "getRest":"WG"
};

    $.ajax({
      type:'post',
      url: 'sectionResturant.php',
      data:data,
      contentType: false,
      dataType: 'html',
      contentType: 'application/x-www-form-urlencoded',
      success: function( data, textStatus, jQxhr ){
        $('#resturantData').html(data);
      },
      error: function( jqXhr, textStatus, errorThrown ){
        console.log(errorThrown);
      }, complete: function() {
      // $('#edit-profile-modal').modal('hide');
      }
  });
}


function deleteRest(){
  var data = {
    "rest_id":r_id,
    "key":"WG",
    "deleteRest":"WG"
};
$.ajax({
  type:'post',
  url: 'ajax.php',
  data:data,
  contentType: false,
  dataType: 'html',
  contentType: 'application/x-www-form-urlencoded',
  success: function( data, textStatus, jQxhr ){
    $('#delete-recipe').modal('hide');

    location.reload();
  },
  error: function( jqXhr, textStatus, errorThrown ){
    console.log(errorThrown);
  }, complete: function() {
  // $('#edit-profile-modal').modal('hide');
  }
});
}

var re_id = 0;
function deleteRecipe(recipe_id){
  re_id = recipe_id;
  $('#delete-recipe').modal('show');
}


function deleteRecipeNow(){

  var data = {
    "recipe_id":re_id,
    "key":"WG",
    "deleteRecipe":"WG"
};
$.ajax({
  type:'post',
  url: 'ajax.php',
  data:data,
  contentType: false,
  dataType: 'html',
  contentType: 'application/x-www-form-urlencoded',
  success: function( data, textStatus, jQxhr ){
    $('#delete-recipe').modal('hide');
    getRestData(r_id);
  },
  error: function( jqXhr, textStatus, errorThrown ){
    console.log(errorThrown);
  }, complete: function() {
  // $('#edit-profile-modal').modal('hide');
  }
});
}

var er_id = 0;
function editRecipe(recipe_id){
  er_id = recipe_id;

  var data = {
    "getRecipe":"WG",
    "key":"WG",
    "recipe_id":recipe_id
    };
    $.ajax({
        url: 'ajax.php',
        contentType: 'application/x-www-form-urlencoded',
        type: 'post',
        data: data,
        success: function( data, textStatus, jQxhr ){
        console.log(data);
            $('#recipe_title_box').html('Update Recipe ' + data.recipe_name);
            $('[name=recipe_image]').val(data.recipe_image);
            $('[name=rest_category]').val(data.rest_category);
            $('[name=rest_ratting]').val(data.rest_ratting);
            $('[name=recipe_name]').val(data.recipe_name);
            $('[name=recipe_Ingredients]').val(data.recipe_Ingredients);
            $('[name=recipe_directions]').val(data.recipe_directions);
            $('[name=recipe_order]').val(data.recipe_order);
            $('#add-recipe-modal').modal('show');

        },
        error: function( jqXhr, textStatus, errorThrown ){
        console.log(errorThrown);
        }
    });
}
function cleanModal(){
  er_id = 0;
  $('#recipe_title_box').html('Add new Recipe');
  $('[name=rest_category]').val('');
  $('[name=rest_ratting]').val('');
  $('[name=recipe_name]').val('');
  $('[name=recipe_Ingredients]').val('');
  $('[name=recipe_directions]').val('');
  $('[name=recipe_order]').val(0);
}
(function($) {

})(jQuery); // End of use strict