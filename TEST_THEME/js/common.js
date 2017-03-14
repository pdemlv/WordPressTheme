jQuery(document).ready(function($){

	$(".row_gall").mixItUp();

	$(".btn_gall").click(function(){
    $(".btn_gall").removeClass("active_tab");
    $(this).addClass("active_tab");
    }); 
       
});