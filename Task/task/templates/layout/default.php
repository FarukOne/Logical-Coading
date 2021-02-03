<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var AppView $this
 */

use App\View\AppView;

$cakeDescription = 'My Dashboard';
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset() ?>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        <?php echo $cakeDescription ?>:
        <?php echo $this->fetch('title') ?>
    </title>
    <?php echo $this->Html->meta('icon') ?>
    <?php echo $this->Html->css(['css.css']);?>
    <?php echo $this->Html->css(['font-awesome.min.css']);?>

    <?php echo $this->Html->script(['core/jquery.min.js']);?>
    <?php echo $this->Html->script(['core/popper.min.js']);?>
    <?php echo $this->Html->script(['core/bootstrap-material-design.min.js']);?>
    <!-- Material Kit CSS -->
    <?php echo $this->Html->css(['material-dashboard.css?v=2.1.2']);?>
</head>
<body>
    <div class="wrapper ">
        <?php echo $this->element('sidebar');?>
        <div class="main-panel">
            <?php echo $this->element('navbar') ;?>
            <div class="content">
                <div class="container-fluid">
                    <!-- your content here -->
                    <?= $this->Flash->render() ?>
                    <?= $this->fetch('content') ?>
                </div>
            </div>
            <?php echo $this->element('footer') ;?>
        </div>
    </div>
</body>
</html>
