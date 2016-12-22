
 @if(Session::has('alert-pregunta-enviada'))
            <div class="Alert_Success-Contenedor">
              
              <div class="Alert_Success-Titulo">

                <div style="padding: 12px;">  <div class="icon-check"></div> {{ Session::get('alert-pregunta-enviada') }} </div> 
              
              </div>
              <div class="Error-iconoCerrar">
                <span class="glyphicon glyphicon-remove">
                   
                </span>
              </div>
            </div>
@endif 