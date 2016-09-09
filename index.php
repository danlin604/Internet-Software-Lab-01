<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('student.php');

        $students = array();
        
        # Added Student John
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        # Added Student Albert
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        # Added Student Daniel
        $third = new Student();
        $third->surname = "Lin";
        $third->first_name = "Daniel";
        $third->add_email('home','dlin@gmail.com');
        $third->add_email('work','dlin@work.ca');
        $third->add_grade(40);
        $third->add_grade(45);
        $third->add_grade(65);
        $students['c789'] = $third;
        
        ksort($students);	// one of the many sort functions

        foreach($students as $student)
            echo $student->toString();
        ?>
    </body>
</html>
