<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Trainings Controller
 *
 * @property \App\Model\Table\TrainingsTable $Trainings
 */
class TrainingsController extends AppController
{

    /**
     *  Overrides isAuthorized defined in AppController
     *  Checks if user has sufficient privileges to deploy actions
     */
    public function isAuthorized($user)
    {
        // Users can edit their own information
        if ($this->request->action === 'edit' && $user['role'] === 'user') {
            $user_id = $this->request->params['pass'][0];
            //debug($user_id);
            if($user_id == $user['id']) {
                return true;
            }
        }

        // Anyone can access methods below
        if ($this->request->action === 'index' ||
            $this->request->action === 'view' ||
            $this->request->action === 'add' ||
            $this->request->action === 'delete') {
            return true;
        }

        return parent::isAuthorized($user);
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $trainings = $this->paginate($this->Trainings);

        $this->set(compact('trainings'));
        $this->set('_serialize', ['trainings']);
    }

    /**
     * View method
     *
     * @param string|null $id Training id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $training = $this->Trainings->get($id, [
            'contain' => ['Users', 'Exercises', 'Results']
        ]);

        $this->set('training', $training);
        $this->set('_serialize', ['training']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $training = $this->Trainings->newEntity();
        if ($this->request->is('post')) {
            $training = $this->Trainings->patchEntity($training, $this->request->data);
            if ($this->Trainings->save($training)) {
                $this->Flash->success(__('The training has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The training could not be saved. Please, try again.'));
            }
        }
        $users = $this->Trainings->Users->find('list', ['limit' => 200]);
        $exercises = $this->Trainings->Exercises->find('list', ['limit' => 200]);
        $this->set(compact('training', 'users', 'exercises'));
        $this->set('_serialize', ['training']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Training id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $training = $this->Trainings->get($id, [
            'contain' => ['Exercises']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $training = $this->Trainings->patchEntity($training, $this->request->data);
            if ($this->Trainings->save($training)) {
                $this->Flash->success(__('The training has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The training could not be saved. Please, try again.'));
            }
        }
        $users = $this->Trainings->Users->find('list', ['limit' => 200]);
        $exercises = $this->Trainings->Exercises->find('list', ['limit' => 200]);
        $this->set(compact('training', 'users', 'exercises'));
        $this->set('_serialize', ['training']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Training id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $training = $this->Trainings->get($id);
        if ($this->Trainings->delete($training)) {
            $this->Flash->success(__('The training has been deleted.'));
        } else {
            $this->Flash->error(__('The training could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
