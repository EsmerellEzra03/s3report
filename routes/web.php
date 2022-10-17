<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminIndex'])->name('admin.home')->middleware(['auth','admin']);

//Route::get('/super/admin/home', [App\Http\Controllers\HomeController::class, 'superAdminIndex'])->name('super_admin.home')->middleware('super.admin');

//Roles Route
Route::get('/role/index', [App\Http\Controllers\RoleController::class, 'index'])->name('role:index');

Route::get('/role/create', [App\Http\Controllers\RoleController::class, 'create'])->name('role:create');

Route::post('/role/store', [App\Http\Controllers\RoleController::class, 'store'])->name('role:store');

Route::get('/role/show/{role}', [App\Http\Controllers\RoleController::class, 'show'])->name('role:show');

Route::post('/role/edit/{role}', [App\Http\Controllers\RoleController::class, 'edit'])->name('role:edit');

Route::get('/role/destroy/{role}', [App\Http\Controllers\RoleController::class, 'destroy'])->name('role:destroy');

//Projects Route
Route::get('/project/index', [App\Http\Controllers\ProjectController::class, 'index'])->name('project:index');

Route::get('/project/create', [App\Http\Controllers\ProjectController::class, 'create'])->name('project:create');

Route::post('/project/store', [App\Http\Controllers\ProjectController::class, 'store'])->name('project:store');

Route::get('/project/show/{project}', [App\Http\Controllers\ProjectController::class, 'show'])->name('project:show');

Route::post('/project/edit/{project}', [App\Http\Controllers\ProjectController::class, 'edit'])->name('project:edit');

Route::get('/project/destroy/{project}', [App\Http\Controllers\ProjectController::class, 'destroy'])->name('project:destroy');

Route::get('/project/scope/{project}', [App\Http\Controllers\ProjectController::class, 'getScope'])->name('project:getScope');

//Contractors Route
Route::get('/contractor/index', [App\Http\Controllers\ContractorController::class, 'index'])->name('contractor:index');

Route::get('/contractor/create', [App\Http\Controllers\ContractorController::class, 'create'])->name('contractor:create');

Route::post('/contractor/store', [App\Http\Controllers\ContractorController::class, 'store'])->name('contractor:store');

Route::get('/contractor/show/{contractor}', [App\Http\Controllers\ContractorController::class, 'show'])->name('contractor:show');

Route::post('/contractor/edit/{contractor}', [App\Http\Controllers\ContractorController::class, 'edit'])->name('contractor:edit');

Route::get('/contractor/destroy/{contractor}', [App\Http\Controllers\ContractorController::class, 'destroy'])->name('contractor:destroy');

//Scopes Route
Route::get('/scope/index1', [App\Http\Controllers\ScopeController::class, 'index1'])->name('scope:index1');

Route::get('/scope/index/{project}', [App\Http\Controllers\ScopeController::class, 'index'])->name('scope:index');

Route::get('/scope/create', [App\Http\Controllers\ScopeController::class, 'create'])->name('scope:create');

Route::post('/scope/store', [App\Http\Controllers\ScopeController::class, 'store'])->name('scope:store');

Route::get('/scope/show/{scope}', [App\Http\Controllers\ScopeController::class, 'show'])->name('scope:show');

Route::post('/scope/edit/{scope}', [App\Http\Controllers\ScopeController::class, 'edit'])->name('scope:edit');

Route::get('/scope/destroy/{scope}', [App\Http\Controllers\ScopeController::class, 'destroy'])->name('scope:destroy');

//Assigns Route
Route::get('/assign/index1', [App\Http\Controllers\AssignController::class, 'index1'])->name('asisgn:index1');

Route::get('/assign/index/{scope}', [App\Http\Controllers\AssignController::class, 'index'])->name('assign:index');

Route::get('/assign/create', [App\Http\Controllers\AssignController::class, 'create'])->name('assign:create');

Route::post('/assign/store', [App\Http\Controllers\AssignController::class, 'store'])->name('assign:store');

Route::get('/assign/show/{assign}', [App\Http\Controllers\AssignController::class, 'show'])->name('assign:show');

Route::post('/assign/edit/{assign}', [App\Http\Controllers\AssignController::class, 'edit'])->name('assign:edit');

Route::get('/assign/destroy/{assign}', [App\Http\Controllers\AssignController::class, 'destroy'])->name('asisgn:destroy');

//Boqs Route
Route::get('/boq/index1', [App\Http\Controllers\BoqController::class, 'index1'])->name('boq:index1');

Route::get('/boq/index/{scope}', [App\Http\Controllers\BoqController::class, 'index'])->name('boq:index');

Route::get('/boq/create', [App\Http\Controllers\BoqController::class, 'create'])->name('boq:create');

Route::post('/boq/store', [App\Http\Controllers\BoqController::class, 'store'])->name('boq:store');

Route::get('/boq/show/{boq}', [App\Http\Controllers\BoqController::class, 'show'])->name('boq:show');

Route::post('/boq/edit/{boq}', [App\Http\Controllers\BoqController::class, 'edit'])->name('boq:edit');

Route::get('/boq/destroy/{boq}', [App\Http\Controllers\BoqController::class, 'destroy'])->name('boq:destroy');

//Schedulings Route
Route::get('/schedule/index1', [App\Http\Controllers\SchedulingController::class, 'index1'])->name('schedule:index1');

Route::get('/schedule/index/{assign}', [App\Http\Controllers\SchedulingController::class, 'index'])->name('schedule:index');

Route::get('/schedule/create', [App\Http\Controllers\SchedulingController::class, 'create'])->name('schedule:create');

Route::post('/schedule/store', [App\Http\Controllers\SchedulingController::class, 'store'])->name('schedule:store');

Route::get('/schedule/show/{schedule}', [App\Http\Controllers\SchedulingController::class, 'show'])->name('schedule:show');

Route::post('/schedule/edit/{schedule}', [App\Http\Controllers\SchedulingController::class, 'edit'])->name('schedule:edit');

Route::get('/schedule/destroy/{schedule}', [App\Http\Controllers\SchedulingController::class, 'destroy'])->name('schedule:destroy');

//BoqSchedulings Route
Route::get('/boqschedule/index1', [App\Http\Controllers\BoqSchedulingController::class, 'index1'])->name('boqschedule:index1');

Route::get('/boqschedule/index/{boq}', [App\Http\Controllers\BoqSchedulingController::class, 'index'])->name('boqschedule:index');

Route::get('/boqschedule/create', [App\Http\Controllers\BoqSchedulingController::class, 'create'])->name('boqschedule:create');

Route::post('/boqschedule/store', [App\Http\Controllers\BoqSchedulingController::class, 'store'])->name('boqschedule:store');

Route::get('/boqschedule/show/{boqschedule}', [App\Http\Controllers\BoqSchedulingController::class, 'show'])->name('boqschedule:show');

Route::post('/boqschedule/edit/{boqschedule}', [App\Http\Controllers\BoqSchedulingController::class, 'edit'])->name('boqschedule:edit');

Route::get('/boqschedule/destroy/{boqschedule}', [App\Http\Controllers\BoqSchedulingController::class, 'destroy'])->name('boqschedule:destroy');

//Progresses Route
Route::get('/progress/index1', [App\Http\Controllers\ProgressController::class, 'index1'])->name('progress:index1');

Route::get('/progress/index/{schedule}', [App\Http\Controllers\ProgressController::class, 'index'])->name('progress:index');

Route::get('/progress/create', [App\Http\Controllers\ProgressController::class, 'create'])->name('progress:create');

Route::post('/progress/store', [App\Http\Controllers\ProgressController::class, 'store'])->name('progress:store');

Route::get('/progress/show/{progress}', [App\Http\Controllers\ProgressController::class, 'show'])->name('progress:show');

Route::post('/progress/edit/{progress}', [App\Http\Controllers\ProgressController::class, 'edit'])->name('progress:edit');

Route::get('/progress/destroy/{progress}', [App\Http\Controllers\ProgressController::class, 'destroy'])->name('progress:destroy');

//ProgressBoqScheduling Route
Route::get('/progressboqschedule/index', [App\Http\Controllers\ProgressBoqScheduleController::class, 'index'])->name('progressboqschedule:index');

Route::get('/progressboqschedule/create', [App\Http\Controllers\ProgressBoqScheduleController::class, 'create'])->name('progressboqschedule:create');

Route::post('/progressboqschedule/store', [App\Http\Controllers\ProgressBoqScheduleController::class, 'store'])->name('progressboqschedule:store');

Route::get('/progressboqschedule/show/{progressboqschedule}', [App\Http\Controllers\ProgressBoqScheduleController::class, 'show'])->name('progressboqschedule:show');

Route::post('/progressboqschedule/edit/{progressboqschedule}', [App\Http\Controllers\ProgressBoqScheduleController::class, 'edit'])->name('progressboqschedule:edit');

Route::get('/progressboqschedule/destroy/{progressboqschedule}', [App\Http\Controllers\ProgressBoqScheduleController::class, 'destroy'])->name('progressboqschedule:destroy');

//Attachable Route
Route::get('/attachable/index', [App\Http\Controllers\AttachableController::class, 'index'])->name('attachable:index');

Route::get('/attachable/create', [App\Http\Controllers\AttachableController::class, 'create'])->name('attachable:create');

Route::post('/attachable/store', [App\Http\Controllers\AttachableController::class, 'store'])->name('attachable:store');

Route::get('/attachable/show/{attachable}', [App\Http\Controllers\AttachableController::class, 'show'])->name('attachable:show');

Route::post('/attachable/edit/{attachable}', [App\Http\Controllers\AttachableController::class, 'edit'])->name('attachable:edit');

Route::get('/attachable/destroy/{attachable}', [App\Http\Controllers\AttachableController::class, 'destroy'])->name('attachable:destroy');

//State Route
Route::get('/state/index', [App\Http\Controllers\StateController::class, 'index'])->name('state:index');

Route::get('/state/create', [App\Http\Controllers\StateController::class, 'create'])->name('state:create');

Route::post('/state/store', [App\Http\Controllers\StateController::class, 'store'])->name('state:store');

