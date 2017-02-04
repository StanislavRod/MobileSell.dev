

$(function() {
	
	  
  
  
  
function removeItemTrigger(){
	 
  $(".parse_cart .parse_remove_action").each(function(i) {
        if ( $(this).attr('processed') ) { return; }
  //$(this).attr('processed',true);
  
  $(this).click(function(e){
        e.preventDefault();
		var thisitm = $(this).attr('data-id');
  		var item_row = $('.'+thisitm);
  
  
  var fields =  new Object;
        fields['_method'] = 'delete';
  var id = $(this).attr("id").replace("delete_","");
  var path   = '/cart_items/'+id+'.json';
  show_preloader();
  $.ajax({
      url:      path,
      type:     'post',
      data:     fields,
      dataType: 'json',
      success:  function(response) {
    hide_preloader();
    item_row.hide("normal", function(){ item_row.remove(); });
    
    if (response.items_count == 0) {
      $(".basket_full").hide();
      $(".basket_empty").show();
	  $('.parse_total_price, .cart_items_price').html(InSales.formatMoney(response.total_price, cv_currency_format));
		$('.items_count, .cart_items_count').html(response.items_count);
    } else {
    $('.parse_total_price, .cart_items_price').html(InSales.formatMoney(response.total_price, cv_currency_format));
		$('.items_count, .cart_items_count').html(response.items_count);
    }
	
      },
      error:  function(response) { alert("произошла ошибка") },
	  complete: function(){
		  
		//var new_cart = $('.parse_items:last').clone()
		//$('.cart_items_list').empty().html(new_cart);
		  }
  });
  return false;
  
    });
  });

}

     removeItemTrigger();
 

 
                var updateCart = function(response) {
                         $(".parse_items").empty();
                            var item_row = $('#order_item_js_template').html();
                  			
                            $.each(response.items, function(){
                              var item = this;
                              $(".parse_items").append(item_row);
                              var last_item_row = $(".parse_items .parse_item:last");
							  last_item_row.addClass('dataid'+item.variant_id)
                              last_item_row.find('a.parse_product_url:first').attr('href',item.product_url).attr('title',item.title).html(item.title);
                              last_item_row.find('.parse_item_quantity:first').attr('id','item_quantity_'+item.variant_id).text(item.quantity);
                              last_item_row.find('a.parse_remove_action:first').attr('href','#').attr('id','delete_'+item.variant_id).attr('data-id','dataid'+item.variant_id)
                              last_item_row.find('.parse_img:first').attr('src',item.product.first_image.small_url);
                              last_item_row.find('.parse_sale_price:first').html(InSales.formatMoney(item.sale_price, cv_currency_format));
                            });
                            $('.parse_cart .parse_total_price, .parse_total_price, .cart_items_price, #cart_total_price').html(InSales.formatMoney(response.total_price, cv_currency_format));
                            $('.parse_cart .items_count, .cart_items_count, .parse_total_count, .cart_items_count').html(response.items_count);
						    $('.basket_empty').hide();
                            $('.basket_full').show();
                            removeItemTrigger();
                            set_preloaders_message('<div id="add_product_notification">Товар добавлен в корзину</div>');
                            window.setTimeout( hide_preloader, 1000);
                     
                }
                initAjaxAddToCartButton('.addtocart', updateCart); 
  
    
		    
      

 });

 
 function cartTriggers(){
  // hz
  var open_cart_total = $('.total_amount_s').html()
  $('.total_amount_c').html(open_cart_total)

 
  /* Удаление */
  $(".cart-table .del a").each(function(i) {
      if ( $(this).attr('processed') ) { return; }
    $(this).attr('processed',true);
    
    $(this).bind("click dblclick", function(e){
        if ( $(this).attr('in_process') ) { return; }
      $(this).attr('in_process',true);
      
        e.preventDefault();
      var link = $(this);
      var item_row = link.parents("tr:first");
      var fields =  new Object;
      fields['_method'] = 'delete';
      id = link.attr("id").replace("delete_","");
      var path   = '/cart_items/'+id+'.json';
      show_preloader(); // Показываем прелоадер
      $.ajax({
          url:      path,
          type:     'post',
          data:     fields,
          dataType: 'json',
          success:  function(response) {
          if( !$(".cart-table td").length ){
            $("#cartform").hide();
            $(".cart-empty").show();
          }
          hide_preloader(); // Убираем прелоадер
          item_row.slideUp("normal", function(){ item_row.remove(); });
          $('.total_amount').html(InSales.formatMoney(response.total_price, cv_currency_format));
           
          $(".parse_total_price").html(InSales.formatMoney(response.total_price, cv_currency_format));
         $('.items_count').html(response.items_count);
         
          
          },
          error:  function(response) { 
            if ( $(this).attr('in_process') ) { return; }
            // alert("произошла ошибка");
          }
      });
      return false;
    });
  });

    // Пересчитать
    // Массив для хранения
    var qSwaps = [];

    $(".cart-table .quantity input").each(function(i){
        qSwaps[i] = $(this).val();
    });

    $(".cart-table .quantity input").each(function(i) {
        if ( $(this).attr('processed') ) { return; }
        $(this).attr('processed',true);
        $(this).bind("change keyup", function(e) {
            var el = $(this);
            var value = el.val();

            val = value.replace(/[^\d\.\,]+/g,'');
            if (val < 0){ /* nothing to do */ }
            if(val != value) el.val(val);

            if (val == qSwaps[i]) return; // если значение не изменилось - выходим

            qSwaps[i] = val;

            el.parents("tr:first").find(".total-price").html( InSales.formatMoney(val*el.attr('price'), cv_currency_format) )
            recalculate_order();
        }).bind('blur',function(){
            var el = $(this);
            var value = el.val();
            val = value.replace(/[^\d\.\,]+/g,'');

            if (val < 0 || val == ""){ val = 0; }

            el.val(val);

            el.change();
        });
    });

    
    
    function recalculate_order() {
    var fields =  new Object;
    fields = $('#cartform').serialize();
    //var path   = $('#cartform').attr('action')+'.json';
      var path = '/cart_items/update_all.json'
    
    show_preloader(); // Показываем прелоадер
    $.ajax({
        url:      path,
        type:     'post',
        data:     fields,
        dataType: 'json',
        success:  function(response) {
        hide_preloader(); // Убираем прелоадер    
        //$(".js_cart_update").hide();
        $('.total_amount, .cart_items_price').html( InSales.formatMoney(response.total_price, cv_currency_format) );
        $('.cart_items_count').html(response.items_count);
        },
        error:  function(response) {  alert("произошла ошибка"); hide_preloader(); }
    });
    
    }

}


function getParam(sParamName){
    var Params = location.search.substring(1).split("&");
    var variable = "";
    for (var i = 0; i < Params.length; i++){
      if (Params[i].split("=")[0] == sParamName){
        if (Params[i].split("=").length > 1) variable = Params[i].split("=")[1];
        return variable;
      }
    }
    return "";
}

var rc_total_count = 0;

function recalc_offer_price(){
  rc_total_count = 0;

  $('.product-variants input:enabled').each(function(){
    var val = $(this).val();
    if (isNaN(val) || val < 0){ 
      val = 0; $(this).val(val);
      } 
    rc_total_count = rc_total_count + $(this).attr("price")*val;
  });
  
  
rc_coupon = 0;
	$(".coupon").each(function(){
	    rc_coupon = rc_coupon + Math.parseInt($(this).text());

	});

	$("#create_order").css("opacity",rc_total_count > 0 ? 1 : 0.5).attr("disabled",rc_total_count > 0 ? "" : "disabled");
	$("#price-field").html( InSales.formatMoney(rc_total_count - rc_coupon, cv_currency_format));
  
  
  
  $("#price-field").html( InSales.formatMoney(rc_total_count, cv_currency_format));
  
}




 
 
 
 
 
;
