(function($){
	$(document).ready(function(){
		wp.customize('copy_right',function(value){
			value.bind(function(to){
				$('h1').text(to);
			});
		});
		wp.customize('copyright_visibility',function(value){
			value.bind(function(to){
				true== to ? $('h1').hide();
			});
		});

		wp.customize('copyright_color',function(value){
			value.bind(function(to){
				$('h1').css('color',to)
			})
		})

	});



})(jQuery)