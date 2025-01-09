<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Generalsetting;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $categories = Category::with('subcategories')->get();
        view()->share('categories', $categories);

        // $contactInfo = Contact::whereStatus(1)->first();
        // view()->share('contactInfo', $contactInfo);

        $generalsetting = Generalsetting::first();
        view()->share('generalsetting', $generalsetting);

        // $socialicons = Socialicon::whereStatus(1)->get();
        // view()->share('socialicons', $socialicons);
    }
}
