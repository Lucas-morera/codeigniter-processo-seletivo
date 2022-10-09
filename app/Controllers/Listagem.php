<?php 
namespace App\Controllers;


class Listagem extends BaseController{
    public function listar(){
        $listagemModel= new \App\Models\listagemModel();
        $data['msg'] = "Listagem";
        $data['listagemDB']=$listagemModel->find();
            
        echo view('listagem',$data);
    }
    public function index(){
        $listagemModel= new \App\Models\listagemModel();
        $data['msg']="cartao";
        $data['listagemDB']=$listagemModel->find();
        
        echo view('cartao',$data);
    }
    public function editar($id){
        $listagemModel= new \App\Models\listagemModel();
        $data['acao']='';
        $data['val']='Editar';
        $list = $listagemModel->find($id);

        if($this->request->getMethod() === 'post'){
            $list->id = $this->request->getPost('id');
            $list->nome = $this->request->getPost('nome');
            $list->email = $this->request->getPost('email');
            $list->datanascimento = $this->request->getPost('nascimento');
            $list->idade = $this->request->getPost('idade');
            $list->signo = $this->request->getPost('signo');
            $list->rua = $this->request->getPost('rua');
            $list->cep = $this->request->getPost('cep');
            $list->estado = $this->request->getPost('estado');
            if($listagemModel->update($id, $list)){
                $data['acao']="Categoria Editada com sucesso !";
            }else{
                $data['acao']="Erro ao realizar update !";
            }
        }
        $data['list']= $list;
        echo view("editar",$data);
    }

    public function excluir($id){
        $listagemModel= new \App\Models\listagemModel();
        $listagemModel->delete($id);
        return redirect()->back()->with('status',"Dados Removidos com sucesso !");

    }

}
?>