<?php
    echo "<li class=\"name\"><h1>".$this->Html->link('Home', '/')."</h1></li>";
    echo "<li class=\"name\"><h1>".$this->Html->link('Users', '/users/')."</h1></li>";
    echo "<li class=\"name\"><h1>".$this->Html->link('Trainings', '/trainings/')."</h1></li>";
	if ($this->request->session()->read('Auth.User')) {
        echo "<li class=\"name\"><h1>",$this->Html->link('Logout', '/users/logout/'),"</h1></li>";
    }
?>