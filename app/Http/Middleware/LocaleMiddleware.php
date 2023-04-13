<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LocaleMiddleware
{
    private array $availLocale = [
        'en' => 'en',
        'fr' => 'fr',
        'de' => 'de',
        'pt_BR' => 'pt_BR',
    ];

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        $locale = $this->getLocale();

        app()->setLocale($locale);
        session()->put('locale', $locale);

        return $next($request);
    }

    private function getLocale(): string
    {
        if (session()->has('locale') && array_key_exists(session()->get('locale'), $this->availLocale)) {
            return session()->get('locale');
        }

        return config('app.locale');
    }
}
