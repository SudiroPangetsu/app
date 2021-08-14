<!-- Begin page -->
<div id="wrapper">


    <!-- Topbar Start -->
    <div class="navbar-custom">
        <ul class="list-unstyled topnav-menu float-right mb-0">
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="<?= base_url('assets/img/profile/') .  $user['gambar']; ?> " alt="user-image" class="rounded-circle">
                    <span class="d-none d-sm-inline-block ml-1 font-weight-medium"><?= $user['nama'];; ?></span>
                    <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title bg-dark">
                        <h6 class="text-overflow text-white m-0">Welcome !</h6>
                    </div>

                    <!-- item-->
                    <a href="<?= base_url('user/profil'); ?>" class="dropdown-item notify-item">
                        <i class="mdi mdi-account-outline"></i>
                        <span>Profile</span>
                    </a>

                    <div class="dropdown-divider"></div>
                    <!-- item-->
                    <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item notify-item">
                        <i class="mdi mdi-logout-variant"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </li>
        </ul>

        <!-- LOGO -->
        <div class="logo-box">
            <a href="<?= base_url('dashboard'); ?>" class="logo text-center logo-dark">
                <span class="logo-lg">
                    <img src="<?= base_url(); ?>assets/img/jatisaba.png" alt="jatisab-text" height="35">
                    <!-- <span class="logo-lg-text-dark">Uplon</span> -->
                </span>
                <span class="logo-sm">
                    <!-- <span class="logo-lg-text-dark">U</span> -->
                    <img src="<?= base_url(); ?>assets/img/banyumas.png" alt="banyumas-logo" height="24">
                </span>
            </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="mdi mdi-menu"></i>
                </button>
            </li>

        </ul>
    </div>
    <!-- end Topbar -->


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu">

        <div class="slimscroll-menu">

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul class="metismenu" id="side-menu">

                    <li class="menu-title">Navigation</li>

                    <li>
                        <a href="<?= base_url('dashboard'); ?>">
                            <i class="mdi mdi-view-dashboard"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('Statistik'); ?>">
                            <i class="fas fa-chart-area"></i>
                            <span> Stastistik </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript: void(0);">
                            <i class=" far fa-bookmark  "></i>
                            <span> Kluster </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="<?= base_url('kategori/kluster_k1'); ?>">kluater 1</a></li>
                            <li><a href="<?= base_url('kategori/kluster_k2'); ?>">kluater 2</a></li>
                            <li><a href="<?= base_url('kategori/kluster_k3'); ?>">kluater 3</a></li>
                            <li><a href="<?= base_url('kategori/kluster_k4'); ?>">kluater 4</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);">
                            <i class=" fas fa-bookmark "></i>
                            <span> Blok </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="<?= base_url('kategori/blok_1'); ?>">blok 1</a></li>
                            <li><a href="<?= base_url('kategori/blok_2'); ?>">blok 2</a></li>
                            <li><a href="<?= base_url('kategori/blok_3'); ?>">blok 3</a></li>
                            <li><a href="<?= base_url('kategori/blok_4'); ?>">blok 4</a></li>
                            <li><a href="<?= base_url('kategori/blok_5'); ?>">blok 5</a></li>
                            <li><a href="<?= base_url('kategori/blok_6'); ?>">blok 6</a></li>
                            <li><a href="<?= base_url('kategori/blok_7'); ?>">blok 7</a></li>
                            <li><a href="<?= base_url('kategori/blok_8'); ?>">blok 8</a></li>
                            <li><a href="<?= base_url('kategori/blok_9'); ?>">blok 9</a></li>
                            <li><a href="<?= base_url('kategori/blok_10'); ?>">blok 10</a></li>
                            <li><a href="<?= base_url('kategori/blok_11'); ?>">blok 11</a></li>
                            <li><a href="<?= base_url('kategori/blok_12'); ?>">blok 12</a></li>
                            <li><a href="<?= base_url('kategori/blok_13'); ?>">blok 13</a></li>
                            <li><a href="<?= base_url('kategori/blok_14'); ?>">blok 14</a></li>
                            <li><a href="<?= base_url('kategori/blok_15'); ?>">blok 15</a></li>
                            <li><a href="<?= base_url('kategori/blok_16'); ?>">blok 16</a></li>
                            <li><a href="<?= base_url('kategori/blok_17'); ?>">blok 17</a></li>
                            <li><a href="<?= base_url('kategori/blok_18'); ?>">blok 18</a></li>
                            <li><a href="<?= base_url('kategori/blok_19'); ?>">blok 19</a></li>
                            <li><a href="<?= base_url('kategori/blok_20'); ?>">blok 20</a></li>
                            <li><a href="<?= base_url('kategori/blok_21'); ?>">blok 21</a></li>
                            <li><a href="<?= base_url('kategori/blok_22'); ?>">blok 22</a></li>
                            <li><a href="<?= base_url('kategori/blok_23'); ?>">blok 23</a></li>
                            <li><a href="<?= base_url('kategori/blok_24'); ?>">blok 24</a></li>
                            <li><a href="<?= base_url('kategori/blok_25'); ?>">blok 25</a></li>
                            <li><a href="<?= base_url('kategori/blok_26'); ?>">blok 26</a></li>
                            <li><a href="<?= base_url('kategori/blok_27'); ?>">blok 27</a></li>
                            <li><a href="<?= base_url('kategori/blok_27'); ?>">blok 28</a></li>
                            <li><a href="<?= base_url('kategori/blok_29'); ?>">blok 29</a></li>
                            <li><a href="<?= base_url('kategori/blok_30'); ?>">blok 30</a></li>
                            <li><a href="<?= base_url('kategori/blok_31'); ?>">blok 31</a></li>
                            <li><a href="<?= base_url('kategori/blok_32'); ?>">blok 32</a></li>
                            <li><a href="<?= base_url('kategori/blok_33'); ?>">blok 33</a></li>
                            <li><a href="<?= base_url('kategori/blok_34'); ?>">blok 34</a></li>
                            <li><a href="<?= base_url('kategori/blok_35'); ?>">blok 35</a></li>
                            <li><a href="<?= base_url('kategori/blok_36'); ?>">blok 36</a></li>
                            <li><a href="<?= base_url('kategori/blok_37'); ?>">blok 37</a></li>
                            <li><a href="<?= base_url('kategori/blok_38'); ?>">blok 38</a></li>
                            <li><a href="<?= base_url('kategori/blok_39'); ?>">blok 39</a></li>
                            <li><a href="<?= base_url('kategori/blok_40'); ?>">blok 40</a></li>
                            <li><a href="<?= base_url('kategori/blok_41'); ?>">blok 41</a></li>
                            <li><a href="<?= base_url('kategori/blok_42'); ?>">blok 42</a></li>
                            <li><a href="<?= base_url('kategori/blok_43'); ?>">blok 43</a></li>
                            <li><a href="<?= base_url('kategori/blok_44'); ?>">blok 44</a></li>
                            <li><a href="<?= base_url('kategori/blok_45'); ?>">blok 45</a></li>
                            <li><a href="<?= base_url('kategori/blok_46'); ?>">blok 46</a></li>
                            <li><a href="<?= base_url('kategori/blok_47'); ?>">blok 47</a></li>
                            <li><a href="<?= base_url('kategori/blok_48'); ?>">blok 48</a></li>
                            <li><a href="<?= base_url('kategori/blok_49'); ?>">blok 49</a></li>
                            <li><a href="<?= base_url('kategori/blok_50'); ?>">blok 50</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= base_url('auth/logout'); ?>">
                            <i class=" fas fa-sign-out-alt "></i>
                            <span> Log Out </span>
                        </a>
                    </li>

                </ul>

            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->