function triggerOwl(){var e=$(document).find(".sync1"),i=$(document).find(".sync2"),a=".owl-item";e.owlCarousel({items:1,loop:!0,margin:0,mouseDrag:!0,touchDrag:!0,pullDrag:!1,scrollPerPage:!0,nav:!1,dots:!1}).on("changed.owl.carousel",(function(e){if($owl_slider=$(this).data("owl.carousel"),$owl_slider.options.loop){var a=e.item.count-1;(s=Math.round(e.item.index-e.item.count/2-.5))<0&&(s=a),s>a&&(s=0)}else var s=e.item.index;var o="."+i.data("owl.carousel").options.itemClass,t=i.find(o).removeClass("synced").eq(s);t.addClass("synced"),t.hasClass("active")||i.trigger("to.owl.carousel",[s,500,!0])})),i.owlCarousel({items:3,loop:!1,margin:0,nav:!0,dots:!1,responsive:{500:{items:4},768:{items:5},992:{items:4},1200:{items:5}},onInitialized:function(e){$(e.target).find(a).eq(this._current).addClass("synced")}}).on("click",a,(function(i){i.preventDefault();var s=$(i.target).parents(a).index();e.trigger("to.owl.carousel",[s,500,!0])})).on("changed.owl.carousel",(function(i){var a=i.item.index;$owl_slider=e.data("owl.carousel"),$owl_slider.to(a,500,!0)})),e.owlCarousel()}!function(e){e(window).on("load",(function(){var i,a;e(".preloader").fadeOut(1e3),e(".bg_img").css("background-image",(function(){return"url("+e(this).data("background")+")"})),i=e(".product-wrapper"),a={},i.isotope({itemSelector:".product-item",masonry:{columnWidth:0}}),e("ul.filter").on("click","li",(function(){var s=e(this).attr("data-filter");s=a[s]||s,i.isotope({filter:s})})),e("ul.filter").each((function(i,a){var s=e(a);s.on("click","li",(function(){s.find(".active").removeClass("active"),e(this).addClass("active")}))}))})),e(document).ready((function(){e(":radio").change((function(){})),e(".zoom_img").imagezoomsl({zoomrange:[3,3],magnifierborder:"none",innerzoom:!0,wheelDelta:!0}),e(".select-bar").niceSelect(),e(".popup").magnificPopup({disableOn:700,type:"iframe",mainClass:"mfp-fade",removalDelay:160,preloader:!1,fixedContentPos:!1,disableOn:300}),e("body").each((function(){e(this).find(".img-pop").magnificPopup({type:"image",gallery:{enabled:!0}})})),(new WOW).init(),e(".faq-wrapper .faq-title").on("click",(function(i){var a=e(this).parent(".faq-item");a.hasClass("open")?(a.removeClass("open"),a.find(".faq-content").removeClass("open"),a.find(".faq-content").slideUp(200,"swing")):(a.addClass("open"),a.children(".faq-content").slideDown(200,"swing"),a.siblings(".faq-item").children(".faq-content").slideUp(200,"swing"),a.siblings(".faq-item").removeClass("open"),a.siblings(".faq-item").find(".faq-title").removeClass("open"),a.siblings(".faq-item").find(".faq-content").slideUp(200,"swing"))})),e("ul>li>.submenu").parent("li").addClass("menu-item-has-children"),e(".sub-category").parent("li").addClass("cate-icon-wrapper"),e("ul").parent("li").hover((function(){var i=e(this).find("ul");e(i).offset().left+i.width()>e(window).width()&&(e(i).width(),i.addClass("reverse-direction"),i.css({top:"100%"}))})),e(".menu li a").on("click",(function(i){var a=e(this).parent("li");a.hasClass("open")?(a.removeClass("open"),a.find("li").removeClass("open"),a.find("ul").slideUp(300,"swing")):(a.addClass("open"),a.children("ul").slideDown(300,"swing"),a.siblings("li").children("ul").slideUp(300,"swing"),a.siblings("li").removeClass("open"),a.siblings("li").find("li").removeClass("open"),a.siblings("li").find("ul").slideUp(300,"swing"))})),e(".categories li .cate-icon").on("click",(function(i){var a=e(this).parent("li");a.hasClass("open")?(a.removeClass("open"),a.children("ul").slideUp(400,"swing")):(a.addClass("open"),a.siblings("li").removeClass("open"),a.children("ul").slideDown(400,"swing"))}));var i=e(".header-top"),a=e(".scrollToTop");function s(){e(".slide-progress").css({width:"100%",transition:"width 5000ms"})}e(window).on("scroll",(function(){e(this).scrollTop()<500?(a.removeClass("active"),i.removeClass("active")):(a.addClass("active"),i.addClass("active"))})),e(".scrollToTop").on("click",(function(){return e("html, body").animate({scrollTop:0},500),!1})),e("body").css("padding-top",(function(){return e("header").height()})),e(".header-bar").on("click",(function(){e(this).toggleClass("active"),e(".body-overlay").toggleClass("active"),e(".mobile-menu").toggleClass("active")})),e(".mobile-menu-close").on("click",(function(){e(".body-overlay").removeClass("active"),e(".mobile-menu").removeClass("active"),e(".header-bar").removeClass("active")})),e(".tab ul.tab-menu").addClass("active").find("> li:eq(0)").addClass("active"),e(".tab ul.tab-menu li").on("click",(function(i){var a=e(this).closest(".tab"),s=e(this).closest("li").index();a.find("li").siblings("li").removeClass("active"),e(this).closest("li").addClass("active"),a.find(".tab-area").find("div.tab-item").not("div.tab-item:eq("+s+")").hide(10),a.find(".tab-area").find("div.tab-item:eq("+s+")").fadeIn(10),i.preventDefault()})),e(".related-slider").owlCarousel({loop:!0,margin:15,responsiveClass:!0,items:2,nav:!0,dots:!1,autoplay:!0,responsive:{400:{items:3},550:{items:4},768:{items:5},992:{items:7},1200:{items:4},1300:{items:5},1400:{items:6},1500:{items:8}}}),e(".category-slider").owlCarousel({loop:!0,margin:0,responsiveClass:!0,items:2,nav:!0,dots:!1,autoplay:!0,responsive:{550:{items:3},768:{items:4},992:{items:3},1200:{items:4}}}),e(".product-slider-2").owlCarousel({loop:!0,margin:0,responsiveClass:!0,items:1,dots:!1,nav:!0,autoplay:!1,responsive:{500:{items:2},992:{items:3},1200:{items:4}}}),e(".related-products-slider").owlCarousel({loop:!0,margin:0,responsiveClass:!0,items:1,nav:!0,dots:!1,autoplay:!0,responsive:{500:{items:2},992:{items:4}}}),e(".dashboard-item").each((function(){e(this).isInViewport((function(e){if("entered"===e)for(var i=0;i<document.querySelectorAll(".odometer").length;i++){var a=document.querySelectorAll(".odometer")[i];a.innerHTML=a.getAttribute("data-odometer-final")}}))})),e(".product-slider-1").owlCarousel({loop:!0,margin:30,responsiveClass:!0,items:1,nav:!1,dots:!1,autoplay:!0,responsive:{576:{items:2},992:{items:3},1200:{items:4}}}),e(".banner-slider").owlCarousel({items:1,loop:!0,autoplay:!0,nav:!0,autoHeight:!0,onInitialized:s,onTranslate:function(){e(".slide-progress").css({width:0,transition:"width 0s"})},onTranslated:s}),e("#cart-button").on("click",(function(i){i.preventDefault(),e("#cart-sidebar-area").addClass("active"),e(".body-overlay").addClass("active")})),e("#wish-button").on("click",(function(i){i.preventDefault(),e("#wish-sidebar-area").addClass("active"),e(".body-overlay").addClass("active")})),e(".body-overlay").on("click",(function(){e(".cart-sidebar-area").removeClass("active"),e(".body-overlay").removeClass("active"),e(".left-category").removeClass("active"),e(".right-category").removeClass("active"),e(".header-bar").removeClass("active"),e(".mobile-menu").removeClass("active"),e(".category-sidebar").removeClass("active"),e(".home-category").addClass("active"),e(".dashboard-menu").removeClass("active"),e("#wish-sidebar-area").removeClass("active")})),e(".side-sidebar-close-btn").on("click",(function(i){i.preventDefault(),e(".cart-sidebar-area").removeClass("active"),e(".body-overlay").removeClass("active"),e(".dashboard-menu").removeClass("active")})),e(".dashboard-menu-bar").on("click",(function(i){i.preventDefault(),e(".dashboard-menu").addClass("active"),e(".body-overlay").addClass("active")})),e(".close-category").on("click",(function(){e(".left-category").removeClass("active"),e(".right-category").removeClass("active"),e(".body-overlay").removeClass("active")})),e(".right-toggle").on("click",(function(){e(".right-category").addClass("active"),e(".body-overlay").addClass("active")})),e(".view-category a").on("click",(function(){e(".left-category").toggleClass("active")})),e(".filter-in").on("click",(function(){e(".category-sidebar").addClass("active"),e(".body-overlay").addClass("active")})),e(".close-sidebar").on("click",(function(){e(".category-sidebar").removeClass("active"),e(".body-overlay").removeClass("active")})),e(".change-grid-to-6").on("click",(function(){e(this).parent().children().removeClass("active"),e(this).addClass("active"),e("#grid-view").find(".grid-control").removeClass("col-lg-4 col-lg-6 col-lg-3").addClass("col-lg-6")})),e(".change-grid-to-4").on("click",(function(){e(this).parent().children().removeClass("active"),e(this).addClass("active"),e("#grid-view").find(".grid-control").removeClass("col-lg-4 col-lg-6 col-lg-3").addClass("col-lg-4")})),e(".change-grid-to-3").on("click",(function(){e(this).parent().children().removeClass("active"),e(this).addClass("active"),e("#grid-view").find(".grid-control").removeClass("col-lg-4 col-lg-6 col-lg-3").addClass("col-lg-3")})),e(".hidden_form_show").on("click",(function(){1==e(this).prop("checked")?e(this).parent(".checkgroup").siblings(".hidden-form").slideDown():0==e(this).prop("checked")&&e(this).parent(".checkgroup").siblings(".hidden-form").slideUp()})),e(".active_lang").on("click",(function(){e(".language_setting_list").toggleClass("active")}))})),e(".view-list-style").on("click",(function(){e(".view-grid-style").removeClass("active"),e(this).addClass("active"),e("#grid-view .grid-control").addClass("list_view_active"),e("#grid-view .grid-control .single_content").show()})),e(".view-grid-style").on("click",(function(){e(".view-list-style").removeClass("active"),e(this).addClass("active"),e("#grid-view .grid-control").removeClass("list_view_active"),e("#grid-view .grid-control .single_content").hide()}))}(jQuery);