define(['jquery'],function($){
    $(function(){
        var bshow = false;
        $('#search-btn').on('click',function(){
            if(bshow){
                $('#search-box').animate({
                    width:30
                },function(){
                    $('#search-input').hide();
                });
            }else{
                $('#search-box').animate({
                    width:400
                });
                $('#search-input').show();
            }
            bshow = !bshow;
        });
    });
});