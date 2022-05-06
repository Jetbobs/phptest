<?php

$conn = mysqli_connect("localhost","root","123","php_sql");
$sql = "
INSERT INTO topic
(title, description, created) 
VALUE(
    'MySQL', 
    'MySQL is ...', 
    NOW()
)
";

mysqli_query($conn, $sql);
echo mysqli_error($conn);

?>