  // гамбургер меню
  $(function(){
      var $mt = $('.hamburger3');
      var $menu = $('.w3-bar');

      $(window).resize(function(){
        if($menu.css('display') == 'none' && window.innerWidth > 420){
          $menu.show();
        }
      });
      $mt.click(function(){
        $menu.slideToggle(500);
      });
  });

  /*--------------*/