<?php
namespace RockProg\Controller\Admin;

use RockProg\Controller\AppController;

/**
 * Supervisors Controller
 *
 * @property \\Model\Table\SupervisorsTable $Supervisors
 */
class SupervisorsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('Supervisors', $this->paginate($this->Supervisors));
        $this->set('_serialize', ['Supervisors']);
    }

    /**
     * View method
     *
     * @param string|null $id  Supervisor id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $Supervisor = $this->Supervisors->get($id, [
            'contain' => []
        ]);
        $this->set('Supervisor', $Supervisor);
        $this->set('_serialize', ['Supervisor']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $Supervisor = $this->Supervisors->newEntity();
        if ($this->request->is('post')) {
            $Supervisor = $this->Supervisors->patchEntity($Supervisor, $this->request->data);
            if ($this->Supervisors->save($Supervisor)) {
                $this->Flash->success('The  supervisor has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The  supervisor could not be saved. Please, try again.');
            }
        }
        $this->set(compact('Supervisor'));
        $this->set('_serialize', ['Supervisor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id  Supervisor id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $Supervisor = $this->Supervisors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $Supervisor = $this->Supervisors->patchEntity($Supervisor, $this->request->data);
            if ($this->Supervisors->save($Supervisor)) {
                $this->Flash->success('The  supervisor has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The  supervisor could not be saved. Please, try again.');
            }
        }
        $this->set(compact('Supervisor'));
        $this->set('_serialize', ['Supervisor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id  Supervisor id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $Supervisor = $this->Supervisors->get($id);
        if ($this->Supervisors->delete($Supervisor)) {
            $this->Flash->success('The  supervisor has been deleted.');
        } else {
            $this->Flash->error('The  supervisor could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
