
$(document).ready(function () {
    
        function mostrarVideos(cat) {
            $.post("recursos/servicios/resConsultarVideos.php", {categoria: cat},
				function (res) {
                    if (res !== null) {
                        var videos = JSON.parse(res);
                        if(cat == "Pierna"){
                            for (var i in videos) {
                                arrP[i] = videos[i][0]+";"+videos[i][1]+";"+videos[i][2];
                            }
                        }
                        if(cat == "Abdomen"){
                            for (var i in videos) {
                                arrA[i] = videos[i][0]+";"+videos[i][1]+";"+videos[i][2];
                            }
                        }
                        if(cat == "Brazo"){
                            for (var i in videos) {
                                arrB[i] = videos[i][0]+";"+videos[i][1]+";"+videos[i][2];
                            }
                        }   
                    }
             });
	     }
    function next(arrI, index, size){
        if(size > 0){
			if(size >= 3){
                $('.cuadro1').show();
                $('.cuadro2').show();
                $('.cuadro3').show();
				var aux = arrI[index];
				var arr = aux.split(';');
				$('#PA1').attr("href",arr[0]);
                $('#PI1').attr("src",arr[1]);
                $('#PP1').text(arr[2]);
				aux = arrI[index+1];
				arr = aux.split(';');
				$('#PA2').attr("href",arr[0]);
                $('#PI2').attr("src",arr[1]);
                $('#PP2').text(arr[2]);
				aux = arrI[index+2];
				arr = aux.split(';');
				$('#PA3').attr("href",arr[0]);
                $('#PI3').attr("src",arr[1]);
                $('#PP3').text(arr[2]);
                if(index == 0){
                    index = 2;
                }else{
                    index+=3;
                }
				size-=3;
				if(size == 0){
					$('#PNext').hide();
				}
			}else{
				if(size == 2){
                    $('.cuadro1').show();
                    $('.cuadro2').show();
                    $('.cuadro3').hide();
					var aux = arrI[index+1];
					var arr = aux.split(';');
					$('#PA1').attr("href",arr[0]);
                    $('#PI1').attr("src",arr[1]);
                    $('#PP1').text(arr[2]);
					aux = arrI[index+2];
					arr = aux.split(';');
					$('#PA2').attr("href",arr[0]);
                    $('#PI2').attr("src",arr[1]);
                    $('#PP2').text(arr[2]);
				
					$('#PNext').hide();
					index+=2
					size=0;
				}else{
                    $('.cuadro1').show();
                    $('.cuadro2').hide();
					$('.cuadro3').hide();
					var aux = arrI[index+1];
					var arr = aux.split(';');
					$('#PA1').attr("href",arr[0]);
                    $('#PI1').attr("src",arr[1]);
                    $('#PP1').text(arr[2]);
					index+=1
					size=0;
					$(this).hide();
				}
			}
		}
        
        function resultadosBusq(){
            
        }
        
        var arr2 = [index, size];
        return arr2;
    }

    //Pierna
    var arrP = [];
    var arrA = [];
    var arrB = [];
    var catP = "Pierna";
    var catA = "Abdomen";
    var catB = "Brazo";
    mostrarVideos(catP);
    mostrarVideos(catA);
    mostrarVideos(catB);
    var size;
	var i = 0;
    var select = 0; //0 pierna 1 ab 2 brazo 3 ResBusqueda
    $('#NoRes').hide();
    $('.cuadro1').hide();
    $('.cuadro2').hide();
    $('.cuadro3').hide();
    $('#PNext').hide();
    var resultados = [];
    
    //Busqueda
    $('#btnBuscar').click(function () {
        $('#DivInicio').hide();
        $('#NoRes').hide();
        var text = $('#vidBuscar').val();
        if(text != ''){
        function fitroVideos(text) {
            $.post("recursos/servicios/resFiltroVideos.php", {texto: text},
				function (res) {
                    if (res !== "0 resultados") {
                        videos = JSON.parse(res);
                        resultados =[];
                        for (var j in videos) {
                            resultados[j] = videos[j][0]+";"+videos[j][1]+";"+videos[j][2];
			             }
                        size = resultados.length;
                        //if (size <= 3) {
                            if (size >= 3) {
                                $('.cuadro1').show();
                                $('.cuadro2').show();
                                $('.cuadro3').show();
                                $('#PNext').hide();
                                $('#PA1').attr("href", videos[0][0]);
                                $('#PI1').attr("src", videos[0][1]);
                                $('#PP1').text(videos[0][2]);
                                $('#PA2').attr("href", videos[1][0]);
                                $('#PI2').attr("src", videos[1][1]);
                                $('#PP2').text(videos[1][2]);
                                $('#PA3').attr("href", videos[2][0]);
                                $('#PI3').attr("src", videos[2][1]);
                                $('#PP3').text(videos[2][2]);
                                //Más de tres resultados
                                if(size > 3){
                                    select=3;
                                    size=videos.length -3;
                                    i=2;
                                    $('#PNext').show();
                                }
                            } else {
                                if (size == 2) {
                                    $('.cuadro1').show();
                                    $('.cuadro2').show();
                                    $('#PA1').attr("href",videos[0][0]);
                                    $('#PI1').attr("src",videos[0][1]);
                                    $('#PP1').text(videos[0][2]);
                                    $('#PA2').attr("href",videos[1][0]);
                                    $('#PI2').attr("src",videos[1][1]);
                                    $('#PP2').text(videos[1][2]);
                                    $('.cuadro3').hide();
                                } else {
                                    $('.cuadro1').show();
                                    $('.cuadro2').hide();
                                    $('.cuadro3').hide();
                                    $('#PA1').attr("href",videos[0][0]);
                                    $('#PI1').attr("src",videos[0][1]);
                                    $('#PP1').text(videos[0][2]);
                                    $('#PNext').hide();
                                }
                            }
                        //} else {
                            
                        //}
                    } else {
                            $('.cuadro1').hide();
                            $('.cuadro2').hide();
                            $('.cuadro3').hide();
                            $('#PNext').hide();
                            $('#NoRes').show();
                        //alert("No se encontraron coincidencias");
                        
                      //No se encontró match  
                    }
             });
	     }
        $('#vidBuscar').val('');
        fitroVideos(text);
        }else{
            $('#NoRes').show();
            $('.cuadro1').hide();
            $('.cuadro2').hide();
            $('.cuadro3').hide();
            $('#PNext').hide();
        }
    });
    
    //Pierna
    $('#PiernaRef').click(function () {
        mostrarVideos(catP);
        $('#NoRes').hide();
        $('#DivInicio').hide();
        select = 0;
        size = arrP.length;
        i=0;
        var resfun = next(arrP, i, size);
        i = resfun[0];
        size = resfun[1];
        if(size > 0) {
            $('#PNext').show();
        }
    });
    
    //Abdomen
    $('#AbRef').click(function () {
        $('#NoRes').hide();
        $('#DivInicio').hide();
        mostrarVideos(catA);
        select = 1;
        size = arrA.length;
        i=0;
        var resfun = next(arrA, i, size);
        i = resfun[0];
        size = resfun[1];
        if(size > 0){
            $('#PNext').show();
        }
    });
    
    //Brazo
    $('#BrazoRef').click(function() {
        $('#NoRes').hide();
        $('#DivInicio').hide();
        mostrarVideos(catB);
        select = 2;
        size = arrB.length;
        i = 0;
        var resfun = next(arrB, i, size);
        i = resfun[0];
        size = resfun[1];
        if(size > 0){
            $('#PNext').show();
        }
    });
    
    //Boton Next
    $('#PNext').click(function(){
        if(select == 0){
            var resfun = next(arrP, i, size);
            i = resfun[0];
            size = resfun[1];
            if(size == 0){
                $(this).hide();
            }
        }else{
            if(select == 1){
                var resfun = next(arrA, i, size);
                i = resfun[0];
                size = resfun[1];
                if(size == 0){
                    $(this).hide();
                }
                
            }else{
                if(select == 2){
                    var resfun = next(arrB, i, size);
                    i = resfun[0];
                    size = resfun[1];
                    if(size == 0){
                        $(this).hide();
                    }
                }else{
                   var resfun = next(resultados, i, size);
                    i = resfun[0];
                    size = resfun[1];
                    
                    if(size == 0){
                        $(this).hide();
                    } 
                }
            }
        }
		
	});





});
