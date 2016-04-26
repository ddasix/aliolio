@foreach ($product_infos as $product_info)
<div class="product">
	<div class="author_wrap">
		<span class="profile_img">
   			<img src="../image/profile_img.png">
		</span>
		<a href="#">@biggerbig</a>
		<strong>54분전</strong>
	</div>
	<div class="list_thumb">
		<a class="detail_trigger" data-info="{{ json_encode($product_info) }}" data-pcode="{{ $product_info['product_id'] }}"><img src="{{ $product_info['image'] }}" class="produvt_thumb" /></a>
		<div class="hashtag_wrap">
			@foreach ($product_info['description'] as $description)
			<a href="#" class="list_hashtag">#{{ $description }}</a>
			@endforeach
		</div>
	</div>
	<div class="list_post">
		<p>"이건 계속 먹어야 겠다는 걸. 별로 큰 기대 없이 먹었고 2주가 지나도 달라진걸 모르겠더니 어느 날 거울을 보는데 얼굴이 번쩍번쩍한게 레알 광이 돈다. 기름긴가 싶어서 세수하는데 얼굴이... 으잉? 피부가 왜이리 탱탱함? 당황스럽다ㅋㅋㅋ 얼른 재주문 해야징"</p>
	</div>
	<strong class="list_detail">{{ $product_info['title'] }}</strong>
	<div class="product_info">
		<span id="clip_rate" class="clip_toggle" class="">382</span>
		<span id="view_rate">4,827</span>
		<span id="cmnt_rate">185</span>
		<a href="http://kr.iherb.com/Madre-Labs-Omega-3-Premium-Fish-Oil-100-Fish-Gelatin-Softgels/62118" class="buy_btn">₩ {{ $product_info['amount_price'] }}</a>
	</div>
</div>
@endforeach