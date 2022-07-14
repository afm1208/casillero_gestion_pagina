

<div class="my-5">
	<form id="frmvalidatelocker" name="frmvalidatelocker" class="form" onsubmit="validacionlocker(); return false" action="" method="POST">
		<div id="slots">
			<div class="row">
				<div class="slots-available  col-lg-12 mb-2 rounded-3">
					<input type="radio" id="tamanogrande" name="tamanoslot" onchange='cambioOpciones1();' value="1" class="btn-check">
					<label class="btn btn-outline-primary" for="tamanogrande"> Grande (<?php if ($mostrarpg['num'] == Null) {
																							echo "0";
																						} else {
																							echo utf8_encode($mostrarpg['num']);
																						} ?>)</label><br>
				</div>
				<div class="slots-available  col-lg-7 mb-2 rounded-3">
					<input type="radio" id="tamanomediano" name="tamanoslot" onchange='cambioOpciones2();' value="2" class="btn-check">
					<label class="btn btn-outline-primary" for="tamanomediano"> Mediano (<?php if ($mostrarpm['num'] == Null) {
																								echo "0";
																							} else {
																								echo utf8_encode($mostrarpm['num']);
																							} ?>)</label><br>
				</div>
				<div class="slots-available  col-lg-5 mb-2 rounded-3">
					<input type="radio" id="tamanopequeno" name="tamanoslot" onchange='cambioOpciones3();' value="3" class="btn-check">
					<label class="btn btn-outline-primary" for="tamanopequeno"> Pequeño (<?php if ($mostrarpp['num'] == Null) {
																								echo "0";
																							} else {
																								echo utf8_encode($mostrarpp['num']);
																							} ?>)</label><br>
				</div>
			</div>
			<input id="tamano-slot" type="text">

			<input id="taquilla-id" type="text">
		</div>
	</form>
</div>

<script>

	function crear_codigo_usuario(){
		var codigo_entrega = document.getElementById('codigo_entrega');
		if (strlen(codigo_entrega) == 6){
		 	var codigo_empresa = random_int(111111,999999);
			 return codigo_empresa;
		}
	}


	function recoger_ropa (codigo_empresa){
		var vida_code_user = 1;
		var vida_code_empresa = 2;
		var puerta = false;
		if (strlen(codigo_empresa) == 6){
          do {
			vida_code_empresa = vida_code_empresa - 1;
			puerta = true;
		} while(vida_code_empresa == 2);
		}
	}

	function dejar_ropa(codigo_empresa){
		if (vida_code_empresa == 1){
         do{  
           vida_code_empresa = vida_code_empresa - 1;
		   puerta = true;
		 } while(vida_code_empresa == 1);
		}
	}

	function terminar (codigo_entrega){
		if (vida_code_empresa == 0){
			if (vida_code_user == 1){
		do{
          vida_code_user = vida_code_user - 1;
		}while(vida_code_user == 1);
     } 
		}
  
	}

	var tamanogrande = {
		//solución, material y tiempo
		"1": ["GRANDE", "<?PHP echo 2 ?>"],
	}
	var tamanomediano = {
		//solución, material y tiempo
		"2": ["mediano", "<?PHP echo 4 ?>"],
	}

	var tamanopequeno = {
		//solución, material y tiempo
		"3": ["Pequeño", "<?PHP echo 5 ?>"],
	}

	

	function cambioOpciones1()

	{
		var combo = document.getElementById('tamanogrande');
		var opcion1 = combo.value;


		document.getElementById('tamano-slot').value = tamanogrande[opcion1][0];

		document.getElementById('taquilla-id').value = tamanogrande[opcion1][1];



	}

	function cambioOpciones2()

	{
		var combo = document.getElementById('tamanomediano');
		var opcion2 = combo.value;


		document.getElementById('tamano-slot').value = tamanomediano[opcion2][0];

		document.getElementById('taquilla-id').value = tamanomediano[opcion2][1];



	}

	function locker(){

	}

	function cambioOpciones3()

	{
		var combo = document.getElementById('tamanopequeno');
		var opcion3 = combo.value;


		document.getElementById('tamano-slot').value = tamanopequeno[opcion3][0];

		document.getElementById('taquilla-id').value = tamanopequeno[opcion3][1];
	}

</script>