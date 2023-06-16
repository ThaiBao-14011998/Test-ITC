<h1>Achievement</h1>
<?php

echo $form->repeater('List')->setFields([
    $form->text('Tag'),
    $form->text('Title'),
    $form->editor('Description'),
    $form->image('Image'),
]);


