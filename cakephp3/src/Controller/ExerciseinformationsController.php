<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Exerciseinformations Controller
 *
 * @property \App\Model\Table\ExerciseinformationsTable $Exerciseinformations
 */
class ExerciseinformationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $exerciseinformations = $this->paginate($this->Exerciseinformations);

        $this->set(compact('exerciseinformations'));
        $this->set('_serialize', ['exerciseinformations']);
    }

    /**
     * View method
     *
     * @param string|null $id Exerciseinformation id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $exerciseinformation = $this->Exerciseinformations->get($id, [
            'contain' => ['Exercises']
        ]);

        $this->set('exerciseinformation', $exerciseinformation);
        $this->set('_serialize', ['exerciseinformation']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $exerciseinformation = $this->Exerciseinformations->newEntity();
        if ($this->request->is('post')) {
            $exerciseinformation = $this->Exerciseinformations->patchEntity($exerciseinformation, $this->request->data);
            if ($this->Exerciseinformations->save($exerciseinformation)) {
                $this->Flash->success(__('The exerciseinformation has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The exerciseinformation could not be saved. Please, try again.'));
            }
        }
        $exercises = $this->Exerciseinformations->Exercises->find('list', ['limit' => 200]);
        $this->set(compact('exerciseinformation', 'exercises'));
        $this->set('_serialize', ['exerciseinformation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Exerciseinformation id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $exerciseinformation = $this->Exerciseinformations->get($id, [
            'contain' => ['Exercises']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $exerciseinformation = $this->Exerciseinformations->patchEntity($exerciseinformation, $this->request->data);
            if ($this->Exerciseinformations->save($exerciseinformation)) {
                $this->Flash->success(__('The exerciseinformation has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The exerciseinformation could not be saved. Please, try again.'));
            }
        }
        $exercises = $this->Exerciseinformations->Exercises->find('list', ['limit' => 200]);
        $this->set(compact('exerciseinformation', 'exercises'));
        $this->set('_serialize', ['exerciseinformation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Exerciseinformation id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $exerciseinformation = $this->Exerciseinformations->get($id);
        if ($this->Exerciseinformations->delete($exerciseinformation)) {
            $this->Flash->success(__('The exerciseinformation has been deleted.'));
        } else {
            $this->Flash->error(__('The exerciseinformation could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
