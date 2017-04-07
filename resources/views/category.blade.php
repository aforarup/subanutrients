@extends('layouts.index')

@section('category')
	class='active'
@endsection

@section('content')
	<div class="main-content-top">
		<div class="main-wrapper">
			<div class="row">
				<div class="large-6 columns">
					<h2>Products</h2>
				</div>
				<div class="large-6 columns">
					<ul class="breadcrumbs right">
						<li>You are here: </li>
						<li><a href="{!! url('/') !!}">Home</a></li>
						<li><span>Products</span></li>
					</ul>
				</div>
			</div>
		</div>
		</div>
		<!-- End Main Content Top -->
		<div class="main-wrapper">
		<div class="content_wrapper">
			<div class="row">
				 <div class="large-12 columns">
					<ul class="splitter portfolio-main filter portmenu">
						<li class="segment-0 {{$cat == null ? 'selected-1 active' : ''}}"><a href="#" class="all">All</a></li>
						@foreach($categories as $key=>$category)
							<li class="segment-{{ ++$key }} {{$cat != null && $cat->id == $category -> id ? 'selected-1 active' : ''}}"><a href="#" class="{{$category->slug}}">{{$category->name}}</a></li>
						@endforeach
					</ul>
				 </div>
				<div class="large-12 columns">
					<ul class="portfolio-content large-block-grid-4">

						@each('partials.productview', $products, 'product')
						{{--@foreach($products as $key=>$product)--}}
							{{--<li data-id="{{++$key}}" data-type="{{$product->category->slug}}">--}}
								{{--<div class="view view-one">--}}
									{{--<img src="{!! url('images/backgrounds/medicine-placeholder-1.png') !!}" alt="" />--}}
									{{--<p>Name of the medicine</p>--}}
									{{--<div class="mask">--}}
										{{--{!! $product->benefits!!}--}}
										{{--<a href="images/demo/slider/1.jpg" class="picon-zoom" rel="prettyPhoto" title="John Steed, top professional">--}}
											{{--<i class="icon-zoom-in icon-large"></i>--}}
										{{--</a>--}}
										{{--<a href="portfolio-single.html" class="picon-info">--}}
											{{--<i class="fa fa-info"></i>--}}
										{{--</a>--}}
									{{--</div>--}}
								{{--</div>--}}
								{{--<a href="{!! url('/product/'.$product->slug) !!}">--}}
								{{--<div class="project-info">--}}
									{{--<h3>{{$product->name}}</h3>--}}
									{{--<p>{{$product->presentation}}</p>--}}
								{{--</div>--}}
								{{--</a>--}}
							{{--</li>--}}
						{{--@endforeach--}}
					</ul>
				</div>
				<div class="large-12 columns">
					<p>
						Striding in high velocity animal health market  is  possible through development & launch of  innovative product s. Our success lies in developing new products to mitigate emerging challenges in Animal health sector.

						We always aspire to develop sustainable competitive advantages & leverage our core strength to develop new innovative products for Cattle, Poultry, Swine  & Companion Animals
					</p>

				</div>
			</div>
		</div>
	</div>
@endsection
@section('footer')
	<!--Quicksand-->
	<script type="text/javascript" src="{!! url('/plugins/prettyphoto/jquery.prettyPhoto.js') !!}"></script>
	<script type="text/javascript" src="{!! url('/js/jquery.quicksand.js') !!}"></script>
	<script type="text/javascript">

        $(document).ready(function() {
            //$("a[rel^='prettyPhoto']").click(function() {alert ('gag') });
            $('a[rel^="prettyPhoto"]').prettyPhoto({theme: "dark_square"});

            var $filterType = $('.portfolio-main li.active a').attr('class');
            var $holder = $('ul.portfolio-content');
            var $data = $holder.clone();
            jQuery('.portfolio-main li a').click(function(e) {

                $('.portfolio-main li').removeClass('active');
                var $filterType = $(this).attr('class');
                $(this).parent().addClass('active');

                if ($filterType == 'all') {
                    var $filteredData = $data.find('li');
                }
                else {
                    var $filteredData = $data.find('li[data-type=' + $filterType + ']');
                }
                $holder.quicksand($filteredData,
                    {duration: 800,easing: 'easeInOutQuad'},
                    function() {
                        $("a[rel^='prettyPhoto']").prettyPhoto({theme: 'dark_square'});
                    }
                );
                return false;
            });
            if ($filterType == 'all') {
                var $filteredData = $data.find('li');
            }
            else {
                var $filteredData = $data.find('li[data-type=' + $filterType + ']');
            }
            $holder.quicksand($filteredData,
                {duration: 800,easing: 'easeInOutQuad'},
                function() {
                    $("a[rel^='prettyPhoto']").prettyPhoto({theme: 'dark_square'});
                }
            );
        });
	</script>
@endsection