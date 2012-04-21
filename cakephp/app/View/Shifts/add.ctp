<?php

echo $this->Form->create();
echo $this->Form->inputs(array('shift_type_id',
								'training',
								'leasing',
								'comment',
								'start',
								'stop'));
echo $this->Form->end('Create');
