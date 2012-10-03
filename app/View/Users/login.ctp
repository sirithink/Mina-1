    <div class="span6">
    	<h1>LittleOnesOnline Admin</h1>
    	
    	<?php 
    		if (isset($login_error)) {
    			?>
    			<div class="alert alert-error"><?php echo $this->Session->flash(); ?></div>
    			<?php
    		}
    	?>
    	<?php 
    		echo $this->Form->create(NULL,array('url'=>'login'));
    		echo $this->Form->input('User.username',array('placeholder'=>'mina'));
    		echo $this->Form->input('User.password',array('placeholder'=>'123456'));
    		echo $this->Form->button('Login',array('type'=>'submit','class'=>'btn'));
    		echo $this->Form->end();
    	?>
    </div>
