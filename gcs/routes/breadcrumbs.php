<?php
// PRINCIPAL
// Index
Breadcrumbs::for('index', function ($trail) {
$trail->push('Inicio', url('/'));
});


//FACTURAS

// Index > Bills
Breadcrumbs::for('bill', function ($trail) {
$trail->parent('index');
$trail->push('Facturas', route('bill.index'));
});

// Home > Bill > New
Breadcrumbs::for('newBill', function ($trail) {
$trail->parent('bill');
$trail->push('Nueva Factura', route('bill.create'));
});

// Home > Bill > [Edit Bill]
Breadcrumbs::for('editBill', function ($trail, $bill) {
$trail->parent('bill');
$trail->push($bill->folio, route('bill.edit', $bill->id));
});


//PRODUCTOS

// Index > Products
Breadcrumbs::for('product', function ($trail) {
    $trail->parent('index');
    $trail->push('Productos', route('product.index'));
});


// Home > Product > New
Breadcrumbs::for('newProduct', function ($trail) {
    $trail->parent('product');
    $trail->push('Nuevo Producto', route('product.create'));
});


// Home > Product > [Show Product]
Breadcrumbs::for('showProduct', function ($trail,$product) {
    $trail->parent('product');
    $trail->push($product->serial_number, route('product.index',$product->id));
});

// Home > Product > [Edit Product]
Breadcrumbs::for('editProduct', function ($trail, $product) {
    $trail->parent('product');
    $trail->push($product->serial_number, route('product.edit', $product->id));
});

// Home > Blog > [Category] > [Post]
Breadcrumbs::for('post', function ($trail, $post) {
$trail->parent('category', $post->category);
$trail->push($post->title, route('post', $post->id));
});