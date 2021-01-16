<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#61-title
    |
    */

    'title' => '',
    'title_prefix' => 'Sipnie | ',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#62-favicon
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => true,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#63-logo
    |
    */

    'logo' => '<span style="font-weight:800; margin-left: 0.5rem">Sipnie<span/>',
    'logo_img' => 'images/icon-sipnie_m.png',
//    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_class' => 'brand-image elevation-2',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-s',
    'logo_img_alt' => 'Logo de Sipnie',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#64-user-menu
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-success',
    'usermenu_image' => true,
    'usermenu_desc' => true,
    'usermenu_profile_url' => true,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#71-layout
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => true,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#721-authentication-views-classes
    |
    */

    'classes_auth_card' => 'card-outline card-success',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn btn-flat btn-success elevation-2',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#722-admin-panel-classes
    |
    */

    'classes_body' => '',
//    'classes_brand' => 'bg-white',
    'classes_brand' => 'bg-success',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-success elevation-4',
//    'classes_sidebar' => 'sidebar-light-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#73-sidebar
    |
    */

    'sidebar_mini' => true,
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 250,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#74-control-sidebar-right-sidebar
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cog',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => false,
    'right_sidebar_push' => false,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#65-urls
    |
    */

    'use_route_url' => false,

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'login_url' => 'login',

    'register_url' => 'register',

    'password_reset_url' => 'password/reset',

    'password_email_url' => 'password/email',

    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#92-laravel-mix
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#8-menu-configuration
    |
    */

    'menu' => [
        //        MENU SUPERIOR
        [
            'text' => 'buscar',
            'search' => true,
            'topnav_right' => true,
            'url' => '',
            'method' => 'post',
        ],
        [
            'text' => 'Link Test',
            'url' => '#',
            'icon' => 'fas fa-link',
            'topnav' => true,
//
        ],
        //        MENU LATERAL
        [
            'text' => 'Inicio',
            'route'  => 'home',
            'icon'  => 'far fas fa-home'
        ],
        ['header' => 'account_settings'],
        [
            'text' => 'profile',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-user',
        ],
        [
            'text' => 'change_password',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-lock',
        ],
        ['header' => 'MÓDULOS'],
        [
            'text'    => ' Colegios',
            'icon'    => 'far fas fa-school',
            'icon_color' => 'cyan',
            'submenu' => [
                [
                    'text' => 'Administrar Colegio(s)',
                    'route'  => 'colegios',
//                    'route'  => 'home',
                    'icon'    => 'far fas fa-list-alt',
                    'icon_color' => 'cyan',
//                    'can' => 'admin-colegios'
                ],
                [
                    'text' => ' Crear Colegio',
                    'route'  => 'home',
                    'icon'    => 'far fas fa-plus-square',
                    'icon_color' => 'cyan',
//                    'can' => 'create_colegio'
                ],
            ],
        ],
        [
            'text'    => ' Usuarios',
            'icon'    => 'far fas fa-users-cog',
            'icon_color' => 'yellow',
            'submenu' => [
                [
                    'text' => 'Administrar Usuarios',
                    'route'  => 'usuarios',
                    'icon'    => 'far fas fa-users',
                    'icon_color' => 'yellow',
                ],
                [
                    'text' => ' Agregar Usuarios',
                    'url'  => '#',
                    'icon'    => 'far fas fa-user-cog',
                    'icon_color' => 'yellow',
                ],
            ],
        ],
        [
            'text'    => ' Inventario',
            'icon'    => 'far fas fa-boxes',
            'icon_color' => 'green',
            'submenu' => [
                [
                    'text' => 'Administrar Equipos',
                    'route' => 'inventario',
                    'icon'  => 'far fas fa-laptop-house',
                    'icon_color' => 'green',
                ],
                [
                    'text' => ' Agregar Equipo',
                    'url'  => '#',
                    'icon' => 'far fas fa-laptop-medical',
                    'icon_color' => 'green',
                ],
                [
                    'text' => ' Categorias Equipo',
                    'route' => 'categorias',
                    'icon' => 'far fas fa-list',
                    'icon_color' => 'green',
                ],
            ],
        ],
        [
            'text'    => ' Reservas',
            'icon'    => 'far fas fa-calendar-alt',
            'icon_color' => 'pink',
            'label' => 5,
            'label_color' => 'success',
            'submenu' => [
                [
                    'text' => 'Administrar Reservas',
                    'url'  => '#',
                    'icon'    => 'far fas fa-calendar-check',
                    'icon_color' => 'pink',
                ],
                [
                    'text' => 'Confirmar Reserva',
                    'url'  => '#',
                    'icon'    => 'far fas fa-calendar-plus',
                    'icon_color' => 'pink',
                ],
            ],
        ],
        [
            'text'    => ' Préstamos',
            'icon'    => 'fas fa-hand-holding',
            'icon_color' => 'orange',
            'submenu' => [
                [
                    'text' => 'Administrar Préstamos',
                    'url'  => '#',
                    'icon'    => 'fas fa-hand-holding-medical',
                    'icon_color' => 'orange',
                ],
                [
                    'text' => 'Devolver Activos',
                    'url'  => '#',
                    'icon'    => 'far fas fa-hand-holding-heart',
                    'icon_color' => 'orange',
                ],
            ],
        ],
        [
            'text'    => ' Reportes',
            'icon'    => 'far fa-file-pdf',
            'icon_color' => 'red',
            'submenu' => [
                [
                    'text' => 'Estadísticas',
                    'url'  => '#',
                    'icon' => 'fas fa-chart-bar',
                    'icon_color' => 'red',
                ],
                [
                    'text' => 'De Inventario',
                    'url'  => '#',
                    'icon'  => 'fas fa-clipboard-list',
                    'icon_color' => 'red',
                ],
            ],
        ],
        ['header' => 'DOCUMENTACIÓN'],
        [
            'text' => 'Manuales',
            'url'  => '#',
            'icon' => 'fas fa-fw fa-book',
            'icon_color' => 'teal',
        ],
        [
            'text' => 'Videos',
            'url'  => '#',
            'icon' => 'fab fa-youtube',
            'icon_color' => 'red',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#83-custom-menu-filters
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#91-plugins
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
//                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                    'location' => 'vendor/datatables/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
//                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                    'location' => 'vendor/datatables/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
//                    'location' => '//cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js',
                    'location' => 'vendor/datatables/js/dataTables.responsive.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
//                    'location' => '//cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js',
                    'location' => 'vendor/datatables/js/responsive.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
//                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                    'location' => 'vendor/datatables/css/dataTables.bootstrap4.min.css',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
//                    'location' => '//cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css',
                    'location' => 'vendor/datatables/css/responsive.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
//                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                    'location' => 'public/vendor/select2/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
//                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                    'location' => 'public/vendor/select2/css/select2.min.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
//                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                    'location' => 'vendor/sweetalert2/sweetalert2.all.min.js',
                ],
            ],
        ],
        'Pace' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
//                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                    'location' => 'vendor/pace-progress/themes/green/pace-theme-center-simple',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
//                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                    'location' => 'vendor/pace-progress/pace.min.js',
                ],
            ],
        ],
        'iCheck Bootstrap' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => true,
//                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                    'location' => 'vendor/icheck-bootstrap/icheck-bootstrap.min.css',
                ],
            ],
        ],
        'Date Range Picker' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/daterangepicker/daterangepicker.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/daterangepicker/moment.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/daterangepicker/daterangepicker.css',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#93-livewire
    */

    'livewire' => false,
];
