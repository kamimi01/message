<?php

namespace App\Providers;

use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(UrlGenerator $url)
    {
        \Schema::defaultStringLength(191);
        // indexあとのcreateなどのリンクがhttpsだと動かないため、httpに変更した
        \URL::forceScheme("http");

        // localhostをhttpsにするために、追加したが、localhostはこの方法ではhttpsにならないらしい
        // if (in_array(config("app.env"), ["prd", "stg"], true)) {
        //     $url->forceScheme("https");
        //     print "こっちも実行された" . PHP_EOL;
        // }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
