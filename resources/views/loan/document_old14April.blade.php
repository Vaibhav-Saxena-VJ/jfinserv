@extends('layouts.app')
@section('content')

<link  href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css"  rel="stylesheet">  
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
        <div class="breadcrumb-widget  pt-200 pb-100" style="background-image: url(http://localhost/finance/assets/img/breadcrumb/bg-1.png);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-content pt-90">
                            <h1>Documants Upload</h1>
                            <ul>
                                <li><a href="index.html">home</a></li>
                                <li><a href="index.html">pages</a></li>
                                <li>loan</li>
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
                           <li class=" complete  mt-0"><a href="{{config('app.baseURL')}}/apply-now">
                                        <div class="number"><i class="icon_check"></i> <span>1</span></div> Loan
                                        Details
                                    </a>
                                </li>
                                <li class="active"><a href="{{config('app.baseURL')}}/loan/personaldetail/5">
                                        <div class="number"><i class="icon_check"></i> <span>2</span></div>
                                        Personal
                                        Details
                                    </a>
                                </li>
                    <li class=" active"><a href="document-upload.html">
                        <div class="number"><i class="icon_check"></i> <span>3</span></div>
                        Documants
                        Upload
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-md-9">
        <div class="loan-details-widget bg_white">
            <form action="{{config('app.baseURL')}}/loan/postLoanApplySuccess" enctype="multipart/form-data" method="POST" id="form1" name="form1">
                                @csrf
                                    <input type="hidden" name="loan_id" value="{{$loan_id}}">
                                    <!-- self employeed and salaried employees -->
                                  <!--   <div class="col-md-12">
                                        <div class="form-check form-check-inline me-5 active selfTab">
                                            <input class="form-check-input" type="radio" name="selfTab" id="selfTab" value="self" onclick="show1();">
                                            <label class="form-check-label" for="self">Self Employed/Professionals</label>
                                        </div>
                                        <div class="form-check form-check-inline me-5">
                                            <input class="form-check-input" type="radio" name="salariedTab" id="salariedTab" value="salaried" onclick="show2();">
                                            <label class="form-check-label" for="married">Salaried Employees </label>
                                        </div>
                                    </div> -->
                                    <div class="row gy-4">
                                        @if($profession_type!="salaried")
                                        <div class="self selectt">
                                            <div class="col-12">
                                        <!-- <div class="doc-info">
                                            <span>1.</span>
                                            <p>Selfie Photo. Your Personal Photo. The photo must be done by yourself.
                                                The photo must show your face and your both shoulders. (Please attach
                                                file )</p>
                                            </div> -->
                                            <div class="doc-info mt-3">

                                              <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('dully_filled') ? ' has-error' : '' }}">
                                                 <span>1.</span>
                                                <p> Duly filled Application Form with Photograph *</p>
                                                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                  <img class="image-size"  src="{{config('app.baseURL')}}/images/preview.png" id="dully_filled" alt="" style="height: 100px;">
                                              </div><!-- form-group -->
                                                  <div class="form-group">
                                                    <div class="controls">

                                                        <input type="file" class="form-control" name="dully_filled"  onchange="document.getElementById('dully_filled').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;">
                                                        @if ($errors->has('dully_filled'))
                                                        <span class="help-block">
                                                          <strong>{{ $errors->first('dully_filled') }}</strong>
                                                      </span>
                                                  @endif</div>
                                              </div>
                                          </div>
                                      </div>
                                       <div class="doc-info mt-3">

                                              <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('ageproof') ? ' has-error' : '' }}">
                                                <span>2.</span>
                                        <p>Age Proof (PAN Card, Passport, Any other Certificate from Statutory Authority) Residence Proof (Passport, Driving License, Telephone Bill, Ration Card, Election Card, Any other Certificate from Statutory Authority)*</p>
                                                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                  <img class="image-size"  src="{{config('app.baseURL')}}/images/preview.png" id="ageproof" alt="" style="height: 100px;">
                                              </div><!-- form-group -->
                                                  <div class="form-group">
                                                    <div class="controls">

                                                        <input type="file" class="form-control"  name="ageproof"  onchange="document.getElementById('ageproof').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;">
                                                        @if ($errors->has('ageproof'))
                                                        <span class="help-block">
                                                          <strong>{{ $errors->first('ageproof') }}</strong>
                                                      </span>
                                                  @endif</div>
                                              </div>
                                          </div>
                                      </div>

                                       <div class="doc-info mt-3">

                                              <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('education') ? ' has-error' : '' }}">
                                               <span>3.</span>
                                        <p>Educational Qualification Proof - Latest Degree (for professionals) *</p>
                                                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                  <img class="image-size"  src="{{config('app.baseURL')}}/images/preview.png" id="education" alt="" style="height: 100px;">
                                              </div><!-- form-group -->
                                                  <div class="form-group">
                                                    <div class="controls">

                                                        <input type="file" class="form-control"  name="education"  onchange="document.getElementById('education').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;">
                                                        @if ($errors->has('education'))
                                                        <span class="help-block">
                                                          <strong>{{ $errors->first('education') }}</strong>
                                                      </span>
                                                  @endif</div>
                                              </div>
                                          </div>
                                      </div>

                                   
                                        <div class="doc-info mt-3">

                                              <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('business_certificate') ? ' has-error' : '' }}">
                                             <span>4.</span>
                                        <p>Certificate & Proof of business existence along with Business Profile*</p>
                                                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                  <img class="image-size"  src="{{config('app.baseURL')}}/images/preview.png" id="business_certificate" alt="" style="height: 100px;">
                                              </div><!-- form-group -->
                                                  <div class="form-group">
                                                    <div class="controls">

                                                        <input type="file" class="form-control"  name="business_certificate"  onchange="document.getElementById('business_certificate').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;">
                                                        @if ($errors->has('business_certificate'))
                                                        <span class="help-block">
                                                          <strong>{{ $errors->first('business_certificate') }}</strong>
                                                      </span>
                                                  @endif</div>
                                              </div>
                                          </div>
                                      </div>

                                                    <div class="doc-info mt-3">

                                              <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('tax_returns') ? ' has-error' : '' }}">
                                            <span>5.</span>
                                        <p>Last 3 years Income Tax returns (self and business) with Profit & Loss Account & Balance Sheets duly certified/audited by a Chartered Accountant *</p>
                                                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                  <img class="image-size"  src="{{config('app.baseURL')}}/images/preview.png" id="tax_return" alt="" style="height: 100px;">
                                              </div><!-- form-group -->
                                                  <div class="form-group">
                                                    <div class="controls">

                                                        <input type="file" class="form-control"  name="tax_return"  onchange="document.getElementById('tax_return').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;">
                                                        @if ($errors->has('tax_return'))
                                                        <span class="help-block">
                                                          <strong>{{ $errors->first('tax_return') }}</strong>
                                                      </span>
                                                  @endif</div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="doc-info mt-3">

                                              <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('bank_statement') ? ' has-error' : '' }}">
                                            <span>6.</span>
                                        <p>Last 12 months Bank Account Statements (self & business) *</p>
                                                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                  <img class="image-size"  src="{{config('app.baseURL')}}/images/preview.png" id="bank_statement" alt="" style="height: 100px;">
                                              </div><!-- form-group -->
                                                  <div class="form-group">
                                                    <div class="controls">

                                                        <input type="file" class="form-control"  name="bank_statement"  onchange="document.getElementById('bank_statement').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;">
                                                        @if ($errors->has('bank_statement'))
                                                        <span class="help-block">
                                                          <strong>{{ $errors->first('bank_statement') }}</strong>
                                                      </span>
                                                  @endif</div>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="doc-info mt-3">

                                              <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('cheque') ? ' has-error' : '' }}">
                                         <span>7.</span>
                                        <p>Processing Fee Cheque in favour of '……………………………' *</p>
                                                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                  <img class="image-size"  src="{{config('app.baseURL')}}/images/preview.png" id="cheque" alt="" style="height: 100px;">
                                              </div><!-- form-group -->
                                                  <div class="form-group">
                                                    <div class="controls">

                                                        <input type="file" class="form-control"  name="cheque"  onchange="document.getElementById('cheque').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;">
                                                        @if ($errors->has('cheque'))
                                                        <span class="help-block">
                                                          <strong>{{ $errors->first('cheque') }}</strong>
                                                      </span>
                                                  @endif</div>
                                              </div>
                                          </div>
                                      </div>
                                       <div class="doc-info mt-3">

                                              <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('property_document') ? ' has-error' : '' }}">
                                         <span>8.</span>
                                        <p>Photocopy of Title Documents of the Property, Approved Plan etc. *</p>
                                                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                  <img class="image-size"  src="{{config('app.baseURL')}}/images/preview.png" id="property_document" alt="" style="height: 100px;">
                                              </div><!-- form-group -->
                                                  <div class="form-group">
                                                    <div class="controls">

                                                        <input type="file" class="form-control"  name="property_document"  onchange="document.getElementById('property_document').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;">
                                                        @if ($errors->has('property_document'))
                                                        <span class="help-block">
                                                          <strong>{{ $errors->first('property_document') }}</strong>
                                                      </span>
                                                  @endif</div>
                                              </div>
                                          </div>
                                      </div>
                                    
                                    
                                    
                                
                                   <!--  <div class="doc-info mt-3">
                                        <span>8.</span>
                                        <p>Photocopy of Title Documents of the Property, Approved Plan etc. *</p>
                                    </div> -->

                                        <!-- <div class="doc-info mt-3">
                                            <span>2.</span>
                                            <p>ID Card. Valid Government ID Card. Front and Back side. Original ID Card.
                                                Full photo. All parts of the ID card must be shown. The four corners of
                                                the ID card must show on the photo. ID must be original and valid. ID
                                                card must be very clear. (Please attach file) *</p>
                                            </div> -->
                                        </div>
                                    <!-- <div class="col-12">

                                        <div id="dropzone" class="dropzone dz-clickable">
                                            <div class="dz-default dz-message"> 
                                                <img src="img/apply-loan/upload.png" alt="upload" name="document"> 
                                                <h4 class="dz-button" type="button">Drag and drop an image</h4>
                                                <p class="dz-custom-upload-text">or to <span>Browse</span> choose a file <br> PNG,JPG,PDF</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="agreeBox">
                                            <label class="form-check-label" for="agreeBox">I hereby agree that the
                                                information given is true, accurate and complete as of the date of this
                                                application submission. **</label>
                                        </div>
                                    </div> -->
                                </div>
                                @else
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

                                              <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('bdully_filled') ? ' has-error' : '' }}">
                                                 <span>1.</span>
                                                <p> Duly filled Application Form with Photograph *</p>
                                                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                  <img class="image-size"  src="{{config('app.baseURL')}}/images/preview.png" id="dully_filled1" alt="" style="height: 100px;">
                                              </div><!-- form-group -->
                                                  <div class="form-group">
                                                    <div class="controls">

                                                        <input type="file" class="form-control" name="dully_filled"  onchange="document.getElementById('dully_filled1').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;">
                                                        @if ($errors->has('bdully_filled'))
                                                        <span class="help-block">
                                                          <strong>{{ $errors->first('bdully_filled') }}</strong>
                                                      </span>
                                                  @endif</div>
                                              </div>
                                          </div>
                                      </div>
                                       <div class="doc-info mt-3">

                                              <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('ageproof') ? ' has-error' : '' }}">
                                                <span>2.</span>
                                        <p>Age Proof (PAN Card, Passport, Any other Certificate from Statutory Authority) Residence Proof (Passport, Driving License, Telephone Bill, Ration Card, Election Card, Any other Certificate from Statutory Authority)*</p>
                                                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                  <img class="image-size"  src="{{config('app.baseURL')}}/images/preview.png" id="ageproof1" alt="" style="height: 100px;">
                                              </div><!-- form-group -->
                                                  <div class="form-group">
                                                    <div class="controls">

                                                        <input type="file" class="form-control"  name="ageproof"  onchange="document.getElementById('ageproof1').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;">
                                                        @if ($errors->has('ageproof'))
                                                        <span class="help-block">
                                                          <strong>{{ $errors->first('ageproof') }}</strong>
                                                      </span>
                                                  @endif</div>
                                              </div>
                                          </div>
                                      </div>

                                           <div class="doc-info mt-3">

                                              <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('resident_proof') ? ' has-error' : '' }}">
                                               <span>3.</span>
                                                <p>Residence Proof (Passport, Driving License, Telephone Bill, Ration Card, Election Card, Any other Certificate from Statutory Authority) * </p>

                                                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                  <img class="image-size"  src="{{config('app.baseURL')}}/images/preview.png" id="resident_proof" alt="" style="height: 100px;">
                                              </div><!-- form-group -->
                                                  <div class="form-group">
                                                    <div class="controls">

                                                        <input type="file" class="form-control"  name="resident_proof"  onchange="document.getElementById('resident_proof').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;">
                                                        @if ($errors->has('resident_proof'))
                                                        <span class="help-block">
                                                          <strong>{{ $errors->first('resident_proof') }}</strong>
                                                      </span>
                                                  @endif</div>
                                              </div>
                                          </div>
                                      </div>
                            
                                       <div class="doc-info mt-3">

                                              <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('education') ? ' has-error' : '' }}">
                                               <span>4.</span>
                                        <p>Educational Qualification Proof - Latest Degree (for professionals) *</p>
                                                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                  <img class="image-size"  src="{{config('app.baseURL')}}/images/preview.png" id="education1" alt="" style="height: 100px;">
                                              </div><!-- form-group -->
                                                  <div class="form-group">
                                                    <div class="controls">

                                                        <input type="file" class="form-control"  name="education"  onchange="document.getElementById('education1').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;">
                                                        @if ($errors->has('education'))
                                                        <span class="help-block">
                                                          <strong>{{ $errors->first('education') }}</strong>
                                                      </span>
                                                  @endif</div>
                                              </div>
                                          </div>
                                      </div>
                                   
                                        <div class="doc-info mt-3">

                                              <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('business_certificate') ? ' has-error' : '' }}">
                                              <span>5.</span>
                                                <p>Latest Salary-slips for last 3 months * </p>
                                                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                  <img class="image-size"  src="{{config('app.baseURL')}}/images/preview.png" id="salary_slip" alt="" style="height: 100px;">
                                              </div><!-- form-group -->
                                                  <div class="form-group">
                                                    <div class="controls">

                                                        <input type="file" class="form-control"  name="salary_slip"  onchange="document.getElementById('salary_slip').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;">
                                                        @if ($errors->has('salary_slip'))
                                                        <span class="help-block">
                                                          <strong>{{ $errors->first('salary_slip') }}</strong>
                                                      </span>
                                                  @endif</div>
                                              </div>
                                          </div>
                                      </div>

                                                    <div class="doc-info mt-3">

                                              <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('tax_returns') ? ' has-error' : '' }}">
                                            <span>6.</span>
                                                <p>Form 16 for last 2 years * </p>
                                                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                  <img class="image-size"  src="{{config('app.baseURL')}}/images/preview.png" id="form_sixteen" alt="" style="height: 100px;">
                                              </div><!-- form-group -->
                                                  <div class="form-group">
                                                    <div class="controls">

                                                        <input type="file" class="form-control"  name="form_sixteen"  onchange="document.getElementById('form_sixteen').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;">
                                                        @if ($errors->has('form_sixteen'))
                                                        <span class="help-block">
                                                          <strong>{{ $errors->first('form_sixteen') }}</strong>
                                                      </span>
                                                  @endif</div>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="doc-info mt-3">

                                              <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('bank_statement') ? ' has-error' : '' }}">
                                            <span>7.</span>
                                        <p>Last 12 months Bank Account Statements (self & business) *</p>
                                                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                  <img class="image-size"  src="{{config('app.baseURL')}}/images/preview.png" id="bank_statement1" alt="" style="height: 100px;">
                                              </div><!-- form-group -->
                                                  <div class="form-group">
                                                    <div class="controls">

                                                        <input type="file" class="form-control"  name="bank_statement"  onchange="document.getElementById('bank_statement1').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;">
                                                        @if ($errors->has('bank_statement'))
                                                        <span class="help-block">
                                                          <strong>{{ $errors->first('bank_statement') }}</strong>
                                                      </span>
                                                  @endif</div>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="doc-info mt-3">

                                              <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('cheque') ? ' has-error' : '' }}">
                                         <span>8.</span>
                                        <p>Processing Fee Cheque in favour of '……………………………' *</p>
                                                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                  <img class="image-size"  src="{{config('app.baseURL')}}/images/preview.png" id="cheque1" alt="" style="height: 100px;">
                                              </div><!-- form-group -->
                                                  <div class="form-group">
                                                    <div class="controls">

                                                        <input type="file" class="form-control"  name="cheque"  onchange="document.getElementById('cheque1').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;">
                                                        @if ($errors->has('cheque'))
                                                        <span class="help-block">
                                                          <strong>{{ $errors->first('cheque') }}</strong>
                                                      </span>
                                                  @endif</div>
                                              </div>
                                          </div>
                                      </div>
                                       <div class="doc-info mt-3">

                                              <div class="col-lg-12 col-md-12 col-sm-6 {{ $errors->has('property_document') ? ' has-error' : '' }}">
                                         <span>9.</span>
                                        <p>Photocopy of Title Documents of the Property, Approved Plan etc. *</p>
                                                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                  <img class="image-size"  src="{{config('app.baseURL')}}/images/preview.png" id="property_document1" alt="" style="height: 100px;">
                                              </div><!-- form-group -->
                                                  <div class="form-group">
                                                    <div class="controls">

                                                        <input type="file" class="form-control"  name="property_document"  onchange="document.getElementById('property_document1').src = window.URL.createObjectURL(this.files[0])" style="padding-top: 10px;">
                                                        @if ($errors->has('property_document'))
                                                        <span class="help-block">
                                                          <strong>{{ $errors->first('property_document') }}</strong>
                                                      </span>
                                                  @endif</div>
                                              </div>
                                          </div>
                                      </div>
                                       
                                       

                                    </div>

                                   @endif
                                   <!--  <div id="dropzone">
                                        <form class="dropzone needsclick" id="demo-upload" action="{{config('app.baseURL')}}/loan/postUploadDocument/{{$loan_id}}" enctype="multipart/form-data" method="POST">
                                            @csrf
                                            <div class="col-12 mt-2">
                                                
                                                <div class="dz-message needsclick">    
                                                    <img src="img/apply-loan/upload.png" alt="upload" name="document"> 
                                                    <h4 class="dz-button" type="button">Drag and drop an image</h4>
                                                    <p class="dz-custom-upload-text">or to <span>Browse</span> choose a file <br> PNG,JPG,PDF</p>
                                                </div>
                                            </div>
                                        </div> -->
                                    <!-- </form>  -->
                                    <!-- <form action="{{config('app.baseURL')}}/loan/postLoanApplySuccess" enctype="multipart/form-data" method="POST"> -->
                                        
                                        <div class="col-12 mt-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="agreeBox" required>
                                                <label class="form-check-label" for="agreeBox">I hereby agree that the information given is true, accurate and complete as of the date of this
                                                application submission. **</label>
                                            </div>
                                        </div>

                                        <input type="hidden" name="loan_id" value="{{$loan_id}}">

                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-md-12">
                                            <div class="nav-btn d-flex flex-wrap justify-content-between">
                                                <a href="personal"
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
                    url: '{{ url("loan/delete") }}',
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


@endsection