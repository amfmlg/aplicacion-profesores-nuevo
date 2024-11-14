<?php

// app/Http/Controllers/ProfileController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Mostrar la configuración de la cuenta
    public function settings()
    {
        return view('settings'); // Aquí puedes crear una vista `settings.blade.php`
    }
}

