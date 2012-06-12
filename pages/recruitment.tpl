{foreach $availableRecruit as $r}
	<a href="/recruit/add/{$r->id}">{$r->name}</a> (you have {$r->amount})
	<br />
{/foreach}
