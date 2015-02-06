$(document).ready(function() {
    
    $('[data-confirmAction]').click(function(){
        var $this = $(this);
        var message = $this.attr('data-confirmAction') || 'Czy na pewno chcesz wykonac ta akcje?';

        return confirm(message);
    });

    $(".submenu > a").click(function(e) {
        e.preventDefault();
        var $li = $(this).parent("li");
        var $ul = $(this).next("ul");

        if ($li.hasClass("open")) {
            $ul.slideUp(350);
            $li.removeClass("open");
        } else {
            $(".nav > li > ul").slideUp(350);
            $(".nav > li").removeClass("open");
            $ul.slideDown(350);
            $li.addClass("open");
        }
    });
    
    $("#page_admin_published").change(function() {       
        if($(this).is(":checked")) {
            $("#page_admin_contactPage").removeAttr("checked");
        }        
    });
    
    $("#page_admin_contactPage").change(function() {       
        if($(this).is(":checked")) {
            $("#page_admin_published").removeAttr("checked");
        }        
    });
    
    $('form [name="limit"]').change(function(){
        $(this).closest('form').submit();
    });

});