<?php 
namespace App\Models;
use CodeIgniter\Model;

class CadastroModel extends Model{
    
    protected $table = "usuarios";
    protected $primaryKey = "id";
    protected $allowedFields = ["nome", "email" ,"cep","datanascimento", "rua", "cidade", "bairro", "estado"];
    protected $returnType = "object";
    protected $validationRules = [
        'email'=>[
            'label'=> 'E-mail',
            'rules' => 'required|is_unique[usuarios.email]',
            'errors'=>[
                'is_unique' => 'Email já foi cadastrado, escolha outro !'
            ]
            ]
        ];
    
}