<!--
Author: Soft-all
Author URL: http://soft-all.com/
-->
<!DOCTYPE html>
<html>
<head>
<title>Soft-Buy a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: Soft-theme</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
@yield('css_js')
</head>
<body>
<!-- header -->
@include('frontView.inc.header')
<!-- //header-bot -->
<!-- banner -->
@include('frontView.inc.menu')
<!-- //banner-top -->
<!-- banner -->
@yield('feature')
<!-- //banner -->
<!-- content -->

@yield('mainContent')
<!-- //product-nav -->

@include('frontView.inc.coupons')
<!-- footer -->

@include('frontView.inc.footer')
<!-- //login -->
</body>
</html>
