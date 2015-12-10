<?php
global $post;
global $wpdb;
$technical_table = $wpdb->prefix . 'technical';
$results = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM {$technical_table} WHERE product_id = %d",$post->ID ) ); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Online Store-Details</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="<?php echo THEME_URI;?>/style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="<?php echo THEME_URI;?>/js/windowopen.js"></script>
<script type="text/javascript" src="<?php echo THEME_URI;?>/js/boxOver.js"></script>
</head>
<body>
<div id="main_container">
    <div class="top_search_bar">
		<div class="top_search">
      <div class="search_text"><a href="#">جستجو</a></div>
      <input type="text" class="search_input" name="search" />
      <input type="image" src="images/search.gif" class="search_bt"/>
			</div>
  </div>
  <div id="header">
    <div class="oferte_content">
      <div class="oferta">
        <div class="oferta_img"><img src="images/laptop.png" width="94" height="92" alt="" border="0"/></div> 
				  <div class="oferta_details">
						<div class="oferta_title">Samsung GX</div>
						<div class="oferta_text"> در بین این همه لپتاپ که شرکت های مختلف با ویندوز به بازار داده اند لپتاپ های اپل انتخاب های ساده تر و کم دردسر تری هستند اگر حتی نیاز به برنامه های ویندوز دارید نوت بوکهای مک بوک با نصب ویندوز تبدیل به لپتاپ های ویندوزی می شوند. ولی مکبوک ها هم سه مدل دارند و هر کدام قابلیت های مخصوص به خود را دارد. همه گیر بودن MacBook سیزده اینچی . نازکی MacBook Air و قدرت MacBook Pro قابلیت های هر کدام هستند.</div>
						<a href="details.html" class="details">جزییات</a> 
					</div>
        <div class="oferta_pagination"> <span class="current">1</span> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a> </div>
      </div>
    </div>
    <!-- end of oferte_content-->
  </div>
  <div id="main_content">
    <div id="menu_tab">
      <div class="left_menu_corner"></div>
      <ul class="menu">
        <li><a href="index.html" class="nav1"> صفحه اصلی</a></li>
        <li class="divider"></li>
        <li><a href="#" class="nav2">محصولات</a></li>
        <li class="divider"></li>
        <li><a href="#" class="nav3">محصولات ویژه</a></li>
        <li class="divider"></li>
        <li><a href="#" class="nav4">اکانت من</a></li>
        <li class="divider"></li>
        <li><a href="sign-up.html" class="nav4">ثبت نام</a></li>
        <li class="divider"></li>
        <li><a href="#" class="nav5">خرید</a></li>
        <li class="divider"></li>
        <li><a href="contact.html" class="nav6">تماس با ما</a></li>
        <li class="divider"></li>
				<li><a href="aboutus.html" class="nav7">درباره ما</a></li>
        <li class="divider"></li>
      </ul>
      <div class="right_menu_corner"></div>
    </div>
    <!-- end of menu tab -->
    <div class="left_content">
      <div class="title_box"></div>
           <ul class="left_menu">
        <li class="odd"><a href="#">پردازنده</a></li>
        <li class="even"><a href="#">لپ تاب و نوت بوک</a></li>
        <li class="odd"><a href="#">پردازنده</a></li>
        <li class="even"><a href="#">لپ تاب</a></li>
        <li class="odd"><a href="#">موبایل</a></li>
        <li class="even"><a href="#">تبلت</a></li>
      </ul>
      <div class="title_box">پیشنهاد ویژه</div>
      <div class="border_box">
        <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
        <div class="product_img"><a href="details.html"><img src="images/laptop.png" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">1,800,000</span> <span class="price">1,550,000</span></div>
      </div>
      <div class="banner_adds"> <a href="#"><img src="images/bann2.jpg" alt="" border="0" /></a> </div>
    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar"><?php echo $post->post_title; ?></div>
      <div class="prod_box_big">
        <div class="center_prod_box_big">
          <div class="product_img_big"> <a href="javascript:popImage('images/big_pic.jpg','Some Title')" title="header=[Zoom] body=[&nbsp;] fade=[on]"><img src="images/laptop.gif" alt="" border="0" /></a>
            <div class="thumbs"> <a href="#" title="header=[Thumb1] body=[&nbsp;] fade=[on]"><img src="images/thumb1.gif" alt="" border="0" /></a> <a href="#" title="header=[Thumb2] body=[&nbsp;] fade=[on]"><img src="images/thumb1.gif" alt="" border="0" /></a> <a href="#" title="header=[Thumb3] body=[&nbsp;] fade=[on]"><img src="images/thumb1.gif" alt="" border="0" /></a> </div>
          </div>
          <div class="details_big_box">
					  <div class="prod_price_big"><span class="reduce">1,650,000</span> <span class="price">1,448,000</span></div>
            <span class="avalability">وضعیت:</span>
            <span class="avalability_ans">موجود</span>
						<table class="specifications" border="1">
							<tr>
								<td id="detail_table_headers">سازنده پردازنده</td>
								<td id="specs"><?php echo $results[0]->cpu_implementer; ?></td>
							</tr>
							<tr>
								<td id="detail_table_headers">سری پردازنده</td>
								<td id="specs"><?php echo $results[0]->cpu_seri; ?></td>
							</tr>
							<tr>
								<td id="detail_table_headers">ظرفیت حافظه RAM</td>
								<td id="specs"><?php echo $results[0]->ram; ?>GB</td>
							</tr>
							<tr>
								<td id="detail_table_headers">پردازنده گرافیکی</td>
								<td id="specs"><?php echo $results[0]->graphic; ?></td>
							</tr>
							<tr>
								<td id="detail_table_headers">وزن</td>
								<td id="specs"><?php echo $results[0]->weight; ?></td>
							</tr>
						</table>
					</div>

            <a href="#" class="addtocart">افزودن به سبد خرید</a> <a href="#" class="compare">مقایسه</a> </div>
       
        <div class="bottom_prod_box_big"></div>
      </div>
      <div class="center_title_bar">محصولات مشابه</div>
      <div class="prod_box">
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
          <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
          <div class="product_img"><a href="details.html"><img src="images/laptop.gif" alt="" border="0" /></a></div>
          <div class="prod_price"><span class="reduce">1200000</span> <span class="price">1000000</span></div>
        </div>
        <div class="bottom_prod_box"></div>
        <div class="prod_details_tab"> <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="images/cart.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="images/favs.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="images/favorites.gif" alt="" border="0" class="left_bt" /></a> <a href="details.html" class="prod_details">details</a> </div>
      </div>
      <div class="prod_box">
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
          <div class="product_title"><a href="details.html">Iphone Apple</a></div>
          <div class="product_img"><a href="details.html"><img src="images/p4.gif" alt="" border="0" /></a></div>
          <div class="prod_price"><span class="price">2300000</span></div>
        </div>
        <div class="bottom_prod_box"></div>
        <div class="prod_details_tab"> <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="images/cart.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="images/favs.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="images/favorites.gif" alt="" border="0" class="left_bt" /></a> <a href="details.html" class="prod_details">details</a> </div>
      </div>
      <div class="prod_box">
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
          <div class="product_title"><a href="details.html">Samsung Webcam</a></div>
          <div class="product_img"><a href="details.html"><img src="images/p5.gif" alt="" border="0" /></a></div>
          <div class="prod_price"><span class="reduce">15900000</span> <span class="price">1400000</span></div>
        </div>
        <div class="bottom_prod_box"></div>
        <div class="prod_details_tab"> <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="images/cart.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="images/favs.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="images/favorites.gif" alt="" border="0" class="left_bt" /></a> <a href="details.html" class="prod_details">details</a> </div>
      </div>
    </div>
    <!-- end of center content -->
    <div class="right_content">
       <div class="shopping_cart">
        <div class="cart_title">سبد خرید</div>
        <div class="cart_details"><span id='num_of_purchases'>0</span> :تعداد<br />
          <span class="border_cart"></span> کل <span id="total_price" class="price">0</span> </div>
        <div class="cart_icon"><a href="purchase.html"  title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="images/shoppingcart.png" alt="" width="48" height="48" border="0" /></a></div>
      </div>
      <div class="title_box">محصول جدید</div>
      <div class="border_box">
        <div class="product_title">Motorola 156 MX-VL</div>
        <div class="product_img"><a href="#"><img src="images/p2.gif" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">1800000</span> <span class="price">16200000</span></div>
      </div>
      <div class="title_box">برند</div>
      <ul class="left_menu">
        <li class="odd"><a href="#">سونی</a></li>
        <li class="even"><a href="#">سامسونگ</a></li>
        <li class="odd"><a href="#">اپل</a></li>
        <li class="even"><a href="#">ال جی</a></li>
        <li class="odd"><a href="#">فوجیتسو</a></li>
        <li class="even"><a href="#">موتورلا</a></li>
        <li class="odd"><a href="#">نوکیا</a></li>
        <li class="even"><a href="#">هواوی</a></li>
      </ul>
    </div>
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
  <div class="footer">
			<div class="footer_first_line"> 
				<div class="slogan">7 روز هفته، 24 ساعته پاسخگوی شما هستیم</div>
				<div class="telephone">021-51822642</div>
				<div class="email">info@estore.net</div>
			</div>
			<div class="description">
				<div class="description_part1">
					<span class="store_manual">راهنمای خرید از فروشگاه</span> 
					<a href="#" class="store_manual">چگونه از فروشگاه خرید کنم؟</a> 
					<a href="#" class="store_manual">اقلام خریداری شده چگونه ارسال میشوند</a> 
					<a href="#" class="store_manual">ضمانت خریداری ازسایت</a> 
					<a href="#" class="store_manual">آیا جنس فروخته شده پس گرفته میشود؟</a> 
				</div>
				<div class="description_part2">
					<span class="services">خدمات مشتریان</span> 
					<a href="#" class="services">تماس با ما</a> 
					<a href="#" class="services">پاسخ به سوالهای متداول</a> 
					<a href="#" class="services">ارسال محصول با پست</a> 
					<a href="#" class="services">پشتیبانی 24 ساعته در 7 روز هفته</a> 
					<a href="#" class="services">تضمین کیفیت محصول خریداری شده</a> 
					<a href="#" class="services">سرویس های رایگان</a> 
				</div>
				<div class="description_part3">
					<span class="services">مزایای فروشگاه ای استور:</span> 
					<a href="#" class="services">خرید اینترنتی بی دردسر</a> 
					<a href="#" class="services">صرفه جویی در زمان</a> 
					<a href="#" class="services">افزایش حس قابلیت اعتماد</a> 
					<a href="#" class="services">تمییز بین جنس های اورجینال و قلابی</a> 
					<a href="#" class="services">به روزترین فروشگاه اینترنتی ایران</a> 
					<a href="#" class="services">دارای مجوز از وزارت صنعت کار</a> 
				</div>
				<div class="description_part4">
					<span class="services">توضیحاتی درباره فروشگاه</span> 
					<span class="about">فروشگاه اینترنتی ای استور در سال 1394 توسط دو تن از دانشجویان مهندسی نرم افزار دانشگاه بهشتی طرح ریزی شد. هدف این فروشگاه نوپا جلب رضایت مشتری از کیفیت محصولات خریداری شده میباشد. ای استور در این رده سعی میکند با رقیبان خودش رقابت کند. به جرات میتوانیم بگوییم اولین نیستیم ولی بهترین هستیم</span>
				</div>
			</div>
	</div>
</div>
<!-- end of main_container -->
</body>
</html>
