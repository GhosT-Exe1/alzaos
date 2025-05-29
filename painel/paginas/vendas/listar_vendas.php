<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
$tabela = 'itens_venda';
require_once("../../../conexao.php");
$id_usuario = $_SESSION['id'];
$desconto = @$_POST['desconto'];
$troco = @$_POST['troco'];
$tipo_desconto = @$_POST['tipo_desconto'];

if($desconto == ""){
	$desconto = 0;
}

$total_troco = 0;
$total_trocoF = 0;

$total_v = 0;

//buscar o total da venda
$query = $pdo->query("SELECT * from $tabela where funcionario = '$id_usuario' and id_venda = '0' and empresa = '$id_empresa' order by id asc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if($linhas > 0){
	for($i=0; $i<$linhas; $i++){	
		$total_das_vendas = $res[$i]['total'];
		$total_v += $total_das_vendas;
	}
}

if($tipo_desconto == '%'){
	if($desconto > 0 and $total_v > 0){
		$total_final = -($total_v * $desconto / 100);
	}else{
		$total_final = 0;
	}
	
}else{
	$total_final = -$desconto;
}


$query = $pdo->query("SELECT * from $tabela where funcionario = '$id_usuario' and id_venda = '0' and empresa = '$id_empresa' order by id asc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
echo '<div style="overflow:auto; max-height:200px; width:100%; scrollbar-width: thin;">';
if($linhas > 0){
	for($i=0; $i<$linhas; $i++){
	$id = $res[$i]['id'];
	$produto = $res[$i]['produto'];
	$valor = $res[$i]['valor'];
	$quantidade = $res[$i]['quantidade'];
	$total = $res[$i]['total'];

	$total_final += $total;
	$total_finalF = number_format($total_final, 2, ',', '.');
	$valorF = number_format($valor, 2, ',', '.');
	$totalF = number_format($total, 2, ',', '.');
	
	if($troco > 0){
		$total_troco = $troco - $total_final;
		$total_trocoF = number_format($total_troco, 2, ',', '.');
	}
	

	$query2 = $pdo->query("SELECT * from produtos where id = '$produto'");
	$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
	$nome_produto = $res2[0]['nome'];
	$foto_produto = $res2[0]['foto'];

	$nome_produtoF = mb_strimwidth($nome_produto, 0, 24, "..."); 

	echo '<div class="row">';
	echo '<div class="col-md-3" style="margin-right:3px">';
	echo '<img src="images/produtos/'.$foto_produto.'" width="45px">';
	echo '</div>';
	echo '<div class="col-md-9" style="margin-left:-15px; margin-top:3px">';
	echo '<span class="text-dark" style="font-size:13px; margin-left: -15px">';
	echo '<span class="">'.$quantidade.'</span> '.$nome_produtoF.' ';
	echo '</span><br>';
	echo '<div class="text-dark" style="font-size:12px; margin-top:0px; margin-left:0px">
	<a class="" href="#" onclick="diminuir('.$id.', '.$quantidade.')"><big><i class="fa fa-minus-circle text-danger" ></i></big></a>
	<input type="text" value="'.$quantidade.'" style="background:transparent; border:none; outline:none; width:22px; text-align:center" id="input_quant_'.$id.'" onblur="alterarQuantidade('.$id.', '.$quantidade.')">
	<a class="" href="#" onclick="aumentar('.$id.', '.$quantidade.')"><big><i class="fa fa-plus-circle text-success" ></i></big></a>
	Total Item: R$ '.$totalF.' ';


	echo '<div class="dropdown head-dpdn2" style="position:absolute; top:0px; right:10px">
		<a title="Remover Item" href="#" onclick="excluirAlert('.$id.')"><big><i class="fa fa-times" style="color:#7d1107"></i></big></a></div>';


	echo '</div>';
	echo '</div>';
	echo '</div>';
	
	}
}
echo '</div>';

$total_finalF = number_format($total_final, 2, ',', '.');
echo '<div align="right" style="margin-top:10px; font-size:14px; border-top:1px solid #8f8f8f;" >';
echo '<br>';
echo '<span style="margin-right:40px;">Itens: <b>('.$linhas.')</b></span>';
echo '<span>Subtotal: </span>';
echo '<span style="font-weight:bold"> R$ ';
echo $total_finalF;
echo '</span>';
if($troco > 0){
echo '<br><span>Troco: </span>';
echo '<span style="font-weight:bold"> R$ ';
echo $total_trocoF;
echo '</span>';
}
echo '</div>';


?>

<script type="text/javascript">
	var itens = "<?=$linhas?>";
	$('#valor_pago').val('<?=$total_final?>')
	$('#subtotal_venda').val('<?=$total_final?>')
	if(itens > 0){
		$("#btn_limpar").show();
		$("#btn_venda").show();
	}else{
		$("#btn_limpar").hide();
		$("#btn_venda").hide();
	}
	

// ALERT EXCLUIR #######################################
function excluirAlert(id) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success", // Adiciona margem à direita do botão "Sim, Excluir!"
            cancelButton: "btn btn-danger me-1",
            container: 'swal-whatsapp-container'
        },
        buttonsStyling: false
    });

    swalWithBootstrapButtons.fire({
        title: "Deseja Excluir?",
        text: "Você não conseguirá recuperá-lo novamente!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Sim, Excluir!",
        cancelButtonText: "Não, Cancelar!",
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            // Realiza a requisição AJAX para excluir o item
            $.ajax({
                url: 'paginas/' + pag + "/excluir-item.php",
                method: 'POST',
                data: { id },
                dataType: "html",
                success: function (mensagem) {
                    if (mensagem.trim() == "Excluído com Sucesso") {
                        // Exibe mensagem de sucesso após a exclusão
                        swalWithBootstrapButtons.fire({
                            title: mensagem,
                            text: 'Fecharei em 1 segundo.',
                            icon: "success",
                            timer: 1000,
                            timerProgressBar: true,
                            confirmButtonText: 'OK',
                            customClass: {
                             container: 'swal-whatsapp-container'
                             }
                        });                        
                        limparCampos();
                        listarVendas();
                        buscar();
                    } else {
                        // Exibe mensagem de erro se a requisição falhar
                        swalWithBootstrapButtons.fire({
                            title: "Opss!",
                            text: mensagem,
                            icon: "error",
                            confirmButtonText: 'OK',
                            customClass: {
                             container: 'swal-whatsapp-container'
                             }
                        });
                    }
                }
            });
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire({
                title: "Cancelado",
                text: "Fecharei em 1 segundo.",
                icon: "error",
                timer: 1000,
                timerProgressBar: true,
            });
        }
    });
}


	function diminuir(id, quantidade){
		 $.ajax({
        url: 'paginas/' + pag + "/diminuir.php",
        method: 'POST',
        data: {id, quantidade},
        dataType: "html",

        success:function(mensagem){

            if (mensagem.trim() == "Excluído com Sucesso") {           	
                listarVendas();
            } else {
                $('#mensagem-excluir').addClass('text-danger')
                $('#mensagem-excluir').text(mensagem)
            }
        }
    });
	}


	function aumentar(id, quantidade){
		 $.ajax({
        url: 'paginas/' + pag + "/aumentar.php",
        method: 'POST',
        data: {id, quantidade},
        dataType: "html",

        success:function(mensagem){
        	
            if (mensagem.trim() == "Excluído com Sucesso") {           	
                listarVendas();
            } else {
            	alert(mensagem)
                $('#mensagem-excluir').addClass('text-danger')
                $('#mensagem-excluir').text(mensagem)
            }
        }
    });
	}



	
		function alterarQuantidade(id, quant_enviada){
			var quantidade =  $('#input_quant_'+id).val();			
		 $.ajax({
        url: 'paginas/' + pag + "/alterar_quantidade.php",
        method: 'POST',
        data: {id, quantidade},
        dataType: "html",

        success:function(mensagem){
        	
            if (mensagem.trim() == "Excluído com Sucesso") {           	
                listarVendas();
            } else {
            	alert(mensagem);
            	$('#input_quant_'+id).val(quant_enviada);	
                $('#mensagem-excluir').addClass('text-danger')
                $('#mensagem-excluir').text(mensagem)
            }
        }
    });
	}

	
</script>