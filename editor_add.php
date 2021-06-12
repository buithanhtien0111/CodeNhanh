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
	  <a class="active" href="editor_manager_view.php">Editor Manager</a>
	  <a href="logout.php">Logout</a>
	</div>
	<div style="padding-left:16px; padding-top: 50px;">
	  	<form method="post" name="editor" action="editor.php">
		  	<div class="code-area">
				<textarea id="htmlCode" name="htmlcode" placeholder="HTML Code" oninput="showPreview()"></textarea>
				<textarea id="cssCode" name="csscode" placeholder="CSS Code" oninput="showPreview()"></textarea>
				<textarea id="jsCode" name="jscode" placeholder="JavaScript Code" oninput="showPreview()"></textarea>
			</div>
			<h4>Preview</h4>
			<div class="preview-area">				
			  	<iframe id="preview-window"></iframe>
			</div>
		  	<button class="save_editor" type="submit">Save</button>
		</form>
	</div>
</body>
</html>



