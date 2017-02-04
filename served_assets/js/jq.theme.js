jQuery.cookie = function(name, value, options) {
    if (typeof value != 'undefined') { // name and value given, set cookie
        options = options || {};
        if (value === null) {
            value = '';
            options.expires = -1;
        }
        var expires = '';
        if (options.expires && (typeof options.expires == 'number' || options.expires.toUTCString)) {
            var date;
            if (typeof options.expires == 'number') {
                date = new Date();
                date.setTime(date.getTime() + (options.expires * 24 * 60 * 60 * 1000));
            } else {
                date = options.expires;
            }
            expires = '; expires=' + date.toUTCString(); // use expires attribute, max-age is not supported by IE
        }
        // CAUTION: Needed to parenthesize options.path and options.domain
        // in the following expressions, otherwise they evaluate to undefined
        // in the packed version for some reason...
        var path = options.path ? '; path=' + (options.path) : '';
        var domain = options.domain ? '; domain=' + (options.domain) : '';
        var secure = options.secure ? '; secure' : '';
        document.cookie = [name, '=', encodeURIComponent(value), expires, path, domain, secure].join('');
    } else { // only name given, get cookie
        var cookieValue = null;
        if (document.cookie && document.cookie != '') {
            var cookies = document.cookie.split(';');
            for (var i = 0; i < cookies.length; i++) {
                var cookie = jQuery.trim(cookies[i]);
                // Does this cookie string begin with the name we want?
                if (cookie.substring(0, name.length + 1) == (name + '=')) {
                    cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                    break;
                }
            }
        }
        return cookieValue;
    }
};

jQuery.fn.exists = function(){return jQuery(this).length>0;}

$(function(){
	
		Shadowbox.init();
	
	// view mode	
	function show_list(){
		$('p.view-mode a').removeClass('selected');
		$('p.view-mode .list').addClass('selected');
		$('.products-grid').hide();
		$('.products-list').show();
	}
	
	function show_grid(){
		$('p.view-mode a').removeClass('selected');
		$('p.view-mode .grid').addClass('selected');
		$('.products-list').hide();
		$('.products-grid').show();
	}
			
	$('p.view-mode a').each(function(){
		$(this).click(function(){
			var el = $(this).attr("data-mode");
			if( el == 'grid'){
				show_grid();
				$.cookie("view_mode", "grid");
			}else{
				show_list();	
				$.cookie("view_mode", "list");
			}
		})
	})
			
	if($.cookie("view_mode")) {
		if($.cookie("view_mode") == 'grid') {
			show_grid();
		}else{
			show_list();	
		}
	}
						
	// main menu		
	 $('ul#nav > li, ul#nav li ul > li').hover(function(){
		$(this).addClass('over').find('> ul').fadeIn('fast')
	},function(){
		$(this).removeClass('over').find('> ul').fadeOut('fast')
	}) 
		
	// check quantity field
	 /*$(".qty").bind("keyup", function() {
          this.value = this.value.replace(/[^0-9\.]/g,'1'); 
      if(this.value == 0){ 
		  $(this).attr('value','1')
		  }
     });*/
	 
	 
			
})
 var removeCompareItem = function(product_id) {
    var fields =  new Object;
    fields['_method'] = 'delete';
    var path   = '/compares/' + product_id + '.json';
    show_preloader();
    $.ajax({
        url:      path,
        type:     'post',
        data:     fields,
        dataType: 'json',
        success:  function(response) {
            $('.compare_' + product_id).remove();
            hide_preloader();
        },
        error:  function(response) {
            hide_preloader();
        }
    });
}

$(document).ready(function() {
    $('#compare_table').fixedtableheader(/*{ headerrowsize: 2 }*/);
 $(".compare_show_similar").hide();
    $('#compare_table thead tr:first th').each(function(){
        $(".product_cell_main",this).width($(this).width());
    });

     $("#compare_table .del_compare").live("click",function(e){
      e.preventDefault();
      var b = $(this).attr("rel")
      removeCompareItem($(this).attr("rel")); 
     var bb = $(this).parents('body').find("#compare a[rel='"+b+"']")
     $(bb).trigger('click');
    	
    });

    if(!$("#compare_table .same").length){
        $(".compare_show_similar, .compare_hide_similar").hide();
    } else {
        $(".compare_show_similar").live("click",function(){
            $(".compare_show_similar").hide();
            $(".compare_hide_similar").show()
            $("#compare_table .same").show();
        });
        $(".compare_hide_similar").live("click",function(){
            $(".compare_hide_similar").hide();
            $(".compare_show_similar").show()
            $("#compare_table .same").hide();
        });
    }
});



$(document).ready(function(){
	
 	$('#search_mini_form .button').click(function(){
		var input = $(this).parent().find('.input-text')
		var val = $.trim(input.val())
		if(val == '' ){
			input.val('введите запрос');
			return false;
			}
			
			
	})
	
 $('#search_mini_form .input-text').focus(function(){
				if($(this).val() == 'введите запрос'){
					$(this).val('')
					}
				})  
	
	
	var Large = $(".large-image"), Thumbs = $(".preview-list a");
   Thumbs.hover(function(){
       Large.css("background-image","url("+$(this).attr("data-img")+")");
       Large.attr("href",$(this).attr("href"));
       Large.attr("alt",$(this).attr("alt"));
       Shadowbox.clearCache(); Shadowbox.setup();
   });
	
	
	
})


jQuery.fn.fixedtableheader = function(options) { var settings = jQuery.extend({ headerrowsize: 1, highlightrow: false, highlightclass: "highlight" }, options); this.each(function(i) { var $tbl = $(this); var $tblhfixed = $tbl.find("tr:lt(" + settings.headerrowsize + ")"); var headerelement = "th"; if ($tblhfixed.find(headerelement).length == 0) headerelement = "td"; if ($tblhfixed.find(headerelement).length > 0) { $tblhfixed.find(headerelement).each(function() { $(this).css("width", $(this).width()); }); var $clonedTable = $tbl.clone().empty(); var tblwidth = GetTblWidth($tbl); $clonedTable.attr("id", "fixedtableheader" + i).css({ "position": "fixed", "top": "0", "left": $tbl.offset().left }).append($tblhfixed.clone()).width(tblwidth).hide().appendTo($("body")); if (settings.highlightrow) $("tr:gt(" + (settings.headerrowsize - 1) + ")", $tbl).hover(function() { $(this).addClass(settings.highlightclass); }, function() { $(this).removeClass(settings.highlightclass); }); $(window).scroll(function() { if (jQuery.browser.msie && jQuery.browser.version == "6.0") $clonedTable.css({ "position": "absolute", "top": $(window).scrollTop(), "left": $tbl.offset().left }); else $clonedTable.css({ "position": "fixed", "top": "0", "left": $tbl.offset().left - $(window).scrollLeft() }); var sctop = $(window).scrollTop(); var elmtop = $tblhfixed.offset().top; if (sctop > elmtop && sctop <= (elmtop + $tbl.height() - $tblhfixed.height())) $clonedTable.show(); else $clonedTable.hide(); }); $(window).resize(function() { if ($clonedTable.outerWidth() != $tbl.outerWidth()) { $tblhfixed.find(headerelement).each(function(index) { var w = $(this).width(); $(this).css("width", w); $clonedTable.find(headerelement).eq(index).css("width", w); }); $clonedTable.width($tbl.outerWidth()); } $clonedTable.css("left", $tbl.offset().left); }); } }); function GetTblWidth($tbl) { var tblwidth = $tbl.outerWidth(); return tblwidth; } };
 
 
