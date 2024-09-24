<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LocalGovts Controller
 *
 * @property \App\Model\Table\LocalGovtsTable $LocalGovts
 */
class LocalGovtsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['States', 'SenatorialDistricts', 'FederalConstituencies', 'StateConstituencies']
        ];
        $this->set('localGovts', $this->paginate($this->LocalGovts));
        $this->set('_serialize', ['localGovts']);
    }

    /**
     * View method
     *
     * @param string|null $id Local Govt id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $localGovt = $this->LocalGovts->get($id, [
            'contain' => ['States', 'SenatorialDistricts', 'FederalConstituencies', 'StateConstituencies']
        ]);
        $this->set('localGovt', $localGovt);
        $this->set('_serialize', ['localGovt']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $localGovt = $this->LocalGovts->newEntity();
        if ($this->request->is('post')) {
            $localGovt = $this->LocalGovts->patchEntity($localGovt, $this->request->data);
            if ($this->LocalGovts->save($localGovt)) {
                $this->Flash->success(__('The local govt has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The local govt could not be saved. Please, try again.'));
            }
        }
        $states = $this->LocalGovts->States->find('list', ['limit' => 200]);
        $senatorialDistricts = $this->LocalGovts->SenatorialDistricts->find('list', ['limit' => 200]);
        $federalConstituencies = $this->LocalGovts->FederalConstituencies->find('list', ['limit' => 200]);
        $stateConstituencies = $this->LocalGovts->StateConstituencies->find('list', ['limit' => 200]);
        $this->set(compact('localGovt', 'states', 'senatorialDistricts', 'federalConstituencies', 'stateConstituencies'));
        $this->set('_serialize', ['localGovt']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Local Govt id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $localGovt = $this->LocalGovts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $localGovt = $this->LocalGovts->patchEntity($localGovt, $this->request->data);
            if ($this->LocalGovts->save($localGovt)) {
                $this->Flash->success(__('The local govt has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The local govt could not be saved. Please, try again.'));
            }
        }
        $states = $this->LocalGovts->States->find('list', ['limit' => 200]);
        $senatorialDistricts = $this->LocalGovts->SenatorialDistricts->find('list', ['limit' => 200]);
        $federalConstituencies = $this->LocalGovts->FederalConstituencies->find('list', ['limit' => 200]);
        $stateConstituencies = $this->LocalGovts->StateConstituencies->find('list', ['limit' => 200]);
        $this->set(compact('localGovt', 'states', 'senatorialDistricts', 'federalConstituencies', 'stateConstituencies'));
        $this->set('_serialize', ['localGovt']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Local Govt id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $localGovt = $this->LocalGovts->get($id);
        if ($this->LocalGovts->delete($localGovt)) {
            $this->Flash->success(__('The local govt has been deleted.'));
        } else {
            $this->Flash->error(__('The local govt could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
