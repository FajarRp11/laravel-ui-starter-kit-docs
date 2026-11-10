<?php

use Illuminate\Support\Facades\Route;

// Redirect root to docs
Route::redirect('/', '/docs');

// Mulai & Theming
Route::view('/docs', 'docs.index')->name('docs.index');
Route::view('/docs/theming', 'docs.theming')->name('docs.theming');

// Komponen UI
Route::view('/docs/components/button', 'docs.components.button')->name('docs.components.button');
Route::view('/docs/components/alert', 'docs.components.alert')->name('docs.components.alert');
Route::view('/docs/components/avatar', 'docs.components.avatar')->name('docs.components.avatar');
Route::view('/docs/components/badge', 'docs.components.badge')->name('docs.components.badge');
Route::view('/docs/components/card', 'docs.components.card')->name('docs.components.card');
Route::view('/docs/components/dropdown', 'docs.components.dropdown')->name('docs.components.dropdown');
Route::view('/docs/components/empty-state', 'docs.components.empty-state')->name('docs.components.empty-state');
Route::view('/docs/components/modal', 'docs.components.modal')->name('docs.components.modal');
Route::view('/docs/components/spinner', 'docs.components.spinner')->name('docs.components.spinner');
Route::view('/docs/components/table', 'docs.components.table')->name('docs.components.table');

// Komponen Form
Route::view('/docs/components/checkbox', 'docs.components.checkbox')->name('docs.components.checkbox');
Route::view('/docs/components/input', 'docs.components.input')->name('docs.components.input');
Route::view('/docs/components/select', 'docs.components.select')->name('docs.components.select');
Route::view('/docs/components/textarea', 'docs.components.textarea')->name('docs.components.textarea');

// Charts
Route::view('/docs/charts', 'docs.charts')->name('docs.charts');
