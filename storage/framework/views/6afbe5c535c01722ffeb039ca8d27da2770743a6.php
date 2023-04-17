
<?php if(auth::user()->role == 'Pemilik' || Auth::user()->role == 'Admin'): ?>
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>
  <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top navbar-light navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                  <ul class="nav navbar-nav">
                      <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                  </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                  <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                  <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span class="badge badge-pill badge-primary badge-up"><?php echo e(getNotifikasi()->count()); ?></span></a>
                      <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header m-0 p-2">
                                <h3 class="white"><?php echo e(getNotifikasi()->count()); ?></h3><span class="grey darken-2">Notifications</span>
                            </div>
                        </li>

                        <li class="scrollable-container media-list">
                          <?php $__currentLoopData = getNotifikasi(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notif): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="d-flex" href="<?php echo e(url('pemilik/room',$notif->key)); ?>">
                              <div class="media d-flex align-items-start">
                                <div class="media-left">
                                  <div class="">
                                      <h2><i class="feather icon-dollar-sign" class="avatar-icon mr-10"></i></h2>
                                  </div>
                                </div>
                                <div class="media-body">
                                  <p class="media-heading"><span class="font-weight-bolder">
                                  <span style="color: rgb(0, 106, 255)">Pembayaran Masuk</span> <br>
                                  <small class="notification-text"> <?php echo e(countBook()); ?> Pembayaran Menuggu Konfirmasi</small>
                                  </p>
                                </div>
                              </div>
                            </a>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </li>
                        <?php if(getNotifikasi()->count() >= 6): ?>
                          <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="javascript:void(0)">Read all notifications</a></li>
                        <?php endif; ?>
                      </ul>
                  </li>
                  <li class="dropdown dropdown-user nav-item">
                    <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                      <div class="user-nav d-sm-flex d-none">
                        <span class="user-name text-bold-600"><?php echo e(Auth::user()->name); ?></span>
                        <span class="user-status"><?php echo e(Auth::user()->role); ?></span>
                      </div>
                      <span>
                        <?php if(Auth::user()->foto == NULL): ?>
                          <img class="round" src="<?php echo e(asset('assets/images/profile/profile.jpg')); ?>" alt="avatar" height="40" width="40">
                        <?php else: ?>
                          <img class="round" src="<?php echo e(url('storage/images/foto_profile/'. Auth::user()->foto)); ?>" alt="avatar" height="40" width="40">
                        <?php endif; ?>
                      </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="<?php echo e(url('profile')); ?>"><i class="feather icon-user"></i>Profile</a>
                      
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                        <i class="feather icon-power"></i> Logout
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>
                      </a>
                    </div>
                  </li>
                </ul>
            </div>
        </div>
    </div>
  </nav>
<?php elseif(auth::user()->role == 'Pencari'): ?>
<div class="content-overlay"></div>
  <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-fixed navbar-brand-center">
      <div class="navbar-header d-xl-block d-none">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item">
              <a class="navbar-brand" href="<?php echo e(url('/home')); ?>">
                  <div class="brand-logo"></div>
                  <h2 class="brand-text mb-0">Kost-Able</h2>
              </a>
            </li>
        </ul>
      </div>
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="navbar-collapse" id="navbar-mobile">
              <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav">
                  <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                </ul>
              </div>
              <ul class="nav navbar-nav float-right">
                <li class="nav-item d-none d-lg-block">
                  <a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a>
                </li>
                <li class="dropdown dropdown-notification nav-item">
                  <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i>
                    <span class="badge badge-pill badge-primary badge-up">0</span>
                  </a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                      <li class="dropdown-menu-header">
                        <div class="dropdown-header m-0 p-2">
                          <h3 class="white">0</h3><span class="notification-title">App Notifications</span>
                        </div>
                      </li>
                    </ul>
                </li>
                 <li class="dropdown dropdown-user nav-item">
                    <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                      <div class="user-nav d-sm-flex d-none">
                        <span class="user-name text-bold-600"><?php echo e(Auth::user()->name); ?></span>
                        <span class="user-status"><?php echo e(Auth::user()->role); ?></span>
                      </div>
                      <span>
                        <?php if(Auth::user()->foto == NULL): ?>
                          <img class="round" src="<?php echo e(asset('assets/images/profile/profile.jpg')); ?>" alt="avatar" height="40" width="40">
                        <?php else: ?>
                          <img class="round" src="<?php echo e(asset('storage/images/foto_profile/'. Auth::user()->foto)); ?>" alt="avatar" height="40" width="40">
                        <?php endif; ?>
                      </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="<?php echo e(url('profile')); ?>"><i class="feather icon-user"></i>Profile</a>
                      <a class="dropdown-item" href="<?php echo e(url('user/tagihan')); ?>"><i class="feather icon-book"></i> Tagihan</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                        <i class="feather icon-power"></i> Logout
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>
                      </a>
                    </div>
                  </li>
              </ul>
          </div>
        </div>
      </div>
  </nav>
<?php endif; ?>

<?php /**PATH C:\xampp\htdocs\papikos\resources\views/layouts/backend/header.blade.php ENDPATH**/ ?>