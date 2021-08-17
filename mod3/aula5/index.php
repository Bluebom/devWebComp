<?php
    include('class1.php');
    
    $class1 = new Class1('Franklin', 21);

    echo " <hr> " .$class1->getName() .' e ' .$class1->getAge();

?>