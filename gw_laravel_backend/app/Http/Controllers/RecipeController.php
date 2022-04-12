<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recipe;

class RecipeController extends Controller
{
    function getData(){
        // load limit and more is important
        return recipe::all();
    }
    function getDataById(Request $req){
        $id = (int) $req->recipe_id;
        return recipe::find($id);
    }

    function remove(Request $req){
        $key = "key123"; // simple validation // we will use JWT in real projects

        if(!isset($req->recipe_id) && !isset($req->recipe_name) ){
            return;
        }
        if($req->key != $key ){
            return;
        }

        $recipe_id = (int) $req->recipe_id;
        $res = recipe::where('recipe_id',$recipe_id)->delete();
        if ($res){
            $data=['status'=>'1','msg'=>'success'
          ];
          }else{
            $data=['status'=>'0','msg'=>'fail'];
        }
        return $data;
    }

    function add(Request $req){
        if(!isset($req->recipe_name)){
            return;
        }
        $rec = new Recipe;
        $rec->recipe_name = $req->recipe_name;
        $rec->rest_category = $req->rest_category;
        $rec->recipe_Ingredients = $req->recipe_Ingredients;
        $rec->recipe_directions = $req->recipe_directions;
        $rec->recipe_image = $req->recipe_image;
        $rec->rest_id = 1;
        $rec->rest_ratting = $req->rest_ratting;
        $rec->recipe_order = $req->recipe_order;

        $resualt = $rec->save();

        if($resualt){
            return ["Data" => "Saved"];
        }
        return ["Data" => "Operation Failed"];
    }


    function update(Request $req){
        if(!isset($req->recipe_id)){
            return;
        }

        $recipe_id = $req->recipe_id;
        $recipe_name = $req->recipe_name;
        $rest_category = $req->rest_category;
        $recipe_Ingredients = $req->recipe_Ingredients;
        $recipe_directions = $req->recipe_directions;
        $recipe_image = $req->recipe_image;
        $rest_ratting = $req->rest_ratting;
        $recipe_order = $req->recipe_order;

        

        $resualt = recipe::where('recipe_id', $recipe_id)
        ->update([
            'recipe_name' => $recipe_name,
            'rest_category' => $rest_category,
            'recipe_Ingredients' => $recipe_Ingredients,
            'recipe_directions' => $recipe_directions,
            'recipe_image' => $recipe_image,
            'rest_ratting' => $rest_ratting,
            'recipe_order' => $recipe_order
         ]);

        if($resualt){
            return ["Data" => "Saved"];
        }
        return ["Data" => "Operation Failed"];
    }
    
}
