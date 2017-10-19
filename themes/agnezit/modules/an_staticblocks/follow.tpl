{*

{$an_staticblock->title|escape:'htmlall':'UTF-8'}
{$an_staticblock->link}
{$an_staticblock->getImageLink()}
{$an_staticblock->content}

*}

{if $an_staticblock->link <> ''}
	<a href="{$an_staticblock->link}">{$an_staticblock->title|escape:'htmlall':'UTF-8'}</a>
{/if}

