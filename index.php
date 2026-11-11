<?php 
include "./api.php";

if(isset($_GET['cep'])){
    $cep = $_GET['cep'];
    $endereco = buscarCep($cep);
}

?>
<form method="GET">
    <input
       type="text"
       placeholder="Buscar Cep..."
       name="cep"
       >
       <button>Buscar</button>
</form>
<?php 
 if(!isset($endereco['erro']) && isset($_GET['cep'])):?>
<div>
    <H2>CEP encontrado</H2>
    <ul>
        <?php 
        foreach($endereco as $data => $valor) {
            if(strlen($valor) > 0){
            echo "$data: $valor <br>";
            }
        }
        ?>
    </ul>
</div>
<<?php endif; ?>