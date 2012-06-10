<h1>Mission Center</h1>

{foreach $availableMission as $m}
<a href="/world/join/{$m->id}">{$m->name}</a>
{/foreach}
