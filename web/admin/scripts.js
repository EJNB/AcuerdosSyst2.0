/**
* Created by jorgito on 12/12/14.
*/


/*Clase persona para guardar los option de las personas asignada*/
//function Persona(id, nombre){
//
//    this.id = id;
//    this.nombre = nombre;
//}
//
//
//function guardarDatosAcuerdos(){
//
//    $('form[name=acuerdos_gestionbundle_acuerdo]').find(':input[type=text], :input[type=date], textarea').each(function(){
//        var elemento = this;
//        sessionStorage.setItem(elemento.id, elemento.value);
//    });
//
//    var estado = $('#acuerdos_gestionbundle_acuerdo_estado :selected').val();
//    var procedencia = $('#acuerdos_gestionbundle_acuerdo_idProcedencia :selected').val();
//    var autor = $('#select-autor :selected').val();
//    sessionStorage.setItem('estado', estado);
//    sessionStorage.setItem('procedencia', procedencia);
//    sessionStorage.setItem('autor', autor);
//
//    var responsables = [];
//    var ejecutores = [];
//
//    $('#select-responsables-asignados option').each(function(){
//        responsables.push(new Persona($(this).val(), $(this).text()));
//
//    });
//    $('#select-ejecutores-asignados option').each(function(){
//        ejecutores.push(new Persona($(this).val(), $(this).text()));
//    });
//
//    sessionStorage.setItem('responsables', JSON.stringify(responsables));
//    sessionStorage.setItem('ejecutores', JSON.stringify(ejecutores));
//
//}
//
//function loadDatosAcuerdo(){
//
//    if(sessionStorage.estado){
//        $('form[name=acuerdos_gestionbundle_acuerdo]').find(':input[type=text], :input[type=date], textarea').each(function(){
//            this.value = sessionStorage.getItem(this.id);
//        });
//
//        $('#acuerdos_gestionbundle_acuerdo_estado option[value= "' + sessionStorage.getItem('estado') + '"]').attr('selected', 'selected');
//        $('#acuerdos_gestionbundle_acuerdo_idProcedencia option[value= "' + sessionStorage.getItem('procedencia') + '"]').attr('selected', 'selected');
//        $('#select-autor option[value= "' + sessionStorage.getItem('autor') + '"]').attr('selected', 'selected');
//
//        var responsables = JSON.parse(sessionStorage.getItem('responsables'));
//        var ejecutores = JSON.parse(sessionStorage.getItem('ejecutores'));
//
//        for (var i=0; i<responsables.length; i++){
//            $('#select-responsables-asignados').append(new Option(responsables[i].nombre,responsables[i].id,true,false));
//        }
//
//        $.each(ejecutores, function(index, value){
//           $('#select-ejecutores-asignados').append(new Option(value.nombre,value.id,true,false));
//        });
//
//    }
//    sessionStorage.clear();
//
//}

//pasar el data-url y el data-id para el modal
function trasnlateData(element){

    var url = $(element).attr('data-url-asistant')
    $('button#send_causa_ausencia').attr({
        'data-url': $(element).attr('data-url-asistant'),//pongo en si del modal la url q se ejecutara
        'data-id': $(element).attr('data_id_asistant')  // y tambien pongo el id de la persona
    });
}

$(document).ready( function() {
    //estilos del pnotify
    PNotify.prototype.options.styling = "bootstrap3";

    $('body').height($('.content').height() + 170);
    //pasa los datos desde el enlace con clase link-eliminar para el boton si del modal
    $(".link-eliminar").click( function(event) {
        //toma la runion
        var reunion = $('input#acta-reunion-id').val();
        $("#text-descripcion-popup-eliminar").html($(this).attr("data-descripcion"));
        //verifico q url se esta ejecutando
        if (window.location.href=='http://127.0.0.1/AcuerdosSyst2.0/web/app_dev.php/Gestion/acta/new/'+reunion+'#'){//url de acta
            $("#link-popup-eliminar").attr({
                "data" : $(this).attr("data-id"),
                "data_url" : $(this).attr("data-url"),
                "href" : "javascript:void(0)"
            })
        }else{
            $("#link-popup-eliminar").attr("href", $(this).attr("data-url"));
        }
    });

    //eliminar acuerdo en la gestion de las actas
    $('#link-popup-eliminar').click(function(){
        var reunion = $('input#acta-reunion-id').val();
        if(window.location.href=='http://127.0.0.1/AcuerdosSyst2.0/web/app_dev.php/Gestion/acta/new/'+reunion+'#'){
            //alert('estas en la url de acta');
            //alert($('#acta-reunion-id').val());

            //envio por ajax
            $.ajax({
                url : $(this).attr('data_url'),
                type : 'POST',
                beforeSend : $(''),
                data : {
                    data : $(this).attr('data'),//aqui lo q envio es el id de la persona
                    reunion : $('#acta-reunion-id').val()//el id de la reunion
                },
                success : function(response){
                    //alert(response)
                    $('.table-acuerdos-tomados').html(response)
                },
                error : function(){

                }
            })
        }else{
            //alert('estas en otra url');
        }
        //alert()
    });

    $('input,select').addClass('form-control');

    //create new person AJAX
    $('#submit-persona').click(function(event){
        //seleccionar las personas q estaban seleccionadas en los tres select
        var secretario = $('#selected_secretario').val();
        var participantes = $('#select-part-disponibles').val();
        var invitados = $('#select-invitados-disponibles').val();
        event.preventDefault();
        var url = $(this).attr('data-url');
        var datos = {
            description : $('input#popup-persona-descripcion').val(),//obtengo el nombre y apll de la persona
            cargo : $('input#popup-persona-cargo').val(),
            email : $('input#popup-persona-email').val(),
            username : $('[name=username]').val(),
            first_password : $('[name=input_first_password]').val(),
            second_password : $('[name=input_second_password]').val(),
            //cuando seleccionamos por el id del select y decimos q nos de el valor, realmente estamos seleccionando el valor seleccionado
            area : $('select#popup-persona-area option:selected').val()
        }
        if(datos.description=="" || datos.cargo=="" || datos.email=="" || datos.username=="" || datos.first_password=="" || datos.second_password==""  || datos.area==null){//si los campos estan vacios
            new PNotify({
                title: 'Alert!',
                text: 'Por favor,no puede dejar campos vacios',
                type: 'error'
            });
        }else{
            if(!/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$/.test(datos.email)){// su no es un email valido
                new PNotify({
                    title: 'Alert!',
                    text: 'Por favor,inserte un email valido',
                    type: 'error'
                });
            }else {//si es un email valido
                if($('[name=input_first_password]').val() == $('[name=input_second_password]').val()){//coinciden los password
                    $.ajax({
                        url: url,
                        data: datos,
                        type : 'POST',
                        beforeSend : function () {
                            $('#modal-add-person').modal('hide');
                            //muestre la animacion de cargando
                        },
                        success: function(response){
                            if (response){
                                $('div.select-cordinador-part-invitados').html(response);
                                $('#selected_secretario').selectpicker('refresh');
                                $('#select-part-disponibles').selectpicker('refresh');
                                $('#select-invitados-disponibles').selectpicker('refresh');
                                //seleccionar la personas q estaban seleccionadas anteriormente como coordinador
                                $('#selected_secretario').selectpicker('val',secretario);
                                $('#selected_secretario').selectpicker('refresh');
                                //seleccionar los participantes q estaban seleccionados
                                $('#select-part-disponibles').selectpicker('val',participantes)// de esta manera se cambia los valores de un selectpicker
                                $('#select-part-disponibles').selectpicker('refresh');
                                //seleccionar los invitados q estaban seleccionados
                                $('#select-invitados-disponibles').selectpicker('val',invitados)// de esta manera se cambia los valores de un selectpicker
                                $('#select-invitados-disponibles').selectpicker('refresh');

                                new PNotify({
                                    title: 'Exito!',
                                    text: 'Sus datos han sido agregados satisfactoriamente',
                                    type: 'success'
                                });
                            }
                        },
                        error : function () {
                            $('#modal-add-person').modal('hide');
                            new PNotify({
                                title: 'Alert!',
                                text: 'Lo sentimos sus datos no han sido insertados',
                                type: 'error'
                            });
                        },
                        complete: function(){
                            //limpiar los input
                            $('input[name=descripcion]').val('');
                            $('input[name=cargo]').val('');
                            $('input[name=email]').val('');
                            $('select[name=area]').selectpicker('val','');
                            $('select[name=username]').val('val','');
                        }
                    });//end ajax
                }else {
                    //son distintos los password
                    new PNotify({
                        title: 'Alert!',
                        text: 'Sus contraseñas no coinciden',
                        type: 'error'
                    });
                }
            }//end si es un email valido
        }

    });

    //si cancelo la  operacion de agregar persona
    $('button#cancel-add-person').click(function(){
        $('#form_add_person input').val('');
        $('#form_add_person select#popup-persona-area').selectpicker('val','');
    });

    //formato del datepicker del new de Reunion
    $('.format_date_time').datetimepicker({
            locale: 'es',
            minDate: new Date(),
            format: 'YYYY-MM-DD hh:mm',
            showClear: true,
            showClose: true
    });

    $('.format_date_time,.format_date').on('click',function(e){
        $(this).data("DateTimePicker").show();
    });

    //formato de la fecha de new acuerdo
    $('.format_date').datetimepicker({
            locale: 'es',
            minDate: new Date(),
            format: 'YYYY-MM-DD',
            showClear: true,
            showClose: true
    });
    $('.datetimepicker4').datetimepicker({
        locale: 'es',
        minDate: new Date(),
        format: 'YYYY-MM-DD'
    });
    $('.date_hora_inicio').datetimepicker({
        locale: 'es',
        //minDate: new Date(),
        format: 'HH:mm'
    });

    //cambiar el estado de los option pertenecientes al select a selected
    //esto es para q se puedan enviar varios elementos es decir todos los opcion seleccionados en el select multiple
    $('#btn-enviar').click( function(event) {

        //$("#select-part-asignados").each(function(){
        //    $("#select-part-asignados option").prop('selected', true);
        //});
        //selecciona todos los temas asignados en el select de los temas
        $("#select-temas-asignados").each(function(){
            $("#select-temas-asignados option").prop('selected', true);
        });

        $("#btn-send").click();

    });
    //dispara los tooltip
    $('.link-tooltip').tooltip();

    //add the temas para el select multiple
    $('a#add-tema').click(function(event){
        event.preventDefault();
        if (!$("input#add_temas_descripcion").val() || !$('select#add_temas_clasificacion').val()){
            new PNotify({
                title: 'Alerta!',
                text: 'Intrusca un elemento valido',
                type: 'error'
            });
        }else{
            var tema = $("input#add_temas_descripcion").val();//el titulo del tema
            var clasificacion = $('select#add_temas_clasificacion').val();//clasificacion del tema
            var descripcion = $('textarea#text_descripcion').val();
            //var responsables = $('select#add_temas_resp').val();//valor de la opcion seleccionada q en este cso seria el responsable del tema
            //alert(responsables);
            var datos = {
                tema : tema,
                clasificacion : clasificacion,
                descripcion : descripcion,
                //responsables : responsables
            }
            //alert(descripcion)
            $.ajax({
                url : $(this).attr('data-url'),
                type : 'POST',
                data : datos,
                dataType: 'json',
                //beforeSend: function(){alert(responsable)},
                success : function(response){
                    //alert(response);
                    var text_descripcion = response.tema;
                    var text_value = response.value;
                    $('#select-temas-asignados').append(new Option(text_descripcion,text_value,true,false));
                    //temas.push(response.value);
                },
                error : function(){
                    new PNotify({
                        title: 'Alert!',
                        text: 'Lo sentimos sus datos no han sido insertados',
                        type: 'error'
                    });
                },
                complete : function(){
                    $('#add_temas_descripcion').val("");
                    $('#add_temas_clasificacion').selectpicker('val','');//limpiar los select de clasificacion
                    $('#add_temas_resp').selectpicker('val','');//limpiar los select de responsables
                    $('#text_descripcion').val('');//limpiar los select de responsables
                }
            });//end $.ajax()
        }
    });

    //remove los temas del select multiple
    $("#remove_tema").click( function(){
        var valor = $("#select-temas-asignados").val();
        if(valor!=null){
            $.ajax({
                url : 'http://localhost/AcuerdosSyst2.0/web/app_dev.php/Gestion/tema/'+valor+'/delete',
                data : {
                    id : valor
                },
                type : 'POST',
                success : function (response){
                    //alert(response);
                    $("#select-temas-asignados option[value='" + valor +"']").remove();
                },
                error : function (){alert('Han ocurrido problemas al eliminar el tema')},
                complete : function (){}
            });
        }
        else{
            new PNotify({
                title: 'Alert!',
                text: 'Por favor seleccione un elemento valido',
                type: 'error'
            });
        }
    });

    //redireccionar hacia la vista de nueva acta luego de seleccionar la reunion
    $('#select_reunion').change(function(){
        //var url = $(this).find('option:selected').attr('data-url');
        var url = $('option:selected',this).attr('data-url');
        //con la propiedad location del objeto window rigimos la pagina hacia el new
        window.location = url;
    });

    //quitar el coordinador de la lista de participantes e invitados
    $('#selected_coordinador').change(function(){
        var coordinador = $('option:selected',this).val();
        //recorro todo el array de participantes buscando el coordinafdor para desabilitarlo
        $('.select-part-disponibles option').each(function(){
            if ($(this).val()==coordinador) {
                $(this).prop('disabled',true);
            }
        });
        //despues q esto pase se me pueden haber quedado unos option desbilitados por culpa de una mala seleccion del coordinador
        $('.select-part-disponibles option').each(function(){
            if ($(this).prop('disabled') && $(this).val()==coordinador) {
                $(this).prop('disabled',true);
            }else{
                $(this).prop('disabled',false);//si esta desabilido y no es el coordinador selecccionado
                $(this).selectpicker('val','');//si esta desabilido y no es el coordinador selecccionado
            }
        });
        //recorro todo el array de participantes buscando el coordinafdor para desabilitarlo
        $('.select-invitados-disponibles option').each(function(){
            if ($(this).val()==coordinador) {
                $(this).prop('disabled',true);
            }
            $('.select-part-disponibles').selectpicker('refresh');
        });
        //despues q esto pase se me pueden haber quedado unos option desbilitados por culpa de una mala seleccion del coordinador
        $('.select-invitados-disponibles option').each(function(){
            if ($(this).prop('disabled') && $(this).val()==coordinador) {
                $(this).prop('disabled',true);
            }else{
                $(this).prop('disabled',false).prop('selected',false);//si esta desabilido y no es el coordinador selecccionado
            }
        });
        //actualizo ambos select
        $('.select-part-disponibles').selectpicker('refresh');
        $('.select-invitados-disponibles').selectpicker('refresh');
    });

    ////a medida q se vallan seleccionando los option en select de participantes se vallan actualizando el de los invitados es decir q se valla quedand
    ////solo con los participantes q quedan
    //$('.select-part-disponibles').on('change',function (e) {
    //    var elemSelected = $(this).val();// esto construye una lista con el val de los select q van siendo seleccionados por ejemplo
    //    for (var i= 0; i<elemSelected.length; i++){//recorro la lista de los elementos seleccionados
    //        $('.select-invitados-disponibles option').each(function(){
    //            if ($(this).val()==elemSelected[i]){//busco este elemento en el select de los invitados y los desabilito
    //                $(this).prop('disabled',true);
    //            }//iterar sobre los elements desabilitados de la lista de invitados y preguntar si
    //            else{
    //                ////$('.select-invitados-disponibles').selectpicker('refresh');
    //                //$(this).find('option:disabled').each(function(){
    //                //    alert($(this).val());
    //                //});
    //            }
    //        });//end each
    //        $('.select-invitados-disponibles').selectpicker('refresh');
    //    }//end for
    //});

    //seleccionar los ausentes
    $('#send_causa_ausencia').click(function(){
        var reunion_id = $('#acta-reunion-id').val();
        var participante = $(this).attr('data-id');
        datos = {
            text : $('#textarea_causa_ausencia').val(),
            sustituto : $('div.modal #select_sustitutos option:selected').val(),// y esta es la persona q quedara en sustituto
            id_participante : participante,// id de la persona q falto
            reunion_id : reunion_id,
            asistencia: $('input[type=radio]:checked').val()// 1 es ausente y 0 es presente
        };

        $.ajax({
            url : $(this).attr('data-url'),
            data : datos ,
            type : 'POST',
            //dataType: 'JSON',
            //beforeSend : alert($(this).attr('data-url-asistant')),
            success : function(response){
                //alert(response)
                $('.table-asistencia').html(response);
                //limpiar el select del sustituto y el textarea de la justificacion
                $('#textarea_causa_ausencia').val(null);
                //esconder el modal
                $('#modal_causa_ausencia').modal('hide');
                //resetear el select del modal
                $('#select_sustitutos').selectpicker('val','');
                //colorear los elementos de la lista q sean ausentes

                //$('tr#'+participante)
                //    .find('td:lt(2)').css('color','red')
                //.end()
                //    .find('span.glyphicon-ok').removeClass('glyphicon-ok').addClass('glyphicon-remove')
                //;
            },
            error : function(){
                alert('bad')
            },
            complete : function(){
                //if ($('input[type=radio]:checked').val()==0){
                //    $('acuerdos_acta_presente').prop('checked',true)
                //}else{
                //    $('acuerdos_acta_presente').prop('checked',false)
                //}
            }
        });
    });

    //solo disparo el modal si tengo un tema seleccionado
    $('#tomar_acuerdos').click(function(){
        if(!$('select#temas_select option:selected').val()){
            new PNotify({
                title: 'Alerta!',
                text: 'Por favor seleccione un tema',
                type: 'error'
            });
        }else{
            $('#modal_create_acuerdo').modal('show')
        }
    });

    //envio de los datos de los acuerdos enviados desde el modal
    $('#btn_send_acuerdos').click(function(){

        //oculto el modal
        $('#modal_create_acuerdo').modal('hide');

        var responsables = new Array();
        var ejecutores = new Array();
        $('select#select_responsables option:selected').each(function(){
            responsables.push($(this).val());
        });

        $('select#select_ejecutores option:selected').each(function(){
            ejecutores.push($(this).val());
        });
        //alert($('select#temas_select').val());
        //alert(ejecutores);
        //envio por ajax todos lo datos
        $.ajax({
            url: $(this).attr('data-url'),
            data : {
                idReunion : $('input#acuerdos_reunion_id').val(),
                codAcuerdo : $('input#acuerdos_gestionbundle_acuerdo_idAcuerdo').val(),
                estado : $('select#acuerdos_gestionbundle_acuerdo_estado option:selected').val(),
                descripcion : $('textarea#acuerdos_gestionbundle_acuerdo_descripcion').val(),
                fecha_cumplimiento : $('input#acuerdos_gestionbundle_acuerdo_fechaCumplimientoIndicada').val(),
                acciones_seguimiento : $('textarea#acuerdos_gestionbundle_acuerdo_accionesSeguimiento').val(),
                observaciones : $('textarea#acuerdos_gestionbundle_acuerdo_observaciones').val(),
                autor : $('select#select_autor option:selected').val(),
                responsables : responsables,
                ejecutores : ejecutores,
                tema : $('select#temas_select option:selected').val()//este es el tema seleccionado
            },
            type : 'POST',
            //dataType : 'json',
            success : function(response){
                //alert(response);
                //renderizar la tabla de los acuerds
                $('.table-acuerdos-tomados').html(response);
                //alert(response);
                new PNotify({
                    title: 'Exito!',
                    text: 'Se ha guardado su acuerdo satisfactoriamente',
                    type: 'success'
                });
                //limpio los input
                $('input#acuerdos_reunion_id').val();
                $('input#acuerdos_gestionbundle_acuerdo_idAcuerdo').val("");
                $('select#acuerdos_gestionbundle_acuerdo_estado option:selected').val("");
                $('textarea#acuerdos_gestionbundle_acuerdo_descripcion').val("");
                $('input#acuerdos_gestionbundle_acuerdo_fechaCumplimientoIndicada').val("");
                $('textarea#acuerdos_gestionbundle_acuerdo_accionesSeguimiento').val("");
                $('textarea#acuerdos_gestionbundle_acuerdo_observaciones').val("");
                $('select#select_autor').selectpicker('val','');
                $('select#select_responsables').selectpicker('val','');
                $('select#select_ejecutores').selectpicker('val','');
                //aqui me falta actualizar lla tabla de acuerdos ssdespues q
            },
            error : function(){
                new PNotify({
                    title: 'Alerta!',
                    text: 'lo sentimos ha ocurrido un error',
                    type: 'error'
                });
            },
            complete : function(){
            }
        });//end ajax
    });

    //Scrip del new de acta

    //habilitar los campos de los comentarios
    if($('#temas_select option:selected').val()){
        $('fieldset#comentario').removeAttr('disabled');
    }

    $('#temas_select').change(function(){
        $('fieldset#comentario').removeAttr('disabled');
    });

    //habilitar el fieldset de causa de ausencia
    $('input:radio[name=acuerdos_acta_ausente]').change(function(){
        if ($(this).val()==1){//presente
            $('fieldset#causa_ausencia').prop('disabled',false);
        }else{
            $('fieldset#causa_ausencia').prop('disabled',true);
        }
    });

    //habilitar los pills correspondientes
    $('a#link-asistencia').click(function(){
        //quitar la clase de active del enlace asitencia y ponersela al enlace hermano
        $(this).parent().nextAll('.active').removeClass('active')
            .end().addClass('active');
        $("div#asistencia").siblings().removeClass('show').addClass('hide')
            .end().removeClass('hide').addClass('show').toggle('slow');
    });

    $('a#link-desarrollo-reunion').click(function(){
        //quitar la clase de active del enlace asitencia y ponersela al enlace hermano
        $(this).parent().siblings('.active').removeClass('active')
            .end().addClass('active');
        $("div#desarrollo_reunion").siblings().removeClass('show').addClass('hide')
            .end().removeClass('hide').addClass('show').toggle('slow');
    });

    $('a#link-acuerdos-tomados').click(function(){
        //quitar la clase de active del enlace asitencia y desarrollo de la reunion
        $(this).parent().siblings('.active').removeClass('active')
            .end().addClass('active');
        $("div#acuerdos_tomados").siblings().removeClass('show').addClass('hide')
            .end().removeClass('hide').addClass('show').toggle('slow');
    });

    $('a#link-revision-aprobacion').click(function(){
        //quitar la clase de active del enlace asitencia y desarrollo de la reunion
        $(this).parent().prevAll('.active').removeClass('active')
            .end().addClass('active');
        $("div#revision_aprobacion").prevAll().removeClass('show').addClass('hide')
            .end().removeClass('hide').addClass('show').toggle('slow');
    });

    //script para seleccionar los temas de la reunion seleccionada en el new de acuerdo
    $('#acuerdos_gestionbundle_acuerdo_reunion').change(function(){
        $.ajax({
            url: window.location.href,
            data: {
                id : $(this).val()
            },
            type : 'POST',
            success : function(response){
                $('div.list-temas').html(response).find('select.temas').removeAttr('disabled').selectpicker('render');
            }
        });
    });

    //envolver todos los input de type checkbox en un div
    //$('#acuerdos_gestionbundle_persona_roles_1').add('label[for=acuerdos_gestionbundle_persona_roles_1]').wrapAll('<div class="switch"></div>');
    $('#acuerdos_gestionbundle_persona_roles').attr('class', 'switch');

    //enviar el attr desde la vista de persona para el modal de cambiar contraseña
    $('.link-change-password').click(function(){
        $('#form_change_pass').attr('action',$(this).attr('url_change_password')).parents('.modal-header').find('h4.modal-title').text($(this).attr('descripcion'));
        //$('#form_change_pass').attr('action',$(this).attr('url_change_password'));
        console.log($('#form_change_pass').parents('.modal-header').children());
        //alert($(this).attr('descripcion'));
    });


    //esta direccion hay q cambiarla y tambien hay q hacer una espresion eregular para la parte de la gestion
    switch (window.location.href){
        case 'http://localhost/AcuerdosSyst2.0/web/app_dev.php/Frontend/mis_acuerdos':
            $('#mis_acuerdos').addClass('active');
            break;
        case 'http://localhost/AcuerdosSyst2.0/web/app_dev.php/Frontend/mis_convocatorias':
            $('#mis_convocatorias').addClass('active');
            break;
        case 'http://localhost/AcuerdosSyst2.0/web/app_dev.php/seleccionProcedencias':
            $('#acuerdos').addClass('active');
            break;
        case 'http://localhost/AcuerdosSyst2.0/web/app_dev.php/Gestion/persona/':
            $('#gestionar').addClass('active');
            break;
        case 'http://localhost/AcuerdosSyst2.0/web/app_dev.php/Gestion/procedencia/':
            $('#gestionar').addClass('active');
            break;
        case 'http://localhost/AcuerdosSyst2.0/web/app_dev.php/Gestion/acuerdo/':
            $('#gestionar').addClass('active');
            break;
        case 'http://localhost/AcuerdosSyst2.0/web/app_dev.php/Gestion/reunion/':
            $('#gestionar').addClass('active');
            break;
        case 'http://localhost/AcuerdosSyst2.0/web/app_dev.php/Gestion/acta/':
            $('#gestionar').addClass('active');
            break;
        //default:

    }
    //if (window.location.href == 'http://localhost/AcuerdosSyst2.0/web/app_dev.php/Frontend/mis_acuerdos'){
    //
    //}else {
    //    $('#mis_acuerdos').removeClass('acive');
    //}
    ////cambiar la clase active de los li del navbar
    ////$('ul.nav li.active').removeClass('active');
    //$('ul.nav li').click(function(){
    //    $(this).siblings('.active').removeClass('active');
    //    $(this).addClass('active');
    //    //console.log($(even.target));
    //    //$(this).addClass('active');
    //    //alert('has tocado algun elemento de la lista')
    //});

});//end document ready

function showPassword(value){
    //if (value.getAttribute('state')=='false'){//si state esta a false siginifica q el campo esta desoculto
    //    value.setAttribute('state','true');
    //    value.type = 'password';
    //}else{//esta oculto
        value.setAttribute('state','false');
        value.type = 'text';
    //}



    //alert('has presionado el mouse');
}
function hidePassword(value){
    value.setAttribute('state','true');
    value.type = 'password';
    //alert('has soltado el mouse')
}

//crear  comentario
function createComentario(element){
    //alert('estas presiona');
    //verificar q el valor escogido en el select de personas sea valido
    if (!$('#text_comentario').val() || !$('#select_persona').val()){
        //alert('Por favor inserte un valor valido')
        new PNotify({
            title: 'Alert!',
            text: 'Por favor inserte un valor valido',
            type: 'error'
        });
    }else{
        //alert($('#select_persona option:selected').val());
        //alert($('#text_comentario').val());
        //alert($('#temas_select option:selected').val());
        //entonces envio por ajax
        //selecciono el comentario y la persona q lo emitio
        datos = {
            persona : $('#select_persona option:selected').val(),
            comentario : $('#text_comentario').val(),
            tema: $('#temas_select option:selected').val(), //tambien selecciono el tema q esta seleccionado en este momento
            reunion_id : $('#acta-reunion-id').val()
        }
        $.ajax({
            data : datos,
            url : 'http://localhost/AcuerdosSyst2.0/web/app_dev.php/Gestion/comentario/new',
            type : 'POST',
            //dataType : 'JSON',
            success : function(response){
                //$('#historial_comentarios').append(response);
                $('#historial_comentarios').html(response);
                $('#text_comentario').val('');// limpiar el textarea
            },
            error : function(){
                alert('lo sentimos ha habido un error');
            }
        });
    }//end else
}//end create comentario


//funcion  para editar los comentarios
function editComent(element){
    $(element).parent().parent().css('background','grey');// es mejor hacer una transicion y no cambiar asi brusco el color
    var id = $(element).parent().attr('data_id');
    //le agrego el contenido al parrafo conteditable
    $(element).parent().next('p').attr('contenteditable',true);//dame el hermano de este elemento en el cual di el click
}

function saveComentario(element,event){
    if(event.which == 13) {
        //alert('has')
        event.preventDefault();
        var text = $(element).text();
        var id = $(element).prev().attr('data_id');
        var url = $(element).prev().attr('data_url_edit');
        $(element).attr('contenteditable',false);//quitar la clase conteditable del ese elemento
        datos = {
            text : text,
            id   : id
        };
        $.ajax({
            data : datos,
            type : 'POST',
            url  : url,
            success : function(response){
                $(element).parent().css({
                    'background-color': '#5cb85c',
                    'border-color': '#4cae4c'
                });
                //alert(response);
            },
            error : function(){
                alert('error');
            },
            complete : function(){
                $('.link-tooltip').tooltip();
            }
        });
    }
}//end editar comentarios

//funcion q traslada los datos para el boton de eliminar comentario
function translateData(element){
    //alert('hola')
    var id = $(element).parent().attr('data_id');//selecciono el id del comentario q quiero eliminar
    var url = $(element).parent().attr('data_url_delete');
    $('#modal-delete-coment').modal();
    $('button#send_delete_coment').attr({//le voy paner dos atributos al boton de envio 1. la url y el id del comentario
        'data_url' : url,
        'data_id' : id
    });
}
//funcion para eliminar los comentarios de el historial de comentarios
function deleteComent(element){
    //alert('dfdjkf')
    var id = $(element).attr('data_id');
    //var id_reunionn = $('#acta-reunion-id').val();
    $.ajax({
        url : $(element).attr('data_url'),
        data : {
            id : $(element).attr('data_id'),
            id_reunion : $('#acta-reunion-id').val()
        },
        type : "POST",
        success : function(response){
            $('#modal-delete-coment').modal('hide');//oculto el modal
            $('#historial_comentarios').html(response);
            //$('div#'+id).parents('delete').remove();

            //alert(response);
        },
        error : function(){

        },
        complete : function(){
            $('.link-tooltip').tooltip();
        }
    });
}

//metodo para la busqueda
function searchAjax(criterio){
    alert(criterio);
}

