{extends $layout}

{block content}

{if $posts}
	
		<article id="post-{$post->id}" class="{$post->htmlClasses}">

				<header class="entry-header">
		
					<h1 class="entry-title">
						<span>
							{__ 'Category Archives:'} 
							<span>{$category->title}</span>
						</span>
					</h1>
					
				</header>

				{if strlen($category->description) !== 0}
				<div class="entry-content">
					{!$category->description}
				</div>
				{/if}
				
		</article><!-- /#post-{$post->id} -->	


		{include snippets/content-nav.php location => 'nav-above'}

		{include snippets/content-loop.php posts => $posts}

		
		<?php /* {include snippets/content-nav.php location => 'nav-below'} 
			{willPaginate}
	<nav class="paginate-links">
		{paginateLinks true}
	</nav>
	{/willPaginate}	*/
			if (function_exists("c_pagination")) {
		    c_pagination($post->max_num_pages);
		} ?>
 
	{ifset $themeOptions->advertising->showBox4}
	<div id="advertising-box-4" class="advertising-box">
	    {!$themeOptions->advertising->box4Content}
	</div>
	{/ifset}

{else}

	{include snippets/nothing-found.php}

{/if}

{/block}
