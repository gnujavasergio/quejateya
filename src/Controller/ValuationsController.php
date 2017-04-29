<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Valuations Controller
 *
 * @property \App\Model\Table\ValuationsTable $Valuations
 */
class ValuationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $valuations = $this->paginate($this->Valuations);

        $this->set(compact('valuations'));
        $this->set('_serialize', ['valuations']);
    }

    /**
     * View method
     *
     * @param string|null $id Valuation id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $valuation = $this->Valuations->get($id, [
            'contain' => ['Posts']
        ]);

        $this->set('valuation', $valuation);
        $this->set('_serialize', ['valuation']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $valuation = $this->Valuations->newEntity();
        if ($this->request->is('post')) {
            $valuation = $this->Valuations->patchEntity($valuation, $this->request->getData());
            if ($this->Valuations->save($valuation)) {
                $this->Flash->success(__('The valuation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The valuation could not be saved. Please, try again.'));
        }
        $this->set(compact('valuation'));
        $this->set('_serialize', ['valuation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Valuation id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $valuation = $this->Valuations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $valuation = $this->Valuations->patchEntity($valuation, $this->request->getData());
            if ($this->Valuations->save($valuation)) {
                $this->Flash->success(__('The valuation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The valuation could not be saved. Please, try again.'));
        }
        $this->set(compact('valuation'));
        $this->set('_serialize', ['valuation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Valuation id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $valuation = $this->Valuations->get($id);
        if ($this->Valuations->delete($valuation)) {
            $this->Flash->success(__('The valuation has been deleted.'));
        } else {
            $this->Flash->error(__('The valuation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
