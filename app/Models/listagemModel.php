<?php 
namespace App\Models;
use CodeIgniter\Model;

class listagemModel extends Model{
    
    protected $table = "dados";
    protected $primaryKey = "id";
    protected $allowedFields = ["nome", "email" ,"datanascimento","idade", "signo", "rua", "cep","estado"];
    protected $returnType = "object";
    // protected $validationRules = [
    //     'email'=>[
    //         'label'=> 'E-mail',
    //         'rules' => 'required|is_unique[usuarios.email]',
    //         'errors'=>[
    //             'is_unique' => 'Email já foi cadastrado, escolha outro !'
    //         ]
    //         ]
    //     ];
    
}