<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Language" content="ru" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>{$catalog_departments_tree->get_title()|escape:'html'}</title>
	<meta name="keywords" content="{$catalog_departments_tree->get_keywords()|escape:'html'}" />
	<meta name="description" content="{$catalog_departments_tree->get_description()|escape:'html'}" />
	{include file="blocks/header_include.tpl"}	
</head>
<body>
{include file="blocks/header.tpl"}	

<div class="wrapper">
	{include file="blocks/top_menu.tpl" _type="catalog"}	
	
	<div class="content">
		{include file="blocks/left_column.tpl"}
		<div class="right-column">
			{foreach from=$catalog_departments key=key item=current_item name="catalog_departments"}
			<h2 class="title-brown">{$current_item->getTitle()}<span class="square"></span></h2>
			{if count($current_item->getProducts()) > 0}
			
			<div class="automat-lst">
				{foreach from=$current_item->getProducts() key=product_key item=current_product name="products"}
				<div>
					<a href="{$current_product->getUri()}" title="{$current_product->getTitle()|escape:'html'}">
						{if !is_null($current_product->thumbObject) && $current_product->thumbObject->isExists}
						<img src="/{$current_product->thumbObject->path}{$current_product->thumbObject->filename}" width="77" height="70" alt="{$current_product->getTitle()|escape:'html'}">
						{/if}
						<span>{$current_product->getTitle()}</span>
					</a>
				</div>
				{/foreach}
			</div><!-- /automat-lst -->
			{/if}
			{/foreach}
		</div><!-- /right-column -->
		<div class="clear"></div>
	</div><!-- /content -->
</div><!-- /wrapper -->
{include file="blocks/footer.tpl"}
</body>
</html>