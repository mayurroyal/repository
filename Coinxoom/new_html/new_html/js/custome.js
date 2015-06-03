
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

//custem checkbox enabled disable
$("[name='my-checkbox']").bootstrapSwitch({onText:'Enabled', offText:'Disabled', handleWidth:55, labelWidth:30});


// CREAT ACCOUNT DASBORD AND TAB
	/*$('#profile-tab li').on('click',function(){
		var num = $(this).index();
		$(this).addClass('active').siblings('li').removeClass('active');
		$('.deposite-section:eq('+num+')').hide().show().siblings('.deposite-section').hide();
		return false;
	});
*/
	$('#moneyrow li').on('click', function(){
		var num = $(this).index();
		$(this).addClass('active').siblings('li').removeClass('active');
		$('.account-arapper:eq('+num+')').show().siblings('.account-arapper').hide();
		return false;
	});
	
// CREAT ACCOUNT DASBORD AND TAB END





/* CREATE SEARCH USER SELECT*/
	/*var data = [
		{"label":"Aragorn", "actor":"profil"},
		{"label":"Arwen", "actor":"pro-2"},
		{"label":"Bilbo Baggins", "actor":"profil"},
		{"label":"Boromir", "actor":"pro-2"},
		{"label":"Frodo Baggins", "actor":"profil"},
		{"label":"Gandalf", "actor":"pro-2"},
		{"label":"Gimli", "actor":"profil"},
		{"label":"Gollum", "actor":"pro-2"},
		{"label":"Legolas", "actor":"profil"},
		{"label":"Meriadoc Merry", "actor":"pro-2"},
		{"label":"Peregrin Pippin", "actor":"profil"},
		{"label":"Samwise Gamgee", "actor":"pro-2"},
		{"label":"Legolas", "actor":"profil"},
		{"label":"Meriadoc Merry", "actor":"pro-2"},
		{"label":"Peregrin Pippin", "actor":"profil"},
		{"label":"Samwise Gamgee", "actor":"pro-2"}
		];
		
		$( "#photoSelect" ).autocomplete(
	{
		source:data,
		select: function( event, ui ) {
			$( "#photoSelect" ).val( ui.item.label)
			.attr('style', 'background-image: url(images/select/'+ui.item.actor+'.jpg'+'); background-repeat: no-repeat;');			
			return false;
		},
		open: function( event, ui ) {
			$('.ui-autocomplete').wrapInner('<div class="scroll-menu"></div>').append('<button type="button" class="btn-fi-seler"><i class="fa fa-search"></i> find seller</button>');
		}
	}).data( "uiAutocomplete" )._renderItem = function( ul, item ) {
		return $( "<li></li>" )
			.data( "item.autocomplete", item )
			.addClass('listMenu')
			.attr('style', 'background-image: url(images/select/'+item.actor+'.jpg'+'); background-repeat: no-repeat;')
			.append(item.label)			
			.appendTo( ul );
		};
		
		$( "#photoSelect" ).on('keyup', function(){
			if($(this).val() == ''){
				$(this).removeAttr('style');
			}
		});*/
		/* CREATE SEARCH USER SELECT END*/
	
	
});
