{*

{$an_staticblock->title|escape:'htmlall':'UTF-8'}
{$an_staticblock->link}
{$an_staticblock->getImageLink()}
{$an_staticblock->content}

*}

{if $page_name =='index'}
<section class="first_display">
	<div class="player_wr">
		{$an_staticblock->content}
	</div>
</section>
{/if}

