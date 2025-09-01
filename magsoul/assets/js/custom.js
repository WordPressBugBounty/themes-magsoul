jQuery(document).ready(function($) {
    'use strict';

    if(magsoul_ajax_object.secondary_menu_active){
        $(".magsoul-nav-secondary .magsoul-secondary-nav-menu").addClass("magsoul-secondary-responsive-menu");

        $( ".magsoul-secondary-responsive-menu-icon" ).on( "click", function() {
            $(this).next(".magsoul-nav-secondary .magsoul-secondary-nav-menu").slideToggle();
        });

        $(window).on( "resize", function() {
            if(window.innerWidth > 1112) {
                $(".magsoul-nav-secondary .magsoul-secondary-nav-menu, nav .sub-menu, nav .children").removeAttr("style");
                $(".magsoul-secondary-responsive-menu > li").removeClass("magsoul-secondary-menu-open");
            }
        });

        $( ".magsoul-secondary-responsive-menu > li" ).on( "click", function(event) {
            if (event.target !== this)
            return;
            $(this).find(".sub-menu:first").toggleClass('magsoul-submenu-toggle').parent().toggleClass("magsoul-secondary-menu-open");
            $(this).find(".children:first").toggleClass('magsoul-submenu-toggle').parent().toggleClass("magsoul-secondary-menu-open");
        });

        $( "div.magsoul-secondary-responsive-menu > ul > li" ).on( "click", function(event) {
            if (event.target !== this)
                return;
            $(this).find("ul:first").toggleClass('magsoul-submenu-toggle').parent().toggleClass("magsoul-secondary-menu-open");
        });
    }

    if(magsoul_ajax_object.primary_menu_active){
        $(".magsoul-nav-primary .magsoul-primary-nav-menu").addClass("magsoul-primary-responsive-menu");

        $( ".magsoul-primary-responsive-menu-icon" ).on( "click", function() {
            //$(this).next(".magsoul-nav-primary .magsoul-primary-nav-menu").slideToggle();
            $(".magsoul-nav-primary .magsoul-primary-nav-menu").slideToggle();
        });

        $(window).on( "resize", function() {
            if(window.innerWidth > 1112) {
                $(".magsoul-nav-primary .magsoul-primary-nav-menu, nav .sub-menu, nav .children").removeAttr("style");
                $(".magsoul-primary-responsive-menu > li").removeClass("magsoul-primary-menu-open");
            }
        });

        $( ".magsoul-primary-responsive-menu > li" ).on( "click", function(event) {
            if (event.target !== this)
            return;
            $(this).find(".sub-menu:first").toggleClass('magsoul-submenu-toggle').parent().toggleClass("magsoul-primary-menu-open");
            $(this).find(".children:first").toggleClass('magsoul-submenu-toggle').parent().toggleClass("magsoul-primary-menu-open");
        });

        $( "div.magsoul-primary-responsive-menu > ul > li" ).on( "click", function(event) {
            if (event.target !== this)
                return;
            $(this).find("ul:first").toggleClass('magsoul-submenu-toggle').parent().toggleClass("magsoul-primary-menu-open");
        });
    }

    if($(".magsoul-primary-responsive-menu-icon").length){
        $(".magsoul-primary-responsive-menu-icon").on('click', function (e) {
            e.preventDefault();
            //document.getElementById("magsoul-search-overlay-wrap").style.display = "block";
            //$("#magsoul-search-overlay-wrap").fadeIn();
            const magsoul_focusableelements = 'a, button, [href], input';
            const magsoul_search_modal = document.querySelector('#magsoul-menu-primary-navigation');
            const magsoul_firstfocusableelement = magsoul_search_modal.querySelectorAll(magsoul_focusableelements)[0];
            const magsoul_focusablecontent = magsoul_search_modal.querySelectorAll(magsoul_focusableelements);
            const magsoul_lastfocusableelement = magsoul_focusablecontent[magsoul_focusablecontent.length - 1];
            document.addEventListener('keydown', function(e) {
              let isTabPressed = e.key === 'Tab' || e.keyCode === 9;
              if (!isTabPressed) {
                return;
              }
              if (e.shiftKey) {
                if (document.activeElement === magsoul_firstfocusableelement) {
                  magsoul_lastfocusableelement.focus();
                  e.preventDefault();
                }
              } else {
                if (document.activeElement === magsoul_lastfocusableelement) {
                  magsoul_firstfocusableelement.focus();
                  e.preventDefault();
                }
              }
            });
            magsoul_firstfocusableelement.focus();
        });
    }

    if($(".magsoul-mobile-mennu-close").length){
        $(".magsoul-mobile-mennu-close").on('click', function (e) {
            e.preventDefault();
            $(".magsoul-nav-primary .magsoul-primary-nav-menu").slideToggle();
            $(".magsoul-primary-menu-mobile-button .magsoul-primary-responsive-menu-icon").focus();
        });
    }

    if($(".magsoul-header-icon-search").length){
        $(".magsoul-header-icon-search").on('click', function (e) {
            e.preventDefault();
            //document.getElementById("magsoul-search-overlay-wrap").style.display = "block";
            $("#magsoul-search-overlay-wrap").fadeIn();
            const magsoul_focusableelements = 'button, [href], input';
            const magsoul_search_modal = document.querySelector('#magsoul-search-overlay-wrap');
            const magsoul_firstfocusableelement = magsoul_search_modal.querySelectorAll(magsoul_focusableelements)[0];
            const magsoul_focusablecontent = magsoul_search_modal.querySelectorAll(magsoul_focusableelements);
            const magsoul_lastfocusableelement = magsoul_focusablecontent[magsoul_focusablecontent.length - 1];
            document.addEventListener('keydown', function(e) {
              let isTabPressed = e.key === 'Tab' || e.keyCode === 9;
              if (!isTabPressed) {
                return;
              }
              if (e.shiftKey) {
                if (document.activeElement === magsoul_firstfocusableelement) {
                  magsoul_lastfocusableelement.focus();
                  e.preventDefault();
                }
              } else {
                if (document.activeElement === magsoul_lastfocusableelement) {
                  magsoul_firstfocusableelement.focus();
                  e.preventDefault();
                }
              }
            });
            magsoul_firstfocusableelement.focus();
        });
    }


    if($(".magsoul-search-mobile-btn").length){
        $(".magsoul-search-mobile-btn").on('click', function (e) {
            e.preventDefault();
            //document.getElementById("magsoul-search-overlay-wrap").style.display = "block";
            $("#magsoul-search-overlay-wrap").fadeIn();
            const magsoul_focusableelements = 'button, [href], input';
            const magsoul_search_modal = document.querySelector('#magsoul-search-overlay-wrap');
            const magsoul_firstfocusableelement = magsoul_search_modal.querySelectorAll(magsoul_focusableelements)[0];
            const magsoul_focusablecontent = magsoul_search_modal.querySelectorAll(magsoul_focusableelements);
            const magsoul_lastfocusableelement = magsoul_focusablecontent[magsoul_focusablecontent.length - 1];
            document.addEventListener('keydown', function(e) {
              let isTabPressed = e.key === 'Tab' || e.keyCode === 9;
              if (!isTabPressed) {
                return;
              }
              if (e.shiftKey) {
                if (document.activeElement === magsoul_firstfocusableelement) {
                  magsoul_lastfocusableelement.focus();
                  e.preventDefault();
                }
              } else {
                if (document.activeElement === magsoul_lastfocusableelement) {
                  magsoul_firstfocusableelement.focus();
                  e.preventDefault();
                }
              }
            });
            magsoul_firstfocusableelement.focus();
        });
    }


    if($(".magsoul-search-closebtn").length){
        $(".magsoul-search-closebtn").on('click', function (e) {
            e.preventDefault();
            //document.getElementById("magsoul-search-overlay-wrap").style.display = "none";
            $("#magsoul-search-overlay-wrap").fadeOut();
        });
    }

    if(magsoul_ajax_object.fitvids_active){
        $(".entry-content, .widget").fitVids();
    }

    if(magsoul_ajax_object.backtotop_active){
        if($(".magsoul-scroll-top").length){
            var magsoul_scroll_button = $( '.magsoul-scroll-top' );
            magsoul_scroll_button.hide();

            $( window ).on( "scroll", function() {
                if ( $( window ).scrollTop() < 20 ) {
                    $( '.magsoul-scroll-top' ).fadeOut();
                } else {
                    $( '.magsoul-scroll-top' ).fadeIn();
                }
            } );

            magsoul_scroll_button.on( "click", function() {
                $( "html, body" ).animate( { scrollTop: 0 }, 300 );
                return false;
            } );
        }
    }

    if(magsoul_ajax_object.sticky_header_active){

    // grab the initial top offset of the navigation 
    var magsoulstickyheadertop = $('#magsoul-header-end').offset().top;
    
    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var magsoulstickyheader = function(){
        var magsoulscrolltop = $(window).scrollTop(); // our current vertical position from the top
             
        // if we've scrolled more than the navigation, change its position to fixed to stick to top,
        // otherwise change it back to relative

        if(magsoul_ajax_object.sticky_header_mobile_active){
            if (magsoulscrolltop > magsoulstickyheadertop) {
                $('.magsoul-site-header').addClass('magsoul-fixed');
            } else {
                $('.magsoul-site-header').removeClass('magsoul-fixed');
            }
        } else {
            if(window.innerWidth > 1112) {
                if (magsoulscrolltop > magsoulstickyheadertop) {
                    $('.magsoul-site-header').addClass('magsoul-fixed');
                } else {
                    $('.magsoul-site-header').removeClass('magsoul-fixed');
                }
            }
        }
    };

    magsoulstickyheader();
    // and run it again every time you scroll
    $(window).on( "scroll", function() {
        magsoulstickyheader();
    });

    }

    // Get the parent element
    var magsoul_socialicons = $('.magsoul-social-icons');
  
    // Check if there are any anchor elements inside the parent
    if (magsoul_socialicons.find('a').length === 0) {
       // If no anchor elements are found, hide the parent element
       magsoul_socialicons.hide();
    }

});