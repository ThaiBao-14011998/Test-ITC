<?php
$argsSupport = array('title', 'editor', 'thumbnail');
$enrichment = tr_post_type('enrichment');
$enrichment->setSupports($argsSupport);
$enrichment->setRest('enrichment');

$enrichment->setTitleForm(function () {
    $form = tr_form()->useJson();
    echo $form->color('Color Title');
});