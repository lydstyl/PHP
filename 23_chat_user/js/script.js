$(function(){
    if($('.screen').length){ // si screen existe autrement dit si on est pas en mode login
        // chargement initial de l'historique des msg en ajax + refresh fréquent
        setInterval(function(){ 
            $.post({
                method:'POST',
                data:{refresh:'refresh'},
                url:'refreshScreen.php',
                dataType:'html',
                success:function(reponse){
                    $('.screen').html(reponse);
                    $(".screen").get(0).scrollTop = $(".screen").get(0).scrollHeight;
                }
            })
        }, 1000);
        // à l'ajout d'un nouveau message, celui-ci est envoyé en bdd via ajax
        $('input:nth-child(2), input:nth-child(3)').click(function(event){
            //alert ($('input:nth-child(2), input:nth-child(3)'));
            //var user = event.target.value;
            var message = $('input:nth-child(1)').val();
            alert(message);
            $.post({
                method:'POST',
                data:{message:message},
                url:'chat.php',
                dataType:'html',
                success:function(reponse){
                    // pas besoin d'injecter le nouveau msg dans .screen car c'est fait toutes les x secondes
                    //alert(reponse);
                }
            })
        })
    }
});