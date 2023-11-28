export function inputNull(input) {return (input.val().length > 0);}
export function valueInput(input) {return (input.val() == 0);}
export function dependency(input,url,selec,destiny){
    input.on('change',function(){
        let datos;
        datos = {
            'valor':input.val(),
        };
        $.ajax({
            headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
            type:'POST',
            url:url,
            data:datos,
            success: function(datos_query){
                let myData = $.parseJSON(datos_query);
                let increment = document.createElement('option'),
                opciones = []; 
                increment.value=9999;
                increment.text='SELECCIONE';
                opciones.push(increment);
                for (const key in myData) {
                    if (myData.hasOwnProperty(key)) {
                        const opcion = document.createElement('option');
                        if(destiny == 0){
                            opcion.value = myData[key].id_province;
                        }else{
                            opcion.value = myData[key].id_district;
                        }
                        opcion.text = myData[key].nombre.toUpperCase();
                        opciones.push(opcion);
                    }
                }
                selec.html(opciones);
            }

        });
    });
}
export function changeInput(selector,actuation_1,actuation_2,number){
    selector.on('change',function(){
        if(selector.val() == 5){
            actuation_1.removeClass('d-none');
            actuation_2.addClass('d-none');
            number.removeAttr('readonly');
        }else if(selector.val() == 9999){
            number.attr('readonly','readonly');
            actuation_2.addClass('d-none');
            actuation_1.addClass('d-none');
        }else{
            actuation_1.addClass('d-none');
            actuation_2.removeClass('d-none');
            number.removeAttr('readonly');
        }
    });
        
}
export function officeAll(url,selec){
    $.ajax({
        headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
        type:'POST',
        url:url,
        success:function(offices){
            let myData = $.parseJSON(offices);
            let increment = document.createElement('option'),
            opciones = []; 
            increment.value=9999;
            increment.text='SELECCIONE';
            opciones.push(increment);
            for (const key in myData) {
                if (myData.hasOwnProperty(key)) {
                    const opcion = document.createElement('option');
                    opcion.value = myData[key].id_office;
                    opcion.text = myData[key].nombre.toUpperCase();
                    opciones.push(opcion);
                }
            }
            selec.html(opciones);
        }
    });
}
