<?php
/**
 * @var AppView $this
 * @var Country $country
 */

use App\Model\Entity\Country;
use App\View\AppView;

?>
<div class="container">
    <div class="row">
        <div class="col-3">
            <aside class="">
                <div class="side-nav">
                    <h4 class="heading"><?= __('Actions') ?></h4>
                    <?= $this->Html->link(__('List Countries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
                </div>
            </aside>
        </div>
        <div class="col-8">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <?= $this->Form->create($country, ['type' => 'file']) ?>
                    <fieldset>
                        <legend class="text-info font-weight-bold"><?= __('Add Country') ?></legend>
                        <?php
                        echo $this->Form->control('name', [ 'label' => ['class' => 'text-primary'], 'class'=>'form-control']);
                        echo $this->Form->control('code', ['label' => ['class' => 'text-primary'], 'class'=>'form-control', 'type'=>'number']);
                        echo $this->Form->control('flag_name', [ 'label' => ['class' => 'text-primary', 'text' => 'Upload Image'], 'type'=>'file']);
                        ?>
                    </fieldset>
                    <?= $this->Form->button('Submit', ['class'=>'btn btn-info']) ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>
