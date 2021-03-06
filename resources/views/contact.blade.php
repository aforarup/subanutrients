@extends('layouts.index')

@section('contact')
	class='active'
@endsection
@section('body-on-load')
    onload="initialize()"
@endsection


@section('content')
	<div id="map_canvas"></div>
    <div class="main-wrapper">       
	<div class="content_wrapper">
		<div class="row">
			<div class="large-3 columns">
				<h3 class="contact_title">Contact info</h3>
				<div class="divider"><span></span></div>
				<div class="contact_info">
					<ul class="about-info garnik">
						<li><i class="fa fa-envelope"></i>&nbsp;<a href="mailto:info@subanutrients.com">info@subanutrients.com</a></li>
					</ul>
				</div>
			</div>
            			<div class="large-3 columns">
				
				<h3 class="contact_title">Where to find us</h3>
                <div class="divider"><span></span></div>
				<p>We operate globally from 3 locations - Atlanta (United States of America), Ajman (United Arab Emirates) and Mumbai (India).</p>
			</div>

			<div class="large-6 columns">
				<h3 class="contact_title">Send us a message</h3>
                <div class="divider"><span></span></div>
					<div id="status"></div>
					<div class="contact_form">
						<div class="row">
							<form method="POST" class="contactForm">
								<div class="small-4 columns">
									<input type="text" placeholder="Name*" id="contactname" name="Name" required/>
								</div>
								<div class="small-4 columns">
									<input type="text" placeholder="E-mail*" id="contactemail" name="Email" required/>
								</div>
								<div class="small-4 columns">
									<input type="text" placeholder="Contact" id="contactwebsite" name="Contact_No"
										   maxlength="20"/>
								</div>
								<div class="small-4 columns">
									<input type="text" placeholder="City" id="contactwebsite" name="City"
										   maxlength="30"/>
								</div>
								<div class="small-8 columns radio-toolbar">
									<input type="radio" id="radio1" name="option" value="business" checked>
									<label for="radio1">General</label>

									<input type="radio" id="radio2" name="option" value="technical">
									<label for="radio2">Technical</label>

									<input type="radio" id="radio3" name="option" value="general">
									<label for="radio3">Business</label>
								</div>
								<div class="small-12 columns">
									<input type="text" placeholder="Subject" id="contactwebsite" name="Subject"
										   maxlength="100"/>
								</div>
								<div class="small-12 columns">
									<textarea cols="10" rows="15" placeholder="Message" id="contactmessage" name="message"></textarea>
								</div>

								<div class="small-4 columns">
									<input type="submit" class="button right" value="Send message" name="send" id="send" />
								</div> 
							</form>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
@endsection
@section('footer')


<script src="{!! url('js/jquery.validate.min.js') !!}"></script>

<!-- for Google Map-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTSJ4nigiCUcS_KdUEvTfegUWC2EPbP_Q&amp;sensor=false"></script>
<script type="text/javascript">
function initialize() {
    var mapOptions = {
        center: new google.maps.LatLng(23 , 0),
        zoom: 3,
        draggable: false,
        disableDefaultUI: true,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        gestureHandling: 'none',

        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#193341"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#2c5a71"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#29768a"},{"lightness":-37}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#406d80"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#406d80"}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#3e606f"},{"weight":2},{"gamma":0.84}]},{"elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"weight":0.6},{"color":"#1a3541"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#2c5a71"}]}]

    };
    var map = new google.maps.Map(document.getElementById("map_canvas"),
        mapOptions);
    var myLatlng = new google.maps.LatLng(33.7550, -84.3900);
    var marker1 = new google.maps.Marker({
        map:map,
        draggable:false,
//        animation: google.maps.Animation.DROP,
        position: myLatlng,
        icon: "http://i.imgur.com/OJOqX8l.png",
        title: "Atlanta, USA"
    });

    var marker2 = new google.maps.Marker({
        map:map,
        draggable:false,
//        animation: google.maps.Animation.DROP,
        position: new google.maps.LatLng(25.4167, 55.5000),
        icon: "http://i.imgur.com/OJOqX8l.png",
        title: "Ajman, UAE"
    });

    var marker3 = new google.maps.Marker({
        map:map,
        draggable:false,
//        animation: google.maps.Animation.DROP,
        position: new google.maps.LatLng(18.9750, 72.8258),
        icon: "http://i.imgur.com/OJOqX8l.png",
        title: "Mumbai, India"
    });

// To add the marker to the map, call setMap();
    marker1.setMap(map);
    marker2.setMap(map);
    marker3.setMap(map);
}
</script>
@endsection
