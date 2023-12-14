<?php
require_once('./comment.php');

$thucthi= Comments::addComment();
echo $_SESSION=['full_name'];


?>