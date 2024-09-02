use App\Http\Controllers\SearchController;

Route::get('/search', [SearchController::class, 'search']);
Route::get('/clothing-items', [SearchController::class, 'index']);