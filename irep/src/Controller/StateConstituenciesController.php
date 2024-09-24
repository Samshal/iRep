<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * StateConstituencies Controller
 *
 * @property \App\Model\Table\StateConstituenciesTable $StateConstituencies
 */
class StateConstituenciesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['States']
        ];
        $this->set('stateConstituencies', $this->paginate($this->StateConstituencies));
        $this->set('_serialize', ['stateConstituencies']);
    }

    /**
     * View method
     *
     * @param string|null $id State Constituency id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $stateConstituency = $this->StateConstituencies->get($id, [
            'contain' => ['States', 'LocalGovts']
        ]);
        $this->set('stateConstituency', $stateConstituency);
        $this->set('_serialize', ['stateConstituency']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $stateConstituency = $this->StateConstituencies->newEntity();
        if ($this->request->is('post')) {
            $stateConstituency = $this->StateConstituencies->patchEntity($stateConstituency, $this->request->data);
            if ($this->StateConstituencies->save($stateConstituency)) {
                $this->Flash->success(__('The state constituency has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The state constituency could not be saved. Please, try again.'));
            }
        }
        $states = $this->StateConstituencies->States->find('list', ['limit' => 200]);
        $this->set(compact('stateConstituency', 'states'));
        $this->set('_serialize', ['stateConstituency']);
    }

    /**
     * Edit method
     *
     * @param string|null $id State Constituency id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $stateConstituency = $this->StateConstituencies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $stateConstituency = $this->StateConstituencies->patchEntity($stateConstituency, $this->request->data);
            if ($this->StateConstituencies->save($stateConstituency)) {
                $this->Flash->success(__('The state constituency has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The state constituency could not be saved. Please, try again.'));
            }
        }
        $states = $this->StateConstituencies->States->find('list', ['limit' => 200]);
        $this->set(compact('stateConstituency', 'states'));
        $this->set('_serialize', ['stateConstituency']);
    }

    /**
     * Delete method
     *
     * @param string|null $id State Constituency id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $stateConstituency = $this->StateConstituencies->get($id);
        if ($this->StateConstituencies->delete($stateConstituency)) {
            $this->Flash->success(__('The state constituency has been deleted.'));
        } else {
            $this->Flash->error(__('The state constituency could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
