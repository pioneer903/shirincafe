(function(){

	jQuery(document).ready(function(){

		// var is_category =  jQuery('ul.products li').hasClass('product-category');


		// if( is_category){
		// 	jQuery('ul.products').removeClass('list');
		//     jQuery('ul.products').addClass('grid');
		// }else{
		// 	jQuery('ul.products').removeClass('grid');
		//     jQuery('ul.products').addClass('list');
		// }
	   
	  /* Keep Menu navigation sticky when scroll the pages */
	  if($('body').hasClass('page-id-45') || $('body').hasClass('parent-pageid-45')){ // if it is Menu page or its child page...
	  	var eTop = $('.menu_navigation').offset().top; //get the offset top of the element
	  	if (eTop > 100) {
	  		eTop = 85
	  	}
	  	$(window).scroll(function() { //when window is scrolled
				position_element(eTop - $(window).scrollTop()); 
			});	
	  }


	  var position_element = function position_element(top_position) {
	  	console.log(top_position)
	  	if(top_position < -230){
	  		$(".menu_navigation").addClass('sticky');	
				$('.fa-shopping-cart').addClass('sticky')
	  	}else{
	  		$(".menu_navigation").removeClass('sticky');		  		
	  		$(".fa-shopping-cart").removeClass('sticky');		  		
	  	}
		}
		
		
		$('li#menu-item-68 a').html('<i class="fa fa-shopping-cart"></i>');

	}); // /document.ready
})();