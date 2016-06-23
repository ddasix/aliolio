
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

function PostStep(){
	
}
PostStep.prototype = {};

PostStep.prototype.checkProduct = function(pcode, callback){

	var request = $.ajax({
		method: "GET",
		dataType:'json',
		url: '/product/info/' + pcode		
	});
	request.done(function( msg ) {
		console.log(msg);
		if(msg.result == 'success'){
			if(typeof callback == 'function'){
				callback(msg.data);
			}
		}
	});

	request.fail(function( jqXHR, textStatus ) {
		alert( "상품코드 오류: " + textStatus );
	});
}

PostStep.prototype.next = function(current_fs, next_fs){
		
	//activate next step on progressbar using the index of next_fs
	$("#step_status li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 0)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
				'transform': 'scale('+scale+')',
				'position': 'absolute'
			});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 400, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
};
$(".next").on("click",function(){
	if(animating) return false;
	
	var postStep = new PostStep();
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	if($(this).attr('data-next') == 'checkurl'){
		var url_ = $("input[name=url]").val().split("/")
		postStep.checkProduct(url_[url_.length - 1], function(data){
			console.log(data);
			animating = true;
			postStep.next(current_fs,next_fs);
		});
	}else{
		postStep.next(current_fs,next_fs);
	}
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#step_status li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 0)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 400, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
})
