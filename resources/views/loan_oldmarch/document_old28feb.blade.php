@extends('layouts.app')
@section('content')
<script>
    document.addEventListener("DOMContentLoaded", function() {
var dropzone = new Dropzone('#demo-upload', {
  // previewTemplate: document.querySelector('#dz-preview').innerHTML,
  parallelUploads: 2,
  thumbnailHeight: 120,
  thumbnailWidth: 120,
  maxFilesize: 3,
  filesizeBase: 1000,
  thumbnail: function(file, dataUrl) {
    if (file.previewElement) {
      file.previewElement.classList.remove("dz-file-preview");
      var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
      for (var i = 0; i < images.length; i++) {
        var thumbnailElement = images[i];
        thumbnailElement.alt = file.name;
        thumbnailElement.src = dataUrl;
        // alert(file);
        // console.log(dataUrl);

        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
        var formData = new FormData();
            formData.append('file', dataUrl);
            formData.append('_token', '{{ csrf_token() }}');


        $.ajax({
                type: 'POST',
                url: "{{config('app.baseURL')}}/loan/postUploadDocument",
                data: formData,
                processData: false,
                contentType: false,
                success: function(data){
                    if (data != 0) {
                      alert(data);
                      $("#docinput").val(data);

                    }
                },
                error: function(error) {
                    console.log(error);
                    
                }
            });


      }
      setTimeout(function() { file.previewElement.classList.add("dz-image-preview"); }, 1);
    }
  }

});

// Now fake the file upload, since GitHub does not handle file uploads
// and returns a 404

var minSteps = 6,
    maxSteps = 60,
    timeBetweenSteps = 100,
    bytesPerStep = 100000;

dropzone.uploadFiles = function(files) {
  var self = this;

  for (var i = 0; i < files.length; i++) {

    var file = files[i];
    totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));

    for (var step = 0; step < totalSteps; step++) {
      var duration = timeBetweenSteps * (step + 1);
      setTimeout(function(file, totalSteps, step) {
        return function() {
          file.upload = {
            progress: 100 * (step + 1) / totalSteps,
            total: file.size,
            bytesSent: (step + 1) * file.size / totalSteps
          };

          self.emit('uploadprogress', file, file.upload.progress, file.upload.bytesSent);
          if (file.upload.progress == 100) {
            file.status = Dropzone.SUCCESS;
            self.emit("success", file, 'success', null);
            self.emit("complete", file);
            self.processQueue();
            //document.getElementsByClassName("dz-success-mark").style.opacity = "1";
          }
        };
      }(file, totalSteps, step), duration);
    }
  }
}
});
</script>

<style  type="text/css"> 
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
    padding: 60px 0;
    border: 2px dashed #edf2f9;
    background-color: #f5f7fa;
    border-radius: 20px;
    transition: all 0.3s ease-in;
}
/*.dropzone .dz-message .dz-button {
    font-family: "Poppins", sans-serif;
    font-weight: 600;
    color: var(--theme-title-color);
    border: none;
    padding: 0;
    cursor: pointer;
    outline: inherit;
    margin-top: 10px;
}
.dropzone.dz-clickable .dz-message * {
    cursor: pointer;
}
.dropzone.dz-clickable * {
    cursor: default;
}
.dropzone .dz-message .dz-custom-upload-text span {
    font-family: "Roboto", sans-serif;
    font-weight: 500;
    color: var(--primary-color);
    text-decoration: underline;
}
.dropzone.dz-clickable .dz-message * {
    cursor: pointer;
}
.dropzone.dz-clickable * {
    cursor: default;
}
.dropzone .dz-preview .dz-success-mark, .dropzone .dz-preview .dz-error-mark {
    pointer-events: none;
    opacity: 0;
    z-index: 0;
    position: absolute;
    display: none;
    top: 50%;
    left: 50%;
    margin-left: -27px;
    margin-top: -27px;
}*/
/*.dropzone .dz-preview.dz-error .dz-error-message {
    display: none;
}
.dropzone .dz-preview .dz-error-message {
    pointer-events: none;
    z-index: 0;
    position: absolute;
    display: none;
    display: none;
    opacity: 0;
    -webkit-transition: opacity 0.3s ease;
    -moz-transition: opacity 0.3s ease;
    -ms-transition: opacity 0.3s ease;
    -o-transition: opacity 0.3s ease;
    /* transition: opacity 0.3s ease; */
    border-radius: 8px;
    font-size: 13px;
    top: 130px;
    left: -10px;
    width: 140px;
    background: transparent;
    padding: 0.5em 1.2em;
    color: #f9fafb;
    cursor: none;
}
.dz-error-message{
    display: none;
    z-index: 0;
}
.data-dz-errormessage{
    display: none;
}*/ 
/*.dropzone {
    background: white;
    border-radius: 5px;
    border: 2px dashed rgb(0, 135, 247);
    border-image: none;
    max-width: 500px;
    margin-left: auto;
    margin-right: auto;
}*/
</style>   
<link  href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css"  rel="stylesheet">  

  <script  src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>

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
                                        Documants
                                        Upload
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="loan-details-widget bg_white">
                            <!-- <form action="{{config('app.baseURL')}}/loan/postAddDocument" enctype="multipart/form-data" method="POST" id="form1" name="form1"> -->
                                @csrf
                                <input type="hidden" name="loan_id" value="{{$loan_id}}">
                                <!-- self employeed and salaried employees -->
                                <div class="col-md-12">
                                    <div class="form-check form-check-inline me-5 active selfTab">
                                        <input class="form-check-input" type="radio" name="selfTab" id="selfTab" value="self" onclick="show1();">
                                        <label class="form-check-label" for="self">Self Employed/Professionals</label>
                                    </div>
                                    <div class="form-check form-check-inline me-5">
                                        <input class="form-check-input" type="radio" name="salariedTab" id="salariedTab" value="salaried" onclick="show2();">
                                        <label class="form-check-label" for="married">Salaried Employees </label>
                                    </div>
                                </div>
                                <div class="row gy-4">
                                    <div class="self selectt" id="self">
                                    <div class="col-12">
                                        <!-- <div class="doc-info">
                                            <span>1.</span>
                                            <p>Selfie Photo. Your Personal Photo. The photo must be done by yourself.
                                                The photo must show your face and your both shoulders. (Please attach
                                                file )</p>
                                        </div> -->
                                        <div class="doc-info mt-3">
                                            <span>1.</span>
                                            <p> Duly filled Application Form with Photograph *</p>
                                        </div>
                                        <div class="doc-info mt-3">
                                            <span>2.</span>
                                            <p>Age Proof (PAN Card, Passport, Any other Certificate from Statutory Authority) Residence Proof (Passport, Driving License, Telephone Bill, Ration Card, Election Card, Any other Certificate from Statutory Authority)*</p>
                                        </div>
                                        <div class="doc-info mt-3">
                                            <span>3.</span>
                                            <p>Educational Qualification Proof - Latest Degree (for professionals) *</p>
                                        </div>
                                        <div class="doc-info mt-3">
                                            <span>4.</span>
                                            <p>Certificate & Proof of business existence along with Business Profile*</p>
                                        </div>
                                        <div class="doc-info mt-3">
                                            <span>5.</span>
                                            <p>Last 3 years Income Tax returns (self and business) with Profit & Loss Account & Balance Sheets duly certified/audited by a Chartered Accountant *</p>
                                        </div>
                                        <div class="doc-info mt-3">
                                            <span>6.</span>
                                            <p>Last 12 months Bank Account Statements (self & business) *</p>
                                        </div>
                                        <div class="doc-info mt-3">
                                            <span>7.</span>
                                            <p>Processing Fee Cheque in favour of '……………………………' *</p>
                                        </div>
                                        <div class="doc-info mt-3">
                                            <span>8.</span>
                                            <p>Photocopy of Title Documents of the Property, Approved Plan etc. *</p>
                                        </div>
                                         
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
                                <div class="salaried selectt" id="salaried">
                                    <div class="col-12 mt-4">
                                        <!-- <div class="doc-info">
                                            <span>1.</span>
                                            <p>Selfie Photo. Your Personal Photo. The photo must be done by yourself.
                                                The photo must show your face and your both shoulders. (Please attach
                                                file )</p>
                                        </div> -->
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="doc-info">
                                            <span>1.</span>
                                            <p>Duly filled Application Form with Photograph * </p>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="doc-info">
                                            <span>2.</span>
                                            <p>Age Proof (PAN Card, Passport, Any other Certificate from Statutory Authority) *</p>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="doc-info">
                                            <span>3.</span>
                                            <p>Residence Proof (Passport, Driving License, Telephone Bill, Ration Card, Election Card, Any other Certificate from Statutory Authority) * </p>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="doc-info">
                                            <span>4.</span>
                                            <p>Educational Qualification Proof (Latest Degree) * </p>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="doc-info">
                                            <span>5.</span>
                                            <p>Latest Salary-slips for last 3 months * </p>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="doc-info">
                                            <span>6.</span>
                                            <p>Form 16 for last 2 years * </p>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="doc-info">
                                            <span>7.</span>
                                            <p>Last 12 months Bank Statements (salary account) * </p>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="doc-info">
                                            <span>8.</span>
                                            <p>Processing Fee Cheque in favour of ‘…………………………….’  * </p>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="doc-info">
                                            <span>9.</span>
                                            <p>Photocopy of Title Documents of the Property, Approved Plan etc. * </p>
                                        </div>
                                    </div>
                                    <!-- <div class="col-12">
                                        <script type="text/javascript" src="{{config('app.baseURL')}}/js/dropzone.min.js"></script>
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
                                <!-- <div class="file-drop-area"><span class="file-message">Drop file to upload</span> <input class="file-input" type="file" multiple>
                                </div> -->
                                <div id="dropzone">
    <form class="dropzone needsclick" id="demo-upload" action="{{config('app.baseURL')}}/loan/postUploadDocument" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="col-12 mt-5">
        <!-- <input type="hidden" name="docinput" id="docinput"> -->
        <div class="dz-message needsclick">    
            <img src="img/apply-loan/upload.png" alt="upload" name="document"> 
            <h4 class="dz-button" type="button">Drag and drop an image</h4>
            <p class="dz-custom-upload-text">or to <span>Browse</span> choose a file <br> PNG,JPG,PDF</p>
        </div>
    </div>
    
    <!-- </form> -->
  </div>
  <div class="col-12 mt-4">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="agreeBox">
            <label class="form-check-label" for="agreeBox">I hereby agree that the information given is true, accurate and complete as of the date of this
            application submission. **</label>
        </div>
    </div>
    <input type="text" name="docinput" id="docinput" value="">
                                <!-- <div class="col-12 mt-5">
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
                               
                                <div class="row mt-5">
                                    <div class="col-md-12">
                                        <div class="nav-btn d-flex flex-wrap justify-content-between">
                                            <a href="personal-details.html"
                                                class="prev-btn theme-btn-primary_alt theme-btn"><i
                                                    class="arrow_left"></i>previous
                                            </a>
                                            <button type="submit"
                                                class="theme-btn-primary_alt theme-btn">Submit</button>
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
    <!-- <script type="text/javascript">
        Dropzone.options.dropzone =
        {
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
               return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 5000,
            success: function(file, response) 
            {
                console.log(response);
            },
            error: function(file, response)
            {
               return false;
            }
        };
    </script> -->
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
        //$("#upload").on("click", function() {
         // $.ajax({
         //        type: 'POST',
         //        url: url,
         //        data: formData,
         //        processData: false,
         //        contentType: false,
         //        success: function(data) {
         //            if (data != 0) {
                      // alert(data);
                     
     //                    $("#dropzone").attr("src", base64); 

     //                    $("#docinput").val(data);

     //                } else {
     //                    $("#profile-pic").attr("src","/images/icon-cam.png"); 
     //                    console.log(data['profile_picture']);
     //                }
     //            },
     //            error: function(error) {
     //                console.log(error);
     //                $("#profile-pic").attr("src","/images/icon-cam.png"); 
     //            }
     //        });
     // });
    </script>
    
 <!--  <script type="text/javascript" src="{{config('app.baseURL')}}/js/dropzone-script.js"></script> 

    <script type="text/javascript" src="{{config('app.baseURL')}}/js/dropzone.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script> -->
    
    
    @endsection