<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Statement[]|\Cake\Collection\CollectionInterface $statements
 */
?>
<div class="statements index content">
    <?= $this->Html->link(__('New Statement'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Statements') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('transactionId') ?></th>
                    <th><?= $this->Paginator->sort('narration') ?></th>
                    <th><?= $this->Paginator->sort('purpose') ?></th>
                    <th><?= $this->Paginator->sort('amount') ?></th>
                    <th><?= $this->Paginator->sort('deliverTo') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($statements as $statement): ?>
                <tr>
                    <td><?= $this->Number->format($statement->id) ?></td>
                    <td><?= h($statement->transactionId) ?></td>
                    <td><?= h($statement->narration) ?></td>
                    <td><?= h($statement->purpose) ?></td>
                    <td><?= $this->Number->format($statement->amount) ?></td>
                    <td><?= $this->Number->format($statement->deliverTo) ?></td>
                    <td><?= h($statement->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $statement->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $statement->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $statement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $statement->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
