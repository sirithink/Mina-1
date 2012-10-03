    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">LittleOnesOnline</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Logged in as <?php echo ucfirst($this->Session->read('username')); ?>,&nbsp;
              <?php echo $this->Html->link('Logout',array('controller'=>'Users','action'=>'logout'),array('class'=>'navbar-link')); ?>
            </p>
            <ul class="nav">
              <li class="active"><a href="#">Categories</a></li>
              <li><a href="#about">Orders</a></li>
              <li><a href="#contact">Customers</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>