<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Henkilo Controller
 *
 * @property \App\Model\Table\HenkiloTable $Henkilo
 */
class HenkiloController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $henkilo = $this->paginate($this->Henkilo);

        $this->set(compact('henkilo'));
        $this->set('_serialize', ['henkilo']);
    }

    /**
     * View method
     *
     * @param string|null $id Henkilo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $henkilo = $this->Henkilo->get($id, [
            'contain' => []
        ]);

        $this->set('henkilo', $henkilo);
        $this->set('_serialize', ['henkilo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $henkilo = $this->Henkilo->newEntity();
        if ($this->request->is('post')) {
            $henkilo = $this->Henkilo->patchEntity($henkilo, $this->request->data);
            if ($this->Henkilo->save($henkilo)) {
                $this->Flash->success(__('The henkilo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The henkilo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('henkilo'));
        $this->set('_serialize', ['henkilo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Henkilo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $henkilo = $this->Henkilo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $henkilo = $this->Henkilo->patchEntity($henkilo, $this->request->data);
            if ($this->Henkilo->save($henkilo)) {
                $this->Flash->success(__('The henkilo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The henkilo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('henkilo'));
        $this->set('_serialize', ['henkilo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Henkilo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $henkilo = $this->Henkilo->get($id);
        if ($this->Henkilo->delete($henkilo)) {
            $this->Flash->success(__('The henkilo has been deleted.'));
        } else {
            $this->Flash->error(__('The henkilo could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
