<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Countries Controller
 *
 * @property \App\Model\Table\CountriesTable $Countries
 */
class CountriesController extends AppController
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

        $query = $this->Countries->find('all')
                ->where($conditions);

        $countries = $this->paginate($query, [
            'limit' => 20,
            'order' => ['CatZonas.id' => 'DESC']
        ]);

        $this->set(compact('countries'));
        $this->set('_serialize', ['countries']);
    }

    /**
     * View method
     *
     * @param string|null $id Country id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $country = $this->Countries->get($id, [
            'contain' => ['Cities']
        ]);

        $this->set('country', $country);
        $this->set('_serialize', ['country']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $country = $this->Countries->newEntity();
        if ($this->request->is('post')) {
            $country = $this->Countries->patchEntity($country, $this->request->getData());
            $country->user_created = 1;
            if ($this->Countries->save($country)) {
                $this->Flash->success(__('El País ha sido Registrado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El País no pudo ser registrado. Por favor, inténtelo nuevamente.'));
        }
        $this->set(compact('country'));
        $this->set('_serialize', ['country']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Country id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $country = $this->Countries->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $country = $this->Countries->patchEntity($country, $this->request->getData());
            $country->user_modified = 1;
            if ($this->Countries->save($country)) {
                $this->Flash->success(__('El País ha sido modificado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El País no pudo modificarse. Por favor, inténtelo nuevamente.'));
        }
        $this->set(compact('country'));
        $this->set('_serialize', ['country']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Country id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $country = $this->Countries->get($id);
        if ($this->Countries->delete($country)) {
            $this->Flash->success(__('El Páis ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El País no pudo ser eliminado. Por favor, inténtelo nuevamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
