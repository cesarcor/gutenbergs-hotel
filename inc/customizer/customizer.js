( function($){

  wp.customize('gh_set_header_bg_color', function(val){
    val.bind(function(newval){
      $('.site-header').css('background-color', newval);
    });
  });

  wp.customize('gh_set_top_bar_color', function(val){
    val.bind(function(newval){
      $('.top-bar').css('background-color', newval);
    });
  });

  wp.customize('gh_set_header_font_size', function(val){
    val.bind(function(newval){
      $('.site-header nav a').css('font-size', newval);
    });
  });

})(jQuery);
