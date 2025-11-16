<?php

namespace App\Providers;

<<<<<<< HEAD
use App\Events\OrderCreated;
use App\Events\PaymentSucceeded;
use App\Events\ShipmentCreated;
use App\Listeners\SendOrderNotifications;
use App\Listeners\UpdateReports;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        OrderCreated::class => [
            UpdateReports::class,        // cập nhật báo cáo/tồn kho nếu cần
            SendOrderNotifications::class,
        ],
        PaymentSucceeded::class => [
            UpdateReports::class,
            SendOrderNotifications::class,
        ],
        ShipmentCreated::class => [
            UpdateReports::class,
            SendOrderNotifications::class,
        ],
        \App\Events\OrderCreated::class => [
        \App\Listeners\ReportOnOrderCreated::class,
        ],
        \App\Events\PaymentSucceeded::class => [
            \App\Listeners\ReportOnPaymentSucceeded::class,
        ],
    ];

    public function boot(): void {}
=======
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
>>>>>>> origin/nguyen-tuan-vu
}
