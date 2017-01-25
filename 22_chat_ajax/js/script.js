$(function(){
    $(".screen").get(0).scrollTop = $(".screen").get(0).scrollHeight;
    $('input:nth-child(2), input:nth-child(3)').click(function(event){
        var user = event.target.value;
        var message = $('input:nth-child(1)').val();
        $.post({
            method:'POST',
            data:{user:user,message:message},
            url:'chat.php',
            dataType:'html',
            success:function(reponse){
                $('.screen').append(reponse + '<br />');
                $(".screen").get(0).scrollTop = $(".screen").get(0).scrollHeight;
            }
        })
    })
});