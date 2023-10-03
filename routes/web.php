<?php

use App\Livewire\Rankings;
use App\Livewire\Schedule;
use App\Livewire\ShowGame;
use App\Livewire\ShowTeam;

use App\Livewire\Feeds\Feeds;
use App\Livewire\Feeds\ShowFeed;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedController;
use App\Livewire\Scoreboard;
use App\Livewire\Standings;
use App\Livewire\Teams;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

// Schedule
// Route::get('/schedule', Schedule::class)->name('schedule');
// Route::get('/standings', Standings::class)->name('standings');

Route::get('/games', Scoreboard::class)->name('games');

Route::get('/games/{game}', ShowGame::class)->name('game');

Route::get('/teams', Teams::class)->name('teams');

Route::get('/teams/{team}', ShowTeam::class)->name('team');

Route::get('/rankings', Rankings::class)->name('rankings');

Route::get('/feeds', Feeds::class)->middleware(['auth','verified'])->name('feeds');
Route::get('/feeds/{feed}', ShowFeed::class)->middleware(['auth','verified'])->name('feed');
Route::get('/feeds/{feed}/run', [FeedController::class, 'run'])->middleware(['auth','verified'])->name('feed-run');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
