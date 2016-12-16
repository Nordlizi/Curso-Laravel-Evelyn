<!-- ***** Scripts here ***** --> 
  <!-- Scripts -->
  <script src="{{ asset('js/all.js')}}"></script>    

  <!-- activate WOW.js (ya está cargada al principio del html code) --> 
  <script> new WOW().init(); </script>

 



    <!-- SMOOTH SCROLL -->
  <script>
  $(function() {
    // This will select everything with the class smoothScroll
    // This should prevent problems with carousel, scrollspy, etc...
    $('.smoothScroll').click(function() {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 800); // The number here represents the speed of the scroll in milliseconds
          return false;
        }
      }
    });
  });
  </script>
  <!-- End of SMOOTH SCROLL -->





<!-- hidden bar to show on scroll -->
<script>
  $(window).scroll(function(e){
    if ($(this).scrollTop() > 320) { // choose the value you want.
        $('#mynavbar:hidden').slideDown("slow"); //you can use fadeIn();
    } else {
        $('#mynavbar:visible').slideUp('slow'); // you can use fadeOut();
    }
});
</script>


<!-- hidden #top button -->
<script>
  (function ($) {
  $(document).ready(function(){
  $(".navbar").hide();
  $(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        $('.navbar').fadeIn();
      } else {
        $('.navbar').fadeOut();
      }
    });
  });

});
});
</script>
