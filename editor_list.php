
<?php 
session_start();
{
    $conn = mysqli_connect("localhost","root","","demo");
    $query = mysqli_query($conn, "select * from editor");
    $editors = array();
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $editors[] = $row;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://codemirror.net/lib/codemirror.css">
	<script type="text/javascript" src="https://codemirror.net/lib/codemirror.js"></script>
	<script  type="text/javascript" src="https://codemirror.net/mode/xml/xml.js"></script>
	<script  type="text/javascript" src="https://codemirror.net/mode/css/css.js"></script>
	<script  type="text/javascript" src="https://codemirror.net/mode/javascript/javascript.js"></script>
	<script type="text/javascript" src="style/editor.js"></script>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<div class="topnav">
	  	<a class="active" href="editor_list.php">Editor Manager</a>
	  	<a href="logout.php">Logout</a>
	</div>
	<div style="padding-left:16px">
	  	<h1>Editor List</h1>
	    <a href="editor_add.php">Add editor</a> <br/> <br/>
	    <table width="100%" border="1" cellspacing="0" cellpadding="10">
	        <tr>
	            <td>ID</td>
	            <td>Html Content</td>
	            <td>Css Content</td>
	            <td>Js Content</td>
	            <td></td>
	        </tr>
	        <?php foreach ($editors as $item){ ?>
	        <tr>
	            <td><?php echo $item['id']; ?></td>
	            <td><?php echo $item['htmlcode']; ?></td>
	            <td><?php echo $item['csscode']; ?></td>
	            <td><?php echo $item['jscode']; ?></td>
	            <td>
	                <form method="post" action="student-delete.php">
	                    <input onclick="window.location = 'editor_edit.php?id=<?php echo $item['id']; ?>'" type="button" value="Sửa"/>
	                </form>
	            </td>
	        </tr>
	        <?php } ?>
	    </table>
	</div>
</body>
</html>



