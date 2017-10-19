{*

{$an_staticblock->title|escape:'htmlall':'UTF-8'}
{$an_staticblock->link}
{$an_staticblock->getImageLink()}
{$an_staticblock->content}

*}



{if $an_staticblock->getImageLink() <> ''}
	<img src="{$an_staticblock->getImageLink()}" alt="">
{/if}

{$an_staticblock->content}
