$(function(){
    $('[type*="submit"]').click(function(event){
        var name = $('[name*="name"]').val();
        var mail = $('[name*="mail"]').val();
        var subject = $('[name*="subject"]').val();
        var msg = $('[name*="msg"]').val();
        $.post({
            method:'POST',
            data:   {
                name:name,
                mail:mail,
                subject:subject,
                msg:msg
            },
            url:'contact_us.php',
            dataType:'html',
            success:function(reponse){
                // pas besoin de cette fonction
            }
        })
        alert('Email envoyé');
    });    
});