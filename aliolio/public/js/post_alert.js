/*
$(function () {
	$('.action-button').on('click', function () {
		$('.post_alert').attr('style', 'display:normal;');
		setTimeout(function () {
			$(".post_alert").attr('style', 'display:none;');
		}, 2000);
	});
});
*/
function PostAlert(){};
PostAlert.prototype = {};
PostAlert.prototype.alert = function(massage){
	var $post_alert = $('.post_alert');
	$post_alert.children('p').text(massage);
	$post_alert.attr('style', 'display:normal;');
	setTimeout(function () {
		$post_alert.attr('style', 'display:none;');
	}, 2000);
}
var postAlert = new PostAlert();