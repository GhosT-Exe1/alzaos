<?php 
$pag = 'equipamentos';

//verificar se ele tem a permissão de estar nessa página
if(@$equipamentos == 'ocultar'){
    echo "<script>window.location='index.php'</script>";
    exit();
}

 ?>
 <!-- Botão para abrir a madal de criar -->
<div class="breadcrumb-header justify-content-between">
 	<div class="left-content mt-2">
<a class="btn ripple btn-primary text-white" onclick="inserir()" type="button"><i class="fa fa-file-circle-plus me-1"></i> Adicionar <?php echo ucfirst($pag); ?></a>


<!-- BOTÃO EXCLUIR SELEÇÃO -->
			<div class="dropdown" style="display: inline-block;">                      
                        <a href="#" aria-expanded="false" aria-haspopup="true" data-bs-toggle="dropdown" class="btn btn-danger dropdown" id="btn-deletar" style="display:none"><i class="fe fe-trash-2"></i> Deletar</a>
                  <div  class="dropdown-menu tx-13">
                      <div style="width: 240px; padding:15px 5px 0 10px;" class="dropdown-item-text">
                        <p>Excluir Selecionados? <a href="#" onclick="deletarSel()"><span class="text-danger"><button class="btn-danger">Sim</button></span></a></p>
                      </div>
                  </div>
             </div>

</div>
</div>

<div class="row row-sm">
<div class="col-lg-12">
<div class="card custom-card">
<div class="card-body" id="listar">

</div>
</div>
</div>
</div>

<input type="hidden" id="ids">



<!-- Modal equipamento -->
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">


			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="exampleModalLabel"><span id="titulo_inserir"></span></h4>

				<!-- Botão -->
			<button id="btn-fechar" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span class="text-white" aria-hidden="true">&times;</span></button>
			</div>


			<form id="form">
			<div class="modal-body">
				

					<div class="row">
						<div class="col-md-7">						
								<label>Nome do Equipamento</label>
								<input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o Equipamento" required>					
						</div>

						<div class="col-md-3" style="margin-top: 24px;">   
							<button type="submit" id="btn_salvar" class="btn btn-primary">Salvar<i class="fa-solid fa-check ms-2"></i></button>
					</div>

						
					</div>

					<input type="hidden" class="form-control" id="id" name="id">					

				<br>
				<small><div id="mensagem" align="center"></div></small>
			</div>
			
			</form>
		</div>
	</div>
</div>



<script type="text/javascript">var pag = "<?=$pag?>"</script>
<script src="js/ajax.js"></script>


<script type="text/javascript">
			

			const modalForm = document.getElementById('modalForm')
const nome = document.getElementById('nome')

modalForm.addEventListener('shown.bs.modal', () => {
  nome.focus()
})


</script>

