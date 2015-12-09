<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Online Store</title>
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
    <!-- end of menu tab -->
    <div class="left_content">
      <div class="title_box">موضوعات</div>
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
        <div class="prod_price"><span class="reduce">1,350,000</span> <span class="price">1,120,000</span></div>
      </div>
			<div class="title_box">تبلیغات</div>
      <div class="banner_adds"> <a href="#"><img src="images/bann2.jpg" alt="" border="0" /></a> </div>
    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">آخرین محصولات</div>
			<?php 
			//Define your custom post type name in the arguments
			$args = array('post_type' => 'latests');
			//Define the loop based on arguments
			$loop = new WP_Query( $args );
			//Display the content
			while ( $loop->have_posts() ) : $loop->the_post();
			?>
			<div class="prod_box">
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
          <div class="product_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
          <div class="product_img"><a href="<?php the_permalink(); ?>"><img src="<?php get_post_thumbnail_id( $post->ID ); $thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id( $postid ), 'thumbnail', false );  $thumb_url = $thumb_url[0];  echo $thumb_url; ?>" border="0" /></a></div>
          <div class="prod_price"><span class="reduce">1350000</span> <span class="price" id="p1cost">120000000</span></div>
        </div>
        <div class="bottom_prod_box"></div>
        <div class="prod_details_tab"> <a href="#" id="p1" onclick="add_to_cart(this);" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="images/cart.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="images/favs.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="images/favorites.gif" alt="" border="0" class="left_bt" /></a> <a href="details.html" class="prod_details">جزییات</a> </div>
      </div>
			<?php endwhile;?>
      <div class="center_title_bar">پیشنهاد ویژه</div>
      <div class="prod_box">
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
          <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
          <div class="product_img"><a href="details.html"><img src="images/laptop.gif" alt="" border="0" /></a></div>
          <div class="prod_price"><span class="reduce">1,850,000</span> <span class="price">1,000,000</span></div>
        </div>
        <div class="bottom_prod_box"></div>
        <div class="prod_details_tab"> <a href="#" onclick="add_to_cart();" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="images/cart.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="images/favs.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="images/favorites.gif" alt="" border="0" class="left_bt" /></a> <a href="details.html" class="prod_details">جزییات</a> </div>
      </div>
      <div class="prod_box">
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
          <div class="product_title"><a href="details.html">Iphone Apple</a></div>
          <div class="product_img"><a href="details.html"><img src="images/p4.gif" alt="" border="0" /></a></div>
          <div class="prod_price"><span class="price">1,850,000</span></div>
        </div>
        <div class="bottom_prod_box"></div>
        <div class="prod_details_tab"> <a href="#" onclick="add_to_cart();" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="images/cart.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="images/favs.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="images/favorites.gif" alt="" border="0" class="left_bt" /></a> <a href="details.html" class="prod_details">جزییات</a> </div>
      </div>
      <div class="prod_box">
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
          <div class="product_title"><a href="details.html">Samsung Webcam</a></div>
          <div class="product_img"><a href="details.html"><img src="images/p5.gif" alt="" border="0" /></a></div>
          <div class="prod_price"><span class="reduce">1,850,000</span> <span class="price">1,550,000</span></div>
        </div>
        <div class="bottom_prod_box"></div>
        <div class="prod_details_tab"> <a href="#" onclick="add_to_cart();" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="images/cart.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="images/favs.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="images/favorites.gif" alt="" border="0" class="left_bt" /></a> <a href="details.html" class="prod_details">جزییات</a> </div>
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
      <div class="title_box">محصولات جدید</div>
      <div class="border_box">
        <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
        <div class="product_img"><a href="details.html"><img src="images/p2.gif" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">1,850,000</span> <span class="price">1,200,000</span></div>
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
  </div>
<!-- end of main_container -->
</body>
</html>
