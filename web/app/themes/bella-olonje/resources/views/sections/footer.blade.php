<footer class="content-info container mx-auto py-12 px-4">
    <div class="grid grid-cols-3 max-sm:grid-cols-1 gap-10 max-sm:gap-0">
        <div class="max-sm:hidden">
            <a class="brand" href="{{ home_url('/') }}">
                <img class="w-52 h-auto" src="@asset('images/logo.png')" alt="Bella Olonje Logo">
            </a>
        </div>
        <div class="flex items-center justify-center">
            <div><img class="mx-4" src="@asset('images/twitter.png')" alt="Bella Olonje Twitter"></div>
            <div><img class="mx-4" src="@asset('images/facebook.png')" alt="Bella Olonje Facebook"></div>
            <div><img class="mx-4" src="@asset('images/instagram.png')" alt="Bella Olonje Instagram"></div>
        </div>
        <div class="flex items-center justify-center max-sm:hidden">
            <p class="text-xs text-grey">Copyright <?php echo date("Y"); ?> Bella Onojie.com</p>
        </div>
        <div class="text-center hidden max-sm:block">
            <p class="text-xs text-grey font-bold">Just type what's on your mind and we'll</p>
        </div>
    </div>
</footer>