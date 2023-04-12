<?php

use App\Http\Livewire\AttendanceIndex;
use App\Http\Livewire\NotificationIndex;
use App\Http\Livewire\PostIndex;
use App\Http\Livewire\StudentListIndex;
use App\Http\Livewire\TeacherListIndex;
use App\Http\Livewire\VirtualIndex;
use App\Models\TeacherList;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/posts',PostIndex::class)->name('post.index');
Route::get('/attendance', AttendanceIndex::class)->name('attendance.index');
Route::get('/notification', NotificationIndex::class)->name('notification.index');
Route::get('/virtual', VirtualIndex::class)->name('virtual.index');
Route::get('/studentlist', StudentListIndex::class)->name('student.list.index');
Route::get('/teacherlist', TeacherListIndex::class)->name('teacher.list.index');
// Route::get('/teacherlist', TeacherList::class)->name('teacher.list.index');
// Route::get('/virtual',VirtualIndex::class)->name('virtual.index');
