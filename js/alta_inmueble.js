$(document).ready(function(){    
    $('#estado').on('change', function(){
        var nomEstado = $(this).val();
        if(nomEstado){
        	var datos = {nomEstado};
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data: datos,
                success:function(html){
                    $('#ciudad').html(html);
                }
            }); 
        }else{
            $('#ciudad').html('<option value="">Seleccione antes un Estado</option>'); 
        }
    });
});