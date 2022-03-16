<?php
$rests = $db->query("SELECT * FROM resturant order by rest_order");
?>
<br>
<span class="p-12 ml-3">Resturants</span>

<ul class="nav nav-tabs flex-column border-0 pl-4 pb-4" id="myTab" role="tablist">
   <?php
      for ($i=0; $i < count($rests); $i++) { 
         $rest = $rests[$i];
         echo '
      <li class="nav-item " >
         <a class="nav-link" id="rest-tab" data-toggle="tab" href="#rest"  onclick="getRestData('.$rest['rest_id'].')"
         role="tab" aria-controls="rest" aria-selected="false">
            <i style="background:'.$rest['rest_color'].'" class="icofont-location-pin"></i> '.$rest['rest_name'].'</a>
      </li>';
      }
   ?>
</ul>

<p class="ml-4 text-black font-weight-bold">
      <a class="text-primary mr-3" data-toggle="modal" data-target="#add-rest-modal" href="#"><i class="icofont-ui-add"></i> Add Resturant</a>
</p>