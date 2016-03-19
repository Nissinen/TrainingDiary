<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Exercises Controller
 *
 * @property \App\Model\Table\ExercisesTable $Exercises
 */
class ExercisesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $exercises = $this->paginate($this->Exercises);

        $this->set(compact('exercises'));
        $this->set('_serialize', ['exercises']);
    }

    /**
     * View method
     *
     * @param string|null $id Exercise id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $exercise = $this->Exercises->get($id, [
            'contain' => ['Exerciseinformations', 'Trainings']
        ]);

        $this->set('exercise', $exercise);
        $this->set('_serialize', ['exercise']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $exercise = $this->Exercises->newEntity();
        if ($this->request->is('post')) {
            $exercise = $this->Exercises->patchEntity($exercise, $this->request->data);
            if ($this->Exercises->save($exercise)) {
                $this->Flash->success(__('The exercise has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The exercise could not be saved. Please, try again.'));
            }
        }
        $exerciseinformations = $this->Exercises->Exerciseinformations->find('list', ['limit' => 200]);
        $trainings = $this->Exercises->Trainings->find('list', ['limit' => 200]);
        $this->set(compact('exercise', 'exerciseinformations', 'trainings'));
        $this->set('_serialize', ['exercise']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Exercise id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $exercise = $this->Exercises->get($id, [
            'contain' => ['Exerciseinformations', 'Trainings']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $exercise = $this->Exercises->patchEntity($exercise, $this->request->data);
            if ($this->Exercises->save($exercise)) {
                $this->Flash->success(__('The exercise has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The exercise could not be saved. Please, try again.'));
            }
        }
        $exerciseinformations = $this->Exercises->Exerciseinformations->find('list', ['limit' => 200]);
        $trainings = $this->Exercises->Trainings->find('list', ['limit' => 200]);
        $this->set(compact('exercise', 'exerciseinformations', 'trainings'));
        $this->set('_serialize', ['exercise']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Exercise id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $exercise = $this->Exercises->get($id);
        if ($this->Exercises->delete($exercise)) {
            $this->Flash->success(__('The exercise has been deleted.'));
        } else {
            $this->Flash->error(__('The exercise could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
