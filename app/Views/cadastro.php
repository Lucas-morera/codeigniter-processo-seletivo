<head>
<title>Cadastro</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url("/css/geral.css");?>">  
</head>
<body>
    <h2><?php echo $titulo?></h2>
    <strong><?php echo $msg ?></strong>

    <form method="post" id="form">
        <div class="centerDiv">
            <label for="" class="">Nome:</label><br>
            <input type="text" name="nome" placeholder="Nome" class="mb-2"><br>
            <label for="" >E-mail:</label><br>
            <input type="email" name="email" placeholder="E-mail" class="mb-2"><br>
            <label for="">CEP:</label><br>
            <input type="text" name="cep" placeholder="CEP" id="cep" class="mb-2" maxlength="9" onblur="requisicao()"><br>
            <label for="">Data de Nascimento:</label><br>
            <input type="text" name="data" placeholder="Dia / Mês /Ano" class="mb-2"><br>
            <label for="">Rua:</label><br>
            <input type="text" name="rua" id="rua" class="mb-2" readonly><br>
            <label for="">Cidade:</label><br>
            <input type="text" name="cidade" id="cidade" class="mb-2" readonly><br>
            <label for="">Bairro:</label><br>
            <input type="text" name="bairro" id="bairro" class="mb-2" readonly><br>
            <label for="">Estado:</label><br>
            <input type="text" name="estado" id="estado" class="mb-2" readonly><br>
            <button name="btnEnviar" class="button" type="submit" value="<?php echo $acao?>">Enviar</button>
       </div> 
       <a href="<?php echo base_url("/listagem/listar")?>">Listagem</a>
    </form>
</body>
<script src="<?php echo base_url("/js/jquery-3.6.0.min.js");?>"></script>    
<script src="<?php echo base_url("/js/jquery.mask.js");?>"></script>
<script src="<?php echo base_url("/js/geral.js");?>"></script>

