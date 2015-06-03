
$(document).ready(function(e) {

$('.menu-icon').on('click',function(){
	$('.mobile-menu').slideToggle();
});

$('.mobile-menu ul').on('click','li',function() {
		var $this = $(this);
		//$('.submenu').slideUp();
		if($this.find('.submenu').is(':hidden')){
			$this.find('.submenu').slideDown().end().siblings('li').find('.submenu').slideUp();
		}else{
			$('.submenu').slideUp();
		}
	});



//FOOTER ACCORDIAN
$('.footer-accordian').click(function(){
	var $this = $(this),
		$wraper = $this.parents('.f-accordian-row');
		$wraper.find('.accordian-article').slideUp();
		$(this).next('div:hidden').slideDown();
});


		
$("select.custom").each(function() {					
var sb = new SelectBox({
	selectbox: $(this),
	height: 'auto',
	width: 'auto',
	changeCallback : function(pageName){
		gotoPage(pageName);
	}
	});
});
//SELECT BOX END


$('#moneyrow li').on('click', function(){
	var num = $(this).index();
	$(this).addClass('active').siblings('li').removeClass('active');
	$('.account-arapper:eq('+num+')').show().siblings('.account-arapper').hide();
	return false;
});	
// ACCOUNT DASBORD AND TAB END

//custem checkbox enabled disable
if($("[name='my-checkbox']").length){
	$("[name='my-checkbox']").bootstrapSwitch({onText:'Enabled', offText:'Disabled', handleWidth:55, labelWidth:30});
}


if($( "#photoSelect" ).lenght){
/* CREATE SEARCH USER SELECT*/
	var data = [
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
		});
}
		/* CREATE SEARCH USER SELECT END*/
		
});
/*
function gotoPage(pageName){
	document.location.href = pageName;
}
*/