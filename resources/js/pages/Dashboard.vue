<template>
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
     <Sidebar></Sidebar>
        <!-- / Menu -->
        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="ti ti-menu-2 ti-sm"></i>
              </a>
            </div>
            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item navbar-search-wrapper mb-0">
                  <a class="nav-item nav-link search-toggler d-flex align-items-center px-0" href="javascript:void(0);">
                    <i class="ti ti-search ti-md me-2"></i>
                    <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                  </a>
                </div>
              </div>
              <!-- /Search -->
              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Language -->
                <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <i class="ti ti-language rounded-circle ti-md"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item active" href="javascript:void(0);" data-language="en" data-text-direction="ltr">
                        <span class="align-middle">English</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="fr" data-text-direction="ltr">
                        <span class="align-middle">French</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="ar" data-text-direction="rtl">
                        <span class="align-middle">Arabic</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="de" data-text-direction="ltr">
                        <span class="align-middle">German</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ Language -->

                <!-- Style Switcher -->
                <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <i class="ti ti-md ti-sun"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                        <span class="align-middle"><i class="ti ti-sun me-2"></i>Light</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                        <span class="align-middle"><i class="ti ti-moon me-2"></i>Dark</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                        <span class="align-middle"><i class="ti ti-device-desktop me-2"></i>System</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- / Style Switcher-->

                <!-- Quick links  -->
                <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <i class="ti ti-layout-grid-add ti-md"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end py-0">
                    <div class="dropdown-menu-header border-bottom">
                      <div class="dropdown-header d-flex align-items-center py-3">
                        <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                        <a href="javascript:void(0)" class="dropdown-shortcuts-add text-body" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add shortcuts" data-bs-original-title="Add shortcuts"><i class="ti ti-sm ti-apps"></i></a>
                      </div>
                    </div>
                    <div class="dropdown-shortcuts-list scrollable-container ps">
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                            <i class="ti ti-calendar fs-4"></i>
                          </span>
                          <a href="app-calendar.html" class="stretched-link">Calendar</a>
                          <small class="text-muted mb-0">Appointments</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                            <i class="ti ti-file-invoice fs-4"></i>
                          </span>
                          <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
                          <small class="text-muted mb-0">Manage Accounts</small>
                        </div>
                      </div>
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                            <i class="ti ti-users fs-4"></i>
                          </span>
                          <a href="app-user-list.html" class="stretched-link">User App</a>
                          <small class="text-muted mb-0">Manage Users</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                            <i class="ti ti-lock fs-4"></i>
                          </span>
                          <a href="app-access-roles.html" class="stretched-link">Role Management</a>
                          <small class="text-muted mb-0">Permission</small>
                        </div>
                      </div>
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                            <i class="ti ti-chart-bar fs-4"></i>
                          </span>
                          <a href="index.html" class="stretched-link">Dashboard</a>
                          <small class="text-muted mb-0">User Profile</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                            <i class="ti ti-settings fs-4"></i>
                          </span>
                          <a href="pages-account-settings-account.html" class="stretched-link">Setting</a>
                          <small class="text-muted mb-0">Account Settings</small>
                        </div>
                      </div>
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                            <i class="ti ti-help fs-4"></i>
                          </span>
                          <a href="pages-faq.html" class="stretched-link">FAQs</a>
                          <small class="text-muted mb-0">FAQs &amp; Articles</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                            <i class="ti ti-square fs-4"></i>
                          </span>
                          <a href="modal-examples.html" class="stretched-link">Modals</a>
                          <small class="text-muted mb-0">Useful Popups</small>
                        </div>
                      </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                  </div>
                </li>
                <!-- Quick links -->

                <!-- Notification -->
                <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <i class="ti ti-bell ti-md"></i>
                    <span class="badge bg-danger rounded-pill badge-notifications">5</span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end py-0">
                    <li class="dropdown-menu-header border-bottom">
                      <div class="dropdown-header d-flex align-items-center py-3">
                        <h5 class="text-body mb-0 me-auto">Notification</h5>
                        <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Mark all as read" data-bs-original-title="Mark all as read"><i class="ti ti-mail-opened fs-4"></i></a>
                      </div>
                    </li>
                    <li class="dropdown-notifications-list scrollable-container ps">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img :src="imageUrl1" alt="" class="h-auto rounded-circle">
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                              <p class="mb-0">Won the monthly best seller gold badge</p>
                              <small class="text-muted">1h ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">Charles Franklin</h6>
                              <p class="mb-0">Accepted your connection</p>
                              <small class="text-muted">12hr ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img :src="imageUrl2" alt="" class="h-auto rounded-circle">
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">New Message ✉️</h6>
                              <p class="mb-0">You have new message from Natalie</p>
                              <small class="text-muted">1h ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-success"><i class="ti ti-shopping-cart"></i></span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">Whoo! You have new order 🛒</h6>
                              <p class="mb-0">ACME Inc. made new order $1,154</p>
                              <small class="text-muted">1 day ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img :src="imageUrl3" alt="" class="h-auto rounded-circle">
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">Application has been approved 🚀</h6>
                              <p class="mb-0">Your ABC project application has been approved.</p>
                              <small class="text-muted">2 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-success"><i class="ti ti-chart-pie"></i></span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">Monthly report is generated</h6>
                              <p class="mb-0">July monthly financial report is generated</p>
                              <small class="text-muted">3 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img :src="imageUrl4" alt="" class="h-auto rounded-circle">
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">Send connection request</h6>
                              <p class="mb-0">Peter sent you connection request</p>
                              <small class="text-muted">4 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img :src="imageUrl5" alt="" class="h-auto rounded-circle">
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">New message from Jane</h6>
                              <p class="mb-0">Your have new message from Jane</p>
                              <small class="text-muted">5 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-warning"><i class="ti ti-alert-triangle"></i></span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">CPU is running high</h6>
                              <p class="mb-0">CPU Utilization Percent is currently at 88.63%,</p>
                              <small class="text-muted">5 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                            </div>
                          </div>
                        </li>
                      </ul>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></li>
                    <li class="dropdown-menu-footer border-top">
                      <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center text-primary p-2 h-px-40 mb-1 align-items-center">
                        View all notifications
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ Notification -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img :src="imageUrl1" alt="" class="h-auto rounded-circle">
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="pages-account-settings-account.html">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img :src="imageUrl1" alt="" class="h-auto rounded-circle">
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-medium d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-profile-user.html">
                        <i class="ti ti-user-check me-2 ti-sm"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-account-settings-account.html">
                        <i class="ti ti-settings me-2 ti-sm"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-account-settings-billing.html">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 ti ti-credit-card me-2 ti-sm"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-label-danger w-px-20 h-px-20">2</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-faq.html">
                        <i class="ti ti-help me-2 ti-sm"></i>
                        <span class="align-middle">FAQ</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-pricing.html">
                        <i class="ti ti-currency-dollar me-2 ti-sm"></i>
                        <span class="align-middle">Pricing</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                        <i class="ti ti-logout me-2 ti-sm"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
            <!-- Search Small Screens -->
            <div class="navbar-search-wrapper search-input-wrapper d-none">
              <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
              <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
            </div>
          </nav>
          <!-- / Navbar -->
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <!-- Website Analytics -->
                <div class="col-lg-6 mb-4">
                  <div class="swiper-container swiper-container-horizontal swiper swiper-card-advance-bg swiper-initialized swiper-horizontal swiper-backface-hidden" id="swiper-with-pagination-cards">
                    <div class="swiper-wrapper" id="swiper-wrapper-3a78822c9a21f419" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-1368px, 0px, 0px);">
                      
                      
                      
                    <div class="swiper-slide swiper-slide-next" role="group" aria-label="1 / 3" data-swiper-slide-index="0" style="width: 684px;">
                        <div class="row">
                          <div class="col-12">
                            <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
                            <small>Total 28.5% Conversion Rate</small>
                          </div>
                          <div class="row">
                            <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                              <h6 class="text-white mt-0 mt-md-3 mb-3">Traffic</h6>
                              <div class="row">
                                <div class="col-6">
                                  <ul class="list-unstyled mb-0">
                                    <li class="d-flex mb-4 align-items-center">
                                      <p class="mb-0 fw-medium me-2 website-analytics-text-bg">28%</p>
                                      <p class="mb-0">Sessions</p>
                                    </li>
                                    <li class="d-flex align-items-center mb-2">
                                      <p class="mb-0 fw-medium me-2 website-analytics-text-bg">1.2k</p>
                                      <p class="mb-0">Leads</p>
                                    </li>
                                  </ul>
                                </div>
                                <div class="col-6">
                                  <ul class="list-unstyled mb-0">
                                    <li class="d-flex mb-4 align-items-center">
                                      <p class="mb-0 fw-medium me-2 website-analytics-text-bg">3.1k</p>
                                      <p class="mb-0">Page Views</p>
                                    </li>
                                    <li class="d-flex align-items-center mb-2">
                                      <p class="mb-0 fw-medium me-2 website-analytics-text-bg">12%</p>
                                      <p class="mb-0">Conversions</p>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                              <img :src="imageUrl6" alt="Website Analytics" width="170" class="card-website-analytics-img">
                            </div>
                          </div>
                        </div>
                      </div><div class="swiper-slide swiper-slide-prev" role="group" aria-label="2 / 3" data-swiper-slide-index="1" style="width: 684px;">
                        <div class="row">
                          <div class="col-12">
                            <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
                            <small>Total 28.5% Conversion Rate</small>
                          </div>
                          <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                            <h6 class="text-white mt-0 mt-md-3 mb-3">Spending</h6>
                            <div class="row">
                              <div class="col-6">
                                <ul class="list-unstyled mb-0">
                                  <li class="d-flex mb-4 align-items-center">
                                    <p class="mb-0 fw-medium me-2 website-analytics-text-bg">12h</p>
                                    <p class="mb-0">Spend</p>
                                  </li>
                                  <li class="d-flex align-items-center mb-2">
                                    <p class="mb-0 fw-medium me-2 website-analytics-text-bg">127</p>
                                    <p class="mb-0">Order</p>
                                  </li>
                                </ul>
                              </div>
                              <div class="col-6">
                                <ul class="list-unstyled mb-0">
                                  <li class="d-flex mb-4 align-items-center">
                                    <p class="mb-0 fw-medium me-2 website-analytics-text-bg">18</p>
                                    <p class="mb-0">Order Size</p>
                                  </li>
                                  <li class="d-flex align-items-center mb-2">
                                    <p class="mb-0 fw-medium me-2 website-analytics-text-bg">2.3k</p>
                                    <p class="mb-0">Items</p>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                            <img :src="imageUrl7" alt="Website Analytics" width="170" class="card-website-analytics-img">
                          </div>
                        </div>
                      </div><div class="swiper-slide swiper-slide-active" role="group" aria-label="3 / 3" data-swiper-slide-index="2" style="width: 684px;">
                        <div class="row">
                          <div class="col-12">
                            <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
                            <small>Total 28.5% Conversion Rate</small>
                          </div>
                          <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                            <h6 class="text-white mt-0 mt-md-3 mb-3">Revenue Sources</h6>
                            <div class="row">
                              <div class="col-6">
                                <ul class="list-unstyled mb-0">
                                  <li class="d-flex mb-4 align-items-center">
                                    <p class="mb-0 fw-medium me-2 website-analytics-text-bg">268</p>
                                    <p class="mb-0">Direct</p>
                                  </li>
                                  <li class="d-flex align-items-center mb-2">
                                    <p class="mb-0 fw-medium me-2 website-analytics-text-bg">62</p>
                                    <p class="mb-0">Referral</p>
                                  </li>
                                </ul>
                              </div>
                              <div class="col-6">
                                <ul class="list-unstyled mb-0">
                                  <li class="d-flex mb-4 align-items-center">
                                    <p class="mb-0 fw-medium me-2 website-analytics-text-bg">890</p>
                                    <p class="mb-0">Organic</p>
                                  </li>
                                  <li class="d-flex align-items-center mb-2">
                                    <p class="mb-0 fw-medium me-2 website-analytics-text-bg">1.2k</p>
                                    <p class="mb-0">Campaign</p>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                            <img :src="imageUrl8" alt="Website Analytics" width="170" class="card-website-analytics-img">
                          </div>
                        </div>
                      </div></div>
                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3" aria-current="true"></span></div>
                  <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
                <!--/ Website Analytics -->

                <!-- Sales Overview -->
                <div class="col-lg-3 col-sm-6 mb-4">
                  <div class="card">
                    <div class="card-header">
                      <div class="d-flex justify-content-between">
                        <small class="d-block mb-1 text-muted">Sales Overview</small>
                        <p class="card-text text-success">+18.2%</p>
                      </div>
                      <h4 class="card-title mb-1">$42.5k</h4>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-4">
                          <div class="d-flex gap-2 align-items-center mb-2">
                            <span class="badge bg-label-info p-1 rounded"><i class="ti ti-shopping-cart ti-xs"></i></span>
                            <p class="mb-0">Order</p>
                          </div>
                          <h5 class="mb-0 pt-1 text-nowrap">62.2%</h5>
                          <small class="text-muted">6,440</small>
                        </div>
                        <div class="col-4">
                          <div class="divider divider-vertical">
                            <div class="divider-text">
                              <span class="badge-divider-bg bg-label-secondary">VS</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-4 text-end">
                          <div class="d-flex gap-2 justify-content-end align-items-center mb-2">
                            <p class="mb-0">Visits</p>
                            <span class="badge bg-label-primary p-1 rounded"><i class="ti ti-link ti-xs"></i></span>
                          </div>
                          <h5 class="mb-0 pt-1 text-nowrap ms-lg-n3 ms-xl-0">25.5%</h5>
                          <small class="text-muted">12,749</small>
                        </div>
                      </div>
                      <div class="d-flex align-items-center mt-4">
                        <div class="progress w-100" style="height: 8px">
                          <div class="progress-bar bg-info" style="width: 70%" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Sales Overview -->

                <!-- Revenue Generated -->
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                  <div class="card">
                    <div class="card-body pb-0">
                      <div class="card-icon">
                        <span class="badge bg-label-success rounded-pill p-2">
                          <i class="ti ti-credit-card ti-sm"></i>
                        </span>
                      </div>
                      <h5 class="card-title mb-0 mt-2">97.5k</h5>
                      <small>Revenue Generated</small>
                    </div>
                    <div id="revenueGenerated" style="min-height: 130px;"><div id="apexchartskwxkzls1" class="apexcharts-canvas apexchartskwxkzls1 apexcharts-theme-light" style="width: 330px; height: 130px;"><svg id="SvgjsSvg1416" width="330" height="130" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1418" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1417"><clipPath id="gridRectMaskkwxkzls1"><rect id="SvgjsRect1423" width="336" height="132" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskkwxkzls1"></clipPath><clipPath id="nonForecastMaskkwxkzls1"></clipPath><clipPath id="gridRectMarkerMaskkwxkzls1"><rect id="SvgjsRect1424" width="334" height="134" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1429" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1430" stop-opacity="0.6" stop-color="rgba(40,199,111,0.6)" offset="0"></stop><stop id="SvgjsStop1431" stop-opacity="0.1" stop-color="rgba(212,244,226,0.1)" offset="1"></stop><stop id="SvgjsStop1432" stop-opacity="0.1" stop-color="rgba(212,244,226,0.1)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1422" x1="0" y1="0" x2="0" y2="130" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="130" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1435" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1436" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1445" class="apexcharts-grid"><g id="SvgjsG1446" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1448" x1="0" y1="0" x2="330" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1449" x1="0" y1="26" x2="330" y2="26" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1450" x1="0" y1="52" x2="330" y2="52" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1451" x1="0" y1="78" x2="330" y2="78" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1452" x1="0" y1="104" x2="330" y2="104" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1453" x1="0" y1="130" x2="330" y2="130" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1447" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1455" x1="0" y1="130" x2="330" y2="130" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1454" x1="0" y1="1" x2="0" y2="130" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1425" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1426" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1433" d="M 0 130L 0 104C 19.25 104 35.75 60.66666666666663 55 60.66666666666663C 74.25 60.66666666666663 90.75 78 110 78C 129.25 78 145.75 34.66666666666663 165 34.66666666666663C 184.25 34.66666666666663 200.75 69.33333333333331 220 69.33333333333331C 239.25 69.33333333333331 255.75 17.333333333333314 275 17.333333333333314C 294.25 17.333333333333314 310.75 34.66666666666663 330 34.66666666666663C 330 34.66666666666663 330 34.66666666666663 330 130M 330 34.66666666666663z" fill="url(#SvgjsLinearGradient1429)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskkwxkzls1)" pathTo="M 0 130L 0 104C 19.25 104 35.75 60.66666666666663 55 60.66666666666663C 74.25 60.66666666666663 90.75 78 110 78C 129.25 78 145.75 34.66666666666663 165 34.66666666666663C 184.25 34.66666666666663 200.75 69.33333333333331 220 69.33333333333331C 239.25 69.33333333333331 255.75 17.333333333333314 275 17.333333333333314C 294.25 17.333333333333314 310.75 34.66666666666663 330 34.66666666666663C 330 34.66666666666663 330 34.66666666666663 330 130M 330 34.66666666666663z" pathFrom="M -1 364L -1 364L 55 364L 110 364L 165 364L 220 364L 275 364L 330 364"></path><path id="SvgjsPath1434" d="M 0 104C 19.25 104 35.75 60.66666666666663 55 60.66666666666663C 74.25 60.66666666666663 90.75 78 110 78C 129.25 78 145.75 34.66666666666663 165 34.66666666666663C 184.25 34.66666666666663 200.75 69.33333333333331 220 69.33333333333331C 239.25 69.33333333333331 255.75 17.333333333333314 275 17.333333333333314C 294.25 17.333333333333314 310.75 34.66666666666663 330 34.66666666666663" fill="none" fill-opacity="1" stroke="#28c76f" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskkwxkzls1)" pathTo="M 0 104C 19.25 104 35.75 60.66666666666663 55 60.66666666666663C 74.25 60.66666666666663 90.75 78 110 78C 129.25 78 145.75 34.66666666666663 165 34.66666666666663C 184.25 34.66666666666663 200.75 69.33333333333331 220 69.33333333333331C 239.25 69.33333333333331 255.75 17.333333333333314 275 17.333333333333314C 294.25 17.333333333333314 310.75 34.66666666666663 330 34.66666666666663" pathFrom="M -1 364L -1 364L 55 364L 110 364L 165 364L 220 364L 275 364L 330 364"></path><g id="SvgjsG1427" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG1428" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1456" x1="0" y1="0" x2="330" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1457" x1="0" y1="0" x2="330" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1458" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1459" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1460" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1421" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1444" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1419" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 65px;"></div></div></div>
                  <div class="resize-triggers"><div class="expand-trigger"><div style="width: 331px; height: 248px;"></div></div><div class="contract-trigger"></div></div></div>
                </div>
                <!--/ Revenue Generated -->

                <!-- Earning Reports -->
                <div class="col-lg-6 mb-4">
                  <div class="card h-100">
                    <div class="card-header pb-0 d-flex justify-content-between mb-lg-n4">
                      <div class="card-title mb-0">
                        <h5 class="mb-0">Earning Reports</h5>
                        <small class="text-muted">Weekly Earnings Overview</small>
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="earningReportsId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsId">
                          <a class="dropdown-item" href="javascript:void(0);">View More</a>
                          <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                        </div>
                      </div>
                      <!-- </div> -->
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12 col-md-4 d-flex flex-column align-self-end">
                          <div class="d-flex gap-2 align-items-center mb-2 pb-1 flex-wrap">
                            <h1 class="mb-0">$468</h1>
                            <div class="badge rounded bg-label-success">+4.2%</div>
                          </div>
                          <small>You informed of this week compared to last week</small>
                        </div>
                        <div class="col-12 col-md-8" style="position: relative;">
                          <div id="weeklyEarningReports" style="min-height: 202px;"><div id="apexcharts066du3oq" class="apexcharts-canvas apexcharts066du3oq apexcharts-theme-light" style="width: 416px; height: 202px;"><svg id="SvgjsSvg1461" width="416" height="202" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1463" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1462"><linearGradient id="SvgjsLinearGradient1466" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1467" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1468" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1469" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMask066du3oq"><rect id="SvgjsRect1471" width="430" height="162.73" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask066du3oq"></clipPath><clipPath id="nonForecastMask066du3oq"></clipPath><clipPath id="gridRectMarkerMask066du3oq"><rect id="SvgjsRect1472" width="430" height="166.73" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1470" width="0" height="162.73" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1466)" class="apexcharts-xcrosshairs" y2="162.73" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1491" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1492" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1494" font-family="Public Sans" x="30.428571428571427" y="191.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1495">Mo</tspan><title>Mo</title></text><text id="SvgjsText1497" font-family="Public Sans" x="91.28571428571428" y="191.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1498">Tu</tspan><title>Tu</title></text><text id="SvgjsText1500" font-family="Public Sans" x="152.14285714285714" y="191.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1501">We</tspan><title>We</title></text><text id="SvgjsText1503" font-family="Public Sans" x="213" y="191.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1504">Th</tspan><title>Th</title></text><text id="SvgjsText1506" font-family="Public Sans" x="273.85714285714283" y="191.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1507">Fr</tspan><title>Fr</title></text><text id="SvgjsText1509" font-family="Public Sans" x="334.71428571428567" y="191.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1510">Sa</tspan><title>Sa</title></text><text id="SvgjsText1512" font-family="Public Sans" x="395.5714285714285" y="191.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1513">Su</tspan><title>Su</title></text></g></g><g id="SvgjsG1516" class="apexcharts-grid"><g id="SvgjsG1517" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1519" x1="0" y1="0" x2="426" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1520" x1="0" y1="32.546" x2="426" y2="32.546" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1521" x1="0" y1="65.092" x2="426" y2="65.092" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1522" x1="0" y1="97.638" x2="426" y2="97.638" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1523" x1="0" y1="130.184" x2="426" y2="130.184" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1524" x1="0" y1="162.73" x2="426" y2="162.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1518" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1526" x1="0" y1="162.73" x2="426" y2="162.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1525" x1="0" y1="1" x2="0" y2="162.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1473" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1474" class="apexcharts-series" rel="1" seriesName="seriesx1" data:realIndex="0"><path id="SvgjsPath1478" d="M 18.865714285714283 158.73L 18.865714285714283 101.63799999999999Q 18.865714285714283 97.63799999999999 22.865714285714283 97.63799999999999L 37.99142857142857 97.63799999999999Q 41.99142857142857 97.63799999999999 41.99142857142857 101.63799999999999L 41.99142857142857 101.63799999999999L 41.99142857142857 158.73Q 41.99142857142857 162.73 37.99142857142857 162.73L 22.865714285714283 162.73Q 18.865714285714283 162.73 18.865714285714283 158.73z" fill="#7367f029" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask066du3oq)" pathTo="M 18.865714285714283 158.73L 18.865714285714283 101.63799999999999Q 18.865714285714283 97.63799999999999 22.865714285714283 97.63799999999999L 37.99142857142857 97.63799999999999Q 41.99142857142857 97.63799999999999 41.99142857142857 101.63799999999999L 41.99142857142857 101.63799999999999L 41.99142857142857 158.73Q 41.99142857142857 162.73 37.99142857142857 162.73L 22.865714285714283 162.73Q 18.865714285714283 162.73 18.865714285714283 158.73z" pathFrom="M 18.865714285714283 158.73L 18.865714285714283 158.73L 41.99142857142857 158.73L 41.99142857142857 158.73L 41.99142857142857 158.73L 41.99142857142857 158.73L 41.99142857142857 158.73L 18.865714285714283 158.73" cy="97.63799999999999" cx="79.72285714285714" j="0" val="40" barHeight="65.092" barWidth="23.125714285714285"></path><path id="SvgjsPath1480" d="M 79.72285714285714 158.73L 79.72285714285714 60.95549999999999Q 79.72285714285714 56.95549999999999 83.72285714285714 56.95549999999999L 98.84857142857142 56.95549999999999Q 102.84857142857142 56.95549999999999 102.84857142857142 60.95549999999999L 102.84857142857142 60.95549999999999L 102.84857142857142 158.73Q 102.84857142857142 162.73 98.84857142857142 162.73L 83.72285714285714 162.73Q 79.72285714285714 162.73 79.72285714285714 158.73z" fill="#7367f029" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask066du3oq)" pathTo="M 79.72285714285714 158.73L 79.72285714285714 60.95549999999999Q 79.72285714285714 56.95549999999999 83.72285714285714 56.95549999999999L 98.84857142857142 56.95549999999999Q 102.84857142857142 56.95549999999999 102.84857142857142 60.95549999999999L 102.84857142857142 60.95549999999999L 102.84857142857142 158.73Q 102.84857142857142 162.73 98.84857142857142 162.73L 83.72285714285714 162.73Q 79.72285714285714 162.73 79.72285714285714 158.73z" pathFrom="M 79.72285714285714 158.73L 79.72285714285714 158.73L 102.84857142857142 158.73L 102.84857142857142 158.73L 102.84857142857142 158.73L 102.84857142857142 158.73L 102.84857142857142 158.73L 79.72285714285714 158.73" cy="56.95549999999999" cx="140.57999999999998" j="1" val="65" barHeight="105.7745" barWidth="23.125714285714285"></path><path id="SvgjsPath1482" d="M 140.57999999999998 158.73L 140.57999999999998 85.365Q 140.57999999999998 81.365 144.57999999999998 81.365L 159.70571428571427 81.365Q 163.70571428571427 81.365 163.70571428571427 85.365L 163.70571428571427 85.365L 163.70571428571427 158.73Q 163.70571428571427 162.73 159.70571428571427 162.73L 144.57999999999998 162.73Q 140.57999999999998 162.73 140.57999999999998 158.73z" fill="#7367f029" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask066du3oq)" pathTo="M 140.57999999999998 158.73L 140.57999999999998 85.365Q 140.57999999999998 81.365 144.57999999999998 81.365L 159.70571428571427 81.365Q 163.70571428571427 81.365 163.70571428571427 85.365L 163.70571428571427 85.365L 163.70571428571427 158.73Q 163.70571428571427 162.73 159.70571428571427 162.73L 144.57999999999998 162.73Q 140.57999999999998 162.73 140.57999999999998 158.73z" pathFrom="M 140.57999999999998 158.73L 140.57999999999998 158.73L 163.70571428571427 158.73L 163.70571428571427 158.73L 163.70571428571427 158.73L 163.70571428571427 158.73L 163.70571428571427 158.73L 140.57999999999998 158.73" cy="81.365" cx="201.43714285714285" j="2" val="50" barHeight="81.365" barWidth="23.125714285714285"></path><path id="SvgjsPath1484" d="M 201.43714285714285 158.73L 201.43714285714285 93.5015Q 201.43714285714285 89.5015 205.43714285714285 89.5015L 220.56285714285713 89.5015Q 224.56285714285713 89.5015 224.56285714285713 93.5015L 224.56285714285713 93.5015L 224.56285714285713 158.73Q 224.56285714285713 162.73 220.56285714285713 162.73L 205.43714285714285 162.73Q 201.43714285714285 162.73 201.43714285714285 158.73z" fill="#7367f029" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask066du3oq)" pathTo="M 201.43714285714285 158.73L 201.43714285714285 93.5015Q 201.43714285714285 89.5015 205.43714285714285 89.5015L 220.56285714285713 89.5015Q 224.56285714285713 89.5015 224.56285714285713 93.5015L 224.56285714285713 93.5015L 224.56285714285713 158.73Q 224.56285714285713 162.73 220.56285714285713 162.73L 205.43714285714285 162.73Q 201.43714285714285 162.73 201.43714285714285 158.73z" pathFrom="M 201.43714285714285 158.73L 201.43714285714285 158.73L 224.56285714285713 158.73L 224.56285714285713 158.73L 224.56285714285713 158.73L 224.56285714285713 158.73L 224.56285714285713 158.73L 201.43714285714285 158.73" cy="89.5015" cx="262.2942857142857" j="3" val="45" barHeight="73.2285" barWidth="23.125714285714285"></path><path id="SvgjsPath1486" d="M 262.2942857142857 158.73L 262.2942857142857 20.272999999999996Q 262.2942857142857 16.272999999999996 266.2942857142857 16.272999999999996L 281.42 16.272999999999996Q 285.42 16.272999999999996 285.42 20.272999999999996L 285.42 20.272999999999996L 285.42 158.73Q 285.42 162.73 281.42 162.73L 266.2942857142857 162.73Q 262.2942857142857 162.73 262.2942857142857 158.73z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask066du3oq)" pathTo="M 262.2942857142857 158.73L 262.2942857142857 20.272999999999996Q 262.2942857142857 16.272999999999996 266.2942857142857 16.272999999999996L 281.42 16.272999999999996Q 285.42 16.272999999999996 285.42 20.272999999999996L 285.42 20.272999999999996L 285.42 158.73Q 285.42 162.73 281.42 162.73L 266.2942857142857 162.73Q 262.2942857142857 162.73 262.2942857142857 158.73z" pathFrom="M 262.2942857142857 158.73L 262.2942857142857 158.73L 285.42 158.73L 285.42 158.73L 285.42 158.73L 285.42 158.73L 285.42 158.73L 262.2942857142857 158.73" cy="16.272999999999996" cx="323.15142857142854" j="4" val="90" barHeight="146.457" barWidth="23.125714285714285"></path><path id="SvgjsPath1488" d="M 323.15142857142854 158.73L 323.15142857142854 77.2285Q 323.15142857142854 73.2285 327.15142857142854 73.2285L 342.27714285714285 73.2285Q 346.27714285714285 73.2285 346.27714285714285 77.2285L 346.27714285714285 77.2285L 346.27714285714285 158.73Q 346.27714285714285 162.73 342.27714285714285 162.73L 327.15142857142854 162.73Q 323.15142857142854 162.73 323.15142857142854 158.73z" fill="#7367f029" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask066du3oq)" pathTo="M 323.15142857142854 158.73L 323.15142857142854 77.2285Q 323.15142857142854 73.2285 327.15142857142854 73.2285L 342.27714285714285 73.2285Q 346.27714285714285 73.2285 346.27714285714285 77.2285L 346.27714285714285 77.2285L 346.27714285714285 158.73Q 346.27714285714285 162.73 342.27714285714285 162.73L 327.15142857142854 162.73Q 323.15142857142854 162.73 323.15142857142854 158.73z" pathFrom="M 323.15142857142854 158.73L 323.15142857142854 158.73L 346.27714285714285 158.73L 346.27714285714285 158.73L 346.27714285714285 158.73L 346.27714285714285 158.73L 346.27714285714285 158.73L 323.15142857142854 158.73" cy="73.2285" cx="384.0085714285714" j="5" val="55" barHeight="89.5015" barWidth="23.125714285714285"></path><path id="SvgjsPath1490" d="M 384.0085714285714 158.73L 384.0085714285714 52.81899999999999Q 384.0085714285714 48.81899999999999 388.0085714285714 48.81899999999999L 403.1342857142857 48.81899999999999Q 407.1342857142857 48.81899999999999 407.1342857142857 52.81899999999999L 407.1342857142857 52.81899999999999L 407.1342857142857 158.73Q 407.1342857142857 162.73 403.1342857142857 162.73L 388.0085714285714 162.73Q 384.0085714285714 162.73 384.0085714285714 158.73z" fill="#7367f029" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask066du3oq)" pathTo="M 384.0085714285714 158.73L 384.0085714285714 52.81899999999999Q 384.0085714285714 48.81899999999999 388.0085714285714 48.81899999999999L 403.1342857142857 48.81899999999999Q 407.1342857142857 48.81899999999999 407.1342857142857 52.81899999999999L 407.1342857142857 52.81899999999999L 407.1342857142857 158.73Q 407.1342857142857 162.73 403.1342857142857 162.73L 388.0085714285714 162.73Q 384.0085714285714 162.73 384.0085714285714 158.73z" pathFrom="M 384.0085714285714 158.73L 384.0085714285714 158.73L 407.1342857142857 158.73L 407.1342857142857 158.73L 407.1342857142857 158.73L 407.1342857142857 158.73L 407.1342857142857 158.73L 384.0085714285714 158.73" cy="48.81899999999999" cx="444.8657142857142" j="6" val="70" barHeight="113.911" barWidth="23.125714285714285"></path><g id="SvgjsG1476" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG1477" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1479" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1481" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1483" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1485" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1487" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1489" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG1475" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1527" x1="0" y1="0" x2="426" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1528" x1="0" y1="0" x2="426" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1529" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1530" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1531" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1514" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)"><g id="SvgjsG1515" class="apexcharts-yaxis-texts-g"></g></g><g id="SvgjsG1464" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 101px;"></div></div></div>
                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 441px; height: 203px;"></div></div><div class="contract-trigger"></div></div></div>
                      </div>
                      <div class="border rounded p-3 mt-4">
                        <div class="row gap-4 gap-sm-0">
                          <div class="col-12 col-sm-4">
                            <div class="d-flex gap-2 align-items-center">
                              <div class="badge rounded bg-label-primary p-1">
                                <i class="ti ti-currency-dollar ti-sm"></i>
                              </div>
                              <h6 class="mb-0">Earnings</h6>
                            </div>
                            <h4 class="my-2 pt-1">$545.69</h4>
                            <div class="progress w-75" style="height: 4px">
                              <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                          <div class="col-12 col-sm-4">
                            <div class="d-flex gap-2 align-items-center">
                              <div class="badge rounded bg-label-info p-1"><i class="ti ti-chart-pie-2 ti-sm"></i></div>
                              <h6 class="mb-0">Profit</h6>
                            </div>
                            <h4 class="my-2 pt-1">$256.34</h4>
                            <div class="progress w-75" style="height: 4px">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                          <div class="col-12 col-sm-4">
                            <div class="d-flex gap-2 align-items-center">
                              <div class="badge rounded bg-label-danger p-1">
                                <i class="ti ti-brand-paypal ti-sm"></i>
                              </div>
                              <h6 class="mb-0">Expense</h6>
                            </div>
                            <h4 class="my-2 pt-1">$74.19</h4>
                            <div class="progress w-75" style="height: 4px">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Earning Reports -->
                <!-- Support Tracker -->
                <div class="col-md-6 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex justify-content-between pb-0">
                      <div class="card-title mb-0">
                        <h5 class="mb-0">Support Tracker</h5>
                        <small class="text-muted">Last 7 Days</small>
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="supportTrackerMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="supportTrackerMenu">
                          <a class="dropdown-item" href="javascript:void(0);">View More</a>
                          <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12 col-sm-4 col-md-12 col-lg-4">
                          <div class="mt-lg-4 mt-lg-2 mb-lg-4 mb-2 pt-1">
                            <h1 class="mb-0">164</h1>
                            <p class="mb-0">Total Tickets</p>
                          </div>
                          <ul class="p-0 m-0">
                            <li class="d-flex gap-3 align-items-center mb-lg-3 pt-2 pb-1">
                              <div class="badge rounded bg-label-primary p-1"><i class="ti ti-ticket ti-sm"></i></div>
                              <div>
                                <h6 class="mb-0 text-nowrap">New Tickets</h6>
                                <small class="text-muted">142</small>
                              </div>
                            </li>
                            <li class="d-flex gap-3 align-items-center mb-lg-3 pb-1">
                              <div class="badge rounded bg-label-info p-1">
                                <i class="ti ti-circle-check ti-sm"></i>
                              </div>
                              <div>
                                <h6 class="mb-0 text-nowrap">Open Tickets</h6>
                                <small class="text-muted">28</small>
                              </div>
                            </li>
                            <li class="d-flex gap-3 align-items-center pb-1">
                              <div class="badge rounded bg-label-warning p-1"><i class="ti ti-clock ti-sm"></i></div>
                              <div>
                                <h6 class="mb-0 text-nowrap">Response Time</h6>
                                <small class="text-muted">1 Day</small>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="col-12 col-sm-8 col-md-12 col-lg-8" style="position: relative;">
                          <div id="supportTracker" style="min-height: 257.9px;"><div id="apexcharts7d543874" class="apexcharts-canvas apexcharts7d543874 apexcharts-theme-light" style="width: 416px; height: 257.9px;"><svg id="SvgjsSvg1532" width="416" height="257.9" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1534" class="apexcharts-inner apexcharts-graphical" transform="translate(41, -10)"><defs id="SvgjsDefs1533"><clipPath id="gridRectMask7d543874"><rect id="SvgjsRect1536" width="342" height="375" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask7d543874"></clipPath><clipPath id="nonForecastMask7d543874"></clipPath><clipPath id="gridRectMarkerMask7d543874"><rect id="SvgjsRect1537" width="340" height="377" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1542" x1="1" y1="0" x2="0" y2="1"><stop id="SvgjsStop1543" stop-opacity="1" stop-color="rgba(115,103,240,1)" offset="0.3"></stop><stop id="SvgjsStop1544" stop-opacity="0.6" stop-color="rgba(255,255,255,0.6)" offset="0.7"></stop><stop id="SvgjsStop1545" stop-opacity="0.6" stop-color="rgba(255,255,255,0.6)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1553" x1="1" y1="0" x2="0" y2="1"><stop id="SvgjsStop1554" stop-opacity="1" stop-color="rgba(115,103,240,1)" offset="0.3"></stop><stop id="SvgjsStop1555" stop-opacity="0.6" stop-color="rgba(115,103,240,0.6)" offset="0.7"></stop><stop id="SvgjsStop1556" stop-opacity="0.6" stop-color="rgba(115,103,240,0.6)" offset="1"></stop></linearGradient></defs><g id="SvgjsG1538" class="apexcharts-radialbar"><g id="SvgjsG1539"><g id="SvgjsG1540" class="apexcharts-tracks"><g id="SvgjsG1541" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 91.53845410946391 259.1233220103534 A 118.9530487804878 118.9530487804878 0 1 1 259.1233220103534 244.46154589053606" fill="none" fill-opacity="1" stroke="rgba(255,255,255,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="22.632926829268296" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 91.53845410946391 259.1233220103534 A 118.9530487804878 118.9530487804878 0 1 1 259.1233220103534 244.46154589053606"></path></g></g><g id="SvgjsG1547"><g id="SvgjsG1552" class="apexcharts-series apexcharts-radial-series" seriesName="CompletedxTask" rel="1" data:realIndex="0"><path id="SvgjsPath1557" d="M 91.53845410946391 259.1233220103534 A 118.9530487804878 118.9530487804878 0 1 1 286.9530487804878 168" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient1553)" stroke-opacity="1" stroke-linecap="butt" stroke-width="22.632926829268296" stroke-dasharray="10" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="230" data:value="85" index="0" j="0" data:pathOrig="M 91.53845410946391 259.1233220103534 A 118.9530487804878 118.9530487804878 0 1 1 286.9530487804878 168"></path></g><circle id="SvgjsCircle1548" r="102.63658536585366" cx="168" cy="168" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1549" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1550" font-family="Public Sans" x="168" y="148" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="500" fill="#a5a3ae" class="apexcharts-text apexcharts-datalabel-label" style="font-family: &quot;Public Sans&quot;;">Completed Task</text><text id="SvgjsText1551" font-family="Public Sans" x="168" y="194" text-anchor="middle" dominant-baseline="auto" font-size="38px" font-weight="500" fill="#5d596c" class="apexcharts-text apexcharts-datalabel-value" style="font-family: &quot;Public Sans&quot;;">85%</text></g></g></g></g><line id="SvgjsLine1558" x1="0" y1="0" x2="336" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1559" x1="0" y1="0" x2="336" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1535" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 441px; height: 307px;"></div></div><div class="contract-trigger"></div></div></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Support Tracker -->
                <!-- Sales By Country -->
                <div class="col-xl-4 col-md-6 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex justify-content-between">
                      <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Sales by Countries</h5>
                        <small class="text-muted">Monthly Sales Overview</small>
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="salesByCountry" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesByCountry">
                          <a class="dropdown-item" href="javascript:void(0);">Download</a>
                          <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                          <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0">
                        <li class="d-flex align-items-center mb-4">
                          <img :src="imageUrl9" alt="User" class="rounded-circle me-3" width="34">
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <div class="d-flex align-items-center">
                                <h6 class="mb-0 me-1">$8,567k</h6>
                              </div>
                              <small class="text-muted">United states</small>
                            </div>
                            <div class="user-progress">
                              <p class="text-success fw-medium mb-0 d-flex justify-content-center gap-1">
                                <i class="ti ti-chevron-up"></i>
                                25.8%
                              </p>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex align-items-center mb-4">
                          <img :src="imageUrl10" alt="User" class="rounded-circle me-3" width="34">
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <div class="d-flex align-items-center">
                                <h6 class="mb-0 me-1">$2,415k</h6>
                              </div>
                              <small class="text-muted">Brazil</small>
                            </div>
                            <div class="user-progress">
                              <p class="text-danger fw-medium mb-0 d-flex justify-content-center gap-1">
                                <i class="ti ti-chevron-down"></i>
                                6.2%
                              </p>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex align-items-center mb-4">
                          <img :src="imageUrl11" alt="User" class="rounded-circle me-3" width="34">
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <div class="d-flex align-items-center">
                                <h6 class="mb-0 me-1">$865k</h6>
                              </div>
                              <small class="text-muted">India</small>
                            </div>
                            <div class="user-progress">
                              <p class="text-success fw-medium mb-0 d-flex align-items-center gap-1">
                                <i class="ti ti-chevron-up"></i>
                                12.4%
                              </p>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex align-items-center mb-4">
                          <img :src="imageUrl12" alt="User" class="rounded-circle me-3" width="34">
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <div class="d-flex align-items-center">
                                <h6 class="mb-0 me-1">$745k</h6>
                              </div>
                              <small class="text-muted">Australia</small>
                            </div>
                            <div class="user-progress">
                              <p class="text-danger fw-medium mb-0 d-flex justify-content-center gap-1">
                                <i class="ti ti-chevron-down"></i>
                                11.9%
                              </p>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex align-items-center mb-4">
                          <img :src="imageUrl13" alt="User" class="rounded-circle me-3" width="34">
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <div class="d-flex align-items-center">
                                <h6 class="mb-0 me-1">$45</h6>
                              </div>
                              <small class="text-muted">France</small>
                            </div>
                            <div class="user-progress">
                              <p class="text-success fw-medium mb-0 d-flex justify-content-center gap-1">
                                <i class="ti ti-chevron-up"></i>
                                16.2%
                              </p>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex align-items-center">
                          <img :src="imageUrl14" alt="User" class="rounded-circle me-3" width="34">
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <div class="d-flex align-items-center">
                                <h6 class="mb-0 me-1">$12k</h6>
                              </div>
                              <small class="text-muted">China</small>
                            </div>
                            <div class="user-progress">
                              <p class="text-success fw-medium mb-0 d-flex justify-content-center gap-1">
                                <i class="ti ti-chevron-up"></i>
                                14.8%
                              </p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Sales By Country -->
                <!-- Total Earning -->
                <div class="col-12 col-xl-4 mb-4 col-md-6">
                  <div class="card">
                    <div class="card-header d-flex justify-content-between pb-1">
                      <h5 class="mb-0 card-title">Total Earning</h5>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="totalEarning" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalEarning">
                          <a class="dropdown-item" href="javascript:void(0);">View More</a>
                          <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body" style="position: relative;">
                      <div class="d-flex align-items-center">
                        <h1 class="mb-0 me-2">87%</h1>
                        <i class="ti ti-chevron-up text-success me-1"></i>
                        <p class="text-success mb-0">25.8%</p>
                      </div>
                      <div id="totalEarningChart" style="min-height: 230px;"><div id="apexcharts7js2s92s" class="apexcharts-canvas apexcharts7js2s92s apexcharts-theme-light" style="width: 400px; height: 230px;"><svg id="SvgjsSvg1560" width="400" height="230" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1562" class="apexcharts-inner apexcharts-graphical" transform="translate(15.89142857142857, -10)"><defs id="SvgjsDefs1561"><linearGradient id="SvgjsLinearGradient1565" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1566" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1567" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1568" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMask7js2s92s"><rect id="SvgjsRect1570" width="405.99999999999994" height="245" x="-13.89142857142857" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask7js2s92s"></clipPath><clipPath id="nonForecastMask7js2s92s"></clipPath><clipPath id="gridRectMarkerMask7js2s92s"><rect id="SvgjsRect1571" width="382.21714285714285" height="249" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1569" width="0" height="245" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1565)" class="apexcharts-xcrosshairs" y2="245" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1593" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1594" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1603" class="apexcharts-grid"><g id="SvgjsG1604" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1606" x1="-11.89142857142857" y1="0" x2="390.1085714285714" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1607" x1="-11.89142857142857" y1="49" x2="390.1085714285714" y2="49" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1608" x1="-11.89142857142857" y1="98" x2="390.1085714285714" y2="98" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1609" x1="-11.89142857142857" y1="147" x2="390.1085714285714" y2="147" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1610" x1="-11.89142857142857" y1="196" x2="390.1085714285714" y2="196" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1611" x1="-11.89142857142857" y1="245" x2="390.1085714285714" y2="245" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1605" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1613" x1="0" y1="245" x2="378.21714285714285" y2="245" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1612" x1="0" y1="1" x2="0" y2="245" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1572" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1573" class="apexcharts-series" seriesName="Earning" rel="1" data:realIndex="0"><path id="SvgjsPath1575" d="M -4.862791836734694 142L -4.862791836734694 60.124999999999986Q -4.862791836734694 55.124999999999986 0.13720816326530638 55.124999999999986L -0.13720816326530638 55.124999999999986Q 4.862791836734694 55.124999999999986 4.862791836734694 60.124999999999986L 4.862791836734694 60.124999999999986L 4.862791836734694 142Q 4.862791836734694 147 -0.13720816326530638 147L 0.13720816326530638 147Q -4.862791836734694 147 -4.862791836734694 142z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7js2s92s)" pathTo="M -4.862791836734694 142L -4.862791836734694 60.124999999999986Q -4.862791836734694 55.124999999999986 0.13720816326530638 55.124999999999986L -0.13720816326530638 55.124999999999986Q 4.862791836734694 55.124999999999986 4.862791836734694 60.124999999999986L 4.862791836734694 60.124999999999986L 4.862791836734694 142Q 4.862791836734694 147 -0.13720816326530638 147L 0.13720816326530638 147Q -4.862791836734694 147 -4.862791836734694 142z" pathFrom="M -4.862791836734694 142L -4.862791836734694 142L 4.862791836734694 142L 4.862791836734694 142L 4.862791836734694 142L 4.862791836734694 142L 4.862791836734694 142L -4.862791836734694 142" cy="55.124999999999986" cx="4.862791836734694" j="0" val="15" barHeight="91.87500000000001" barWidth="9.725583673469387"></path><path id="SvgjsPath1576" d="M 49.168228571428564 142L 49.168228571428564 90.75Q 49.168228571428564 85.75 54.168228571428564 85.75L 53.89381224489795 85.75Q 58.89381224489795 85.75 58.89381224489795 90.75L 58.89381224489795 90.75L 58.89381224489795 142Q 58.89381224489795 147 53.89381224489795 147L 54.168228571428564 147Q 49.168228571428564 147 49.168228571428564 142z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7js2s92s)" pathTo="M 49.168228571428564 142L 49.168228571428564 90.75Q 49.168228571428564 85.75 54.168228571428564 85.75L 53.89381224489795 85.75Q 58.89381224489795 85.75 58.89381224489795 90.75L 58.89381224489795 90.75L 58.89381224489795 142Q 58.89381224489795 147 53.89381224489795 147L 54.168228571428564 147Q 49.168228571428564 147 49.168228571428564 142z" pathFrom="M 49.168228571428564 142L 49.168228571428564 142L 58.89381224489795 142L 58.89381224489795 142L 58.89381224489795 142L 58.89381224489795 142L 58.89381224489795 142L 49.168228571428564 142" cy="85.75" cx="58.89381224489796" j="1" val="10" barHeight="61.25000000000001" barWidth="9.725583673469387"></path><path id="SvgjsPath1577" d="M 103.19924897959183 142L 103.19924897959183 29.499999999999986Q 103.19924897959183 24.499999999999986 108.19924897959183 24.499999999999986L 107.92483265306122 24.499999999999986Q 112.92483265306122 24.499999999999986 112.92483265306122 29.499999999999986L 112.92483265306122 29.499999999999986L 112.92483265306122 142Q 112.92483265306122 147 107.92483265306122 147L 108.19924897959183 147Q 103.19924897959183 147 103.19924897959183 142z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7js2s92s)" pathTo="M 103.19924897959183 142L 103.19924897959183 29.499999999999986Q 103.19924897959183 24.499999999999986 108.19924897959183 24.499999999999986L 107.92483265306122 24.499999999999986Q 112.92483265306122 24.499999999999986 112.92483265306122 29.499999999999986L 112.92483265306122 29.499999999999986L 112.92483265306122 142Q 112.92483265306122 147 107.92483265306122 147L 108.19924897959183 147Q 103.19924897959183 147 103.19924897959183 142z" pathFrom="M 103.19924897959183 142L 103.19924897959183 142L 112.92483265306122 142L 112.92483265306122 142L 112.92483265306122 142L 112.92483265306122 142L 112.92483265306122 142L 103.19924897959183 142" cy="24.499999999999986" cx="112.9248326530612" j="2" val="20" barHeight="122.50000000000001" barWidth="9.725583673469387"></path><path id="SvgjsPath1578" d="M 157.2302693877551 142L 157.2302693877551 103Q 157.2302693877551 98 162.2302693877551 98L 161.9558530612245 98Q 166.9558530612245 98 166.9558530612245 103L 166.9558530612245 103L 166.9558530612245 142Q 166.9558530612245 147 161.9558530612245 147L 162.2302693877551 147Q 157.2302693877551 147 157.2302693877551 142z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7js2s92s)" pathTo="M 157.2302693877551 142L 157.2302693877551 103Q 157.2302693877551 98 162.2302693877551 98L 161.9558530612245 98Q 166.9558530612245 98 166.9558530612245 103L 166.9558530612245 103L 166.9558530612245 142Q 166.9558530612245 147 161.9558530612245 147L 162.2302693877551 147Q 157.2302693877551 147 157.2302693877551 142z" pathFrom="M 157.2302693877551 142L 157.2302693877551 142L 166.9558530612245 142L 166.9558530612245 142L 166.9558530612245 142L 166.9558530612245 142L 166.9558530612245 142L 157.2302693877551 142" cy="98" cx="166.95585306122445" j="3" val="8" barHeight="49.00000000000001" barWidth="9.725583673469387"></path><path id="SvgjsPath1579" d="M 211.26128979591834 142L 211.26128979591834 78.5Q 211.26128979591834 73.5 216.26128979591834 73.5L 215.98687346938772 73.5Q 220.98687346938772 73.5 220.98687346938772 78.5L 220.98687346938772 78.5L 220.98687346938772 142Q 220.98687346938772 147 215.98687346938772 147L 216.26128979591834 147Q 211.26128979591834 147 211.26128979591834 142z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7js2s92s)" pathTo="M 211.26128979591834 142L 211.26128979591834 78.5Q 211.26128979591834 73.5 216.26128979591834 73.5L 215.98687346938772 73.5Q 220.98687346938772 73.5 220.98687346938772 78.5L 220.98687346938772 78.5L 220.98687346938772 142Q 220.98687346938772 147 215.98687346938772 147L 216.26128979591834 147Q 211.26128979591834 147 211.26128979591834 142z" pathFrom="M 211.26128979591834 142L 211.26128979591834 142L 220.98687346938772 142L 220.98687346938772 142L 220.98687346938772 142L 220.98687346938772 142L 220.98687346938772 142L 211.26128979591834 142" cy="73.5" cx="220.98687346938772" j="4" val="12" barHeight="73.5" barWidth="9.725583673469387"></path><path id="SvgjsPath1580" d="M 265.2923102040816 142L 265.2923102040816 41.749999999999986Q 265.2923102040816 36.749999999999986 270.2923102040816 36.749999999999986L 270.017893877551 36.749999999999986Q 275.017893877551 36.749999999999986 275.017893877551 41.749999999999986L 275.017893877551 41.749999999999986L 275.017893877551 142Q 275.017893877551 147 270.017893877551 147L 270.2923102040816 147Q 265.2923102040816 147 265.2923102040816 142z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7js2s92s)" pathTo="M 265.2923102040816 142L 265.2923102040816 41.749999999999986Q 265.2923102040816 36.749999999999986 270.2923102040816 36.749999999999986L 270.017893877551 36.749999999999986Q 275.017893877551 36.749999999999986 275.017893877551 41.749999999999986L 275.017893877551 41.749999999999986L 275.017893877551 142Q 275.017893877551 147 270.017893877551 147L 270.2923102040816 147Q 265.2923102040816 147 265.2923102040816 142z" pathFrom="M 265.2923102040816 142L 265.2923102040816 142L 275.017893877551 142L 275.017893877551 142L 275.017893877551 142L 275.017893877551 142L 275.017893877551 142L 265.2923102040816 142" cy="36.749999999999986" cx="275.017893877551" j="5" val="18" barHeight="110.25000000000001" barWidth="9.725583673469387"></path><path id="SvgjsPath1581" d="M 319.3233306122449 142L 319.3233306122449 78.5Q 319.3233306122449 73.5 324.3233306122449 73.5L 324.04891428571426 73.5Q 329.04891428571426 73.5 329.04891428571426 78.5L 329.04891428571426 78.5L 329.04891428571426 142Q 329.04891428571426 147 324.04891428571426 147L 324.3233306122449 147Q 319.3233306122449 147 319.3233306122449 142z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7js2s92s)" pathTo="M 319.3233306122449 142L 319.3233306122449 78.5Q 319.3233306122449 73.5 324.3233306122449 73.5L 324.04891428571426 73.5Q 329.04891428571426 73.5 329.04891428571426 78.5L 329.04891428571426 78.5L 329.04891428571426 142Q 329.04891428571426 147 324.04891428571426 147L 324.3233306122449 147Q 319.3233306122449 147 319.3233306122449 142z" pathFrom="M 319.3233306122449 142L 319.3233306122449 142L 329.04891428571426 142L 329.04891428571426 142L 329.04891428571426 142L 329.04891428571426 142L 329.04891428571426 142L 319.3233306122449 142" cy="73.5" cx="329.04891428571426" j="6" val="12" barHeight="73.5" barWidth="9.725583673469387"></path><path id="SvgjsPath1582" d="M 373.3543510204081 142L 373.3543510204081 121.375Q 373.3543510204081 116.375 378.3543510204081 116.375L 378.0799346938775 116.375Q 383.0799346938775 116.375 383.0799346938775 121.375L 383.0799346938775 121.375L 383.0799346938775 142Q 383.0799346938775 147 378.0799346938775 147L 378.3543510204081 147Q 373.3543510204081 147 373.3543510204081 142z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7js2s92s)" pathTo="M 373.3543510204081 142L 373.3543510204081 121.375Q 373.3543510204081 116.375 378.3543510204081 116.375L 378.0799346938775 116.375Q 383.0799346938775 116.375 383.0799346938775 121.375L 383.0799346938775 121.375L 383.0799346938775 142Q 383.0799346938775 147 378.0799346938775 147L 378.3543510204081 147Q 373.3543510204081 147 373.3543510204081 142z" pathFrom="M 373.3543510204081 142L 373.3543510204081 142L 383.0799346938775 142L 383.0799346938775 142L 383.0799346938775 142L 383.0799346938775 142L 383.0799346938775 142L 373.3543510204081 142" cy="116.375" cx="383.0799346938775" j="7" val="5" barHeight="30.625000000000004" barWidth="9.725583673469387"></path></g><g id="SvgjsG1583" class="apexcharts-series" seriesName="Expense" rel="2" data:realIndex="1"><path id="SvgjsPath1585" d="M -4.862791836734694 157L -4.862791836734694 189.875Q -4.862791836734694 194.875 0.13720816326530638 194.875L -0.13720816326530638 194.875Q 4.862791836734694 194.875 4.862791836734694 189.875L 4.862791836734694 189.875L 4.862791836734694 157Q 4.862791836734694 152 -0.13720816326530638 152L 0.13720816326530638 152Q -4.862791836734694 152 -4.862791836734694 157z" fill="rgba(129,125,141,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask7js2s92s)" pathTo="M -4.862791836734694 157L -4.862791836734694 189.875Q -4.862791836734694 194.875 0.13720816326530638 194.875L -0.13720816326530638 194.875Q 4.862791836734694 194.875 4.862791836734694 189.875L 4.862791836734694 189.875L 4.862791836734694 157Q 4.862791836734694 152 -0.13720816326530638 152L 0.13720816326530638 152Q -4.862791836734694 152 -4.862791836734694 157z" pathFrom="M -4.862791836734694 157L -4.862791836734694 157L 4.862791836734694 157L 4.862791836734694 157L 4.862791836734694 157L 4.862791836734694 157L 4.862791836734694 157L -4.862791836734694 157" cy="184.875" cx="4.862791836734694" j="0" val="-7" barHeight="-42.875" barWidth="9.725583673469387"></path><path id="SvgjsPath1586" d="M 49.168228571428564 157L 49.168228571428564 208.25Q 49.168228571428564 213.25 54.168228571428564 213.25L 53.89381224489795 213.25Q 58.89381224489795 213.25 58.89381224489795 208.25L 58.89381224489795 208.25L 58.89381224489795 157Q 58.89381224489795 152 53.89381224489795 152L 54.168228571428564 152Q 49.168228571428564 152 49.168228571428564 157z" fill="rgba(129,125,141,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask7js2s92s)" pathTo="M 49.168228571428564 157L 49.168228571428564 208.25Q 49.168228571428564 213.25 54.168228571428564 213.25L 53.89381224489795 213.25Q 58.89381224489795 213.25 58.89381224489795 208.25L 58.89381224489795 208.25L 58.89381224489795 157Q 58.89381224489795 152 53.89381224489795 152L 54.168228571428564 152Q 49.168228571428564 152 49.168228571428564 157z" pathFrom="M 49.168228571428564 157L 49.168228571428564 157L 58.89381224489795 157L 58.89381224489795 157L 58.89381224489795 157L 58.89381224489795 157L 58.89381224489795 157L 49.168228571428564 157" cy="203.25" cx="58.89381224489796" j="1" val="-10" barHeight="-61.25000000000001" barWidth="9.725583673469387"></path><path id="SvgjsPath1587" d="M 103.19924897959183 157L 103.19924897959183 189.875Q 103.19924897959183 194.875 108.19924897959183 194.875L 107.92483265306122 194.875Q 112.92483265306122 194.875 112.92483265306122 189.875L 112.92483265306122 189.875L 112.92483265306122 157Q 112.92483265306122 152 107.92483265306122 152L 108.19924897959183 152Q 103.19924897959183 152 103.19924897959183 157z" fill="rgba(129,125,141,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask7js2s92s)" pathTo="M 103.19924897959183 157L 103.19924897959183 189.875Q 103.19924897959183 194.875 108.19924897959183 194.875L 107.92483265306122 194.875Q 112.92483265306122 194.875 112.92483265306122 189.875L 112.92483265306122 189.875L 112.92483265306122 157Q 112.92483265306122 152 107.92483265306122 152L 108.19924897959183 152Q 103.19924897959183 152 103.19924897959183 157z" pathFrom="M 103.19924897959183 157L 103.19924897959183 157L 112.92483265306122 157L 112.92483265306122 157L 112.92483265306122 157L 112.92483265306122 157L 112.92483265306122 157L 103.19924897959183 157" cy="184.875" cx="112.9248326530612" j="2" val="-7" barHeight="-42.875" barWidth="9.725583673469387"></path><path id="SvgjsPath1588" d="M 157.2302693877551 157L 157.2302693877551 220.5Q 157.2302693877551 225.5 162.2302693877551 225.5L 161.9558530612245 225.5Q 166.9558530612245 225.5 166.9558530612245 220.5L 166.9558530612245 220.5L 166.9558530612245 157Q 166.9558530612245 152 161.9558530612245 152L 162.2302693877551 152Q 157.2302693877551 152 157.2302693877551 157z" fill="rgba(129,125,141,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask7js2s92s)" pathTo="M 157.2302693877551 157L 157.2302693877551 220.5Q 157.2302693877551 225.5 162.2302693877551 225.5L 161.9558530612245 225.5Q 166.9558530612245 225.5 166.9558530612245 220.5L 166.9558530612245 220.5L 166.9558530612245 157Q 166.9558530612245 152 161.9558530612245 152L 162.2302693877551 152Q 157.2302693877551 152 157.2302693877551 157z" pathFrom="M 157.2302693877551 157L 157.2302693877551 157L 166.9558530612245 157L 166.9558530612245 157L 166.9558530612245 157L 166.9558530612245 157L 166.9558530612245 157L 157.2302693877551 157" cy="215.5" cx="166.95585306122445" j="3" val="-12" barHeight="-73.5" barWidth="9.725583673469387"></path><path id="SvgjsPath1589" d="M 211.26128979591834 157L 211.26128979591834 183.75Q 211.26128979591834 188.75 216.26128979591834 188.75L 215.98687346938772 188.75Q 220.98687346938772 188.75 220.98687346938772 183.75L 220.98687346938772 183.75L 220.98687346938772 157Q 220.98687346938772 152 215.98687346938772 152L 216.26128979591834 152Q 211.26128979591834 152 211.26128979591834 157z" fill="rgba(129,125,141,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask7js2s92s)" pathTo="M 211.26128979591834 157L 211.26128979591834 183.75Q 211.26128979591834 188.75 216.26128979591834 188.75L 215.98687346938772 188.75Q 220.98687346938772 188.75 220.98687346938772 183.75L 220.98687346938772 183.75L 220.98687346938772 157Q 220.98687346938772 152 215.98687346938772 152L 216.26128979591834 152Q 211.26128979591834 152 211.26128979591834 157z" pathFrom="M 211.26128979591834 157L 211.26128979591834 157L 220.98687346938772 157L 220.98687346938772 157L 220.98687346938772 157L 220.98687346938772 157L 220.98687346938772 157L 211.26128979591834 157" cy="178.75" cx="220.98687346938772" j="4" val="-6" barHeight="-36.75" barWidth="9.725583673469387"></path><path id="SvgjsPath1590" d="M 265.2923102040816 157L 265.2923102040816 202.125Q 265.2923102040816 207.125 270.2923102040816 207.125L 270.017893877551 207.125Q 275.017893877551 207.125 275.017893877551 202.125L 275.017893877551 202.125L 275.017893877551 157Q 275.017893877551 152 270.017893877551 152L 270.2923102040816 152Q 265.2923102040816 152 265.2923102040816 157z" fill="rgba(129,125,141,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask7js2s92s)" pathTo="M 265.2923102040816 157L 265.2923102040816 202.125Q 265.2923102040816 207.125 270.2923102040816 207.125L 270.017893877551 207.125Q 275.017893877551 207.125 275.017893877551 202.125L 275.017893877551 202.125L 275.017893877551 157Q 275.017893877551 152 270.017893877551 152L 270.2923102040816 152Q 265.2923102040816 152 265.2923102040816 157z" pathFrom="M 265.2923102040816 157L 265.2923102040816 157L 275.017893877551 157L 275.017893877551 157L 275.017893877551 157L 275.017893877551 157L 275.017893877551 157L 265.2923102040816 157" cy="197.125" cx="275.017893877551" j="5" val="-9" barHeight="-55.12500000000001" barWidth="9.725583673469387"></path><path id="SvgjsPath1591" d="M 319.3233306122449 157L 319.3233306122449 177.625Q 319.3233306122449 182.625 324.3233306122449 182.625L 324.04891428571426 182.625Q 329.04891428571426 182.625 329.04891428571426 177.625L 329.04891428571426 177.625L 329.04891428571426 157Q 329.04891428571426 152 324.04891428571426 152L 324.3233306122449 152Q 319.3233306122449 152 319.3233306122449 157z" fill="rgba(129,125,141,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask7js2s92s)" pathTo="M 319.3233306122449 157L 319.3233306122449 177.625Q 319.3233306122449 182.625 324.3233306122449 182.625L 324.04891428571426 182.625Q 329.04891428571426 182.625 329.04891428571426 177.625L 329.04891428571426 177.625L 329.04891428571426 157Q 329.04891428571426 152 324.04891428571426 152L 324.3233306122449 152Q 319.3233306122449 152 319.3233306122449 157z" pathFrom="M 319.3233306122449 157L 319.3233306122449 157L 329.04891428571426 157L 329.04891428571426 157L 329.04891428571426 157L 329.04891428571426 157L 329.04891428571426 157L 319.3233306122449 157" cy="172.625" cx="329.04891428571426" j="6" val="-5" barHeight="-30.625000000000004" barWidth="9.725583673469387"></path><path id="SvgjsPath1592" d="M 373.3543510204081 157L 373.3543510204081 196Q 373.3543510204081 201 378.3543510204081 201L 378.0799346938775 201Q 383.0799346938775 201 383.0799346938775 196L 383.0799346938775 196L 383.0799346938775 157Q 383.0799346938775 152 378.0799346938775 152L 378.3543510204081 152Q 373.3543510204081 152 373.3543510204081 157z" fill="rgba(129,125,141,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask7js2s92s)" pathTo="M 373.3543510204081 157L 373.3543510204081 196Q 373.3543510204081 201 378.3543510204081 201L 378.0799346938775 201Q 383.0799346938775 201 383.0799346938775 196L 383.0799346938775 196L 383.0799346938775 157Q 383.0799346938775 152 378.0799346938775 152L 378.3543510204081 152Q 373.3543510204081 152 373.3543510204081 157z" pathFrom="M 373.3543510204081 157L 373.3543510204081 157L 383.0799346938775 157L 383.0799346938775 157L 383.0799346938775 157L 383.0799346938775 157L 383.0799346938775 157L 373.3543510204081 157" cy="191" cx="383.0799346938775" j="7" val="-8" barHeight="-49.00000000000001" barWidth="9.725583673469387"></path></g><g id="SvgjsG1574" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1584" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1614" x1="-11.89142857142857" y1="0" x2="390.1085714285714" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1615" x1="-11.89142857142857" y1="0" x2="390.1085714285714" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1616" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1617" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1618" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1619" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1620" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><g id="SvgjsG1601" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)"><g id="SvgjsG1602" class="apexcharts-yaxis-texts-g"></g></g><g id="SvgjsG1563" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 115px;"></div></div></div>
                      <div class="d-flex align-items-start my-4">
                        <div class="badge rounded bg-label-primary p-2 me-3 rounded">
                          <i class="ti ti-currency-dollar ti-sm"></i>
                        </div>
                        <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
                          <div class="me-2">
                            <h6 class="mb-0">Total Sales</h6>
                            <small class="text-muted">Refund</small>
                          </div>
                          <p class="mb-0 text-success">+$98</p>
                        </div>
                      </div>
                      <div class="d-flex align-items-start">
                        <div class="badge rounded bg-label-secondary p-2 me-3 rounded">
                          <i class="ti ti-brand-paypal ti-sm"></i>
                        </div>
                        <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
                          <div class="me-2">
                            <h6 class="mb-0">Total Revenue</h6>
                            <small class="text-muted">Client Payment</small>
                          </div>
                          <p class="mb-0 text-success">+$126</p>
                        </div>
                      </div>
                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 449px; height: 440px;"></div></div><div class="contract-trigger"></div></div></div>
                  </div>
                </div>
                <!--/ Total Earning -->
                <!-- Monthly Campaign State -->
                <div class="col-xl-4 col-md-6 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex justify-content-between">
                      <div class="card-title mb-0">
                        <h5 class="mb-0">Monthly Campaign State</h5>
                        <small class="text-muted">8.52k Social Visiters</small>
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="MonthlyCampaign" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="MonthlyCampaign">
                          <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                          <a class="dropdown-item" href="javascript:void(0);">Download</a>
                          <a class="dropdown-item" href="javascript:void(0);">View All</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0">
                        <li class="mb-4 pb-1 d-flex justify-content-between align-items-center">
                          <div class="badge bg-label-success rounded p-2"><i class="ti ti-mail ti-sm"></i></div>
                          <div class="d-flex justify-content-between w-100 flex-wrap">
                            <h6 class="mb-0 ms-3">Emails</h6>
                            <div class="d-flex">
                              <p class="mb-0 fw-medium">12,346</p>
                              <p class="ms-3 text-success mb-0">0.3%</p>
                            </div>
                          </div>
                        </li>
                        <li class="mb-4 pb-1 d-flex justify-content-between align-items-center">
                          <div class="badge bg-label-info rounded p-2"><i class="ti ti-link ti-sm"></i></div>
                          <div class="d-flex justify-content-between w-100 flex-wrap">
                            <h6 class="mb-0 ms-3">Opened</h6>
                            <div class="d-flex">
                              <p class="mb-0 fw-medium">8,734</p>
                              <p class="ms-3 text-success mb-0">2.1%</p>
                            </div>
                          </div>
                        </li>
                        <li class="mb-4 pb-1 d-flex justify-content-between align-items-center">
                          <div class="badge bg-label-warning rounded p-2"><i class="ti ti-click ti-sm"></i></div>
                          <div class="d-flex justify-content-between w-100 flex-wrap">
                            <h6 class="mb-0 ms-3">Clicked</h6>
                            <div class="d-flex">
                              <p class="mb-0 fw-medium">967</p>
                              <p class="ms-3 text-success mb-0">1.4%</p>
                            </div>
                          </div>
                        </li>
                        <li class="mb-4 pb-1 d-flex justify-content-between align-items-center">
                          <div class="badge bg-label-primary rounded p-2"><i class="ti ti-users ti-sm"></i></div>
                          <div class="d-flex justify-content-between w-100 flex-wrap">
                            <h6 class="mb-0 ms-3">Subscribe</h6>
                            <div class="d-flex">
                              <p class="mb-0 fw-medium">345</p>
                              <p class="ms-3 text-success mb-0">8.5k</p>
                            </div>
                          </div>
                        </li>
                        <li class="mb-4 pb-1 d-flex justify-content-between align-items-center">
                          <div class="badge bg-label-secondary rounded p-2">
                            <i class="ti ti-alert-triangle ti-sm text-body"></i>
                          </div>
                          <div class="d-flex justify-content-between w-100 flex-wrap">
                            <h6 class="mb-0 ms-3">Complaints</h6>
                            <div class="d-flex">
                              <p class="mb-0 fw-medium">10</p>
                              <p class="ms-3 text-success mb-0">1.5%</p>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                          <div class="badge bg-label-danger rounded p-2"><i class="ti ti-ban ti-sm"></i></div>
                          <div class="d-flex justify-content-between w-100 flex-wrap">
                            <h6 class="mb-0 ms-3">Unsubscribe</h6>
                            <div class="d-flex">
                              <p class="mb-0 fw-medium">86</p>
                              <p class="ms-3 text-success mb-0">0.8%</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Monthly Campaign State -->
                <!-- Source Visit -->
                <div class="col-xl-4 col-md-6 order-2 order-lg-1 mb-4">
                  <div class="card">
                    <div class="card-header d-flex justify-content-between">
                      <div class="card-title mb-0">
                        <h5 class="mb-0">Source Visits</h5>
                        <small class="text-muted">38.4k Visitors</small>
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="sourceVisits" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sourceVisits">
                          <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                          <a class="dropdown-item" href="javascript:void(0);">Download</a>
                          <a class="dropdown-item" href="javascript:void(0);">View All</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul class="list-unstyled mb-0">
                        <li class="mb-3 pb-1">
                          <div class="d-flex align-items-start">
                            <div class="badge bg-label-secondary p-2 me-3 rounded">
                              <i class="ti ti-shadow ti-sm"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">Direct Source</h6>
                                <small class="text-muted">Direct link click</small>
                              </div>
                              <div class="d-flex align-items-center">
                                <p class="mb-0">1.2k</p>
                                <div class="ms-3 badge bg-label-success">+4.2%</div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-3 pb-1">
                          <div class="d-flex align-items-start">
                            <div class="badge bg-label-secondary p-2 me-3 rounded">
                              <i class="ti ti-globe ti-sm"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">Social Network</h6>
                                <small class="text-muted">Social Channels</small>
                              </div>
                              <div class="d-flex align-items-center">
                                <p class="mb-0">31.5k</p>
                                <div class="ms-3 badge bg-label-success">+8.2%</div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-3 pb-1">
                          <div class="d-flex align-items-start">
                            <div class="badge bg-label-secondary p-2 me-3 rounded">
                              <i class="ti ti-mail ti-sm"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">Email Newsletter</h6>
                                <small class="text-muted">Mail Campaigns</small>
                              </div>
                              <div class="d-flex align-items-center">
                                <p class="mb-0">893</p>
                                <div class="ms-3 badge bg-label-success">+2.4%</div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-3 pb-1">
                          <div class="d-flex align-items-start">
                            <div class="badge bg-label-secondary p-2 me-3 rounded">
                              <i class="ti ti-external-link ti-sm"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">Referrals</h6>
                                <small class="text-muted">Impact Radius Visits</small>
                              </div>
                              <div class="d-flex align-items-center">
                                <p class="mb-0">342</p>
                                <div class="ms-3 badge bg-label-danger">-0.4%</div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-3 pb-1">
                          <div class="d-flex align-items-start">
                            <div class="badge bg-label-secondary p-2 me-3 rounded">
                              <i class="ti ti-discount-2 ti-sm"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">ADVT</h6>
                                <small class="text-muted">Google ADVT</small>
                              </div>
                              <div class="d-flex align-items-center">
                                <p class="mb-0">2.15k</p>
                                <div class="ms-3 badge bg-label-success">+9.1%</div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-2">
                          <div class="d-flex align-items-start">
                            <div class="badge bg-label-secondary p-2 me-3 rounded">
                              <i class="ti ti-star ti-sm"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">Other</h6>
                                <small class="text-muted">Many Sources</small>
                              </div>
                              <div class="d-flex align-items-center">
                                <p class="mb-0">12.5k</p>
                                <div class="ms-3 badge bg-label-success">+6.2%</div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Source Visit -->
                <!-- Projects table -->
                <div class="col-12 col-xl-8 col-sm-12 order-1 order-lg-2 mb-4 mb-lg-0">
                  <div class="card">
                    <div class="card-datatable table-responsive">
                      <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="card-header pb-0 pt-sm-0"><div class="head-label text-center"><h5 class="card-title mb-0">Projects</h5></div><div class="d-flex justify-content-center justify-content-md-end"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><table class="datatables-projects table border-top dataTable no-footer dtr-column" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                        <thead>
                          <tr><th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 22.125px; display: none;" aria-label=""></th><th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 18.4375px;" data-col="1" aria-label=""><input type="checkbox" class="form-check-input"></th><th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 83.9375px;" aria-sort="descending" aria-label="Name: activate to sort column ascending">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 104.531px;" aria-label="Leader: activate to sort column ascending">Leader</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 78.0156px;" aria-label="Team">Team</th><th class="w-px-200 sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 200px;" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 110.953px;" aria-label="Actions">Actions</th></tr>
                        </thead><tbody><tr class="odd"><td valign="top" colspan="6" class="dataTables_empty">Loading...</td></tr></tbody>
                      </table><div class="row mx-2"><div class="col-sm-12 col-md-6"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div></div><div class="col-sm-12 col-md-6"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="next" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                    </div>
                  </div>
                </div>
                <!--/ Projects table -->
              </div>
            </div>
            <router-view></router-view>
            <Footer></Footer>
            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>
      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>
    </div>
</template>
<script>
import Header from './Header.vue'
import Sidebar from './Sidebar.vue'
import Footer from './Footer.vue'
export default {
  components: {Sidebar, Footer },
  data() {
    return {
      imageUrl1: 'imageUrl1',
      imageUrl2:'assets/img/avatars/2.png',
      imageUrl3:'assets/img/avatars/9.png',
      imageUrl4:'assets/img/avatars/5.png',
      imageUrl5:'assets/img/avatars/6.png',
      imageUrl6:'assets/img/illustrations/card-website-analytics-1.png',
      imageUrl7:'assets/img/illustrations/card-website-analytics-2.png',
      imageUrl8:'assets/img/illustrations/card-website-analytics-3.png',
      imageUrl9:'assets/svg/flags/us.svg',
      imageUrl10:'assets/svg/flags/br.svg',
      imageUrl11:'assets/svg/flags/in.svg',
      imageUrl12:'assets/svg/flags/au.svg',
      imageUrl13:'assets/svg/flags/fr.svg',
      imageUrl14:'assets/svg/flags/cn.svg'
    };
  },
}
</script>