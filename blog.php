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

    <a href="blog.html">All Blog Items</a>
    <a href="blog.html">Work Items</a>
    <a href="blog.html">University Items</a>
    <a href="blog.html">Family Items</a>
    <a href="add.html">Insert Blog Items</a>

</div>

<div id = "content">

<?php
include("connection.php");

$sql_query = "SELECT * FROM blogview";
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