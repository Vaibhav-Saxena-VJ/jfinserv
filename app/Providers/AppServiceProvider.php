<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;

use DataTables;
use App\User;
use App\Comment;
use App\Loan;
use Auth;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function($view)
        {
            $user=Auth::user();
            if($user!=''){
            $id=$user->id;
          
            $loan_details=Loan::where('user_id', $user->id)->get();
            $loan_id=[];
            foreach ($loan_details as $loan_detail) {
                $loan_ids=$loan_detail->loan_id;
                array_push($loan_id, $loan_ids);
            }
         
            $notification_cnt=Comment::whereIn('loan_id',$loan_id)->groupBy('loan_id')->where('is_user_read', 0)->get();
            $notification_count=$notification_cnt->count();

            $loan=Loan::get();
            $loanid=[];
            foreach ($loan as $loans) {
                $loanids=$loans->loan_id;
                array_push($loanid, $loanids);
            }
         
            $notificationcnt=Comment::whereIn('loan_id',$loanid)->groupBy('loan_id')->where('is_admin_read', 0)->get();
            $notificationcount=$notificationcnt->count();
            //echo $notificationcount;die;

            $data=array("notification_count"=>$notification_count,"notificationcount"=>$notificationcount);
            //print_r($data);die;

            View::share('data', $data);

        }


        });
    }
}
