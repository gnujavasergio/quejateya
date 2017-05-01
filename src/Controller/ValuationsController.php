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
                $this->Flash->success(__('La Valoracion fue Guardada Satisfactoriamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La Valoracion no pudo ser Guardada, INtentelo de nuevo.'));
        }
        $this->set(compact('LA valoracion'));
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
                $this->Flash->success(__('La Valoracion fue modificada SAtisfactoriamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La valoracion no pudo ser Modificada, INtentelo de NuEVO.'));
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
            $this->Flash->success(__('Valoracion eliminada.'));
        } else {
            $this->Flash->error(__('La valoracion no pudo ser eliminada, intentelo mas tarde.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
