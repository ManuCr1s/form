export function inputNull(input) {return (input.val().length > 0);}
export function valueInput(input) {return (input.val() == 0);}
export function dependency(input,url,selec){
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
            success: function(datos_dni){
                let myData = $.parseJSON(datos_dni);
                let increment = document.createElement('option'),
                opciones = []; 
                increment.value=9999;
                increment.text='Seleccione Provincia';
                opciones.push(increment);
                for (const key in myData) {
                    if (myData.hasOwnProperty(key)) {
                        const opcion = document.createElement('option');
                        opcion.value = myData[key].id_province;
                        opcion.text = myData[key].nombre.toUpperCase();
                        opciones.push(opcion);
                    }
                }
                selec.html(opciones);
            }

        });
    });
}