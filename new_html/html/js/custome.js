
$(document).ready(function(){

// CREATE HEADER MENU
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
// CREATE HEADER MENU END
		
$("select.custom").each(function() {					
var sb = new SelectBox({
	selectbox: $(this),
	height: 'auto',
	width: 'auto'
	});
});
//SELECT BOX END


// CREAT ACCOUNT DASBORD AND TAB
	$('#profile-tab li').on('click',function(){
		var num = $(this).index();
		$(this).addClass('active').siblings('li').removeClass('active');
		$('.deposite-section:eq('+num+')').slideDown().show().siblings('.deposite-section').slideUp();
		return false;
	});

	$('#moneyrow li').on('click', function(){
		var num = $(this).index();
		$(this).addClass('active').siblings('li').removeClass('active');
		$('.account-arapper:eq('+num+')').slideDown().siblings('.account-arapper').slideUp();
		return false;
	});
// CREAT ACCOUNT DASBORD AND TAB END
	
	
});
