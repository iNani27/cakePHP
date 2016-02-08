<?php
echo $this->form->create('User',array('action'=>'login'));
echo $this->form->input('login',array('label'=>'Login : '));
echo $this->form->input('pass',array('type'=>'password','label'=>'Pass : '));
echo $this->form->end('Connexion');
?>
