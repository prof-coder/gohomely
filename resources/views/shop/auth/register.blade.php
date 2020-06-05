@extends('admin.layouts.auth')

@section('styles')
<style type="text/css">
  .radio input {
    margin-left: 10px;
    margin-right: 5px;
  }
  .radio * {
    display: inline-block;
    vertical-align: middle;
  }
</style>
@endsection
@section('content')
<div class="login bg-img" style="background-image: url({{asset('assets/img/login-bg.jpg')}});">
  <div class="login-overlay"></div>
    <div class="login-content">
      <div class="login-content-inner">
        @include('include.alerts')
        <div class="panel-heading">
          <h3 class="text-center">Register as <strong class="text-custom">{{ Setting::get('site_title', 'Sentikart') }} Chef</strong> </h3>
        </div>

        <div class="wizard">
          <div class="wizard-inner">
            <ul class="nav nav-tabs row" role="tablist">
              <li role="presentation" class="active col-sm-6">
                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Profile">
                  <p><span class="fa fa-user"></span></p>
                  Profile
                </a>
              </li>

              <li role="presentation" class="disabled col-sm-6">
                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Location">
                  <p><span class="fa fa-map-marker"></span></p>
                  Location
                </a>
              </li>
            </ul>
          </div>


          <form class="form-horizontal" role="form" method="POST" action="{{ url('shopreg') }}">
            {{ csrf_field() }}
            <input type="hidden" id="latitude" name="latitude" value="{{ old('latitude') }}" readonly required>
            <input type="hidden" id="longitude" name="longitude" value="{{ old('longitude') }}" readonly required>

            <div class="tab-content">
              <div class="tab-pane active fade in" role="tabpanel" id="step1">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                      <label for="name">Full Name</label>

                      <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                      @if ($errors->has('name'))
                      <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                      </span>
                      @endif
                    </div>
                  </div>

                  <div class="col-xs-12">
                    <div class="form-group">
                      <div class="radio">
                        <label><input type="radio" value="male" name="sex" checked><span>Male</span></label>
                        <label><input type="radio" value="female" name="sex"><span>Female</span></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} p-r-5">
                      <label for="email">@lang('form.email')</label>

                      <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                      @if ($errors->has('email'))
                      <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                      </span>
                      @endif
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                      <label for="phone">@lang('form.phone')</label>

                      <input id="phone" type="text" minlength="10" maxlength="10" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>

                      @if ($errors->has('phone'))
                      <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                      </span>
                      @endif
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} p-r-5">
                      <label for="password">@lang('form.password')</label>

                      <input id="password" type="password" class="form-control" name="password" required>

                      @if ($errors->has('password'))
                        <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="password-confirm">@lang('form.confirm_password')</label>

                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                  </div>

                  <div class="col-xs-12">
                    <div class="form-group">
                      <label for="cuisine">Cuisine</label>
                      <select name="cuisine" id="cuisine" required="" class="form-control required">
                        <option>Select Your Cuisine</option>
                        <option value="Kashmir">Kashmir</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="Uttar Pradesh"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Uttar Pradesh</font></font></option>
                        <option value="Madhya Pradesh"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Madhya Pradesh</font></font></option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Goa">Goa</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Andhra Pradesh and Telangana">Andhra Pradesh and Telangana</option>
                        <option value="Zanzibari">Zanzibari</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Arunanchal Pradesh"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Arunanchal Pradesh</font></font></option>
                        <option value="Assam">Assam</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="West Bengal">West Bengal</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Others">Others-Please Contact us</option>

                      </select>
                    </div>
                  </div>

                  <div class="col-xs-12">
                    <div class="form-group">
                      <label for="availability">Availability</label>
                      <select name="availability" id="availability" required class="form-control required">                                
                        <option>Please select Availability</option>
                        <option value="Week Days">Week Days</option>
                        <option value="Weekends ( Saturday and Sunday )">Weekends ( Saturday and Sunday )</option>
                        <option value="All Days">All Days</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-xs-12">
                    <div class="form-group text-right">
                      <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Location" class="btn btn-primary">Next</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" role="tabpanel" id="step2">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group{{ $errors->has('maps_address') ? ' has-error' : '' }}">
                      <label for="maps_address">@lang('form.location')</label>
                      <input tabindex="2" id="pac-input" class="form-control controls" type="text" placeholder="Start typing your apartment name, street name, locality.." name="maps_address" value="{{ old('maps_address') }}">
                    </div>
                  </div>

                  <div class="col-xs-12">
                    <div class="form-group form-group-default required m-t-5">
                      <label>@lang('form.address')</label>
                      <textarea class="form-control" placeholder="Enter full Address" id="address" name="address" required>{{ old('address') }}</textarea>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="form-group{{ $errors->has('pin_code') ? ' has-error' : '' }}">
                      <label for="pin_code">PIN CODE :</label>
                      <input tabindex="2" maxlength="6" minlength="6" id="pac-input" class="form-control controls" type="text" placeholder="Type pin code" name="pin_code" value="{{ old('pin_code') }}">
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="form-group{{ $errors->has('about_chef') ? ' has-error' : '' }}">
                      <label for="about_chef">About You</label>
                      <textarea class="form-control" placeholder="Describe about you in brief" id="about_chef" name="about_chef" rows="3" required>{{ old('about_chef') }}</textarea>
                    </div>
                  </div>

                  <div class="col-xs-12">
                    <div class="form-group">
                      <div id="map" style="height: 200px;"></div>
                    </div>
                  </div>

                  <div class="col-xs-12">
                    <div class="form-group">
                      <div id="recaptcha5" class="g-recaptcha"></div>
                    </div>
                  </div>

                  <div class="col-xs-12">
                    <div class="form-group col-xs-12 custom-checkbox-group">
                      <input type="checkbox" class="form-check-input" name="term" value="" required id="term">
                      <label for="term">By Signing up, I agree to goHomely's <a href="#">Terms & Conditions</a>, <a href="#">Privacy Policy</a></label>
                    </div>
                  </div>

                  <div class="col-xs-12 js-capture-enabled" style="display: none">
                    <div class="form-group text-right">
                      <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Profile" class="btn btn-pink prev-step">Previous</a>
                      <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/clockpicker/dist/bootstrap-clockpicker.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/dropify/dist/css/dropify.min.css') }}" />
<!-- <link rel="stylesheet" href="{{ asset('assets/admin/css/wizard.css')}}" /> -->
@endsection

@section('scripts')
<script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit" async defer></script>
<!-- <script type="text/javascript" src="{{ asset('assets/admin/js/wizard.js')}}"></script> -->
<script type="text/javascript" src="{{ asset('assets/admin/plugins/clockpicker/dist/bootstrap-clockpicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/plugins/dropify/dist/js/dropify.min.js') }}"></script>
<script type="text/javascript">
  function disableEnterKey(e)
  {
    var key;
    if(window.e)
      key = window.e.keyCode; // IE
    else
      key = e.which; // Firefox

    if(key == 13)
      return e.preventDefault();
  }
  $('.clockpicker').clockpicker({
    donetext: "Done"
  });
  $('.dropify').dropify();
</script>
<script>
  var map;
  var input = document.getElementById('pac-input');
  var latitude = document.getElementById('latitude');
  var longitude = document.getElementById('longitude');
  var address = document.getElementById('address');

  function initMap() {

    var userLocation = new google.maps.LatLng(
        13.0796758,
        80.2696968
      );

    map = new google.maps.Map(document.getElementById('map'), {
      center: userLocation,
      zoom: 15
    });

    var service = new google.maps.places.PlacesService(map);
    var autocomplete = new google.maps.places.Autocomplete(input);
    var infowindow = new google.maps.InfoWindow();

    autocomplete.bindTo('bounds', map);

    var infowindow = new google.maps.InfoWindow({
      content: "Shop Location",
    });

    var marker = new google.maps.Marker({
      map: map,
      draggable: true,
      anchorPoint: new google.maps.Point(0, -29)
    });

    marker.setVisible(true);
    marker.setPosition(userLocation);
    infowindow.open(map, marker);

    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(location) {
        var userLocation = new google.maps.LatLng(
          location.coords.latitude,
          location.coords.longitude
        );
        marker.setPosition(userLocation);
        map.setCenter(userLocation);
        map.setZoom(13);
      });
    }

    google.maps.event.addListener(map, 'click', updateMarker);
    google.maps.event.addListener(marker, 'dragend', updateMarker);

    function updateMarker(event) {
      var geocoder = new google.maps.Geocoder();
      geocoder.geocode({'latLng': event.latLng}, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          if (results[0]) {
            input.value = results[0].formatted_address;
            updateForm(event.latLng.lat(), event.latLng.lng(), results[0].formatted_address);
          } else {
            alert('No Address Found');
          }
        } else {
          alert('Geocoder failed due to: ' + status);
        }
      });

      marker.setPosition(event.latLng);
      map.setCenter(event.latLng);
    }

    autocomplete.addListener('place_changed', function(event) {
      marker.setVisible(false);
      var place = autocomplete.getPlace();

      if (place.hasOwnProperty('place_id')) {
        if (!place.geometry) {
          window.alert("Autocomplete's returned place contains no geometry");
          return;
        }
        updateLocation(place.geometry.location);
      } else {
        service.textSearch({
          query: place.name
        }, function(results, status) {
          if (status == google.maps.places.PlacesServiceStatus.OK) {
            updateLocation(results[0].geometry.location, results[0].formatted_address);
            input.value = results[0].formatted_address;
          }
        });
      }
    });

    function updateLocation(location) {
      map.setCenter(location);
      marker.setPosition(location);
      marker.setVisible(true);
      infowindow.open(map, marker);
      updateForm(location.lat(), location.lng(), input.value);
    }

    function updateForm(lat, lng, addr) {
      console.log(lat,lng, addr);
      latitude.value = lat;
      longitude.value = lng;
      address.value = addr;
    }
  }
</script>
<script type="text/javascript">
  var myCallBack = function () {
    var recaptcha5 = grecaptcha.render('recaptcha5', { 
      'sitekey': '6Ld4CQAVAAAAAKQdGuaDeug16TifszIEBjPHhO-v', 
      'theme': 'light',
      'callback' : verifyCallback,
    });
  }
  var verifyCallback = function() {
    $('.js-capture-enabled').show();
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key={{Setting::get('GOOGLE_MAP_KEY')}}&libraries=places&callback=initMap" async defer></script>
@endsection