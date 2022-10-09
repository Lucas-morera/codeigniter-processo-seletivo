<?php 
namespace App\Controllers;


class Cadastro extends BaseController{
  
    public function inserir(){
        
        $data['titulo']="Cadastre-se";
        $data["acao"]='Inserir';
        $data['msg']='';
        
        if($this->request->getMethod() === 'post'){
            $cadastroModel = new \App\Models\CadastroModel();
            $cadastroModel->set('nome',$this->request->getPost('nome'));
            $cadastroModel->set('email',$this->request->getPost('email'));
            $cadastroModel->set('cep',$this->request->getPost('cep'));
            $cadastroModel->set('datanascimento',$this->request->getPost('data'));
            $cadastroModel->set('rua',$this->request->getPost('rua'));
            $cadastroModel->set('cidade',$this->request->getPost('cidade'));
            $cadastroModel->set('bairro',$this->request->getPost('bairro'));
            $cadastroModel->set('estado',$this->request->getPost('estado'));

           
            
            if($cadastroModel->insert()){
                $data['msg']= '<script>alert ("Dados Cadastrados com sucesso !")</script>';
                

            }else{
                // error
                $data['msg']= '<script>alert ("O E-mail já foi cadastrado !\n Selecione outro.")</script>';
            }
        }
        
        echo view('cadastro',$data);
    }
}