<?php
@session_start();
$mostrar_registros = @$_SESSION['registros'];
$id_empresa = @$_SESSION['empresa'];
$id_usuario = @$_SESSION['id'];
$tabela = 'pagar';
require_once("../../../conexao.php");
require_once("../../buscar_config.php");

if ($mostrar_registros == 'Não') {
	$sql_usuario_lanc = " and usuario_lanc = '$id_usuario and empresa = '$id_empresa' '";
} else {
	$sql_usuario_lanc = " and empresa = '$id_empresa' ";
}

$data_hoje = date('Y-m-d');
$data_atual = date('Y-m-d');
$mes_atual = Date('m');
$ano_atual = Date('Y');
$data_inicio_mes = $ano_atual . "-" . $mes_atual . "-01";
$data_inicio_ano = $ano_atual . "-01-01";


$data_ontem = date('Y-m-d', @strtotime("-1 days", @strtotime($data_atual)));
$data_amanha = date('Y-m-d', @strtotime("+1 days", @strtotime($data_atual)));


if ($mes_atual == '04' || $mes_atual == '06' || $mes_atual == '07' || $mes_atual == '09') {
	$data_final_mes = $ano_atual . '-' . $mes_atual . '-30';
} else if ($mes_atual == '02') {
	$bissexto = date('L', @mktime(0, 0, 0, 1, 1, $ano_atual));
	if ($bissexto == 1) {
		$data_final_mes = $ano_atual . '-' . $mes_atual . '-29';
	} else {
		$data_final_mes = $ano_atual . '-' . $mes_atual . '-28';
	}
} else {
	$data_final_mes = $ano_atual . '-' . $mes_atual . '-31';
}

$total_pago = 0;
$total_pendentes = 0;

$total_pagoF = 0;
$total_pendentesF = 0;

$dataInicial = @$_POST['p2'];
$dataFinal = @$_POST['p3'];
$filtro = @$_POST['p1'];
$tipo_data = @$_POST['p4'];



if ($tipo_data == "") {
	$tipo_data = 'vencimento';
}

if ($dataInicial == "") {
	$dataInicial = $data_inicio_mes;
}

if ($dataFinal == "") {
	$dataFinal = $data_final_mes;
}


$total_valor = 0;
$total_valorF = 0;
$total_total = 0;
$total_totalF = 0;
$total_vencidas = 0;
$total_vencidasF = 0;
$total_hoje = 0;
$total_hojeF = 0;
$total_amanha = 0;
$total_amanhaF = 0;
$total_recebidas = 0;
$total_recebidasF = 0;



//PEGAR O TOTAL DAS CONTAS A PAGAR PENDENTES
$query = $pdo->query("SELECT * from $tabela where pago = 'Não' and $tipo_data >= '$dataInicial' and $tipo_data <= '$dataFinal' $sql_usuario_lanc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if ($total_reg > 0) {
	for ($i = 0; $i < $total_reg; $i++) {
		foreach ($res[$i] as $key => $value) {
		}
		$total_valor += $res[$i]['valor'];
		$total_valorF = @number_format($total_valor, 2, ',', '.');
	}
}

//PEGAR O TOTAL DAS CONTAS A PAGAR
if ($mostrar_registros == 'Não') {

	$query = $pdo->query("SELECT * from $tabela where usuario_lanc = '$id_usuario' and $tipo_data >= '$dataInicial' and $tipo_data <= '$dataFinal' and empresa = '$id_empresa'");
} else {
	$query = $pdo->query("SELECT * from $tabela where $tipo_data >= '$dataInicial' and $tipo_data <= '$dataFinal' and empresa = '$id_empresa'");
}
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if ($total_reg > 0) {
	for ($i = 0; $i < $total_reg; $i++) {
		foreach ($res[$i] as $key => $value) {
		}
		$total_total += $res[$i]['valor'];
		$total_totalF = @number_format($total_total, 2, ',', '.');
	}
}


//PEGAR O TOTAL DAS CONTAS A PAGAR PEDENTES
$query = $pdo->query("SELECT * from $tabela where $tipo_data >= '$dataInicial' and $tipo_data < curDate() and pago = 'Não' $sql_usuario_lanc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if ($total_reg > 0) {
	for ($i = 0; $i < $total_reg; $i++) {
		foreach ($res[$i] as $key => $value) {
		}
		$total_vencidas += $res[$i]['valor'];
		$total_vencidasF = @number_format($total_vencidas, 2, ',', '.');
	}
}

//PEGAR O TOTAL DAS CONTAS A PAGAR QUE VENCE HOJE
$query = $pdo->query("SELECT * from $tabela where vencimento = curDate() and pago = 'Não' $sql_usuario_lanc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_am = @count($res);
if ($total_am > 0) {
	for ($i = 0; $i < $total_am; $i++) {
		foreach ($res[$i] as $key => $value) {
		}
		$total_hoje += $res[$i]['valor'];
		$total_hojeF = @number_format($total_hoje, 2, ',', '.');
	}
}


//PEGAR O TOTAL DAS CONTAS A PAGAR RECEBIDAS
$query = $pdo->query("SELECT * from $tabela where pago = 'Sim' and $tipo_data >= '$dataInicial' and $tipo_data <= '$dataFinal' $sql_usuario_lanc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_pg = @count($res);
if ($total_pg > 0) {
	for ($i = 0; $i < $total_pg; $i++) {
		foreach ($res[$i] as $key => $value) {
		}
		$total_recebidas += $res[$i]['valor'];
		$total_recebidasF = @number_format($total_recebidas, 2, ',', '.');
	}
}


$data_hoje = date('Y-m-d');
$data_amanha = date('Y/m/d', @strtotime("+1 days", @strtotime($data_hoje)));


//PEGAR O TOTAL DAS CONTAS A PAGAR QUE VENCE AMANHÃ
$query = $pdo->query("SELECT * from $tabela where vencimento = '$data_amanha' and pago = 'Não' $sql_usuario_lanc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_am = @count($res);
if ($total_am > 0) {
	for ($i = 0; $i < $total_am; $i++) {
		foreach ($res[$i] as $key => $value) {
		}
		$total_amanha += $res[$i]['valor'];
		$total_amanhaF = @number_format($total_amanha, 2, ',', '.');
	}
}


if ($filtro == 'Vencidas') {
	$query = $pdo->query("SELECT * from $tabela where $tipo_data >= '$dataInicial' and $tipo_data < curDate() and pago = 'Não' $sql_usuario_lanc order by id desc ");
} else if ($filtro == 'Recebidas') {
	$query = $pdo->query("SELECT * from $tabela where pago = 'Sim' and $tipo_data >= '$dataInicial' and $tipo_data <= '$dataFinal' $sql_usuario_lanc order by id desc ");
} else if ($filtro == 'Hoje') {
	$query = $pdo->query("SELECT * from $tabela where $tipo_data = curDate() and pago = 'Não' $sql_usuario_lanc order by id desc ");
} else if ($filtro == 'Amanha') {
	$query = $pdo->query("SELECT * from $tabela where $tipo_data = '$data_amanha' and pago = 'Não' $sql_usuario_lanc order by id desc ");
} else if ($filtro == 'Todas') {
	if ($mostrar_registros == 'Não') {
		$query = $pdo->query("SELECT * from $tabela where  usuario_lanc = '$id_usuario' and $tipo_data >= '$dataInicial' and $tipo_data <= '$dataFinal' and empresa = '$id_empresa' order by id desc ");
	} else {
		$query = $pdo->query("SELECT * from $tabela where empresa = '$id_empresa' and $tipo_data >= '$dataInicial' and $tipo_data <= '$dataFinal' order by id desc ");
	}
} else {
	$query = $pdo->query("SELECT * from $tabela WHERE $tipo_data >= '$dataInicial' and $tipo_data <= '$dataFinal' $sql_usuario_lanc order by id desc ");
}





$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if ($linhas > 0) {
	echo <<<HTML
<small>
	<table class="table table-bordered text-nowrap border-bottom dt-responsive" id="tabela">
	<thead>
	<tr>
	<th align="center" width="5%" class="text-center">Selecionar</th>
	<th>Descrição</th>
	<th>Valor</th>
	<th>Pessoa</th>
	<th>Vencimento</th>
	<th>Pagamento</th>
	<th class="text-center">Arquivo</th>
	<th>Ações</th>
	</tr>
	</thead>
	<tbody>
	<small>
HTML;


	for ($i = 0; $i < $linhas; $i++) {
		$id = $res[$i]['id'];
		$descricao = $res[$i]['descricao'];
		$fornecedor = $res[$i]['fornecedor'];
		$funcionario = $res[$i]['funcionario'];
		$valor = $res[$i]['valor'];
		$vencimento = $res[$i]['vencimento'];
		$data_pgto = $res[$i]['data_pgto'];
		$data_lanc = $res[$i]['data_lanc'];
		$forma_pgto = $res[$i]['forma_pgto'];
		$frequencia = $res[$i]['frequencia'];
		$obs = $res[$i]['obs'];
		$arquivo = $res[$i]['arquivo'];
		$referencia = $res[$i]['referencia'];
		$id_ref = $res[$i]['id_ref'];
		$multa = $res[$i]['multa'];
		$juros = $res[$i]['juros'];
		$desconto = $res[$i]['desconto'];
		$taxa = $res[$i]['taxa'];
		$subtotal = $res[$i]['subtotal'];
		$usuario_lanc = $res[$i]['usuario_lanc'];
		$usuario_pgto = $res[$i]['usuario_pgto'];
		$pago = $res[$i]['pago'];
		$quant_recorrencia = $res[$i]['quant_recorrencia'];
		$recorrencia_inf = $res[$i]['recorrencia_inf'];
		$id_recorrencia = $res[$i]['id_recorrencia'];



		$vencimentoF = implode('/', array_reverse(@explode('-', $vencimento)));
		$data_pgtoF = implode('/', array_reverse(@explode('-', $data_pgto)));
		$data_lancF = implode('/', array_reverse(@explode('-', $data_lanc)));


		//FORMATAR VALORES
		$valorF = @number_format($valor, 2, ',', '.');
		$multaF = @number_format($multa, 2, ',', '.');
		$jurosF = @number_format($juros, 2, ',', '.');
		$descontoF = @number_format($desconto, 2, ',', '.');
		$taxaF = @number_format($taxa, 2, ',', '.');
		$subtotalF = @number_format($subtotal, 2, ',', '.');


		if ($pago == "Sim") {
			$valor_finalF = @number_format($subtotal, 2, ',', '.');
		} else {
			$valor_finalF = @number_format($valor, 2, ',', '.');
		}



		//extensão do arquivo
		$ext = pathinfo($arquivo, PATHINFO_EXTENSION);
		if ($ext == 'pdf' || $ext == 'PDF') {
			$tumb_arquivo = 'pdf.png';
		} else if ($ext == 'rar' || $ext == 'zip' || $ext == 'RAR' || $ext == 'ZIP') {
			$tumb_arquivo = 'rar.png';
		} else if ($ext == 'doc' || $ext == 'docx' || $ext == 'DOC' || $ext == 'DOCX') {
			$tumb_arquivo = 'word.png';
		} else if ($ext == 'xlsx' || $ext == 'xlsm' || $ext == 'xls') {
			$tumb_arquivo = 'excel.png';
		} else if ($ext == 'xml') {
			$tumb_arquivo = 'xml.png';
		} else {
			$tumb_arquivo = $arquivo;
		}



		$query2 = $pdo->query("SELECT * FROM usuarios where id = '$usuario_lanc'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		if (@count($res2) > 0) {
			$nome_usu_lanc = $res2[0]['nome'];
		} else {
			$nome_usu_lanc = 'Sem Usuário';
		}


		$query2 = $pdo->query("SELECT * FROM usuarios where id = '$usuario_pgto'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		if (@count($res2) > 0) {
			$nome_usu_pgto = $res2[0]['nome'];
		} else {
			$nome_usu_pgto = 'Sem Usuário';
		}


		$query2 = $pdo->query("SELECT * FROM frequencias where dias = '$frequencia'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		if (@count($res2) > 0) {
			$nome_frequencia = $res2[0]['frequencia'];
		} else {
			$nome_frequencia = 'Sem Registro';
		}

		$query2 = $pdo->query("SELECT * FROM formas_pgto where id = '$forma_pgto'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		if (@count($res2) > 0) {
			$nome_pgto = $res2[0]['nome'];
			$taxa_pgto = $res2[0]['taxa'];
		} else {
			$nome_pgto = 'Sem Registro';
			$taxa_pgto = 0;
		}


		if ($pago == 'Sim') {
			$classe_pago = 'verde';
			$classe_pago2 = '#ddffe1';
			$ocultar = 'ocultar';
			$ocultar_pendentes = '';
			$total_pago += $subtotal;
		} else if ($pago == 'Não' and @strtotime($vencimento) > @strtotime($data_atual)) {
			$classe_pago2 = '';
			$classe_pago = 'text-danger';
			$ocultar = '';
			$total_pago += $valor;
			$ocultar_pendentes = 'ocultar';
		} else if ($pago == 'Não' and @strtotime($vencimento) == @strtotime($data_hoje)) {
			$classe_pago2 = '#fff8dd';
			$classe_pago = 'text-danger';
			$ocultar = '';
			$total_pago += $valor;
			$ocultar_pendentes = 'ocultar';
		} else {
			$classe_pago = 'text-danger';
			$classe_pago2 = '#ffdddd';
			$ocultar = '';
			
			$ocultar_pendentes = 'ocultar';
		}


		if($pago != 'Sim'){
			$total_pendentes += $valor;
		}
		

		$total_pendentesF = @number_format($total_pendentes, 2, ',', '.');
		$total_pagoF = @number_format($total_pago, 2, ',', '.');

		$taxa_conta = $taxa_pgto * $valor / 100;




		//PEGAR RESIDUOS DA CONTA
		$total_resid = 0;
		$valor_com_residuos = 0;
		$query2 = $pdo->query("SELECT * FROM $tabela WHERE id_ref = '$id' and residuo = 'Sim'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		if (@count($res2) > 0) {

			$descricao = '(Resíduo) - ' . $descricao;

			for ($i2 = 0; $i2 < @count($res2); $i2++) {
				foreach ($res2[$i2] as $key => $value) {
				}
				$id_res = $res2[$i2]['id'];
				$valor_resid = $res2[$i2]['valor'];
				$total_resid += $valor_resid - $res2[$i2]['desconto'];
			}


			$valor_com_residuos = $valor + $total_resid;
		}
		if ($valor_com_residuos > 0) {
			$vlr_antigo_conta = '(' . $valor_com_residuos . ')';
			$descricao_link = '';
			$descricao_texto = 'd-none';
		} else {
			$vlr_antigo_conta = '';
			$descricao_link = 'd-none';
			$descricao_texto = '';
		}



		$nome_pessoa = '';
		$telefone_pessoa = '';
		$pix_pessoa = '';
		$tipo_pessoa = 'Pessoa';
		if ($fornecedor != 0 || $funcionario != 0) {
			if ($fornecedor != 0) {
				$tab = 'fornecedores';
				$id_pessoa = $fornecedor;
				$tipo_pessoa = 'Fornecedor';
			}

			if ($funcionario != 0) {
				$tab = 'usuarios';
				$id_pessoa = $funcionario;
				$tipo_pessoa = 'Funcionário';
			}
			

			//nome pessoa
			$query2 = $pdo->query("SELECT * FROM $tab where id = '$id_pessoa'");
			$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
			$total_reg2 = @count($res2);
			if ($total_reg2 > 0) {
				$nome_pessoa = $res2[0]['nome'];
				$telefone_pessoa = $res2[0]['telefone'];
				$pix_pessoa = $res2[0]['pix'];
			} else {
				$nome_pessoa = '';
				$telefone_pessoa = '';
				$pix_pessoa = '';
			}
		}

		if ($telefone_pessoa == '') {
			$ocultar_whats = 'ocultar';
		} else {
			$ocultar_whats = '';
		}


		$tel_pessoaF = '55' . preg_replace('/[ ()-]+/', '', $telefone_pessoa);


		$classe_rec = '';
		if ($quant_recorrencia > 0 or $recorrencia_inf == 'Sim') {
			$classe_rec = '<small><span style="color:blue">(Recorrência Múltipla)</span></small>';
		}

		$ocultar_rec = 'ocultar';
		if (($quant_recorrencia > 0 or $id_recorrencia > 0) and $id_recorrencia != '') {
			if ($pago != 'Sim') {
				$ocultar_rec = '';
			}
		}

		if ($valor_finalF < $subtotal) {
			$valor_finalF = $subtotal;
			$valor_finalFF = @number_format($valor_finalF, 2, ',', '.');
		}

		$taxa_contaF = @number_format($taxa_conta, 2, ',', '.');
		



		echo <<<HTML
<tr style="background: {$classe_pago2}">
<td align="center">
<div class="custom-checkbox custom-control {$ocultar}">
<input type="checkbox" class="custom-control-input" id="seletor-{$id}" onchange="selecionar('{$id}')">
<label for="seletor-{$id}" class="custom-control-label mt-1 text-dark"></label>
</div>
</td>
<td><i class="fa fa-square {$classe_pago} mr-1"></i> {$descricao} {$classe_rec}</td>
<td class="">R$ {$valor_finalF} <small><a href="#" onclick="mostrarResiduos('{$id}')" class="text-danger" title="Ver Resíduos">{$vlr_antigo_conta}</a></small></td>	
<td>{$nome_pessoa}</td>
<td>{$vencimentoF}</td>
<td>{$data_pgtoF}</td>
<td class="text-center"><a href="images/contas/{$arquivo}" target="_blank"><img  width="30px" height="30px" class="rounded-circle" src="images/contas/{$tumb_arquivo}" width="25px"></a></td>
<td>

<a class="btn btn-info-light btn-sm {$ocultar}" href="#" onclick="editar('{$id}','{$descricao}','{$valorF}','{$fornecedor}','{$funcionario}','{$vencimento}','{$data_pgto}','{$forma_pgto}','{$frequencia}','{$obs}','{$tumb_arquivo}','{$quant_recorrencia}','{$recorrencia_inf}')" title="Editar Dados"><i class="fa fa-edit"></i></a>

<a class="btn btn-warning-light btn-sm" href="#" onclick="mostrar('{$descricao}','{$valorF}','{$nome_pessoa}','{$vencimentoF}','{$data_pgtoF}','{$nome_pgto}','{$nome_frequencia}','{$obs}','{$tumb_arquivo}','{$multaF}','{$jurosF}','{$descontoF}','{$taxaF}','{$subtotalF}','{$nome_usu_lanc}','{$nome_usu_pgto}', '{$pago}', '{$arquivo}','{$telefone_pessoa}','{$pix_pessoa}','{$tipo_pessoa}','{$quant_recorrencia}','{$recorrencia_inf}')" title="Mostrar Dados"><i class="fa-regular fa-eye"></i></a>

<a class="btn btn-danger-light btn-sm {$ocultar}" href="#" onclick="excluirConta('{$id}')" title="Excluir"><i class="fa fa-trash-can"></i></a>

<a class="btn btn-success-light btn-sm {$ocultar}" href="#" onclick="baixar('{$id}', '{$valorF}', '{$descricao}', '{$forma_pgto}', '{$taxa}', '{$juros}', '{$multa}')" title="Baixar Conta"><i class="fa fa-check-square "></i></a>

<a class="btn btn-dark-light btn-sm {$ocultar}" href="#" onclick="parcelar('{$id}', '{$valorF}', '{$descricao}')" title="Parcelar Conta"><i class="fa fa-calendar-o "></i></a>

<a class="btn btn-dark-light btn-sm" href="#" onclick="arquivo('{$id}', '{$descricao}')" title="Inserir / Ver Arquivos"><i class="fa fa-file-o "></i></a>

<span class="btn btn-dark-light btn-sm {$ocultar_pendentes}">
	<form method="POST" action="rel/imp_recibo_pagar.php" target="_blank" style="display:inline-block">
	<input  type="hidden" name="id" value="{$id}">
	<button class="{$ocultar_pendentes}" title="Imprimir Recibo 80mmm" style="background:transparent; border:none; margin:0; padding:0"><i class="fa fa-print"></i></button>
	</form>
</span>

<a class="btn btn-danger-light btn-sm {$ocultar_rec}" href="#" onclick="cancelarRec('{$id}')" title="Cancelar Recorrência"><i class="fa fa-ban"></i></a>

<a class="{$ocultar_whats} btn btn-success-light btn-sm" href="http://api.whatsapp.com/send?1=pt_BR&phone={$tel_pessoaF}" title="Whatsapp" target="_blank"><i class="bi bi-whatsapp"></i></a>


</td>
</tr>
HTML;
	}

echo <<<HTML
</small>
</tbody>
<small><div align="center" id="mensagem-excluir"></div></small>

</table>
</small>
<br>
HTML;
} else {
	echo '<small>Nenhum Registro Encontrado!</small>';
}
?>


<script type="text/javascript">
	$(document).ready(function () {

		var tableId = '#tabela';

		// Verifica se a tabela já foi inicializada
		if (!$.fn.dataTable.isDataTable(tableId)) {
			$(tableId).DataTable({
				"language": {
					//"url" : '//cdn.datatables.net/plug-ins/1.13.2/i18n/pt-BR.json'
				},
				"ordering": false,
				"stateSave": true
			});
		}

		$('#total_itens').text('R$ <?= $total_valorF ?>');
		$('#total_total').text('R$ <?= $total_totalF ?>');
		$('#total_vencidas').text('R$ <?= $total_vencidasF ?>');
		$('#total_hoje').text('R$ <?= $total_hojeF ?>');
		$('#total_amanha').text('R$ <?= $total_amanhaF ?>');
		$('#total_recebidas').text('R$ <?= $total_recebidasF ?>');
		$('#total_pendentes').text('R$ <?= $total_pendentesF ?>');
	});
</script>


<script type="text/javascript">
	function editar(id, descricao, valor, fornecedor, funcionario, vencimento, data_pgto, forma_pgto, frequencia, obs, arquivo, quant_recorrencia, recorrencia_inf) {
		$('#mensagem').text('');
		$('#titulo_inserir').text('Editar Registro');

		$('#id').val(id);
		$('#descricao').val(descricao);
		$('#valor').val(valor);
		mascaraMoeda(document.getElementById('valor'));	
		$('#fornecedor').val(fornecedor).change();
		$('#funcionario').val(funcionario).change();
		$('#vencimento').val(vencimento);
		$('#data_pgto').val(data_pgto);
		$('#forma_pgto').val(forma_pgto).change();
		$('#frequencia').val(frequencia).change();
		$('#obs').val(obs);
		$('#quant_recorrencia').val(quant_recorrencia);
		$('#recorrencia_inf').val(recorrencia_inf).change();

		$('#arquivo').val('');
		$('#target').attr('src', 'images/contas/' + arquivo);

		$('#modalForm').modal('show');
	}


	function mostrar(descricao, valor, pessoa, vencimento, data_pgto, nome_pgto, frequencia, obs, arquivo, multa, juros, desconto, taxa, total, usu_lanc, usu_pgto, pago, arq, telefone, pix, tipo_pessoa, quant_recorrencia, recorrencia_inf) {

		if (data_pgto == "") {
			data_pgto = 'Pendente';
		}
		if (pessoa == "") {
			pessoa = "Sem Registro";
			$('#dados_pessoa').hide();
		} else {
			$('#dados_pessoa').show();
		}
		if (telefone == "") {
			telefone = "Sem Registro";
		}
		if (pix == "") {
			pix = "Sem Registro";
		}

		$('#titulo_dados').text(descricao);
		$('#valor_dados').text(valor);
		$('#cliente_dados').text(pessoa);
		$('#vencimento_dados').text(vencimento);
		$('#data_pgto_dados').text(data_pgto);
		$('#nome_pgto_dados').text(nome_pgto);
		$('#frequencia_dados').text(frequencia);
		$('#obs_dados').text(obs);
		$('#multa_dados').text(multa);
		$('#juros_dados').text(juros);
		$('#desconto_dados').text(desconto);
		$('#taxa_dados').text(taxa);
		$('#total_dados').text(total);
		$('#usu_lanc_dados').text(usu_lanc);
		$('#usu_pgto_dados').text(usu_pgto);
		$('#telefone_dados').text(telefone);
		$('#pix_dados').text(pix);
		$('#tipo_pessoa').text(tipo_pessoa);
		$('#quant_recorrencia_dados').text(quant_recorrencia);
		$('#recorrencia_inf_dados').text(recorrencia_inf);
		$('#pago_dados').text(pago);
		$('#target_dados').attr("src", "images/contas/" + arquivo);
		$('#target_link_dados').attr("href", "images/contas/" + arq);
		$('#modalDados').modal('show');
	}

	function limparCampos() {
		$('#id').val('');
		$('#descricao').val('');
		$('#valor').val('0,00');
		$('#vencimento').val("<?= $data_atual ?>");
		$('#data_pgto').val('');
		$('#obs').val('');
		$('#arquivo').val('');
		$('#fornecedor').val(0).change();
		$('#funcionario').val(0).change();
		$('#frequencia').val(0).change();
		$('#arquivo').val('');
		$('#recorrencia_inf').val('Não');
		$('#quant_recorrencia').val('');
		$('#target').attr("src", "images/contas/sem-foto.png");
		$('#ids').val('');
		$('#btn-deletar').hide();
		$('#btn-baixar').hide();
	}


	function permissoes(id, nome) {
		$('#id_permissoes').val(id);
		$('#nome_permissoes').text(nome);
		$('#modalPermissoes').modal('show');
		listarPermissoes(id);
	}

	function parcelar(id, valor, nome) {
		$('#id-parcelar').val(id);
		$('#valor-parcelar').val(valor);
		$('#qtd-parcelar').val('');
		$('#nome-parcelar').text(nome);
		$('#nome-input-parcelar').val(nome);
		$('#modalParcelar').modal('show');
		$('#mensagem-parcelar').text('');
	}

	function baixar(id, valor, descricao, pgto, taxa, multa, juros) {
		if(multa == '' || multa == '0'){
			multa = '0,00';
		}
		if(juros == '' || juros == '0'){
			juros = '0,00';
		}
		$('#id-baixar').val(id);
		$('#descricao-baixar').text(descricao);
		$('#valor-baixar').val(valor);
		$('#saida-baixar').val(pgto).change();
		$('#subtotal').val(valor);
		$('#valor-juros').val(juros);
		$('#valor-desconto').val('0,00');
		$('#valor-multa').val(multa);
		$('#valor-taxa').val(taxa);
		$('#modalBaixar').modal('show');
		$('#mensagem-baixar').text('');
	}

	function mostrarResiduos(id) {
		$.ajax({
			url: 'paginas/' + pag + "/listar-residuos.php",
			method: 'POST',
			data: {
				id
			},
			dataType: "html",
			success: function (result) {
				$("#listar-residuos").html(result);
			}
		});
		$('#modalResiduos').modal('show');
	}

	function arquivo(id, nome) {
		$('#id-arquivo').val(id);
		$('#nome-arquivo').text(nome);
		$('#modalArquivos').modal('show');
		$('#mensagem-arquivo').text('');
		$('#arquivo_conta').val('');
		listarArquivos();
	}
</script>


<script type="text/javascript">
	function excluirConta(id) {
		const swalWithBootstrapButtons = Swal.mixin({
			customClass: {
				confirmButton: "btn btn-success", // Adiciona margem à direita do botão "Sim, Excluir!"
				cancelButton: "btn btn-danger me-1"
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
					url: 'paginas/' + pag + "/excluir.php",
					method: 'POST',
					data: { id },
					dataType: "html",
					success: function (mensagem) {
						buscar();
						limparCampos();
						// Exibe mensagem de sucesso após a exclusão
						swalWithBootstrapButtons.fire({
							title: mensagem,
							text: 'Fecharei em 2 segundo.',
							icon: "success",
							timer: 2000,
							timerProgressBar: true,
							confirmButtonText: 'OK',
						});
					},
					error: function () {
						// Exibe mensagem de erro se a requisição falhar
						swalWithBootstrapButtons.fire({
							title: "Erro!",
							text: mensagem,
							icon: "error",
							confirmButtonText: 'OK',
						});
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



	function cancelarRec(id) {

		$('body').removeClass('timer-alert');
		const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success",
            cancelButton: "btn btn-danger me-1"
        },
        buttonsStyling: false
    });

    swalWithBootstrapButtons.fire({
		title: "Deseja Cancelar as Recorrências?",
		text: "Você não conseguirá recuperá-lo novamente!",
		icon: "error",
        showCancelButton: true,
        confirmButtonText: "Sim, Baixar!",
        cancelButtonText: "Não, Cancelar!",
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
					url: 'paginas/' + pag + "/cancelar_recorrencia.php",
					method: 'POST',
					data: {
						id
					},
					dataType: "html",
					success: function (mensagem) {
						if (mensagem.trim() == "Cancelado com Sucesso") {
							alertsucesso(mensagem)
							buscar();
							limparCampos();
						} else {
							$('#mensagem-excluir').addClass('text-danger')
							$('#mensagem-excluir').text(mensagem)
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





	function selecionar(id) {
		var ids = $('#ids').val();
		if ($('#seletor-' + id).is(":checked") == true) {
			var novo_id = ids + id + '-';
			$('#ids').val(novo_id);
		} else {
			var retirar = ids.replace(id + '-', '');
			$('#ids').val(retirar);
		}
		var ids_final = $('#ids').val();
		if (ids_final == "") {
			$('#btn-deletar').hide();
			$('#btn-baixar').hide();
		} else {
			$('#btn-deletar').show();
			$('#btn-baixar').show();
		}
	}




	
	function deletarSel(id) {
		const swalWithBootstrapButtons = Swal.mixin({
			customClass: {
				confirmButton: "btn btn-success", // Adiciona margem à direita do botão "Sim, Excluir!"
				cancelButton: "btn btn-danger me-1"
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
				var ids = $('#ids').val();
				var id = ids.split("-");

				for (i = 0; i < id.length - 1; i++) {
					excluirMultiplos(id[i]);
				}

					alertexcluido('Excluido com Sucesso!')

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




	function deletarSelBaixar() {
    const ids = $('#ids').val(); // Recupera os IDs
    const idArray = ids.split("-").filter((id) => id); // Divide os IDs e remove entradas vazias
    const promises = []; // Array para armazenar as promessas de cada requisição

    idArray.forEach((novo_id) => {
        const promise = $.ajax({
            url: 'paginas/' + pag + "/baixar_multiplas.php",
            method: 'POST',
            data: { novo_id },
            dataType: "html",
        });

        promises.push(promise); // Adiciona a promessa ao array
    });

    // Aguarda todas as requisições serem concluídas
    Promise.all(promises)
        .then((results) => {
            // Verifica se todos os resultados foram bem-sucedidos
            const allSuccess = results.every((result) => result.trim() === "Baixado com Sucesso");

            if (allSuccess) {
                setTimeout(() => {
                    alertsucesso("Todos os itens foram baixados com sucesso!");
                    buscar();
                    limparCampos();
                }, 1000);
            } else {
                // Exibe erro para os itens que falharam
                const errors = results.filter((result) => result.trim() !== "Baixado com Sucesso");
                alertErro("Alguns itens não foram baixados: " + errors.join(", "));
            }
        })
        .catch(() => {
            // Trata falhas gerais nas requisições
            alertErro("Ocorreu um erro ao processar as requisições.");
        });
}



</script>