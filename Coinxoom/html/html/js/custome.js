
$(document).ready(function(){
	$('#menu').on('click', 'li>a', function(){
		$(this).next('.submenu').fadeIn().parents('li').siblings('li').find('.submenu').fadeOut();
		$('.submenu a').click(function(){
			$(this).parents('.submenu').hide();
		});
	});

	 $(document).on('click', function(event){
        if(!$(event.target).closest('#menu').length){
            $(".submenu").fadeOut();
        }
    });
		
	
});
