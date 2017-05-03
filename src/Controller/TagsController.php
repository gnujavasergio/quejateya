<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tags Controller
 *
 * @property \App\Model\Table\TagsTable $Tags
 */
class TagsController extends AppController
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
        $params['published'] = $this->request->query('published');
        $this->set('params', $params);
        
        $conditions = array();
        if (!empty($params['name'])) {
            $conditions['name LIKE'] = '%' . $params['name'] . '%';
        }
        if (is_numeric($params['published'])) {
            $conditions['published'] = $params['published'];
        }

        $query = $this->Tags->find('all')
                ->where($conditions);

        $tags = $this->paginate($query, [
            'limit' => 20,
            'order' => ['tags.id' => 'DESC']
        ]);

        $this->set(compact('tags'));
        $this->set('_serialize', ['tags']);
    }

    /**
     * View method
     *
     * @param string|null $id Tag id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tag = $this->Tags->get($id, [
            'contain' => []
        ]);

        $this->set('tag', $tag);
        $this->set('_serialize', ['tag']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tag = $this->Tags->newEntity();
        if ($this->request->is('post')) {
            $tag = $this->Tags->patchEntity($tag, $this->request->getData());
            $tag->user_created=1;
           
            if ($this->Tags->save($tag)) {
                $this->Flash->success(__('La Valoracion fue Guardada Satisfactoriamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La valoracion no pudo ser Modificada, Intentelo de Nuevo.'));
        }
        $this->set(compact('tag'));
        $this->set('_serialize', ['tag']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tag id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tag = $this->Tags->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tag = $this->Tags->patchEntity($tag, $this->request->getData());
            $tag->user_modified = 1;
            if ($this->Tags->save($tag)) {
                $this->Flash->success(__('La valoración fue modificada Satisfactoriamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La valoracion no pudo ser Modificada, Intentelo de Nuevo.'));
        }
        $this->set(compact('tag'));
        $this->set('_serialize', ['tag']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tag id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tag = $this->Tags->get($id);
        if ($this->Tags->delete($tag)) {
            $this->Flash->success(__('Valoración Eliminada.'));
        } else {
            $this->Flash->error(__('La valoracion no pudo ser Eliminada, Intentelo más tarde.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
 