<?php 
# print_r($_POST);
print_r( json_decode(file_get_contents('php://input')) );
