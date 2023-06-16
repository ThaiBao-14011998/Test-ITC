<?php
if (!function_exists('add_action')) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

$form = tr_form()->useJson()->setGroup($this->getName());
?>

<h1>Theme Options</h1>
<div class="typerocket-container">
    <?php
    echo $form->open();

    // Header
    $header = function () use ($form) {
        echo $form->image('Logo Header');
    };

    //Footer
    $footer = function () use ($form) {
        echo $form->repeater('Group Social')->setFields([
            $form->text('Icon'),
            $form->text('Link')
        ]);
        echo $form->text('Copyright');
        echo $form->text('Text Icp');
        echo $form->text('Link Icp');
    };



  

    // Save
    $save = $form->submit('Save');

    // Layout
    tr_tabs()->setSidebar($save)
        ->addTab('Header', $header)
        ->addTab('Footer', $footer)
        ->render('box');
    echo $form->close();
    ?>

</div>