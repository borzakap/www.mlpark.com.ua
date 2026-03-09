/* Tabs */
$(function() {

    $(".tab-content").hide();
    $(".tab-content:first").show();
  
    $(".choose-flat-tabs ul li").click(function() {
        
        $(".tab-content").hide();
        var activeTab = $(this).attr("rel"); 
        $("#"+activeTab).fadeIn();		
        
        $(".choose-flat-tabs ul li").removeClass("tab-active");
        $(this).addClass("tab-active");
  
      $(".tab-content-title").removeClass("tab-active");
      $(".tab-content-title[rel^='"+activeTab+"']").addClass("tab-active");
    });
  
    $(".tab-content-title").click(function() {
          
        $(".tab-content").hide();
        var d_activeTab = $(this).attr("rel"); 
        $("#"+d_activeTab).fadeIn();
        
      $(".tab-content-title").removeClass("tab-active");
        $(this).addClass("tab-active");
        
      $(".choose-flat-tabs ul li").removeClass("tab-active");
      $(".choose-flat-tabs ul li[rel^='"+d_activeTab+"']").addClass("tab-active");
    });
  
    $('.choose-flat-tabs ul li').last().addClass("tab_last");

});
/* END Tabs */