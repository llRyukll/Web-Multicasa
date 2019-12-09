$(document).ready(function () {
    datos = []
    //Se crea la grafica vacía
    var grafica = new CanvasJS.Chart("ContainerGraf1", {
            animationEnabled: true,
            title :{
            text: "Gráfico de Precios de Inmuebles"
                },
            axisX: {                        
            title: "Eje X"
             },
            axisY: {                        
            title: "Unidades"
                },
            data: [
                {
                    dataPoints: datos
                }
            ]
        });

    //Se obtiene el JSON de data.php y manda la informacion a la gráfica
    $.getJSON("data.php", function (result) {
        grafica.options.data[0].dataPoints = result;
        grafica.render();
    });
});