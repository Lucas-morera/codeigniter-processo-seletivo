<head>
<title>Cartao de visita</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url("/css/geral.css");?>">  
</head>
<body>
    <strong><?php echo $msg ?></strong>
    <div class="card" id="card">
    <table class="" >
        <tr class="cartao"><br>
            <td class="cartao">ID</td>
            <td class="cartao">Nome</td>
            <td class="cartao">email</td>
            <td class="cartao">nascimento</td>
            <td class="cartao">idade</td>
            <td class="cartao">signo</td>
            <td class="cartao">rua</td>
            <td class="cartao">cep</td>
            <td class="cartao">estado</td>
        </tr>
        <tr class="cartao">
            <?php 
             $db = \Config\Database::connect();
             $id=$_GET['id'];
            $query   = $db->query("SELECT * FROM dados WHERE id = $id");
            $results = $query->getResult();
            
            foreach ($results as $row): ?>
            <td class="cartao"><?php echo $row->id;?></td>
            <td class="cartao"><?php echo $row->nome;?></td>
            <td class="cartao"><?php echo $row->email;?></td>
            <td class="cartao"><?php echo $row->datanascimento;?></td>
            <td class="cartao"><?php echo $row->idade;?></td>
            <td class="cartao" id="signo"><?php echo $row->signo;?></td>
            <td class="cartao"><?php echo $row->rua;?></td>
            <td class="cartao"><?php echo $row->cep;?></td>
            <td class="cartao"><?php echo $row->estado;?></td>
        </tr>   
            <?php endforeach?>
    </table>
        <br><br><br><br><br>
       <label style="margin-left:8rem;" for="">Escolha a cor do cartão:</label> 
       <input type="color" name="cor" id="cor">
    </div>

   
</body>
<script src="<?php echo base_url("/js/jquery-3.6.0.min.js");?>"></script>    
<script src="<?php echo base_url("/js/jquery.mask.js");?>"></script>
<script src="<?php echo base_url("/js/geral.js");?>"></script>

