
<?php $__env->startSection('content'); ?>

<link  href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css"  rel="stylesheet">  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<style  type="text/css"> 


   .dropzone.dz-clickable {
    cursor: pointer;
}
element.style {
}
.dropzone.dz-clickable {
    cursor: pointer;
}
.dropzone {
    display: -webkit-box;
    -webkit-box-pack: center;
    -webkit-box-align: center;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    width: 100%;
    height: auto;
    padding: 30px 0;
    border: 2px dashed #edf2f9;
    background-color: #f5f7fa;
    border-radius: 20px;
    transition: all 0.3s ease-in;
}
.dropzone {
    min-height: 150px;
    border: 2px dashed rgba(0,0,0,0.3);
    background: #f4f6f8;
    padding: 20px 20px;
}
.dropzone.dz-clickable {
    cursor: pointer;
}

.dz-error-message{
    display: none;
    z-index: 0;
}
.data-dz-errormessage{
    display: none;
} 

</style>   


<main>
    <!-- BreadCrumb start -->
    <section class="breadcrumb-area">
        <div class="breadcrumb-widget  pt-200 pb-100" style="background-image: url(https://jfinserv.com/assets/img/breadcrumb/bg-1.png);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-content pt-90">
                            <h1>Documents Upload</h1>
                            <ul>
                                <li><a href="#">home</a></li>
                               
                                <li>loan</li>
                                 <li>Documents Upload</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BreadCrumb end -->


    <!-- Document Details Start -->
    <section class="loan-deatils-area bg_disable pt-140 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="stepper-widget mt-sm-5 px-3 px-sm-0">
                        <ul>
                            <li class=" complete  mt-0"><a href="loan-details.html">
                                <div class="number"><i class="icon_check"></i> <span>1</span></div> Loan
                                Details
                            </a>
                        </li>
                        <li class="complete"><a href="personal-details.html">
                            <div class="number"><i class="icon_check"></i> <span>2</span></div>
                            Personal
                            Details
                        </a>
                    </li>
                    <li class=" active"><a href="document-upload.html">
                        <div class="number"><i class="icon_check"></i> <span>3</span></div>
                        Documents
                        Upload
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-md-9">
        <div class="loan-details-widget bg_white">
            <form action="<?php echo e(config('app.baseURL')); ?>/loan/postLoanApplySuccess" enctype="multipart/form-data" method="POST" id="form1" name="form1">
              <?php echo csrf_field(); ?>
                <input type="hidden" name="loan_id" value="<?php echo e($loan_id); ?>">
                   <!-- self employeed and salaried employees -->
                  <?php if($profession_type!="salaried"): ?>
                  <div class="self selectt">
                    <div class="doc-info mt-3">
                      <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('dully_filled') ? ' has-error' : ''); ?>">
                        <span>1.</span>
                        <p> Duly filled Application Form with Photograph</p>
                        <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                          <img class="image-size"  src="<?php echo e(config('app.baseURL')); ?>/images/preview.png" id="dully_filled" alt="" style="height: 100px;">
                        </div><!-- form-group -->
                        <div class="form-group">
                          <div class="controls">
                              <div class="row">
                                <div class="col-lg-4">
                                  <input type="file" class="form-control" name="dully_filled[]"  onchange="document.getElementById('dully_filled').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;">
                                  <input type="hidden" value="dully_form" name="dully_form">
                                  <?php if($errors->has('dully_filled')): ?>
                                    <span class="help-block">
                                    <strong><?php echo e($errors->first('dully_filled')); ?></strong>
                                    </span>
                                  <?php endif; ?>
                                </div>
                                <div class="col-lg-1">
                                  <a class="uploaddoc" id="uploaddoc"><i class="fa fa-plus" style="font-size:24px;margin-top: 10px;margin-left: -25px;"></i></a>
                                </div>
                              </div>
                              <div class="dully col-lg-12"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                                      <!--  -->
                    <div class="doc-info mt-3">
                      <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('ageproof') ? ' has-error' : ''); ?>">
                        <span>2.</span>
                        <p>Age Proof (PAN Card, Passport, Any other Certificate from Statutory Authority) Residence Proof (Passport, Driving License, Telephone Bill, Ration Card, Election Card, Any other Certificate from Statutory Authority)</p>
                      <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                        <img class="image-size"  src="<?php echo e(config('app.baseURL')); ?>/images/preview.png" id="ageproof" alt="" style="height: 100px;">
                      </div><!-- form-group -->
                      <div class="form-group">
                        <div class="controls">
                          <div class="row">
                            <div class="col-lg-4">
                              <input type="file" class="form-control"  name="ageproof[]"  onchange="document.getElementById('ageproof').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;">
                              <input type="hidden" name="identity" value="identity" >
                              <?php if($errors->has('ageproof')): ?>
                                <span class="help-block">
                                <strong><?php echo e($errors->first('ageproof')); ?></strong>
                                </span>
                              <?php endif; ?>
                            </div>
                            <div class="col-lg-1">
                              <a class="uploadidentity" id="uploadidentity"><i class="fa fa-plus" style="font-size:24px;margin-top: 10px;margin-left: -25px;"></i></a>
                            </div>
                          </div>
                          <div class="idproof col-lg-12"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
              <div class="doc-info mt-3">
                <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('education') ? ' has-error' : ''); ?>">
                  <span>3.</span>
                  <p>Educational Qualification Proof - Latest Degree (for professionals) </p>
                    <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                      <img class="image-size"  src="<?php echo e(config('app.baseURL')); ?>/images/preview.png" id="education" alt="" style="height: 100px;">
                    </div><!-- form-group -->
                    <div class="form-group">
                      <div class="controls">
                        <div class="row">
                          <div class="col-lg-4">
                            <input type="file" class="form-control"  name="education[]"  onchange="document.getElementById('education').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;" >
                            <input type="hidden" name="education_proof" value="education">
                            <?php if($errors->has('education')): ?>
                              <span class="help-block">
                                <strong><?php echo e($errors->first('education')); ?></strong>
                              </span>
                            <?php endif; ?>
                          </div>
                          <div class="col-lg-1">
                            <a class="uploadeducation" id="uploadeducation"><i class="fa fa-plus" style="font-size:24px;margin-top: 10px;margin-left: -25px;"></i></a>
                          </div>
                        </div>
                        <div class="educationproof col-lg-12"></div>
                      </div>
                    </div>
                  </div>
                </div>

                                   
                                        <div class="doc-info mt-3">

                                              <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('business_certificate') ? ' has-error' : ''); ?>">
                                             <span>4.</span>
                                        <p>Certificate & Proof of business existence along with Business Profile</p>
                                                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                  <img class="image-size"  src="<?php echo e(config('app.baseURL')); ?>/images/preview.png" id="business_certificate" alt="" style="height: 100px;">
                                              </div><!-- form-group -->
                                                  <div class="form-group">
                                                    <div class="controls">
                                                      <div class="row">
                                                          <div class="col-lg-4">
                                                        <input type="file" class="form-control"  name="business_certificate[]"  onchange="document.getElementById('business_certificate').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;">
                                                        <input type="hidden" name="business_certificateproof" value="business_certificateproof">
                                                      
                                                        <?php if($errors->has('business_certificate')): ?>
                                                        <span class="help-block">
                                                          <strong><?php echo e($errors->first('business_certificate')); ?></strong>
                                                      </span>
                                                  <?php endif; ?>
                                                    </div>
                                                    <div class="col-lg-1">
                                                            <a class="uploadbusiness" id="uploadbusiness"><i class="fa fa-plus" style="font-size:24px;margin-top: 10px;margin-left: -25px;"></i></a>
                                                          </div>
                                                  </div>
                                                  <div class="businessproof col-lg-12">
                                                        </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>

                                                    <div class="doc-info mt-3">

                                              <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('tax_returns') ? ' has-error' : ''); ?>">
                                            <span>5.</span>
                                        <p>Last 3 years Income Tax returns (self and business) with Profit & Loss Account & Balance Sheets duly certified/audited by a Chartered Accountant </p>
                                                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                  <img class="image-size"  src="<?php echo e(config('app.baseURL')); ?>/images/preview.png" id="tax_return" alt="" style="height: 100px;">
                                              </div><!-- form-group -->
                                                  <div class="form-group">
                                                    <div class="controls">
                                                      <div class="row">
                                                          <div class="col-lg-4">
                                                        <input type="file" class="form-control"  name="tax_return[]"  onchange="document.getElementById('tax_return').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;">
                                                        <input type="hidden" name="tax_return_proof" value="tax_return_proof">
                                                   
                                                        <?php if($errors->has('tax_return')): ?>
                                                        <span class="help-block">
                                                          <strong><?php echo e($errors->first('tax_return')); ?></strong>
                                                      </span>
                                                  <?php endif; ?>
                                                </div>
                                                <div class="col-lg-1">
                                                            <a class="uploadtaxreturn" id="uploadtaxreturn"><i class="fa fa-plus" style="font-size:24px;margin-top: 10px;margin-left: -25px;"></i></a>
                                                          </div>
                                              </div>
                                              <div class="taxreturnproof col-lg-12">
                                                        </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="doc-info mt-3">

                                              <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('bank_statement') ? ' has-error' : ''); ?>">
                                            <span>6.</span>
                                        <p>Last 12 months Bank Account Statements (self & business) </p>
                                                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                  <img class="image-size"  src="<?php echo e(config('app.baseURL')); ?>/images/preview.png" id="bank_statement" alt="" style="height: 100px;">
                                              </div><!-- form-group -->
                                                  <div class="form-group">
                                                    <div class="controls">
                                                       <div class="row">
                                                          <div class="col-lg-4">
                                                        <input type="file" class="form-control"  name="bank_statement[]"  onchange="document.getElementById('bank_statement').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;" accept=".pdf">
                                                        <input type="hidden" name="bankstatement_proof" value="bankstatement_proof">
                                                        <?php if($errors->has('bank_statement')): ?>
                                                        <span class="help-block">
                                                          
                                                          <strong><?php echo e($errors->first('bank_statement')); ?></strong>
                                                      </span>
                                                  <?php endif; ?>
                                                </div>
                                                <div class="col-lg-1">
                                                            <a class="uploadbankstmt" id="uploadbankstmt"><i class="fa fa-plus" style="font-size:24px;margin-top: 10px;margin-left: -25px;"></i></a>
                                                          </div>
                                              </div>
                                               <div class="bankstmtproof col-lg-12">
                                                        </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                        </div>
                                    <!-- </div> -->
                                 <!--  </div> -->
                                <!-- </div> -->
                                <?php else: ?>
                                <div class="salaried selectt">
                                    <div class="col-12 mt-4">
                                        <!-- <div class="doc-info">
                                            <span>1.</span>
                                            <p>Selfie Photo. Your Personal Photo. The photo must be done by yourself.
                                                The photo must show your face and your both shoulders. (Please attach
                                                file )</p>
                                            </div> -->
                                        </div>
                                              <div class="doc-info mt-3">

                                              <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('bdully_filled') ? ' has-error' : ''); ?>">
                                                 <span>1.</span>
                                                <p> Dully filled Application Form with Photograph </p>
                                                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                  <img class="image-size"  src="<?php echo e(config('app.baseURL')); ?>/images/preview.png" id="dully_filled1" alt="" style="height: 100px;">
                                              </div><!-- form-group -->
                                                  <div class="form-group">
                                                    <div class="controls col-lg-12">
                                                      <div class="row">
                                                        <div class="col-lg-4">
                                                          <input type="file" class="form-control" name="dully_filled[]" onchange="document.getElementById('dully_filled1').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;" >
                                                          <input type="hidden" name="dully_form" value="dully_form">
                                                        </div>
                                                        <div class="col-lg-1">
                                                          <a class="uploaddoc" id="uploaddoc"><i class="fa fa-plus" style="font-size:24px;margin-top: 10px;margin-left: -25px;"></i></a>
                                                        </div>
                                                        
                                                        

                                                      </div>
                                                        <div class="dully col-lg-12">
                                                        </div>
                                                      
                                                          <!-- <input type="file" class="form-control" name="dully_filled" id="dully_filled" onchange="document.getElementById('dully_filled1').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px; display: none"> -->
                                                       
                                                        

                                                        
                                                       
                                                        <?php if($errors->has('bdully_filled')): ?>
                                                        <span class="help-block">
                                                          <strong><?php echo e($errors->first('bdully_filled')); ?></strong>
                                                      </span>
                                                  <?php endif; ?></div>
                                              </div>
                                          </div>
                                      </div>
                                       <div class="doc-info mt-3">

                                              <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('ageproof') ? ' has-error' : ''); ?>">
                                                <span>2.</span>
                                        <p>Age Proof (PAN Card, Passport, Any other Certificate from Statutory Authority) Residence Proof (Passport, Driving License, Telephone Bill, Ration Card, Election Card, Any other Certificate from Statutory Authority)</p>
                                                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                  <img class="image-size"  src="<?php echo e(config('app.baseURL')); ?>/images/preview.png" id="ageproof1" alt="" style="height: 100px;">
                                              </div><!-- form-group -->
                                                  <div class="form-group">
                                                    <div class="controls">
                                                        <div class="row">
                                                          <div class="col-lg-4">
                                                            <input type="file" class="form-control"  name="ageproof[]"  onchange="document.getElementById('ageproof1').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;" >
                                                            <input type="hidden" name="identity" value="identity">
                                                        <?php if($errors->has('ageproof')): ?>
                                                        <span class="help-block">
                                                          <strong><?php echo e($errors->first('ageproof')); ?></strong>
                                                      </span>
                                                  <?php endif; ?>
                                                          </div>
                                                          <div class="col-lg-1">
                                                            <a class="uploadidentity" id="uploadidentity"><i class="fa fa-plus" style="font-size:24px;margin-top: 10px;margin-left: -25px;"></i></a>
                                                          </div>
                                                          
                                                        </div>
                                                        <div class="idproof col-lg-12">
                                                        </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>

                                           <div class="doc-info mt-3">

                                              <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('resident_proof') ? ' has-error' : ''); ?>">
                                               <span>3.</span>
                                                <p>Residence Proof (Passport, Driving License, Telephone Bill, Ration Card, Election Card, Any other Certificate from Statutory Authority)  </p>

                                                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                  <img class="image-size"  src="<?php echo e(config('app.baseURL')); ?>/images/preview.png" id="resident_proof" alt="" style="height: 100px;">
                                              </div><!-- form-group -->
                                                  <div class="form-group" id="">
                                                    <div class="controls">
                                                        <div class="row">
                                                          <div class="col-lg-4">
                                                        <input type="file" class="form-control"  name="resident_proof[]"  onchange="document.getElementById('resident_proof').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;">
                                                        <input type="hidden" name="residence_proof" value="residence">
                                                        <?php if($errors->has('resident_proof')): ?>
                                                        <span class="help-block">
                                                          <strong><?php echo e($errors->first('resident_proof')); ?></strong>
                                                      </span>
                                                  <?php endif; ?>
                                                </div>
                                                <div class="col-lg-1">
                                                            <a class="uploadresidence" id="uploadresidence"><i class="fa fa-plus" style="font-size:24px;margin-top: 10px;margin-left: -25px;"></i></a>
                                                          </div>
                                                </div>
                                                <div class="residenceproof col-lg-12">
                                                        </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                            
                                       <div class="doc-info mt-3">

                                              <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('education') ? ' has-error' : ''); ?>">
                                               <span>4.</span>
                                        <p>Educational Qualification Proof - Latest Degree (for professionals) </p>
                                                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                  <img class="image-size"  src="<?php echo e(config('app.baseURL')); ?>/images/preview.png" id="education1" alt="" style="height: 100px;">
                                              </div><!-- form-group -->
                                                  <div class="form-group">
                                                    <div class="controls">
                                                      <div class="row">
                                                          <div class="col-lg-4">
                                                        <input type="file" class="form-control"  name="education[]"  onchange="document.getElementById('education1').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;" >
                                                        <input type="hidden" name="education_proof" value="education">
                                                        <?php if($errors->has('education')): ?>
                                                        <span class="help-block">
                                                          <strong><?php echo e($errors->first('education')); ?></strong>
                                                      </span>
                                                  <?php endif; ?>
                                                </div>
                                                <div class="col-lg-1">
                                                            <a class="uploadeducation" id="uploadeducation"><i class="fa fa-plus" style="font-size:24px;margin-top: 10px;margin-left: -25px;"></i></a>
                                                          </div>
                                              </div>
                                              <div class="educationproof col-lg-12">
                                                        </div>
                                              </div>
                                              </div>
                                          </div>
                                      </div>
                                   
                                        <div class="doc-info mt-3">

                                              <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('business_certificate') ? ' has-error' : ''); ?>">
                                              <span>5.</span>
                                                <p>Latest Salary-slips for last 3 months  </p>
                                                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                  <img class="image-size"  src="<?php echo e(config('app.baseURL')); ?>/images/preview.png" id="salary_slip" alt="" style="height: 100px;">
                                              </div><!-- form-group -->
                                                  <div class="form-group">
                                                    <div class="controls">
                                                        <div class="row">
                                                          <div class="col-lg-4">
                                                        <input type="file" class="form-control"  name="salary_slip[]"  onchange="document.getElementById('salary_slip').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;" >
                                                        <input type="hidden" name="income_proof" value="income_proof">
                                                        <?php if($errors->has('salary_slip')): ?>
                                                        <span class="help-block">
                                                          <strong><?php echo e($errors->first('salary_slip')); ?></strong>
                                                      </span>
                                                  <?php endif; ?>
                                                </div>
                                                <div class="col-lg-1">
                                                            <a class="uploadsalary" id="uploadsalary"><i class="fa fa-plus" style="font-size:24px;margin-top: 10px;margin-left: -25px;"></i></a>
                                                          </div>
                                              </div>
                                              <div class="salaryproof col-lg-12">
                                                        </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>

                                                    <div class="doc-info mt-3">

                                              <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('tax_returns') ? ' has-error' : ''); ?>">
                                            <span>6.</span>
                                                <p>Form 16 for last 2 years  </p>
                                                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                  <img class="image-size"  src="<?php echo e(config('app.baseURL')); ?>/images/preview.png" id="form_sixteen" alt="" style="height: 100px;">
                                              </div><!-- form-group -->
                                                  <div class="form-group">
                                                    <div class="controls">
                                                        <div class="row">
                                                          <div class="col-lg-4">
                                                        <input type="file" class="form-control"  name="form_sixteen[]"  onchange="document.getElementById('form_sixteen').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;">
                                                        <input type="hidden" name="form_sixteendoc" value="form_sixteendoc">
                                                        <?php if($errors->has('form_sixteen')): ?>
                                                        <span class="help-block">
                                                          <strong><?php echo e($errors->first('form_sixteen')); ?></strong>
                                                      </span>
                                                  <?php endif; ?>
                                                    </div>
                                                    <div class="col-lg-1">
                                                            <a class="uploadformsixteen" id="uploadformsixteen"><i class="fa fa-plus" style="font-size:24px;margin-top: 10px;margin-left: -25px;"></i></a>
                                                          </div>
                                                  </div>
                                                  <div class="formsixproof col-lg-12">
                                                        </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="doc-info mt-3">

                                              <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('bank_statement') ? ' has-error' : ''); ?>">
                                            <span>7.</span>
                                        <p>Last 12 months Bank Account Statements (self & business) </p>
                                                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                  <img class="image-size"  src="<?php echo e(config('app.baseURL')); ?>/images/preview.png" id="bank_statement1" alt="" style="height: 100px;">
                                              </div><!-- form-group -->
                                                  <div class="form-group">
                                                    <div class="controls">
                                                      <div class="row">
                                                          <div class="col-lg-4">
                                                        <input type="file" class="form-control"  name="bank_statement[]"  onchange="document.getElementById('bank_statement1').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;" accept=".pdf">
                                                        <input type="hidden" name="bankstatement_proof" value="bankstatement_proof">
                                                        <?php if($errors->has('bank_statement')): ?>
                                                        <span class="help-block">
                                                          <strong><?php echo e($errors->first('bank_statement')); ?></strong>
                                                      </span>
                                                  <?php endif; ?>
                                                </div>
                                                <div class="col-lg-1">
                                                            <a class="uploadbankstmt" id="uploadbankstmt"><i class="fa fa-plus" style="font-size:24px;margin-top: 10px;margin-left: -25px;"></i></a>
                                                          </div>
                                              </div>
                                              <div class="bankstmtproof col-lg-12">
                                                        </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
<!-- 
                                      <div class="doc-info mt-3">

                                              <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('cheque') ? ' has-error' : ''); ?>">
                                         <span>8.</span>
                                        <p>Processing Fee Cheque in favour of '……………………………' *</p>
                                                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                  <img class="image-size"  src="<?php echo e(config('app.baseURL')); ?>/images/preview.png" id="cheque1" alt="" style="height: 100px;">
                                              </div>
                                                  <div class="form-group">
                                                    <div class="controls">

                                                        <input type="file" class="form-control"  name="cheque"  onchange="document.getElementById('cheque1').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;">
                                                        <?php if($errors->has('cheque')): ?>
                                                        <span class="help-block">
                                                          <strong><?php echo e($errors->first('cheque')); ?></strong>
                                                      </span>
                                                  <?php endif; ?></div>
                                              </div>
                                          </div>
                                      </div> -->
                                     <!--   <div class="doc-info mt-3">

                                              <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('property_document') ? ' has-error' : ''); ?>">
                                         <span>9.</span>
                                        <p>Photocopy of Title Documents of the Property, Approved Plan etc. *</p>
                                                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                  <img class="image-size"  src="<?php echo e(config('app.baseURL')); ?>/images/preview.png" id="property_document1" alt="" style="height: 100px;">
                                              </div>
                                                  <div class="form-group">
                                                    <div class="controls">

                                                        <input type="file" class="form-control"  name="property_document"  onchange="document.getElementById('property_document1').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;">
                                                        <?php if($errors->has('property_document')): ?>
                                                        <span class="help-block">
                                                          <strong><?php echo e($errors->first('property_document')); ?></strong>
                                                      </span>
                                                  <?php endif; ?></div>
                                              </div>
                                          </div>
                                      </div> -->
                                       
                                       

                                    </div>

                                   <?php endif; ?>
                                   <!--  <div id="dropzone">
                                        <form class="dropzone needsclick" id="demo-upload" action="<?php echo e(config('app.baseURL')); ?>/loan/postUploadDocument/<?php echo e($loan_id); ?>" enctype="multipart/form-data" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <div class="col-12 mt-2">
                                                
                                                <div class="dz-message needsclick">    
                                                    <img src="img/apply-loan/upload.png" alt="upload" name="document"> 
                                                    <h4 class="dz-button" type="button">Drag and drop an image</h4>
                                                    <p class="dz-custom-upload-text">or to <span>Browse</span> choose a file <br> PNG,JPG,PDF</p>
                                                </div>
                                            </div>
                                        </div> -->
                                    <!-- </form>  -->
                                    <!-- <form action="<?php echo e(config('app.baseURL')); ?>/loan/postLoanApplySuccess" enctype="multipart/form-data" method="POST"> -->
                                        
                                        <div class="col-12 mt-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="agreeBox" required>
                                                <label class="form-check-label" for="agreeBox">I hereby agree that the information given is true, accurate and complete as of the date of this
                                                application submission. **</label>
                                            </div>
                                        </div>

                                        <input type="hidden" name="loan_id" value="<?php echo e($loan_id); ?>">

                                    <!-- </div> -->

                                    <div class="row mt-5">
                                        <div class="col-md-12">
                                            <div class="nav-btn d-flex flex-wrap justify-content-between">
                                                <a href="<?php echo e(config('app.baseURL')); ?>/loan/personaldetail/<?php echo e($loan_id); ?>"
                                                class="prev-btn theme-btn-primary_alt theme-btn"><i
                                                class="arrow_left"></i>previous
                                            </a>
                                            
                                            <button type="submit"
                                            class="theme-btn-primary_alt theme-btn">Submit</button>
                                        <!-- </form> -->
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Document Details end -->
</main>

<script type="text/javascript">
    $(document).ready(function() {
        $('#salaried').hide();
        $('#self').hide();

        $('input[type="radio"]').click(function() {
            var inputValue = $(this).attr("value");
            var targetBox = $("." + inputValue);
            $(".selectt").not(targetBox).hide();
            $(targetBox).show();

        });
    });
    
</script>
<script type="text/javascript">


    function show1() {
        var radioButton = document.getElementById("salariedTab");
        radioButton.checked = false;

    }
    function show2() {
        var radioButton = document.getElementById("selfTab");
        radioButton.checked = false;

    }
</script>       
<script type="text/javascript">


    var field = '<div class="mt-1 col-lg-12" id="divremove"><div class="row"><div class="col-lg-4"><input type="file" class="form-control" name="dully_filled[]" id="dully_filled" style="padding-top: 10px;"></div><div class="col-lg-1"><a class="remove" id="remove"><i class="remove1 fa fa-remove" style="margin-left: -24px;font-size: 24px;   margin-top: 9px;"></i></a></div></div></div>';
    
    $('#uploaddoc').click(function(){
      $('.dully').append(field); 
        
    });
        $('.dully').on('click', '.remove', function(e){
        e.preventDefault();
        $('#divremove').remove();
        
      });
  
</script>
<script type="text/javascript">
    var fieldidentity = '<div class="mt-1 col-lg-12" id="dividentity"><div class="row"><div class="col-lg-4"><input type="file" class="form-control" name="ageproof[]" id="ageproof" style="padding-top: 10px;"></div><div class="col-lg-1"><a class="removeidentity" id="removeidentity"><i class="fa fa-remove removeidentity1" style="margin-left: -24px;font-size: 24px; margin-top: 9px;"></i></a></div></div></div>';
    
    $('#uploadidentity').click(function(){
      $('.idproof').append(fieldidentity); 
        
    });
        $('.idproof').on('click', '.removeidentity', function(e){
        e.preventDefault();
        $('#dividentity').remove();
        
      });
  
</script>
<script type="text/javascript">
    var fieldresidence = '<div class="mt-1 col-lg-12" id="divresidence"><div class="row"><div class="col-lg-4"><input type="file" class="form-control" name="resident_proof[]" id="resident_proof" style="padding-top: 10px;"></div><div class="col-lg-1"><a class="removeresidence" id="removeresidence"><i class="fa fa-remove" style="margin-left: -24px;font-size: 24px; margin-top: 9px;"></i></a></div></div></div>';
    
    $('#uploadresidence').click(function(){
      $('.residenceproof').append(fieldresidence); 
        
    });
        $('.residenceproof').on('click', '.removeresidence', function(e){
        e.preventDefault();
        $('#divresidence').remove();
        
      });
  
</script>

<script type="text/javascript">
    var fieldeducation = '<div class="mt-1 col-lg-12" id="diveducation"><div class="row"><div class="col-lg-4"><input type="file" class="form-control" name="education[]" id="education" style="padding-top: 10px;"></div><div class="col-lg-1"><a class="removeeducation" id="removeeducation"><i class="fa fa-remove" style="margin-left: -24px;font-size: 24px; margin-top: 9px;"></i></a></div></div></div>';
    
    $('#uploadeducation').click(function(){
      $('.educationproof').append(fieldeducation); 
        
    });
        $('.educationproof').on('click', '.removeeducation', function(e){
        e.preventDefault();
        $('#diveducation').remove();
        
      });
  
</script>
<script type="text/javascript">
    var fieldsalary = '<div class="mt-1 col-lg-12" id="divsalary"><div class="row"><div class="col-lg-4"><input type="file" class="form-control" name="salary_slip[]" id="salary_slip" style="padding-top: 10px;"></div><div class="col-lg-1"><a class="removesalary" id="removesalary"><i class="fa fa-remove" style="margin-left: -24px;font-size: 24px; margin-top: 9px;"></i></a></div></div></div>';
    
    $('#uploadsalary').click(function(){
      $('.salaryproof').append(fieldsalary); 
        
    });
        $('.salaryproof').on('click', '.removesalary', function(e){
        e.preventDefault();
        $('#divsalary').remove();
        
      });
  
</script>

<script type="text/javascript">
    var fieldformsix = '<div class="mt-1 col-lg-12" id="divformsix"><div class="row"><div class="col-lg-4"><input type="file" class="form-control" name="form_sixteen[]" id="form_sixteen" style="padding-top: 10px;"></div><div class="col-lg-1"><a class="removeformsix" id="removeformsix"><i class="fa fa-remove" style="margin-left: -24px;font-size: 24px; margin-top: 9px;"></i></a></div></div></div>';
    
    $('#uploadformsixteen').click(function(){
      $('.formsixproof').append(fieldformsix); 
        
    });
        $('.formsixproof').on('click', '.removeformsix', function(e){
        e.preventDefault();
        $('#divformsix').remove();
        
      });
  
</script>
<script type="text/javascript">
    var fieldbank = '<div class="mt-1 col-lg-12" id="divbank"><div class="row"><div class="col-lg-4"><input type="file" class="form-control" name="bank_statement[]" id="bank_statement" style="padding-top: 10px;" accept=".pdf"></div><div class="col-lg-1"><a class="removebank" id="removebank"><i class="fa fa-remove" style="margin-left: -24px;font-size: 24px; margin-top: 9px;"></i></a></div></div></div>';
    
    $('#uploadbankstmt').click(function(){
      $('.bankstmtproof').append(fieldbank); 
        
    });
        $('.bankstmtproof').on('click', '.removebank', function(e){
        e.preventDefault();
        $('#divbank').remove();
        
      });
  
</script>

<script type="text/javascript">
    var fieldbusiness = '<div class="mt-1 col-lg-12" id="divbusiness"><div class="row"><div class="col-lg-4"><input type="file" class="form-control" name="business_certificate[]" id="business_certificate" style="padding-top: 10px;"></div><div class="col-lg-1"><a class="removebusiness" id="removebusiness"><i class="fa fa-remove" style="margin-left: -24px;font-size: 24px; margin-top: 9px;"></i></a></div></div></div>';
    
    $('#uploadbusiness').click(function(){
      $('.businessproof').append(fieldbusiness); 
        
    });
        $('.businessproof').on('click', '.removebusiness', function(e){
        e.preventDefault();
        $('#divbusiness').remove();
        
      });
  
</script>
<script type="text/javascript">
    var fieldtax = '<div class="mt-1 col-lg-12" id="divtax"><div class="row"><div class="col-lg-4"><input type="file" class="form-control" name="tax_return[]" id="tax_return" style="padding-top: 10px;"></div><div class="col-lg-1"><a class="removetax" id="removetax"><i class="fa fa-remove" style="margin-left: -24px;font-size: 24px; margin-top: 9px;"></i></a></div></div></div>';
    
    $('#uploadtaxreturn').click(function(){
      $('.taxreturnproof').append(fieldtax); 
        
    });
        $('.taxreturnproof').on('click', '.removetax', function(e){
        e.preventDefault();
        $('#divtax').remove();
        
      });
  
</script>

                                                                                            
<!-- <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        Dropzone.options.dropzone={
            maxFilesize: 100000,
            renameFile: function(file){
                var dt = new Date();
                var time = dt.getTime();

                return time+ file.name;
            },

            acceptedFiles: ".jpeg,.jpg,.png,.gif,.jfif,.pdf",
            addRemoveLinks: true,
            timeout: 50000,
            removedfile: function(file){
                var name = file.upload.filename;
                $.ajax({
                    headers:{
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    type: 'POST',
                    url: '<?php echo e(url("loan/delete")); ?>',
                    data: {filename: name},
                    success: function(data){
                        console.log("File has been deleted successfully");

                    },
                    error: function(e){
                        console.log(e);
                    }
                });
                var fileRef;
                return (fileRef=file.previewElement)!= null ?
                fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },
            error: function(file, response){
                return false;
            }

        }
    });
</script> -->
<script type="text/javascript">

</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jfinserv.com/public_html/resources/views/loan/document.blade.php ENDPATH**/ ?>