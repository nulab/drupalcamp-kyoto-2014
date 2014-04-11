<?php
/**
 * @file
 * HTML for an item to parapara viewer
 */
?>
<div class="<?php print $classes; ?>">
<div id="cacoo-parapara-container" style="width:400px; height:400px;"></div>
</div>
<script>
(function($){

    var appendSheet = function(url, index){
        setTimeout(function(){
            $('<img/>').attr('src', url).css({
                'z-index': index + 1,
                'position': 'absolute',
                'height': '400px'
            }).appendTo('div#cacoo-parapara-container');
        }, index * 500);
    };

    Drupal.behaviors.cacooParapara = {
        attach : function(context, settings){
            var api = Cacoo(Drupal.settings.cacoo.key);
            // anko 'arDIgrS2Kmh8TF1L'
            api.diagram(Drupal.settings.cacoo.diagram, function(data){
                var sheets = data.sheets;
                sheets.sort(function(a, b) {
                     return parseInt(a.name, 10) - parseInt(b.name, 10);
                });
                $.each(sheets, function(i, sheet) {
                    appendSheet(sheet.imageUrl, i);
                });
            });
        }
    };
})(jQuery);
</script>