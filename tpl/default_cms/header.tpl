<<<<<<< HEAD
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
  "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>{$TITLE}</title>
{foreach from=$CSS_FILES item=CSS_FILE}
<link rel="stylesheet" type="text/css" href="{$CSS_FILE}">
{/foreach}
{foreach from=$JS_FILES item=JS_FILE}
<script type="text/javascript" src="{$JS_FILE}"></script>
{/foreach}
</head>
<body>
	<div id="wrapper">
		<div id="header">
		<img src="{$CORE_IMG_URL}litotex_logo.png" Alt="Litotex">Litotex Core-Engine 
		</div>
		<div id="header_second">
			Open Your Source
		</div>
		<div id="leftcolumn">
			{php} package::$packages->displayTplModification('left') {/php}
		</div>
		<div id="content">
		{php} package::$packages->displayTplModification('content') {/php}
		</div>
        <div id="rightcolumn">
		  {php} package::$packages->displayTplModification('right') {/php}
=======
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
  "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>{$TITLE}</title>
{foreach from=$CSS_FILES item=CSS_FILE}
<link rel="stylesheet" type="text/css" href="{$CSS_FILE}">
{/foreach}
{foreach from=$JS_FILES item=JS_FILE}
<script type="text/javascript" src="{$JS_FILE}"></script>
{/foreach}
</head>
<body>
	<div id="wrapper">
		<div id="header">
		<img src="{$CORE_IMG_URL}litotex_logo.png" Alt="Litotex">Litotex Core-Engine 
		</div>
		<div id="header_second">
			Open Your Source
		</div>
		<div id="leftcolumn">
			{displayTplModification position=left}
		</div>
		<div id="content">
		{php} package::$packages->displayTplModification('content') {/php}
		</div>
        <div id="rightcolumn">
		  {displayTplModification position=right}
>>>>>>> 4f65574144ecd711a0957f8b575edbcf1882e19b