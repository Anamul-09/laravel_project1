<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="{{ route('home') }}" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="assets/images/logo.png" srcset="assets/images/logo2x.png 2x" alt="logo">
                <img class="logo-dark logo-img" src="assets/images/logo-dark.png" srcset="assets/images/logo-dark2x.png 2x" alt="logo-dark">
                <img class="logo-small logo-img logo-img-small" src="assets/images/logo-small.png" srcset="assets/images/logo-small2x.png 2x" alt="logo-small">
            </a>
        </div>
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">



                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                            <span class="nk-menu-text">User Manage</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/user-list-default.html" class="nk-menu-link"><span class="nk-menu-text">User List - Default</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/user-list-regular.html" class="nk-menu-link"><span class="nk-menu-text">User List - Regular</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/user-list-compact.html" class="nk-menu-link"><span class="nk-menu-text">User List - Compact</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/user-details-regular.html" class="nk-menu-link"><span class="nk-menu-text">User Details - Regular</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/user-profile-regular.html" class="nk-menu-link"><span class="nk-menu-text">User Profile - Regular</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/user-card.html" class="nk-menu-link"><span class="nk-menu-text">User Contact - Card</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-cc-alt2-fill"></em></span>
                            <span class="nk-menu-text">Orders</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/orders-default.html" class="nk-menu-link"><span class="nk-menu-text">Order List - Default</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/orders-regular.html" class="nk-menu-link"><span class="nk-menu-text">Order List - Regular</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/orders-sales.html" class="nk-menu-link"><span class="nk-menu-text">Order List - Sales</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-card-view"></em></span>
                            <span class="nk-menu-text">Products</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{url('/products')}}" class="nk-menu-link"><span class="nk-menu-text">Product List</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{url('/products/create')}}" class="nk-menu-link"><span class="nk-menu-text">Add Product</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/product-details.html" class="nk-menu-link"><span class="nk-menu-text">Product Details</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="/products" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-view-col"></em></span>
                            <span class="nk-menu-text">All Product</span>
                        </a>
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-layers-fill"></em></span>
                            <span class="nk-menu-text">Ui Elements</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/components/elements/alerts.html" class="nk-menu-link"><span class="nk-menu-text">Alerts</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/accordions.html" class="nk-menu-link"><span class="nk-menu-text">Accordions</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/avatar.html" class="nk-menu-link"><span class="nk-menu-text">Avatar</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/badges.html" class="nk-menu-link"><span class="nk-menu-text">Badges</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/buttons.html" class="nk-menu-link"><span class="nk-menu-text">Buttons</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/buttons-group.html" class="nk-menu-link"><span class="nk-menu-text">Button Group</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/breadcrumb.html" class="nk-menu-link"><span class="nk-menu-text">Breadcrumb</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/cards.html" class="nk-menu-link"><span class="nk-menu-text">Cards</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/carousel.html" class="nk-menu-link"><span class="nk-menu-text">Carousel</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/list-dropdown.html" class="nk-menu-link"><span class="nk-menu-text">List Dropdown</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/modals.html" class="nk-menu-link"><span class="nk-menu-text">Modals</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/pagination.html" class="nk-menu-link"><span class="nk-menu-text">Pagination</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/popover.html" class="nk-menu-link"><span class="nk-menu-text">Popovers</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/progress.html" class="nk-menu-link"><span class="nk-menu-text">Progress</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/spinner.html" class="nk-menu-link"><span class="nk-menu-text">Spinner</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/tabs.html" class="nk-menu-link"><span class="nk-menu-text">Tabs</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/toast.html" class="nk-menu-link"><span class="nk-menu-text">Toasts</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/tooltip.html" class="nk-menu-link"><span class="nk-menu-text">Tooltip</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/typography.html" class="nk-menu-link"><span class="nk-menu-text">Typography</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Utilities</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="html/components/elements/util-border.html" class="nk-menu-link"><span class="nk-menu-text">Border</span></a></li>
                                    <li class="nk-menu-item"><a href="html/components/elements/util-colors.html" class="nk-menu-link"><span class="nk-menu-text">Colors</span></a></li>
                                    <li class="nk-menu-item"><a href="html/components/elements/util-display.html" class="nk-menu-link"><span class="nk-menu-text">Display</span></a></li>
                                    <li class="nk-menu-item"><a href="html/components/elements/util-embeded.html" class="nk-menu-link"><span class="nk-menu-text">Embeded</span></a></li>
                                    <li class="nk-menu-item"><a href="html/components/elements/util-flex.html" class="nk-menu-link"><span class="nk-menu-text">Flex</span></a></li>
                                    <li class="nk-menu-item"><a href="html/components/elements/util-text.html" class="nk-menu-link"><span class="nk-menu-text">Text</span></a></li>
                                    <li class="nk-menu-item"><a href="html/components/elements/util-sizing.html" class="nk-menu-link"><span class="nk-menu-text">Sizing</span></a></li>
                                    <li class="nk-menu-item"><a href="html/components/elements/util-spacing.html" class="nk-menu-link"><span class="nk-menu-text">Spacing</span></a></li>
                                    <li class="nk-menu-item"><a href="html/components/elements/util-others.html" class="nk-menu-link"><span class="nk-menu-text">Others</span></a></li>
                                </ul><!-- .nk-menu-sub -->
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-dot-box-fill"></em></span>
                            <span class="nk-menu-text">Crafted Icons</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/components/misc/svg-icons.html" class="nk-menu-link">
                                    <span class="nk-menu-text">SVG Icon - Exclusive</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/misc/nioicon.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Nioicon - HandCrafted</span>
                                </a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="html/components/misc/icons.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-menu-circled"></em></span>
                            <span class="nk-menu-text">Icon Libraries</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-table-view-fill"></em></span>
                            <span class="nk-menu-text">Tables</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/components/tables/table-basic.html" class="nk-menu-link"><span class="nk-menu-text">Basic Tables</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/tables/table-special.html" class="nk-menu-link"><span class="nk-menu-text">Special Tables</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/tables/table-datatable.html" class="nk-menu-link"><span class="nk-menu-text">DataTables</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-view-group-fill"></em></span>
                            <span class="nk-menu-text">Forms</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/components/forms/form-elements.html" class="nk-menu-link"><span class="nk-menu-text">Form Elements</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/forms/checkbox-radio.html" class="nk-menu-link"><span class="nk-menu-text">Checkbox Radio</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/forms/advanced-controls.html" class="nk-menu-link"><span class="nk-menu-text">Advanced Controls</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/forms/input-group.html" class="nk-menu-link"><span class="nk-menu-text">Input Group</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/forms/form-upload.html" class="nk-menu-link"><span class="nk-menu-text">Form Upload</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/forms/datetime-picker.html" class="nk-menu-link"><span class="nk-menu-text">Date &amp; Time Picker</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/forms/number-spinner.html" class="nk-menu-link"><span class="nk-menu-text">Number Spinner</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/forms/nouislider.html" class="nk-menu-link"><span class="nk-menu-text">noUiSlider</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/forms/form-layouts.html" class="nk-menu-link"><span class="nk-menu-text">Form Layouts</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/forms/form-validation.html" class="nk-menu-link"><span class="nk-menu-text">Form Validation</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Wizard</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="html/components/forms/form-wizard.html" class="nk-menu-link"><span class="nk-menu-text">Basic Demo</span></a></li>
                                    <li class="nk-menu-item"><a href="html/components/forms/wizard/create-project.html" class="nk-menu-link"><span class="nk-menu-text">Create Project</span></a></li>
                                    <li class="nk-menu-item"><a href="html/components/forms/wizard/create-profile.html" class="nk-menu-link"><span class="nk-menu-text">Create Profile</span></a></li>
                                    <li class="nk-menu-item"><a href="html/components/forms/wizard/two-factor-auth.html" class="nk-menu-link"><span class="nk-menu-text">Two Factor Auth</span></a></li>
                                    <li class="nk-menu-item"><a target="_blank" href="html/components/forms/wizard/survey-v1.html" class="nk-menu-link"><span class="nk-menu-text">Survey</span></a></li>
                                    <li class="nk-menu-item"><a target="_blank" href="html/components/forms/wizard/survey-v2.html" class="nk-menu-link"><span class="nk-menu-text">Survey v2</span></a></li>
                                </ul><!-- .nk-menu-sub -->
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Rich Editor</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="html/components/forms/form-summernote.html" class="nk-menu-link"><span class="nk-menu-text">Summernote</span></a></li>
                                    <li class="nk-menu-item"><a href="html/components/forms/form-quill.html" class="nk-menu-link"><span class="nk-menu-text">Quill</span></a></li>
                                    <li class="nk-menu-item"><a href="html/components/forms/form-tinymce.html" class="nk-menu-link"><span class="nk-menu-text">Tinymce</span></a></li>
                                </ul><!-- .nk-menu-sub -->
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-pie-fill"></em></span>
                            <span class="nk-menu-text">Charts</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/components/charts/chartjs.html" class="nk-menu-link"><span class="nk-menu-text">Chart JS</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/charts/knob.html" class="nk-menu-link"><span class="nk-menu-text">Knob JS</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-puzzle-fill"></em></span>
                            <span class="nk-menu-text">Widgets</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/components/widgets/cards.html" class="nk-menu-link"><span class="nk-menu-text">Card Widgets</span></a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/components/widgets/charts.html" class="nk-menu-link"><span class="nk-menu-text">Chart Widgets</span></a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/components/widgets/ratings.html" class="nk-menu-link"><span class="nk-menu-text">Ratings Widgets</span><span class="nk-menu-badge">New</span></a>
                            </li><!-- .nk-menu-item -->
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-block-over"></em></span>
                            <span class="nk-menu-text">Miscellaneous</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/components/misc/slick-sliders.html" class="nk-menu-link"><span class="nk-menu-text">Slick Slider</span></a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/components/misc/toastr.html" class="nk-menu-link"><span class="nk-menu-text">Toastr</span></a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/components/misc/sweet-alert.html" class="nk-menu-link"><span class="nk-menu-text">Sweet Alert</span></a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/components/misc/js-tree.html" class="nk-menu-link"><span class="nk-menu-text">jsTree</span></a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/components/misc/dual-listbox.html" class="nk-menu-link"><span class="nk-menu-text">Dual Listbox</span></a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/components/misc/dragula.html" class="nk-menu-link"><span class="nk-menu-text">Dragula</span><span class="nk-menu-badge">New</span></a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/components/misc/map.html" class="nk-menu-link"><span class="nk-menu-text">Google Map</span><span class="nk-menu-badge">New</span></a>
                            </li><!-- .nk-menu-item -->
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="html/email-templates.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-tag-alt-fill"></em></span>
                            <span class="nk-menu-text">Email Template</span>
                        </a>
                    </li>
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>