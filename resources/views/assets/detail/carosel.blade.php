<div id="detail_img_carosel" class="owl-carousel">
	@foreach ($images as $image)
	<div><img src="{{ $image }}"></div>
	@endforeach
</div>