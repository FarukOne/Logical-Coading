<?php
declare(strict_types=1);

namespace App\Controller;

use App\Model\Entity\Statement;
use App\Model\Table\StatementsTable;
use Cake\Datasource\Exception\RecordNotFoundException;
use Cake\Datasource\ResultSetInterface;
use Cake\Http\Response;

/**
 * Statements Controller
 * @property StatementsTable $Statements
 * @method Statement[]|ResultSetInterface paginate($object = null, array $settings = [])
 */
class StatementsController extends AppController
{
    /**
     * Index method
     * @return Response|null|void Renders view
     */
    public function index()
    {
        $statements = $this->paginate($this->Statements);
        $this->set(compact('statements'));
    }

    /**
     * View method
     *
     * @param string|null $id Statement id.
     * @return Response|null|void Renders view
     * @throws RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $statement = $this->Statements->get($id, [
            'contain' => [],
        ]);
        $this->set(compact('statement'));
    }

    /**
     * Add method
     *
     * @return Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $statement = $this->Statements->newEmptyEntity();
        if ($this->request->is('post')) {
            $statement = $this->Statements->patchEntity($statement, $this->request->getData());
            if ($this->Statements->save($statement)) {
                $this->Flash->success(__('The statement has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The statement could not be saved. Please, try again.'));
        }
        $this->set(compact('statement'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Statement id.
     * @return Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $statement = $this->Statements->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $statement = $this->Statements->patchEntity($statement, $this->request->getData());
            if ($this->Statements->save($statement)) {
                $this->Flash->success(__('The statement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The statement could not be saved. Please, try again.'));
        }
        $this->set(compact('statement'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Statement id.
     * @return Response|null|void Redirects to index.
     * @throws RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $statement = $this->Statements->get($id);
        if ($this->Statements->delete($statement)) {
            $this->Flash->success(__('The statement has been deleted.'));
        } else {
            $this->Flash->error(__('The statement could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
