<?php

namespace App\Providers;
use App\Models\DanhMuc;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
    public function boot()
    {
        View::composer('*', function ($view) {
            // Lấy tất cả danh mục, bao gồm danh mục cha và các danh mục con
            $view->with('danhmuc', DanhMuc::with('danh_mucs')->get());
        });
    }
}
