jQuery(function() {
	$('.faq-showcontent').click(function() {
		var paren = $(this).parents('li');
		if($(this).hasClass('active')) {
			paren.find('.faq-question').slideUp();
			$(this).removeClass('active');
			$(this).find('.fa').removeClass('fa-minus-circle').addClass('fa-plus-circle');
			$(this).find('.faq-vtext').text('Xem trả lời');
		} else {
			$('.faq-showcontent').removeClass('active');
			$('.faq-question').slideUp();
			$('.faq-showcontent .fa').removeClass('fa-minus-circle').addClass('fa-plus-circle');
			$('.faq-showcontent .faq-vtext').text('Xem trả lời');
			paren.find('.faq-question').slideDown();
			$(this).addClass('active');
			$(this).find('.fa').removeClass('fa-plus-circle').addClass('fa-minus-circle');
			$(this).find('.faq-vtext').text('Đóng trả lời');
		}
		return false;
	});
	$('.toggle-menu').on('click',function() {
		$('#menu-main').slideToggle();
		return false;
	});
	$('.toggle-search').on('click',function() {
		$(this).find('i').toggleClass('fa-search fa-close');
		$('.the-search').toggleClass('active');
		return false;
	});

	$('#menu-main .menu-menu-main-container > ul > li.menu-item-has-children').append('<i class="fa fa-angle-down"></i>');
	// $('#menu-main .menu-menu-main-container > ul > li.menu-item-has-children i').on('click',function() {
	// 	$(this).toggleClass('fa-angle-down fa-angle-up');
	// });
	$('.fa-angle-down').click(function(){
		if($(this).hasClass('active-fa')){
			$(this).removeClass('active-fa');
			$(this).parents('#menu-main .menu-menu-main-container > ul > li').find('.sub-menu').slideUp();
		}else{
			$('.sub-menu').slideUp();
			$(this).parents('#menu-main .menu-menu-main-container > ul > li').find('.sub-menu').slideDown();
			$('.fa-angle-down').removeClass('active-fa');
			$(this).addClass('active-fa');
		}
	});


	$('.scrollbar-inner').scrollbar();
});
$(window).scroll(function() {
	if($(window).width() > 1199) {
		if($(window).scrollTop() > $('.the-menu').offset().top) $('#menu-main').addClass('fixed');
		else $('#menu-main').removeClass('fixed');
	}
});