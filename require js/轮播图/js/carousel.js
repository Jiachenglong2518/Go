define(["jquery"], function($){
    function Carousel(setting){
        this.defaultSetting={
            imgUrl: [],
            buttonStyle: "circle",//square
            arrowsStyle: "bottom",//center
            speed: 500,
            location: "body"
        };
        $.extend(this.defaultSetting,setting)
        this.$container=$('<div class="carousel-container"></div>');
        this.$img=$('<div class="carousel-img"></div>');
        this.$tabs=$('<div class="carousel-tabs"></div>');
        this.$arrows=$('<div class="carousel-arrows">');
        this.$prev=$('<span class="carousel-arrows-prev">');
        this.$next=$('<span class="carousel-arrows-next">');
    }
    Carousel.prototype.init= function(){
        var nowIdx=0;
        var _this=this;
        for(var i=0;i<this.defaultSetting.imgUrl.length;i++){

            this.$tabs.append($("<li>"+ (this.defaultSettings.buttonStyle == "circle"?"":(i + 1)) +"</li>"));
            this.$img.append($('<img src='+this.defaultSetting.imgUrl[i]+'>'))
        }
        this.$container.append(this.$img)
            .append(this.$tabs)
            .append(this.$arrows);
        this.$arrows.append(this.$prev).append(htis.$next);
        $("img:first-child",this.$img).addClass("selected");
        $("li:first-child",this.$tabs).addClass("selected");
        $("li",this.$tabs).addClass("this.defaultSetting.buttonStyle")
        $("li", this.$tabs).on("mouseover", function(){
            nowIdx = $(this).index();
            changeImg();
        });
        this.$prev.on("click", function(){
            nowIdx--;
            if(nowIdx == -1){
                nowIdx = _this.defaultSettings.imgUrl.length - 1;
            }
            changeImg();
        });
        this.$next.on("click", function(){
            nowIdx++;
            if(nowIdx == _this.defaultSettings.imgUrl.length){
                nowIdx = 0;
            }
            changeImg();
        });

        play();
        this.$container.hover(function(){
            clearInterval(_this.timer);
        }, function(){
            play();
        });

        function play(){
            _this.timer = setInterval(function(){
                _this.$next.trigger("click");
            }, _this.defaultSettings.speed);
        }

        function changeImg(){
            $("img", _this.$imgs).eq(nowIdx).addClass("selected").siblings().removeClass("selected");
            $("li", _this.$tab).eq(nowIdx).addClass("selected").siblings().removeClass("selected");
        }
    };
    return Carousel;

});