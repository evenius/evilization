<h1>Evilization</h1>

{if isset($logonerror)}Error with password or email{/if}
<form id="registration" method="post" action="/logon">
	<input type="email" name="email" placeholder="e.g. evil@geni.us"/>
	<input type="password" name="password" placeholder="e.g. 33vÖ1@13E7!" />
	
	<input type="submit" name="logon" value="Login" />
	<input type="submit" name="logon" value="Register" />
</form>


