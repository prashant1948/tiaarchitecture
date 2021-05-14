 
<!DOCTYPE html>

<html lang="en-US">

<head>
<meta charset="UTF-8" />

<!-- Responsive -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<script>document.documentElement.className = document.documentElement.className + ' yes-js js_active js'</script>
<title>TIA &#8211; Architecture Design</title>
<link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}"/>

<link rel='dns-prefetch' href='http://s.w.org/' />
<link href='https://fonts.gstatic.com/' crossorigin rel='preconnect' />

<link rel='stylesheet' id='wp-block-library-css'  href="{{asset('/wp-includes/css/dist/block-library/style.min7e15.css?ver=5.5.4')}}" type='text/css' media='all' />
<!-- <link rel='stylesheet' id='wp-block-library-theme-css'  href='../wp-includes/css/dist/block-library/theme.min7e15.css?ver=5.5.4' type='text/css' media='all' /> -->
<!-- <link rel='stylesheet' id='wc-block-vendors-style-css'  href='../wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/vendors-style324d.css?ver=3.1.0' type='text/css' media='all' /> -->
<link rel='stylesheet' id='wc-block-style-css'  href='../wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/style324d.css?ver=3.1.0' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-selectBox-css'  href='../wp-content/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox7359.css?ver=1.2.0' type='text/css' media='all' />
<link rel='stylesheet' id='yith-wcwl-font-awesome-css'  href='../wp-content/plugins/yith-woocommerce-wishlist/assets/css/font-awesome1849.css?ver=4.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='yith-wcwl-main-css'  href='../wp-content/plugins/yith-woocommerce-wishlist/assets/css/style2a45.css?ver=3.0.13' type='text/css' media='all' />
<style id='yith-wcwl-main-inline-css' type='text/css'>
.yith-wcwl-share li a{color: #FFFFFF;}.yith-wcwl-share li a:hover{color: #FFFFFF;}.yith-wcwl-share a.facebook{background: #39599E; background-color: #39599E;}.yith-wcwl-share a.facebook:hover{background: #39599E; background-color: #39599E;}.yith-wcwl-share a.twitter{background: #45AFE2; background-color: #45AFE2;}.yith-wcwl-share a.twitter:hover{background: #39599E; background-color: #39599E;}.yith-wcwl-share a.pinterest{background: #AB2E31; background-color: #AB2E31;}.yith-wcwl-share a.pinterest:hover{background: #39599E; background-color: #39599E;}.yith-wcwl-share a.email{background: #FBB102; background-color: #FBB102;}.yith-wcwl-share a.email:hover{background: #39599E; background-color: #39599E;}.yith-wcwl-share a.whatsapp{background: #00A901; background-color: #00A901;}.yith-wcwl-share a.whatsapp:hover{background: #39599E; background-color: #39599E;}
</style>
<link rel='stylesheet' id='contact-form-7-css'  href='../wp-content/plugins/contact-form-7/includes/css/stylesbb49.css?ver=5.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-layout-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce-layout268f.css?ver=4.5.0' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen268f.css?ver=4.5.0' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce268f.css?ver=4.5.0' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='ce-style-css'  href='../wp-content/plugins/codeless-elements/assets/css/codeless-elements8a54.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-animations-css'  href='../wp-content/plugins/elementor/assets/lib/animations/animations.min7c45.css?ver=3.0.6' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-legacy-css'  href='../wp-content/plugins/elementor/assets/css/frontend-legacy.min7c45.css?ver=3.0.6' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css'  href='../wp-content/plugins/elementor/assets/css/frontend.min7c45.css?ver=3.0.6' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-1333-css'  href='../wp-content/uploads/elementor/css/post-133329d7.css?ver=1599730834' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-508-css'  href='../wp-content/uploads/elementor/css/post-5083148.css?ver=1600695637' type='text/css' media='all' />
<link rel='stylesheet' id='ce-widgets-style-css'  href='../wp-content/plugins/codeless-elements/inc/widgets-css/frontend8a54.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-1465-css'  href='../wp-content/uploads/elementor/css/post-146561e7.css?ver=1601544267' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-1477-css'  href='../wp-content/uploads/elementor/css/post-1477559a.css?ver=1599554980' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce_prettyPhoto_css-css'  href='../wp-content/plugins/woocommerce/assets/css/prettyPhoto7e15.css?ver=5.5.4' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='../wp-content/themes/remake/css/bootstrap7e15.css?ver=5.5.4' type='text/css' media='all' />
<link rel='stylesheet' id='codeless-style-css'  href='../wp-content/themes/remake/style7e15.css?ver=5.5.4' type='text/css' media='all' />
<link rel='stylesheet' id='codeless-theme-css'  href='../wp-content/themes/remake/css/theme.min7e15.css?ver=5.5.4' type='text/css' media='all' />
<link rel='stylesheet' id='feather-css'  href='../wp-content/themes/remake/css/feather8a54.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='codeless-remake-icons-css'  href='../wp-content/themes/remake/css/codeless-remake-icons8a54.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='codeless-dynamic-css'  href='../wp-content/themes/remake/css/codeless-dynamic7e15.css?ver=5.5.4' type='text/css' media='all' />
<style id='codeless-dynamic-inline-css' type='text/css'>

	 .select2-container--default .select2-results__option--highlighted[aria-selected]{ background-color: #ff6422 !important; color:#fff !important } 


	 .woocommerce-page .shop-products{ margin-left: -15px; margin-right: -15px; }

				
							.tag-link-5{
					background-color:#cce7ee;
				}
		
			.tag-link-1{
					background-color:#eee9c8;
				}
		
							.tag-link-6{
					background-color:#f9d4c9;
				}
					
							.tag-link-8{
					background-color:#cef8d2;
				}
					
							.tag-link-7{
					background-color:#e8defd;
				}
					
				.ce-hudson-slider .title-wrapper .slide-title a span{
					text-transform: capitalize;
				}	
					
		  
.dark-services-block > .row{
		background:#000;
		position:relative;
		z-index:9999;
		display:flex;
		align-items:stretch;
}

.dark-services-block .cl-service-box{
		height:100%
}

.dark-services-block .cl-service-box .wrapper{
		height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

@media (min-width:992px){
.heading-offset-creative h2{
		left:175px;
}
}

.btn_colored .btn-style-text_border span, .btn_colored .btn-style-text_border i{
		color:#FF6422;
}

.btn_colored .btn-style-text_border span:after{
		background:#FF6422;
}

.title_ontop .cl-custom-heading:first-child{
		position:relative;
		top:-30px !important
}
.title_ontop_sticky .col-content{
		top:-20px;
}
.title_ontop_sticky .cl-custom-heading{
		position:sticky;
		top:20px;
		
}

.portfolio_custom_nr_color .number{
		color:#fef1f1 !important;
}

.horizontal-slider-section-2 .bg-layer{
		background-position:35% center !important;
		background-size:auto calc(100vh - 200px) !important;
}

.circle_gradient_1 .elementor-icon{
		background: linear-gradient(180deg, #EBF6FF 0%, rgba(255, 255, 255, 0) 100%);
		fill:#000;
}

.circle_gradient_2 .elementor-icon{
		background: linear-gradient(180deg, #FEF1F1 0%, rgba(255, 255, 255, 0) 100%);
		fill:#000;
}

.circle_gradient_3 .elementor-icon{
		background: linear-gradient(180deg, #FEF5DF 0%, rgba(255, 255, 255, 0) 100%);
		fill:#000;
}
@media (min-width:992px){
.section_with_arrows .elementor-container:before{
		content: "";
    background: url(../wp-content/uploads/2020/09/Arrow-2.png) center no-repeat;
    position: absolute;
    width: 232px;
    height: 40px;
    left: 260px;
    top: 40px;
}

.section_with_arrows .elementor-container:after{
		content: "";
    background: url(../wp-content/uploads/2020/09/Arrow-2.png) center no-repeat;
    position: absolute;
    width: 232px;
    height: 40px;
    right: 266px;
    top: 75px;
}
}
.gradient_final_button .elementor-button{
		background: linear-gradient(90deg, #FF2F22 0%, #FF2272 100%);
}

.button_border_text .elementor-button-text{
		border-bottom-style:solid;
		border-bottom-width:1px;
		border-bottom-color:inherit;
}

.ce-testimonial-style-tista .text{
		font-family:Butler;
}

.ce-portfolio-style-ishmi .title .number{
		font-family:Butler;
		font-weight:300;
}

.ce-testimonial-style-tista-nav .nav-item{
		font-family:Butler;
}

.clients_centered .gallery-item{
		justify-content: center;
    height: 150px;
    align-items: center;
    display: flex;
}

.max_width_auto img{
		max-width:none !important;
		width:100%;
}

@media (max-width:1560px){
		.ce-pao-slider .cl-slider-nav{
				display:none;
		}
}

.page-id-3708 .ce-portfolio-style-remake .overlay{
		display:none;
}

.showcases-home .ce-portfolio-style-remake .overlay{
		display:none;
}

.showcases-home .ce-portfolio-style-remake .post-thumbnail{
		box-shadow: 0px 20px 40px rgba(0, 0, 0, 0.05) !important;
}

	
</style>
<link rel='stylesheet' id='woo-variation-swatches-css'  href='../wp-content/plugins/woo-variation-swatches/assets/css/frontend.minf0d3.css?ver=1.0.85' type='text/css' media='all' />
<style id='woo-variation-swatches-inline-css' type='text/css'>
.variable-item:not(.radio-variable-item) { width : 30px; height : 30px; } .wvs-style-squared .button-variable-item { min-width : 30px; } .button-variable-item span { font-size : 16px; }
</style>
<link rel='stylesheet' id='woo-variation-swatches-theme-override-css'  href='../wp-content/plugins/woo-variation-swatches/assets/css/wvs-theme-override.minf0d3.css?ver=1.0.85' type='text/css' media='all' />
<link rel='stylesheet' id='woo-variation-swatches-tooltip-css'  href='../wp-content/plugins/woo-variation-swatches/assets/css/frontend-tooltip.minf0d3.css?ver=1.0.85' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-1-css'  href='../wp-content/themes/remake/css/feather8a54.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-feather-css'  href='../wp-content/themes/remake/css/feather8a54.css?ver=1.0.0' type='text/css' media='all' />
<script type='text/javascript' src='../wp-includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp' id='jquery-core-js'></script>

<script type='text/javascript' src='../wp-content/plugins/codeless-elements/assets/js/ce-global8a54.js?ver=1.0.0' id='ce-global-js'></script>
<script type='text/javascript' src='../wp-content/themes/remake/js/pace.min7e15.js?ver=5.5.4' id='pace-js'></script>
<script type='text/javascript' src='../wp-includes/js/imagesloaded.mineda1.js?ver=4.1.4' id='imagesloaded-js'></script>
<script type='text/javascript' id='codeless-main-js-extra'>
/* <![CDATA[ */
var codeless_global = {"ajax_url":"https:\/\/remake.codeless.co\/wp-admin\/admin-ajax.php","FRONT_LIB_JS":"https:\/\/remake.codeless.co\/wp-content\/themes\/remake\/js\/","FRONT_LIB_CSS":"https:\/\/remake.codeless.co\/wp-content\/themes\/remake\/css\/","postSwiperOptions":{"effect":"scroll","lazyLoading":false,"autoplay":"","loop":false,"autoHeight":true,"pagination":{"el":".swiper-pagination","type":"fraction"},"paginationClickable":true,"navigation":{"nextEl":".swiper-button-next","prevEl":".swiper-button-prev"}},"cl_btn_classes":"cl-btn btn-style-rounded btn-effect-default","cursorColor":"#000000","is_customize_preview":""};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/themes/remake/js/codeless-main7e15.js?ver=5.5.4' id='codeless-main-js'></script>
<script type='text/javascript' src='../wp-content/themes/remake/js/bowser.min7e15.js?ver=5.5.4' id='bowser-js'></script>
				<style type="text/css">
					@font-face { font-family:Sporting Grotesque;src:url(https://remake.codeless.co/wp-content/uploads/2020/06/SportingGrotesque-Regular.otf) format('opentype');font-display: auto;}				</style>
					<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<style id="kirki-inline-styles">aside .widget ul li a:hover, aside .widget_rss cite, h1 > a:hover, h2 > a:hover, h3 > a:hover, h4 > a:hover, h5 > a:hover, h6 > a:hover, mark.highlight, #blog-entries article .entry-readmore:hover, .single-post .nav-links > div a .nav-title:hover, .shop-products .product_item .cl-price-button-switch a, .single-post article .entry-content > a, .breadcrumbss .page_parents li a:hover, .ce-hudson-slider .all-works:hover{color:#ff6422!important;}article.format-gallery .swiper-pagination-bullet-active, .shop-products .product_item .onsale, .cl-product-info .onsale, .widget_product_categories ul li.current-cat > a:before, .search__inner--down, #blog-entries .grid_noimage-style:hover .divider{background-color:#ff6422;}:root{--codeless-primary-color:#ff6422;--cursor-color:#000000;}.single-post .single-author>h6:before, .single-post .entry-single-related>h6:before, .single-post #comments .comments-title:before, .single-post #reply-title:before, .single-post .entry-single-tools .entry-single-tags a, #respond.comment-respond .comment-form-comment textarea, #respond.comment-respond input:not([type="submit"]), aside .mc4wp-form-fields, .elementor-widget-sidebar .mc4wp-form-fields{background-color:#eeeeee;}.single-post .entry-single-tools, .widget_aboutme .wrapper{border-color:#eeeeee;}article .entry-tools .codeless-count, article.format-quote .entry-content .quote-entry-content p, article.format-quote .entry-content .quote-entry-content a, aside .widget ul li a, .cl-pagination a, .cl-pagination span.current, .cl-pagination-jump a, .cl_progress_bar .labels{color:#000000!important;}body{background-position:left top;background-repeat:no-repeat;background-attachment:scroll;background-blend-mode:normal;-webkit-background-size:auto;-moz-background-size:auto;-ms-background-size:auto;-o-background-size:auto;background-size:auto;}html, body, .light-text .breadcrumbss .page_parents{font-family:inter;font-size:16px;font-weight:400;letter-spacing:0px;line-height:28px;text-transform:none;color:#000000;}h1,h2,h3,h4,h5,h6, .category-colored, .tagcloud a, .cl-pagination, .woocommerce ul.products li.product .cl-woo-product__title-wrapper .price, .woocommerce div.product .summary .price, .cl_counter, .cl_testimonial_1, .cl_slider_1 .title-wrapper .slide-title a, .elementor-counter .elementor-counter-number-wrapper, .elementor-counter .elementor-counter-title, .ce-post-navigation .item-title{font-family:DM Sans;}h1:not(.custom_font), .h1{font-size:48px;line-height:60px;text-transform:none;font-weight:400;letter-spacing:0px;color:#000000;}.light-text h1:not(.custom_font), .light-text .h1{color:#ffffff !important;}h2:not(.custom_font), .h2{font-size:36px;line-height:42px;text-transform:none;font-weight:400;letter-spacing:0px;color:#000000;}.light-text h2:not(.custom_font), .light-text .h2{color:#ffffff !important;}h3:not(.custom_font), .h3{font-size:24px;line-height:36px;text-transform:none;font-weight:400;letter-spacing:0px;color:#000000;}.light-text h3:not(.custom_font), .light-text .h3{color:#ffffff !important;}h4:not(.custom_font), .h4{font-size:20px;line-height:28px;text-transform:none;font-weight:400;letter-spacing:0px;color:#000000;}.light-text h4:not(.custom_font), .light-text .h4{color:#ffffff !important;}h5:not(.custom_font), .h5{font-size:18px;line-height:28px;text-transform:none;font-weight:400;letter-spacing:0px;color:#000000;}.light-text h5:not(.custom_font), .light-text .h5{color:#ffffff !important;}h6:not(.custom_font), .h6{font-size:12px;line-height:24px;text-transform:uppercase;font-weight:500;letter-spacing:3.2px;color:#000000;}.light-text h6:not(.custom_font), .light-text .h6{color:#ffffff !important;}article h2.entry-title{font-family:butler;font-size:36px;font-weight:300;letter-spacing:0em;line-height:42px;text-transform:none;color:#000000;}.single-post .cl-post-header h1{font-family:butler;font-size:60px;font-weight:300;letter-spacing:0px;line-height:72px;text-transform:none;color:#000000;}article .entry-overlay-color .entry-overlay, article .entry-overlay-zoom_color .entry-overlay{background-color:rgba(0,0,0,0.2);}#respond.comment-respond .comment-form-comment textarea, #respond.comment-respond input:not([type="submit"]){background-color:#eeeeee;}.single-author > h6, .entry-single-related > h6, .single-post #comments .comments-title, .single-post #reply-title{font-family:DM Sans;font-size:12px;font-weight:500;letter-spacing:0.2em;line-height:20px;text-transform:uppercase;color:#000000;}aside .widget-title, .elementor-widget-sidebar .widget-title{font-family:DM Sans;font-size:12px;font-weight:500;letter-spacing:0.2em;text-transform:uppercase;color:#000000;}aside .widget, .elementor-widget-sidebar .widget{padding-top:30px;padding-bottom:30px;}aside .widget_search input[type="search"]{background-color:#ffffff;}.ce-page-header{background-color:#eeeeee;color:#000;}.inner-content-row, .single_blog_style-classic.cl-layout-fullwidth{padding-top:120px;}.inner-content-row{padding-bottom:120px;}article.post h1.entry-title{margin-top:0px;margin-bottom:40px;}@media (min-width: 1200px){.container{width:1200px;}}@media (min-width: 992px){.single-post .cl-layout-fullwidth .inner-content.container, .single-post .cl-layout-fullwidth .cl-post-header .container{width:770px;}}/* latin-ext */
@font-face {
  font-family: 'DM Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://remake.codeless.co/wp-content/fonts/dm-sans/rP2Hp2ywxg089UriCZ2IGzWEBlwu8Q.woff) format('woff');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'DM Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://remake.codeless.co/wp-content/fonts/dm-sans/rP2Hp2ywxg089UriCZOIGzWEBlw.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'DM Sans';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url(https://remake.codeless.co/wp-content/fonts/dm-sans/rP2Cp2ywxg089UriAWCrCBamDXYU-CnE6Q.woff) format('woff');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'DM Sans';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url(https://remake.codeless.co/wp-content/fonts/dm-sans/rP2Cp2ywxg089UriAWCrCBimDXYU-Ck.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
.logo-style{
	max-width: 150px !important;
}

</style></head>

<!-- Body -->
<body class="page-template-default page page-id-508 wp-custom-logo theme-remake woocommerce-no-js ce-header ce-header--transparent ce-footer ce-footer--transparent ce-template-remake ce-stylesheet-remake woo-variation-swatches wvs-theme-remake wvs-theme-child-remake wvs-style-squared wvs-attr-behavior-blur wvs-tooltip wvs-css cl-header-dark cl-header-transparent cl-search-creative built-with-elementor page-header-off cl-dropdown-skin-light cl-custom-mouse-cursor cl-preloader-lighter elementor-default elementor-kit-1333 elementor-page elementor-page-508">

    <div class="loader"></div>
    
<div id="viewport" class=""  >

	
	<div id="wrapper" class=""  >

				<header id="masthead" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
			<p class="main-title bce-hidden" itemprop="headline"><a href="/" title="TIA - Architecture" rel="home">TIA - Architecture</a></p>
					<div data-elementor-type="wp-post" data-elementor-id="1465" class="elementor elementor-1465" data-elementor-settings="[]">
						<div class="elementor-inner">
							<div class="elementor-section-wrap">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-975f419 elementor-section-stretched elementor-section-full_width elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle" data-id="975f419" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-07eabd0" data-id="07eabd0" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-114bfc0 ce-submenu-icon-plus ce-flyout-inner-hudson ce-menu-item-space-between elementor-widget elementor-widget-navigation-menu" data-id="114bfc0" data-element_type="widget" data-widget_type="navigation-menu.default">
				<div class="elementor-widget-container">
						<div class="ce-nav-menu__toggle elementor-clickable ce-flyout-trigger" tabindex="0">
					<div class="ce-nav-menu-icon"> 
						  
															<i class="feather  feather-menu" aria-hidden="true" tabindex="0"></i>
																		</div>
			</div>
			<div class="ce-flyout-wrapper" >
				<div class="ce-flyout-overlay elementor-clickable"></div>
				<div class="ce-flyout-container">
					<div id="ce-flyout-content-id-114bfc0" class="ce-side ce-flyout-left ce-flyout-open" data-width="50" data-layout="left" data-flyout-type="normal">
						<div class="ce-flyout-content push">						
						<nav ><ul id="menu-1-114bfc0" class="ce-nav-menu">
								<li id="menu-item-1258" class="menu-item menu-item-type-custom menu-item-object-custom
								 current-menu-ancestor menu-item-has-children parent ce-has-megamenu ">
								 <div class="ce-has-submenu-container">
									 <a href="#" class = "ce-menu-item">Home<span class='ce-menu-toggle sub-arrow ce-menu-child-0'>
										 <i class='fa'></i></span></a></div><div class="ce-megamenu-wrapper">
									<ul class="sub-menu">
										<li id="menu-item-1276" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor
										current-menu-parent menu-item-has-children ce-has-submenu "><div class="ce-has-submenu-container">
											<a href="#" class = "ce-sub-menu-item">Test 1</a></div>
									</li>
</li>
</ul>
</div><!-- .ce-megamega-wrapper --></li>
<li id="menu-item-1259" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent ce-has-no-megamenu "><div class="ce-has-submenu-container"><a href="#" class = "ce-menu-item">About Us<span class='ce-menu-toggle sub-arrow ce-menu-child-0'><i class='fa'></i></span></a></div>
</li>
<li id="menu-item-1259" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent ce-has-no-megamenu ">
	<div class="ce-has-submenu-container"><a href="#" class = "ce-menu-item">Contact<span class='ce-menu-toggle sub-arrow ce-menu-child-0'><i class='fa'></i></span></a></div>
</li>
</ul>
</nav>
							<div class="elementor-clickable ce-flyout-close" tabindex="0">
																	<i class="feather  feather-x" aria-hidden="true"></i>
															</div>
							</div>
								
						</div>
					</div>
				</div>
			</div>				
					</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-35cbad4" data-id="35cbad4" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-7afdd3c elementor-widget elementor-widget-site-logo" data-id="7afdd3c" data-element_type="widget" data-widget_type="site-logo.default">
				<div class="elementor-widget-container">
					<div class="ce-site-logo">
													<a data-elementor-open-lightbox=""  class='elementor-clickable' href="https://remake.codeless.co/">
							<div class="ce-site-logo-set">           
				<div class="ce-site-logo-container">
					<img class="ce-site-logo-img elementor-animation- logo-style"  src="{{asset('images/tialogo.png')}}" alt="site-logo"/>
				</div>
			</div>
							</a>
						</div>  
					</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
						</div>
						</div>
					</div>
				</header>
		
	<main id="main" class="site-main " >

			
	<section id="site_content" class="" >

		
		<div id="content" class="cl-layout-fullwidth"  >

			<div class="inner-content container-fluid">
				
				<div class="inner-content-row row">
					
										
					<div class="content-col col-sm-12">
						
								<div data-elementor-type="wp-page" data-elementor-id="508" class="elementor elementor-508" data-elementor-settings="[]">
						<div class="elementor-inner">
							<div class="elementor-section-wrap">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-285bf25 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="285bf25" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-084547c" data-id="084547c" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-6cbb1e9 elementor-widget elementor-widget-hudson-slider" data-id="6cbb1e9" data-element_type="widget" data-widget_type="hudson-slider.default">
				<div class="elementor-widget-container">
					<div class="ce-hudson-slider">
			<!-- Additional required wrapper -->
            <div class="slider-wrapper">
    	
                        
            <div class="title-wrapper">
                <div class="inner">
            
                <div class="slide-title active" data-id="1"><a href="https://remake.codeless.co/portfolio/askul/"><span>Test A</span></a></div>

                
                <div class="slide-title " data-id="2"><a href="https://remake.codeless.co/portfolio/askul/"><span>Test B</span></a></div>

                
                <div class="slide-title " data-id="3"><a href="https://remake.codeless.co/portfolio/askul/"><span>Test C</span></a></div>

                
                <div class="slide-title " data-id="4"><a href="https://remake.codeless.co/portfolio/askul/"><span>Test D</span></a></div>

                
                <div class="slide-title " data-id="5"><a href="https://remake.codeless.co/portfolio/askul/"><span>Test E</span></a></div>

                
                <div class="slide-title " data-id="6"><a href="https://remake.codeless.co/portfolio/askul/"><span>Test F</span></a></div>

                
                <div class="slide-title " data-id="7"><a href="https://remake.codeless.co/portfolio/askul/"><span>Test G</span></a></div>

                
                <div class="slide-title " data-id="8"><a href="https://remake.codeless.co/portfolio/askul/"><span>Test H</span></a></div>

                            
                <a href="/works" class="all-works">see all works</a>
                </div>
            </div>  

            <div class="images-wrapper">
                
                    <div class="slide-img active">
						<img loading="lazy" src="../images/1.jpg" alt="slide alt" />
						<a href="#" class="image-link"></a>
                        <div class="cl-load-vortex"></div>
                    </div>
                                        <div class="slide-img ">
						<img loading="lazy" src="../images/2.jpg" alt="slide alt" />
						<a href="#" class="image-link"></a>
                        <div class="cl-load-vortex"></div>
                    </div>
                                        <div class="slide-img ">
						<img loading="lazy" src="../images/3.jpg" alt="slide alt" />
						<a href="#" class="image-link"></a>
                        <div class="cl-load-vortex"></div>
                    </div>
                                        <div class="slide-img ">
						<img loading="lazy" src="../images/4.jpg" alt="slide alt" />
						<a href="#" class="image-link"></a>
                        <div class="cl-load-vortex"></div>
                    </div>
                                        <div class="slide-img ">
						<img loading="lazy" src="../images/5.jpg" alt="slide alt" />
						<a href="#" class="image-link"></a>
                        <div class="cl-load-vortex"></div>
                    </div>
                                        <div class="slide-img ">
						<img loading="lazy" src="../images/6.jpg" alt="slide alt" />
						<a href="#" class="image-link"></a>
                        <div class="cl-load-vortex"></div>
                    </div>
                                        <div class="slide-img ">
						<img loading="lazy" src="../images/7.jpg" alt="slide alt" />
						<a href="#" class="image-link"></a>
                        <div class="cl-load-vortex"></div>
                    </div>
                                        <div class="slide-img ">
						<img loading="lazy" src="../images/8.jpg" alt="slide alt" />
						<a href="#" class="image-link"></a>
                        <div class="cl-load-vortex"></div>
                    </div>
                                    
            </div> 

        </div> 

        <div class="project-number">
            <span class="text">Project</span>
            <span class="actual">1</span>
            <span class="total"> / 8</span>
        </div>
		
				</div>
				</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
						</div>
						</div>
					</div>
					             
			             
					
			

						
					</div><!-- .content-col -->
					
										
				</div><!-- .row -->
				
			</div><!-- .inner-content -->
			
		

			
			
						
		</div><!-- #content -->

		
	</section><!-- #site-content -->
	
                
	    </main><!-- #main -->
        
        		<footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon" role="contentinfo">
			<div class='footer-width-fixer'>		<div data-elementor-type="wp-post" data-elementor-id="1477" class="elementor elementor-1477" data-elementor-settings="[]">
						<div class="elementor-inner">
							<div class="elementor-section-wrap">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-6b7bcde elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default" data-id="6b7bcde" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-22aeab4" data-id="22aeab4" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-9cdfd2a elementor-widget__width-auto elementor-widget elementor-widget-wp-widget-nav_menu" data-id="9cdfd2a" data-element_type="widget" data-widget_type="wp-widget-nav_menu.default">
				<div class="elementor-widget-container">
			<div class="menu-footer-socials-container"><ul id="menu-footer-socials-1" class="menu"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1178"><a href="/pasanu.com">Powered by Pasanu</a></li>
</ul></div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6aafa1f" data-id="6aafa1f" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-ea810dd elementor-widget elementor-widget-text-editor" data-id="ea810dd" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix"><p>©2021 All Rights Reserved </p></div>
				</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
						</div>
						</div>
					</div>
		</div>		</footer>
	
	    	    
    </div><!-- #wrapper -->
    
    
        
</div><!-- #viewport -->

    <!-- The cursor elements --> 
    <div class="circle-cursor circle-cursor--inner"></div>
	<div class="circle-cursor circle-cursor--outer"></div>
    
<script type='text/javascript' id='wc-add-to-cart-js-extra'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/remake.codeless.co\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min268f.js?ver=4.5.0' id='wc-add-to-cart-js'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4' id='js-cookie-js'></script>
<script type='text/javascript' id='woocommerce-js-extra'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min268f.js?ver=4.5.0' id='woocommerce-js'></script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_230995eab4ddb98fa437837c1d1549e4","fragment_name":"wc_fragments_230995eab4ddb98fa437837c1d1549e4","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min268f.js?ver=4.5.0' id='wc-cart-fragments-js'></script>
<script type='text/javascript' src='../wp-content/plugins/elementor/assets/lib/swiper/swiper.min48f5.js?ver=5.3.6' id='swiper-js'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min005e.js?ver=3.1.6' id='prettyPhoto-js'></script>
<script type='text/javascript' src='../wp-includes/js/underscore.min4511.js?ver=1.8.3' id='underscore-js'></script>
<script type='text/javascript' id='wp-util-js-extra'>
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-includes/js/wp-util.min7e15.js?ver=5.5.4' id='wp-util-js'></script>
<script type='text/javascript' id='woo-variation-swatches-js-extra'>
/* <![CDATA[ */
var woo_variation_swatches_options = {"is_product_page":""};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woo-variation-swatches/assets/js/frontend.minf0d3.js?ver=1.0.85' id='woo-variation-swatches-js'></script>
<script type='text/javascript' src='../wp-includes/js/wp-embed.min7e15.js?ver=5.5.4' id='wp-embed-js'></script>
<script type='text/javascript' src='../wp-content/plugins/codeless-elements/inc/js/ce-nav-menu8a54.js?ver=1.0.0' id='ce-nav-menu-js'></script>
<script type='text/javascript' src='../wp-content/plugins/codeless-elements/inc/js/ce-hudson-slider8a54.js?ver=1.0.0' id='ce-hudson-slider-js'></script>
<script type='text/javascript' src='../wp-content/plugins/elementor/assets/js/frontend-modules.min7c45.js?ver=3.0.6' id='elementor-frontend-modules-js'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/position.mine899.js?ver=1.11.4' id='jquery-ui-position-js'></script>
<script type='text/javascript' src='../wp-content/plugins/elementor/assets/lib/dialog/dialog.mina288.js?ver=4.8.1' id='elementor-dialog-js'></script>
<script type='text/javascript' src='../wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2' id='elementor-waypoints-js'></script>
<script type='text/javascript' src='../wp-content/plugins/elementor/assets/lib/share-link/share-link.min7c45.js?ver=3.0.6' id='share-link-js'></script>
<script type='text/javascript' id='elementor-frontend-js-before'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"3.0.6","is_static":false,"legacyMode":{"elementWrappers":true},"urls":{"assets":"https:\/\/remake.codeless.co\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":508,"title":"Hudson%20%E2%80%93%20Remake%20WordPress%20Theme","excerpt":"","featuredImage":false}};
</script>
<script type='text/javascript' src='../wp-content/plugins/elementor/assets/js/frontend.min7c45.js?ver=3.0.6' id='elementor-frontend-js'></script>

</body>

<!-- Mirrored from remake.codeless.co/hudson/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 May 2021 16:18:40 GMT -->
</html>