<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Language" content="ru" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>{$department->get_title()|escape:'html'}</title>
	<meta name="keywords" content="{$department->get_keywords()|escape:'html'}" />
	<meta name="description" content="{$department->get_description()|escape:'html'}" />
	{include file="blocks/header_include.tpl"}
    <link href="/inside.css" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript" src="/img/opacity.js"></script>
	<script type="text/javascript">
	// Создаем правило изменения прозрачности: задаем имя правила, начальную и конечную прозрачность, а также необязательный параметр задержки влияющий на скорость смены прозрачности
	fadeOpacity.addRule('oR1', .7, 1, 40);
	</script>	
</head>

<body>

<div style="width:990px;margin:0 auto;margin-top:30px;">

		{include file="blocks/header.tpl"}	
        
        
        	<table width="100%">
		<tr>
			<td valign="top" style="color:white;padding-left:30px;padding-top:30px;padding-bottom:30px;font-size:10pt;">
				<h1>{$department->getTitle()}</h1>
				{$department->getContent()}
				
				{foreach from=$department->getChildren() key=key item=current_department name="sub_deps"}
				<h2>{$current_department->getTitle()}</h2>
				{$current_department->getContent()}
				
				<div class="products">
					
						{foreach from=$current_department->getProducts() key=key item=product name="products"}
						<div style="width: 230px;  border: 1px solid #016c42; float:left">
							<table width="230px" height="100%">
								<tr class="nazva">
									<td>
										{$product->getTitle()}
									</td>
								</tr>
								<tr>
									<td class="photos">
										{if !is_null($product->imageObject) && $product->imageObject->isExists}
										<a href="/{$product->imageObject->path}{$product->imageObject->filename}" title="{$product->getTitle()|escape:'html'}" class="fancybox" rel="gallery_{$product->getId()}">
											<img src="/{$product->thumbObject->path}{$product->thumbObject->filename}" alt="{$product->getTitle()|escape:'html'}" title="{$product->getTitle()|escape:'html'}"{if $product->thumbObject->width > 150} width="150"{/if} id="img_{$product->getId()}" onMouseOver="fadeOpacity(this.id, 'oR1')" onmouseout="fadeOpacity.back(this.id)">								
										</a>
										{/if}
										{foreach from=$product->getImages() key=key item=current_item name="product_gallery"}
										{if !is_null($current_item->imageObject) && $current_item->imageObject->isExists}
											<a href="/{$current_item->imageObject->path}{$current_item->imageObject->filename}" title="{$current_item->getTitle()|escape:'html'}" class="fancybox" rel="gallery_{$product->getId()}"></a>
										{/if}
										{/foreach}
									</td>
								</tr>
								<tr class="txt" style="height: 100%;">
									<td>
										{$product->getAnnotation()}
									</td>
								</tr>
							</table>	
                            </div>
						</td>
						
						{if $smarty.foreach.products.last && $smarty.foreach.products.iteration % 3 != 0}
							{if $smarty.foreach.products.iteration % 3 == 1} 
							<td style="border: 0; background-color:black;">&nbsp;</td>
							<td style="border: 0; background-color:black;">&nbsp;</td>
							{elseif $smarty.foreach.products.iteration % 3 == 2} 
							<td style="border: 0; background-color:black;">&nbsp;</td>
							{/if}
						{/if}
						
						{if $smarty.foreach.products.iteration % 3 == 0 || $smarty.foreach.products.last}
					</tr>
					<tr>
						<td colspan="3" style="background-color:black; border: 0;">&nbsp;
							
						</td>
					</tr>					
					<tr>					
						{/if}			
						{/foreach}
					</tr>	
				</table>
				<p>&nbsp;</p>
				{/foreach}
			</td>
			<td valign="top" align="center" style="padding-top:30px;">
				{if count($department->getImages()) > 0}
				{foreach from=$department->getImages() key=key item=current_item name="gallery"}
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