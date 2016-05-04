<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>add</title>
    <link type = "text/css" rel="stylesheet" href="stylesheet.css" />
</head>

<body>

<div id = "header">

    <h1>myBlog</h1>
    <p>because the internet needs to know what i think</p>

</div>

<div id = "navigation">

    <a href="blog.php?Cat=All">All Blog Items</a>
    <a href="blog.php?Cat=Work">Work Items</a>
    <a href="blog.php?Cat=University">University Items</a>
    <a href="blog.php?Cat=Family">Family Items</a>
    <a href="add.php">Insert Blog Items</a>

</div>

<div id = "content">

    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        // execute if requested using HTTP GET Method
        ?>

    <div id = "form">
        <form action="<?$_SERVER['PHP_SELF']?>" method="post">

        <label>Enter Title:</label>     <input type="text" name="Title_box" required> <br>
        <label>Enter Summary:</label>   <input type="text" name="Summary_box" required> <br>
        <label>Category:</label>        <input type="text" name="Category_box" required> <br>
        <label>Submitted By:</label>    <input type="text" name="Submit_box"> <br>
        <input id = button type="submit" value="Submit">

        </form>

    </div>

        <?
    }
    elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include("connection.php");

    $title = $_POST["Title_box"];
    $summary = $_POST["Summary_box"];
    $category = $_POST["Category_box"];
    $submit = $_POST["Submit_box"];

    $sql = "INSET INTO blogview (entryTitle, entrySummary, category, submitter) VALUES ('$title', '$summary', '$category', '$submit' ) ";

     if (mysqli_query($db, $sql)){

     }   else{
         echo "Error:" . $sql . "<br>" . mysqli_error($db);
     }

        header("location: blog.php");
    }
    else {
        header("location: index.php");
    }


    ?>


</div>

<div id = "footer">

    <p>Designed by Connor Rose, 2016</p>

</div>

</body>

</html>