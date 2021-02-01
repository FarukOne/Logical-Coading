<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Statement $statement
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Statement'), ['action' => 'edit', $statement->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Statement'), ['action' => 'delete', $statement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $statement->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Statements'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Statement'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="statements view content">
            <h3><?= h($statement->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('TransactionId') ?></th>
                    <td><?= h($statement->transactionId) ?></td>
                </tr>
                <tr>
                    <th><?= __('Narration') ?></th>
                    <td><?= h($statement->narration) ?></td>
                </tr>
                <tr>
                    <th><?= __('Purpose') ?></th>
                    <td><?= h($statement->purpose) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($statement->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Amount') ?></th>
                    <td><?= $this->Number->format($statement->amount) ?></td>
                </tr>
                <tr>
                    <th><?= __('DeliverTo') ?></th>
                    <td><?= $this->Number->format($statement->deliverTo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($statement->created) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
