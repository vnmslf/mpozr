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
<div style="width:990px;margin:0 auto;border-right:4px solid #D6C59A;margin-top:70px;">
	<table width="100%">
		<tr height="80">
			<td width="260" align="center">
				<a href="/"><img src="/img/logo.gif" alt="logo" height="80" border="0"></a>
			</td>
			{if $main_menu}
			<td style="border-left:4px solid #D6C59A;background-color:#1E1B15;text-align:center;vertical-align:middle;">
				{foreach from=$main_menu key=key item=current_item name="main_menu"}
				<a href="{$current_item->getLink()}" class="menu" title="{$current_item->getTitle()|escape:'html'}" target="{$current_item->getTarget()}">{$current_item->getTitle()}</a>
				{if !$smarty.foreach.main_menu.last}
				<img src="/img/marker.gif" style="position:relative;top:1px;">
				{/if}
				{/foreach}
			</td>
			{/if}
		</tr>
		<tr>
			<td colspan="2" style="height:520px;background:url(/img/bg.jpg) no-repeat right bottom;vertical-align:bottom;font-size:10pt;color:#D6C59A;">
				<span style="float:left;position:relative;top:-65px;left:70px;">
					© 2008 МПО «Золотое руно»<br>
					Все права соблюдены.
				</span>
				<span style="float:left;position:relative;top:-65px;left:197px;">
					Телефон: 8 (495) 744-79-12<br>
					Электронная почта: <a style="color:#D6C59A" href="mailto:info@mpozr.ru">info@mpozr.ru</a>
				</span>
			</td>
		</tr>
	</table>
</div>
</body>
</html>
