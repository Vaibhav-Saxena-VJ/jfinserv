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
.loan-details-widget .nice-select .list {
    /*width: 100%;*/
    height: 50vh !important;
    overflow-y: auto;
}

.loan-details-widget .nice-select {
    width: 100%;

}


.pb-110 {
    padding-bottom: 350px;
}
.header-menu.header-menu-2 .menu > .nav-item > .nav-link {
     color: #000; 
}
.header-menu.header-menu-2 .menu > .nav-item > .nav-link {
    color: #000;
}
@media (min-width: 992px){
.navbar-expand-lg {
    flex-wrap: nowrap;
    justify-content: flex-start;
    background-color: white;
}
}
.pb-50{
    padding-bottom:70px !important;
}
</style>
    <main>
        <!-- BreadCrumb start -->
        <section class="breadcrumb-area">
            <div class="breadcrumb-widget  pt-200 pb-50" style="background-image: url(http://jfinserv.com/images/apply-now.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb-content pt-85">
                                <h1>Loan details</h1>
                                <ul>
                                    <li><a href="{{config('app.baseURL')}}">home</a></li>
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
                                <li class="active mt-0"><a href="javascript:void(0);"><div class="number"><i class="icon_check"></i> <span>1</span></div>Loan Details</a></li>
                                <li class="active mt-0"><a href="javascript:void(0);"><div class="number"><i class="icon_check"></i> <span>2</span></div>Personal Details</a></li>
                                <li><a href="javascript:void(0);"><div class="number"><i class="icon_check"></i> <span>3</span></div>Documents Upload</a></li>
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
                                            <img src="https://jfinserv.com/images/loginhome.png" alt="icon" style="width: 50px;">
                                            <img src="https://jfinserv.com/images/loginhome.png" alt="icon" style="width: 50px;">
                                            <span>Home Loan</span>
                                        </label>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <input class="select-loan-type-radio" name="select_loan_type" type="radio" id="Mortgage_loan" value="Mortgage Loan">
                                        <label for="Mortgage_loan" class="loan-type">
                                            <img src="https://jfinserv.com/images/loginmortgae.png" alt="icon" style="width: 50px;">
                                            <img src="https://jfinserv.com/images/loginmortgae.png" alt="icon" style="width: 50px;">
                                            <span>Mortgage Loan</span>
                                        </label>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <input class="select-loan-type-radio" name="select_loan_type" type="radio" id="project_loan" value="Project Loan">
                                        <label for="project_loan" class="loan-type">
                                            <img src="https://jfinserv.com/images/loginproject.png" alt="icon" style="width: 50px;">
                                             <img src="https://jfinserv.com/images/loginproject.png" alt="icon" style="width: 50px;">
                                            <span>Project Loan</span>
                                        </label>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <input class="select-loan-type-radio" name="select_loan_type" type="radio" id="term_loan" value="Term Loan">
                                        <label for="term_loan" class="loan-type">
                                            <img src="https://jfinserv.com/images/terms.png" alt="icon" style="width: 50px;">
                                            <img src="https://jfinserv.com/images/terms.png" alt="icon" style="width: 50px;">
                                            <span>Term Loan</span>
                                        </label>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <input class="select-loan-type-radio" name="select_loan_type" type="radio" id="Working_capital" value="Working Capital">
                                        <label for="Working_capital" class="loan-type">
                                            <img src="https://jfinserv.com/images/capital.png" alt="icon" style="width: 50px;">
                                             <img src="https://jfinserv.com/images/capital.png" alt="icon" style="width: 50px;">
                                            <span>Working Capital</span>
                                        </label>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <input class="select-loan-type-radio" name="select_loan_type" type="radio" id="overdraft_facility" value="Overdraft Facility">
                                        <label for="overdraft_facility" class="loan-type">
                                            <img src="https://jfinserv.com/images/loandraft.png" alt="icon" style="width: 50px;">
                                            <img src="https://jfinserv.com/images/loandraft.png" alt="icon" style="width: 50px;">
                                            <span>Overdraft Facility</span>
                                        </label>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <input class="select-loan-type-radio" name="select_loan_type" type="radio" id="new_machinary_loan" value="New Machinary Loan">
                                        <label for="new_machinary_loan" class="loan-type">
                                            <img src="https://jfinserv.com/images/money.png" alt="icon" style="width: 50px;">
                                             <img src="https://jfinserv.com/images/money.png" alt="icon" style="width: 50px;">
                                            <span>Machinary Loan</span>
                                        </label>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <input class="select-loan-type-radio" name="select_loan_type" type="radio" id="Buisness_loan" value="Business Loan">
                                        <label for="Buisness_loan" class="loan-type">
                                            <img src="https://jfinserv.com/images/loans.png" alt="icon" style="width: 50px;">
                                             <img src="https://jfinserv.com/images/loans.png" alt="icon" style="width: 50px;">
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
                                        <label class="label" for="loan-amount">Your loan amount</label>
                                        <div class="input-field">
                                            <span>₹ </span>
                                            <input type="number" id="loan_amount" value="{{$loan_amount}}" name="loan_amount" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label class="label mb-4">Loan duration</label>

                                         <select name="select_loan_type" id="select-loan-type">
                                                <option>Select loan duration</option>
                                                
                                                 <option value="1">1 year</option>
                                                <option value="2">2 year</option>
                                                <option value="3">3 year</option>
                                                <option value="4">4 year</option>
                                                <option value="5">5 year</option>
                                                <option value="6">6 year</option>
                                                <option value="7">7 year</option>
                                                <option value="8">8 year</option>
                                                <option value="9">9 year</option>
                                                <option value="10">10 year</option>
                                                <option value="11">11 year</option>
                                                <option value="12">12 year</option>
                                                <option value="13">13 year</option>
                                                <option value="14">14 year</option>
                                                <option value="15">15 year</option>
                                                <option value="16">16 year</option>
                                                <option value="17">17 year</option>
                                                <option value="18">18 year</option>
                                                <option value="19">19 year</option>
                                                <option value="20">20 year</option>
                                                <option value="21">21 year</option>
                                                <option value="22">22 year</option>
                                                <option value="23">23 year</option>
                                                <option value="24">24 year</option>
                                                <option value="25">25 year</option>
                                                <option value="26">26 year</option>
                                                <option value="27">27 year</option>
                                                <option value="28">28 year</option>
                                                <option value="29">29 year</option>
                                                <option value="30">30 year</option>
                                                <option value="31">31 year</option>
                                                <option value="32">32 year</option>
                                                <option value="33">33 year</option>
                                                <option value="34">34 year</option>
                                                <option value="35">35 year</option>
                                                <option value="36">36 year</option>
                                                <option value="37">37 year</option>
                                                <option value="38">38 year</option>
                                                <option value="39">39 year</option>
                                                <option value="40">40 year</option>
                                                <option value="41">41 year</option>
                                                <option value="42">42 year</option>
                                                <option value="43">43 year</option>
                                                <option value="44">44 year</option>
                                                <option value="45">45 year</option>
                                                <option value="46">46 year</option>
                                                <option value="47">47 year</option>
                                                <option value="48">48 year</option>
                                                <option value="49">49 year</option>
                                                <option value="50">50 year</option>
                                            </select>


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
                                            <button class="theme-btn-primary_alt theme-btn next-btn" type="submit">Save & Next<i class="arrow_right"></i></button>
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
         
          $("#select-loan-type option[value={{$loan_new_type}}]").prop('selected',true);
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