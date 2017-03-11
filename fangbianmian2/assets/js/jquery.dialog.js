/**
 * Created by Dell on 2017/2/11.
 */
;(function($){

    $.fn.extend({

        dialog:function(options){
            var settings = $.extend({
                width:800,
                height:350
            },options);

                var $wrapper = $('<div class="dialog-wrapper"></div>'),
                    $mask = $('<div class="dialog-mask"></div>'),
                    $dialog = $('<div class="dialog-dialog"></div>'),
                    $content = $('<div class="dialog-content"></div>'),
                    $close = $('<div class="dialog-close"></div>');

                $dialog.append($close).append($content);
                $wrapper.append($mask).append($dialog);
                $content.load(settings.url);
                $('.dialog-dialog,.dialog-content',$wrapper).css('width',settings.width + 'px').css('height',settings.height+'px');
                $('.dialog-close',$wrapper).on('click',function(){
                    $wrapper.remove();
                });

            this.append($wrapper);

        }
    })

})(jQuery);