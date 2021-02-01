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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $statement->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $statement->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Statements'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="statements form content">
            <?= $this->Form->create($statement) ?>
            <fieldset>
                <legend><?= __('Edit Statement') ?></legend>
                <?php
                    echo $this->Form->control('transactionId');
                    echo $this->Form->control('narration');
                    echo $this->Form->control('purpose');
                    echo $this->Form->control('amount');
                    echo $this->Form->control('deliverTo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
