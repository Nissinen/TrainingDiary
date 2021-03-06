<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'TrainingDiary';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('main.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
                <?= $this->element('navigation'); ?>
        </ul>
        <section>
            <ul class="left">
                <?php if ($this->request->session()->read('Auth.User')) { ?>
                    <h4> <li>User: <?= $this->Html->link(__($loggedUser['username']), ['controller' => 'users', 'action' => 'view', $loggedUser['id']])?></li> </h4>
                <!--    <li>ID: <?= $loggedUser['id'] ?></li>-->
				<?php
				if($loggedUser['role'] === 'admin'){
                    echo "<li>Role: ";
					echo $loggedUser['role']; 
					echo "</li>";
					}
					?>
                <!--    <li>Created: <?= $loggedUser['created'] ?></li> -->
                <?php } ?>
            </ul>
        </section>
    </nav>
    <?= $this->Flash->render() ?>
    <section class="container clearfix">
        <?= $this->fetch('content') ?>
    </section>
    <footer>
    </footer>
</body>
</html>
