<?php $__env->startSection('content'); ?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/lang/summernote-ko-KR.min.js"></script>
<!-- Jquery -->
<script type="text/javascript" src="<?php echo e(asset('assets\js\jquery.min.js')); ?>"></script>

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
.img-wrap1 {
  position: relative;
  display: inline-block;
  /*border: 1px #ddd1d1 solid;*/
  font-size: 0;
}
.img-wrap1 .close {
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
.img-wrap1:hover .close {
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
          <form class="form-horizontal" role="form" method="POST" action="<?php echo e(config('app.baseURL')); ?>/admin/property/<?php echo e($property->property_id); ?>" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">                        
            <div class="contact-form">
                            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-6  <?php echo e($errors->has('property_type') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                      <div class="selected-box form-group<?php echo e($errors->has('property_type') ? ' has-error' : ''); ?> ">
                        <select id="property_type" class="form-control" id="basicSelect" name="property_type" required="" data-validation-required-message="This field is required">
                          <option value="<?php echo e($property->property_type); ?>" selected=""><?php if($property->property_type==1): ?>
                            New Flat
                            <?php elseif($property->property_type==2): ?>
                            Resale Flat
                            <?php elseif($property->property_type==3): ?>
                            Lands
                            <?php else: ?>
                            Commercial
                            <?php endif; ?></option>
                          <option value="1">New Flat</option>
                          <option value="2">Resale Flat</option>
                          <option value="3">Lands</option>
                          <option value="4">Commercial properties</option>
                        </select>                                        
                        <?php if($errors->has('property_type')): ?>
                        <span class="help-block">
                          <strong><?php echo e($errors->first('property_type')); ?></strong>
                        </span>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('property_name') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="property_name" value="<?php echo e($property->property_name); ?><?php echo e(old('property_name')); ?>" placeholder="Property Title">
                      <?php if($errors->has('property_name')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('property_name')); ?></strong>
                      </span>
                    <?php endif; ?></div>
                  </div>
                </div>

                 <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('builder_name') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="builder_name" value="<?php echo e($property->builder_name); ?>" placeholder="Builder Name">
                      <?php if($errors->has('builder_name')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('builder_name')); ?></strong>
                      </span>
                    <?php endif; ?></div>
                  </div>
                </div>

                 <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('property_size') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="property_size" value="<?php echo e($property->property_size); ?>" placeholder="1, 2, 2.5 BHK">
                      <?php if($errors->has('property_size')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('property_size')); ?></strong>
                      </span>
                    <?php endif; ?></div>
                  </div>
                </div>
                <!-- <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                  <img class="image-size"  src="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($property->property_image); ?>" id="property_image" alt="" style="height: 100px;">
                </div> --><!-- form-group -->
                <!-- <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('property_image') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                      
                      <input type="file" class="form-control" required="" data-validation-required-message="This field is required" name="property_image" accept="image/*" onchange="document.getElementById('property_image').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;">
                      <?php if($errors->has('image')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('image')); ?></strong>
                      </span>
                    <?php endif; ?></div>
                  </div>
                </div> -->

                <div class="mb-1 ml-1 custom-div form-group">
                    <?php $__currentLoopData = $property->propertyimages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property_images): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="img-wrap">
                    <a href="<?php echo e(config('app.baseURL')); ?>/admin/property/remove_propertyimage/<?php echo e($property_images->property_image_id); ?>"><span class="close">&times;</span></a>
                    <img class="image-size" src="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($property_images->property_image); ?>" alt="" style="height: 100px;">&nbsp;

                    </div>
                    <input type="hidden" name="property_image_id" value="<?php echo e($property_images->property_image_id); ?>">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div><!-- form-group -->
                  <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('property_image') ? ' has-error' : ''); ?>">
                    <div class="form-group">
                      <div class="controls">
                   
                       <input multiple="" type="file" class="form-control" data-validation-required-message="This field is required" name="property_image[]" accept="image/*" onchange="document.getElementById('property_image[]').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;">
                       <?php if($errors->has('property_image')): ?>
                       <span class="help-block">
                        <strong><?php echo e($errors->first('property_image')); ?></strong>
                      </span>
                    <?php endif; ?></div>
                  </div>
                </div>
                
                <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('property_pdf') ? ' has-error' : ''); ?>">
                    <div class="form-group">
                    <div class="controls">

                     <label style="font-size: 1rem">Property Details PDF</label>
                     <input type="file" class="form-control"data-validation-required-message="This field is required" name="property_pdf" accept="application/pdf" onchange="document.getElementById('property_pdf').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;"  value="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($property->property_pdf); ?>">
                     <?php if($errors->has('property_pdf')): ?>
                     <span class="help-block">
                      <strong><?php echo e($errors->first('property_pdf')); ?></strong>
                    </span>
                    <?php endif; ?>
                    </div>
                    </div>
                  </div>

                <!-- full Editor start -->
                <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('property_description') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                        <label style="font-size: 1rem">Property Description</label>
                      <textarea name="property_description" class="form-control summernote-editor" rows="5" value="<?php echo e($property->property_description); ?>" placeholder="Enter Property description"><?php echo e($property->property_description); ?><?php echo e(old('property_description')); ?></textarea>
                      <?php if($errors->has('property_description')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('property_description')); ?></strong>
                      </span>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>

                 <div class="col-lg-12 col-md-12 col-sm-6  <?php echo e($errors->has('city') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                      <div class="selected-box form-group<?php echo e($errors->has('city') ? ' has-error' : ''); ?> ">
                        <select id="city" class="form-control" id="basicSelect" name="city" required="" data-validation-required-message="This field is required">
                          <option value="<?php echo e($property->city); ?>" selected=""><?php echo e($property->city); ?></option>
                          <option value="Ahmednagar">Ahmednagar</option><option value="Akola">Akola</option><option value="Amravati">Amravati</option><option value="Aurangabad">Aurangabad</option><option value="Beed">Beed</option><option value="Bhandara">Bhandara</option><option value="Buldhana">Buldhana</option><option value="Chandrapur">Chandrapur</option><option value="Dhule">Dhule</option><option value="Gadchiroli">Gadchiroli</option><option value="Gondia">Gondia</option><option value="Hingoli">Hingoli</option><option value="Jalgaon">Jalgaon</option><option value="Jalna">Jalna</option><option value="Kolhapur">Kolhapur</option><option value="Latur">Latur</option><option value="Mumbai City">Mumbai City</option><option value="Mumbai Suburban">Mumbai Suburban</option><option value="Nagpur">Nagpur</option><option value="Nanded">Nanded</option><option value="Nandurbar">Nandurbar</option><option value="Nashik">Nashik</option><option value="Osmanabad">Osmanabad</option><option value="Palghar">Palghar</option><option value="Parbhani">Parbhani</option><option value="Pune">Pune</option><option value="Raigad">Raigad</option><option value="Ratnagiri">Ratnagiri</option><option value="Sangli">Sangli</option><option value="Satara">Satara</option><option value="Sindhudurg">Sindhudurg</option><option value="Solapur">Solapur</option><option value="Thane">Thane</option><option value="Wardha">Wardha</option><option value="Washim">Washim</option><option value="Yavatmal">Yavatmal</option>
                        </select>                                        
                        <?php if($errors->has('property_type')): ?>
                        <span class="help-block">
                          <strong><?php echo e($errors->first('property_type')); ?></strong>
                        </span>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('location') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="location" value="<?php echo e($property->location); ?><?php echo e(old('location')); ?>" placeholder="location">
                      <?php if($errors->has('location')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('location')); ?></strong>
                      </span>
                    <?php endif; ?></div>
                  </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                        <label style="font-size: 1rem">Address</label>
                      <textarea name="address" class="form-control summernote-editor" rows="5" value="<?php echo e($property->address); ?>" placeholder="Enter Property Address"><?php echo e($property->address); ?></textarea>
                      <?php if($errors->has('address')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('address')); ?></strong>
                      </span>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('localities') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                        <label style="font-size: 1rem">Localities</label>
                      <textarea name="localities" class="form-control summernote-editor" rows="5" value="<?php echo e($property->localities); ?>" placeholder="Enter Property localities"><?php echo e($property->localities); ?></textarea>
                      <?php if($errors->has('localities')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('localities')); ?></strong>
                      </span>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('facilities') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                        <label style="font-size: 1rem">Facilities</label>
                      <textarea name="facilities" class="form-control summernote-editor" rows="5" value="<?php echo e($property->facilities); ?>" placeholder="Enter Property facilities"><?php echo e($property->facilities); ?></textarea>
                      <?php if($errors->has('facilities')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('facilities')); ?></strong>
                      </span>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>

                 <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('property_price') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="number" name="from_property_price" value="<?php echo e($property->from_property_price); ?><?php echo e(old('property_price')); ?>" placeholder="From Price">
                      <?php if($errors->has('from_property_price')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('from_property_price')); ?></strong>
                      </span>
                    <?php endif; ?></div>
                  </div>
                </div>

                 <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('property_price') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="number" name="to_property_price" value="<?php echo e($property->to_property_price); ?><?php echo e(old('property_price')); ?>" placeholder="To Price">
                      <?php if($errors->has('to_property_price')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('to_property_price')); ?></strong>
                      </span>
                    <?php endif; ?></div>
                  </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('contact_number') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="contact_number" value="<?php echo e($property->contact_number); ?><?php echo e(old('contact_number')); ?>" placeholder="Contact Number" maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" onkeypress="return isNumberKey(event)">
                      <?php if($errors->has('contact_number')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('contact_number')); ?></strong>
                      </span>
                    <?php endif; ?></div>
                  </div>
                </div>

                 <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="email" value="<?php echo e($property->email); ?><?php echo e(old('email')); ?>" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please Provide Valid Email Address">
                      <?php if($errors->has('email')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('email')); ?></strong>
                      </span>
                    <?php endif; ?></div>
                  </div>
                </div>

                <?php if($property->getamenities!='[]'): ?>
                <div class="editamenity col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('amenities_name') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls col-lg-12">
                       <div class="row amenity">
                       <?php
                            $count=0;
                          ?>
                          <?php $__currentLoopData = $property->getamenities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $amenities): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php
                            $count++;
                          ?>
                     
                         <div class="img-wrap1 mr-1">
                    <a href="<?php echo e(config('app.baseURL')); ?>/admin/property/remove_amenity/<?php echo e($amenities->amenities_id); ?>"><span class="close">&times;</span></a>
                    <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="amenities_name[]" value="<?php echo e($amenities->amenities_name); ?>" placeholder="Amenities" style="width: 284px">

                    </div>
                       <!--  <div class="col-lg-4 mt-1">
                          
                        <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="amenities_name[]" value="<?php echo e($amenities->amenities_name); ?>" placeholder="Amenities">
                        <input type="hidden" name="amenities_id" value="<?php echo e($amenities->amenities_id); ?>">
                        <?php if($errors->has('amenities_name')): ?>
                        <span class="help-block">
                          <strong><?php echo e($errors->first('amenities_name')); ?></strong>
                        </span>
                        <?php endif; ?>
                       
                      </div> -->
                      <!-- <?php if($count==1): ?> -->
                      
                      <!-- <?php else: ?>
                      <div class="col-lg-1 mt-1">
                        <a href="<?php echo e(config('app.baseURL')); ?>/admin/property/remove_amenity/<?php echo e($amenities->amenities_id); ?>" class="deleteamenity" id="deleteamenity" style="color: #484750;"><i class="fa fa-remove" style="font-size:24px;margin-top: 10px;"></i></a>
                      </div>
                      <?php endif; ?> -->
                     
                      
                 
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <div class="col-lg-1 mt-1">
                        <a class="addamenity" id="addamenity"><i class="fa fa-plus" style="font-size:24px;margin-top: -7px;"></i></a>
                      </div>
                         </div>
                      
                    <div class="amenities col-lg-5" id="amenities">
                      </div>
                      
                  </div>
              
                  </div>
                </div>
                <?php else: ?>
                <div class="editamenity col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('amenities_name') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                      <div class="row amenity">

                        <div class="col-lg-4 mt-1">
                          
                        <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="amenities_name[]" value="" placeholder="Amenities">
                        <?php if($errors->has('amenities_name')): ?>
                        <span class="help-block">
                          <strong><?php echo e($errors->first('amenities_name')); ?></strong>
                        </span>
                        <?php endif; ?>
                       
                      </div>
                      <div class="col-lg-1 mt-1">
                        <a class="addamenity" id="addamenity"><i class="fa fa-plus" style="font-size:24px;margin-top: 10px;"></i></a>
                      </div>
                    </div>
                   
                    <div class="amenities col-lg-5 " id="amenities">
                      </div>
                      
                  </div>
              
                  </div>
                </div>
                <?php endif; ?>

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
    
    
  $("#property_type option[value='<?php echo e($property->property_type); ?>']").prop('selected',true);

  <?php if(Session::has('message')): ?>
  var type = "<?php echo e(Session::get('alert-type', 'info')); ?>";
  switch(type){
    case 'info':
    toastr.info("<?php echo e(Session::get('message')); ?>");
    break;

    case 'warning':
    toastr.warning("<?php echo e(Session::get('message')); ?>");
    break;
    case 'success':
    toastr.success("<?php echo e(Session::get('message')); ?>");
    break;
    case 'error':
    toastr.error("<?php echo e(Session::get('message')); ?>");
    break;
  }
  <?php endif; ?>

</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript">

 $(document).ready(function(){
    var field = '<div class="row mt-1 col-lg-12 col-md-12 col-sm-6" id="divremove"><div class="row"><div class="col-lg-10"><input class="form-control" type="text" name="amenities_name[]" id="amenities_name" placeholder="Amenities" style="margin-left: -14px; width: 284px;" required=""></div><div class="col-lg-1"><a class="remove" id="remove"><i class="fa fa-remove" style="font-size: 24px; margin-top: 9px; margin-left: 8px;"></i></a></div></div></div>';
    
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u838013575/domains/jfinserv.com/public_html/resources/views/admin/property/edit.blade.php ENDPATH**/ ?>