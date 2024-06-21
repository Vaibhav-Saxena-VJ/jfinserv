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
                                <!-- @csrf
                                <input type="hidden" name="loan_id" value="{{$loan_id}}"> -->
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
                                   
                                </div>
                                
                <div id="dropzone">
                    <form class="dropzone needsclick" id="demo-upload" action="{{config('app.baseURL')}}/loan/postUploadDocument/{{$loan_id}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="col-12 mt-2">
                        <!-- <input type="hidden" name="docinput" id="docinput"> -->
                        <div class="dz-message needsclick">    
                            <img src="img/apply-loan/upload.png" alt="upload" name="document"> 
                            <h4 class="dz-button" type="button">Drag and drop an image</h4>
                            <p class="dz-custom-upload-text">or to <span>Browse</span> choose a file <br> PNG,JPG,PDF</p>
                        </div>
                    </div>
                </div>
                 </form> 
                 <form action="{{config('app.baseURL')}}/loan/postLoanApplySuccess" enctype="multipart/form-data" method="POST">
                                                @csrf
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
                                            <a href="personal-details.html"
                                                class="prev-btn theme-btn-primary_alt theme-btn"><i
                                                    class="arrow_left"></i>previous
                                            </a>
                                            
                                            <button type="submit"
                                                class="theme-btn-primary_alt theme-btn">Submit</button>
                                            </form>
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
 </script>
 <script type="text/javascript">
      
 </script>
    
    
@endsection