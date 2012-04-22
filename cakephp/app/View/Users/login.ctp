<?php

echo $this->Session->flash('auth');

echo $this->Form->create('User');

echo $this->Form->input('user_id');

echo $this->Form->end('Login');
