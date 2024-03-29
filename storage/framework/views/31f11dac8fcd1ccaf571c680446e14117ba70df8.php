 <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md  navbar-laravel">
      <div class="container">
          <a class="navbar-brand" href="<?php echo e(url('/homepage')); ?>"style="color: white;">
              <?php echo e(config('ReShoes', 'ReShoes')); ?>

          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- Left Side Of Navbar -->
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="/homepage"style="color: white;" >Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/index" style="color: white;">Order List</a>
                </li>
              </ul>

              <!-- Right Side Of Navbar -->
              <ul class="navbar-nav ml-auto">
                  <!-- Authentication Links -->
                  <?php if(auth()->guard()->guest()): ?>
                      <li class="nav-item">
                          <a class="nav-link" href="<?php echo e(route('login')); ?>" style="color:white"><?php echo e(__('Login')); ?></a>
                      </li>
                      <li class="nav-item">
                          <?php if(Route::has('register')): ?>
                              <a class="nav-link" href="<?php echo e(route('register')); ?>" style="color:white"><?php echo e(__('Register')); ?></a>
                          <?php endif; ?>    
                      </li>
                  <?php else: ?>
                      <li class="nav-item dropdown" >
                          <a style="color: white;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a style="color: black;" class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                  <?php echo e(__('Logout')); ?>

                              </a>

                              <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                  <?php echo csrf_field(); ?>
                              </form>
                          </div>
                      </li>
                  <?php endif; ?>
              </ul>
          </div>
      </div>
  </nav>
