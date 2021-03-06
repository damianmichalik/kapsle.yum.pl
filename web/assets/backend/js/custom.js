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
    
    $( ".select2" ).select2( {
        theme: "bootstrap"        
    } );

    var $input = $('input[data-toggle="tagsinput"]');
    if ($input.length) {
        var source = new Bloodhound({
            local: $input.data('tags'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            datumTokenizer: Bloodhound.tokenizers.whitespace
        });
        $input.tagsinput({
            trimValue: true,
            focusClass: 'focus',
            typeaheadjs: {
                name: 'tags',
                source: source
            }
        });
    }

    $('[data-toggle="datetimepicker"]').datetimepicker({
        icons: {
            time: 'fa fa-clock-o',
            date: 'fa fa-calendar',
            up: 'fa fa-chevron-up',
            down: 'fa fa-chevron-down',
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
            today: 'fa fa-check-circle-o',
            clear: 'fa fa-trash',
            close: 'fa fa-remove'
        },
        locale: 'pl',
        showClear: true
    });
});