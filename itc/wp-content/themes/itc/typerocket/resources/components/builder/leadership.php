<h1>Leadership</h1>
<?php


echo $form->text('Title');
echo $form->repeater('List')->setFields([
    $form->image('Image'),
    $form->text('Name'),
    $form->text('Position'),
    $form->editor('Content'),
    $form->editor('Hashtag'),
]);



