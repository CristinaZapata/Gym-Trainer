
$(document).ready(function(){
	var linksPierna = ["http://www.youtube.com/embed/-sICMHs301M?v=-sICMHs301M;images/pruebas/-sICMHs301M.jpg", "http://www.youtube.com/embed/k-sn0QRYNAs?v=k-sn0QRYNAs;images/pruebas/k-sn0QRYNAs.jpg", "http://www.youtube.com/embed/T_HuY63HOJI?v=T_HuY63HOJI;images/pruebas/T_HuY63HOJI.jpg", "http://www.youtube.com/embed/idAnNSCsH2I?v=idAnNSCsH2I;images/pruebas/idAnNSCsH2I.jpg"];
	var i=0;
	var linksAb =["http://www.youtube.com/embed/hxjKZcOT17E?v=hxjKZcOT17E;images/pruebas/hxjKZcOT17E.jpg", "http://www.youtube.com/embed/ZJ8Zdj0OPMI?v=ZJ8Zdj0OPMI;images/pruebas/ZJ8Zdj0OPMI.jpg", "http://www.youtube.com/embed/LebPal5gKrc?v=LebPal5gKrc;images/pruebas/LebPal5gKrc.jpg", "http://www.youtube.com/embed/FH8Cuwkx7j8?v=FH8Cuwkx7j8;images/pruebas/FH8Cuwkx7j8.jpg"];
	var j=0;
	var linksBrazo = ["http://www.youtube.com/embed/hAGfBjvIRFI?v=hAGfBjvIRFI;images/pruebas/hAGfBjvIRFI.jpg", "http://www.youtube.com/embed/oUychjqfO8I?v=oUychjqfO8I;images/pruebas/oUychjqfO8I.jpg", "http://www.youtube.com/embed/4pcaD3wInqM?v=4pcaD3wInqM;images/pruebas/4pcaD3wInqM.jpg", "http://www.youtube.com/embed/zU9ig8oaU6E?v=zU9ig8oaU6E;images/pruebas/zU9ig8oaU6E.jpg"];
	var z=0;
	$('#irVideosPierna').hide();
	$('#irVideosAb').hide();
	$('#irVideosBrazo').hide();
	//$('#Rpiernas').hide();
    //Pierna
    $('#WP1').click(function(){
		$('#irVideosPierna').show();
		$('#intro').hide();
		/*$('#Lista ul').append("<li><img src='images/-sICMHs301M.jpg' alt='Workout 1'  title='Workout 1' /><video preload='none' src='http://www.youtube.com/embed/-sICMHs301M?v=-sICMHs301M' ></video></li>");
    	$('#Thumb ul').append("<li><img src='images/-sICMHs301M-tn.jpg' alt='Workout 1' title='Workout 1' /></li>");
    	$('#Rpiernas').show();*/
        //location.reload();
        if(i < 4){
			alert("Se ha agregado una nueva rutina");
        	var aux = linksPierna[i];
        	var arr = aux.split(';');
        	$('#irVideosPierna').append("<a href="+arr[0]+" ><img border='0' src="+arr[1]+ " width='200' height='200'></a>");
        	i++;
		}else{
			alert("La rutina ya ha sido agregada");
		}
    });
    //Abdomen
    $('#WA1').click(function(){
			$('#irVideosAb').show();
			$('#intro').hide();
	        if(j < 4){
				alert("Se ha agregado una nueva rutina");
	        	var aux = linksAb[j];
	        	var arr = aux.split(';');
				console.log(arr[1]);
	        	$('#irVideosAb').append("<a href="+arr[0]+" ><img border='0' src="+arr[1]+ " width='200' height='200'></a>");
	        	j++;
			}else{
				alert("La rutina ya ha sido agregada");
			}
    });

	//Brazo
	$('#WB1').click(function(){
			$('#irVideosBrazo').show();
			$('#intro').hide();
			if(z < 4){
				alert("Se ha agregado una nueva rutina");
				var aux = linksBrazo[z];
				var arr = aux.split(';');
				console.log(arr[1]);
				$('#irVideosBrazo').append("<a href="+arr[0]+" ><img border='0' src="+arr[1]+ " width='200' height='200'></a>");
				z++;
			}else{
				alert("La rutina ya ha sido agregada");
			}
});



});
