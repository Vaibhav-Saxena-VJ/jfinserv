<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'PublicController@getHome');


Route::get('about-us', 'PublicController@getAboutUs');
Route::get('contact', 'PublicController@getContact');
Route::post('contact', 'PublicController@postContact');
Route::get('personal-loan','PublicController@getPersonalLoan');

Route::get('loandocument', 'PublicController@getDocumentation');
Route::get('blog', 'PublicController@getBlogs');
Route::get('blog/{url}', 'PublicController@getBlogDetails');
Route::get('referral-program', 'PublicController@getReferEarn');
Route::post('refer-earn', 'PublicController@postReferEarn');
Route::get('get-started', 'PublicController@getStarted');
Route::post('get-started', 'PublicController@postGetStarted');
Route::get('apply-now', ['middleware' =>'auth', 'uses'=>'PublicController@getApplyNow']);
Route::get('personal', 'PublicController@getpersonal');
Route::get('document', 'PublicController@getdocument');
Route::post('apply-now', 'PublicController@postApplyNow');
Route::get('referral-program', 'PublicController@getReferEarn');
// Route::get('referral-program/confirmed', 'PublicController@refferalFriend');
Route::post('search', 'PublicController@search');
Route::post('passwordreset', 'PublicController@passwordreset');

Route::post('postAssignAssociate', 'AdminController@postAssignAssociate');

Route::post('change-forgot-password', 'PublicController@changeforgotpassword');

Route::get('loandraft/delete/{id}', 'PublicController@getdeleteDraft');

Route::get('admin/sanctioncalculator', 'AdminController@getSanctionCalculator');

Route::get('admin/invoice/add', 'AdminController@invoiceadd');
Route::post('admin/invoice/save', 'AdminController@invoicesave');

Route::post('admin/calculate/save', 'AdminController@calculatesave');
Route::post('admin/calculate/editsave', 'AdminController@calculateeditsave');
Route::get('admin/invoice', 'AdminController@invoice');
Route::get('admin/invoice/allData', 'AdminController@invoiceData');
Route::get('admin/invoice/{id}', 'AdminController@invoiceedit');
Route::post('admin/invoice/editsave', 'AdminController@editsave');

Route::get('admin/sanctioncalculatorhistory', 'AdminController@getSanctionCalculatorHistory');
Route::get('admin/sanctioncalculatorhistoryAll', 'AdminController@getAllSanctionCalculatorHistory');

Route::post('admin/add_sanction_calculator', 'AdminController@postAddSanctionCalculator');

Route::get('admin/sanctioncalculator/{id}', 'AdminController@getEditSanctionCalculator');
Route::post('admin/sanctioncalculator/{id}', 'AdminController@postEditSanctionCalculator');

//forgot pasword
Route::get('forgot_password', 'Auth\ForgotPasswordController@showResetPasswordForm');

Route::get('claim/{id}', 'PublicController@getClaim');

Route::post('/propertyenquiry','PublicController@addPropertyEnquiry');

Route::get('properties', 'PublicController@getProperties');
Route::get('property/{id}', 'PublicController@getPropertyDetail');

//Registration
Route::get('Auth/registeruser', 'Auth\RegisterController@registerUser');
Route::get('Auth/registerpartner', 'Auth\RegisterController@registerPartner');
Route::post('newpartnerregister', 'Auth\RegisterController@newRegisterPartner');
Route::post('newregister', 'Auth\RegisterController@newRegisterUser');
Route::post('otpverify', 'Auth\RegisterController@otpVerify');
Route::post('resendotp', 'Auth\RegisterController@otpResend');
//Loan details Add
Route::post('/verifycode','LoanController@verify_code');
Route::post('loan/addloan', 'LoanController@postAddLoan');
Route::get('loan/personaldetail/{id}', 'LoanController@getPersonalDetail');
Route::post('loan/personal-detail/matched-contact/referal', 'LoanController@postPersonalDetailMatchContactReferel');

Route::post('loan/postAddPersonalDetail', 'LoanController@postAddPersonal');
Route::get('loan/getdocuments/{id}', 'LoanController@getDocuments');
Route::post('loan/postUploadDocument/{id}','LoanController@postUploadDocument');
Route::post('loan/postLoanApplySuccess', 'LoanController@postLoanApplySuccess');
Route::post('loan/delete', 'LoanController@destory');

Route::get('terms-condition', 'PublicController@getTermsCondition');
Route::get('privacy-policy', 'PublicController@getPrivacyPolicy');
Route::get('cookie-policy', 'PublicController@getCookiePolicy');

Route::get('services','PublicController@getHomeLoan');
Route::get('myrefercode', 'AdminController@myrefercode');

Route::get('home-loan','PublicController@getHomeLoans');
Route::get('contract-loan','PublicController@getMortgageLoan');
Route::get('project-loan','PublicController@getProjectLoan');
Route::get('overdraft-facility','PublicController@getOverdraftFacility');
Route::get('lease-rental-discounting','PublicController@getLeaseRentalDiscounting');
Route::get('msme-loan','PublicController@getMSMELoan');
Route::get('thankyou','PublicController@getThankYou');
Route::post('thankyou','PublicController@postThanks');

// Route::get('change-password', 'AdminController@changepassword');
// Route::post('change-password', 'AdminController@changepassword');


//---------------------------------------------------------------

Route::group(['prefix' => 'insurance'], function(){
	Route::get('term-insurance','PublicController@getTermInsurance');
	Route::post('term-insurance','PublicController@postTermInsurance');
	Route::get('health-insurance','PublicController@getHealthInsurance');
	Route::post('health-insurance','PublicController@postHealthInsurance');
	
});
Route::get('stocks','PublicController@getStocks');
Route::group(['prefix' => 'investment'], function(){
	Route::get('mutual-funds','PublicController@getMutualFunds');
	Route::post('mutual-funds','PublicController@postMutualFunds');
	Route::get('equity-funds/{name}','PublicController@getEquityFunds');
	
});


Route::group(['prefix' => 'loans'], function(){
	Route::get('home-loan','PublicController@getHomeLoan');
	// Route::get('personal-loan','PublicController@getPersonalLoan');
	// Route::post('loan-enquiry/{id}','PublicController@postLoan');
	
});


Auth::routes([ 'register' => false ]);

// --------------------------------------------------------
//MyAccount

    Route::get('bank-details', ['middleware' =>'auth', 'uses'=>'PublicController@getBankDetails']);
    Route::post('bank-details', ['middleware' =>'auth', 'uses'=>'PublicController@postBankDetails']);
    
    Route::get('change-password',['middleware' =>'auth', 'uses'=>'PublicController@getChangePassword']);
    Route::post('change-password',['middleware' =>'auth', 'uses'=>'PublicController@postChangePassword']);

    Route::post('redeem', ['middleware' =>'auth', 'uses'=>'PublicController@postRedeem']);


	Route::get('myprofile', ['middleware' =>'auth', 'uses'=>'AdminController@getAccountInfo']);

	Route::post('sendmessage', ['middleware' =>'auth', 'uses'=>'AdminController@postSendMessage']);
	
	Route::get('edit-myprofile', ['middleware' =>'auth', 'uses'=>'AdminController@getEditMyprofile']);
	
	Route::post('myprofile', ['middleware' =>'auth', 'uses'=>'AdminController@postAccountInfo']);
	
	//read Notification
	Route::get('readnotification/{id}', ['middleware' =>'auth', 'uses'=>'AdminController@postReadUserNotification']);
	Route::get('professional-detail', ['middleware' =>'auth', 'uses'=>'AdminController@getProfessionalDetail']);
	Route::post('professional-detail', ['middleware' =>'auth', 'uses'=>'AdminController@postProfessionalDetail']);
	Route::get('edit-professional-detail', ['middleware' =>'auth', 'uses'=>'AdminController@getEditProfessionalDetail']);
	Route::get('mynotifications',['middleware' =>'auth', 'uses'=>'AdminController@getNotificationDetail']);
	
	//Loan Details
	Route::get('accountLoanDetails/{id}', ['middleware' =>'auth', 'uses'=>'AdminController@getAccountLoanDetails']);
	Route::get('delete_userdocument/{id}', ['middleware' =>'auth', 'uses'=>'AdminController@postDeleteUserDoc']);
	//Document Pending
	Route::get('myloandetails/{id}', ['middleware' =>'auth', 'uses'=>'AdminController@getMyLoanInfo']);
	Route::get('myloandetails/all/{id}', ['middleware' =>'auth', 'uses'=>'AdminController@getAllMyLoanInfo']);
	//Loan InProcess
	Route::get('myloaninprocess/{id}', ['middleware' =>'auth', 'uses'=>'AdminController@getMyLoanInprocess']);
	Route::get('myloaninprocess/all/{id}', ['middleware' =>'auth', 'uses'=>'AdminController@getAllMyLoanInprocess']);
	Route::get('myloandraft/all/{id}', ['middleware' =>'auth', 'uses'=>'AdminController@getAllMyLoanDraft']);
	//Loan Approved
	Route::get('myloanapproved/{id}', ['middleware' =>'auth', 'uses'=>'AdminController@getMyLoanApprove']);
	Route::get('myloanapproved/all/{id}', ['middleware' =>'auth', 'uses'=>'AdminController@getAllMyLoanApprove']);
	//Loan Rejected
	Route::get('myloanreject/{id}', ['middleware' =>'auth', 'uses'=>'AdminController@getMyLoanReject']);
	Route::get('myloanreject/all/{id}', ['middleware' =>'auth', 'uses'=>'AdminController@getAllMyLoanReject']);
	//Refer and Earn
	Route::get('myreferearn/{id}', ['middleware' =>'auth', 'uses'=>'AdminController@getMyReferearn']);
	Route::get('myreferearn/all/{id}', ['middleware' =>'auth', 'uses'=>'AdminController@getAllMyReferearn']);

// ---------------------------------------------------------

Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function(){


	//MIS
Route::get('mis', ['middleware' =>'auth', 'uses' =>'MisController@getAllMis']);
Route::get('mis/allData', ['middleware' =>'auth', 'uses' =>'MisController@getAllMisData']);
Route::get('mis/add', ['middleware' =>'auth', 'uses' =>'MisController@getAddMis']);
Route::post('mis/addMis', ['middleware' =>'auth', 'uses' =>'MisController@postAddMis']);
Route::get('mis/{id}', ['middleware' =>'auth', 'uses' =>'MisController@getEditMis']);
Route::post('mis/{id}', ['middleware' =>'auth', 'uses' =>'MisController@postEditMis']);


	Route::get('approve/wallet/{id}', ['middleware' =>'auth', 'uses' =>'AdminController@getApproveWallet']);

	Route::get('wallet/all', ['middleware' =>'auth', 'uses' =>'AdminController@getAllWallet']);

	Route::get('wallet/allData', ['middleware' =>'auth', 'uses' =>'AdminController@getAllWalletData']);

	//Redeem
	Route::get('redeem/all', ['middleware' =>'auth', 'uses' =>'AdminController@getAllRedeem']);

	Route::get('redeem/allData', ['middleware' =>'auth', 'uses' =>'AdminController@getAllRedeemData']);

	//Branch details
	Route::get('user/userbranch/all/{id}', ['middleware' =>'auth', 'uses' =>'AdminController@getAllBranch']);

	Route::get('user/userbranch/allData/{id}', ['middleware' =>'auth', 'uses' =>'AdminController@getAllBranchData']);

	Route::get('partner/partnerloan/all/{id}', ['middleware' =>'auth', 'uses' =>'AdminController@getAllPartnerLoan']);

	Route::get('partner/partnerloan/allData/{id}', ['middleware' =>'auth', 'uses' =>'AdminController@getAllPartnerLoanData']);

	
	Route::get('dashboard', ['middleware' =>'auth', 'uses' =>'AdminController@getDashboard']);


	Route::get('readnotify/{id}',['middleware' =>'auth', 'uses' =>'AdminController@getReadAdminNotify']);
	//Commission-------------------------
	Route::get('commission/all', ['middleware' =>'auth', 'uses' =>'CommissionController@getAllCommission']);
	Route::get('commission/allData', ['middleware' =>'auth', 'uses' =>'CommissionController@getAllCommissionData']);

	//Edit Commission
	Route::get('commission/{id}', ['middleware' =>'auth', 'uses' =>'CommissionController@getEditCommission']);
	Route::post('commission/{id}', ['middleware' =>'auth', 'uses' =>'CommissionController@postEditCommission']);

	Route::get('property/add', ['middleware' =>'auth', 'uses' =>'PropertyController@getAddProperty']);
	Route::post('property/add', ['middleware' =>'auth', 'uses' =>'PropertyController@postAddProperty']);

	Route::get('property/all', ['middleware' =>'auth', 'uses' =>'PropertyController@getAllProperty']);
	Route::get('property/allData', ['middleware' =>'auth', 'uses' =>'PropertyController@getAllPropertyData']);
	Route::get('property/inactive/{id}', ['middleware' =>'auth', 'uses' =>'PropertyController@getDeleteProperty']);
	Route::get('property/active/{id}', ['middleware' =>'auth', 'uses' =>'PropertyController@getActiveProperty']);
	Route::get('property/{id}', ['middleware' =>'auth', 'uses' =>'PropertyController@getEditProperty']);
	Route::post('property/{id}', ['middleware' =>'auth', 'uses' =>'PropertyController@postEditProperty']);
	Route::get('property/remove_amenity/{id}', ['middleware' =>'auth', 'uses' =>'PropertyController@postDeleteAmenity']);
Route::get('property/remove_propertyimage/{id}', ['middleware' =>'auth', 'uses' =>'PropertyController@postDeleteImage']);
	
	//Status
	Route::get('status/all', ['middleware' =>'auth', 'uses' =>'StatusController@getAllStatus']);
	Route::get('status/allData', ['middleware' =>'auth', 'uses' =>'StatusController@getAllStatusData']);
	Route::get('status/add', ['middleware' =>'auth', 'uses' =>'StatusController@getAddStatus']);
	Route::post('status/add', ['middleware' =>'auth', 'uses' =>'StatusController@postAddStatus']);
	Route::get('status/{id}', ['middleware' =>'auth', 'uses' =>'StatusController@getEditStatus']);
	Route::post('status/{id}', ['middleware' =>'auth', 'uses' =>'StatusController@postEditStatus']);
    

		//Bank
	Route::get('bank/add', ['middleware' =>'auth', 'uses' =>'BankController@getAddBank']);
	Route::post('bank/add', ['middleware' =>'auth', 'uses' =>'BankController@postAddBank']);

	Route::get('bank/all', ['middleware' =>'auth', 'uses' =>'BankController@getAllBank']);
	Route::get('bank/allData', ['middleware' =>'auth', 'uses' =>'BankController@getAllBankData']);
	
	Route::get('bank/inactive/{id}', ['middleware' =>'auth', 'uses' =>'BankController@getDeleteBlog']);
	Route::get('bank/active/{id}', ['middleware' =>'auth', 'uses' =>'BankController@getActiveBank']);
	Route::get('bank/{id}', ['middleware' =>'auth', 'uses' =>'BankController@getEditBank']);
	Route::post('bank/{id}', ['middleware' =>'auth', 'uses' =>'BankController@postEditBank']);
    Route::get('bank/inactive/{id}', ['middleware' =>'auth', 'uses' =>'BankController@getInactiveBank']);
	Route::get('bank/active/{id}', ['middleware' =>'auth', 'uses' =>'BankController@getActiveBank']);
		//* Blog

	Route::get('blog/add', ['middleware' =>'auth', 'uses' =>'BlogController@getAddBlog']);
	Route::post('blog/add', ['middleware' =>'auth', 'uses' =>'BlogController@postAddBlog']);
	
		Route::get('delete/{id}', ['middleware' =>'auth', 'uses' =>'AdminController@getDeleteAdmin']);

	Route::get('blog/all', ['middleware' =>'auth', 'uses' =>'BlogController@getAllBlog']);
	Route::get('blog/allData', ['middleware' =>'auth', 'uses' =>'BlogController@getAllBlogData']);
	Route::get('blog/inactive/{id}', ['middleware' =>'auth', 'uses' =>'BlogController@getDeleteBlog']);
	Route::get('blog/active/{id}', ['middleware' =>'auth', 'uses' =>'BlogController@getActiveBlog']);
	Route::get('blog/{id}', ['middleware' =>'auth', 'uses' =>'BlogController@getEditBlog']);
	Route::post('blog/{id}', ['middleware' =>'auth', 'uses' =>'BlogController@postEditBlog']);

	Route::get('mutual-fund/add', ['middleware' =>'auth', 'uses' =>'AdminController@getAddMutualFund']);
	Route::post('mutual-fund/add', ['middleware' =>'auth', 'uses' =>'AdminController@postAddMutualFund']);
		Route::get('apply_now/all', ['middleware' =>'auth', 'uses' =>'AdminController@getALLApplyNow']);
	Route::get('apply_now/allData', ['middleware' =>'auth', 'uses' =>'AdminController@getAllApplyNowData']);

	Route::get('term_insurance/all', ['middleware' =>'auth', 'uses' =>'AdminController@getALLTermInsurance']);
	Route::get('term_insurance/allData', ['middleware' =>'auth', 'uses' =>'AdminController@getAllTermInsuranceData']);

	Route::get('health_insurance/all', ['middleware' =>'auth', 'uses' =>'AdminController@getALLHealthInsurance']);
	Route::get('health_insurance/allData', ['middleware' =>'auth', 'uses' =>'AdminController@getALLHealthInsuranceData']);

	

	//Documents Pending
	Route::get('docpendingall', ['middleware' =>'auth', 'uses'=>'AdminController@getDocPendinglLoanAll']);
	Route::get('docpendingallData', ['middleware' =>'auth', 'uses' =>'AdminController@getDocPendingLoanAllData']);

	//Pending Loans---------------------
	Route::get('pendingall', ['middleware' =>'auth', 'uses'=>'AdminController@getPendinglLoanAll']);
	Route::get('pendingallData', ['middleware' =>'auth', 'uses' =>'AdminController@getPendingLoanAllData']);
	Route::get('loanDetails/{id}', ['middleware' =>'auth', 'uses'=>'AdminController@getLoanDetails']);

	Route::get('deletecomment/{id}', ['middleware' =>'auth', 'uses'=>'AdminController@postDeleteComment']);
	Route::get('delete_document/{id}', ['middleware' =>'auth', 'uses'=>'AdminController@postDeleteDocument']);

	//Approved Loans-----------------------
	Route::get('approvedall', ['middleware' =>'auth', 'uses'=>'AdminController@getApprovedLoanAll']);
	Route::get('approvedallData', ['middleware' =>'auth', 'uses' =>'AdminController@getApprovedLoanAllData']);


	//Rejected Loans------------------
	Route::get('rejectedall', ['middleware' =>'auth', 'uses' =>'AdminController@getRejectedLoanAll']);
	Route::get('rejectedallData', ['middleware' =>'auth', 'uses' =>'AdminController@getRejectedLoanAllData']);

	//Show Notifications
	Route::get('notificationall', ['middleware' =>'auth', 'uses' =>'AdminController@getAdminNotificationAll']);

	//Loan Status Change-----------------------
	Route::post('loaninprocess/{id}', 'AdminController@postStatusLoanInprocess');
	Route::get('loanrejected/{id}', ['middleware' =>'auth', 'uses' =>'AdminController@postStatusLoanRejected']);
	Route::get('loanapproved/{id}', ['middleware' =>'auth', 'uses' =>'AdminController@postStatusLoanApproved']);
	Route::post('loandocpending/{id}', ['middleware' =>'auth', 'uses' =>'AdminController@postStatusLoanDocPending']);

   

	Route::post('sendcomment', ['middleware' =>'auth', 'uses' =>'AdminController@postSendComment']);

	

	Route::get('mutual_fund/all', ['middleware' =>'auth', 'uses' =>'AdminController@getALLMutualFund']);
	Route::get('mutual_fund/allData', ['middleware' =>'auth', 'uses' =>'AdminController@getALLMutualFundData']);


	Route::get('refer_earn/all', ['middleware' =>'auth', 'uses' =>'AdminController@getALLReferEarn']);
	Route::get('refer_earn/allData', ['middleware' =>'auth', 'uses' =>'AdminController@getALLReferEarnData']);

    Route::get('referal_tools/all', ['middleware' =>'auth', 'uses' =>'AdminController@getALLReferalTool']);
	Route::get('referal_tools/allData', ['middleware' =>'auth', 'uses' =>'AdminController@getALLReferalToolData']);
	
	Route::get('property_lead/all', ['middleware' =>'auth', 'uses' =>'AdminController@getALLPropertyLead']);
	Route::get('property_lead/allData', ['middleware' =>'auth', 'uses' =>'AdminController@getALLPropertyLeadData']);
	
	Route::get('user/all', ['middleware' =>'auth', 'uses' =>'AdminController@getALLUser']);
	Route::get('user/allData', ['middleware' =>'auth', 'uses' =>'AdminController@getALLUserData']);


Route::get('partner/all', ['middleware' =>'auth', 'uses' =>'AdminController@getALLPartner']);
	Route::get('partner/allData', ['middleware' =>'auth', 'uses' =>'AdminController@getALLPartnerData']);

	Route::get('get_started/all', ['middleware' =>'auth', 'uses' =>'AdminController@getAllGetStarted']);
	Route::get('get_started/allData', ['middleware' =>'auth', 'uses' =>'AdminController@getAllGetStartedData']);

   
   
   	Route::get('admin/add', ['middleware' =>'auth', 'uses' =>'AdminController@getAddAdmin']);
	Route::post('admin/add', ['middleware' =>'auth', 'uses' =>'AdminController@postAddAdmin']);
	Route::get('admin/all', ['middleware' =>'auth', 'uses' =>'AdminController@getAllAdmin']);
	Route::get('admin/allData', ['middleware' =>'auth', 'uses' =>'AdminController@getAllAdminData']);
//	Route::get('admin/inactive/{id}', ['middleware' =>'auth', 'uses' =>'AdminController@getDeleteAdmin']);
	Route::get('admin/active/{id}', ['middleware' =>'auth', 'uses' =>'AdminController@getActiveAdmin']);
	
	Route::get('user/status/{id}', ['middleware' =>'auth', 'uses' =>'AdminController@getStatusUser']);
	Route::get('admin/{id}', ['middleware' =>'auth', 'uses' =>'AdminController@getEditAdmin']);
	Route::post('admin/{id}', ['middleware' =>'auth', 'uses' =>'AdminController@postEditAdmin']);
	
	
		Route::group(['prefix' => 'contact'], function(){
      
		Route::get('all', ['middleware' => 'auth','uses' => 'AdminController@getAllContact']);
		Route::get('allData', ['middleware' => 'auth','uses' => 'AdminController@getAllContactData']);
		

	});

});
Route::get('logout',['middleware' => 'auth', 'uses' =>'PublicController@getLogout']);