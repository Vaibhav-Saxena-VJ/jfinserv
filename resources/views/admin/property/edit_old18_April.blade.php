@extends('layouts.admin-app')
@section('content')
<style type="text/css">
   .img-wrap {
  position: relative;
  display: inline-block;
  border: 1px #ddd1d1 solid;
  font-size: 0;
}
.img-wrap .close {
  position: absolute;
  top: 2px;
  right: 2px;
  z-index: 100;
  background-color: #FFF;
  padding: 5px 2px 2px;
  color: #000;
  font-weight: bold;
  cursor: pointer;
  opacity: .2;
  text-align: center;
  font-size: 22px;
  line-height: 10px;
  border-radius: 50%;
}
.img-wrap:hover .close {
  opacity: 1;
}
</style>
<div class="content-wrapper">

  <div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
      <div class="row breadcrumbs-top">
        <div class="col-12">
          <h2 class="content-header-title float-left mb-0">Property</h2>
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">

              <li class="breadcrumb-item">
                <a href="#"> Home </a>
              </li>
              <li class="breadcrumb-item">
                <a href="#"> Property </a>
              </li>
              <li class="breadcrumb-item">
              Edit                                </li>
            </ol> 
          </div>
        </div>
      </div>
    </div>

  </div>                    
  <div class="content-body">

    <!-- Simple Validation start -->
    <section class="simple-validation">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Property</h4>
            </div>
            <div class="card-content">
              <div class="card-body">
                <p class="mt-1">Edit <code>Property</code></p>



          <!-- Multiple Rule Validation end -->
          <form class="form-horizontal" role="form" method="POST" action="{{config('app.baseURL')}}/admin/property/{{$property->property_id}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">                        
            <div class="contact-form">
                            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-6  {{ $errors->has('property_type') ? ' has-error' : '' }}">
                  <div class="form-group">
                    <div class="controls">
                      <div class="selected-box form-group{{ $errors->has('property_type') ? ' has-error' : '' }} ">
                        <select id="property_type" class="form-control" id="basicSelect" name="property_type" required="" data-validation-required-message="This field is required">
                          <option value="{{$property->property_type}}" selected="">@if($property->property_type==1)
                            New Flat
                            @elseif($property->property_type==2)
                            Resale Flat
                            @elseif($property->property_type==3)
                            Lands
                            @else
                            Commercial
                            @endif</option>
                          <option value="1">New Flat</option>
                          <option value="2">Resale Flat</option>
                          <option value="3">Lands</option>
                          <option value="4">Commercial properties</option>
                        </select>                                        
                        @if ($errors->has('property_type'))
                        <span class="help-block">
                          <strong>{{ $errors->first('property_type') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('property_name') ? ' has-error' : '' }}">
                  <div class="form-group">
                    <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="property_name" value="{{$property->property_name}}{{ old('property_name') }}" placeholder="Property Title">
                      @if ($errors->has('property_name'))
                      <span class="help-block">
                        <strong>{{ $errors->first('property_name') }}</strong>
                      </span>
                    @endif</div>
                  </div>
                </div>

                 <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('builder_name') ? ' has-error' : '' }}">
                  <div class="form-group">
                    <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="builder_name" value="{{$property->builder_name}}" placeholder="Builder Name">
                      @if ($errors->has('builder_name'))
                      <span class="help-block">
                        <strong>{{ $errors->first('builder_name') }}</strong>
                      </span>
                    @endif</div>
                  </div>
                </div>

                 <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('property_size') ? ' has-error' : '' }}">
                  <div class="form-group">
                    <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="property_size" value="{{$property->property_size}}" placeholder="1, 2, 2.5 BHK">
                      @if ($errors->has('property_size'))
                      <span class="help-block">
                        <strong>{{ $errors->first('property_size') }}</strong>
                      </span>
                    @endif</div>
                  </div>
                </div>
                <!-- <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                  <img class="image-size"  src="{{config('app.baseURL')}}/storage/app/{{$property->property_image}}" id="property_image" alt="" style="height: 100px;">
                </div> --><!-- form-group -->
                <!-- <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('property_image') ? ' has-error' : '' }}">
                  <div class="form-group">
                    <div class="controls">
                      
                      <input type="file" class="form-control" required="" data-validation-required-message="This field is required" name="property_image" accept="image/*" onchange="document.getElementById('property_image').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;">
                      @if ($errors->has('image'))
                      <span class="help-block">
                        <strong>{{ $errors->first('image') }}</strong>
                      </span>
                    @endif</div>
                  </div>
                </div> -->

                <div class="mb-1 ml-1 custom-div form-group">
                    @foreach($property->propertyimages as $property_images)
                    <div class="img-wrap">
                    <a href="{{config('app.baseURL')}}/admin/property/remove_propertyimage/{{$property_images->property_image_id}}"><span class="close">&times;</span></a>
                    <img class="image-size" src="{{config('app.baseURL')}}/storage/app/{{$property_images->property_image}}" alt="" style="height: 100px;">&nbsp;

                    </div>
                    <input type="hidden" name="property_image_id" value="{{$property_images->property_image_id}}">
                    @endforeach
                  </div><!-- form-group -->
                  <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('property_image') ? ' has-error' : '' }}">
                    <div class="form-group">
                      <div class="controls">
                   
                       <input multiple="" type="file" class="form-control" data-validation-required-message="This field is required" name="property_image[]" accept="image/*" onchange="document.getElementById('property_image[]').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;">
                       @if ($errors->has('property_image'))
                       <span class="help-block">
                        <strong>{{ $errors->first('property_image') }}</strong>
                      </span>
                    @endif</div>
                  </div>
                </div>

                <!-- full Editor start -->
                <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('property_description') ? ' has-error' : '' }}">
                  <div class="form-group">
                    <div class="controls">
                      <textarea name="property_description" class="form-control summernote-editor" rows="5" value="{{$property->property_description}}" placeholder="Enter Property description">{{$property->property_description}}{{old('property_description')}}</textarea>
                      @if ($errors->has('property_description'))
                      <span class="help-block">
                        <strong>{{ $errors->first('property_description') }}</strong>
                      </span>
                      @endif
                    </div>
                  </div>
                </div>

                 <div class="col-lg-12 col-md-12 col-sm-6  {{ $errors->has('city') ? ' has-error' : '' }}">
                  <div class="form-group">
                    <div class="controls">
                      <div class="selected-box form-group{{ $errors->has('city') ? ' has-error' : '' }} ">
                        <select id="city" class="form-control" id="basicSelect" name="city" required="" data-validation-required-message="This field is required">
                          <option value="{{$property->city}}" selected="">{{$property->city}}</option>
                          <option value="Ahmednagar">Ahmednagar</option><option value="Akola">Akola</option><option value="Amravati">Amravati</option><option value="Aurangabad">Aurangabad</option><option value="Beed">Beed</option><option value="Bhandara">Bhandara</option><option value="Buldhana">Buldhana</option><option value="Chandrapur">Chandrapur</option><option value="Dhule">Dhule</option><option value="Gadchiroli">Gadchiroli</option><option value="Gondia">Gondia</option><option value="Hingoli">Hingoli</option><option value="Jalgaon">Jalgaon</option><option value="Jalna">Jalna</option><option value="Kolhapur">Kolhapur</option><option value="Latur">Latur</option><option value="Mumbai City">Mumbai City</option><option value="Mumbai Suburban">Mumbai Suburban</option><option value="Nagpur">Nagpur</option><option value="Nanded">Nanded</option><option value="Nandurbar">Nandurbar</option><option value="Nashik">Nashik</option><option value="Osmanabad">Osmanabad</option><option value="Palghar">Palghar</option><option value="Parbhani">Parbhani</option><option value="Pune">Pune</option><option value="Raigad">Raigad</option><option value="Ratnagiri">Ratnagiri</option><option value="Sangli">Sangli</option><option value="Satara">Satara</option><option value="Sindhudurg">Sindhudurg</option><option value="Solapur">Solapur</option><option value="Thane">Thane</option><option value="Wardha">Wardha</option><option value="Washim">Washim</option><option value="Yavatmal">Yavatmal</option>
                        </select>                                        
                        @if ($errors->has('property_type'))
                        <span class="help-block">
                          <strong>{{ $errors->first('property_type') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('location') ? ' has-error' : '' }}">
                  <div class="form-group">
                    <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="location" value="{{$property->location}}{{ old('location') }}" placeholder="location">
                      @if ($errors->has('location'))
                      <span class="help-block">
                        <strong>{{ $errors->first('location') }}</strong>
                      </span>
                    @endif</div>
                  </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('address') ? ' has-error' : '' }}">
                  <div class="form-group">
                    <div class="controls">
                      <textarea name="address" class="form-control summernote-editor" rows="5" value="{{$property->address}}" placeholder="Enter Property Address">{{$property->address}}</textarea>
                      @if ($errors->has('address'))
                      <span class="help-block">
                        <strong>{{ $errors->first('address') }}</strong>
                      </span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('localities') ? ' has-error' : '' }}">
                  <div class="form-group">
                    <div class="controls">
                      <textarea name="localities" class="form-control summernote-editor" rows="5" value="{{$property->localities}}" placeholder="Enter Property localities">{{$property->localities}}</textarea>
                      @if ($errors->has('localities'))
                      <span class="help-block">
                        <strong>{{ $errors->first('localities') }}</strong>
                      </span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('facilities') ? ' has-error' : '' }}">
                  <div class="form-group">
                    <div class="controls">
                      <textarea name="facilities" class="form-control summernote-editor" rows="5" value="{{$property->facilities}}" placeholder="Enter Property facilities">{{$property->facilities}}</textarea>
                      @if ($errors->has('facilities'))
                      <span class="help-block">
                        <strong>{{ $errors->first('facilities') }}</strong>
                      </span>
                      @endif
                    </div>
                  </div>
                </div>

                 <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('property_price') ? ' has-error' : '' }}">
                  <div class="form-group">
                    <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="number" name="from_property_price" value="{{$property->from_property_price}}{{ old('property_price') }}" placeholder="From Price">
                      @if ($errors->has('from_property_price'))
                      <span class="help-block">
                        <strong>{{ $errors->first('from_property_price') }}</strong>
                      </span>
                    @endif</div>
                  </div>
                </div>

                 <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('property_price') ? ' has-error' : '' }}">
                  <div class="form-group">
                    <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="number" name="to_property_price" value="{{$property->to_property_price}}{{ old('property_price') }}" placeholder="To Price">
                      @if ($errors->has('to_property_price'))
                      <span class="help-block">
                        <strong>{{ $errors->first('to_property_price') }}</strong>
                      </span>
                    @endif</div>
                  </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('contact_number') ? ' has-error' : '' }}">
                  <div class="form-group">
                    <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="contact_number" value="{{$property->contact_number}}{{ old('contact_number') }}" placeholder="Contact Number" maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" onkeypress="return isNumberKey(event)">
                      @if ($errors->has('contact_number'))
                      <span class="help-block">
                        <strong>{{ $errors->first('contact_number') }}</strong>
                      </span>
                    @endif</div>
                  </div>
                </div>

                 <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('email') ? ' has-error' : '' }}">
                  <div class="form-group">
                    <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="email" name="email" value="{{$property->email}}{{ old('email') }}" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please Provide Valid Email Address">
                      @if ($errors->has('email'))
                      <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                      </span>
                    @endif</div>
                  </div>
                </div>

                @if($property->getamenities!='[]')
                <div class="editamenity col-lg-12 col-md-12 col-sm-6 {{ $errors->has('amenities_name') ? ' has-error' : '' }}">
                  <div class="form-group">
                    <div class="controls">
                       @php
                            $count=0;
                          @endphp
                          @foreach($property->getamenities as $amenities)
                          @php
                            $count++;
                          @endphp
                      <div class="row amenity">

                        <div class="col-lg-4 mt-1">
                          
                        <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="amenities_name[]" value="{{$amenities->amenities_name}}" placeholder="Amenities">
                        <input type="hidden" name="amenities_id" value="{{$amenities->amenities_id}}">
                        @if ($errors->has('amenities_name'))
                        <span class="help-block">
                          <strong>{{ $errors->first('amenities_name') }}</strong>
                        </span>
                        @endif
                       
                      </div>
                      @if($count==1)
                      <div class="col-lg-1 mt-1">
                        <a class="addamenity" id="addamenity"><i class="fa fa-plus" style="font-size:24px;margin-top: 10px;"></i></a>
                      </div>
                      @else
                      <div class="col-lg-1 mt-1">
                        <a href="{{config('app.baseURL')}}/admin/property/remove_amenity/{{$amenities->amenities_id}}" class="deleteamenity" id="deleteamenity" style="color: #484750;"><i class="fa fa-remove" style="font-size:24px;margin-top: 10px;"></i></a>
                      </div>
                      @endif
                     
                      
                    </div>
                      @endforeach
                    <div class="amenities col-lg-5" id="amenities">
                      </div>
                      
                  </div>
              
                  </div>
                </div>
                @else
                <div class="editamenity col-lg-12 col-md-12 col-sm-6 {{ $errors->has('amenities_name') ? ' has-error' : '' }}">
                  <div class="form-group">
                    <div class="controls">
                      <div class="row amenity">

                        <div class="col-lg-4 mt-1">
                          
                        <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="amenities_name[]" value="" placeholder="Amenities">
                        @if ($errors->has('amenities_name'))
                        <span class="help-block">
                          <strong>{{ $errors->first('amenities_name') }}</strong>
                        </span>
                        @endif
                       
                      </div>
                      <div class="col-lg-1 mt-1">
                        <a class="addamenity" id="addamenity"><i class="fa fa-plus" style="font-size:24px;margin-top: 10px;"></i></a>
                      </div>
                    </div>
                   
                    <div class="amenities col-lg-5" id="amenities">
                      </div>
                      
                  </div>
              
                  </div>
                </div>
                @endif

              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-submit mt-10 mb-30 text-center">

                   <button type="submit" class="btn btn-primary">Edit Property</button>
                 </div>
               </div>
             </div>
           </div> 
         </form>
       </div>
     </div>
   </div>
 </div>
</div>
</section>
</div>
</div>
<script type="text/javascript">

  $(document).ready(function(){


    var options = $.extend(true, {lang: '' , codemirror: {theme: 'monokai', mode: 'text/html', htmlMode: true, lineWrapping: true} } , {
      "toolbar": [
      ["style", ["style"]],
      ["font", ["bold", "underline", "italic", "clear"]],
      ["color", ["color"]],
      ["para", ["ul", "ol", "paragraph"]],
      ["insert", ["link","picture"]],
      ["view", ["fullscreen", "codeview", "help"]],
      ['fontname', ['fontname']
      ],
      ['fontNames', [ 'Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Sacramento']],
      ['fontNamesIgnoreCheck', [ 'Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Sacramento']],
      ],
      cleaner:{
        action: 'both',
        newline: '<br>', 
        notStyle: 'position:absolute;top:0;left:0;right:0',
        icon: '<i class="note-icon">[Your Button]</i>',
        keepHtml: false, 
        keepOnlyTags: ['<p>', '<br>', '<ul>', '<li>', '<b>', '<strong>','<i>', '<a>'],
        keepClasses: false, 
        badTags: ['style', 'script', 'applet', 'embed', 'noframes', 'noscript', 'html'], 
        badAttributes: ['style', 'start'],
        limitChars: false,
        limitDisplay: 'both', 
        limitStop: false
      }
    });
    $("textarea.summernote-editor").summernote(options);

  });
</script>
<script>

  $(document).ready(function() {
    
    
  $("#property_type option[value='{{$property->property_type}}']").prop('selected',true);

  @if(Session::has('message'))
  var type = "{{ Session::get('alert-type', 'info') }}";
  switch(type){
    case 'info':
    toastr.info("{{ Session::get('message') }}");
    break;

    case 'warning':
    toastr.warning("{{ Session::get('message') }}");
    break;
    case 'success':
    toastr.success("{{ Session::get('message') }}");
    break;
    case 'error':
    toastr.error("{{ Session::get('message') }}");
    break;
  }
  @endif

</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript">

 $(document).ready(function(){
    var field = '<div class="mt-1 col-lg-12 col-md-12 col-sm-6" id="divremove"><div class="row"><div class="col-lg-11"><input class="form-control" type="text" name="amenities_name[]" id="amenities_name" placeholder="Amenities" style="margin-left: -29px; width: 284px;" required=""></div><div class="col-lg-1"><a class="remove" id="remove"><i class="fa fa-remove" style="font-size: 24px; margin-top: 9px; margin-left: -37px;"></i></a></div></div></div>';
    
    $('#addamenity').click(function(){
      $('#amenities').append(field); 
        
    });
        $('#amenities').on('click', '.remove', function(e){
        e.preventDefault();
        $('#divremove').remove();
        
      });

       
 });
</script>
<script type="text/javascript">
    function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
@endsection