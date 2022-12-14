(function () {
	"use strict";

	var slideMenu = $('.side-menu');

	// Toggle Sidebar
	$(document).on('click','[data-toggle="sidebar"]',function(event) {
		event.preventDefault();
		$('.app').toggleClass('sidenav-toggled');
	});
	
	$(window).on('load resize',function(){
        if($(window).width() < 739){
            $('.side-menu').hover(function(event) {
				event.preventDefault();
				$('.app').addClass('sidenav-toggled');
			});
		}
		if($(window).width() > 739){
			$(".app-sidebar").hover(function() {
				if ($('.app').hasClass('sidenav-toggled')) {
					$('.app').addClass('sidenav-toggled1');
				}
			}, function() {
				if ($('.app').hasClass('sidenav-toggled')) {
					$('.app').removeClass('sidenav-toggled1');
				}
			});
		}
    });






	//Activate bootstrip tooltips
	$("[data-toggle='tooltip']").tooltip();


	// ______________Active Class
	$(document).ready(function() {
		$(".app-sidebar li a").each(function() {
		  var pageUrl = window.location.href.split(/[?#]/)[0];
			if (this.href == pageUrl) {
				$(this).addClass("active");
				$(this).parent().addClass("is-expanded");
				$(this).parent().parent().prev().addClass("active");
				$(this).parent().parent().addClass("open");
				$(this).parent().parent().prev().addClass("is-expanded");
				$(this).parent().parent().parent().addClass("is-expanded");
				$(this).parent().parent().parent().parent().addClass("open");
				$(this).parent().parent().parent().parent().prev().addClass("active");
				$(this).parent().parent().parent().parent().parent().addClass("is-expanded");
			}
		});
	});
	
	var toggleSidebar = function() {
		var w = $(window);
		if(w.outerWidth() <= 1024) {
			$("body").addClass("sidebar-gone");
			$(document).off("click", "body").on("click", "body", function(e) {
				if($(e.target).hasClass('sidebar-show') || $(e.target).hasClass('search-show')) {
					$("body").removeClass("sidebar-show");
					$("body").addClass("sidebar-gone");
					$("body").removeClass("search-show");
				}
			});
		}else{
			$("body").removeClass("sidebar-gone");
		}
	}
	toggleSidebar();
	$(window).resize(toggleSidebar);
	
		
	
	//sticky-header
		$(window).on("scroll", function(e){
		if ($(window).scrollTop() >= 70) {
			$('.main-header').addClass('fixed-header');
			$('.main-header').addClass('visible-title');
		}
		else {
			$('.main-header').removeClass('fixed-header');
			$('.main-header').removeClass('visible-title');
		}
    });
	
	

})();