(function($) {
  "use strict"; // Start of use strict
$(window).on('hashchange', function() {
    var url = document.location.toString();
    if (url.match('#')) {
    //$('.nav-tabs a[href=#'+url.split('#')[1]+']').tab('show') ;
    $('a[href="' + window.location.hash + '"]').trigger('click');
    } 
   $('.nav-tabs a').on('shown', function (e) {
    window.location.hash = e.target.hash;
   })
});
var url = document.location.toString();
if (url.match('#')) {
    //$('.nav-tabs a[href=#'+url.split('#')[1]+']').tab('show') ;
    $('a[href="' + window.location.hash + '"]').trigger('click');
} 
// Change hash for page-reload
$('.nav-tabs a').on('shown', function (e) {
    window.location.hash = e.target.hash;
})


// Tooltip
$('[data-toggle="tooltip"]').tooltip();

})(jQuery); // End of use strict