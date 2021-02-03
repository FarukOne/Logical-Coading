<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Statement[]|\Cake\Collection\CollectionInterface $statements
 */
?>
<div class="statements index content">
    <?= $this->Html->link(__('New Statement'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Statements') ?></h3>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead class=" text-primary">
                    <tr>
                        <th><?= $this->Paginator->sort('transaction_id') ?></th>
                        <th><?= $this->Paginator->sort('narration') ?></th>
                        <th><?= $this->Paginator->sort('purpose') ?></th>
                        <th><?= $this->Paginator->sort('amount') ?></th>
                        <th><?= $this->Paginator->sort('deliver_to') ?></th>
                        <th><?= $this->Paginator->sort('created') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($statements as $statement): ?>
                    <tr>
                        <td><?= h($statement->transaction_id) ?></td>
                        <td><?= h($statement->narration) ?></td>
                        <td><?= h($statement->purpose) ?></td>
                        <td><?= $this->Number->currency($statement->amount, 'INR') ?></td>
                        <td><?= h($statement->deliver_to)?></td>
                        <td><?= h($statement->created) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first', ['class'=>"page-item"])) ?>
            <?= $this->Paginator->prev('< ' . __('previous', ['class'=>"page-item"])) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >', ['class'=>"page-item"]) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['class'=>"page-item"]) ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
