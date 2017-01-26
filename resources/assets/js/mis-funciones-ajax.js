
//envio la peticion de contacto
$('body').on('click','#enviar-contacto',function(e){

  e.preventDefault();
  
  var form = $('#contact-form');

  var url  = form.attr('action');

  var data = form.serialize();

  var contenedor = $('.container-fluid');

     //envio de peticion con ayax
     $.post(url,data, function(resul){
    
      if(resul.validation == true)
      {
        //elimino de la vista al usuario
       form.fadeOut();

       //muevo hasta arriba
       $('body').scrollTo('.header-subtitle',{duration:2000});

       //alert(resul);       
       $.notify({

        // options
        message: resul.mensaje 
        },{
        // settings
        type: 'success'
        });
        
      }
      else
      {
        $.notify({

        // options
        message: resul.mensaje 
        },{
        // settings
        type: 'danger'
        });
      }

     });
     


}); 