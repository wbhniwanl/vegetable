$(function() {
 
  
    var b = $(".nav1").find(".currentNav1");
    $(".nav1").find(".currentNav1").addClass("active").find(".sub-nav1").css({
        right: "0px"
    }).show();
    var a = $(".nav1").width() - (b.position().left || 0);
    if (a >= b.find(".sub-nav1").width()) {
        b.find(".sub-nav1").css({
            left: (b.position().left - 50) + "px"
        })
    } else {
        b.find(".sub-nav1").css({
            right: "0px"
        })
    }
    $(".nav1>li:not('.currentNav1')").each(function() {
        $(this).on("mouseout",
        function() {
            $(this).removeClass("active").find(".sub-nav1").hide();
            $(this).siblings(".currentNav1").addClass("active").find(".sub-nav1").show()
        }).on("mouseover",
        function() {
            var e = $(this).parent(".nav1");
            var d = $(this).find(".sub-nav1");
            if (d.length > 0) { (e.width() - $(this).position().left) > d.width() ? d.css({
                    left: ($(this).position().left - 50) + "px"
                }) : d.css({
                    right: "0px"
                })
            }
            $(this).addClass("active").find(".sub-nav1").show();
            $(this).siblings(".currentNav1").removeClass("active").find(".sub-nav1").hide()
        })
    })
});