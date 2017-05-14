<?php
App::uses('AppController', 'Controller');

class ItensController extends AppController {
  public $name = 'Itens';
  
  public function index() {
    $this->set('itens', $this->Iten->find('all'));
  }
  
  public function view($id = null) {
    $this->set('iten', $this->Iten->findById($id));
  }
  
  private function getPeople() {
    $this->loadModel('Pessoa');
    return $this->Pessoa->find('list', array('order' => 'nome', 'fields' => array('id', 'nome')));
  }
    
  public function add() {
    $this->set('pessoas', $this->getPeople());
      
    if ($this->request->is('post')) {
      if ($this->Iten->save($this->request->data)) {
        $this->Flash->success('Item salvo com sucesso');
        $this->redirect(array('action' => 'index'));
      }
    }
  }
  
  public function edit($id = null) {
    $this->Iten->id = $id;
    $this->set('pessoas', $this->getPeople());
    
    if ($this->request->is('get')) {
      $this->request->data = $this->Iten->findById($id);
    } else {
      if ($this->Iten->save($this->request->data)) {
        $this->Flash->success('Item atualizado com sucesso');
        $this->redirect(array('action' => 'index'));
      }
    }
  }
  
  public function delete($id) {
    if ($this->request->is('get')) {
      throw new MethodNotAllowedException();
    }
    
    if ($this->Iten->delete($id)) {
      $this->Flash->success('Item deletado com sucesso');
    } else {
      $this->Flash->error('Erro ao deletar item');
    }
    
    $this->redirect(array('action' => 'index'));
  }
  
  public function seeItens($id = null) {
    //$this->set('itens', $this->Iten->find('all', array('fields' => array('nome', 'quantidade'))));
    
    $options['conditions'] = array('Iten.pessoa_id' => $id);
    
    $this->set('itens', $this->Iten->find('all', $options));
  }
  
}
?>