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
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
	<?= $this->Html->css('home.css') ?>
</head>
<body class="home">
    <div id="content">
        <div class="row">
            <div class="row">
				<div id="titlebox" class="columns large-12 database checks">
					<h1> Training Diary </h1>
					<p> Keep your trainings always avaible! You never know when you might need them. <p>
				</div>
            </div>
           <?php// Debugger::checkSecurityKeys(); ?>
            <div class="columns large-5 platform checks">

					<h3> What is Training Diary? </h3>
					<p> Training Diary is a great tool to help you with your trainings. Heres reasons why it helps active trainers. </p>
                    <p class="success">Training Diary is fast way to generate new gym trainings.</p>
                  <!--  <p class="problem">Your version of PHP is too low. You need PHP 5.5.9 or higher to use CakePHP.</p> -->
                    <p class="success">You can always reach your training program.</p>
                    <p class="success">Keep easily results on date. For example what done and when.</p>
					<p class="success">Check your weights,results,exercises when you need them the most.</p>
					<p class="success">It's free to use and register.</p>
					<p class="success">Simple to use.</p>
            </div>
            <div class="columns large-6 filesystem checks">
                <div class="ButtonContent">
					<?= $this->Html->link('Login', '/users/login', array('class' => 'button')); ?>
					<br>
					<?= $this->Html->link('Register', '/users/add', array('class' => 'button')); ?>
					<?= $this->Form->end() ?>
				</div>
				Lorem ipsum dolom salor <br>
				Lorem ipsum dolom salor <br>
				Lorem ipsum dolom salor <br>
				Lorem ipsum dolom salor <br>
				Lorem ipsum dolom salor <br>
            </div>
        </div>

     <!--   <div class="row">
            <div class="columns large-6">
                <h3>Editing this Page</h3>
                <ul>
                    <li>To change the content of this page, edit: src/Template/Pages/home.ctp.</li>
                    <li>You can also add some CSS styles for your pages at: webroot/css/.</li>
                </ul>
            </div>
            <div class="columns large-6">
                <h3>Getting Started</h3>
                <ul>
                    <li><a target="_blank" href="http://book.cakephp.org/3.0/en/">CakePHP 3.0 Docs</a></li>
                    <li><a target="_blank" href="http://book.cakephp.org/3.0/en/tutorials-and-examples/bookmarks/intro.html">The 15 min Bookmarker Tutorial</a></li>
                    <li><a target="_blank" href="http://book.cakephp.org/3.0/en/tutorials-and-examples/blog/blog.html">The 15 min Blog Tutorial</a></li>
                </ul>
                <p>
            </div>
        </div>-->
    </div>
    <footer>
    </footer>
</body>
</html>
