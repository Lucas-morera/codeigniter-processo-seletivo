<head>
<title>Cadastro</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url("/css/geral.css");?>"> 
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
</head>
<body>
    <strong><?php echo $msg ?></strong>
    <table>
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>email</td>
            <td>nascimento</td>
            <td>idade</td>
            <td>signo</td>
            <td>rua</td>
            <td>cep</td>
            <td>estado</td>
            <td>Editar</td>
            <td>Excluir</td>
        </tr>
        <?php foreach($listagemDB as $listagem) :?>
        <tr>
            <td><?php echo $listagem->id?></td>
            <td><a href="<?php echo base_url("listagem/")?>?id=<?= $listagem->id?>"><?php echo $listagem->nome?></a></td>
            <td id="email"><span class="email"><?php echo $listagem->email?></span></td>
            <td><?php echo $listagem->datanascimento?></td>
            <td><?php echo $listagem->idade?></td>
            <td><?php echo $listagem->signo?></td>
            <td><?php echo $listagem->rua?></td>
            <td><?php echo $listagem->cep?></td>
            <td><?php echo $listagem->estado?></td>
            <td><a href="<?php echo base_url("listagem/editar/".$listagem->id)?>"><i class="material-icons">assignment</i></a></td>
            <td><a href="<?php echo base_url('listagem/excluir/'.$listagem->id)?>"><i class="material-icons">backspace</i></a></td>
        </tr>
        <?php endforeach?>    
    </table>
    <a href="<?php echo base_url("/cadastro/inserir")?>">Cadastro</a>
</body>
<script src="<?php echo base_url("/js/jquery-3.6.0.min.js");?>"></script>    
<script src="<?php echo base_url("/js/jquery.mask.js");?>"></script>
<script src="<?php echo base_url("/js/geral.js");?>"></script>

