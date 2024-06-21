@extends('layouts.app')
@section('content')
<style type="text/css">
/*    span.res_message{
    font-style: normal;
font-weight: 600;
font-size: 16px;
line-height: 23px;
color: #818e8f;
opacity: 0.85;
}*/
/*#msg_div{
    margin-top: 12px;
}*/
</style>
    <main>
        <!-- BreadCrumb start -->
        <section class="breadcrumb-area">
            <div class="breadcrumb-widget  pt-200 pb-110" style="background-image: url(http://localhost/finance/assets/img/breadcrumb/bg-1.png);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb-content pt-85">
                                <h1>Loan deatails</h1>
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

        <!-- Loan details start -->
        <section class="loan-deatils-area bg_disable pt-130 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="stepper-widget mt-sm-5 px-3 px-sm-0">
                            <ul>
                                <li class="active mt-0"><a href="loan-details.html">
                                        <div class="number"><i class="icon_check"></i> <span>1</span></div> Loan
                                        Details
                                    </a>
                                </li>
                                <li class=""><a href="personal-details.html">
                                        <div class="number"><i class="icon_check"></i> <span>2</span></div>
                                        Personal
                                        Details
                                    </a>
                                </li>
                                <li><a href="document-upload.html">
                                        <div class="number"><i class="icon_check"></i> <span>3</span></div>
                                        Documants
                                        Upload
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="loan-details-widget bg_white">
                            <form method="POST" action="loan/addloan">
                                @csrf
                               
                                <div class="row mb-35 gy-4">
                                    <!-- <div class="col-lg-3 col-md-6">
                                        <input class="select-loan-type-radio" name="select_loan_type" type="radio" id="Personal_loan" value="Personal Loan">
                                        <label for="Personal_loan" class="loan-type">
                                            <img src="http://localhost/finance/assets/img/apply-loan/icon-4.1.png" alt="icon">
                                            <img src="http://localhost/finance/assets/img/apply-loan/icon-4.2.png" alt="icon">
                                            <span>Loan</span>
                                        </label>

                                    </div> -->
                                    <div class="col-lg-3 col-md-6">
                                        <input class="select-loan-type-radio" name="select_loan_type" type="radio" id="Home_loan" value="Home Loan">
                                        <label for="Home_loan" class="loan-type">
                                            <img src="{{config('app.baseURL')}}/assets/img/apply-loan/icon-5.1.png" alt="icon">
                                            <img src="{{config('app.baseURL')}}/assets/img/apply-loan/icon-5.2.png" alt="icon">
                                            <span>Home Loan</span>
                                        </label>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <input class="select-loan-type-radio" name="select_loan_type" type="radio" id="Mortgage_loan" value="Mortgage Loan">
                                        <label for="Mortgage_loan" class="loan-type">
                                            <img src="{{config('app.baseURL')}}/assets/img/apply-loan/icon-5.1.png" alt="icon">
                                            <img src="{{config('app.baseURL')}}/assets/img/apply-loan/icon-5.2.png" alt="icon">
                                            <span>Mortgage Loan</span>
                                        </label>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <input class="select-loan-type-radio" name="select_loan_type" type="radio" id="project_loan" value="Project Loan">
                                        <label for="project_loan" class="loan-type">
                                            <img src="{{config('app.baseURL')}}/assets/img/apply-loan/icon-5.1.png" alt="icon">
                                            <img src="{{config('app.baseURL')}}/assets/img/apply-loan/icon-5.2.png" alt="icon">
                                            <span>Project Loan</span>
                                        </label>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <input class="select-loan-type-radio" name="select_loan_type" type="radio" id="term_loan" value="Term Loan">
                                        <label for="term_loan" class="loan-type">
                                            <img src="{{config('app.baseURL')}}/assets/img/apply-loan/icon-5.1.png" alt="icon">
                                            <img src="{{config('app.baseURL')}}/assets/img/apply-loan/icon-5.2.png" alt="icon">
                                            <span>Term Loan</span>
                                        </label>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <input class="select-loan-type-radio" name="select_loan_type" type="radio" id="Working_capital" value="Working Capital">
                                        <label for="Working_capital" class="loan-type">
                                            <img src="{{config('app.baseURL')}}/assets/img/apply-loan/icon-6.1.png" alt="icon">
                                            <img src="{{config('app.baseURL')}}/assets/img/apply-loan/icon-6.2.png" alt="icon">
                                            <span>Working Capital</span>
                                        </label>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <input class="select-loan-type-radio" name="select_loan_type" type="radio" id="overdraft_facility" value="Overdraft Facility">
                                        <label for="overdraft_facility" class="loan-type">
                                            <img src="{{config('app.baseURL')}}/assets/img/apply-loan/icon-6.1.png" alt="icon">
                                            <img src="{{config('app.baseURL')}}/assets/img/apply-loan/icon-6.2.png" alt="icon">
                                            <span>Overdraft Facility</span>
                                        </label>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <input class="select-loan-type-radio" name="select_loan_type" type="radio" id="new_machinary_loan" value="New Machinary Loan">
                                        <label for="new_machinary_loan" class="loan-type">
                                            <img src="{{config('app.baseURL')}}/assets/img/apply-loan/icon-6.1.png" alt="icon">
                                            <img src="{{config('app.baseURL')}}/assets/img/apply-loan/icon-6.2.png" alt="icon">
                                            <span>Machinary Loan</span>
                                        </label>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <input class="select-loan-type-radio" name="select_loan_type" type="radio" id="Buisness_loan" value="Business Loan">
                                        <label for="Buisness_loan" class="loan-type">
                                            <img src="{{config('app.baseURL')}}/assets/img/apply-loan/icon-6.1.png" alt="icon">
                                            <img src="{{config('app.baseURL')}}/assets/img/apply-loan/icon-6.2.png" alt="icon">
                                            <span>Business Loan</span>
                                        </label>
                                    </div>
                                    
                                </div>
                                <div class="row gy-4">
                                    <!-- <div class="col-md-6">
                                        <label class="label" for="loandetails01">Choose your financing type</label>
                                        <select class="w-100" id="loandetails01" name="loandetails01" required>
                                            <option value="Debt-Financing">Debt Financing</option>
                                            <option value="Equity-Finance">Equity Finance</option>
                                        </select>
                                    </div> -->
                                    <!-- <div class="col-md-6">
                                        <label class="label" for="loandetails02">Choose your preferred bank service
                                        </label>
                                        <select class=" w-100" id="loandetails02" name="loandetails02" required>
                                            <option value="Individual-Banking">Individual Banking</option>
                                            <option value="Business-Banking">Business Banking</option>
                                            <option value="Digital-Banking">Digital Banking</option>
                                            <option value="Loans">Loans</option>
                                        </select>
                                    </div> -->
                                    <div class="col-md-12">
                                        <label class="label" for="loan-amount">Yout loan amount</label>
                                        <div class="input-field">
                                            <span>₹ </span>
                                            <input type="number" id="loan_amount" value="{{$loan_amount}}" name="loan_amount" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label class="label mb-4">Laon duration</label>

                                        <div class="form-check form-check-inline mr-30">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="12">
                                            <label class="form-check-label" for="inlineRadio1">12 months</label>
                                        </div>
                                        <div class="form-check form-check-inline mr-30">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="18">
                                            <label class="form-check-label" for="inlineRadio2">18 months</label>
                                        </div>

                                        <div class="form-check form-check-inline mr-30">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="24">
                                            <label class="form-check-label" for="inlineRadio3">24 months</label>
                                        </div>

                                        <div class="form-check form-check-inline mr-30">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="36">
                                            <label class="form-check-label" for="inlineRadio4">36 months</label>
                                        </div>
                                        <div class="form-check form-check-inline mr-30">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="48">
                                            <label class="form-check-label" for="inlineRadio5">48 months</label>
                                        </div>

                                    </div>
                                    <!-- <div class="col-md-12">
                                        <label class="label" for="loandetails01">Do You Have Any Referal Code</label>
                                    
                                        <div class="row col-md-12">
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <input type="text" id="refered_by" name="refered_by" class="form-control">
                                                </div>                                        
                                            </div>
                                            <div class="col-md-7" id="referaldiv">
                                                <button class="theme-btn-primary_alt theme-btn referal-btn" type="button" id="referal">Apply</button>
                                            </div>
                                            <div class="message col-md-7" id="msg_div">

                                            </div>
                                            
                                        </div>
                                    </div> -->
                                </div>
                                
                                    

                               
                                <div class="row  mt-60">
                                    <div class="col-md-12">
                                        <div class="nav-btn d-flex justify-content-end">
                                            <button class="theme-btn-primary_alt theme-btn next-btn" type="submit">next<i class="arrow_right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Loan details end -->
    </main>

    <script type="text/javascript">
         $(document).ready(function (e) {
         $("input[value='{{$loan_type}}']").prop("checked",true);
     });
    </script>
<!-- <script type="text/javascript">
    $(document).ready(function (e) {
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$('#referal').click(function(e){ 
e.preventDefault();
var formData = new FormData();
var refered_by=$('#refered_by').val();
 formData.append('refered_by', refered_by);
 formData.append('_token', '{{ csrf_token() }}');
$.ajax({
type:'POST',
url: "{{ url('verifycode')}}",
data: formData,
cache:false,
contentType: false,
processData: false,
 error: function (request, error) {
        console.log(arguments);
        alert(" Can't do because: " + error);
    },
    success: function (data) {
        if (data) {
            document.getElementById('referal').style.visibility='hidden';
            $('#msg_div').append('<span class="res_message" id="res_message" name="res_message">Referal code Match.</span>');
            
        }
        
    },


error: function(data){
    document.getElementById('refered_by').value="";
    $('#msg_div').append('<span class="res_message" id="res_message" name="res_message">Referal code Not Match, Please Provide Valid Referal Code.</span>');


}
});
});
});

</script> -->
@endsection