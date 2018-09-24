<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href='{{asset("themes/bootshop/bootstrap.min.css")}}' media="screen"/>
    <link href='{{asset("themes/css/base.css")}}' rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href='{{asset("themes/css/bootstrap-responsive.min.css")}}' rel="stylesheet"/>
	<link href='{{asset("themes/css/font-awesome.css")}}' rel="stylesheet" type="text/css")}}'>
<!-- Google-code-prettify -->	
	<link href='{{asset("themes/js/google-code-prettify/prettify.css")}}' rel="stylesheet"/>
	<style type="text/css" id="enject"></style>
  </head>
<body>
@include('components.header')
<div id="mainBody">
	<div class="container">
        <div class="row">
            @include('components.sidebar')
            <div class="span9">
                @include('components.breadcrumb')
                <hr class="soft"/>
                @include('components.product_filter')
                <br class="clr"/>
                <div class="tab-content">
                @include('components.products_list_view')
                @include('components.products_block_view')
                </div>
                <br class="clr"/>
                @include('components.paging')
            </div>
        </div>
    </div>
</div>
<!-- MainBody End ============================= -->

<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src='{{asset("themes/js/jquery.js")}}' type="text/javascript"></script>
	<script src='{{asset("themes/js/bootstrap.min.js")}}' type="text/javascript"></script>
	<script src='{{asset("themes/js/google-code-prettify/prettify.js")}}'></script>

	<script src='{{asset("themes/js/bootshop.js")}}'></script>
	<script src='{{asset("themes/js/jquery.lightbox-0.5.js")}}'></script>
</body>
</html>