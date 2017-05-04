<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Priorities Controller
 *
 * @property \App\Model\Table\PrioritiesTable $Priorities
 */
class PrioritiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
         $params = array();
        $params['name'] = $this->request->query('name');
        $params['code'] = $this->request->query('code');
        $params['published'] = $this->request->query('published');
        $this->set('params', $params);

        $conditions = array();
        if (!empty($params['name'])) {
            $conditions['name LIKE'] = '%' . $params['name'] . '%';
        }
        if (!empty($params['code'])) {
            $conditions['code LIKE'] = '%' . $params['code']. '%';
        }
        if (is_numeric($params['published'])) {
            $conditions['published'] = $params['published'];
        }

        $query = $this->Priorities->find('all')
                ->where($conditions);

        $priorities = $this->paginate($query, [
            'limit' => 20,
            'order' => ['priorities.id' => 'DESC']
        ]);
        $this->set(compact('priorities'));
        $this->set('_serialize', ['priorities']);
    }

    /**
     * View method
     *
     * @param string|null $id Priority id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $priority = $this->Priorities->get($id, [
            'contain' => ['Posts']
        ]);

        $this->set('priority', $priority);
        $this->set('_serialize', ['priority']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $priority = $this->Priorities->newEntity();
        if ($this->request->is('post')) {
            $priority = $this->Priorities->patchEntity($priority, $this->request->getData());
            $priority->user_created=1;
            if ($this->Priorities->save($priority)) {
                $this->Flash->success(__('The priority has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La prioridad no puede ser registrada. Por Favor, vuelva a intentar.'));
        }
        $this->set(compact('priority'));
        $this->set('_serialize', ['priority']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Priority id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $priority = $this->Priorities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $priority = $this->Priorities->patchEntity($priority, $this->request->getData());
            if ($this->Priorities->save($priority)) {
                $this->Flash->success(__('The priority has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The priority could not be saved. Please, try again.'));
        }
        $this->set(compact('priority'));
        $this->set('_serialize', ['priority']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Priority id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $priority = $this->Priorities->get($id);
        if ($this->Priorities->delete($priority)) {
            $this->Flash->success(__('The priority has been deleted.'));
        } else {
            $this->Flash->error(__('The priority could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
