!function(t,n,s){"use strict";s("html");s(".touchspin").TouchSpin({buttondown_class:"btn btn-primary",buttonup_class:"btn btn-primary"}),s(".touchspin-icon").TouchSpin({buttondown_txt:'<i class="feather icon-chevron-down"></i>',buttonup_txt:'<i class="feather icon-chevron-up"></i>'});var o=s(".touchspin-min-max");o.length>0&&o.TouchSpin({min:15,max:21}).on("touchspin.on.startdownspin",function(){var t=s(this);s(".bootstrap-touchspin-up").removeClass("disabled-max-min"),15==t.val()&&s(this).siblings().find(".bootstrap-touchspin-down").addClass("disabled-max-min")}).on("touchspin.on.startupspin",function(){var t=s(this);s(".bootstrap-touchspin-down").removeClass("disabled-max-min"),21==t.val()&&s(this).siblings().find(".bootstrap-touchspin-up").addClass("disabled-max-min")}),s(".touchspin-step").TouchSpin({step:5}),s(".touchspin-color").each(function(t){var n="btn btn-primary",o="btn btn-primary",i=s(this);i.data("bts-button-down-class")&&(n=i.data("bts-button-down-class")),i.data("bts-button-up-class")&&(o=i.data("bts-button-up-class")),i.TouchSpin({mousewheel:!1,buttondown_class:n,buttonup_class:o,buttondown_txt:'<i class="feather icon-minus"></i>',buttonup_txt:'<i class="feather icon-plus"></i>'})})}(window,document,jQuery);
