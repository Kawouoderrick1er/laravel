
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route pour la recherche (à implémenter plus tard)
Route::get('/search', [HomeController::class, 'search'])->name('search'); //création d'une nouvelle route qui appellera la fonction search, dans le controller home.

// *   `Route::get('/')`:  Définit une route pour la racine du site (`/`).
// *   `[HomeController::class, 'index']`: Indique que la méthode `index` du contrôleur `HomeController` doit être exécutée lorsque cette route est appelée.
// *  `function(){...}`: Si vous n'avez pas de controller, vous pouvez utiliser une fonction anonyme qui va renvoyer la vue.
// * `->name('home')`:  Donne un nom à la route, ce qui est pratique pour y faire référence plus tard (dans les liens, par exemple).
