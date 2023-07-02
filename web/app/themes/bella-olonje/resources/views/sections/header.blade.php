<header class="banner">
    <div class="container mx-auto py-4 px-4">
        <div class="flex justify-between items-center">
            <div class="basis-1/2">
                <a class="brand" href="{{ home_url('/') }}">
                    <img class="w-52 h-auto" src="@asset('images/logo.png')" alt="Bella Olonje Logo">
                </a>
            </div>
            <div class="basis-1/2">
                <div class="max-md:hidden">
                    @if (has_nav_menu('primary_navigation'))
                    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
                        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' =>
                        false])
                        !!}
                    </nav>
                    @endif
                </div>
                <div class="hidden max-md:block">
                    <div class="text-right">
                        <span class="text-4xl cursor-pointer" id="open_nav">&#9776;</span>
                    </div>
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" id="close_nav">&times;</a>
                        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' =>
                        false])
                        !!}
                    </div>
                </div>
            </div>
        </div>
</header>