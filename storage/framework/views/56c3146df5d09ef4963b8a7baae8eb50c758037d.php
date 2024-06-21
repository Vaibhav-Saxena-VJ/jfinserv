  
  <?php $__env->startSection('content'); ?>
  <style>
      #simple-pie-chart{
             
 height: 280px !important;
    width: 360px !important;
    /* width: 100%; */
    margin-left: 1%;
}
.height-300 {
    height: 300px!important;
}
      
      #SvgjsPath1241{
          
      }
      #SvgjsPath1023{
          fill:#77dd77 !important;
      }
      #SvgjsPath1024{
          fill:#FF6961 !important;
      }

  </style>
  <!-- BEGIN: Content-->
  


    <div class="content-wrapper">


        <div class="content-body">

<?php
$user=Auth::user();
$name=$user->name;
?>
            <section id="dashboard-analytics">
              <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12 d-flex">
                      <div class="card bg-analytics text-white" style="width:100%;">
                        <div class="card-content">
                          <div class="card-body text-center">
                            <!--<img src="<?php echo e(config('app.baseURL')); ?>/images\elements\decore-left.png" class="img-left" alt="card-img-left">-->
                            <!--<img src="<?php echo e(config('app.baseURL')); ?>/images\elements\decore-right.png" class="img-right" alt="card-img-right">-->
                            <div class="avatar avatar-xl bg-primary shadow mt-0">
                                <!--<div class="avatar-content">-->
                                <!--    <i class="feather icon-award white font-large-1"></i>-->
                                <!--</div>-->
                            </div>
                            <div class="text-center">
                              <h1 class="mb-2 text-white">Welcome <?php echo e($name); ?>,</h1>
                              <p class="m-auto w-75">Manage <strong>Leads, Refer & Earn and Master</strong></p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12 d-flex">
            <div class="card" style="width:100%;">
              <div class="card-header d-flex flex-column align-items-start pb-0">
                  <div class="avatar bg-rgba-primary p-50 m-0">
                      <div class="avatar-content">
                          <i class="feather icon-users text-primary font-medium-5"></i>
                      </div>
                  </div>
                  <h2 class="text-bold-700 mt-1 mb-25"><?php echo e($user_count); ?></h2>
                  <p class="mb-0">Total Registered Users</p>
              </div>
             <!--  <div class="card-content">
                  <div id="subscribe-gain-chart"></div>
              </div> -->
          </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 d-flex">
        <div class="card" style="width:100%;">
            <div class="card-header d-flex flex-column align-items-start pb-0">
                <div class="avatar bg-rgba-warning p-50 m-0">
                    <div class="avatar-content">
                        <i class="feather icon-package text-warning font-medium-5"></i>
                    </div>
                </div>
                <h2 class="text-bold-700 mt-1 mb-25"><?php echo e($refer_earn_count); ?></h2>
                <p class="mb-0">Total Referral Claims</p>
            </div>
          <!--   <div class="card-content">
                <div id="orders-received-chart"></div>
            </div> -->
        </div>
    </div>
       <div class="col-lg-4 col-xl-4 d-flex">
 
       <div class="card" style="width:100%;">
                   <div class="row gy-4" style="padding:10px;">
                                     <div class="col-md-12">
                                          <div class="form-check form-check-inline me-5  selfTab">
                                        <!--<input class="form-check-input date_filter_one" type="radio" name="date_filter_one" id="selfTab" value="week">-->
                                        <label class="form-check-label" for="self"><b>Show Data For:</b></label>
                                    </div>
                                    <div class="form-check form-check-inline me-5  selfTab">
                                        <input class="form-check-input date_filter" type="radio" name="date_filter" onclick="window.location='https://jfinserv.com/admin/dashboard?pie=seven&bar='" checked="" id="selfTab" value="week" >
                                        <label class="form-check-label" for="self">7 Days</label>
                                    </div>
                                    <div class="form-check form-check-inline active me-5">
                                        <input class="form-check-input date_filter" type="radio" name="date_filter" onclick="window.location='https://jfinserv.com/admin/dashboard?pie=thirty&bar='" id="salariedTab"  value="month">
                                        <label class="form-check-label" for="married">30 Days</label>
                                    </div>
                                    <div class="form-check form-check-inline active me-5">
                                        <input class="form-check-input date_filter" type="radio" name="date_filter" onclick="window.location='https://jfinserv.com/admin/dashboard?pie=all&bar='" id="salariedTab"  value="all">
                                        <label class="form-check-label" for="married">All</label>
                                    </div>
                                </div
          <div class="card-content">
            <div class="card-body pl-0">
              <div class="height-300" id="graph-container">
                <canvas id="simple-pie-chart"></canvas>
              </div>


            </div>
          </div>
           <div class="col-md-12">
        <p>No. of Loan Applications : <b><?php echo e($total_loan_applied_for_count); ?></b></p>
        <p>No. of Approved Applications: <b style="color:#4BB543;"><?php echo e($loan_approved_count); ?></b></p>
        <p>No. of Rejected Applications  : <b style="color:#E01E12;"><?php echo e($loan_rejected_count); ?></b></p>
 


</div>
  </div>



    </div>
        <div class="col-lg-8 col-md-12 d-flex">
      <div class="card" style="width:100%;">
                             <div class="row gy-4" style="padding:10px;">
                                     <div class="col-md-12">
                                         <div class="form-check form-check-inline me-5  selfTab">
                                        <!--<input class="form-check-input date_filter_one" type="radio" name="date_filter_one" id="selfTab" value="week">-->
                                        <label class="form-check-label" for="self"><b>Show Data For:</b></label>
                                    </div>
                                    <div class="form-check form-check-inline me-5  selfTab">
                                        <input class="form-check-input date_filter_one" type="radio" checked="" name="date_filter_one" onclick="window.location='https://jfinserv.com/admin/dashboard?pie=&bar=seven'" id="selfTab" value="week">
                                        <label class="form-check-label" for="self">7 Days</label>
                                    </div>
                                    <div class="form-check form-check-inline active me-5">
                                        <input class="form-check-input date_filter_one" type="radio" name="date_filter_one" id="salariedTab" onclick="window.location='https://jfinserv.com/admin/dashboard?pie=&bar=thirty'"  value="month">
                                        <label class="form-check-label" for="married">30 Days</label>
                                    </div>
                                    <div class="form-check form-check-inline active me-5">
                                        <input class="form-check-input date_filter_one" type="radio" name="date_filter_one" id="salariedTab" onclick="window.location='https://jfinserv.com/admin/dashboard?pie=&bar=all'" value="all">
                                        <label class="form-check-label" for="married">All</label>
                                    </div>
                                </div
        <div class="card-header">
          <!--<h4 class="card-title">Bar Chart</h4>-->
        </div>
        <div class="card-content">
          <div class="card-body">
            <div id="bar-chart"></div>
          </div>
        </div>
         <div class="col-md-12">
        <p>Total Loan Amount : <b>₹ <?php echo e($total_loan_applied_for); ?></b></p>
        <p>Total Loan Amount Approved: <b style="color:#4BB543;">₹ <?php echo e($loan_approved); ?> (<?php echo e($amount_loan_approved_percentage); ?>%)</b></p>
        <p>Total Loan Amount Rejected : <b style="color:#E01E12;">₹ <?php echo e($loan_rejected); ?> (<?php echo e($amount_loan_rejected_percentage); ?>%)</b></p>
 


</div>

      </div>
    </div>
</div>
</section>
<!-- Dashboard Analytics end -->
</div>
</div>

<!-- End: Content-->
<script src="<?php echo e(config('app.baseURL')); ?>\assets\js\chart.min.js?id=b235b564de9c2c1d61d7"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>

<script>
$(document).ready(function(){
    
showchart(["<?php echo e($loan_approved_percentage); ?>","<?php echo e($loan_rejected_percentage); ?>"]);
    function showchart(graph_value){
 
  var value_range_new=graph_value;

  var total_sum=100;

$('#simple-pie-chart').remove(); 
  $('#graph-container').append('<canvas id="simple-pie-chart"><canvas>');
  canvas = document.querySelector('#simple-pie-chart');

  var a = ["#77dd77", "#FF6961"],
  o = ($("#simple-pie-chart")),
  i = (new Chart(o, {
    type: "pie",
    options: {
      responsive: !0,
      maintainAspectRatio: !1,
      responsiveAnimationDuration: 500,
      title: {
        display: !1,
        text: "Breakup Of Total Payment"
      },
      plugins: {
        datalabels: {
          formatter: (value, o) => {

            let sum = total_sum;
            let percentage = (value * 100 / sum).toFixed(2) + "%";
            return percentage;


          },
          color: '#fff',
        },
      }
    },
    data: {
      labels: ["% of Approved Applications", "% of Rejected Applications"],
      datasets: [{
        label: "My First dataset",
        data: value_range_new,
        backgroundColor: a
      }]
    }
  }));

}
  });
  
  $(document).ready(function() {
      var barvalue=["<?php echo e($total_loan_applied_for); ?>","<?php echo e($loan_approved); ?>","<?php echo e($loan_rejected); ?>"];
      
      barchatchart(["<?php echo e($total_loan_applied_for); ?>","<?php echo e($loan_approved); ?>","<?php echo e($loan_rejected); ?>"]);
      function barchatchart(barvalue){
          
    var e = ["#7367F0", "#77dd77", "#FF6961"],
        t = !1;
    "rtl" == $("html").data("textdirection") && (t = !0);
    var a = {
        chart: {
            height: 100,
            type: "line",
            zoom: {
                enabled: !1
            }
        },
        colors: e,
        dataLabels: {
            enabled: !1
        },
        stroke: {
            curve: "straight"
        },
        series: [{
            name: "Desktops",
            data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
        }],
        title: {
            text: "Product Trends by Month",
            align: "left"
        },
        grid: {
            row: {
                colors: ["#f3f3f3", "transparent"],
                opacity: .5
            }
        },
        xaxis: {
            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep"]
        },
        yaxis: {
            tickAmount: 5,
            opposite: t
        }
    };
    new ApexCharts(document.querySelector("#line-chart"), a).render();
    var r = {
        chart: {
            height: 350,
            type: "area"
        },
        colors: e,
        dataLabels: {
            enabled: !1
        },
        stroke: {
            curve: "smooth"
        },
        series: [{
            name: "series1",
            data: [31, 40, 28, 51, 42, 109, 100]
        }, {
            name: "series2",
            data: [11, 32, 45, 32, 34, 52, 41]
        }],
        legend: {
            offsetY: -10
        },
        xaxis: {
            type: "datetime",
            categories: ["2019-09-18T00:00:00", "2019-09-18T01:00:00", "2019-09-18T02:00:00", "2019-09-18T03:00:00", "2019-09-18T04:00:00", "2019-09-18T05:00:00", "2019-09-18T06:00:00"]
        },
        yaxis: {
            opposite: t
        },
        tooltip: {
            x: {
                format: "dd/MM/yy HH:mm"
            }
        }
    };
    new ApexCharts(document.querySelector("#line-area-chart"), r).render();
    var n = {
        chart: {
            height: 350,
            type: "bar"
        },
        colors: e,
        plotOptions: {
            bar: {
                horizontal: !1,
                endingShape: "rounded",
                columnWidth: "55%"
            }
        },
        dataLabels: {
            enabled: !1
        },
        stroke: {
            show: !0,
            width: 2,
            colors: ["transparent"]
        },
        series: [{
            name: "Net Profit",
            data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
        }, {
            name: "Revenue",
            data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
        }, {
            name: "Free Cash Flow",
            data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
        }],
        legend: {
            offsetY: -10
        },
        xaxis: {
            categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"]
        },
        yaxis: {
            title: {
                text: "$ (thousands)"
            },
            opposite: t
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function(e) {
                    return "$ " + e + " thousands"
                }
            }
        }
    };
    new ApexCharts(document.querySelector("#column-chart"), n).render();
    var o = {
        chart: {
            height: 200,
            type: "bar"
        },
        colors: e,
        plotOptions: {
            bar: {
                horizontal: !0
            }
        },
        dataLabels: {
            enabled: !1
        },
        series: [{
            name: "In INR",
            data: barvalue,
        }],
        xaxis: {
            categories: ["Total Loan Amount", "Approved Amount", "Rejected Amount"],
            tickAmount: 3
        },
        yaxis: {
            opposite: t
        }
    };
    new ApexCharts(document.querySelector("#bar-chart"), o).render();
    var i = {
        chart: {
            height: 350,
            type: "line",
            stacked: !1
        },
        colors: e,
        stroke: {
            width: [0, 2, 5],
            curve: "smooth"
        },
        plotOptions: {
            bar: {
                columnWidth: "50%"
            }
        },
        series: [{
            name: "TEAM A",
            type: "column",
            data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]
        }, {
            name: "TEAM B",
            type: "area",
            data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43]
        }, {
            name: "TEAM C",
            type: "line",
            data: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39]
        }],
        fill: {
            opacity: [.85, .25, 1],
            gradient: {
                inverseColors: !1,
                shade: "light",
                type: "vertical",
                opacityFrom: .85,
                opacityTo: .55,
                stops: [0, 100, 100, 100]
            }
        },
        labels: ["01/01/2003", "02/01/2003", "03/01/2003", "04/01/2003", "05/01/2003", "06/01/2003", "07/01/2003", "08/01/2003", "09/01/2003", "10/01/2003", "11/01/2003"],
        markers: {
            size: 0
        },
        legend: {
            offsetY: -10
        },
        xaxis: {
            type: "datetime"
        },
        yaxis: {
            min: 0,
            tickAmount: 5,
            title: {
                text: "Points"
            },
            opposite: t
        },
        tooltip: {
            shared: !0,
            intersect: !1,
            y: {
                formatter: function(e) {
                    return void 0 !== e ? e.toFixed(0) + " views" : e
                }
            }
        }
    };
    new ApexCharts(document.querySelector("#mixed-chart"), i).render();
    var s = {
        chart: {
            height: 350,
            type: "candlestick"
        },
        colors: e,
        series: [{
            data: [{
                x: new Date(15387786e5),
                y: [6629.81, 6650.5, 6623.04, 6633.33]
            }, {
                x: new Date(15387804e5),
                y: [6632.01, 6643.59, 6620, 6630.11]
            }, {
                x: new Date(15387822e5),
                y: [6630.71, 6648.95, 6623.34, 6635.65]
            }, {
                x: new Date(1538784e6),
                y: [6635.65, 6651, 6629.67, 6638.24]
            }, {
                x: new Date(15387858e5),
                y: [6638.24, 6640, 6620, 6624.47]
            }, {
                x: new Date(15387876e5),
                y: [6624.53, 6636.03, 6621.68, 6624.31]
            }, {
                x: new Date(15387894e5),
                y: [6624.61, 6632.2, 6617, 6626.02]
            }, {
                x: new Date(15387912e5),
                y: [6627, 6627.62, 6584.22, 6603.02]
            }, {
                x: new Date(1538793e6),
                y: [6605, 6608.03, 6598.95, 6604.01]
            }, {
                x: new Date(15387948e5),
                y: [6604.5, 6614.4, 6602.26, 6608.02]
            }, {
                x: new Date(15387966e5),
                y: [6608.02, 6610.68, 6601.99, 6608.91]
            }, {
                x: new Date(15387984e5),
                y: [6608.91, 6618.99, 6608.01, 6612]
            }, {
                x: new Date(15388002e5),
                y: [6612, 6615.13, 6605.09, 6612]
            }, {
                x: new Date(1538802e6),
                y: [6612, 6624.12, 6608.43, 6622.95]
            }, {
                x: new Date(15388038e5),
                y: [6623.91, 6623.91, 6615, 6615.67]
            }, {
                x: new Date(15388056e5),
                y: [6618.69, 6618.74, 6610, 6610.4]
            }, {
                x: new Date(15388074e5),
                y: [6611, 6622.78, 6610.4, 6614.9]
            }, {
                x: new Date(15388092e5),
                y: [6614.9, 6626.2, 6613.33, 6623.45]
            }, {
                x: new Date(1538811e6),
                y: [6623.48, 6627, 6618.38, 6620.35]
            }, {
                x: new Date(15388128e5),
                y: [6619.43, 6620.35, 6610.05, 6615.53]
            }, {
                x: new Date(15388146e5),
                y: [6615.53, 6617.93, 6610, 6615.19]
            }, {
                x: new Date(15388164e5),
                y: [6615.19, 6621.6, 6608.2, 6620]
            }, {
                x: new Date(15388182e5),
                y: [6619.54, 6625.17, 6614.15, 6620]
            }, {
                x: new Date(153882e7),
                y: [6620.33, 6634.15, 6617.24, 6624.61]
            }, {
                x: new Date(15388218e5),
                y: [6625.95, 6626, 6611.66, 6617.58]
            }, {
                x: new Date(15388236e5),
                y: [6619, 6625.97, 6595.27, 6598.86]
            }, {
                x: new Date(15388254e5),
                y: [6598.86, 6598.88, 6570, 6587.16]
            }, {
                x: new Date(15388272e5),
                y: [6588.86, 6600, 6580, 6593.4]
            }, {
                x: new Date(1538829e6),
                y: [6593.99, 6598.89, 6585, 6587.81]
            }, {
                x: new Date(15388308e5),
                y: [6587.81, 6592.73, 6567.14, 6578]
            }, {
                x: new Date(15388326e5),
                y: [6578.35, 6581.72, 6567.39, 6579]
            }, {
                x: new Date(15388344e5),
                y: [6579.38, 6580.92, 6566.77, 6575.96]
            }, {
                x: new Date(15388362e5),
                y: [6575.96, 6589, 6571.77, 6588.92]
            }, {
                x: new Date(1538838e6),
                y: [6588.92, 6594, 6577.55, 6589.22]
            }, {
                x: new Date(15388398e5),
                y: [6589.3, 6598.89, 6589.1, 6596.08]
            }, {
                x: new Date(15388416e5),
                y: [6597.5, 6600, 6588.39, 6596.25]
            }, {
                x: new Date(15388434e5),
                y: [6598.03, 6600, 6588.73, 6595.97]
            }, {
                x: new Date(15388452e5),
                y: [6595.97, 6602.01, 6588.17, 6602]
            }, {
                x: new Date(1538847e6),
                y: [6602, 6607, 6596.51, 6599.95]
            }, {
                x: new Date(15388488e5),
                y: [6600.63, 6601.21, 6590.39, 6591.02]
            }, {
                x: new Date(15388506e5),
                y: [6591.02, 6603.08, 6591, 6591]
            }, {
                x: new Date(15388524e5),
                y: [6591, 6601.32, 6585, 6592]
            }, {
                x: new Date(15388542e5),
                y: [6593.13, 6596.01, 6590, 6593.34]
            }, {
                x: new Date(1538856e6),
                y: [6593.34, 6604.76, 6582.63, 6593.86]
            }, {
                x: new Date(15388578e5),
                y: [6593.86, 6604.28, 6586.57, 6600.01]
            }, {
                x: new Date(15388596e5),
                y: [6601.81, 6603.21, 6592.78, 6596.25]
            }, {
                x: new Date(15388614e5),
                y: [6596.25, 6604.2, 6590, 6602.99]
            }, {
                x: new Date(15388632e5),
                y: [6602.99, 6606, 6584.99, 6587.81]
            }, {
                x: new Date(1538865e6),
                y: [6587.81, 6595, 6583.27, 6591.96]
            }, {
                x: new Date(15388668e5),
                y: [6591.97, 6596.07, 6585, 6588.39]
            }, {
                x: new Date(15388686e5),
                y: [6587.6, 6598.21, 6587.6, 6594.27]
            }, {
                x: new Date(15388704e5),
                y: [6596.44, 6601, 6590, 6596.55]
            }, {
                x: new Date(15388722e5),
                y: [6598.91, 6605, 6596.61, 6600.02]
            }, {
                x: new Date(1538874e6),
                y: [6600.55, 6605, 6589.14, 6593.01]
            }, {
                x: new Date(15388758e5),
                y: [6593.15, 6605, 6592, 6603.06]
            }, {
                x: new Date(15388776e5),
                y: [6603.07, 6604.5, 6599.09, 6603.89]
            }, {
                x: new Date(15388794e5),
                y: [6604.44, 6604.44, 6600, 6603.5]
            }, {
                x: new Date(15388812e5),
                y: [6603.5, 6603.99, 6597.5, 6603.86]
            }, {
                x: new Date(1538883e6),
                y: [6603.85, 6605, 6600, 6604.07]
            }, {
                x: new Date(15388848e5),
                y: [6604.98, 6606, 6604.07, 6606]
            }]
        }],
        xaxis: {
            type: "datetime"
        },
        yaxis: {
            tickAmount: 5,
            tooltip: {
                enabled: !0
            },
            opposite: t
        }
    };

    function d(e, t, a) {
        for (var r = 0, n = []; r < t;) {
            var o = Math.floor(Math.random() * (a.max - a.min + 1)) + a.min,
                i = Math.floor(61 * Math.random()) + 15;
            n.push([e, o, i]), e += 864e5, r++
        }
        return n
    }
    new ApexCharts(document.querySelector("#candlestick-chart"), s).render();
    var c = {
        chart: {
            height: 350,
            type: "bubble"
        },
        colors: e,
        dataLabels: {
            enabled: !1
        },
        legend: {
            offsetY: -10
        },
        series: [{
            name: "Product1",
            data: d(new Date("11 Feb 2017 GMT").getTime(), 20, {
                min: 10,
                max: 60
            })
        }, {
            name: "Product2",
            data: d(new Date("11 Feb 2017 GMT").getTime(), 20, {
                min: 10,
                max: 60
            })
        }, {
            name: "Product3",
            data: d(new Date("11 Feb 2017 GMT").getTime(), 20, {
                min: 10,
                max: 60
            })
        }, {
            name: "Product4",
            data: d(new Date("11 Feb 2017 GMT").getTime(), 20, {
                min: 10,
                max: 60
            })
        }],
        fill: {
            type: "gradient"
        },
        xaxis: {
            tickAmount: 12,
            type: "datetime",
            labels: {
                rotate: 0
            }
        },
        yaxis: {
            max: 70,
            tickAmount: 5,
            opposite: t
        },
        theme: {
            palette: "palette2"
        }
    };
    new ApexCharts(document.querySelector("#bubble-chart"), c).render();
    var l = {
        chart: {
            height: 350,
            type: "scatter",
            zoom: {
                enabled: !0,
                type: "xy"
            }
        },
        colors: e,
        series: [{
            name: "SAMPLE A",
            data: [
                [16.4, 5.4],
                [21.7, 2],
                [25.4, 3],
                [19, 2],
                [10.9, 1],
                [13.6, 3.2],
                [10.9, 7.4],
                [10.9, 0],
                [10.9, 8.2],
                [16.4, 0],
                [16.4, 1.8],
                [13.6, .3],
                [13.6, 0],
                [29.9, 0],
                [27.1, 2.3],
                [16.4, 0],
                [13.6, 3.7],
                [10.9, 5.2],
                [16.4, 6.5],
                [10.9, 0],
                [24.5, 7.1],
                [10.9, 0],
                [8.1, 4.7],
                [19, 0],
                [21.7, 1.8],
                [27.1, 0],
                [24.5, 0],
                [27.1, 0],
                [29.9, 1.5],
                [27.1, .8],
                [22.1, 2]
            ]
        }, {
            name: "SAMPLE B",
            data: [
                [6.4, 13.4],
                [1.7, 11],
                [5.4, 8],
                [9, 17],
                [1.9, 4],
                [3.6, 12.2],
                [1.9, 14.4],
                [1.9, 9],
                [1.9, 13.2],
                [1.4, 7],
                [6.4, 8.8],
                [3.6, 4.3],
                [1.6, 10],
                [9.9, 2],
                [7.1, 15],
                [1.4, 0],
                [3.6, 13.7],
                [1.9, 15.2],
                [6.4, 16.5],
                [.9, 10],
                [4.5, 17.1],
                [10.9, 10],
                [.1, 14.7],
                [9, 10],
                [12.7, 11.8],
                [2.1, 10],
                [2.5, 10],
                [27.1, 10],
                [2.9, 11.5],
                [7.1, 10.8],
                [2.1, 12]
            ]
        }, {
            name: "SAMPLE C",
            data: [
                [21.7, 3],
                [23.6, 3.5],
                [24.6, 3],
                [29.9, 3],
                [21.7, 20],
                [23, 2],
                [10.9, 3],
                [28, 4],
                [27.1, .3],
                [16.4, 4],
                [13.6, 0],
                [19, 5],
                [22.4, 3],
                [24.5, 3],
                [32.6, 3],
                [27.1, 4],
                [29.6, 6],
                [31.6, 8],
                [21.6, 5],
                [20.9, 4],
                [22.4, 0],
                [32.6, 10.3],
                [29.7, 20.8],
                [24.5, .8],
                [21.4, 0],
                [21.7, 6.9],
                [28.6, 7.7],
                [15.4, 0],
                [18.1, 0],
                [33.4, 0],
                [16.4, 0]
            ]
        }],
        legend: {
            offsetY: -10
        },
        xaxis: {
            tickAmount: 10
        },
        yaxis: {
            tickAmount: 7,
            opposite: t
        }
    };
    new ApexCharts(document.querySelector("#scatter-chart"), l).render();
    var y = {
        chart: {
            type: "pie",
            height: 350
        },
        colors: e,
        labels: ["Team A", "Team B", "Team C", "Team D"],
        series: [44, 55, 13, 43],
        legend: {
            itemMargin: {
                horizontal: 2
            }
        },
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 350
                },
                legend: {
                    position: "bottom"
                }
            }
        }]
    };
    new ApexCharts(document.querySelector("#pie-chart"), y).render();
    var m = {
        chart: {
            type: "donut",
            height: 350
        },
        colors: e,
        series: [44, 55, 41, 17],
        legend: {
            itemMargin: {
                horizontal: 2
            }
        },
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 350
                },
                legend: {
                    position: "bottom"
                }
            }
        }]
    };
    new ApexCharts(document.querySelector("#donut-chart"), m).render();
    var x = {
        chart: {
            height: 350,
            type: "radialBar"
        },
        colors: e,
        plotOptions: {
            radialBar: {
                dataLabels: {
                    name: {
                        fontSize: "22px"
                    },
                    value: {
                        fontSize: "16px"
                    },
                    total: {
                        show: !0,
                        label: "Total",
                        formatter: function(e) {
                            return 249
                        }
                    }
                }
            }
        },
        series: [44, 55, 67, 83],
        labels: ["Apples", "Oranges", "Bananas", "Berries"]
    };
    new ApexCharts(document.querySelector("#radial-bar-chart"), x).render();
    var h = {
        chart: {
            height: 350,
            type: "radar"
        },
        colors: e,
        series: [{
            name: "Series 1",
            data: [80, 50, 30, 40, 100, 20]
        }],
        labels: ["January", "February", "March", "April", "May", "June"],
        dataLabels: {
            style: {
                color: "#dae1e7"
            }
        }
    };

    function p(e, t) {
        for (var a = 0, r = []; a < e;) {
            var n = "w" + (a + 1).toString(),
                o = Math.floor(Math.random() * (t.max - t.min + 1)) + t.min;
            r.push({
                x: n,
                y: o
            }), a++
        }
        return r
    }
    new ApexCharts(document.querySelector("#radar-chart"), h).render();
    var w = {
        chart: {
            height: 350,
            type: "heatmap"
        },
        dataLabels: {
            enabled: !1
        },
        colors: ["#7367F0"],
        series: [{
            name: "Metric1",
            data: p(18, {
                min: 0,
                max: 90
            })
        }, {
            name: "Metric2",
            data: p(18, {
                min: 0,
                max: 90
            })
        }, {
            name: "Metric3",
            data: p(18, {
                min: 0,
                max: 90
            })
        }, {
            name: "Metric4",
            data: p(18, {
                min: 0,
                max: 90
            })
        }, {
            name: "Metric5",
            data: p(18, {
                min: 0,
                max: 90
            })
        }, {
            name: "Metric6",
            data: p(18, {
                min: 0,
                max: 90
            })
        }, {
            name: "Metric7",
            data: p(18, {
                min: 0,
                max: 90
            })
        }, {
            name: "Metric8",
            data: p(18, {
                min: 0,
                max: 90
            })
        }, {
            name: "Metric9",
            data: p(18, {
                min: 0,
                max: 90
            })
        }],
        yaxis: {
            opposite: t
        }
    };
    new ApexCharts(document.querySelector("#heat-map-chart"), w).render()
    
      }
});
</script>
<script src="<?php echo e(config('app.baseURL')); ?>\assets\js\chart.min.js?id=b235b564de9c2c1d61d7"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
<script src="<?php echo e(config('app.baseURL')); ?>/vendors\js\charts\apexcharts.min.js?id=bbb1adadc937c1636f35"></script>
 <!--<script src="<?php echo e(config('app.baseURL')); ?>/js\scripts\charts\chart-apex.js?id=ee908d18bbd8fe26f41d"></script>-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vshoppng/jfinserv_vshoppng_tech/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>