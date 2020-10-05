<?php
$course_name = "algorithems";
$enrolled_student = 30;
$price = 130.50;
$on_discount = true;
echo "Course title: $course_name 
Enrolled Students: $enrolled_student
Course price: $price $ USD
Course on discount: ".($on_discount? "yes" : "no");
?>