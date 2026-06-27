<?php

namespace Fares\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    public function register()
    {
        // هنا نقوم بتسجيل الكلاس داخل الـ Laravel Container
      
    }

    public function boot()
    {
        // هنا يتم تشغيل الإعدادات لو حزمتك تحتوي على Routes أو Views لاحقاً
    }
}