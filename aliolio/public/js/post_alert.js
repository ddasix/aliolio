$(function () {
	$('.action-button').on('click', function () {
		$('.post_alert').attr('style', 'display:normal;');
		setTimeout(function () {
			$(".post_alert").attr('style', 'display:none;');
		}, 2000);
	});
});