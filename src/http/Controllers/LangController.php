<?php

namespace Fc9\Lang\Http\Controllers;

use Fc9\Lang\Lang;
use Illuminate\Routing\Controller;

class LangController extends Controller
{
    public function index()
    {
        return 'ok';
    }

    /**
     * Update the locale.
     *
     * @param $locale
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($locale)
    {
        Lang::update($locale);
        return redirect()->back();
    }
}
