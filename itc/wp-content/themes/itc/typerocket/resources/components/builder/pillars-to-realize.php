<h1>The 4 Pillars to Realize</h1>
<?php


echo $form->text('Title');
echo $form->editor('Description');
echo $form->repeater('List')->setFields([
    $form->text('Image'),
    $form->editor('Content'),
]);
echo $form->text('Text Button');
echo $form->text('Link Button');


