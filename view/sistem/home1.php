 <script>
   // Initialize and add the map
   function initMap() {
     // The location of Uluru
     var uluru = {
       lat: -2.1634076,
       lng: 106.1695294
     };
     // The map, centered at Uluru
     var map = new google.maps.Map(
       document.getElementById('map'), {
         zoom: 17,
         center: uluru
       });
     // The marker, positioned at Uluru
     var marker = new google.maps.Marker({
       position: uluru,
       map: map,
       title: 'Nama Maps'
     });
   }
 </script>
 <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyY0ZSEe2hO5U1aOaJ2spgAw60s2gYsds" async defer></script>

 <title><?php echo $row_data['nama']; ?> | Dashboard</title>


 <?php
  date_default_timezone_set('Asia/Jakarta');
  if ($_SESSION['level_simpeg'] == "admin") {
  ?>
   <script src="bootstrap/chart/js/highcharts.js"></script>

   <script src="bootstrap/chart/js/jquery-1.10.1.min.js"></script>

   <script>
     var chart;
     $(document).ready(function() {
       chart = new Highcharts.Chart({

         chart: {
           renderTo: 'mygraph',
           plotBackgroundColor: null,
           plotBorderWidth: null,
           plotShadow: false
         },
         title: {
           text: 'Grafik Data Pegawai '
         },
         tooltip: {
           formatter: function() {
             return '<b>' +
               this.point.name + '</b>: ' + Highcharts.numberFormat(this.percentage, 2) + ' % ';
           }
         },


         plotOptions: {
           pie: {
             allowPointSelect: true,
             cursor: 'pointer',
             dataLabels: {
               enabled: true,
               color: '#000000',
               connectorColor: 'green',
               formatter: function() {
                 return '<b>' + this.point.name + '</b>: ' + Highcharts.numberFormat(this.percentage, 2) + ' % ';
               }
             }
           }
         },

         series: [{
           type: 'pie',
           name: 'pegawai share',
           data: [
             <?php
              include "config/koneksi.php";
              $query = mysqli_query($koneksi, "SELECT * from pegawai GROUP BY gender");

              while ($row = mysqli_fetch_array($query)) {
                $gender = $row['gender'];

                $data = mysqli_num_rows(mysqli_query($koneksi, "SELECT * from pegawai where gender='$gender'"));
                $jumlah = $data;
              ?>[
                 '<?php if ($gender == "l") {
                    echo "Laki - Laki";
                  } else {
                    echo "Wanita";
                  } ?>', <?php echo $jumlah; ?>
               ],
             <?php
              }
              ?>

           ]
         }]
       });
     });
   </script>
   <!DOCTYPE html>
   <html lang="en">

   <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
     <link href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" rel="stylesheet" />
     <link href="style/css/styles.css" rel="stylesheet" />
     <link rel="icon" type="image/x-icon" href="styleassets/img/favicon.png" />
     <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
   </head>

   <body class="nav-fixed">
     <nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white" id="sidenavAccordion">
       <!-- Sidenav Toggle Button-->
       <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle"><i data-feather="menu"></i></button>
       <!-- Navbar Brand-->
       <!-- * * Tip * * You can use text or an image for your navbar brand.-->
       <!-- * * * * * * When using an image, we recommend the SVG format.-->
       <!-- * * * * * * Dimensions: Maximum height: 32px, maximum width: 240px-->
       <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="index.html">SB Admin Pro</a>
       <!-- Navbar Search Input-->
       <!-- * * Note: * * Visible only on and above the lg breakpoint-->
       <form class="form-inline me-auto d-none d-lg-block me-3">
         <div class="input-group input-group-joined input-group-solid">
           <input class="form-control pe-0" type="search" placeholder="Search" aria-label="Search" />
           <div class="input-group-text"><i data-feather="search"></i></div>
         </div>
       </form>
       <!-- Navbar Items-->
       <ul class="navbar-nav align-items-center ms-auto">
         <!-- Documentation Dropdown-->
         <li class="nav-item dropdown no-caret d-none d-md-block me-3">
           <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <div class="fw-500">Documentation</div>
             <i class="fas fa-chevron-right dropdown-arrow"></i>
           </a>
           <div class="dropdown-menu dropdown-menu-end py-0 me-sm-n15 me-lg-0 o-hidden animated--fade-in-up" aria-labelledby="navbarDropdownDocs">
             <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro" target="_blank">
               <div class="icon-stack bg-primary-soft text-primary me-4"><i data-feather="book"></i></div>
               <div>
                 <div class="small text-gray-500">Documentation</div>
                 Usage instructions and reference
               </div>
             </a>
             <div class="dropdown-divider m-0"></div>
             <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro/components" target="_blank">
               <div class="icon-stack bg-primary-soft text-primary me-4"><i data-feather="code"></i></div>
               <div>
                 <div class="small text-gray-500">Components</div>
                 Code snippets and reference
               </div>
             </a>
             <div class="dropdown-divider m-0"></div>
             <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro/changelog" target="_blank">
               <div class="icon-stack bg-primary-soft text-primary me-4"><i data-feather="file-text"></i></div>
               <div>
                 <div class="small text-gray-500">Changelog</div>
                 Updates and changes
               </div>
             </a>
           </div>
         </li>
         <!-- Alerts Dropdown-->
         <li class="nav-item dropdown no-caret d-none d-sm-block me-3 dropdown-notifications">
           <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="bell"></i></a>
           <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAlerts">
             <h6 class="dropdown-header dropdown-notifications-header">
               <i class="me-2" data-feather="bell"></i>
               Alerts Center
             </h6>
             <!-- Example Alert 1-->
             <a class="dropdown-item dropdown-notifications-item" href="#!">
               <div class="dropdown-notifications-item-icon bg-warning"><i data-feather="activity"></i></div>
               <div class="dropdown-notifications-item-content">
                 <div class="dropdown-notifications-item-content-details">December 29, 2021</div>
                 <div class="dropdown-notifications-item-content-text">This is an alert message. It's nothing serious, but it requires your attention.</div>
               </div>
             </a>
             <!-- Example Alert 2-->
             <a class="dropdown-item dropdown-notifications-item" href="#!">
               <div class="dropdown-notifications-item-icon bg-info"><i data-feather="bar-chart"></i></div>
               <div class="dropdown-notifications-item-content">
                 <div class="dropdown-notifications-item-content-details">December 22, 2021</div>
                 <div class="dropdown-notifications-item-content-text">A new monthly report is ready. Click here to view!</div>
               </div>
             </a>
             <!-- Example Alert 3-->
             <a class="dropdown-item dropdown-notifications-item" href="#!">
               <div class="dropdown-notifications-item-icon bg-danger"><i class="fas fa-exclamation-triangle"></i></div>
               <div class="dropdown-notifications-item-content">
                 <div class="dropdown-notifications-item-content-details">December 8, 2021</div>
                 <div class="dropdown-notifications-item-content-text">Critical system failure, systems shutting down.</div>
               </div>
             </a>
             <!-- Example Alert 4-->
             <a class="dropdown-item dropdown-notifications-item" href="#!">
               <div class="dropdown-notifications-item-icon bg-success"><i data-feather="user-plus"></i></div>
               <div class="dropdown-notifications-item-content">
                 <div class="dropdown-notifications-item-content-details">December 2, 2021</div>
                 <div class="dropdown-notifications-item-content-text">New user request. Woody has requested access to the organization.</div>
               </div>
             </a>
             <a class="dropdown-item dropdown-notifications-footer" href="#!">View All Alerts</a>
           </div>
         </li>
         <!-- Messages Dropdown-->
         <li class="nav-item dropdown no-caret d-none d-sm-block me-3 dropdown-notifications">
           <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="mail"></i></a>
           <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownMessages">
             <h6 class="dropdown-header dropdown-notifications-header">
               <i class="me-2" data-feather="mail"></i>
               Message Center
             </h6>
             <!-- Example Message 1  -->
             <a class="dropdown-item dropdown-notifications-item" href="#!">
               <img class="dropdown-notifications-item-img" src="assets/img/illustrations/profiles/profile-2.png" />
               <div class="dropdown-notifications-item-content">
                 <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                 <div class="dropdown-notifications-item-content-details">Thomas Wilcox · 58m</div>
               </div>
             </a>
             <!-- Example Message 2-->
             <a class="dropdown-item dropdown-notifications-item" href="#!">
               <img class="dropdown-notifications-item-img" src="assets/img/illustrations/profiles/profile-3.png" />
               <div class="dropdown-notifications-item-content">
                 <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                 <div class="dropdown-notifications-item-content-details">Emily Fowler · 2d</div>
               </div>
             </a>
             <!-- Example Message 3-->
             <a class="dropdown-item dropdown-notifications-item" href="#!">
               <img class="dropdown-notifications-item-img" src="assets/img/illustrations/profiles/profile-4.png" />
               <div class="dropdown-notifications-item-content">
                 <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                 <div class="dropdown-notifications-item-content-details">Marshall Rosencrantz · 3d</div>
               </div>
             </a>
             <!-- Example Message 4-->
             <a class="dropdown-item dropdown-notifications-item" href="#!">
               <img class="dropdown-notifications-item-img" src="assets/img/illustrations/profiles/profile-5.png" />
               <div class="dropdown-notifications-item-content">
                 <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                 <div class="dropdown-notifications-item-content-details">Colby Newton · 3d</div>
               </div>
             </a>
             <!-- Sidenav Heading (Custom)-->
             <div class="sidenav-menu-heading">Custom</div>
             <!-- Sidenav Accordion (Pages)-->
             <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
               <div class="nav-link-icon"><i data-feather="grid"></i></div>
               Pages
               <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="collapsePages" data-bs-parent="#accordionSidenav">
               <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                 <!-- Nested Sidenav Accordion (Pages -> Account)-->
                 <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAccount" aria-expanded="false" aria-controls="pagesCollapseAccount">
                   Account
                   <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                 </a>
                 <div class="collapse" id="pagesCollapseAccount" data-bs-parent="#accordionSidenavPagesMenu">
                   <nav class="sidenav-menu-nested nav">
                     <a class="nav-link" href="account-profile.html">Profile</a>
                     <a class="nav-link" href="account-billing.html">Billing</a>
                     <a class="nav-link" href="account-security.html">Security</a>
                     <a class="nav-link" href="account-notifications.html">Notifications</a>
                   </nav>
                 </div>
                 <!-- Nested Sidenav Accordion (Pages -> Authentication)-->
                 <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                   Authentication
                   <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                 </a>
                 <div class="collapse" id="pagesCollapseAuth" data-bs-parent="#accordionSidenavPagesMenu">
                   <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesAuth">
                     <!-- Nested Sidenav Accordion (Pages -> Authentication -> Basic)-->
                     <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuthBasic" aria-expanded="false" aria-controls="pagesCollapseAuthBasic">
                       Basic
                       <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                     </a>
                     <div class="collapse" id="pagesCollapseAuthBasic" data-bs-parent="#accordionSidenavPagesAuth">
                       <nav class="sidenav-menu-nested nav">
                         <a class="nav-link" href="auth-login-basic.html">Login</a>
                         <a class="nav-link" href="auth-register-basic.html">Register</a>
                         <a class="nav-link" href="auth-password-basic.html">Forgot Password</a>
                       </nav>
                     </div>
                     <!-- Nested Sidenav Accordion (Pages -> Authentication -> Social)-->
                     <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuthSocial" aria-expanded="false" aria-controls="pagesCollapseAuthSocial">
                       Social
                       <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                     </a>
                     <div class="collapse" id="pagesCollapseAuthSocial" data-bs-parent="#accordionSidenavPagesAuth">
                       <nav class="sidenav-menu-nested nav">
                         <a class="nav-link" href="auth-login-social.html">Login</a>
                         <a class="nav-link" href="auth-register-social.html">Register</a>
                         <a class="nav-link" href="auth-password-social.html">Forgot Password</a>
                       </nav>
                     </div>
                   </nav>
                 </div>
                 <!-- Nested Sidenav Accordion (Pages -> Error)-->
                 <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                   Error
                   <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                 </a>
                 <div class="collapse" id="pagesCollapseError" data-bs-parent="#accordionSidenavPagesMenu">
                   <nav class="sidenav-menu-nested nav">
                     <a class="nav-link" href="error-400.html">400 Error</a>
                     <a class="nav-link" href="error-401.html">401 Error</a>
                     <a class="nav-link" href="error-403.html">403 Error</a>
                     <a class="nav-link" href="error-404-1.html">404 Error 1</a>
                     <a class="nav-link" href="error-404-2.html">404 Error 2</a>
                     <a class="nav-link" href="error-500.html">500 Error</a>
                     <a class="nav-link" href="error-503.html">503 Error</a>
                     <a class="nav-link" href="error-504.html">504 Error</a>
                   </nav>
                 </div>
                 <a class="nav-link" href="pricing.html">Pricing</a>
                 <a class="nav-link" href="invoice.html">Invoice</a>
               </nav>
             </div>
             <!-- Sidenav Accordion (Applications)-->
             <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseApps" aria-expanded="false" aria-controls="collapseApps">
               <div class="nav-link-icon"><i data-feather="globe"></i></div>
               Applications
               <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="collapseApps" data-bs-parent="#accordionSidenav">
               <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavAppsMenu">
                 <!-- Nested Sidenav Accordion (Apps -> Knowledge Base)-->
                 <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#appsCollapseKnowledgeBase" aria-expanded="false" aria-controls="appsCollapseKnowledgeBase">
                   Knowledge Base
                   <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                 </a>
                 <div class="collapse" id="appsCollapseKnowledgeBase" data-bs-parent="#accordionSidenavAppsMenu">
                   <nav class="sidenav-menu-nested nav">
                     <a class="nav-link" href="knowledge-base-home-1.html">Home 1</a>
                     <a class="nav-link" href="knowledge-base-home-2.html">Home 2</a>
                     <a class="nav-link" href="knowledge-base-category.html">Category</a>
                     <a class="nav-link" href="knowledge-base-article.html">Article</a>
                   </nav>
                 </div>
                 <!-- Nested Sidenav Accordion (Apps -> User Management)-->
                 <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#appsCollapseUserManagement" aria-expanded="false" aria-controls="appsCollapseUserManagement">
                   User Management
                   <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                 </a>
                 <div class="collapse" id="appsCollapseUserManagement" data-bs-parent="#accordionSidenavAppsMenu">
                   <nav class="sidenav-menu-nested nav">
                     <a class="nav-link" href="user-management-list.html">Users List</a>
                     <a class="nav-link" href="user-management-edit-user.html">Edit User</a>
                     <a class="nav-link" href="user-management-add-user.html">Add User</a>
                     <a class="nav-link" href="user-management-groups-list.html">Groups List</a>
                     <a class="nav-link" href="user-management-org-details.html">Organization Details</a>
                   </nav>
                 </div>
                 <!-- Nested Sidenav Accordion (Apps -> Posts Management)-->
                 <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#appsCollapsePostsManagement" aria-expanded="false" aria-controls="appsCollapsePostsManagement">
                   Posts Management
                   <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                 </a>
                 <div class="collapse" id="appsCollapsePostsManagement" data-bs-parent="#accordionSidenavAppsMenu">
                   <nav class="sidenav-menu-nested nav">
                     <a class="nav-link" href="blog-management-posts-list.html">Posts List</a>
                     <a class="nav-link" href="blog-management-create-post.html">Create Post</a>
                     <a class="nav-link" href="blog-management-edit-post.html">Edit Post</a>
                     <a class="nav-link" href="blog-management-posts-admin.html">Posts Admin</a>
                   </nav>
                 </div>
               </nav>
             </div>
             <!-- Sidenav Accordion (Flows)-->
             <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseFlows" aria-expanded="false" aria-controls="collapseFlows">
               <div class="nav-link-icon"><i data-feather="repeat"></i></div>
               Flows
               <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="collapseFlows" data-bs-parent="#accordionSidenav">
               <nav class="sidenav-menu-nested nav">
                 <a class="nav-link" href="multi-tenant-select.html">Multi-Tenant Registration</a>
                 <a class="nav-link" href="wizard.html">Wizard</a>
               </nav>
             </div>
             <!-- Sidenav Heading (UI Toolkit)-->
             <div class="sidenav-menu-heading">UI Toolkit</div>
             <!-- Sidenav Accordion (Layout)-->
             <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
               <div class="nav-link-icon"><i data-feather="layout"></i></div>
               Layout
               <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="collapseLayouts" data-bs-parent="#accordionSidenav">
               <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavLayout">
                 <!-- Nested Sidenav Accordion (Layout -> Navigation)-->
                 <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseLayoutSidenavVariations" aria-expanded="false" aria-controls="collapseLayoutSidenavVariations">
                   Navigation
                   <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                 </a>
                 <div class="collapse" id="collapseLayoutSidenavVariations" data-bs-parent="#accordionSidenavLayout">
                   <nav class="sidenav-menu-nested nav">
                     <a class="nav-link" href="layout-static.html">Static Sidenav</a>
                     <a class="nav-link" href="layout-dark.html">Dark Sidenav</a>
                     <a class="nav-link" href="layout-rtl.html">RTL Layout</a>
                   </nav>
                 </div>
                 <!-- Nested Sidenav Accordion (Layout -> Container Options)-->
                 <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseLayoutContainers" aria-expanded="false" aria-controls="collapseLayoutContainers">
                   Container Options
                   <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                 </a>
                 <div class="collapse" id="collapseLayoutContainers" data-bs-parent="#accordionSidenavLayout">
                   <nav class="sidenav-menu-nested nav">
                     <a class="nav-link" href="layout-boxed.html">Boxed Layout</a>
                     <a class="nav-link" href="layout-fluid.html">Fluid Layout</a>
                   </nav>
                 </div>
                 <!-- Nested Sidenav Accordion (Layout -> Page Headers)-->
                 <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsPageHeaders" aria-expanded="false" aria-controls="collapseLayoutsPageHeaders">
                   Page Headers
                   <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                 </a>
                 <div class="collapse" id="collapseLayoutsPageHeaders" data-bs-parent="#accordionSidenavLayout">
                   <nav class="sidenav-menu-nested nav">
                     <a class="nav-link" href="header-simplified.html">Simplified</a>
                     <a class="nav-link" href="header-compact.html">Compact</a>
                     <a class="nav-link" href="header-overlap.html">Content Overlap</a>
                     <a class="nav-link" href="header-breadcrumbs.html">Breadcrumbs</a>
                     <a class="nav-link" href="header-light.html">Light</a>
                   </nav>
                 </div>
                 <!-- Nested Sidenav Accordion (Layout -> Starter Layouts)-->
                 <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsStarterTemplates" aria-expanded="false" aria-controls="collapseLayoutsStarterTemplates">
                   Starter Layouts
                   <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                 </a>
                 <div class="collapse" id="collapseLayoutsStarterTemplates" data-bs-parent="#accordionSidenavLayout">
                   <nav class="sidenav-menu-nested nav">
                     <a class="nav-link" href="starter-default.html">Default</a>
                     <a class="nav-link" href="starter-minimal.html">Minimal</a>
                   </nav>
                 </div>
               </nav>
             </div>
   </body>
   <!-- <table width="100%">
       <tr>
         <td align="center" width="15%">
           <img src="logo/bm.png" style="width: 100px;"> -->
   <!-- </td>
         <td width="85%">
           <h2><b style="color: orange;">SSistem Informasi Kenaikan Pangkat, Kenaikan Gaji Berkala dan Arsip Kepegawaian<?php echo $row_data['nama']; ?><br>
               <?php echo $row_data['instansi']; ?></b></h2>
           <p style="color: black;text-shadow: 0 0 5px white;"><b><?php echo $row_data['alamat']; ?></b></p>
         </td> -->
   </tr>
   </table>
   <br><br>
   <!-- INI UNTUK ISI -->
   <!-- INI UNTUK ISI -->
   <div class="row">

     <div class="col-lg-6 col-xs-12 col-md-6">
       <!-- small box -->
       <div class="small-box bg-aqua">
         <div class="panel panel-primary">
           <div class="panel-heading">
             <center>Grafik Data Pegawai <?php echo $row_data['nama']; ?></center>
           </div>
           <div class="panel-body">
             <div id="mygraph"></div>
           </div>
         </div>
       </div>
     </div>

     <?php
      $jml = mysqli_num_rows($data_pegawai);
      ?>
     <div class="col-lg-3 col-xs-6">
       <!-- small box -->
       <div class="small-box bg-aqua">
         <div class="inner">
           <p>Jumlah Pegawai</p>
           <p style="font-size: 25px;" align="center"><b><?php echo $jml; ?></b></p>
         </div>
         <div class="icon">
           <i class="fa fa-street-view"></i>
         </div>
         <a href="index.php?controller=pegawai&method=select" class="small-box-footer">Lihat Data Pegawai <i class="fa fa-arrow-circle-right"></i></a>
       </div>
     </div>

     <div class="col-lg-3 col-xs-6">
       <!-- small box -->
       <div class="small-box bg-blue">
         <?php
          $jml_pengguna = mysqli_num_rows($data_pengguna);
          ?>
         <div class="inner">
           <p>Data Pengguna</p>
           <p align="center" style="font-size: 25px;"><b><?php echo $jml_pengguna; ?></b></p>
         </div>
         <div class="icon">
           <i class="fa fa-users"></i>
         </div>
         <a href="index.php?controller=user&method=pengguna" class="small-box-footer">Lihat Data Pengguna <i class="fa fa-arrow-circle-right"></i></a>
       </div>
     </div>
   </div>
   <section>
     <div id="map" style="widht:100%;height:400px;"></div>
   </section>

   </section>
   <section>
     </div>
     </div>
   </section>




   <script src="bootstrap/chart/js/highcharts.js"></script>
   <script src="bootstrap/chart/js/jquery-1.10.1.min.js"></script>

   <!-- bagian user -- >


<?php
  } else {
?>

<!-- INI UNTUK JUDUL -->
   <section class="content-header">
     <h1>Dashboard
       <small>Control panel</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li class="active"></i>Dashboard</li>
     </ol>
   </section>
   <section class="content-header">
     <section class="content-header bg-teal" style="border-radius: 5px;">

       <marquee><b>Selamat Datang Di Sistem Informasi Kenaikan Pangkat, Kenaikan Gaji Berkala dan Arsip Kepegawaian <?php
                                                                                                                    echo $row_data['nama'];
                                                                                                                    ?> <?php
                                                                                                                        echo $row_data['instansi'];
                                                                                                                        ?>
         </b></marquee>
     </section>
   </section>
   <section class="content">

     <table width="100%">
       <tr>
         <td align="center" width="15%">
           <img src="logo/bm.png" style="width: 100px;">
         </td>
         <td width="85%">
           <h2><b style="color: orange;">Sistem Informasi Kenaikan Pangkat, Kenaikan Gaji Berkala dan Arsip Kepegawaian <?php echo $row_data['nama']; ?><br>
               <?php echo $row_data['instansi']; ?></b></h2>
           <p style="color: black;text-shadow: 0 0 5px white;"><b><?php echo $row_data['alamat']; ?></b></p>
         </td>
       </tr>
     </table>
     <br>
     <section>

       <?php

        $usr = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$_SESSION[username_simpeg]'");
        $dt = mysqli_fetch_array($usr);

        $tgl = date('Y-m-d');

        $qry_kenaikan = mysqli_query($koneksi, "SELECT * FROM mutasi WHERE nip='$dt[nip]'");

        $kenaikan = mysqli_fetch_array($qry_kenaikan);

        $date1 = new DateTime($kenaikan['tmt_kenaikan']);
        $date2 = new DateTime($tgl);

        $date3 = new DateTime($kenaikan['tmt_gaji']);


        $difference = $date1->diff($date2);
        $difference2 = $date3->diff($date2);

        $cek = $difference->days;
        $cek2 = $difference2->days;

        //pemberitahuan
        ?>

       <?php
        if ($cek == "0" or $cek2 == "0" or date('m') == "01" or date('m') == "01") {
        ?>
         <div class="box bg-maroon box-solid box-solid">
           <div class="box-header with-border">
             <i class="fa fa-calendar"></i>
             <h3 class="box-title"><b>Pemberitahuan !</b></h3>

             <div class="box-tools pull-right">
               <button type="button" class="btn bg-maroon btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
               </button>
               <button type="button" class="btn bg-maroon btn-sm" data-widget="remove"><i class="fa fa-times"></i>
               </button>
             </div>
             <!-- /.box-tools -->
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <?php
              $qry_pegawai = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE nip='$dt[nip]'");
              $dt_pegawai = mysqli_fetch_array($qry_pegawai);
              echo "<label>Diberitahukan kepada yang bersangkutan,</label> <br> ";
              if (date('m') == "01") {
                echo "<label>- Kenaikan Pangkat Bpk/Ibu " . $dt_pegawai['nama'] . " Akan Naik Ke Pangkat/Golongan " . $kenaikan['kenaikan_pangkat'] . " , menurut TMT " . TanggalIndo($kenaikan['tmt_kenaikan']) . "</label>";
                echo "<br>";
              }
              if (date('m') == "01") {
                echo "<label>- Kenaikan gaji berkala Bpk/Ibu " . $dt_pegawai['nama'] . " akan naik menjadi Rp. " . number_format($kenaikan['kenaikan_gaji'], 0, ".", ".") . " , menurut TMT " . TanggalIndo($kenaikan['tmt_gaji']) . "</label>";
                echo "<br>";
              }
              if ($cek == "0") {
                echo "<label>- Kenaikan pangkat Bpk/Ibu " . $dt_pegawai['nama'] . " sekarang ke Pangkat/Golongan " . $kenaikan['kenaikan_pangkat'] . " , TMT " . TanggalIndo($kenaikan['tmt_kenaikan']) . "</label>";
                echo "<br>";
              }
              if ($cek2 == "0") {
                echo "<label>- Kenaikan gaji berkala Bpk/Ibu " . $dt_pegawai['nama'] . " sekarang naik menjadi Rp. " . number_format($kenaikan['kenaikan_gaji'], 0, ".", ".") . " , TMT " . TanggalIndo($kenaikan['tmt_gaji']) . "</label>";
                echo "<br>";
              }
              ?>
           </div>
         </div>
       <?php } else {
        } ?>


       <!-- end-->
     </section>
     <br>
     <!-- INI UNTUK ISI -->
     <!-- INI UNTUK ISI -->
     <div class="row">

       <?php

        $data_gaji   = mysqli_query($koneksi, "SELECT * FROM gaji WHERE nip ='$dt[nip]' ORDER BY id DESC");
        $jml = mysqli_fetch_array($data_gaji);
        ?>
       <div class="col-lg-3 col-xs-6">
         <!-- small box -->
         <div class="small-box bg-aqua">
           <div class="inner">
             <p>Data Penghasilan Terakhir : <br> <?php if ($jml['tgl_gaji'] == "" or $jml['tgl_gaji'] == "0000-00-00") {
                                                    echo "<br>";
                                                  } else {
                                                    echo str_replace("01 ", "", TanggalIndo($jml['tgl_gaji']));
                                                  } ?></p>
             <a style="font-size: 25px;color:white;" align="center"><b>Rp. <?php echo number_format($jml['gaji_bersih'], 0, ".", "."); ?></b></a>
           </div>
           <div class="icon">
             <i class="fa fa-money"></i>
           </div>
           <a href="index.php?controller=pegawai&method=info_gaji" class="small-box-footer">Lihat Riwayat Penggajian <i class="fa fa-arrow-circle-right"></i></a>
         </div>
       </div>



       <div class="col-lg-3 col-xs-6">
         <!-- small box -->
         <div class="small-box bg-blue">
           <?php
            $dt_keluarga = mysqli_query($koneksi, "SELECT * FROM keluarga WHERE nip ='$dt[nip]'");
            $dt_anak     = mysqli_query($koneksi, "SELECT * FROM anak WHERE nip ='$dt[nip]'");

            $jml_keluarga = mysqli_num_rows($dt_keluarga);
            $jml_anak = mysqli_num_rows($dt_anak);

            ?>
           <div class="inner">
             <p>Jumlah Tanggungan Keluarga</p>
             <br>
             <p align="center" style="font-size: 25px;"><b><?php echo $jml_anak + $jml_keluarga; ?> Orang</b></p>
           </div>
           <div class="icon">
             <i class="fa fa-users"></i>
           </div>
           <a href="index.php?controller=pegawai&method=info" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
         </div>
       </div>


       <div class="col-lg-3 col-xs-6">
         <!-- small box -->
         <div class="small-box bg-green">
           <?php
            $dt_berkas     = mysqli_query($koneksi, "SELECT * FROM berkas WHERE nip ='$dt[nip]'");

            $jml_berkas = mysqli_num_rows($dt_berkas);

            ?>
           <div class="inner">
             <p>Jumlah Berkas Masuk</p>
             <br>
             <p align="center" style="font-size: 25px;"><b><?php echo $jml_berkas; ?></b></p>
           </div>
           <div class="icon">
             <i class="fa fa-archive"></i>
           </div>
           <a href="index.php?controller=berkas&method=select" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
         </div>
       </div>
     </div>
     <section>
       <div id="map" style="widht:100%;height:400px;"></div>
     </section>
   </section>

   </html>



 <?php
  }
  ?>