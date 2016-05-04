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
include("connection.php");

$cat = $_GET["Cat"];

if ($cat == "All"){
    $sql_query = "SELECT * FROM blogview";
}
else if ($cat == "Work"){
    $sql_query = "SELECT * FROM blogview WHERE category='Work' ";
}
else if ($cat == "University"){
    $sql_query = "SELECT * FROM blogview WHERE category='University' ";
}
else if ($cat == "Family"){
    $sql_query = "SELECT * FROM blogview WHERE category='Family' ";
}

$result = $db->query($sql_query);
while ($row = $result->fetch_array())
{

    $title = $row['entryTitle'];
    $summary = $row['entrySummary'];
    $category = $row['category'];
    $submitter = $row['submitter'];

    echo "{$title}";
}

?>

</div>

<div id = "footer">

    <p>Designed by Connor Rose, 2016</p>

</div>

</body>

</html>