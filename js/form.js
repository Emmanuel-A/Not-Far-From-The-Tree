//source: http://jsfiddle.net/dqhZC/

$(document).ready(function(){
        $("input:checkbox[class=modeClass]").click(function() {
           var value = $(this).val();
           if(value=="pickFruits"){
               $("#text_form").show().siblings("#radio_form").hide();
           }

           if(value=="pickFruits"){
               $("#radio_form").show().siblings("#text_form").hide();
           }
        });
    });