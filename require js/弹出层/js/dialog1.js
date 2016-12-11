/**
 * Created by Administrator on 2016/12/8.
 */
define(["jquery"],function($){
        function Dialog(){
            var defaultsetting = {
                width: 500,
                height: 300,
                title: "我的弹出层",
                content: "bbbb"
            };
            $.extend(defaultsetting,ajaxSettings)
            this.$container = $('<div class="dialog-container"></div>');
            this.$mask = $('<div class="dialog-mask"></div>');
            this.$box = $('<div class="dialog-box"></div>');
            this.$title = $('<div class="dialog-title"></div>');
            this.$item = $('<div class="dialog-title-item"></div>');
            this.$close = $('<div class="dialog-title-close">[X]</div>');
            this.$content = $('<div class="dialog-content"></div>');
        }
        Dialog.prototype.open = function(){

            this.$container.append(this.$mask).append(this.$box);
            this.$box.css({
                width: this.defaultSettings.width,
                height: this.defaultSettings.height
            }).append(this.$title).append(this.$content);
            this.$title.html(this.defaultSettings.title).append(this.$item).append(this.$close);
            if(this.defaultSettings.content){
                this.$content.load(this.defaultSettings.content);
            }
            $("body").append(this.$container);
            var that = this;
            this.$close.on("click", function(){
                that.close();
            });
        };
        Dialog.prototype.close = function(){
            $(this.$container).remove();
        };
        return Dialog;

    }




);