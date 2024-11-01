window.onload = function() { 

  jQuery('#tbm-free-button-remover').click(function(){
    jQuery('.tbm_free_body_response').css('transition', '0.3s');
    jQuery('.tbm_free_topbar_response').css('opacity', '0');

    setTimeout(function(){
      jQuery('body').css('margin-top', '0');
      jQuery('#tbm_free_header').removeClass('tbm_free_topbar_response');
      jQuery('body').removeClass('tbm_free_body_response');
    }, 100);
  });

}