<?php 
$pag = 'vendas';

//verificar se ele tem a permissão de estar nessa página
if(@$vendas == 'ocultar'){
	echo "<script>window.location='index.php'</script>";
	exit();
}

//verificar se o caixa está aberto
$query = $pdo->query("SELECT * from caixas where operador = '$id_usuario' and data_fechamento is null and empresa = '$id_empresa'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if($linhas > 0){
	$caixa_aberto_vendas = 'Sim';
}else{
	$caixa_aberto_vendas = 'Não';
	//echo '<script>alertWarning("Não possui caixa Aberto, abra o caixa!")</script>';
	//if($abertura_caixa == 'Sim' and $nivel_usuario != 'Administrador'){
		//echo '<script>window.location="caixas"</script>';  
	//}	
}

?>




<link rel="stylesheet" type="text/css" href="css/pdv.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<div class="pdv_body">
 <!-- Main Content -->
  <main class="">
    <div class="flex flex-col lg:flex-row gap-6 pdv-container bg-white">
      <!-- Produtos Section -->
      <div class="w-full lg:w-2/3 products-section">
        <!-- Barra de Busca e Categorias -->
        <div class="bg-white rounded-xl shadow-sm p-4 mb-6">
          <div class="search-container mb-4">
            <i class="fas fa-search search-icon"></i>
            <input style="font-weight: normal" onkeyup="buscar()" type="text" placeholder="Buscar produtos..." class="form-input" name="txt_buscar" id="txt_buscar">
           
          </div>
          
          <div class="flex overflow-x-auto pb-2 gap-3">
           
          	
		<?php 
		$query = $pdo->query("SELECT * from categorias where ativo = 'Sim' and empresa = '$id_empresa' order by nome asc");
		$res = $query->fetchAll(PDO::FETCH_ASSOC);
		$linhas = @count($res);
		if($linhas > 0){
			for($i=0; $i<$linhas; $i++){
				$id = $res[$i]['id'];
				$nome = $res[$i]['nome'];	
				$foto = $res[$i]['foto'];	
				$ativo = $res[$i]['ativo'];
				$icone = $res[$i]['icone'];

				$nomeF = mb_strimwidth($nome, 0, 20, "..."); 
				
		//totalizar produtos
				$query2 = $pdo->query("SELECT * from produtos where categoria = '$id' and ativo = 'Sim' and (estoque > 0 or tem_estoque = 'Não') and empresa = '$id_empresa' ");
				$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
				$produtos = @count($res2);

				if($produtos > 0){
					?>
            <button type="button" onclick="listar('<?php echo $id ?>')" class="category-pill flex flex-col items-center px-3 py-2 rounded-xl bg-white text-secondary text-sm font-medium whitespace-nowrap shadow-sm">
              <div class="w-12 h-12 rounded-full bg-neutral-100 flex items-center justify-center mb-1">
                <i class="<?php echo $icone ?> text-primary text-lg"></i>
              </div>
              <span class="text-dark"><small><?php echo $nomeF ?></small></span>
            </button>

        <?php } } } ?>

          
          </div>
        </div>
        
        <!-- Grid de Produtos -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 bg-white" id="listar">


         
          
          
         
        </div>
      </div>
      
      <!-- Carrinho Section -->
      <div class="w-full lg:w-1/3 cart-section">
        <div class="bg-white rounded-xl shadow-sm p-4">
                   <!-- Lista de Itens no Carrinho -->
         <div id="listar_vendas" style="margin-top: -10px"></div>
          
          
          <form id="form_venda">         
          <!-- Cliente e Pagamento -->
          <div class="mb-4">
            <label class="block text-sm font-medium text-dark mb-1">Cliente</label>
            <div class="flex gap-2">
              
              <div class="col-md-10" style="padding:0">
              <div id="listar_clientes">
										
			  </div>
			  </div>
            	
            	<div class="col-md-2" style="">
              <button type="button" class="btn-search bg-success" data-bs-toggle="modal" data-bs-target="#modalCliente">
                <i class="fas fa-plus"></i>
              </button>
          </div>
            </div>
          </div>
          
         <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
            <label class="block text-sm font-medium text-dark mb-1">Forma de Pagamento</label>
            <select class="form-select" id="saida" name="saida">
              <option value="">Forma de Pgto</option>
												<?php 
												$query = $pdo->query("SELECT * FROM formas_pgto where empresa = '$id_empresa' order by id asc");
												$res = $query->fetchAll(PDO::FETCH_ASSOC);
												for($i=0; $i < @count($res); $i++){
													foreach ($res[$i] as $key => $value){}

														?>	
													<option value="<?php echo $res[$i]['nome'] ?>"><?php echo $res[$i]['nome'] ?></option>

												<?php } ?>
            </select>
          </div>  


          <div>
              <label class="block text-sm font-medium text-dark mb-1">Data de Pagamento</label>
            <input type="date" class="form-control" id="data2" name="data2" value="<?php echo $data_atual; ?>">
            </div> 


          </div>    
       

           <div class="grid grid-cols-2 gap-4 mb-4">            
            <div>
              <label class="block text-sm font-medium text-dark mb-1">Valor Pago</label>
              <input type="text" class="form-control" id="valor_pago" name="valor_pago" value="0" onkeyup="FormaPg()">
            </div>

             <div>
            	<label class="block text-sm font-medium text-dark mb-1">Desconto <a id="desc_reais" class="desconto_link_ativo" href="#" onclick="tipoDesc('reais')">R$</a> / <a id="desc_p" class="desconto_link_inativo" href="#" onclick="tipoDesc('%')">%</a></label>
             
              <input type="number" class="form-control" id="desconto" name="desconto" placeholder="R$" onkeyup="listarVendas()">
            </div>
          </div>
         
          
          <div class="grid grid-cols-2 gap-4 mb-4">          
            
             <div>
              <label class="block text-sm font-medium text-dark mb-1">Garantia</label>
              <input type="text" class="form-control" name="garantia_venda" id="garantia_venda" placeholder="Ex: 30 Dias">
            </div>

            <div>
              <label class="block text-sm font-medium text-dark mb-1">Troco Para</label>
              <input type="number" class="form-control" id="troco" placeholder="R$" name="troco" onkeyup="listarVendas()">
            </div>


          </div>
          
        


          <div id="div_pgto2">
									<span><b>Total Restante: <span class="text-danger">R$ <span id="total_restante"></span></span></b></span>
								

									<div class="grid grid-cols-2 gap-4 mb-4">

									<div>						
										<label class="block text-sm font-medium text-dark mb-1">Data Pagamento 2</label> 
										<input type="date" class="form-control" id="data_restante" name="data_restante" value="<?php echo $data_atual ?>">
										
									</div>

									<div>					
											<label class="block text-sm font-medium text-dark mb-1">Pgto Restante</label>
											<select class="form-select" name="forma_pgto2" id="forma_pgto2"> 
												<option value="">Forma de Pgto</option>
												<?php 
												$query = $pdo->query("SELECT * FROM formas_pgto where empresa = '$id_empresa' order by id asc");
												$res = $query->fetchAll(PDO::FETCH_ASSOC);
												for($i=0; $i < @count($res); $i++){
													foreach ($res[$i] as $key => $value){}

														?>	
													<option value="<?php echo $res[$i]['nome'] ?>"><?php echo $res[$i]['nome'] ?></option>

												<?php } ?>

											</select>
									</div>

								</div>

								</div>
          
          <div class="flex gap-3 mt-6">
            <button type="button" class="btn-cancel flex-1" onclick="limparVenda()">
              <i class="fas fa-times mr-2"></i> Limpar Venda
            </button>
            <button id="btn_venda" type="submit" class="btn-finalize flex-1">
              <i class="fas fa-check mr-2"></i> Finalizar Venda
            </button>
            <img id="img_loading" src="../img/loading.gif" width="40px" style="display:none">
          </div>




							<input type="hidden" name="cliente" id="cliente_input">

							<input type="hidden" name="tipo_desconto" id="tipo_desconto" value="reais">

							<input type="hidden" name="subtotal_venda" id="subtotal_venda">

							<input type="hidden" name="valor_restante" id="valor_restante">



      </form>


        </div>
      </div>
    </div>
  </main>

 </div>






		<script type="text/javascript">var pag = "<?=$pag?>"</script>
		<script src="js/ajax.js"></script>

		<script type="text/javascript">
			$(document).ready(function() {

				setTimeout(function() {
			        $('#txt_buscar').focus();
			    }, 100);

				if ($(window).width() > 768) {
				    $('#btn_max').click();
				}


				$('#div_pgto2').hide();
			listarVendas()		

				$('.sel2').select2({
					dropdownParent: $('#modalForm')
				});

				$(document).on('select2:open', () => {
					document.querySelector('.select2-search__field').focus();
				});
				listarClientes();
			});
		</script>

		<script type="text/javascript">	

			$("#form_venda").submit(function () {

				$("#btn_venda").hide();
				$("#btn_limpar").hide();
				$("#img_loading").show();


				event.preventDefault();

				var data = $("#data2").val();
				var cliente = $("#cliente").val();
				var data_atual = "<?=$data_atual?>";

				if(data > data_atual && cliente == ""){
					alert('Você precisa selecionar um cliente para essa venda!');
					$("#img_loading").hide();
					$("#btn_venda").show();
					return;
				}

				
				var formData = new FormData(this);

				$.ajax({
					url: 'paginas/' + pag + "/salvar.php",
					type: 'POST',
					data: formData,

					success: function (mensagem) {  

						var msg = mensagem.split("-");        	
						
						$('#mensagem').text('');
						$('#mensagem').removeClass()
						if (msg[0].trim() == "Salvo com Sucesso") {
							$("#img_loading").hide();
							
							$('#desconto').val('');
							$('#troco').val('');
							
							$('#cliente').val('').change();
							$('#cliente_input').val('');
							$('#data').val('<?=$data_atual?>');
							listar(); 
							listarVendas(); 
                //verificar abertura comprovante
							var imp_auto = "<?=$impressao_automatica?>";
							if(imp_auto == 'Sim'){
								window.open('rel/comprovante.php?id='+msg[1])
							}else{
								alert('Venda Efetuada!');
								$('#div_pgto2').hide();
							}
						} else {
							alert(msg[0]);               
							$("#btn_venda").show();
							$("#img_loading").hide();
							$("#btn_limpar").show();
						}

						$("#btn_venda").show();
						$("#btn_limpar").show();

					},

					cache: false,
					contentType: false,
					processData: false,

				});

			});

			function buscar(){
				var busca = $('#txt_buscar').val();
				listar('', busca)
			}

			function addVenda(id_produto, codigo){
				var quantidade = 1;

				if(quantidade <= 0){
					alert('A quantidade deve ser maior que zero')
					return;
				}
				
				$.ajax({
					url: 'paginas/' + pag + "/inserir_item.php",
					method: 'POST',
					data: {quantidade, id_produto},
					dataType: "html",

					success:function(mensagem){
						if (mensagem.trim() == "Inserido com Sucesso") {  
							

							inserido();

							setTimeout(function() {
						       listarVendas();
						       limparCampos();
						       buscar();
						    }, 1000);

						}else{
							alert(mensagem)
						}
					}
				});


				
			}

			function listarVendas(){
				var desconto = $("#desconto").val();	
				var troco = $("#troco").val();
				var tipo_desconto = $("#tipo_desconto").val();	
				$.ajax({
					url: 'paginas/' + pag + "/listar_vendas.php",
					method: 'POST',
					data: {desconto, troco, tipo_desconto},
					dataType: "html",

					success:function(result){
						$("#listar_vendas").html(result);            
					}
				});

				FormaPg()
			}

			function limparVenda(){
				$("#cliente").val('').change();
				$("#quantidade").val('1');
				$("#desconto").val('');
				$("#troco").val('');
				$("#data").val('<?=$data_atual?>');
				$("#cliente_input").val('');
				$('#div_pgto2').hide();
				listarVendas()

				$("#btn_limpar").hide();		
				$.ajax({
					url: 'paginas/' + pag + "/limpar_venda.php",
					method: 'POST',
					data: {},
					dataType: "html",

					success:function(result){        	
						listarVendas();      
					}
				});
				
			}
		</script>

		<script type="text/javascript">
	$("#form-cliente").submit(function () { 

    $('#mensagem_cliente').text('Salvando!!');
    $('#btn_salvar_cliente').hide();

    event.preventDefault();
    var formData = new FormData(this);
    var nova_pag = 'clientes';

    $.ajax({
        url: 'paginas/' + nova_pag + "/salvar.php",
        type: 'POST',
        data: formData,

        success: function (mensagem) {
            $('#mensagem_cliente').text('');
            $('#mensagem_cliente').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso") {

                $('#btn-fechar-cliente').click();
                listar();
                listarClientes('1'); 


            } else {

                $('#mensagem_cliente').addClass('text-danger')
                $('#mensagem_cliente').text(mensagem)
            }

             $('#btn_salvar_cliente').show();

        },

        cache: false,
        contentType: false,
        processData: false,

    });

});


	function listarClientes(valor){
	$.ajax({
        url: 'paginas/' + pag + "/listar_clientes.php",
        method: 'POST',
        data: {valor},
        dataType: "html",

        success:function(result){
            $("#listar_clientes").html(result);           
        }
    });
}


function tipoDesc(p){
	$('#desc_reais').removeClass()
	$('#desc_p').removeClass()

	if(p == '%'){
		$('#desconto').attr('placeholder', '%');
		$('#desc_reais').addClass('desconto_link_inativo')
		$('#desc_p').addClass('desconto_link_ativo')
	}else{
		$('#desconto').attr('placeholder', 'R$');
		$('#desc_reais').addClass('desconto_link_ativo')
		$('#desc_p').addClass('desconto_link_inativo')
	}

	 $("#tipo_desconto").val(p);
	 listarVendas();  
}



function FormaPg(){
	var valor_pago = $('#valor_pago').val();
	var subtotal_venda = $('#subtotal_venda').val();

	if(parseFloat(valor_pago) < parseFloat(subtotal_venda)){
		$('#div_pgto2').show();
	}else{
		$('#div_pgto2').hide();
	}

	if(valor_pago == ""){
		valor_pago = 0;
	}

	if(subtotal_venda == ""){
		subtotal_venda = 0;
	}

	var total_restante = parseFloat(subtotal_venda) - parseFloat(valor_pago);
	$('#total_restante').text(total_restante.toFixed(2));
	$('#valor_restante').val(total_restante);
}
		</script>






<!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: {
              DEFAULT: '#0F4C81',
              dark: '#0A3A62',
              light: '#1A6DB3'
            },
            secondary: {
              DEFAULT: '#1E293B',
              dark: '#0F172A',
              light: '#334155'
            },
            accent: {
              DEFAULT: '#38BDF8',
              dark: '#0284C7',
              light: '#7DD3FC'
            },
            success: {
              DEFAULT: '#10B981',
              dark: '#059669',
              light: '#34D399'
            },
            warning: {
              DEFAULT: '#F59E0B',
              dark: '#D97706',
              light: '#FBBF24'
            },
            danger: {
              DEFAULT: '#EF4444',
              dark: '#DC2626',
              light: '#F87171'
            },
            neutral: {
              50: '#F8FAFC',
              100: '#F1F5F9',
              200: '#E2E8F0',
              300: '#CBD5E1',
              400: '#94A3B8',
              500: '#64748B',
              600: '#475569',
              700: '#334155',
              800: '#1E293B',
              900: '#0F172A',
            }
          },
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
          },
          boxShadow: {
            'card': '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
            'card-hover': '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
          }
        }
      }
    }
  </script>


  <script type="text/javascript">
  $(document).keyup(function(e) {
  		if(e.keyCode === 13){

  			var codigo = $("#txt_buscar").val(); 
  			if(codigo == ""){
  				return;
  			}  
            
            $.ajax({
		        url: 'paginas/' + pag + "/buscar_produto.php",
		        method: 'POST',
		        data: {codigo},
		        dataType: "html",

		        success:function(result){

		            if(result.trim() === 'Código do Produto não encontrado!'){
		            	limparCampos();
		            	alertCodigo(result)

		            }else{
		            	// Faz o split separando por vírgula
						var partes = result.split(',');

						// Agora cada valor está separado:
						var id = partes[0];
						var estoque_unit = partes[1];
						var nome = partes[2];
						var nome_unidade = partes[3];
		            	addVenda(id, estoque_unit, nome, nome_unidade);

		            	if(estoque_unit != 'Não'){
		            		var audio = new Audio('../img/barCode.wav');
					         audio.addEventListener('canplaythrough', function() {
					          audio.play();
					        });

					         //limparCampos();
		            	}
		            	
		            }        
		        }
		    });

        }
  });
  </script>


  <script type="text/javascript">
  	$(document).ready(function() {
    $('#quantidade_prod').on('keyup', function(event) {
        if (event.key === 'Enter') {
            event.preventDefault();
            addVenda('', '', '', '');

            var audio = new Audio('../../img/barCode.wav');
				         audio.addEventListener('canplaythrough', function() {
				          audio.play();
				        });

				         //limparCampos();
        }
    });
});
  </script>



  <script type="text/javascript">
  	function alertCodigo(){
        $('body').removeClass('timer-alert');
        Swal.fire({
            title: 'Produto não Encontrado!',
            text: 'Código do produto não Cadastrado',
            icon: "error",
            timer: 1500,
            customClass: {
            container: 'swal-whatsapp-container'
        }
        })?.then(
            function () {
            },
            // lidando com a rejeição da promessa
            function (dismiss) {
                if (dismiss === 'timer') {
                    console.log('Eu estava fechado pelo cronômetro')
                }
            }
        )
    }
  </script>