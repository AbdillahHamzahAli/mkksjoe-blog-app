<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard.index'));
});
// Dashboard > Home
Breadcrumbs::for('dashboard_home', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Home', '#');
});
// Dashboard > News
Breadcrumbs::for('news', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('News', route('newspost.index'));
});
// Dashboard > News > Add
Breadcrumbs::for('add_news', function (BreadcrumbTrail $trail) {
    $trail->parent('news');
    $trail->push('Add', route('newspost.create'));
});
// Dashboard > News > [Title]
Breadcrumbs::for('detail_news', function (BreadcrumbTrail $trail, $newspost) {
    $trail->parent('news');
    $trail->push('Detail', route('newspost.show', ['newspost' => $newspost]));
});
// Dashboard > News > [Title]
Breadcrumbs::for('detail_news_title', function (BreadcrumbTrail $trail, $newspost) {
    $trail->parent('detail_news', $newspost);
    $trail->push($newspost->title, route('newspost.show', ['newspost' => $newspost]));
});

// Dashboard > News > Edit
Breadcrumbs::for('edit_news', function (BreadcrumbTrail $trail, $newspost) {
    $trail->parent('news');
    $trail->push('Edit', route('newspost.edit', ['newspost' => $newspost]));
});
// Dashboard > News > Edit > [Title]
Breadcrumbs::for('edit_news_title', function (BreadcrumbTrail $trail, $newspost) {
    $trail->parent('edit_news', $newspost);
    $trail->push($newspost->title, route('newspost.edit', ['newspost' => $newspost]));
});

// Dashboard > Categories
Breadcrumbs::for('categories', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Categories', route('categories.index'));
});
// Dashboard > Categories
Breadcrumbs::for('detail_categories', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('categories');
    $trail->push('Detail', route('categories.show', ['category' => $category]));
});
// Dashboard > Categories > [Title]
Breadcrumbs::for('detail_categories_title', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('detail_categories', $category);
    $trail->push($category->title, route('categories.show', ['category' => $category]));
});
// Dashboard > Categories > add
Breadcrumbs::for('add_categories', function (BreadcrumbTrail $trail) {
    $trail->parent('categories');
    $trail->push('Add', route('categories.create'));
});
// Dashboard > Categories > Edit
Breadcrumbs::for('edit_categories', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('categories');
    $trail->push('Edit', route('categories.edit', ['category' => $category]));
});
// Dashboard > Categories > Edit > [Title]
Breadcrumbs::for('edit_categories_title', function (BreadcrumbTrail $trail,  $category) {
    $trail->parent('edit_categories', $category);
    $trail->push($category->title, route('categories.edit', ['category' => $category]));
});
// Dashboard > FileManager
Breadcrumbs::for('file_manager', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('File Manager', route('filemanager.index'));
});
