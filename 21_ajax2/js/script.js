$(function(){
    // $('input').click(function(){
    //     $.ajax({
    //         method:'GET',
    //         data:{name:'John'},
    //         url:'ajax.php',
    //         dataType:'html',
    //         success:function(reponse){
    //             //$('body').html(reponse);
    //             //$('body').prepend(reponse);
    //             //$('h1').after(reponse);
    //             $('body').append(reponse);
    //         }
    //     })
    // })
    // $('input').click(function(){
    //     $.get({
    //         //method:'GET',
    //         data:{name:'John'},
    //         url:'ajax.php',
    //         dataType:'html',
    //         success:function(reponse){
    //             $('body').append(reponse);
    //         }
    //     })
    // })
    $('input').click(function(){
        $.post({
            method:'POST',
            //data:{name:'John', toto:"oui"},
            data:"name=John&toto=oui",
            url:'ajax.php',
            dataType:'html',
            success:function(reponse){
                $('body').append(reponse);
            }
        })
    })
});