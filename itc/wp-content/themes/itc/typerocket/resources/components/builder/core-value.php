<h1>Core Value</h1>
<?php


echo $form->text('Title');
echo $form->editor('Description');
echo $form->repeater('List')->setFields([
    $form->image('Image'),
    $form->text('Title'),
    $form->editor('Description'),
]);



