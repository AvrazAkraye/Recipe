<?php
require_once("db/Db.class.php");
$db = new DB();
$user = $db->query("SELECT * FROM users where `user_id` = 1");


if(isset($_POST['getRecipe']) & isset($_POST['key']) & $_POST['key'] == 'WG'){
    $recipe_id = $_POST['recipe_id'];
    $recipe = $db->query("SELECT * FROM recipe where recipe_id = $recipe_id order by recipe_order");
  
    header('Content-Type: application/json');
	echo json_encode($recipe[0]);
    return;
}

if(isset($_POST['updateRecipe']) & isset($_POST['key']) & $_POST['key'] == 'WG'){
    $user_name = $_POST['user_name'];
    $user_phone = $_POST['user_phone'];
    $user_email = $_POST['user_email'];
    $db->query("UPDATE users set 
    `user_name` = '$user_name',
    `user_phone` = '$user_phone',
    `user_email` = '$user_email'
    where `user_id` = 1");
    $user = $db->query("SELECT * FROM users where `user_id` = 1");
    header('Content-Type: application/json');
	echo json_encode($user[0]);
    return;
}

if(isset($_POST['updateProfile']) & isset($_POST['key']) & $_POST['key'] == 'WG'){
    $user_name = $_POST['user_name'];
    $user_phone = $_POST['user_phone'];
    $user_email = $_POST['user_email'];
    $db->query("UPDATE users set 
    `user_name` = '$user_name',
    `user_phone` = '$user_phone',
    `user_email` = '$user_email'
    where `user_id` = 1");
    $user = $db->query("SELECT * FROM users where `user_id` = 1");
    header('Content-Type: application/json');
	echo json_encode($user[0]);
    return;
}

if(isset($_POST['addRest']) & isset($_POST['key']) & $_POST['key'] == 'WG'){
    $rest_name = $_POST['rest_name'];
    $rest_address = $_POST['rest_address'];
    $rest_order = $_POST['rest_order'];
    $rest_color = $_POST['rest_color'];


    $insert = $db->query("INSERT INTO `resturant` ( `rest_name`, `rest_address`, `rest_color`, `rest_order`) 
    VALUES ('$rest_name', '$rest_address', '$rest_color', $rest_order)");
    if($insert){
        echo 1;
        return;
    }
	echo 0;
    return;
}

if(isset($_POST['updateRest']) & isset($_POST['key']) & $_POST['key'] == 'WG'){
    $rest_name = $_POST['rest_name'];
    $rest_address = $_POST['rest_address'];
    $rest_order = $_POST['rest_order'];
    $rest_color = $_POST['rest_color'];
    $rest_id = $_POST['rest_id'];
    
    $update = $db->query("UPDATE `resturant` set  
    rest_name = '$rest_name',
    rest_address = '$rest_address',
    rest_order = '$rest_order',
    rest_color = '$rest_color'
    WHERE rest_id = $rest_id");
    if($update){
        echo 1;
        return;
    }
	echo 0;
    return;
}

if(isset($_POST['addRecipe']) & isset($_POST['key']) & $_POST['key'] == 'WG'){
    $rest_id = $_POST['rest_id'];
    $recipe_name = $_POST['recipe_name'];
    $recipe_Ingredients = $_POST['recipe_Ingredients'];
    $recipe_directions = $_POST['recipe_directions'];
    $recipe_image = $_POST['recipe_image'];
    $recipe_order = $_POST['recipe_order'];
    $rest_ratting = $_POST['rest_ratting'];
    $rest_category = $_POST['rest_category'];

    

    $insert = $db->query("INSERT INTO `recipe` (`rest_ratting`,`rest_category`,`rest_id`,`recipe_name`, `recipe_Ingredients`, `recipe_directions`, `recipe_image`, `recipe_order`)
     VALUES ('$rest_ratting', '$rest_category', $rest_id, '$recipe_name', '$recipe_Ingredients', '$recipe_directions', '$recipe_image', '$recipe_order');");
    if($insert){
        echo 1;
        return;
    }
	echo 0;
    return;
}
if(isset($_POST['updateRecipe1']) & isset($_POST['key']) & $_POST['key'] == 'WG'){
    $rest_id = $_POST['rest_id'];
    $recipe_name = $_POST['recipe_name'];
    $recipe_Ingredients = $_POST['recipe_Ingredients'];
    $recipe_directions = $_POST['recipe_directions'];
    $recipe_image = $_POST['recipe_image'];
    $recipe_order = $_POST['recipe_order'];
    $recipe_id = $_POST['recipe_id'];
    $rest_ratting = $_POST['rest_ratting'];
    $rest_category = $_POST['rest_category'];


    $update = $db->query("UPDATE `recipe` SET
    recipe_name = '$recipe_name',
    recipe_Ingredients = '$recipe_Ingredients',
    recipe_directions = '$recipe_directions',
    recipe_order = '$recipe_order',
    rest_ratting = '$rest_ratting',
    recipe_image = '$recipe_image',
    rest_category = '$rest_category',
    recipe_name = '$recipe_name'
    WHERE recipe_id = '$recipe_id'");


	echo 1;
    return;
}
if(isset($_POST['deleteRecipe']) & isset($_POST['key']) & $_POST['key'] == 'WG'){
    $recipe_id = $_POST['recipe_id'];
    $delete = $db->query("DELETE FROM `recipe` WHERE `recipe_id` = $recipe_id");
    if($delete){
        echo 1;
        return;
    }
	echo 0;
    return;
}
if(isset($_POST['deleteRest']) & isset($_POST['key']) & $_POST['key'] == 'WG'){
    $rest_id = $_POST['rest_id'];
    $delete = $db->query("DELETE FROM `resturant` WHERE `rest_id` = $rest_id");
    $delete = $db->query("DELETE FROM `recipe` WHERE `rest_id` = $rest_id");
    if($delete){
        echo 1;
        return;
    }
	echo 0;
    return;
}


if(isset($_POST['getRecipehtml']) & isset($_POST['key']) & $_POST['key'] == 'WG'){

    $recipe_id = $_POST['recipe_id'];
    $recipe = $db->query("SELECT * FROM recipe where `recipe_id` = $recipe_id");
    $recipe = $recipe[0];
    $html = '<h1>'.$recipe['recipe_name'].'</h1>
    <div class="card offer-card border-0 shadow-sm mb-4">
                <div class="card-body">
                <h5 class="card-title">Ingredients</h5>
                <p class="card-text">
                '.$recipe['recipe_Ingredients'].'
                </p>
                </div>
            </div>';
    $html .= '<div class="card offer-card border-0 shadow-sm mb-4">
                <div class="card-body">
                <h5 class="card-title">Directions</h5>
                <p class="card-text">
                '.$recipe['recipe_directions'].'
                </p>
                </div>
            </div>';
    echo $html;
}



?>