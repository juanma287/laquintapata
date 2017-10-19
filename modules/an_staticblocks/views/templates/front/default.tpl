{*

{$an_staticblock->title|escape:'htmlall':'UTF-8'}
{$an_staticblock->link}
{$an_staticblock->getImageLink()}
{$an_staticblock->content}

*}
<div class="an-static-block" style="background-image: url({$an_staticblock->getImageLink()});">
{if $an_staticblock->link <> ''}
<a href="{$an_staticblock->link}">
{/if}
{$an_staticblock->content nofilter}
{if $an_staticblock->link <> ''}
</a>
{/if}
</div>