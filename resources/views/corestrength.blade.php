@extends('layouts.index')

@section('strength')
	class='active'
@endsection

@section('content')
	<div class="main-content-top">
		<div class="main-wrapper">
			<div class="row">
				<div class="large-6 columns">
					<h2>Core Strength</h2>
				</div>
				<div class="large-6 columns">
					<ul class="breadcrumbs right">
						<li>You are here: </li>
						<li><a href="{!! url('/') !!}">Home</a></li>
						<li><span>Core Strength</span></li>
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
						<h3>CORE STRENGTH</h3>
						<div class="post_img">
							<img class="post_image" src="{!! url('images/demo/slider/bnr-our-.jpg') !!}" alt="We are Suba">

						</div>

						<p class="post_text">
							Suba Nutrients specialized in development, manufacturing and providing solution in animal nutrition. Our R & D and cutting edge technology are to serve more effectively & efficiently. We offer service and provide solution wherever you seek expertise to customize your business.
						</p>
                        <p class="post_text">
							Our business backbone  is research & development and continuous investment is key strategy  to keep pace with global competition.
						</p>
                        <p class="post_text">
							Our R & D is quite resourceful to handle  preclinical & clinical studies with our future  and existing  product portfolio.
							Suba Nutrients’ compliance and stringent global quality standards have resulted in us having established ourselves as a reliable and credible supplier of veterinary products and our state of the art facilities have set global benchmarks in the Animal Health Industry.
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