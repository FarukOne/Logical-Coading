<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card" style="width: 50%; margin: auto;">
                <div class="card-header">
                    <legend class="text-info font-weight-bold"><?= __('Registration') ?></legend>
                </div>
                <div class="card-body">
                    <?= $this->Flash->render() ?>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <?= $this->Form->create($user) ?>
                            <fieldset>
                                <?php
                                echo $this->Form->control('name', [ 'label' => ['class' => 'text-primary'], 'class'=>'form-control']);
                                echo $this->Form->control('email', ['label' => ['class' => 'text-primary'], 'class'=>'form-control', 'type'=>'email']);
                                echo $this->Form->control('password', ['label' => ['class' => 'text-primary'], 'class'=>'form-control', 'type'=>'password']);
                                echo $this->Form->control('role', ['label' => ['class' => 'text-primary'], 'class'=>'form-control', 'type'=>'text']);
                                ?>
                            </fieldset>
                            <?= $this->Form->button('Submit', ['class'=>'btn btn-info']) ?>
                            <?= $this->Html->link('Login', ['controller'=>'Users', 'action' => 'login'], ['class'=>'font-weight-bold']) ?>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
