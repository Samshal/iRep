<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FederalConstituencies Controller
 *
 * @property \App\Model\Table\FederalConstituenciesTable $FederalConstituencies
 */
class FederalConstituenciesController extends AppController
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
        $this->set('federalConstituencies', $this->paginate($this->FederalConstituencies));
        $this->set('_serialize', ['federalConstituencies']);
    }

    /**
     * View method
     *
     * @param string|null $id Federal Constituency id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $federalConstituency = $this->FederalConstituencies->get($id, [
            'contain' => ['States', 'LocalGovts']
        ]);
        $this->set('federalConstituency', $federalConstituency);
        $this->set('_serialize', ['federalConstituency']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $federalConstituency = $this->FederalConstituencies->newEntity();
        if ($this->request->is('post')) {
            $federalConstituency = $this->FederalConstituencies->patchEntity($federalConstituency, $this->request->data);
            if ($this->FederalConstituencies->save($federalConstituency)) {
                $this->Flash->success(__('The federal constituency has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The federal constituency could not be saved. Please, try again.'));
            }
        }
        $states = $this->FederalConstituencies->States->find('list', ['limit' => 200]);
        $this->set(compact('federalConstituency', 'states'));
        $this->set('_serialize', ['federalConstituency']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Federal Constituency id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $federalConstituency = $this->FederalConstituencies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $federalConstituency = $this->FederalConstituencies->patchEntity($federalConstituency, $this->request->data);
            if ($this->FederalConstituencies->save($federalConstituency)) {
                $this->Flash->success(__('The federal constituency has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The federal constituency could not be saved. Please, try again.'));
            }
        }
        $states = $this->FederalConstituencies->States->find('list', ['limit' => 200]);
        $this->set(compact('federalConstituency', 'states'));
        $this->set('_serialize', ['federalConstituency']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Federal Constituency id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $federalConstituency = $this->FederalConstituencies->get($id);
        if ($this->FederalConstituencies->delete($federalConstituency)) {
            $this->Flash->success(__('The federal constituency has been deleted.'));
        } else {
            $this->Flash->error(__('The federal constituency could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
