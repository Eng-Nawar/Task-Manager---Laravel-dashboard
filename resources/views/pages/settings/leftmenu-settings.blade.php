<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar settings-menu">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" id="settings-scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav" id="settings-sidebar-nav">
            <ul id="sidebarnav">

                <!--main-->
                <li class="sidenav-menu-item {{ $page['settingsmenu_main'] ?? '' }}">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-main">
                        <span class="hide-menu">{{ cleanLang(__('lang.main_settings')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        
                       
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/company" id="settings-menu-main-company"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.company_details')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/currency" id="settings-menu-main-currency"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.currency')) }}</a>
                        </li>
                       
                    </ul>
                </li>

                
                <!--categories-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-categories">
                        <span class="hide-menu">{{ cleanLang(__('lang.categories')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <!--project-->
                        <li>
                            <a class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url"
                                id="settings-menu-categories-project" href="javascript:void(0);"
                                data-url="/categories?filter_category_type=project&source=ext">{{ cleanLang(__('lang.projects')) }}
                            </a>
                        </li>
                        <!--client-->
                        <li>
                            <a class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url"
                                id="settings-menu-categories-client" href="javascript:void(0);"
                                data-url="/categories?filter_category_type=client&source=ext">{{ cleanLang(__('lang.clients')) }}
                            </a></li>

                    </ul>
                </li>
                

               

                <!--milestone-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-milestones">
                        <span class="hide-menu">{{ cleanLang(__('lang.milestones')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/milestones/settings"
                                id="settings-menu-milestones-settings"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/milestones/default"
                                id="settings-menu-milestones-categories"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.default_milestones')) }}</a>
                        </li>
                    </ul>
                </li>

                <!--tasks-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-tasks">
                        <span class="hide-menu">{{ cleanLang(__('lang.tasks')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/tasks/statuses"
                                id="settings-menu-tasks-stages"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.statuses')) }}</a>
                        </li>
                        
                    </ul>
                </li>




                
                

                

               
               


                <!--roles-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-roles">
                        <span class="hide-menu">{{ cleanLang(__('lang.user_roles')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="javascript:void(0);" data-url="/settings/roles" id="settings-menu-roles-general"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                    </ul>
                </li>


               
               

               
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>