<?php

namespace VarenykyAdmin\Http\Controllers;

use Illuminate\Routing\Controller;

class ThemeController extends Controller
{
    public function css()
    {
        $content = ":root{
            --varenykyadmin-text-color: ".config('varenyky-admin.css.text-color').";
            --varenykyadmin-primary-light: ".config('varenyky-admin.css.primary-light').";
            --varenykyadmin-primary: ".config('varenyky-admin.css.primary').";
            --varenykyadmin-secondary: ".config('varenyky-admin.css.primary').";
            --varenykyadmin-secondary-light: ".config('varenyky-admin.css.secondary-light').";
        }";

        return response($content)->header('Content-Type', 'text/css');
    }
}
