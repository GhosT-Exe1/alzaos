<?php 
require_once("../../conexao.php");
require_once ("../verificar.php");

$id = @$_POST['id'];
$enviar = @$_POST['enviar'];


include('../buscar_config.php');
$token_rel = "M543661";
ob_start();
include("compraVenda.php");
$html = ob_get_clean();

//CARREGAR DOMPDF
require_once '../../dompdf/autoload.inc.php';
use Dompdf\Dompdf;
use Dompdf\Options;

header("Content-Transfer-Encoding: binary");
header("Content-Type: image/png");

//INICIALIZAR A CLASSE DO DOMPDF
$options = new Options();
$options->set('isRemoteEnabled', TRUE);
$pdf = new DOMPDF($options);


//Definir o tamanho do papel e orientação da página
$pdf->set_paper('A4', 'portrait');

//CARREGAR O CONTEÚDO HTML
$pdf->load_html($html);

//RENDERIZAR O PDF
$pdf->render();
//NOMEAR O PDF GERADO


$output = $pdf->output();
$arquivo = "../pdf/os/os_".$id.".pdf";
	
if(file_put_contents($arquivo,$output) <> false) {
	$pdf->stream(
	'os.pdf',
	array("Attachment" => false)
);

}


$query = $pdo->query("SELECT * from compra_venda where id = '$id' ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$cliente = $res[0]['cliente'];



 ?>