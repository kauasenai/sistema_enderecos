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
 if(!isset($endereco["erro"]) && isset($_GET['cep'])):?>
<div>
    <H2>CEP encontrado</H2>
    <ul>
        <?php 
        foreach($endereco as $data => $valor) {
            if(strlen($valor) > 0) {
                echo "$data: $valor <br>";
            }
          
        }
        ?>
    </ul>

    <form action="salvar.php" method="POST">
        <input 
        type="hidden" 
        name="cep" 
        value="<?php echo htmlspecialchars($_GET['cep'])?>">
        <button>Salvar</button>
    </form>

</div>
<?php elseif(isset($endereco['erro'])):?>
    <h2>CEP não encontrado</h2>
    <p>O cep ditado pelo usuario não existe</p>
<?php endif; ?>