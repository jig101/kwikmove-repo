( function( $ ) {
//toggel the headder contact info
  $( document ).ready(function() {
    $('.mb-contactInfo div#z01').animate({"opacity" : "toggle"}, 1000);    
    $(".mb-contactInfo .action").click (function(){
      var $this = $(this);
      var target = $this.data('content');
      $('.mb-contactInfo .action').not($this).each(function(){
         var $other = $(this);
         var otherTarget = $other.data('content');
         $('.mb-contactInfo  '+otherTarget).hide();       
      });

        $('.mb-contactInfo '+target).animate({"opacity" : "toggle"}, 1000);    
    });
  });

} )( jQuery );