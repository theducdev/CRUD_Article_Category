<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ExampleTable Controller
 *
 * @property \App\Model\Table\ExampleTableTable $ExampleTable
 */
class ExampleTableController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->ExampleTable->find();
        $exampleTable = $this->paginate($query);

        $this->set(compact('exampleTable'));
    }

    /**
     * View method
     *
     * @param string|null $id Example Table id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $exampleTable = $this->ExampleTable->get($id, contain: []);
        $this->set(compact('exampleTable'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $exampleTable = $this->ExampleTable->newEmptyEntity();
        if ($this->request->is('post')) {
            $exampleTable = $this->ExampleTable->patchEntity($exampleTable, $this->request->getData());
            if ($this->ExampleTable->save($exampleTable)) {
                $this->Flash->success(__('The example table has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The example table could not be saved. Please, try again.'));
        }
        $this->set(compact('exampleTable'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Example Table id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $exampleTable = $this->ExampleTable->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $exampleTable = $this->ExampleTable->patchEntity($exampleTable, $this->request->getData());
            if ($this->ExampleTable->save($exampleTable)) {
                $this->Flash->success(__('The example table has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The example table could not be saved. Please, try again.'));
        }
        $this->set(compact('exampleTable'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Example Table id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $exampleTable = $this->ExampleTable->get($id);
        if ($this->ExampleTable->delete($exampleTable)) {
            $this->Flash->success(__('The example table has been deleted.'));
        } else {
            $this->Flash->error(__('The example table could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
