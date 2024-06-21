@extends('layouts.app')
@section('content')
<style type="text/css">
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
.dropzone .dz-message .dz-button {
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
    display: block;
    top: 50%;
    left: 50%;
    margin-left: -27px;
    margin-top: -27px;
}
.dropzone .dz-preview .dz-error-message {
    pointer-events: none;
    z-index: 0;
    position: absolute;
    display: block;
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
                            <form action="{{config('app.baseURL')}}/loan/postAddDocument" enctype="multipart/form-data" method="POST">
                                @csrf
                                <input type="hidden" name="loan_id" value="{{$loan_id}}">
                                <div class="row gy-4">
                                    <div class="col-12">
                                        <div class="doc-info">
                                            <span>1.</span>
                                            <p>Selfie Photo. Your Personal Photo. The photo must be done by yourself.
                                                The photo must show your face and your both shoulders. (Please attach
                                                file )</p>
                                        </div>
                                        <div class="doc-info mt-3">
                                            <span>2.</span>
                                            <p>ID Card. Valid Government ID Card. Front and Back side. Original ID Card.
                                                Full photo. All parts of the ID card must be shown. The four corners of
                                                the ID card must show on the photo. ID must be original and valid. ID
                                                card must be very clear. (Please attach file) *</p>
                                        </div>
                                    </div>
                                    <div class="col-12">

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
                                    </div>
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
    <script type="text/javascript">
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
    </script>
    <script type="text/javascript" src="{{config('app.baseURL')}}/js/dropzone.min.js"></script>
     <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script> -->
    
    @endsection