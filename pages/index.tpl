<article id="start">
	<div class="container">
		<h1>Evilization</h1>
		<nav>
			<a>Continue</a>
			<a>New User</a>
		</nav>

		
		{if false}
		{if isset($logonerror)}Error with password or email{/if}
		<form id="registration" method="post" action="/logon">
			<input type="email" name="email" placeholder="e.g. evil@geni.us"/>
			<input type="password" name="password" placeholder="e.g. 33vÖ1@13E7!" />
			
			<input type="submit" name="logon" value="Login" />
			<input type="submit" name="logon" value="Register" />
		</form>
		{/if}
	</div>
		<div class="anims">
			<div class="block block_1"></div>
			<div class="block block_2"></div>
			<div class="rocket rocket_1"></div>
			<div class="rocket rocket_2"></div>
			<div class="rocket rocket_3"></div>
			<div class="rocket rocket_4"></div>
		</div>
</article>