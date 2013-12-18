/* Author: Dan Linn */
(function($) {
  'use strict'; 
  $(window).resize(function(){
    if(!$('.mobileselect').length) {
      createMobileMenu();
    } else if ($(window).width()>=480) {
      $('#navigation ul').show();
      $('.mobileselect').hide();
    } else {
      $('#navigation ul').hide();
      $('.mobileselect').show();
    }
  });
  function createMobileMenu(){
    $('#navigation ul').mobileSelect({
      autoHide: true, // Hide the ul automatically
      defaultOption: 'Navigation', // The default select option
      deviceWidth: 480, // The select will be added for screensizes smaller than this
      appendTo: '', // Used to place the drop-down in some location other than where the primary nav exists
      className: 'mobileselect', // The class name applied to the select element
      useWindowWidth: true // Use the width of the window instead of the width of the screen
    });
  }
  Drupal.behaviors.mobileMenu = {
    attach: function (context) {
      createMobileMenu();
    }
  };

  var calculateProductPictureMargins = function(){
    var window_height = $(window).height();
    var padding_top = parseInt($(".node-type-product-display #main .content article .left .pics").css("padding-top"));
    var first_img_height = $(".node-type-product-display #main .content article .left .pics img").addClass("check").first().addClass("check2").height();
    first_img_height = $(".node-type-product-display #main .content article .left .pics img").first().height();
    var second_img_height = $(".node-type-product-display #main .content article .left .pics img").last().height();
    var footer_size = 191;
    var header_size = 75;
    var header_size = padding_top;

    /* CALCULATE TOP MARGIN OF FIRST PIC */
    var img_margin_top = window_height - padding_top - footer_size - first_img_height;
    img_margin_top = img_margin_top / 2;
    if(img_margin_top > 0){
      $(".node-type-product-display #main .content article .left .pics img").first().css("margin-top",img_margin_top+"px");
    } else {
    }    
    /* CALCULATE BOTTOM MARGIN OF FIRST PIC */
    var img_margin_bottom = window_height - padding_top - first_img_height;
    if(img_margin_bottom > 0){
      $(".node-type-product-display #main .content article .left .pics img").first().css("margin-bottom",img_margin_bottom+"px");
    } else {
    }

    /* CALCULATE BOTTOM MARGIN OF LAST PIC */
    img_margin_bottom = window_height - header_size - footer_size - second_img_height;
    img_margin_bottom = img_margin_bottom / 2 + footer_size;
    //$(".node-type-product-display #main .content article .left .pics img").last().css("margin-bottom",img_margin_bottom+"px");
    $(".node-type-product-display #main .content article .left .pics .bottom_padding").css("height",img_margin_bottom+"px");
  }
  var movePicture = function(elm){
    var container = $('.left');
    var timing = 400;
    if(elm.next("img").size()){
      container.animate({
          scrollTop: elm.next().offset().top
      }, timing);
    } else {
      container.animate({
          scrollTop: elm.prev().offset().top
      }, timing);
    }
  }
  
  $(document).ready(function(){
    $('.view-commerce-cart-form .views-field-commerce-product a').click(function(){
      return false;
    });
    $('.node-type-product-display #edit-submit.form-button-disabled').removeAttr("disabled").click(function(){
      var elm = $('.form-item-attributes-field-size label[for="edit-attributes-field-size"]');
      elm.css("color","red"); 
      setTimeout(function(){
        elm.css("color","black");
      }, 1000);
      return false;
    });
    if($("#edit-extra-pane-node-15 .messages.error").length){
      $("#edit-extra-pane-node-15 .messages.error").html("Please agree to the terms and conditions, otherwise we cannot process your order.");
    }
  });
  $(window).load(function () {
    calculateProductPictureMargins();
    $( window ).resize(function() {
      calculateProductPictureMargins();
    });
    $(".node-type-product-display #main .content article .left .pics img").click(function(){
      movePicture($(this));
    });
  });
  
})(jQuery);





