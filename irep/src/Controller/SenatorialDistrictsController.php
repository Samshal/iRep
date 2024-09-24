<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SenatorialDistricts Controller
 *
 * @property \App\Model\Table\SenatorialDistrictsTable $SenatorialDistricts
 */
class SenatorialDistrictsController extends AppController
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
        $this->set('senatorialDistricts', $this->paginate($this->SenatorialDistricts));
        $this->set('_serialize', ['senatorialDistricts']);
    }

    /**
     * View method
     *
     * @param string|null $id Senatorial District id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $senatorialDistrict = $this->SenatorialDistricts->get($id, [
            'contain' => ['States', 'LocalGovts']
        ]);
        $this->set('senatorialDistrict', $senatorialDistrict);
        $this->set('_serialize', ['senatorialDistrict']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $senatorialDistrict = $this->SenatorialDistricts->newEntity();
        if ($this->request->is('post')) {
            $senatorialDistrict = $this->SenatorialDistricts->patchEntity($senatorialDistrict, $this->request->data);
            if ($this->SenatorialDistricts->save($senatorialDistrict)) {
                $this->Flash->success(__('The senatorial district has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The senatorial district could not be saved. Please, try again.'));
            }
        }
        $states = $this->SenatorialDistricts->States->find('list', ['limit' => 200]);
        $this->set(compact('senatorialDistrict', 'states'));
        $this->set('_serialize', ['senatorialDistrict']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Senatorial District id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $senatorialDistrict = $this->SenatorialDistricts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $senatorialDistrict = $this->SenatorialDistricts->patchEntity($senatorialDistrict, $this->request->data);
            if ($this->SenatorialDistricts->save($senatorialDistrict)) {
                $this->Flash->success(__('The senatorial district has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The senatorial district could not be saved. Please, try again.'));
            }
        }
        $states = $this->SenatorialDistricts->States->find('list', ['limit' => 200]);
        $this->set(compact('senatorialDistrict', 'states'));
        $this->set('_serialize', ['senatorialDistrict']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Senatorial District id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $senatorialDistrict = $this->SenatorialDistricts->get($id);
        if ($this->SenatorialDistricts->delete($senatorialDistrict)) {
            $this->Flash->success(__('The senatorial district has been deleted.'));
        } else {
            $this->Flash->error(__('The senatorial district could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
