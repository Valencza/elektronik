<!-- ========== App Menu Start ========== -->
          <div class="main-nav">
               <!-- Sidebar Logo -->
               <div class="logo-box">
                    <a href="{{route ('dashboard') }}" class="logo-dark">
                         <img src="{{asset ('assets/admin/images/logo-sm.png') }}" class="logo-sm" alt="logo sm">
                         <img src="{{asset ('assets/admin/images/logo-dark.png') }}" class="logo-lg" alt="logo dark">
                    </a>

                    <a href="{{route ('dashboard') }}" class="logo-light">
                         <img src="{{asset ('assets/admin/images/logo-sm.png') }}" class="logo-sm" alt="logo sm">
                         <img src="{{asset ('assets/admin/images/logo-light.png') }}" class="logo-lg" alt="logo light">
                    </a>
               </div>

               <!-- Menu Toggle Button (sm-hover) -->
               <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
                    <iconify-icon icon="solar:double-alt-arrow-right-bold-duotone" class="button-sm-hover-icon"></iconify-icon>
               </button>

               <div class="scrollbar" data-simplebar>
                    <ul class="navbar-nav" id="navbar-nav">

                         <li class="menu-title">General</li>

                         <li class="nav-item">
                              <a class="nav-link" href="{{route ('dashboard') }}">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:widget-5-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Dashboard </span>
                              </a>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link" href="{{route ('dashboard.products') }}">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:t-shirt-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Produk </span>
                              </a>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarCategory" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCategory">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:clipboard-list-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Category </span>
                              </a>
                              <div class="collapse" id="sidebarCategory">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="{{route ('dashboard.category.index') }}">List</a>
                                        </li>                         
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="{{route ('dashboard.category.edit') }}">Edit</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="{{route ('dashboard.category.create') }}">Create</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarOrders" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarOrders">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:bag-smile-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Orders </span>
                              </a>
                              <div class="collapse" id="sidebarOrders">
                                   <ul class="nav sub-navbar-nav">

                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="{{route ('dashboard.orders.index') }}">List</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="{{route ('dashboard.orders.details') }}">Details</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="{{route ('dashboard.orders.cart') }}">Cart</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="{{route ('dashboard.orders.checkout') }}">Check Out</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarPurchases" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPurchases">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:card-send-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Purchases </span>
                              </a>
                              <div class="collapse" id="sidebarPurchases">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="{{route ('dashboard.purchases.index') }}">List</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="{{route ('dashboard.purchases.orders') }}">Order</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="{{route ('dashboard.purchases.return') }}">Return</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarAttributes" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAttributes">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:confetti-minimalistic-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Attributes </span>
                              </a>
                              <div class="collapse" id="sidebarAttributes">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="{{route ('dashboard.attributes.index') }}">List</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="{{route ('dashboard.attributes.edit') }}">Edit</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="{{route ('dashboard.attributes.create') }}">Create</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarInvoice" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoice">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:bill-list-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Invoices </span>
                              </a>
                              <div class="collapse" id="sidebarInvoice">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="{{route ('dashboard.invoice.index') }}">List</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="{{route ('dashboard.invoice.details') }}">Details</a>
                                        </li>                            
                                   </ul>
                              </div>
                         </li>

                         <!-- <li class="nav-item">
                              <a class="nav-link" href="settings.html">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:settings-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Settings </span>
                              </a>
                         </li> -->

                         <li class="menu-title mt-2">Users</li>

                         <!-- <li class="nav-item">
                              <a class="nav-link" href="pages-profile.html">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:chat-square-like-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Profile </span>
                              </a>
                         </li> -->

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarCustomers" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCustomers">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:users-group-two-rounded-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Account </span>
                              </a>
                              <div class="collapse" id="sidebarCustomers">
                                   <ul class="nav sub-navbar-nav">

                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="{{route ('dashboard.account.index') }}">List</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="{{route ('dashboard.account.details') }}">Details</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarRoles" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarRoles">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:user-speak-rounded-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Roles </span>
                              </a>
                              <div class="collapse" id="sidebarRoles">
                                   <ul class="nav sub-navbar-nav">
                                        <ul class="nav sub-navbar-nav">
                                             <li class="sub-nav-item">
                                                  <a class="sub-nav-link" href="{{route ('dashboard.roles.index') }}">List</a>
                                             </li>
                                             <li class="sub-nav-item">
                                                  <a class="sub-nav-link" href="{{route ('dashboard.roles.edit') }}">Edit</a>
                                             </li>
                                        </ul>
                                   </ul>
                              </div>
                         </li>
                    </ul>
               </div>
          </div>
          <!-- ========== App Menu End ========== -->