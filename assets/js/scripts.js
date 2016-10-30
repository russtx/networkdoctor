(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
                // accordion mobile view
		  $(function() {
    var active = $("#accordion h3:first")[0]
    $("#accordion").accordion({
        activate: function(event, ui) {
            active = ui.newHeader[0]
        }

    }).children("h3").on("click", function(e) {
        if (this === active)
            $("#accordion").accordion("option", "active", 3)
    });
		$("#accordion").accordion({
  active: -1
});
$("#accordion").accordion({ collapsible: true });
});


 // next  
  $("a").click(function(){
   var myelement = $(this).attr("href")
    $(myelement).slideToggle("slow");
    $(".toggle:visible").not(myelement).hide();
    
  });
  // next 
   
   $('.open-mypage1,#mypage-info1 button').click(toggleDiv);
function toggleDiv(){
 $('#mypage-info1').slideToggle('2000', "swing", function () {
        // Animation complete.
    });
}
//next

  

 $('#cat_icon,.panel_title:nth-last-child(odd)').click(function () {
    $('#categories,#cat_icon:nth-last-child(odd)').stop().slideToggle('slow');
});


    

$(document).ready(function()
{ 
   var a = $(".service");
   a.click(function(e)
   {

       e.preventDefault();

   });
});

//next

$('.grabPromo').click(function(e){
    $('.slideDown').slideToggle();
    
    
});

$('#tab-wrapper li:first').addClass('active');
$('#tab-body > section').hide();
$('#tab-body > section:first').show();
$('#tab-wrapper a').click(function() {
    $('#tab-wrapper li').removeClass('active');
    $(this).parent().addClass('active');
    var activeTab = $(this).attr('href');
    $('#tab-body > section:visible').hide();
    $(activeTab).show();
    return false;
});

$('#tab-wrapper2 li:first').addClass('active');
$('#tab-body2 > section').hide();
$('#tab-body2 > section:first').show();
$('#tab-wrapper2 a').click(function() {
    $('#tab-wrapper2 li').removeClass('active');
    $(this).parent().addClass('active');
    var activeTab = $(this).attr('href');
    $('#tab-body2 > section:visible').hide();
    $(activeTab).show();
    return false;
});



// keep

	});
	
})(jQuery, this);

