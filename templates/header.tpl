<!DOCTYPE html>
<html>
<head>
    <title>
    {{if $title}}
        {{$title}}
    {{else}}
        校园地带
    {{/if}}
    </title>
    
    {{include file="asset.tpl"}}
</head>
<body>

<div data-role="page">

	<div data-role="header">
    	<img src="plugins/sina/wbshare.png" class="sinaWb">
		<h3>
        {{if $title}}
            {{$title}}
        {{else}}
            校园地带
        {{/if}}
        </h3>
        <a data-role="button" data-icon="info" data-iconpos="notext" title="意见反馈" class="ui-btn-right" data-rel="dialog" href="feedback.php"></a>
	</div><!-- /header -->