<h1>Create your Evil Genius</h1>

<form method="post" action="/create">
	<h2>Evil Genius</h2>
	<label for="firstname">First name:</label>
	<input type="text" name="firstname" placeholder="e.g. John" />
	
	<hr class="clear" />
	
	<label for="lastname">Last name:</label>
	<input type="text" name="lastname" placeholder="e.g. Appleseed" />
	
	<hr class="clear" />
	
	<label for="gender">Gender:</label>
	<hr class="clear" />
	<input type="radio" name="gender" value="m"/>Man
	<input type="radio" name="gender" value="f"/>Female
	<input type="radio" name="gender" value="o"/>Other
	
	<hr class="clear" />
	
	<label>Choose your Alias</label>
	<input type="text" name="alias" placeholder="e.g. Dr. Killfox"/>
	
	<hr class="clear" />
	
	<h2>Evil Organization</h2>
	<label>Organization name</label>
	<input type="text" name="organization" placeholder="e.g. Evil Corp."> 
	
	<hr class="clear" />
	<input type="submit" value="submit!" />
</form>