requirejs.config({
    path:{
        jquery:"jquery-1.12.4js"
    }
});

require(["jquery","carousel"],function($,Carousel){
    var img=["img/1.jpg", "img/2.jpg", "img/3.jpg", "img/4.jpg"]
    var setting={
         imgUrl: imgs,
         buttonStyle: "circle",//square
         arrowsStyle: "bottom",//center
         speed: 500,
         location: "body"
        }
    var carousel = new Carousel(settings);
    carousel.init();

    var settings2 = {
        imgUrl : imgs,
        buttonStyle: "square",//square
        arrowsStyle: "center",//bottom
        speed: 1000,
        location: "#container2"

    };
    var carousel2 = new Carousel(settings2);
    carousel2.init();




})