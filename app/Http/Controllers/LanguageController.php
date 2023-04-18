<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Pluralizer;

class LanguageController extends Controller
{
    // set locale in session
    public function swap($locale){
        // available language in template array
        $availLocale = [
            'en'=>'en',
            'fr'=>'fr',
            'de'=>'de',
            'pt_BR'=>'pt_BR',
        ];

        // check for existing language
        if (array_key_exists($locale, $availLocale)) {
            session()->put('locale', $locale);

            Pluralizer::useLanguage($this->setPluralize($locale));
        }

        return redirect()->back();
    }

    private function setPluralize($locale): string
    {
        if ($locale === 'pt_BR') {
            return 'portuguese';
        }

        return 'english';
    }
}
