  <!-- row para el título -->
  <div class="container-fluid row"><div class="col-xs-1 col-sm-2 wow fadeInLeft"><div class="row"><div class="col-xs-10 pretitle bg-contacto col-xs-ofset-2"></div></div></div><div class="col-xs-10 col-sm-8 wow fadeInLeft delay1"><h3 class="color-contacto">Contacto</h3></div></div><!-- /row del título-->
  <!-- row para todo el contenido de Contacto-a -->
  <div class="container-fluid row">
  <!-- col para todo el contenido de Contacto-a -->
  <div class="section-content col-sm-8 col-sm-push-2">

        <!-- comienza el form -->
        <div class="">

            <div class="">

                <div class="">

                    <h4 class="wow fadeInUp delay1"><span class="glyphicon glyphicon-chevron-right color-contacto" style="font-size:70%"></span> Envíame un mensaje</h4>

                    <p class="lead wow fadeInUp delay1b">Si deseas comunicarte conmigo, puedes hacerlo vía telefónica, por correo o aquí mismo:</p>



{!! Form::open(             ['route' => 'post_contacto_form',
                            'method'   => 'post',
                            'files'    => true,
                            'id'       => 'contact-form'
                            ])               !!}



    <div class="messages"></div>

    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">                    
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null ,['class'       => 'form-control',
                                                  'placeholder' => 'Escribe tu nombre aquí *' ,
                                                  'required'    => 'required',
                                                  'data-error'  => 'Por favor, ingresa tu nombre.']) !!}

                    <div class="help-block with-errors"></div>
                </div>
                
            </div>            
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">                    
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email', null ,['class'       => 'form-control',
                                                  'placeholder' => 'Escribe tu dirección de correo aquí *' ,
                                                  'required'    => 'required',
                                                  'data-error'  => 'Por favor, ingresa una dirección de correo válida.']) !!}
                <div class="help-block with-errors"></div>   
                </div>
                
            </div>
            <div class="col-md-6">
                <div class="form-group">                    
                    {!! Form::label('telefono', 'Teléfono') !!}
                    {!! Form::text('telefono', null ,['class'       => 'form-control',
                                                      'placeholder' => 'Escribe aquí tu número de línea o celular' ]) !!}

                 <div class="help-block with-errors"></div>   
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group"> 
                    {!! Form::label('mensaje', 'Mensaje *') !!}
                    {!! Form::textarea('mensaje', null ,['class'       => 'form-control',
                                                         'placeholder' => 'Escribe tu consulta aquí *', 
                                                         'rows'        => '4',
                                                         'required'    => 'required',
                                                         'data-error'  => 'Por favor, escribe un mensaje.' ]) !!}
                 <div class="help-block with-errors"></div>    
                </div>
               
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-primary btn-lg btn-send" value="Enviar">
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <p class="text-muted small"><strong>*</strong> Estos campos son obligatorios.</p>
            </div>
        </div>
    </div>



{!! Form::close() !!}

                   






                </div>

            </div>

        </div><!-- /form -->

  </div> <!-- /sub-section content col -->
  </div> <!-- /sub-section content row -->