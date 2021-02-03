<?php
/**
 * @var AppView $this
 * @var Statement $statement
 *  @var Country[]|CollectionInterface $countries
 */

use App\Model\Entity\Country;
use App\Model\Entity\Statement;
use App\View\AppView;
use Cake\Collection\CollectionInterface;

?>
<div class="container">
    <div class="row">
        <div class="col-3">
            <aside class="">
                <div class="side-nav">
                    <h4 class="heading"><?= __('Actions') ?></h4>
                    <?= $this->Html->link(__('List Statements'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
                </div>
            </aside>
        </div>
        <div class="col-8">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <?= $this->Form->create($statement) ?>
                    <fieldset>
                        <legend class="text-info font-weight-bold"><?= __('Add Statement') ?></legend>
                        <?php
                            echo $this->Form->control('narration', [ 'label' => ['class' => 'text-primary'], 'class'=>'form-control']);
                            echo $this->Form->control('purpose', ['label' => ['class' => 'text-primary'], 'class'=>'form-control']);
                            echo $this->Form->control('amount', ['label' => ['class' => 'text-primary'], 'class'=>'form-control', 'type'=>'number']);
                            echo $this->Form->control('deliver_to', ['label' => ['class' => 'text-primary'], 'class'=>'form-control', 'type'=>'text']);
                        ?>
                    </fieldset>
                        <?= $this->Form->button('Submit', ['class'=>'btn btn-info']) ?>
                        <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>
