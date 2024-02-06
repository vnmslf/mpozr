<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Language" content="ru" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>{$page->get_title()|escape:'html'}</title>
	<meta name="keywords" content="{$page->get_keywords()|escape:'html'}" />
	<meta name="description" content="{$page->get_description()|escape:'html'}" />
	{include file="blocks/header_include.tpl"}
</head>

<body>

<div style="width:990px;margin:0 auto;border-left:4px solid #D6C59A;margin-top:70px;">
{include file="blocks/header.tpl"}	

        	<table width="100%">
		<tr>
			<td valign="top" style="color:white;padding-left:30px;padding-top:30px;padding-bottom:30px;font-size:10pt;">
				<h1>{$page->getTitle()}</h1>
				{$page->getContent()}
			</td>
			<td valign="top" align="center" style="padding-top:30px;">
				{if count($page->getImages()) > 0}
				{foreach from=$page->getImages() key=key item=current_item name="gallery"}
					{if !is_null($current_item->imageObject) && $current_item->imageObject->isExists}
					<a href="/{$current_item->imageObject->path}{$current_item->imageObject->filename}" title="{$current_item->getTitle()|escape:'html'}" class="fancybox" rel="gallery">
					{if !is_null($current_item->thumbObject) && $current_item->thumbObject->isExists}
						<img src="/{$current_item->thumbObject->path}{$current_item->thumbObject->filename}" alt="{$current_item->getTitle()|escape:'html'}" title="{$current_item->getTitle()|escape:'html'}"{if $current_item->thumbObject->width > 222} width="222"{/if}>
					{else}
						<img src="/{$current_item->imageObject->path}{$current_item->imageObject->filename}" alt="{$current_item->getTitle()|escape:'html'}" title="{$current_item->getTitle()|escape:'html'}"{if $current_item->imageObject->width > 222} width="222"{/if}>
					{/if}
					</a>
					{/if}
					<br /><br />
				{/foreach}
				{/if}
			</td>
		</tr>
		{include file="blocks/footer.tpl"}
</table>
</div>
<br>
</body>
</html>