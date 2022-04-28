<?php
    function print_title(){
        if(isset($_GET['id'])){
            echo$_GET['id'];
        } else{
            echo "Welcome";
        }  
    }
    function print_desc(){
        if(isset($_GET['id'])){
            echo file_get_contents("data/".$_GET['id']);
        } else {
            echo "Hello, PHP";
        };
    }
    function print_list(){
        $list = scandir('./data');

        for($i = 0; $i < count($list); $i++){
            if($list[$i] != '.'){
                if($list[$i] != '..'){
                    echo "<li><a href=\"lifecoding.php?id=$list[$i]\">$list[$i]</a></li>\n";
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
        print_title();
    ?></title>
</head>
<body>
    <h1><a href="lifecoding.php">WEB</a></h1>
    <ol>
        <?php
            print_list();
        ?>
    </ol>
    <a href="create.php">create</a>
    <?php if(isset($_GET['id'])){?>
    <a href="update.php">update</a>
    <?php } ?>
    <form action="create_process.php" method="post">
        <p>
            <input type="text" name="title" placeholder="Title">
        </p>
        <p>
            <textarea name="description" placeholder="Description">

            </textarea>
        </p>
        <p>
            <input type="submit">
        </p>
    </form>
    <h2>
    <?php
        print_title();
    ?>
    </h2>
    <?php
        print_desc();
    ?>
</body>
</html>