@extends('layouts.index')

@section('category')
	class='active'
@endsection

@section('content')


<div class="main-content-top">	
	<div class="main-wrapper">	
		<div class="row">
			<div class="large-6 columns">
				<h2>{{$prod->name}} (for {{$prod->category->name}})</h2>
			</div>        
			<div class="large-6 columns">
				<ul class="breadcrumbs right">
					<li>You are here: </li>
					<li><a href="{!! url('/') !!}">Home</a></li>
					<li><a href="{!! url('/products') !!}">Products</a></li>
					<li><span>{{$prod->name}}</span></li>
				</ul>
			</div>
		</div>
	</div>		
</div>
<!-- End Main Content Top -->
<div class="main-wrapper">
	<div class="content_wrapper">
		<div class="row">
			<div class="large-4 columns">
				<div class="widgets">
					<div class="panel">
						<h3>{{$prod->name}}</h3>
						
						<h4>Composition:</h4>
						{!! $prod->composition !!}
					</div>
				</div>
			</div>
			<aside class="large-8 columns right">
				<div class="widgets">

					<h3>KEY BENEFITS</h3>
					<p>{!! $prod->benefits !!}</p>

					<h3>USAGE</h3>
					<p>{!! $prod->usage !!}</p>

					<h3>Presentation</h3>
					<p>{{$prod->presentation}}</p>


				</div>
			</aside>
		</div>

		<div class="row">
			<div class="large-12 columns">	
				<div class="title-block">					
					<h3>Related products</h3>
					<div class="clearfix"></div>						
				</div>	
				<div class="divider"><span></span></div> 
				<div class="work_slide">
					<ul id="work_slide" class="related-projects">
						@each('partials.productview', $products, 'product')
					</ul>
			
					<div class="clearfix"></div>
					<a class="prev" id="slide_prev" href="#"><img src="{!! url('images/arrow_left.png') !!}" alt="Previous" /></a>
					<a class="next" id="slide_next" href="#"><img src="{!! url('images/arrow_right.png') !!}" alt="Next" /></a>
				</div>
			</div>
		</div>
	</div>           
</div>   
@endsection
@section('footer')

<!-- carouFredSel plugin -->
<script src="{!! url('plugins/carouFredSel/jquery.carouFredSel-6.2.0-packed.js') !!}"></script>
<script src="{!! url('plugins/carouFredSel/helper-plugins/jquery.touchSwipe.min.js') !!}"></script>
<!-- Related projects -->
<script type="text/javascript">
	jQuery(document).ready(function(){
		$(".related-projects").carouFredSel({
			circular: false,
			infinite: true,
			auto: false,
			scroll:{items:1},
			prev: {	button: "#slide_prev", key: "left"},
			next: { button: "#slide_next",key: "right"}
		});
	});
</script>

@endsection