


$(document).ready(function(){
    $("#to_top").click(function(){
        $("html").animate({scrollTop:0},1000);
    });


 
});


$(document).ready(function(){
    $("#menu_icon").click(function(){
        $("ul").slideToggle()
    })

    $(window).resize(function(){
        if($(this).width() > 768){
            $("ul").show()
        }else{
            $("ul").hide()
        }
    })
})

$(document).ready(function(){
    $(".dropbtn").click(function(){
        $(".dropdown-content").toggle();
    });
});