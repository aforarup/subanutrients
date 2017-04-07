@extends('layouts.index')

@section('about')
	class='active'
@endsection

@section('content')
	<div class="main-content-top">
		<div class="main-wrapper">
			<div class="row">
				<div class="large-6 columns">
					<h2>About us</h2>
				</div>
				<div class="large-6 columns">
					<ul class="breadcrumbs right">
						<li>You are here: </li>
						<li><a href="{!! url('/') !!}">Home</a></li>
						<li><span>About us</span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- End Main Content Top -->
	<div class="main-wrapper">
		<div class="content_wrapper">
			<div class="row">
				<div class="large-8 columns">
					<article class="post single-post">
						{{--<div class="post_img">--}}
							{{--<img class="post_image" src="{!! url('images/demo/slider/strip.jpg') !!}" alt="post title">--}}
							{{--<ul class="meta">--}}
                                {{--<li><i class="fa fa-calendar"></i><span id="date"></span></li>--}}
							{{--</ul>--}}
						{{--</div>--}}
						<h3>ABOUT US</h3>
						<p class="post_text">
                            Suba Nutrients, Multi National Animal Health organization is engaged in innovation, R & D,  manufacturing & marketing of nutraceuticals and animal health products. Our objective is to make our customers’ business more sustainable and profitable. Building on many years of experience, we deliver quality products and services. We are working every day to understand and mitigate challenges faced by our customers who raise and care for animals in ways they find truly relevant.
                        </p>
                        <p class="post_text">
                            Incepted with an objective to be recognized as one of India's leading manufacturers, marketers & exporters of Animal Health Products.
                        </p>
                        <p class="post_text">
                            The management is headed by a team, with long-term expertise in various fields in Indian businesses. Outstanding customer performance evaluations that approach and even achieve perfection are evidence of the success of Suba Nutrients  management team. Suba Nutrients provides vital strategic inputs in business strategy, and expansion as well.
                        </p>
                        <p class="post_text">
                            <b>Vision:</b> To be best-in-class Animal Health Organization on global platform  creating healthy world through sustainable animal heath care products & services
                        </p>

					</article>
				</div>
				<aside class="large-4 columns">

				<div class="widgets">
					<h3>Our Products</h3>

					<ul id="tags">
                        @foreach($products as $product)
						    <li><a href="{!! url('/product/'.$product->slug) !!}" class="button small">{{$product->name}}</a></li>
                        @endforeach
					</ul>
					<div class="clearfix"></div>

				</div>
				{{--<div class="widgets">--}}
					{{--<h3>Services</h3>--}}
					{{--<ul id="example1" class="accordion">--}}
						{{--<li>--}}
							{{--<div class="handle"><span><i></i></span><a href="#">Teeth whitening</a></div>--}}
							{{--<div class="panel loading">--}}
								{{--<p>Tartar: A common term for dental calculus, a hard deposit that adheres to teeth and produces a rough surface that attracts plaque.</p>--}}
							{{--</div>--}}
						{{--</li>--}}
						{{--<li>--}}
							{{--<div class="handle"><span><i></i></span>Crown dental bridges</div>--}}
							{{--<ul class="panel loading">--}}
								{{--<li>How about&hellip;</li>--}}
								{{--<li>&hellip; a list &hellip;</li>--}}
								{{--<li>&hellip; of items?</li>--}}
							{{--</ul>--}}
						{{--</li>--}}
						{{--<li>--}}
							{{--<div class="handle"><span><i></i></span>Rehabilitation center</div>--}}
							{{--<p class="panel loading">--}}
								{{--An image in a paragraph.--}}
							{{--</p>--}}
						{{--</li>--}}
					{{--</ul>--}}
				{{--</div>--}}

				{{--<div class="widgets">--}}
					{{--<h3>Text widget</h3>--}}
					{{--<div class="panel">--}}
						{{--<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis--}}
						{{--bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a</p>--}}
					{{--</div>--}}
				{{--</div>--}}
			</aside>
			</div>
            <div class="row">
                <div class="large-12 columns">
                    <div class="post_img">
                        <img class="post_image" src="{!! url('images/demo/slider/strip.jpg') !!}" alt="post title">
                        {{--<ul class="meta">--}}
                        {{--<li><i class="fa fa-calendar"></i><span id="date"></span></li>--}}
                        {{--</ul>--}}
                    </div>
                </div>
            </div>
		</div>
	</div>
@endsection
@section('footer')
    <script type="text/javascript">
        $(document).ready(function() {
            var date = new Date().toLocaleString();
            $('#date').innerHTML = date;
            console.log(date);
        });
    </script>
@endsection