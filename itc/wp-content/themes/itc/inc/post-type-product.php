<?php
$argsSupport = array( 'title');
$product = tr_post_type('Product');
$product->setSupports($argsSupport);


tr_meta_box('Features')->apply($product)->setCallback(function () {
    $form = tr_form();
    echo $form->text('Title Features');
    echo $form->editor('Description Features');
});

tr_meta_box('Size Chart')->apply($product)->setCallback(function () {
    $form = tr_form();
    echo $form->text('Title Size Chart');
    echo $form->editor('Description Size Chart');
});


