@foreach($items as $item)
<div class="product">
	<div class="author_wrap">
		<span class="profile_img">
                       <img src="../image/profile_img.png">
                   </span>
		<a href="#">@biggerbig</a>
		<strong>54분전</strong>
	</div>
	<div class="list_thumb">
		<a href="/productsDetail/{{$item->PCODE}}"><img src="http://g02.a.alicdn.com/kf/HTB1awJnIVXXXXawXXXXq6xXFXXXX/2015-new-spring-autumn-Houndstooth-casual-blazers-women-long-aragraph-slim-suit-jackets-OL-temperament-coats.jpg" /></a>
		<div class="hashtag_wrap">
			<a href="#" class="hashtag">#원피스</a>
			<a href="#" class="hashtag">#레이스</a>
			<a href="#" class="hashtag">#데일리룩</a>
			<a href="#" class="hashtag">#머스트해브</a>
			<a href="#" class="hashtag">#심플룩</a>
			<a href="#" class="hashtag">#미니원피스</a>
		</div>
	</div>
	<div class="list_post">

		<p>"배송은 한 7일 정도 걸린거 같구요ㅎ 판매자 피드백도 괜찮았던거 같아요 ㅎ 친절하고 ㅎ 품질은 만원짜리 치고는 좋은편이에요 ㅎ 디테일하고 추천합니다."</p>
	</div>
	<div class="product_info">
		<span id="clip_rate" class="select">382</span>
		<span id="view_rate">4,827</span>
		<span id="cmnt_rate">185</span>
		<a href="http://www.aliexpress.com/item/2015-new-spring-autumn-Houndstooth-casual-blazers-women-long-paragraph-slim-suit-jackets-OL-temperament-coats/32323206856.html" class="buy_btn">21,382원</a>
	</div>
</div>
@endforeach
<!-- 
<div class="product">
	<div class="author_wrap">
		<span class="profile_img">
                       <img src="../image/profile_img.png">
                   </span>
		<a href="#">@biggerbig</a>
		<strong>54분전</strong>

	</div>
	<div class="list_thumb">
		<a href="/products/detail/32510838731"><img src="http://g02.a.alicdn.com/kf/HTB1WRgzIFXXXXcJaXXXq6xXFXXXr/최신-8-win10-chuwi-하이-8-듀얼-부팅-인텔-쿼드-코어-태블릿-PC를-z3736f-2gb-32gb.jpg" /></a>
		<div class="hashtag_wrap">
			<a href="#" class="hashtag">#쿼드코어</a>
			<a href="#" class="hashtag">#유심</a>
			<a href="#" class="hashtag">#듀얼OS</a>
			<a href="#" class="hashtag">#안드로이드4.4</a>
			<a href="#" class="hashtag">#윈도우8.1</a>
			<a href="#" class="hashtag">#CHUWI</a>
			<a href="#" class="hashtag">#HI8</a>
		</div>
	</div>
	<div class="list_post">
		<p>"20만원 이하 제품이라 개인통관번호 없이도 배송받을 수 있구요ㅎ EMS 무료배송이라 배송은 7일정도 걸린거 같아요. 판매자가 배송 시작부터 배송조회 하는 방법까지 안내해주더라구요 ㅎ 그리고 발송할때는 3만원짜리 제품이라고 적어서 보내더라구요. 아마 관세때문인듯 한데 전화오길래 저는 그냥 10만원이라고 솔직하게 이야기 했어요. ㅎ 구매 추천합니다."</p>
	</div>
	<div class="product_info">
		<span id="clip_rate">24,048</span>
		<span id="view_rate">4,827</span>
		<span id="cmnt_rate">771</span>
		<a href="http://www.aliexpress.com/item/Original-8-Chuwi-HI8-Dual-boot-tablets-pc-Windows-8-1-Android-4-4-Intel-Z3736F/32363420266.html" class="buy_btn">143,780원</a>
	</div>
</div>
<div class="product">
	<div class="author_wrap">
		<span class="profile_img">
                       <img src="../image/profile_img.png">
                   </span>
		<a href="#">@biggerbig</a>
		<strong>54분전</strong>

	</div>
	<div class="list_thumb">
		<a href="/products/detail/32540295917"><img src="http://g02.a.alicdn.com/kf/HTB1whNMHVXXXXXEXXXXq6xXFXXXi/Free-Shipping-Fashion-Women-O-Neck-Short-Sleeve-Mesh-Splicing-Floral-Bodycon-Sexy-Fit-Slim-Hip.jpg" /></a>
		<div class="hashtag_wrap">
			<a href="#" class="hashtag">#원피스</a>
			<a href="#" class="hashtag">#레이스</a>
			<a href="#" class="hashtag">#데일리룩</a>
			<a href="#" class="hashtag">#머스트해브</a>
			<a href="#" class="hashtag">#심플룩</a>
			<a href="#" class="hashtag">#미니원피스</a>
		</div>
	</div>
	<div class="list_post">
		<p>"배송은 한 7일 정도 걸린거 같구요ㅎ 판매자 피드백도 괜찮았던거 같아요 ㅎ 친절하고 ㅎ 품질은 만원짜리 치고는 좋은편이에요 ㅎ 디테일하고 추천합니다."</p>
	</div>
	<div class="product_info">
		<span id="clip_rate">382</span>
		<span id="view_rate">4,827</span>
		<span id="cmnt_rate">185</span>
		<a href="http://www.aliexpress.com/item/Free-Shipping-Fashion-Women-O-Neck-Short-Sleeve-Mesh-Splicing-Floral-Bodycon-Sexy-Fit-Slim-Hip/32346247502.html" class="buy_btn">9,540원</a>
	</div>
</div>
<div class="product">
	<div class="author_wrap">
		<span class="profile_img">
                       <img src="../image/profile_img.png">
                   </span>
		<a href="#">@biggerbig</a>
		<strong>54분전</strong>

	</div>
	<div class="list_thumb">
		<a href="/products/detail/32494317793"><img src="http://g03.a.alicdn.com/kf/HTB1KlLGHVXXXXXgXpXXq6xXFXXX8/1pc-New-Arrival-5500-DPI-7-Button-LED-Optical-USB-Wired-Mouse-Gamer-Mice-computer-mouse.jpg" /></a>
		<div class="hashtag_wrap">
			<a href="#" class="hashtag">#쿼드코어</a>
			<a href="#" class="hashtag">#유심</a>
			<a href="#" class="hashtag">#듀얼OS</a>
			<a href="#" class="hashtag">#안드로이드4.4</a>
			<a href="#" class="hashtag">#윈도우8.1</a>
			<a href="#" class="hashtag">#CHUWI</a>
			<a href="#" class="hashtag">#HI8</a>
		</div>
	</div>
	<div class="list_post">
		<p>"20만원 이하 제품이라 개인통관번호 없이도 배송받을 수 있구요ㅎ EMS 무료배송이라 배송은 7일정도 걸린거 같아요. 판매자가 배송 시작부터 배송조회 하는 방법까지 안내해주더라구요 ㅎ 그리고 발송할때는 3만원짜리 제품이라고 적어서 보내더라구요. 아마 관세때문인듯 한데 전화오길래 저는 그냥 10만원이라고 솔직하게 이야기 했어요. ㅎ 구매 추천합니다."</p>
	</div>
	<div class="product_info">
		<span id="clip_rate">24,048</span>
		<span id="view_rate">4,827</span>
		<span id="cmnt_rate">771</span>
		<a href="http://www.aliexpress.com/item/Original-8-Chuwi-HI8-Dual-boot-tablets-pc-Windows-8-1-Android-4-4-Intel-Z3736F/32363420266.html" class="buy_btn">143,780원</a>
	</div>
</div>
<div class="product">
	<div class="author_wrap">
		<span class="profile_img">
                       <img src="../image/profile_img.png">
                   </span>
		<a href="#">@biggerbig</a>
		<strong>54분전</strong>

	</div>
	<div class="list_thumb">
		<a href="/products/detail/32363428552"><img src="http://g04.a.alicdn.com/kf/HTB1CjGXIFXXXXc_XVXXq6xXFXXXN/Portable-Flexible-USB-Mini-Fan-Xiaomi-USB-Fan-For-all-Power-Supply-USB-Output-Free-shipiing.jpg" /></a>
		<div class="hashtag_wrap">
			<a href="#" class="hashtag">#원피스</a>
			<a href="#" class="hashtag">#레이스</a>
			<a href="#" class="hashtag">#데일리룩</a>
			<a href="#" class="hashtag">#머스트해브</a>
			<a href="#" class="hashtag">#심플룩</a>
			<a href="#" class="hashtag">#미니원피스</a>
		</div>
	</div>
	<div class="list_post">
		<p>"배송은 한 7일 정도 걸린거 같구요ㅎ 판매자 피드백도 괜찮았던거 같아요 ㅎ 친절하고 ㅎ 품질은 만원짜리 치고는 좋은편이에요 ㅎ 디테일하고 추천합니다."</p>
	</div>
	<div class="product_info">
		<span id="clip_rate">382</span>
		<span id="view_rate">4,827</span>
		<span id="cmnt_rate">185</span>
		<a href="http://www.aliexpress.com/item/Free-Shipping-Fashion-Women-O-Neck-Short-Sleeve-Mesh-Splicing-Floral-Bodycon-Sexy-Fit-Slim-Hip/32346247502.html" class="buy_btn">9,540원</a>
	</div>
</div>
<div class="product">
	<div class="author_wrap">
		<span class="profile_img">
                       <img src="../image/profile_img.png">
                   </span>
		<a href="#">@biggerbig</a>
		<strong>54분전</strong>

	</div>
	<div class="list_thumb">
		<a href="/products/detail/32351963903"><img src="http://i00.i.aliimg.com/wsphoto/v0/2047837554_1/2014-Ultra-Thin-USB-Optical-Wireless-Mouse-2-4G-Receiver-Super-Slim-Mouse-For-Computer-PC.jpg" /></a>
		<div class="hashtag_wrap">
			<a href="#" class="hashtag">#쿼드코어</a>
			<a href="#" class="hashtag">#유심</a>
			<a href="#" class="hashtag">#듀얼OS</a>
			<a href="#" class="hashtag">#안드로이드4.4</a>
			<a href="#" class="hashtag">#윈도우8.1</a>
			<a href="#" class="hashtag">#CHUWI</a>
			<a href="#" class="hashtag">#HI8</a>
		</div>
	</div>
	<div class="list_post">
		<p>"20만원 이하 제품이라 개인통관번호 없이도 배송받을 수 있구요ㅎ EMS 무료배송이라 배송은 7일정도 걸린거 같아요. 판매자가 배송 시작부터 배송조회 하는 방법까지 안내해주더라구요 ㅎ 그리고 발송할때는 3만원짜리 제품이라고 적어서 보내더라구요. 아마 관세때문인듯 한데 전화오길래 저는 그냥 10만원이라고 솔직하게 이야기 했어요. ㅎ 구매 추천합니다."</p>
	</div>
	<div class="product_info">
		<span id="clip_rate">24,048</span>
		<span id="view_rate">4,827</span>
		<span id="cmnt_rate">771</span>
		<a href="http://www.aliexpress.com/item/Original-8-Chuwi-HI8-Dual-boot-tablets-pc-Windows-8-1-Android-4-4-Intel-Z3736F/32363420266.html" class="buy_btn">143,780원</a>
	</div>
</div>
<div class="product">
	<div class="author_wrap">
		<span class="profile_img">
                       <img src="../image/profile_img.png">
                   </span>
		<a href="#">@biggerbig</a>
		<strong>54분전</strong>

	</div>
	<div class="list_thumb">
		<a href="/products/detail/32493249360"><img src="http://g02.a.alicdn.com/kf/HTB1WdgNIpXXXXahXXXXq6xXFXXXh/Fashion-Women-Jeans-Pants-Lace-Floral-Splice-Wigh-Waist-Jeans-New-2015-Hollow-out-Casual-Women.jpg" /></a>
		<div class="hashtag_wrap">
			<a href="#" class="hashtag">#원피스</a>
			<a href="#" class="hashtag">#레이스</a>
			<a href="#" class="hashtag">#데일리룩</a>
			<a href="#" class="hashtag">#머스트해브</a>
			<a href="#" class="hashtag">#심플룩</a>
			<a href="#" class="hashtag">#미니원피스</a>
		</div>
	</div>
	<div class="list_post">
		<p>"배송은 한 7일 정도 걸린거 같구요ㅎ 판매자 피드백도 괜찮았던거 같아요 ㅎ 친절하고 ㅎ 품질은 만원짜리 치고는 좋은편이에요 ㅎ 디테일하고 추천합니다."</p>
	</div>
	<div class="product_info">
		<span id="clip_rate">382</span>
		<span id="view_rate">4,827</span>
		<span id="cmnt_rate">185</span>
		<a href="http://www.aliexpress.com/item/Free-Shipping-Fashion-Women-O-Neck-Short-Sleeve-Mesh-Splicing-Floral-Bodycon-Sexy-Fit-Slim-Hip/32346247502.html" class="buy_btn">9,540원</a>
	</div>
</div>
<div class="product">
	<div class="author_wrap">
		<span class="profile_img">
                       <img src="../image/profile_img.png">
                   </span>
		<a href="#">@biggerbig</a>
		<strong>54분전</strong>

	</div>
	<div class="list_thumb">
		<a href="/products/detail/32546880465"><img src="http://g02.a.alicdn.com/kf/HTB1oO9hHVXXXXaoXFXXq6xXFXXXb/Summer-New-2015-Women-T-Shirt-V-Neck-Vest-Tops-Casual-Polyester-Camisole-Sexy-Tank-Top.jpg" /></a>
		<div class="hashtag_wrap">
			<a href="#" class="hashtag">#쿼드코어</a>
			<a href="#" class="hashtag">#유심</a>
			<a href="#" class="hashtag">#듀얼OS</a>
			<a href="#" class="hashtag">#안드로이드4.4</a>
			<a href="#" class="hashtag">#윈도우8.1</a>
			<a href="#" class="hashtag">#CHUWI</a>
			<a href="#" class="hashtag">#HI8</a>
		</div>
	</div>
	<div class="list_post">
		<p>"20만원 이하 제품이라 개인통관번호 없이도 배송받을 수 있구요ㅎ EMS 무료배송이라 배송은 7일정도 걸린거 같아요. 판매자가 배송 시작부터 배송조회 하는 방법까지 안내해주더라구요 ㅎ 그리고 발송할때는 3만원짜리 제품이라고 적어서 보내더라구요. 아마 관세때문인듯 한데 전화오길래 저는 그냥 10만원이라고 솔직하게 이야기 했어요. ㅎ 구매 추천합니다."</p>
	</div>
	<div class="product_info">
		<span id="clip_rate">24,048</span>
		<span id="view_rate">4,827</span>
		<span id="cmnt_rate">771</span>
		<a href="http://www.aliexpress.com/item/Original-8-Chuwi-HI8-Dual-boot-tablets-pc-Windows-8-1-Android-4-4-Intel-Z3736F/32363420266.html" class="buy_btn">143,780원</a>
	</div>
</div>
<div class="product">
	<div class="author_wrap">
		<span class="profile_img">
                       <img src="../image/profile_img.png">
                   </span>
		<a href="#">@biggerbig</a>
		<strong>54분전</strong>

	</div>
	<div class="list_thumb">
		<a href="/products/detail/32457283695"><img src="http://g01.a.alicdn.com/kf/HTB1Rcm_HVXXXXbgXXXXq6xXFXXX3/2015-Shorts-Women-Beach-Tassel-Bohemian-National-Wind-Print-Loose-Women-s-Short-Feminino-Plus-Size.jpg" /></a>
		<div class="hashtag_wrap">
			<a href="#" class="hashtag">#원피스</a>
			<a href="#" class="hashtag">#레이스</a>
			<a href="#" class="hashtag">#데일리룩</a>
			<a href="#" class="hashtag">#머스트해브</a>
			<a href="#" class="hashtag">#심플룩</a>
			<a href="#" class="hashtag">#미니원피스</a>
		</div>
	</div>
	<div class="list_post">
		<p>"배송은 한 7일 정도 걸린거 같구요ㅎ 판매자 피드백도 괜찮았던거 같아요 ㅎ 친절하고 ㅎ 품질은 만원짜리 치고는 좋은편이에요 ㅎ 디테일하고 추천합니다."</p>
	</div>
	<div class="product_info">
		<span id="clip_rate">382</span>
		<span id="view_rate">4,827</span>
		<span id="cmnt_rate">185</span>
		<a href="http://www.aliexpress.com/item/Free-Shipping-Fashion-Women-O-Neck-Short-Sleeve-Mesh-Splicing-Floral-Bodycon-Sexy-Fit-Slim-Hip/32346247502.html" class="buy_btn">9,540원</a>
	</div>
</div>
-->