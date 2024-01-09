<template>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->
      <Sidebar></Sidebar>
      <!-- / Menu -->
      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar"
        >
          <div
            class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none"
          >
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="ti ti-menu-2 ti-sm"></i>
            </a>
          </div>
          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item navbar-search-wrapper mb-0">
                <a
                  class="nav-item nav-link search-toggler d-flex align-items-center px-0"
                  href="javascript:void(0);"
                >
                  <i class="ti ti-search ti-md me-2"></i>
                  <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                </a>
              </div>
            </div>
            <!-- /Search -->
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Language -->
              <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                <a
                  class="nav-link dropdown-toggle hide-arrow"
                  href="javascript:void(0);"
                  data-bs-toggle="dropdown"
                >
                  <i class="ti ti-language rounded-circle ti-md"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a
                      class="dropdown-item active"
                      href="javascript:void(0);"
                      data-language="en"
                      data-text-direction="ltr"
                    >
                      <span class="align-middle">English</span>
                    </a>
                  </li>
                  <li>
                    <a
                      class="dropdown-item"
                      href="javascript:void(0);"
                      data-language="fr"
                      data-text-direction="ltr"
                    >
                      <span class="align-middle">French</span>
                    </a>
                  </li>
                  <li>
                    <a
                      class="dropdown-item"
                      href="javascript:void(0);"
                      data-language="ar"
                      data-text-direction="rtl"
                    >
                      <span class="align-middle">Arabic</span>
                    </a>
                  </li>
                  <li>
                    <a
                      class="dropdown-item"
                      href="javascript:void(0);"
                      data-language="de"
                      data-text-direction="ltr"
                    >
                      <span class="align-middle">German</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ Language -->

              <!-- Style Switcher -->
              <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                <a
                  class="nav-link dropdown-toggle hide-arrow"
                  href="javascript:void(0);"
                  data-bs-toggle="dropdown"
                >
                  <i class="ti ti-md ti-sun"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                  <li>
                    <a
                      class="dropdown-item"
                      href="javascript:void(0);"
                      data-theme="light"
                    >
                      <span class="align-middle"
                        ><i class="ti ti-sun me-2"></i>Light</span
                      >
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                      <span class="align-middle"
                        ><i class="ti ti-moon me-2"></i>Dark</span
                      >
                    </a>
                  </li>
                  <li>
                    <a
                      class="dropdown-item"
                      href="javascript:void(0);"
                      data-theme="system"
                    >
                      <span class="align-middle"
                        ><i class="ti ti-device-desktop me-2"></i>System</span
                      >
                    </a>
                  </li>
                </ul>
              </li>
              <!-- / Style Switcher-->

              <!-- Quick links  -->
              <li
                class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0"
              >
                <a
                  class="nav-link dropdown-toggle hide-arrow"
                  href="javascript:void(0);"
                  data-bs-toggle="dropdown"
                  data-bs-auto-close="outside"
                  aria-expanded="false"
                >
                  <i class="ti ti-layout-grid-add ti-md"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0">
                  <div class="dropdown-menu-header border-bottom">
                    <div class="dropdown-header d-flex align-items-center py-3">
                      <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                      <a
                        href="javascript:void(0)"
                        class="dropdown-shortcuts-add text-body"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        aria-label="Add shortcuts"
                        data-bs-original-title="Add shortcuts"
                        ><i class="ti ti-sm ti-apps"></i
                      ></a>
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
                        <a href="app-invoice-list.html" class="stretched-link"
                          >Invoice App</a
                        >
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
                        <a href="app-access-roles.html" class="stretched-link"
                          >Role Management</a
                        >
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
                        <a
                          href="pages-account-settings-account.html"
                          class="stretched-link"
                          >Setting</a
                        >
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
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px">
                      <div
                        class="ps__thumb-x"
                        tabindex="0"
                        style="left: 0px; width: 0px"
                      ></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px">
                      <div
                        class="ps__thumb-y"
                        tabindex="0"
                        style="top: 0px; height: 0px"
                      ></div>
                    </div>
                  </div>
                </div>
              </li>
              <!-- Quick links -->

              <!-- Notification -->
              <li
                class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1"
              >
                <a
                  class="nav-link dropdown-toggle hide-arrow"
                  href="javascript:void(0);"
                  data-bs-toggle="dropdown"
                  data-bs-auto-close="outside"
                  aria-expanded="false"
                >
                  <i class="ti ti-bell ti-md"></i>
                  <span class="badge bg-danger rounded-pill badge-notifications">5</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end py-0">
                  <li class="dropdown-menu-header border-bottom">
                    <div class="dropdown-header d-flex align-items-center py-3">
                      <h5 class="text-body mb-0 me-auto">Notification</h5>
                      <a
                        href="javascript:void(0)"
                        class="dropdown-notifications-all text-body"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        aria-label="Mark all as read"
                        data-bs-original-title="Mark all as read"
                        ><i class="ti ti-mail-opened fs-4"></i
                      ></a>
                    </div>
                  </li>
                  <li class="dropdown-notifications-list scrollable-container ps">
                    <ul class="list-group list-group-flush">
                      <li
                        class="list-group-item list-group-item-action dropdown-notifications-item"
                      >
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <img
                                :src="imageUrl1"
                                alt=""
                                class="h-auto rounded-circle"
                              />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                            <p class="mb-0">Won the monthly best seller gold badge</p>
                            <small class="text-muted">1h ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a
                              href="javascript:void(0)"
                              class="dropdown-notifications-read"
                              ><span class="badge badge-dot"></span
                            ></a>
                            <a
                              href="javascript:void(0)"
                              class="dropdown-notifications-archive"
                              ><span class="ti ti-x"></span
                            ></a>
                          </div>
                        </div>
                      </li>
                      <li
                        class="list-group-item list-group-item-action dropdown-notifications-item"
                      >
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <span class="avatar-initial rounded-circle bg-label-danger"
                                >CF</span
                              >
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">Charles Franklin</h6>
                            <p class="mb-0">Accepted your connection</p>
                            <small class="text-muted">12hr ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a
                              href="javascript:void(0)"
                              class="dropdown-notifications-read"
                              ><span class="badge badge-dot"></span
                            ></a>
                            <a
                              href="javascript:void(0)"
                              class="dropdown-notifications-archive"
                              ><span class="ti ti-x"></span
                            ></a>
                          </div>
                        </div>
                      </li>
                      <li
                        class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read"
                      >
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <img
                                :src="imageUrl2"
                                alt=""
                                class="h-auto rounded-circle"
                              />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">New Message ✉️</h6>
                            <p class="mb-0">You have new message from Natalie</p>
                            <small class="text-muted">1h ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a
                              href="javascript:void(0)"
                              class="dropdown-notifications-read"
                              ><span class="badge badge-dot"></span
                            ></a>
                            <a
                              href="javascript:void(0)"
                              class="dropdown-notifications-archive"
                              ><span class="ti ti-x"></span
                            ></a>
                          </div>
                        </div>
                      </li>
                      <li
                        class="list-group-item list-group-item-action dropdown-notifications-item"
                      >
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <span class="avatar-initial rounded-circle bg-label-success"
                                ><i class="ti ti-shopping-cart"></i
                              ></span>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">Whoo! You have new order 🛒</h6>
                            <p class="mb-0">ACME Inc. made new order $1,154</p>
                            <small class="text-muted">1 day ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a
                              href="javascript:void(0)"
                              class="dropdown-notifications-read"
                              ><span class="badge badge-dot"></span
                            ></a>
                            <a
                              href="javascript:void(0)"
                              class="dropdown-notifications-archive"
                              ><span class="ti ti-x"></span
                            ></a>
                          </div>
                        </div>
                      </li>
                      <li
                        class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read"
                      >
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <img
                                :src="imageUrl3"
                                alt=""
                                class="h-auto rounded-circle"
                              />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">Application has been approved 🚀</h6>
                            <p class="mb-0">
                              Your ABC project application has been approved.
                            </p>
                            <small class="text-muted">2 days ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a
                              href="javascript:void(0)"
                              class="dropdown-notifications-read"
                              ><span class="badge badge-dot"></span
                            ></a>
                            <a
                              href="javascript:void(0)"
                              class="dropdown-notifications-archive"
                              ><span class="ti ti-x"></span
                            ></a>
                          </div>
                        </div>
                      </li>
                      <li
                        class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read"
                      >
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <span class="avatar-initial rounded-circle bg-label-success"
                                ><i class="ti ti-chart-pie"></i
                              ></span>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">Monthly report is generated</h6>
                            <p class="mb-0">July monthly financial report is generated</p>
                            <small class="text-muted">3 days ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a
                              href="javascript:void(0)"
                              class="dropdown-notifications-read"
                              ><span class="badge badge-dot"></span
                            ></a>
                            <a
                              href="javascript:void(0)"
                              class="dropdown-notifications-archive"
                              ><span class="ti ti-x"></span
                            ></a>
                          </div>
                        </div>
                      </li>
                      <li
                        class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read"
                      >
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <img
                                :src="imageUrl4"
                                alt=""
                                class="h-auto rounded-circle"
                              />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">Send connection request</h6>
                            <p class="mb-0">Peter sent you connection request</p>
                            <small class="text-muted">4 days ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a
                              href="javascript:void(0)"
                              class="dropdown-notifications-read"
                              ><span class="badge badge-dot"></span
                            ></a>
                            <a
                              href="javascript:void(0)"
                              class="dropdown-notifications-archive"
                              ><span class="ti ti-x"></span
                            ></a>
                          </div>
                        </div>
                      </li>
                      <li
                        class="list-group-item list-group-item-action dropdown-notifications-item"
                      >
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <img
                                :src="imageUrl5"
                                alt=""
                                class="h-auto rounded-circle"
                              />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">New message from Jane</h6>
                            <p class="mb-0">Your have new message from Jane</p>
                            <small class="text-muted">5 days ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a
                              href="javascript:void(0)"
                              class="dropdown-notifications-read"
                              ><span class="badge badge-dot"></span
                            ></a>
                            <a
                              href="javascript:void(0)"
                              class="dropdown-notifications-archive"
                              ><span class="ti ti-x"></span
                            ></a>
                          </div>
                        </div>
                      </li>
                      <li
                        class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read"
                      >
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <span class="avatar-initial rounded-circle bg-label-warning"
                                ><i class="ti ti-alert-triangle"></i
                              ></span>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">CPU is running high</h6>
                            <p class="mb-0">
                              CPU Utilization Percent is currently at 88.63%,
                            </p>
                            <small class="text-muted">5 days ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a
                              href="javascript:void(0)"
                              class="dropdown-notifications-read"
                              ><span class="badge badge-dot"></span
                            ></a>
                            <a
                              href="javascript:void(0)"
                              class="dropdown-notifications-archive"
                              ><span class="ti ti-x"></span
                            ></a>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px">
                      <div
                        class="ps__thumb-x"
                        tabindex="0"
                        style="left: 0px; width: 0px"
                      ></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px">
                      <div
                        class="ps__thumb-y"
                        tabindex="0"
                        style="top: 0px; height: 0px"
                      ></div>
                    </div>
                  </li>
                  <li class="dropdown-menu-footer border-top">
                    <a
                      href="javascript:void(0);"
                      class="dropdown-item d-flex justify-content-center text-primary p-2 h-px-40 mb-1 align-items-center"
                    >
                      View all notifications
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ Notification -->

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a
                  class="nav-link dropdown-toggle hide-arrow"
                  href="javascript:void(0);"
                  data-bs-toggle="dropdown"
                >
                  <div class="avatar avatar-online">
                    <img :src="imageUrl1" alt="" class="h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="pages-account-settings-account.html">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img :src="imageUrl1" alt="" class="h-auto rounded-circle" />
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
                        <span
                          class="flex-shrink-0 badge badge-center rounded-pill bg-label-danger w-px-20 h-px-20"
                          >2</span
                        >
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
            <input
              type="text"
              class="form-control search-input container-xxl border-0"
              placeholder="Search..."
              aria-label="Search..."
            />
            <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
          </div>
        </nav>
<!-- //////////////////////////   form      /////////////////////////// -->
        <!-- Content wrapper -->
        <div class="container-xxl flex-grow-1 container-p-y">
          <form @submit.prevent="createItems">
          <div class="row invoice-add">
            <!-- Invoice Add-->
            <div class="col-lg-9 col-12 mb-lg-0 mb-4">
              <div class="card invoice-preview-card">
                <div class="card-body">
                  <div class="row m-sm-4 m-0">
                    <div class="col-md-7 mb-md-0 mb-4 ps-0">
                      <div class="d-flex svg-illustration mb-4 gap-2 align-items-center">
                        <div class="app-brand-logo demo">
                          <svg
                            width="32"
                            height="22"
                            viewBox="0 0 32 22"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                              fill="#7367F0"
                            ></path>
                            <path
                              opacity="0.06"
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                              fill="#161616"
                            ></path>
                            <path
                              opacity="0.06"
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                              fill="#161616"
                            ></path>
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                              fill="#7367F0"
                            ></path>
                          </svg>
                        </div>
                        <span class="app-brand-text fw-bold fs-4"> Vuexy </span>
                      </div>
                      <select
                        class="form-control select2"
                        name="group_id"
                        aria-label="Default select example"
                        v-model="order.account_id"
                       v-on:change="create"
                      >
                        <option selected>Open this select Account</option>
                        <option v-for="account in accounts" :value="account.id">
                          {{ account.name }}
                        </option>
                      </select>
                      <!-- <p class="mb-2">Office 149, 450 South Brand Brooklyn</p>
                      <p class="mb-2">San Diego County, CA 91905, USA</p>
                      <p class="mb-3">+1 (123) 456 7891, +44 (876) 543 2198</p> -->
                    </div>
                    <div class="col-md-5">
                      <dl class="row mb-2">
                        <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end ps-0">
                          <span class="h4 text-capitalize mb-0 text-nowrap">Invoice</span>
                        </dt>
                        <dd
                          class="col-sm-6 d-flex justify-content-md-end pe-0 ps-0 ps-sm-2"
                        >
                          <div class="input-group input-group-merge disabled w-px-150">
                            <span class="input-group-text">#</span>
                            <input
                              type="text"
                              class="form-control"
                              disabled=""
                              placeholder="3905"
                              value="3905"
                              id="invoiceId"
                            />
                          </div>
                        </dd>
                        <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end ps-0">
                          <span class="fw-normal">Date:</span>
                        </dt>
                        <dd
                          class="col-sm-6 d-flex justify-content-md-end pe-0 ps-0 ps-sm-2"
                        >
                          <input
                            type="date"
                            class="form-control w-px-150 date-picker flatpickr-input"
                            placeholder="YYYY-MM-DD"
                            v-model="order.date"
                          />
                        </dd>
                      </dl>
                    </div>
                  </div>
                  <hr class="my-3" />
                <!-- ----------------------------------------------------     -->
                <div v-for="(item, index) in orderItems" :key="index" >
                    <div class="mb-3" data-repeater-list="group-a">
                      <div class="repeater-wrapper pt-0 pt-md-4"
                        data-repeater-item=""
                        style=""  >
                        <div class="d-flex border rounded position-relative pe-0">
                          <div class="row w-100 p-3">
                        <div class="col-md-6 col-12 mb-md-0 mb-3">
                            <p class="mb-2 repeater-title">Item</p>
                        <select
                        class="form-control select2"
                        name="group_id"
                        :id="'product_' + index"
                        aria-label="Default select example"
                        v-model="item.product_id">
                        <option selected>Open this select Account</option>
                        <option v-for="product in products" :value="product.id">
                          {{ product.name }}
                        </option>
                      </select>
                            </div>
                            <div class="col-md-3 col-12 mb-md-0 mb-3">
                              <p class="mb-2 repeater-title">Amount</p>
                              <input
                                type="number"
                                class="form-control invoice-item-price mb-3"
                                placeholder="00"
                                min="12"
                                :id="'amount_' + index"
                                v-model="item.amount" v-on:input="calculateSum"
                              />
                            </div>
                            <div class="col-md-2 col-12 mb-md-0 mb-3">
                              <p class="mb-2 repeater-title">Qty</p>
                              <input
                                type="number"
                                class="form-control invoice-item-qty"
                                placeholder="1"
                                min="1"
                                max="50"
                                :id="'quantity_' + index"
                                v-model="item.quantity" v-on:input="calculateSum"
                              />
                            </div>
                            <div class="col-md-1 col-12 pe-0">
                              <p class="mb-2 repeater-title">Price</p>
                              <p class="mb-0">
                              <input
                                type="text"
                                class="form-control invoice-item-qty"
                                placeholder="Price"
                                :id="'price_' + index"
                                :disabled="10"
                                v-model="item.price"/></p>
                            </div>
                          </div>
                          <div
                            class="d-flex flex-column align-items-center justify-content-between border-start p-2"
                          >
                            <button type="button" @click="removeItem(index)"> <i class="ti ti-x cursor-pointer" data-repeater-delete=""></i></button>
                            <div class="dropdown">
                              <i
                                class="ti ti-settings ti-xs cursor-pointer more-options-dropdown"
                                role="button"
                                id="dropdownMenuButton"
                                data-bs-toggle="dropdown"
                                data-bs-auto-close="outside"
                                aria-expanded="false"
                              >
                              </i>
                              <div
                                class="dropdown-menu dropdown-menu-end w-px-300 p-3"
                                aria-labelledby="dropdownMenuButton"
                              >
                                <div class="row g-3">
                                  <div class="col-12">
                                    <label for="discountInput" class="form-label"
                                      >Discount(%)</label
                                    >
                                    <input
                                      type="number"
                                      class="form-control"
                                      id="discountInput"
                                      min="0"
                                      max="100"
                                    />
                                  </div>
                                  <div class="col-md-6">
                                    <label for="taxInput1" class="form-label"
                                      >Tax 1</label
                                    >
                                    <select
                                      name="group-a[3][tax-1-input]"
                                      id="taxInput1"
                                      class="form-select tax-select"
                                    >
                                      <option value="0%" selected="">0%</option>
                                      <option value="1%">1%</option>
                                      <option value="10%">10%</option>
                                      <option value="18%">18%</option>
                                      <option value="40%">40%</option>
                                    </select>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="taxInput2" class="form-label"
                                      >Tax 2</label
                                    >
                                    <select
                                      name="group-a[3][tax-2-input]"
                                      id="taxInput2"
                                      class="form-select tax-select"
                                    >
                                      <option value="0%" selected="">0%</option>
                                      <option value="1%">1%</option>
                                      <option value="10%">10%</option>
                                      <option value="18%">18%</option>
                                      <option value="40%">40%</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="dropdown-divider my-3"></div>
                                <button
                                  type="button"
                                  class="btn btn-label-primary btn-apply-changes waves-effect"
                                >
                                  Apply
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                     </div>

                    <!-- ------ -->
                    <div class="row pb-4">
                      <div class="col-12">
                        <button
                          type="button"
                          class="btn btn-primary waves-effect waves-light"
                          data-repeater-create=""
                          @click="addItem"
                        >
                          Add Item
                        </button>
                      </div>
                    </div>
                  <hr class="my-3" />
                  <div class="row p-0 p-sm-4">
                    <div class="col-md-6 mb-md-0 mb-3">
                      <div class="d-flex align-items-center mb-3">
                        <label for="salesperson" class="form-label me-4 fw-medium"
                          >Salesperson:</label
                        >
                        <input
                          type="text"
                          class="form-control ms-3"
                          id="salesperson"
                          placeholder="Edward Crowley"
                        />
                      </div>
                      <input
                        type="text"
                        class="form-control"
                        id="invoiceMsg"
                        placeholder="Thanks for your business" />
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                      <div class="invoice-calculations">
                        <div class="d-flex justify-content-between mb-2">
                          <span class="w-px-100">Subtotal:</span>
                          <span class="fw-medium">$ {{ calculateOverallTotal }}</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                          <span class="w-px-100">Tax:</span>
                          <span class="fw-medium">$ {{ this.tax }}</span>
                        </div>
                        <hr />
                        <div class="d-flex justify-content-between">
                          <span class="w-px-100">Total:</span>
                          <span class="fw-medium">$ {{ this.total }}</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Invoice Add-->
            <!-- Invoice Actions -->
            <div class="col-lg-3 col-12 invoice-actions">
              <div class="card mb-4">
                <div class="card-body">
                  <button
                    class="btn btn-primary d-grid w-100 mb-2 waves-effect waves-light"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#sendInvoiceOffcanvas"
                  >
                    <span
                      class="d-flex align-items-center justify-content-center text-nowrap"
                      ><i class="ti ti-send ti-xs me-2"></i>Send Invoice</span
                    >
                  </button>
                  <a
                    href="./app-invoice-preview.html"
                    class="btn btn-label-secondary d-grid w-100 mb-2 waves-effect"
                    >Preview</a
                  >
                  <button
                    type="submit" 
                    class="btn btn-label-secondary d-grid w-100 waves-effect"
                  >
                    Saves
                  </button>
                </div> 
              </div>
              <div>
              </div>
            </div>
            <!-- /Invoice Actions -->
          </div>
          <!-- Offcanvas -->
          <!-- Send Invoice Sidebar -->
          <div
            class="offcanvas offcanvas-end"
            id="sendInvoiceOffcanvas"
            aria-hidden="true"
          >
            <div class="offcanvas-header my-1">
              <h5 class="offcanvas-title">Send Invoice</h5>
              <button
                type="button"
                class="btn-close text-reset"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
              ></button>
            </div>
            <div class="offcanvas-body pt-0 flex-grow-1">
                <div class="mb-3">
                  <label for="invoice-from" class="form-label">From</label>
                  <input
                    type="text"
                    class="form-control"
                    id="invoice-from"
                    value="shelbyComapny@email.com"
                    placeholder="company@email.com"
                  />
                </div>
                <div class="mb-3">
                  <label for="invoice-to" class="form-label">To</label>
                  <input
                    type="text"
                    class="form-control"
                    id="invoice-to"
                    value="qConsolidated@email.com"
                    placeholder="company@email.com"
                  />
                </div>
                <div class="mb-3">
                  <label for="invoice-subject" class="form-label">Subject</label>
                  <input
                    type="text"
                    class="form-control"
                    id="invoice-subject"
                    value="Invoice of purchased Admin Templates"
                    placeholder="Invoice regarding goods"
                  />
                </div>
                <div class="mb-3">
                  <label for="invoice-message" class="form-label">Message</label>
                  <textarea
                    class="form-control"
                    name="invoice-message"
                    id="invoice-message"
                    cols="3"
                    rows="8"
                  >
            Dear Queen Consolidated,
          Thank you for your business, always a pleasure to work with you!
          We have generated a new invoice in the amount of $95.59
          We would appreciate payment of this invoice by 05/11/2021</textarea
                  >
                </div>
                <div class="mb-4">
                  <span class="badge bg-label-primary">
                    <i class="ti ti-link ti-xs"></i>
                    <span class="align-middle">Invoice Attached</span>
                  </span>
                </div>
                <div class="mb-3 d-flex flex-wrap">
                  <button
                    type="button"
                    class="btn btn-primary me-3 waves-effect waves-light"
                    data-bs-dismiss="offcanvas"
                  >
                    Send
                  </button>
                  <button
                    type="button"
                    class="btn btn-label-secondary waves-effect"
                    data-bs-dismiss="offcanvas"
                  >
                    Cancel
                  </button>
                </div>
            </div>
          </div>
              </form>
          <!-- /Send Invoice Sidebar -->
          <!-- /Offcanvas -->
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
    <div
      class="drag-target"
      style="
        touch-action: pan-y;
        user-select: none;
        -webkit-user-drag: none;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
      "
    ></div>
  </div>
</template>
<script>
import Sidebar from "../Sidebar.vue";
import Footer from "../Footer.vue";

// import axios from 'axios';
export default {
  components: { Sidebar, Footer },
  data() {
    return {
        orderId:null,
        order: {
        account_id: null,
        date: null,
        tax: 0,
        subtotal:0,
        total: 0,
        // status: null,
      },
      orderItem:{
        product_id:null,
        order_id: this.orderId,
        quantity:0,
        amount:0
      },
      orderItems: [],
      orderIds:null,
      currentDate: new Date(),
      accounts: null,
      sum:0,
      tax:0,
      total:0,
      products: null,
      submitted: false,
    };
  },
  mounted() {
     this.getAccounts(),
     this.getProducts(),
      this.loadCurrentDate(),
      this.addItem()
      this.totalTax()
      this.totalTaxTotal()
      this.updateOrder()
  },
  methods: {
   addItem(){
      // Clone the last item in the array to add a new item
      const newItem = { ...this.orderItems[this.orderItems.length - 1] };
      this.orderItems.push(newItem);
    },
     removeItem(index) {
      this.orderItems.splice(index, 1);
    },
     loadCurrentDate() {
      const now = new Date();
      const year = now.getFullYear();
      const month = (now.getMonth() + 1).toString().padStart(2, '0');
      const day = now.getDate().toString().padStart(2, '0');
      this.order.date = `${year}-${month}-${day}`;
    },
    create: function(){
        axios.post("http://127.0.0.1:8000/api/order", this.order)
        .then((response) => {
            //   this.$router.push({ name: "order.index" });
            this.orderId = response.data.data.id
        })
        .catch((error) => {
          console.log(error);
        });
    },
     createItems(){
      this.orderItems.forEach(item => {
          axios.post("http://127.0.0.1:8000/api/order/item", item)
        .then((response) => {
            //   this.$router.push({ name: "order.index" });
            this.orderId = response.data.data.id
        })
        .catch((error) => {
          console.log(error);
        });
        });
        this.updateOrder();
     this.$router.push({ name: "order.index" });
    },
    updateOrder(){
     this.order.tax = this.tax;
       this.order.subtotal = this.sum;
       this.order.total = this.total;
       
      axios.put('http://127.0.0.1:8000/api/order/'+this.orderId,this.order).then(response=>{
          }).catch(error=>{
            console.log(error)
        })
    },
      calculateSum: function() {},
    getAccounts() {
      axios
        .get("http://127.0.0.1:8000/api/account")
        .then((response) => {
          this.accounts = response.data.data;
          console.log(this.accounts)
        })
        .catch((error) => {
          console.log(error);
        });
    },
      
      getProducts() {
      axios
        .get("http://127.0.0.1:8000/api/products")
        .then((response) => {
          this.products = response.data.data;
          console.log(this.order.date)
        })
        .catch((error) => {
          console.log(error);
        });
    },
     calculateTotal(item) {
      // Calculate total for each item
      return item.quantity * item.amount;
    },
     totalTax(total) {
      return (total * 18)/100 ;
    },
    totalTaxTotal(total,tax){
        return total + tax;
        }
    },
  computed: {
    calculateOverallTotal(){
      // Calculate overall total based on all items
      return this.orderItems.reduce((total, item) => {
        item.order_id =  this.orderId;
        this.orderItem.product_id = item.product_id;
        this.orderItem.quantity = item.quantity;
        this.orderItem.amount = item.amount;
        item.price = item.quantity * item.amount;
        this.sum = total + this.calculateTotal(item);
       this.tax = this.totalTax(this.sum);
       this.total = this.totalTaxTotal(this.sum,this.tax);
       return total + this.calculateTotal(item);
      }, 0);
    } 
  }
};
</script>
