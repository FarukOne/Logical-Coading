<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card" style="width: 50%; margin: auto;">
                <div class="card-header">
                    <h3 class="font-weight-bold text-primary">Login</h3>
                </div>
                <div class="card-body">
                    <?= $this->Flash->render() ?>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <?= $this->Form->create() ?>
                            <fieldset>
                                <?php
                                    echo $this->Form->control('email', ['required' => true, 'class'=>'form-control']);
                                    echo $this->Form->control('password', ['required' => true, 'class'=>'form-control']);
                                ?>
                            </fieldset>
                            <?= $this->Form->button('Login', ['class'=>'btn btn-info']) ?>
                            <?= $this->Html->link('Add User', ['action' => 'add'], ['class'=>'font-weight-bold']) ?>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
