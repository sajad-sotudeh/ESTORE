<?php
/*
Template Name: Purchase

*/
$user_ID = get_current_user_id();
if( $user_ID ){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo wp_title(); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="<?php echo THEME_URI;?>/style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="<?php echo THEME_URI;?>/js/boxOver.js"></script>
</head>
<body>
<div id="main_container">
    <div class="top_search_bar">
			<div class="top_search">
				<div class="search_text"><a href="<?php echo THEME_URI;?>/search.php">جستجو</a></div>
				<input type="text" class="search_input" name="search" />
				<a href="<?php echo THEME_URI;?>/search.php"><input type="image" src="<?php echo THEME_URI;?>/images/search.gif" class="search_bt"/></a>
			</div>
    </div>
		<div id="header">
    <div class="oferte_content">
      <div class="oferta">
				<div class="oferta_img"><img src="<?php echo THEME_URI;?>/images/laptop.png" width="94" height="92" alt="" border="0"/></div>
					<div class="oferta_details">
					<div class="oferta_title">Samsung G700</div>
					<div class="oferta_text">در بین این همه لپتاپ که شرکت های مختلف با ویندوز به بازار داده اند لپتاپ های اپل انتخاب های ساده تر و کم دردسر تری هستند اگر حتی نیاز به برنامه های ویندوز دارید نوت بوکهای مک بوک با نصب ویندوز تبدیل به لپتاپ های ویندوزی می شوند. ولی مکبوک ها هم سه مدل دارند و هر کدام قابلیت های مخصوص به خود را دارد. همه گیر بودن MacBook سیزده اینچی . نازکی MacBook Air و قدرت MacBook Pro قابلیت های هر کدام هستند.</div>
					<div class="details_link"><a href="<?php echo THEME_URI;?>/details" class="details">جزئیات</a></div>
				  <div class="oferta_pagination"> <span class="current">1</span> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a> </div>

				</div>
      </div>
    </div>
    <!-- end of oferte_content-->
		</div>
  <div id="main_content">
    <div id="menu_tab">
      <ul class="menu">
        <li><a href="#" class="nav1"> صفحه اصلی</a></li>
        <li class="divider"></li>
        <li><a href="#" class="nav2">محصولات</a></li>
        <li class="divider"></li>
        <li><a href="#" class="nav3">محصولات ویژه</a></li>
        <li class="divider"></li>
        <li><a href="#" class="nav4">حساب کاربری من</a></li>
        <li class="divider"></li>
        <li><a href="sign-up.html" class="nav4">ثبت نام</a></li>
        <li class="divider"></li>
        <li><a href="#" class="nav5">خریدها</a></li>
        <li class="divider"></li>
        <li><a href="contact.html" class="nav6">تماس با ما</a></li>
        <li class="divider"></li>
				<li><a href="aboutus.html" class="nav7">درباره ما</a></li>
        <li class="divider"></li>
      </ul>
    </div>
		<div class="left_content_purchase">
			<div class="shopping_cart">
				<div class="cart_title">سبد خرید</div>
				<div class="cart_details"><span id='num_of_purchases'>7</span> :تعداد<br />
				<span class="border_cart"></span> کل <span id="total_price" class="price">14200000</span> تومان</div>
				<div class="cart_icon"><a href="purchase.html"  title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="images/shoppingcart.png" alt="" width="48" height="48" border="0" /></a></div>
			</div>
			<div class="off_money_box">
				<div class="off_money_title">تخفیف</div>
				<div class="off_money_amount"><span id="off_amount">100000</span> تومان</div>
			</div>
		</div>
		<div class="purchase_page">سبد خرید شما</div>
		<div class="p_table">
			<table class="pur_table">
				<tr>	
					<th>خذف</th>
					<th>شرح محصول</th>
					<th>تعداد</th>
					<th>قیمت واحد</th>
					<th>قیمت کل</th>
				</tr>
				<tr id="d1td">
					<td><a href="#" id="d1" data-value="2200000" onclick="delete_from_cart(this)">حذف کن!</a></td>
					<td>Apple ipad Air 2</td>
					<td>1</td>
					<td>2200000</td>
					<td>2200000</td>
				</tr>
				<tr id="d2td">	
					<td><a href="#" id="d2" data-value="1900000" onclick="delete_from_cart(this)">حذف کن!</a></td>
					<td>Samsung galaxy Note VI</td>
					<td>1</td>
					<td>1900000</td>
					<td>1900000</td>
				</tr>
				<tr id="d3td">	
					<td><a href="#" id="d3" data-value="1900000" onclick="delete_from_cart(this)">حذف کن!</a></td>
					<td>SiliconPower 8Gb Usb3.0</td>
					<td>1</td>
					<td>1900000</td>
					<td>1900000</td>
				</tr>
				<tr id="d4td">	
					<td><a href="#" id="d4" data-value="2300000" onclick="delete_from_cart(this)">حذف کن!</a></td>
					<td>Asus N46VM</td>
					<td>1</td>
					<td>2300000</td>
					<td>2300000</td>
				</tr>
				<tr id="d5td">	
					<td><a href="#" id="d5" data-value="5900000" onclick="delete_from_cart(this)">حذف کن!</a></td>
					<td>Apple MacBook Pro</td>
					<td>1</td>
					<td>5900000</td>
					<td>5900000</td>
				</tr>
				<tr>	
					<td id="vacant_border"></td>
					<td id="vacant_border"></td>
					<td id="vacant_border"></td>
					<td class="total_cart">جمـــــــع کـــل</td>
					<td id="total_cart" class="total_cart">14200000</td>
				</tr>
			</table>
		</div>
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
		
    <!-- end of menu tab -->
    
       <!-- end of right content -->
  </div>
  <!-- end of main content -->
  </div>
<!-- end of main_container -->
</body>
</html>
<?php }else{
	wp_redirect( home_url() ); 
	exit;
}
