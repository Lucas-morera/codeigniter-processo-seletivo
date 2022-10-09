<?php 
$id = $_GET['id'];
?>
<head>
<title>Cartao de visita</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url("/css/geral.css");?>">  
</head>
<body>
    <a href="<?php echo base_url("/listagem/listar")?>">Listagem</a>
    <p><?= $acao ?></p>
    <div class="centerDiv">
        <form action="" method="POST">
            <label for="" class="">ID:</label><br>
            <input type="text" name="id" class="mb-2" value="<?= $list->id?>" readonly><br>
            <label for="" class="">Nome:</label><br>
            <input type="text" class="mb-2" name="nome" value="<?= $list->nome?>"><br>
            <label for="">email:</label><br>
            <input type="text" class="mb-2" name="email" value="<?= $list->email?>"><br>
            <label for="">nascimento:</label><br>
            <input type="text" class="mb-2" name="nascimento" value="<?= $list->datanascimento?>"><br>
            <label for="">idade:</label><br>
            <input type="text" class="mb-2" name="idade" value="<?= $list->idade?>"><br>
            <label for="">signo:</label><br>
            <input type="text" class="mb-2" name="signo" value="<?= $list->signo?>"><br>
            <label for="">rua:</label><br>
            <input type="text" class="mb-2" name="rua" value="<?= $list->rua?>"><br>
            <label for="">cep:</label><br>
            <input type="text" class="mb-2" name="cep" value="<?= $list->cep?>"><br>
            <label for="">Estado:</label><br>
            <input type="text" class="mb-2" name="estado" value="<?= $list->estado?>"><br><br>
            <button type="submit" class="button" value="<?php echo $val?>>">Editar</button>
        </form>
        </div>

</body>
<script src="<?php echo base_url("/js/jquery-3.6.0.min.js");?>"></script>    
<script src="<?php echo base_url("/js/jquery.mask.js");?>"></script>
<script src="<?php echo base_url("/js/geral.js");?>"></script>

