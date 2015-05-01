<?php
namespace RockProg\Controller\Admin;

use RockProg\Controller\AppController;

/**
 * Programs Controller
 *
 * @property \RockProg\Model\Table\ProgramsTable $Programs
 */
class ProgramsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('Programs', $this->paginate($this->Programs));
        $this->set('_serialize', ['Programs']);
    }

    /**
     * View method
     *
     * @param string|null $id Rockprog Program id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $Program = $this->Programs->get($id, [
            'contain' => []
        ]);
        $this->set('Program', $Program);
        $this->set('_serialize', ['Program']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $Program = $this->Programs->newEntity();
        if ($this->request->is('post')) {
            $Program = $this->Programs->patchEntity($Program, $this->request->data,[
                    'associated' => ['Details'],
                    'validate' => 'new'
            ]);
            if ($this->Programs->save($Program)) {
                $this->Flash->success('عملیات ذخیره‌سازی با موفقیت تمام اجرا گردید');
                return $this->redirect(['action' => 'edit', $Program->id]);
            } else {
                $this->Flash->error('امکان ذخیره سازی وجود ندارد، مجدد سعی نمایید.');
            }
        }
        
        $Categories = $this->Programs->Categories->find('list')->all();
        $Types = $this->Programs->Types->find('list')->all();
        $Superviors = $this->Programs->Supervisors->find('list')->all();
        $this->set(compact('Program','Categories', 'Types','Superviors'));
        $this->set('_serialize', ['Program']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Rockprog Program id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $Program = $this->Programs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $Program = $this->Programs->patchEntity($Program, $this->request->data);
            if ($this->Programs->save($Program)) {
                $this->Flash->success('عملیات ویرایش با موفقیت تمام اجرا گردید');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('امکان ذخیره سازی وجود ندارد، مجدد سعی نمایید.');
            }
        }
        
        $status = [
            0 => 'پیشنویس',
            1 => 'فعال',
            2 => 'آرشیو',
            3 => 'کنسل',
        ];
        
        $Categories = $this->Programs->Categories->find('list')->all();
        $Types = $this->Programs->Types->find('list')->all();
        $Superviors = $this->Programs->Supervisors->find('list')->all();
        $this->set(compact('Program','Categories', 'Types','Superviors', 'status'));
        $this->set('_serialize', ['Program']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Rockprog Program id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $Program = $this->Programs->get($id);
        if ($this->Programs->delete($Program)) {
            $this->Flash->success('رکورد مورد نظر حذف گردید.');
        } else {
            $this->Flash->error('امکان ذخیره سازی وجود ندارد، مجدد سعی نمایید.');
        }
        return $this->redirect(['action' => 'index']);
    }
}