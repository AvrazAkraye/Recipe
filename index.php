<?php
   include_once "header.php";
   include_once "modal.php";
?>
   <body>
      <section class="section pt-4 pb-4 gw-account-page">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <div class="gw-account-page-left shadow-sm rounded bg-white h-100">
                     <div class="border-bottom p-4">
                        <div class="gw-user text-center">
                           <div class="gw-user-media">
                              <img class="mb-3 shadow-sm mt-1" src="img/user/avraz.png" alt="gurdeep singh gw">
                              <div class="gw-user-media-body">
                                 <h6 class="mb-2" id="user_name"><?=$user[0]['user_name'];?></h6>
                                 <p class="mb-1" id="user_phone"><?=$user[0]['user_phone'];?></p>
                                 <p id="user_email"><?=$user[0]['user_email'];?></p>
                                 <p class="mb-0 text-black font-weight-bold"><a class="text-primary mr-3" data-toggle="modal" data-target="#edit-profile-modal" href="#"><i class="icofont-ui-edit"></i> EDIT</a></p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <?php
                        require_once "sectionRestMenu.php";
                     ?>
                  </div>
               </div>
               <div class="col-md-9">
                  <div class="gw-account-page-right rounded shadow-sm bg-white p-4 h-100">
                     <div class="tab-content" id="myTabContent">
                     <?php
                       require "sectionSkills.php";  
                      ?>
                      
      <section class="section pb-5 products-listing tab-pane fade" id="rest" role="tabpanel" aria-labelledby="rest-tab">
          <div id="resturantData"></div>
     </section>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   <?php
      include_once "footer.php";
   ?>
   </body>
</html>