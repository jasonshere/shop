<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="noIE" lang="en-US"><!--<![endif]-->
<head>
	<meta charset="UTF-8" />
	<title>捷哥浅谈PHP--商城管理系统</title>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Favorite Icons -->
	<link rel="icon" href="__PUBLIC__/Index/img/favicon/favicon.html" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="__PUBLIC__/Index/img/favicon/apple-touch-icon-144x144-precomposed.html">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="__PUBLIC__/Index/img/favicon/apple-touch-icon-72x72-precomposed.html">
	<link rel="apple-touch-icon-precomposed" href="__PUBLIC__/Index/img/favicon/apple-touch-icon-precomposed.html">
	<!-- // Favorite Icons -->
	
	<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>-->
	
	<!-- GENERAL CSS FILES -->
	<link rel="stylesheet" href="__PUBLIC__/Index/css/minified.css">
	<!-- // GENERAL CSS FILES -->
	
	<!--[if IE 8]>
		<script src="__PUBLIC__/Index/js/respond.min.js"></script>
		<script src="__PUBLIC__/Index/js/selectivizr-min.js"></script>
	<![endif]-->
	<!--
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	-->
	<script>window.jQuery || document.write('<script src="__PUBLIC__/Index/js/jquery.min.js"><\/script>');</script>
	<script src="__PUBLIC__/Index/js/modernizr.min.js"></script>	
	<!-- PARTICULAR PAGES CSS FILES -->
	<link rel="stylesheet" href="__PUBLIC__/Index/css/owl.carousel.css">
	<link rel="stylesheet" href="__PUBLIC__/Index/css/owl.theme.css">
	<link href="__PUBLIC__/Index/css/flexslider.css" rel="stylesheet" />
	<link rel="stylesheet" href="__PUBLIC__/Index/css/jquery.nouislider.css">
	<link rel="stylesheet" href="__PUBLIC__/Index/css/isotope.css">
	<link rel="stylesheet" href="__PUBLIC__/Index/css/innerpage.css">
	<!-- // PARTICULAR PAGES CSS FILES -->
	<link rel="stylesheet" href="__PUBLIC__/Index/css/responsive.css">
</head>
<body class="products-view">
			
	<!-- PAGE WRAPPER -->
<div id="page-wrapper">

	<!-- SITE HEADER -->
	<header id="site-header" role="banner">
		<!-- HEADER TOP -->
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-7">
						<!-- CONTACT INFO -->
						<div class="contact-info">
							<i class="iconfont-headphones round-icon"></i>
							<strong>客服:400-888-8888</strong>
							<span>(周一至周日 早09:00 - 晚21:00)</span>
							</div>
						<!-- // CONTACT INFO -->
					</div>
					<div class="col-xs-12 col-sm-6 col-md-5">
						<ul class="actions unstyled clearfix">
							<li>
								<!-- SEARCH BOX -->
								<div class="search-box">
									<form action="#" method="post">
										<div class="input-iconed prepend">
											<button class="input-icon"><i class="iconfont-search"></i></button>
											<label for="input-search" class="placeholder">搜索商品</label>
											<input type="text" name="q" id="input-search" class="round-input full-width" required />
										</div>
									</form>
								</div>
								<!-- // SEARCH BOX -->
							</li>
							<li data-toggle="sub-header" data-target="#sub-social">
								<!-- SOCIAL ICONS -->
								<a href="javascript:void(0);" id="social-icons">
									<i class="iconfont-share round-icon"></i>
								</a>
								
								<div id="sub-social" class="sub-header">
									<ul class="social-list unstyled text-center">
										<li><a href="#"><i class="iconfont-facebook round-icon"></i></a></li>
										<li><a href="#"><i class="iconfont-twitter round-icon"></i></a></li>
										<li><a href="#"><i class="iconfont-google-plus round-icon"></i></a></li>
										<li><a href="#"><i class="iconfont-pinterest round-icon"></i></a></li>
										<li><a href="#"><i class="iconfont-rss round-icon"></i></a></li>
									</ul>
								</div>
								<!-- // SOCIAL ICONS -->
							</li>
							<li data-toggle="sub-header" data-target="#sub-cart">
								<!-- SHOPPING CART -->
								<a href="javascript:void(0);" id="total-cart">
									<i class="iconfont-shopping-cart round-icon"></i>
								</a>
								
								<div id="sub-cart" class="sub-header">
									<div class="cart-header">
										<span>您的购物车暂时还是空的</span>
										<small><a href="cart.html">(查看所有)</a></small>
									</div>
									<ul class="cart-items product-medialist unstyled clearfix"></ul>
									<div class="cart-footer">
										<div class="cart-total clearfix">
											<span class="pull-left uppercase">合计</span>
											<span class="pull-right total">￥ 0</span>
										</div>
										<div class="text-right">
											<a href="cart.html" class="btn btn-default btn-round view-cart">查看购物车</a>
										</div>
									</div>
								</div>
								<!-- // SHOPPING CART -->
							</li>
						</ul>
					</div>
				</div>
			</div>
			
			<!-- ADD TO CART MESSAGE -->
			<div class="cart-notification">
				<ul class="unstyled"></ul>
			</div>
			<!-- // ADD TO CART MESSAGE -->
		</div>
		<!-- // HEADER TOP -->
		<!-- MAIN HEADER -->
		<div class="main-header-wrapper">
			<div class="container">
				<div class="main-header">
					<!-- CURRENCY / LANGUAGE / USER MENU -->
					<div class="actions">
						<!--<div class="center-xs">-->
							<!-- CURRENCY -->
							<!--<ul class="option-list unstyled">
								<li class="active"><a href="#" data-toggle="tooltip" title="USD - US Dollar">$</a></li>
								<li><a href="#" data-toggle="tooltip" title="GBP - British Pound">£</a></li>
								<li><a href="#" data-toggle="tooltip" title="EUR - Euro">€</a></li>
							</ul>-->
							<!-- // CURRENCY -->
							<!-- LANGUAGES -->
							<!--<ul class="option-list unstyled">
								<li class="active"><a href="#" data-toggle="tooltip" title="English">EN</a></li>
								<li><a href="#" data-toggle="tooltip" title="French">FR</a></li>
								<li><a href="#" data-toggle="tooltip" title="Deutsch">DE</a></li>
							</ul>-->
							<!-- // LANGUAGES -->
						<!--</div>-->
						<div class="clearfix"></div>
						<!-- USER RELATED MENU -->
						<nav id="tiny-menu" class="clearfix">
							<ul class="user-menu">
								<li><a href="#">我的账户</a></li>
								<li><a href="cart.html">我的收藏</a></li>
								<li><a href="checkout.html">去结算</a></li>
								<li><a href="#">退出</a></li>
							</ul>
						</nav>
						<!-- // USER RELATED MENU -->
					</div>
					<!-- // CURRENCY / LANGUAGE / USER MENU -->
					<!-- SITE LOGO -->
					<div class="logo-wrapper">
						<a href="index-2.html" class="logo" title="GFashion - Responsive e-commerce HTML Template">
							<img src="__PUBLIC__/Index/img/logo.png" alt="GFashion - Responsive e-commerce HTML Template" />
						</a>
					</div>
					<!-- // SITE LOGO -->
					<!-- SITE NAVIGATION MENU -->
					<nav id="site-menu" role="navigation">
						<ul class="main-menu hidden-sm hidden-xs">
							<li class="active">
								<a href="<?php echo U('Index/Index/index','','');?>">首页</a>
							</li>

							<?php if(is_array($menus)): foreach($menus as $key=>$menu): ?><li>
									<a href="<?php echo U('Product/productList');?>"><?php echo ($menu["name"]); ?></a>
								<?php if($menu['sons']): ?><!-- MEGA MENU -->
								<div class="mega-menu" data-col-lg="7" data-col-md="5">
									<div class="row">

									<?php if(is_array($menu["sons"])): foreach($menu["sons"] as $key=>$son): ?><div class="col-md-3">
											<h4 class="menu-title"><?php echo ($son["name"]); ?></h4>
											<ul class="mega-sub">
												<?php if(is_array($son['sons'])): foreach($son['sons'] as $key=>$third): ?><li><a href="products.html"><?php echo ($third["name"]); ?></a></li><?php endforeach; endif; ?>
											</ul>
										</div><?php endforeach; endif; ?>
										
									</div>
								</div>
								<!-- // MEGA MENU --><?php endif; ?>
								</li><?php endforeach; endif; ?>

							<li>
								<a href="contact-us.html">联系我们</a>
							</li>

							<li>
								<a href="contact-us.html">我的账户</a>
							</li>

							<li>
								<a href="contact-us.html">购物车</a>
							</li>
							
						</ul>
						
						<!-- MOBILE MENU -->
						<div id="mobile-menu" class="dl-menuwrapper visible-xs visible-sm">
							<button class="dl-trigger"><i class="iconfont-reorder round-icon"></i></button>
							<ul class="dl-menu">
								<li class="active">
									<a href="javsacript:void(0);">Home</a>
								</li>
								<li>
									<a href="javsacript:void(0);">Women</a>
								</li>
								<li>
									<a href="javsacript:void(0);">Men</a>
									
									<ul class="dl-submenu">
										<li>
											<a href="products.html">Clothing</a>
											<ul class="dl-submenu">
												<li><a href="products.html">Casual Wear</a></li>
												<li><a href="products.html">Evening Wear</a></li>
												<li><a href="products.html">Formal Attire</a></li>
												<li><a href="products.html">Womens Jeans</a></li>
												<li><a href="products.html">Mens Jeans</a></li>
												<li><a href="products.html">Fall Styles</a></li>
											</ul>
										</li>
										<li>
											<a href="products.html">Accessories</a>
											<ul class="dl-submenu">
												<li><a href="products.html">Casual Wear</a></li>
												<li><a href="products.html">Evening Wear</a></li>
												<li><a href="products.html">Formal Attire</a></li>
												<li><a href="products.html">Womens Jeans</a></li>
												<li><a href="products.html">Mens Jeans</a></li>
												<li><a href="products.html">Fall Styles</a></li>
											</ul>
										</li>
										<li>
											<a href="products.html">Brands</a>
											<ul class="dl-submenu">
												<li><a href="products.html">Casual Wear</a></li>
												<li><a href="products.html">Evening Wear</a></li>
												<li><a href="products.html">Formal Attire</a></li>
												<li><a href="products.html">Womens Jeans</a></li>
												<li><a href="products.html">Mens Jeans</a></li>
												<li><a href="products.html">Fall Styles</a></li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</div>
						<!-- // MOBILE MENU -->

					</nav>
					<!-- // SITE NAVIGATION MENU -->
				</div>
			</div>
		</div>
		<!-- // MAIN HEADER -->
	</header>
	<!-- // SITE HEADER -->
		
<!-- HOMEPAGE SLIDER -->
<div id="home-slider">
	<div class="flexslider">
	<ul class="slides">
		<!-- THE FIRST SLIDE -->
		<li>
			<!-- THE MAIN IMAGE IN THE SLIDE -->
			<img src="__PUBLIC__/Index/rev-slider/img/slides/Street-Fashion.jpg" alt="" />
			
			<!-- THE CAPTIONS OF THE FIRST SLIDE -->
			<div class="flex-caption h6 text-bold gfc uppercase animated"
			data-animation="fadeInLeftBig"
			data-x="800"
			data-y="110"
			data-speed="600"
			data-start="1200">New Collection</div>
			
			<div class="flex-caption herotext text-bold gfc animated"
			data-animation="fadeInRightBig"
			data-x="580"
			data-y="140"
			data-speed="900"
			data-start="2000">Autumn Fashions</div>
			
			<div class="flex-caption h6 text-bold gfc text-center animated"
			data-animation="fadeInDown"
			data-x="639"
			data-y="260"
			data-speed="1600"
			data-start="2900">
				Comfy knits and warm jackets for cooler Autumn days<br/>
				<a href="products.html" class="btn btn-primary uppercase">Shop Now</a>
			</div>
			
		</li>
		
		<!-- THE SECOND SLIDE -->
		<li style="background: #fa6f57;">
			<!-- THE MAIN IMAGE IN THE SLIDE -->
			<img src="__PUBLIC__/Index/img/transparent.png" alt="" />
			
			<div class="flex-caption super-giant gfc animated uppercase"
			data-animation="fadeInUp"
			data-x="center"
			data-y="60"
			data-speed="500"
			data-start="900">Sale</div>

			<div id="caption-left-round" class="flex-caption round gfc animated uppercase"
			data-animation="fadeInLeftBig"
			data-x="140"
			data-y="60"
			data-speed="600"
			data-start="1200"><div class="vmid"><span>Mid<br/>Season</span></div></div>

			<div class="flex-caption round gfc animated uppercase"
			data-animation="fadeInRightBig"
			data-x="925"
			data-y="60"
			data-speed="600"
			data-start="1200"><div class="vmid"><span>Up to<br/>70% off</span></div></div>

			<div class="flex-caption h3 gfc animated uppercase"
			data-animation="fadeInDown"
			data-x="center"
			data-y="250"
			data-speed="400"
			data-start="1800"><strong class="text-bold">500’s </strong>of New Products</div>

		</li>
		
		<!-- THE SECOND SLIDE -->
		<li>
			<!-- THE MAIN IMAGE IN THE SLIDE -->
			<img src="__PUBLIC__/Index/rev-slider/img/slides/3303349658_cfaebb811f_o.jpg" alt="" />
			
			<div class="flex-caption herotext text-bold gfc bg-dark animated uppercase"
			data-animation="fadeInUpBig"
			data-x="760"
			data-y="60"
			data-speed="900"
			data-start="100">Free Shipping</div>
			
			<div class="flex-caption h2 text-bold gfc bg-dark animated uppercase"
			data-animation="fadeInUpBig"
			data-x="797"
			data-y="175"
			data-speed="600"
			data-start="900">On Order over $2.000</div>
			
		</li>
		
	</ul>
</div>

<script>
	jQuery(function($) {
		var $slider = $('#home-slider > .flexslider');
		$slider.find('.flex-caption').each(function() {
			var $this = $(this);
			var configs = {
				left: $this.data('x'),
				top: $this.data('y'),
				speed: $this.data('speed') + 'ms',
				delay: $this.data('start') + 'ms'
			};
			if ( configs.left == 'center' && $this.width() !== 0 ) 
			{
				configs.left = ( $slider.width() - $this.width() ) / 2;
			}
			if ( configs.top == 'center' && $this.height() !== 0 ) 
			{
				configs.top = ( $slider.height() - $this.height() ) / 2;
			}
			
			$this.data('positions', configs);
			
			$this.css({
				'left': configs.left + 'px',
				'top': configs.top + 'px',
				'animation-duration': configs.speed,
				'animation-delay': configs.delay
			});
		});
		
		$(window).on('resize', function() {
			var wW = $(window).width(),
				zoom = ( wW >= 1170 ) ? 1 : wW / 1349;
			$('.flex-caption.gfc').css('zoom', zoom);
		});
		$(window).trigger('resize');
		
		
		
		$slider.imagesLoaded(function() {
			$slider.flexslider({
				animation: 'slide',
				easing: 'easeInQuad',
				slideshow: false,
				nextText: '<i class="iconfont-angle-right"></i>',
				prevText: '<i class="iconfont-angle-left"></i>',
				start: function() {
					flex_fix_pos(1);
				},
				before: function(slider) {
					// initial caption animation for next show
					$slider.find('.slides li .animation-done').each(function() {
						$(this).removeClass('animation-done');
						var animation = $(this).attr('data-animation');
						$(this).removeClass(animation);
					});
					
					flex_fix_pos(slider.animatingTo + 1);
				},
				after: function() {
					// run caption animation
					$slider.find('.flex-active-slide .animated').each(function() {
						var animation = $(this).attr('data-animation');
						$(this).addClass('animation-done').addClass(animation);
					});
				}
			});
		});
		
		
		function flex_fix_pos(i) {
			$slider.find('.slides > li:eq(' + i + ') .gfc').each(function() {
				var $this = $(this),
					pos = $(this).data('positions');
					
				if ( pos.left == 'center' )
				{
					pos.left = ( $slider.width() - $this.width() ) / 2;
					$this.css('left', pos.left + 'px');
					$this.data('positions', pos);
				}
				if ( pos.top == 'center' )
				{
					pos.top = ( $slider.height() - $this.height() ) / 2;
					$this.css('left', pos.top + 'px');
					$this.data('positions', pos);
				}
			});
		}
	});
</script>		</div>
		<!-- // HOMEPAGE SLIDER -->

<!-- SITE MAIN CONTENT -->
<main id="main-content" role="main">
	
	<!-- PROMO BOXES -->
	<section class="section promos">
		<div class="container">
			
			<?php if(is_array($brands)): foreach($brands as $key=>$brand): ?><div style="float:left;border:2px solid #ccc;margin:10px;">
					<a href="<?php echo U('Product/productList',array('bid'=>$brand['id']));?>"><img src="__PUBLIC__/Uploads/Brand/thumb_<?php echo ($brand["pic"]); ?>" /></a>
				</div><?php endforeach; endif; ?>

		</div>
	</section>
	<!-- // PROMO BOXES -->
	
	<!-- FEATURED PRODUCTS -->
	<section class="section featured visible-items-4">
		<div class="container">
			<div class="row">
				<header class="section-header clearfix col-sm-offset-3 col-sm-6">
					<h3 class="section-title">热卖商品</h3>
					<p class="section-teaser">最新特色商品等你来抢</p>
				</header>
				
				<div class="clearfix"></div>
				
				<!-- BEGIN CAROUSEL -->
				<div id="featured-products" class="add-cart" data-product=".product" data-thumbnail=".entry-media .thumb" data-title=".entry-title > a" data-url=".entry-title > a" data-price=".entry-price > .price">
				
					<div class="owl-controls clickable top">
						<div class="owl-buttons">
							<div class="owl-prev"><i class="iconfont-angle-left"></i></div>
							<div class="owl-next"><i class="iconfont-angle-right"></i></div>
						</div>
					</div>
					
					<div class="owl-carousel owl-theme" data-visible-items="4" data-navigation="true" data-lazyload="true">


					<?php if(is_array($products)): foreach($products as $key=>$product): ?><div class="product" data-product-id="<?php echo ($product["id"]); ?>">
							<div class="entry-media">
								<img data-src="__PUBLIC__/Uploads/products/<?php echo md5($product['id']);?>/thumb_<?php echo ($product["face"]); ?>" alt="" class="lazyOwl thumb" />
								<div class="hover">
									<a href="product.html" class="entry-url"></a>
									<ul class="icons unstyled">
										<li>
											<div class="circle ribbon ribbon-sale">Sale</div>
										</li>
										<li>
										
											<a href="__PUBLIC__/Uploads/products/<?php echo md5($product['id']);?>/<?php echo ($product["face"]); ?>" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
										</li>
										<li>
											<a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
										</li>
									</ul>
									<div class="rate-bar">
										<input type="range" value="4.5" step="0.5" id="backing1" />
										<div class="rateit" data-rateit-backingfld="#backing1" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
									</div>
								</div>
							</div>
							<div class="entry-main">
								<h5 class="entry-title">
									<a href="#"><?php echo ($product["name"]); ?></a>
								</h5>
								<div class="entry-price">
									<s class="entry-discount">￥ <?php echo ($product["price"]); ?></s>
									<strong class="accent-color price">￥ <?php echo ($product["saleprice"]); ?></strong>
								</div>
								<div class="entry-links clearfix">
									<a href="#" class="pull-left m-r">+ Add to Wishlist</a>
									<a href="#" class="pull-right">+ Add to Compare</a>
								</div>
							</div>
						</div><?php endforeach; endif; ?>
					</div>

					
						
				</div>
				<!-- // END CAROUSEL -->
				
			</div>
		</div>
	</section>
	<!-- // FEATURED PRODUCTS -->
	
	<!-- NEW ARRIVAL PRODUCTS -->
	<section class="section new-arrivals visible-items-5">
		<div class="container">
			<div class="row">
				<header class="section-header clearfix col-sm-offset-3 col-sm-6">
					<h3 class="section-title">New arrivals</h3>
					<p class="section-teaser">Lorem ipsum dolor sit amet, consectetur adipiscing elit ac lobortis lacus</p>
				</header>
				
				<div class="clearfix"></div>
				
				<!-- BEGIN CAROUSEL -->
				<div id="new-arrivals-products" class="add-cart" data-product=".product" data-thumbnail=".entry-media .thumb" data-title=".entry-title > a" data-url=".entry-title > a" data-price=".entry-price > .price">
				
					<div class="owl-controls clickable outside">
						<div class="owl-buttons">
							<div class="owl-prev"><i class="iconfont-angle-left"></i></div>
							<div class="owl-next"><i class="iconfont-angle-right"></i></div>
						</div>
					</div>
					
					<div class="owl-carousel owl-theme" data-visible-items="5" data-navigation="true" data-lazyload="true">
						<div class="product" data-product-id="9">
							<div class="entry-media">
								<img data-src="__PUBLIC__/Index/images/men/jacket/271865-0286_1_t.jpg" alt="" class="lazyOwl thumb" />
								<div class="hover">
									<a href="product.html" class="entry-url"></a>
									<ul class="icons unstyled">
										<li>
											<div class="circle ribbon ribbon-sale">Sale</div>
										</li>
										<li>
											<a href="__PUBLIC__/Index/images/men/jacket/271865-0286_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
										</li>
										<li>
											<a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
										</li>
									</ul>
									<div class="rate-bar">
										<input type="range" value="4.5" step="0.5" id="backing9" />
										<div class="rateit" data-rateit-backingfld="#backing9" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
									</div>
								</div>
							</div>
							<div class="entry-main">
								<h5 class="entry-title">
									<a href="#">Inceptos orci hac libero</a>
								</h5>
								<div class="entry-price">
									<s class="entry-discount">$ 350.00</s>
									<strong class="accent-color price">$ 250.00</strong>
								</div>
							</div>
						</div>
						
						<div class="product" data-product-id="10">
							<div class="entry-media">
								<img data-src="__PUBLIC__/Index/images/men/jacket/634082-0014_1_t.jpg" alt="" class="lazyOwl thumb" />
								<div class="hover">
									<a href="product.html" class="entry-url"></a>
									<ul class="icons unstyled">
										<li>
											<a href="__PUBLIC__/Index/images/men/jacket/634082-0014_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
										</li>
										<li>
											<a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
										</li>
									</ul>
									<div class="rate-bar">
										<input type="range" value="4" step="0.5" id="backing10" />
										<div class="rateit" data-rateit-backingfld="#backing10" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
									</div>
								</div>
							</div>
							<div class="entry-main">
								<h5 class="entry-title">
									<a href="#">Inceptos orci hac libero</a>
								</h5>
								<div class="entry-price">
									<strong class="price">$ 350.00</strong>
								</div>
							</div>
						</div>
						
						<div class="product" data-product-id="11">
							<div class="entry-media">
								<img data-src="__PUBLIC__/Index/images/men/jacket/217365-0014_1_t.jpg" alt="" class="lazyOwl thumb" />
								<div class="hover">
									<a href="product.html" class="entry-url"></a>
									<ul class="icons unstyled">
										<li>
											<div class="circle ribbon ribbon-new">New</div>
										</li>
										<li>
											<a href="__PUBLIC__/Index/images/men/jacket/217365-0014_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
										</li>
										<li>
											<a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
										</li>
									</ul>
									<div class="rate-bar">
										<input type="range" value="3.5" step="0.5" id="backing11" />
										<div class="rateit" data-rateit-backingfld="#backing11" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
									</div>
								</div>
							</div>
							<div class="entry-main">
								<h5 class="entry-title">
									<a href="#">Inceptos orci hac libero</a>
								</h5>
								<div class="entry-price">
									<strong class="price">$ 450.00</strong>
								</div>
							</div>
						</div>
						
						<div class="product" data-product-id="12">
							<div class="entry-media">
								<img data-src="__PUBLIC__/Index/images/men/blazer/105797-1056_1_t.jpg" alt="" class="lazyOwl thumb" />
								<div class="hover">
									<a href="product.html" class="entry-url"></a>
									<ul class="icons unstyled">
										<li>
											<a href="__PUBLIC__/Index/images/men/blazer/105797-1056_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
										</li>
										<li>
											<a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
										</li>
									</ul>
									<div class="rate-bar">
										<input type="range" value="5" step="0.5" id="backing12" />
										<div class="rateit" data-rateit-backingfld="#backing12" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
									</div>
								</div>
							</div>
							<div class="entry-main">
								<h5 class="entry-title">
									<a href="#">Inceptos orci hac libero</a>
								</h5>
								<div class="entry-price">
									<strong class="price">$ 350.00</strong>
								</div>
							</div>
						</div>
						
						<div class="product" data-product-id="13">
							<div class="entry-media">
								<img data-src="__PUBLIC__/Index/images/men/jumper/271866-0014_1_t.jpg" alt="" class="lazyOwl thumb" />
								<div class="hover">
									<a href="product.html" class="entry-url"></a>
									<ul class="icons unstyled">
										<li>
											<div class="circle ribbon ribbon-sale">Sale</div>
										</li>
										<li>
											<a href="__PUBLIC__/Index/images/men/jumper/271866-0014_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
										</li>
										<li>
											<a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
										</li>
									</ul>
									<div class="rate-bar">
										<input type="range" value="4.5" step="0.5" id="backing13" />
										<div class="rateit" data-rateit-backingfld="#backing13" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
									</div>
								</div>
							</div>
							<div class="entry-main">
								<h5 class="entry-title">
									<a href="#">Inceptos orci hac libero</a>
								</h5>
								<div class="entry-price">
									<s class="entry-discount">$ 350.00</s>
									<strong class="accent-color price">$ 250.00</strong>
								</div>
							</div>
						</div>
						
						<div class="product" data-product-id="14">
							<div class="entry-media">
								<img data-src="__PUBLIC__/Index/images/men/shirt/803500-6989_1_t.jpg" alt="" class="lazyOwl thumb" />
								<div class="hover">
									<a href="product.html" class="entry-url"></a>
									<ul class="icons unstyled">
										<li>
											<a href="__PUBLIC__/Index/images/men/shirt/803500-6989_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
										</li>
										<li>
											<a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
										</li>
									</ul>
									<div class="rate-bar">
										<input type="range" value="4" step="0.5" id="backing14" />
										<div class="rateit" data-rateit-backingfld="#backing14" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
									</div>
								</div>
							</div>
							<div class="entry-main">
								<h5 class="entry-title">
									<a href="#">Inceptos orci hac libero</a>
								</h5>
								<div class="entry-price">
									<strong class="price">$ 350.00</strong>
								</div>
							</div>
						</div>
						
						<div class="product" data-product-id="15">
							<div class="entry-media">
								<img data-src="__PUBLIC__/Index/images/men/shirt/217360-0014_1_t.jpg" alt="" class="lazyOwl thumb" />
								<div class="hover">
									<a href="product.html" class="entry-url"></a>
									<ul class="icons unstyled">
										<li>
											<div class="circle ribbon ribbon-new">New</div>
										</li>
										<li>
											<a href="__PUBLIC__/Index/images/men/shirt/217360-0014_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
										</li>
										<li>
											<a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
										</li>
									</ul>
									<div class="rate-bar">
										<input type="range" value="3.5" step="0.5" id="backing15" />
										<div class="rateit" data-rateit-backingfld="#backing15" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
									</div>
								</div>
							</div>
							<div class="entry-main">
								<h5 class="entry-title">
									<a href="#">Inceptos orci hac libero</a>
								</h5>
								<div class="entry-price">
									<strong class="price">$ 450.00</strong>
								</div>
							</div>
						</div>
						
						<div class="product" data-product-id="16">
							<div class="entry-media">
								<img data-src="__PUBLIC__/Index/images/men/accessories/000095-0014_2_t.jpg" alt="" class="lazyOwl thumb" />
								<div class="hover">
									<a href="product.html" class="entry-url"></a>
									<ul class="icons unstyled">
										<li>
											<a href="__PUBLIC__/Index/images/men/accessories/000095-0014_2.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
										</li>
										<li>
											<a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
										</li>
									</ul>
									<div class="rate-bar">
										<input type="range" value="5" step="0.5" id="backing16" />
										<div class="rateit" data-rateit-backingfld="#backing16" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
									</div>
								</div>
							</div>
							<div class="entry-main">
								<h5 class="entry-title">
									<a href="#">Inceptos orci hac libero</a>
								</h5>
								<div class="entry-price">
									<strong class="price">$ 350.00</strong>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<!-- // END CAROUSEL -->
				
			</div>
		</div>
	</section>
	<!-- // NEW ARRIVAL PRODUCTS -->
	
</main>
<!-- // SITE MAIN CONTENT -->

		<!-- SITE FOOTER -->
	<footer class="page-footer">
		
		<!-- WIDGET AREA -->
		<div class="widgets">
		
			<!-- FIRST ROW -->
			<div class="section">
				<div class="container">
					<div class="row">
						
						<div class="col-xs-12 col-sm-6 col-md-3">
							<section class="widget widget-text">
								<h5 class="widget-title">our store</h5>
								<div class="widget-content">
									<p>Sed ornare cras donec litora integer curabitur orci, at nullam aliquam libero nam himenaeos, amet massa amet ut ipsum viverra mauris rhoncus neque aenean rhoncus gravida orci facilisis quis dui consectetur.</p>
									<p>Nisi porttitor inceptos consectetur donec orci, dui ipsum leo class gravida, felis primis viverra placerat.</p>
								</div>
							</section>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-3">
							<section class="widget widget-text">
								<h5 class="widget-title">Opening Time</h5>
								<div class="widget-content">
									<p>Monday-Friday:-------------------------9.00 to 18.00</p>
									<p>Saturday:--------------------------------10.00 to 16.00</p>
									<p>Sunday:----------------------------------10.00 to 16.00</p>
									<br/>
									<p>Every 30 day of month Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
								</div>
							</section>
						</div>
						
						<div class="space40 visible-sm clearfix"></div>
						
						<div class="col-xs-12 col-sm-6 col-md-3">
							<section class="widget widget-menu">
								<h5 class="widget-title">information</h5>
								<div class="widget-content">
									<ul class="menu iconed-menu unstyled">
										<li><a href="#"><i class="iconfont-circle-blank menu-icon"></i>Affiliate</a></li>
										<li><a href="#"><i class="iconfont-circle-blank menu-icon"></i>Shipping</a></li>
										<li><a href="#"><i class="iconfont-circle-blank menu-icon"></i>Shop support</a></li>
										<li><a href="#"><i class="iconfont-circle-blank menu-icon"></i>Customer Service</a></li>
										<li><a href="#"><i class="iconfont-circle-blank menu-icon"></i>Payment & Return</a></li>
										<li><a href="#"><i class="iconfont-circle-blank menu-icon"></i>Terms & Conditions</a></li>
									</ul>
								</div>
							</section>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-3">
							<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowTransparency="true" width="100%"></iframe>
						</div>
						
					</div>
				</div>
			</div>
			<!-- // FIRST ROW -->
			
			<!-- SECOND ROW -->
			<div class="section">
				<div class="container">
					<div class="row">
						
						<div class="col-xs-12 col-sm-12 col-md-3">
							<section class="widget widget-menu">
								<h5 class="widget-title">Contact info</h5>
								<div class="widget-content">
									<ul class="menu iconed-list unstyled">
										<li>
											<span class="list-icon"><i class="round-icon iconfont-map-marker"></i></span>
											<div class="list-content">Lorem ipsum maecenas dapibus luctus euismod 133/2 New York City</div>
										</li>
										<li>
											<span class="list-icon"><i class="round-icon iconfont-phone"></i></span>
											<div class="list-content">(+00)1344356-675</div>
										</li>
										<li>
											<span class="list-icon"><i class="round-icon iconfont-envelope-alt"></i></span>
											<div class="list-content">support@themina.net</div>
										</li>
									</ul>
								</div>
							</section>
						</div>
						
						<div class="col-xs-12 col-sm-12 col-md-6">
							<section class="widget widget-ads">
								<div class="widget-content">
									<div class="center-xs">
										<div class="ads">
											<a href="#">
												<img src="__PUBLIC__/Index/images/demo/images-footer.jpg" alt="" />
											</a>
											<div class="ads-caption bottom-right">
												<a href="#" class="btn btn-default btn-round">
													<i class="round-icon iconfont-angle-right"></i>
													<span class="inline-middle">Show More</span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						
						<div class="col-xs-12 col-sm-12 col-md-3">
							<section class="widget widget-subscription">
								<h5 class="widget-title">Newletter</h5>
								<div class="widget-content">
									<p>Subscribe to be the first to know about Sales, Events, and Exclusive Offers!</p>
									<form action="#" method="post">
										<div class="input-group">
											<label for="subscription-email" class="placeholder">Enter Your Email</label>
											<input type="email" id="subscription-email" name="email" class="form-control" required />
											<span class="input-group-btn">
												<button class="btn btn-primary">Subscribe</button>
											</span>
										</div>
									</form>
								</div>
							</section>
						</div>
						
					</div>
				</div>
			</div>
			<!-- // SECOND ROW -->
			
		</div>
		<!-- // WIDGET AREA -->
		
		<div class="footer-sub">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="footer-links center-xs clearfix">
							<ul class="unstyled">
								<li><a href="#">Site Map</a></li>
								<li><a href="#">FAQ</a></li>
								<li><a href="#">Work for us</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
						<div class="space10"></div>
						<div class="copyright center-xs">
							<p>© 2013 Gfashion Demo Store. All Rights Reserved.</p>
						</div>
					</div>
					
					<div class="space40 visible-xs"></div>
					
					<div class="col-xs-12 col-sm-6 center-xs">
						<div class="pull-right">
							<div class="vmid">
								<span class="uppercase">Payment Accept&emsp;</span>
								<a href="#"><img src="__PUBLIC__/Index/img/visacard.png" alt="" width="40" /></a>
								<a href="#"><img src="__PUBLIC__/Index/img/mastercard.png" alt="" width="40" /></a>
								<a href="#"><img src="__PUBLIC__/Index/img/paypal.png" alt="" width="40" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- // SITE FOOTER -->
		
</div>
<!-- // PAGE WRAPPER -->

<!-- Essential Javascripts -->
<script src="__PUBLIC__/Index/js/minified.js"></script>
<!-- // Essential Javascripts -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-27646173-3', 'themina.net');
  ga('send', 'pageview');

</script>
	<!-- Particular Page Javascripts -->
	<script src="__PUBLIC__/Index/js/owl.carousel.js"></script>
	<script src="__PUBLIC__/Index/js/jquery.flexslider-min.js"></script>
	<script src="__PUBLIC__/Index/js/jquery.nouislider.js"></script>
	<script src="__PUBLIC__/Index/js/jquery.isotope.min.js"></script>
	<script src="__PUBLIC__/Index/js/products.js"></script>
	<!-- // Particular Page Javascripts -->
</body>
</html>