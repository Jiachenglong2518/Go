/**
 * Created by Administrator on 2016/12/8.
 */
define(["jquery"],function($){
    return {
            open:function(settings){
                var defaultSettings = {
                    width: 400,
                    height: 300,
                    title: "弹出层",
                    content: ""
                };
                $.extend(defaultSettings, settings);
                var html = '<div class="dialog-container"></div>'
                    +'<div class="mask"></div>'
                    +'<div class="dialog-box">'
                    +'<div class="dialog-title">'
                    +'<div class="dialog-title-item">贪吃曾</div>'
                    +'<div class="dialog-title-close">[X]</div>'
                    +'</div>'
                    +'<div class="dialog-content"></div>'
                    +' </div>';
                $("body").append(html);

            }


    }



})