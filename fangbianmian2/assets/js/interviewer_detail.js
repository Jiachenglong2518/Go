/**
 * Created by Administrator on 2017/2/15 0015.
 */
    var $resume_nav_li=$('.resume_nav ul li');
    $resume_nav_li.on("click",function(){
    $(this).addClass("resume-nav-selected").siblings().removeClass("resume-nav-selected");
    var index = $resume_nav_li.index(this);
    $(".resume_container > div").eq(index).show()
        .siblings().hide();
});