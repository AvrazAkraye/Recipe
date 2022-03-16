
      
      
      <footer class="pt-4 pb-4 text-center">
         <div class="container">
            <p class="mt-0 mb-0">© Copyright 2022 . All Rights Reserved</p>
         </div>
      </footer>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Custom scripts for ajax-->
<script src="js/script.js"></script>
<!-- Bootstrap core JavaScript-->
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Custom scripts-->
<script src="js/custom.js"></script>
<!-- Summernote Editor -->
<script src="vendor/summernote/summernote-bs4.min.js"></script>
   <script>
      $('.editor').summernote({
            fontSizes: ['10', '14'],
            toolbar: [
               // [groupName, [list of button]]
               ['style', ['bold', 'italic', 'underline', 'clear']],
               ['font', ['strikethrough']],
               ['fontsize', ['fontsize']],
               ['color', ['color']],
               ['para', ['ul', 'ol', 'paragraph']]
            ],
            placeholder: 'Write here ....',
            tabsize: 2,
            height: 200
      });
   </script>