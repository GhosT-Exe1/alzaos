<?php 
$pag = 'rel_contratos';
require_once("verificar.php");
if(@$rel_contratos == 'ocultar'){
	echo "<script>window.location='index'</script>";
    exit();
}	

$id_cliente = '';
$numero_contrato = '';

 ?>

<div class="justify-content-between">
 

			<div class="modal-body">

			<div class="row">

						<div class="col-md-3 mb-2" >							
									<label>Tipo Contrato</label>
									
									<select class="sel203" id="contrato" style="width:100%" onchange="listarContrato()" required="">
										<option value="">Selecionar Modelo</option>
										<?php										
										$query = $pdo->query("SELECT * from contratos where empresa = '$id_empresa' order by modelo asc");
										$res = $query->fetchAll(PDO::FETCH_ASSOC);
										$linhas = @count($res);
										if($linhas > 0){
											for($i=0; $i<$linhas; $i++){
												if($res[$i]['modelo'] == 'Contrato de Honorário' and $id_contrato != ""){
													$select = 'selected';
												}else{
													$select = '';
												}
											 ?>
												<option <?php echo $select ?> value="<?php echo $res[$i]['id'] ?>"><?php echo $res[$i]['modelo'] ?></option>
											<?php } } ?>
										</select>							
									</div>



						<div class="col-md-4 mb-2" >							
									<label>Cliente (Nome ou CPF)</label>

									<select class="sel203" id="cliente" style="width:100%" onchange="listarContrato()">
										<option value="">Selecionar Cliente</option>
										<?php 
										if($mostrar_registros == 'Não'){
											$query = $pdo->query("SELECT * from clientes where empresa = '$id_empresa' and usuario = '$id_usuario' or visto_por = 'Todos' order by nome asc");
										}else{
											$query = $pdo->query("SELECT * from clientes where empresa = '$id_empresa' order by nome asc");
										}
										$res = $query->fetchAll(PDO::FETCH_ASSOC);
										$linhas = @count($res);
										if($linhas > 0){
											for($i=0; $i<$linhas; $i++){
												if($res[$i]['id'] == $id_cliente){
													$select = 'selected';
												}else{
													$select = '';
												}
											 ?>
												<option <?php echo $select ?> value="<?php echo $res[$i]['id'] ?>"><?php echo $res[$i]['nome'] ?> - <?php echo $res[$i]['cpf'] ?></option>
											<?php } } ?>
										</select>							
									</div>


						<div class="col-md-3 mb-2" >							
									<label>Profissional</label>
									<select class="sel203" id="profissional" style="width:100%" onchange="listarContrato()">
										<option value="">Selecionar Profissional</option>
										<?php 										
											$query = $pdo->query("SELECT * from usuarios where empresa = '$id_empresa' order by nome asc");
																				
										$res = $query->fetchAll(PDO::FETCH_ASSOC);
										$linhas = @count($res);
										if($linhas > 0){
											for($i=0; $i<$linhas; $i++){
												
											 ?>
												<option value="<?php echo $res[$i]['id'] ?>"><?php echo $res[$i]['nome'] ?></option>
											<?php } } ?>
										</select>							
									</div>


										


										<div class="col-md-1 mb-2" >							
									<label>Cabeçalho</label>
									<select class="sel203" id="cabecalho" style="width:100%" onchange="$('#cabecalho_form').val($('#cabecalho').val())">
										<option value="Sim">Sim</option>
										<option value="Não">Não</option>
										</select>							
									</div>


									<div class="col-md-1 mb-1" style="margin-top: 26px">	
										<button onclick="$('#botao_form').click()" type="submit" class="btn btn-primary">Gerar</button>
									</div>



				
			</div>		


			
				<div class="row">
						<div class="col-md-3 mb-2" >							
									<label>Cliente Adicional</label>

									<select class="sel203" id="cliente_ad" style="width:100%" onchange="listarContrato()">
										<option value="">Selecionar Cliente</option>
										<?php 
										if($mostrar_registros == 'Não'){
											$query = $pdo->query("SELECT * from clientes where empresa = '$id_empresa' and usuario = '$id_usuario' or visto_por = 'Todos' order by nome asc");
										}else{
											$query = $pdo->query("SELECT * from clientes where empresa = '$id_empresa' order by nome asc");
										}
										$res = $query->fetchAll(PDO::FETCH_ASSOC);
										$linhas = @count($res);
										if($linhas > 0){
											for($i=0; $i<$linhas; $i++){
												if($res[$i]['id'] == $id_cliente){
													$select = 'selected';
												}else{
													$select = '';
												}
											 ?>
												<option <?php echo $select ?> value="<?php echo $res[$i]['id'] ?>"><?php echo $res[$i]['nome'] ?> - <?php echo $res[$i]['cpf'] ?></option>
											<?php } } ?>
										</select>							
									</div>

									<div class="col-md-1 mb-2" style="padding:0px; margin-top: 27px">	
											<button type="button" class="btn btn-info" href="#" onclick="addCliente()"><i class="fa fa-plus "></i></button>
									</div>



									<div class="col-md-3 mb-2" >							
									<label>Profissional Adicional</label>
									<select class="sel203" id="profissional_ad" style="width:100%" onchange="listarContrato()">
										<option value="">Selecionar Profissional</option>
										<?php 
										$query = $pdo->query("SELECT * from usuarios where empresa = '$id_empresa' order by nome asc");
										
										
										$res = $query->fetchAll(PDO::FETCH_ASSOC);
										$linhas = @count($res);
										if($linhas > 0){
											for($i=0; $i<$linhas; $i++){
												
											 ?>
												<option value="<?php echo $res[$i]['id'] ?>"><?php echo $res[$i]['nome'] ?></option>
											<?php } } ?>
										</select>							
									</div>

									<div class="col-md-1 mb-2" style="padding:0px; margin-top: 27px">	
											<button type="button" class="btn btn-info" href="#" onclick="addProf()"><i class="fa fa-plus "></i></button>
									</div>

									
				</div>
						

			</div>
			
			

</div>


<input type="hidden" id="clientes_sel">
<input type="hidden" id="prof_sel">

<div class="container" style="font-weight: normal">
 <form method="POST" action="rel/contrato_class.php" target="_blank">
<textarea class="text_area_mobile " id="texto_contrato" name="texto"></textarea>
<input type="hidden" id="cabecalho_form" name="cabecalho_form" value="Sim">
<input type="hidden" id="cliente_form" name="cliente" >
<input type="hidden" id="modelo_form" name="modelo" >
<button type="submit" id="botao_form" style="display:none"></button>
</form>
</div>


<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

<script type="text/javascript">
	$(document).ready(function() {	
	listarContrato()			
				$('.sel203').select2({
					
				});

			});
</script>

<script type="text/javascript">var pag = "<?=$pag?>"</script>
<script src="js/ajax.js"></script>


<script type="text/javascript">
	function listarContrato(){
		var contrato = $('#contrato').val();
		var cliente = $('#cliente').val();
		var profissional = $('#profissional').val();
		var servico = $('#servico').val();
		var clientes_sel = $('#clientes_sel').val();
		var prof_sel = $('#prof_sel').val();

		$('#cliente_form').val(cliente);
		$('#modelo_form').val(contrato);

		$.ajax({
        url: 'paginas/' + pag + "/listar_texto.php",
        method: 'POST',
        data: {contrato, cliente, profissional, servico, clientes_sel, prof_sel},
        dataType: "html",

        success:function(result){
          	 nicEditors.findEditor("texto_contrato").setContent(result);       
	        }
	    });
	}


	function addCliente(){
		var cliente = $('#cliente_ad').val();
		var clientes_sel = $('#clientes_sel').val();
		var ids = clientes_sel + cliente + '-';
		$('#clientes_sel').val(ids);
		listarContrato();

	}

		function addProf(){
		var prof = $('#profissional_ad').val();
		var prof_sel = $('#prof_sel').val();
		var ids = prof_sel + prof + '-';
		$('#prof_sel').val(ids);
		listarContrato();

	}
</script>

