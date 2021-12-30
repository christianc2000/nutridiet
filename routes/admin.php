<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;

route::get('',[HomeController::class, 'index'])->name('admin.index');
