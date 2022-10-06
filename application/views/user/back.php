    <div class="wrapper">

        <header class="main-header">
            <nav class="navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="<?= base_url(); ?>" class="navbar-brand" style="margin-left: 0">App Perpus</a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="<?= ($title == 'Home') ? 'active' : '' ?>"><a href="<?= base_url('/') ?>">Home</a></li>
                            <li class="<?= ($title == 'Buku') ? 'active' : '' ?>"><a href="<?= base_url('page/buku') ?>">Buku</a></li>
                            <?php if (isset($_SESSION['isLogin'])) : ?>
                                <li class="<?= ($title == 'History') ? 'active' : '' ?>"><a href="<?= base_url('page/history') ?>">Riwayat</a></li>
                            <?php endif; ?>
                            <li class="<?= ($title == 'Tentang') ? 'active' : '' ?>"><a href="<?= base_url('page/tentang') ?>">Tentang</a></li>
                            <li class="<?= ($title == 'Kontak') ? 'active' : '' ?>"><a href="<?= base_url('page/kontak') ?>">Kontak Kami</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <?php if (isset($_SESSION['isLogin'])) : ?>
                                <!-- User Account Menu -->
                                <li class="dropdown user user-menu">
                                    <!-- Menu Toggle Button -->
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="<?= base_url($this->session->userdata('foto') ? 'assets/img/profile/' . $this->session->userdata('foto') : 'assets/img/avatar.jpg ') ?>" class="user-image" alt="User Image">
                                        <span class="hidden-xs"><?= $this->session->userdata('nama') ?></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- The user image in the menu -->
                                        <li class="user-header">
                                            <img src="<?= base_url($this->session->userdata('foto') ? 'assets/img/profile/' . $this->session->userdata('foto') : 'assets/img/avatar.jpg ') ?>" class="img-circle" alt="User Image">
                                            <p><?= $this->session->userdata('nama') ?></p>
                                        </li>
                                        <!-- Menu Footer-->
                                        <li class="user-footer">
                                            <div class="pull-left">
                                                <?php
                                                if ($this->session->userdata('hak_akses') === 'admin') : ?>
                                                    <a href="<?= base_url('admin/profile') ?>" class="btn btn-default btn-flat">Profile</a>
                                                <?php else : ?>
                                                    <a href="<?= base_url('user/profile') ?>" class="btn btn-default btn-flat">Profile</a>
                                                <?php endif; ?>
                                            </div>
                                            <div class="pull-right">
                                                <a href="<?= base_url('auth/logout') ?>" onclick="return confirm('apakah anda yakin?')" class="btn btn-default btn-flat">Sign out</a>
                                            </div>
                                        </li>

                                    </ul>
                                </li>
                            <?php else : ?>
                                <li class="<?= ($title == 'Login') ? 'active' : '' ?>"><a href="<?= base_url('page/login') ?>">Login</a></li>
                                <li class="<?= ($title == 'Register') ? 'active' : '' ?>"><a href="<?= base_url('page/register') ?>">Register</a></li>
                            <?php endif; ?>

                        </ul>
                    </div>
                    <!-- /.navbar-custom-menu -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>