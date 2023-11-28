import route from "./route";
let dates = $('#idForm');
dates.on('submit',function(e){
    e.preventDefault();
    let sendData = dates.serialize();
    /*let sendData = new FormData(this);*/
    $.ajax({
        headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
        type:'POST',
        url:route.apply,
        data:sendData,
        success:function(dates_query){
            
        }
    });
});