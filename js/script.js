//質問が切り替わる処理
$(function(){
    $("#yes1, #no1").click(function(){
        $("#question1").fadeOut(10),
        $("#question2").fadeIn(1000);
    });
    
});

$(function(){
    $("#yes2, #no2").click(function(){
        $("#question2").fadeOut(10),
        $("#question3").fadeIn(1000);
    });
    
});

$(function(){
    $("#yes3, #no3").click(function(){
        $("#question3").fadeOut(10),
        $("#question4").fadeIn(1000);
    });
    
});

$(function(){
    $("#yes4, #no4").click(function(){
        $("#question4").fadeOut(10),
        $("#question5").fadeIn(1000);
    });
    
});

$(function(){
    $("#yes5, #no5").click(function(){
        $("#question5").fadeOut(10),
        $("#question6").fadeIn(1000);
    });
    
});

$(function(){
    $("#yes6, #no6").click(function(){
        $("#question6").fadeOut(10),
        $("#getConclusionPage").fadeIn(1000);
    });
    
});

