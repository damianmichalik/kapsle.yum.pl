jQuery(document).ready(function() {
    
    jQuery('#caps-search-keyword').autocomplete({
        serviceUrl: jQuery("#autocomplete-url").val(),
        maxHeight: 200,
        width: 200,
        onSelect: function (suggestion) {
            jQuery("#caps-search-form").submit();
        }
    });
    
    jQuery('a[rel="external"]').attr("target", "_blank");

});