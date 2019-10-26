(function($) {
    "use strict";

    var megaMenuAjax    = false;
    var fixedNav        = pixel.fixed_nav;
    var stickySidebar   = pixel.sticky_sidebar;
    var menu_style      = pixel.menu_style;

    jQuery(window).resize(function() {

        //Header
        if ( fixedNav == 1 ) {
            if($(window).width() > 991){
                $(".main-nav-wrapper").fixed({
                    topSpace: 0
                });
            }else{
               $(".mobile-header").fixed({
                    topSpace: 0
                }); 
            }
        }

    });
    jQuery(document).ready(function(){

        $('.lazy-img').lazy({
            effect:    'fadeIn',
            effectTime: 750,
            // called after an element was successfully handled
            afterLoad: function(element) {
                element.removeClass('lazy-img');
            },

        });

        var marginFromTop = 30;
        if ( fixedNav == 1 ) {
            marginFromTop = 90;
        }
        if ( stickySidebar == 1 ) {
            jQuery('.main-content, .sidebar').theiaStickySidebar({
                additionalMarginTop: marginFromTop
            });
        }
        
        //Header
        if ( fixedNav == 1 ) {
            if($(window).width() > 991){
                $(".main-nav-wrapper").fixed({
                    topSpace: 0
                });
            }else{
               $(".mobile-header").fixed({
                    topSpace: 0
                }); 
            }
        }

        $(".wrapper").fitVids();

        $("#navigation").navigation({
            showDuration: 500,
            effect: "fade",
            hiddenOnMobile:true,
            submenuIndicatorTrigger:true,
            mobileBreakpoint:991,
        });

        jQuery(document).on('click', '#pixel-show-navbar', function(){
            $("#navigation").data("navigation").toggleOffcanvas();
            return false;
        });

        jQuery(document).on('click', '#pixel-show-sidebar', function(){
            jQuery("body").addClass("off-canves-opend")
            return false;
        });

        jQuery(document).on('click', '.pixel-close-all-window, .sidebar-close-button', function(){
            jQuery("body").removeClass("off-canves-opend")
            return false;
        });

        jQuery(document).on('mouseenter', '.mega-posts', function(){
            var menuItem    = jQuery(this),
            postContainer = menuItem.find( '.mega-posts-content' );

            var catID     = menuItem.find("a").attr('data-id'),
            postsNumber  = 4;

            if( catID && ! menuItem.hasClass( 'is-loaded' )){

                menuItem.addClass('is-loaded');

                megaGetPosts( postContainer, menuItem, catID, postsNumber );
                return false;
            }
        });

        jQuery(document).on('click', '.mega-tabs-link', function(){
            return false;
        });

        jQuery(document).on('mouseenter', '.mega-tabs-link', function(){

            var menuItem    = jQuery(this),
            menuParent = menuItem.closest( '.mega-menu' ),
            catID     = menuItem.find("a").attr('data-id'),
            postContainer = menuParent.find( '.mega-posts-content' );

            if( menuItem.hasClass('mega-current') ) return;

            menuParent.find( '.mega-tabs-link' ).removeClass( 'mega-current' );
            menuItem.addClass( 'mega-current' );

            var postsNumber  = 4;

            if( postContainer.find( '#mega-ready-' + catID ).length ){
                postContainer.find( 'div.mega-placeholder' ).hide();

                postContainer.find( '#mega-ready-' + catID ).show();


                return false;
            }
            else{
                menuItem.removeClass( 'is-loaded' );

            }

            if( catID && ! menuItem.hasClass( 'is-loaded' )){

                menuItem.addClass('is-loaded');

                megaGetPosts( postContainer, menuItem, catID, postsNumber );
                return false;
            }
        });

        jQuery(document).on('click', '.mega-tabs-link-h', function(){
            return false;
        });

        jQuery(document).on('mouseenter', '.mega-tabs-link-h', function(){

            var menuItem    = jQuery(this),
            menuParent = menuItem.closest( '.mega-menu' ),
            catID     = menuItem.find("a").attr('data-id'),
            postContainer = menuParent.find( '.mega-posts-content' );

            if( menuItem.hasClass('mega-current') ) return;

            menuParent.find( '.mega-tabs-link-h' ).removeClass( 'mega-current' );
            menuItem.addClass( 'mega-current' );

            var postsNumber  = 4;

            if( postContainer.find( '#mega-ready-' + catID ).length ){
                postContainer.find( 'div.mega-placeholder' ).hide();

                postContainer.find( '#mega-ready-' + catID ).show();


                return false;
            }
            else{
                menuItem.removeClass( 'is-loaded' );

            }

            if( catID && ! menuItem.hasClass( 'is-loaded' )){

                menuItem.addClass('is-loaded');

                megaGetPosts( postContainer, menuItem, catID, postsNumber );
                return false;
            }
        });

        jQuery(document).on('mouseenter', '.mega-posts-tabs', function(){

            var menuItem    = jQuery(this),
            menuParent = menuItem.closest( '.mega-menu' ),
            catID     = menuItem.find("a").attr('data-id'),
            postContainer = menuParent.find( '.mega-posts-content' );


            var postsNumber  = 4;

            if( postContainer.find( '#mega-ready-' + catID ).length ){

                postContainer.find( 'div.mega-placeholder' ).hide();

                postContainer.find( '#mega-ready-' + catID ).show();

                return false;
            }
            else{
                menuItem.removeClass( 'is-loaded' );
            }

            if( catID && ! menuItem.hasClass( 'is-loaded' )){
                postContainer.find( 'div.mega-placeholder' ).hide();

                menuItem.addClass('is-loaded');

                megaGetPosts( postContainer, menuItem, catID, postsNumber );
                return false;
            }
        });

        jQuery(document).on('mouseenter', '.mega-posts-tabs-h', function(){

            var menuItem    = jQuery(this),
            menuParent = menuItem.closest( '.mega-menu' ),
            catID     = menuItem.find("a").attr('data-id'),
            postContainer = menuParent.find( '.mega-posts-content' );


            var postsNumber  = 4;

            if( postContainer.find( '#mega-ready-' + catID ).length ){

                postContainer.find( 'div.mega-placeholder' ).hide();

                postContainer.find( '#mega-ready-' + catID ).show();

                return false;
            }
            else{
                menuItem.removeClass( 'is-loaded' );
            }

            if( catID && ! menuItem.hasClass( 'is-loaded' )){
                postContainer.find( 'div.mega-placeholder' ).hide();

                menuItem.addClass('is-loaded');

                megaGetPosts( postContainer, menuItem, catID, postsNumber );
                return false;
            }
        });

        function megaGetPosts( postContainer, menuItem, catID, postsNumber ){

            if( megaMenuAjax && megaMenuAjax.readystate != 4 ){
                megaMenuAjax.abort();
            }

            // Ajax Call
            megaMenuAjax = jQuery.ajax({
                url : pixel.ajaxurl,
                type: 'post',
                data: {
                    action  : 'pixel_load_mega_posts',
                    id      : catID,
                    number  : postsNumber,
                },
                beforeSend: function( data ){
                    // Add the loader
                    if( ! postContainer.find('.pixel-loader').length ){
                        postContainer.addClass('is-loading').append( pixel.ajax_loader );
                    }
                },
                success: function( data ){
                    var content = jQuery( data );
                    postContainer.find( 'div.mega-placeholder' ).hide();
                    postContainer.append( content );
                    postContainer.removeClass('is-loading').find('.pixel-loader').remove();

                },
                error: function( data ){
                    menuItem.removeClass('is-loaded');
                },
                complete: function( data ){
                    //postContainer.removeClass('is-loading').find('.pixel-loader').remove();
                },
            });
        }

        jQuery('.pixel-ajax-search').devbridgeAutocomplete({
            serviceUrl : pixel.ajaxurl,
            params     : {'action':'pixel_load_search_result'},
            minChars   : 3,
            width      : 300,
            maxHeight  : 'auto',
            showNoSuggestionNotice: true,
            appendTo:"#searchform",
            tabDisabled:true,
            preserveInput:true,
            onSearchStart: function(query){
                jQuery(this).parent().parent().find('.nav-search-close-button').html( pixel.ajax_loader );
            },
            onSearchComplete: function(query){
                jQuery(this).parent().parent().find('.nav-search-close-button').html( '<i class="fa fa-close"></i>' );
            },
            formatResult: function(suggestion, currentValue){
                return suggestion.layout;
            },
            onSelect: function(suggestion){
                window.location = suggestion.url;
            }
        });

        //  tooltip in index and single
        jQuery('#post-share a').tooltip();
        jQuery('#author-social-links li a').tooltip();
        jQuery('#random-post').tooltip();

        jQuery('.box-btns').flexMenu({
            threshold   : 0,
            cutoff      : 0,
            linkText    : '<i class="fa fa-plus" aria-hidden="true"></i>',
            linkTextAll : '<i class="fa fa-plus" aria-hidden="true"></i>',
            linkTitle   : '',
            linkTitleAll: '',
            showOnHover : ( jQuery(window).width() > 991 ? true : false ),
        });

        jQuery(document).on('click', '.category-box-btn', function(){
            var currentItem     = jQuery(this),
            currentParent       = currentItem.closest( '.category-box' ),
            catID               = currentItem.attr('data-id'),
            blockID             = currentParent.get(0).id,
            postContainer       = currentParent.find( '.box-content' );

            if ( currentItem.hasClass('active') ) { return false; }

            currentParent.find( '.category-box-btn' ).removeClass( 'active' );
            currentItem.addClass( 'active' );
            
            var block      = jQuery.extend( {}, window[ 'js_'+blockID ] );
            if (  catID != "" ) {
                block['category'] = catID;
            }

            jQuery.ajax({
                url : pixel.ajaxurl,
                type: 'post',
                data: {
                    action  : 'pixel_load_home_boxes',
                    options      : block,
                },
                beforeSend: function( data ){
                    // Add the loader
                    if( ! postContainer.find('.pixel-loader').length ){
                        currentParent.addClass('is-loading').append( pixel.ajax_loader );
                    }
                },
                success: function( data ){
                    var content = jQuery.parseJSON( data );
                    content = content['code'];
                    postContainer.html( content );
                    currentParent.removeClass('is-loading').find('.pixel-loader').remove();

                },
                error: function( data ){
                    currentParent.removeClass('is-loading').find('.pixel-loader').remove();
                },
            });
            return false;
        });

        // go to top icon
        jQuery('#top-control').on('click',function(){
            jQuery('html, body').animate({scrollTop: '0px'}, 800);
            return false;
        });

        var $topButton = jQuery('#top-control');
        
        jQuery(window).scroll(function(){
            if ( jQuery(window).scrollTop() > 150 ){
                $topButton.addClass('show')
            }
            else {
                $topButton.removeClass('show')
            }
        });


        jQuery('.single_add_to_cart_button, .ajax_add_to_cart').on( 'click', function(e) {
            //e.preventDefault();

            if( jQuery(this).hasClass('ajax_add_to_cart') ){
                
                var product_id      = jQuery(this).data( 'product_id' );
    
                var variation_id    = '';

                var quantity        = 1;

            }else{

                var product_id      = jQuery('input[name="product_id"]').val();
    
                var variation_id    = jQuery('input[name="variation_id"]').val();

                var quantity        = jQuery('input[name="quantity"]').val();

            }
            
            jQuery('.cart-dropdown-inner').empty();
        
            if (variation_id != '') {

                jQuery.ajax ({
                    url: pixel.ajaxurl,
                    type:'POST',
                    data:'action=pixel_add_cart_single&product_id=' + product_id + '&variation_id=' + variation_id + '&quantity=' + quantity,
        
                    success:function(results) {
                        jQuery('.cart-dropdown-inner').append(results);
                        var cartcount = jQuery('.item-count').html();
                        jQuery('.cart-totals span').html(cartcount);
                    }
                });

            } else {
                jQuery.ajax ({
                    url: pixel.ajaxurl,  
                    type:'POST',
                    data:'action=pixel_add_cart_single&product_id=' + product_id + '&quantity=' + quantity,
        
                    success:function(results) {
                        jQuery('.cart-dropdown-inner').append(results);
                        var cartcount = jQuery('.item-count').html();
                        jQuery('.cart-totals span').html(cartcount);
                    }
                });
            }
        });

    });

    if( menu_style == 'magic-line' || menu_style == "magic-box" ){

        jQuery( window ).load(function(){

            pixel_magic();
    
        });
    }

    function pixel_magic(){

        //magic box for main menu
        var magicLine, el, leftPos, newWidth, mainMenu, activeItem;

        mainMenu = jQuery("#main-nav-bar  ul.nav-menu") ;
        mainMenu.append("<li id='magic-line'></li>");
        activeItem = jQuery("#main-nav-bar ul.nav-menu > .current-menu-item,#main-nav-bar ul.nav-menu > .current-menu-ancestor,#main-nav-bar ul.nav-menu > .current-menu-parent,#main-nav-bar ul.nav-menu > .current_page_parent");
        magicLine = jQuery("#magic-line");

        try{

            magicLine
            .width(activeItem.width())
            .css("left", activeItem.position().left)
            .data("origLeft", magicLine.position().left)
            .data("origWidth", magicLine.width())
            .data("origColor", activeItem.find("a").attr("data-color"))
            .css("background-color",activeItem.find("a").attr("data-color"));

        }catch (err){

            magicLine
            .width(0)
            .css("left", 0)
            .data("origLeft", 0)
            .data("origWidth", 0)
            .data("origColor", mainColor)
            .css("background-color", mainColor);

        }

        jQuery("#main-nav-bar ul.nav-menu > li").on({
            mouseover : function() {
                el = jQuery(this);
                leftPos = el.position().left;
                newWidth = el.width();

                magicLine.stop().animate({
                    left: leftPos,
                    width: newWidth,
                    backgroundColor: el.find("a").attr("data-color")
                },300);

            },
            mouseleave : function() {
                magicLine.stop().animate({
                    left: magicLine.data("origLeft"),
                    width: magicLine.data("origWidth"),
                    backgroundColor: magicLine.data("origColor")
                },300);
            }
        });

    }

})(jQuery);