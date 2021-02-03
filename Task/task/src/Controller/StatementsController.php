<?php
declare(strict_types=1);

namespace App\Controller;

use App\Model\Entity\Statement;
use App\Model\Table\StatementsTable;
use Cake\Datasource\ResultSetInterface;
use Cake\Http\Response;
use Cake\ORM\TableRegistry;

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
     * Add method
     *
     * @return Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $table = TableRegistry::getTableLocator()->get('Countries');
        $countries = $table->find('all');
        $this->set(compact('countries'));
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
}
