<?php
App::uses('AppController', 'Controller');

class PessoasController extends AppController {
  public $name = 'Pessoas';
  
  public function index() {
    $this->set('pessoas', $this->Pessoa->find('all'));
  }
  
  public function view($id = null) {
    $this->set('pessoa', $this->Pessoa->findById($id));
  }
  
  public function add() {
    if ($this->request->is('POST')) {
      if ($this->Pessoa->save($this->request->data)) {
        $this->Flash->success('Pessoa cadastrada com sucesso.');
        $this->redirect(array('action' => 'index'));
      }
    }
  }
  
  public function edit($id = null) {
    $this->Pessoa->id = $id;
    
    if ($this->request->is('get')) {
      $this->request->data = $this->Pessoa->findById($id);
    } else {
      if ($this->Pessoa->save($this->request->data)) {
        $this->Flash->success('Pessoas salva com sucesso');
        $this->redirect(array('action' => 'index'));
      }
    }
  }
  
  public function delete($id) {
    if ($this->request->is('get')) {
      throw new MethodNotAllowedException();
    }
    
    if ($this->Pessoa->delete($id)) {
      $this->Flash->success('Pessoas deletada com sucesso');
    } else {
      $this->Flash->error('Erro ao deletar pessoa');
    }
    
    $this->redirect(array('action' => 'index'));
  }
  
}
?>