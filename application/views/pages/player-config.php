<h2>Player Config</h2>

<p>
	Use this page to:
	<ul>
		<li>Add players to a Mahjong Game</li>
		<li>Configure player names and info</li>
		<li>Link accounts</li>
	</ul> 
</p>

<h3>Add a new player here</h3>
<form action="../../controllers/player.php/addplayer">
	<div class="addplayer">
		<label>Nickname</label><br />
		<input type="text" class="formtext" name="addplayer" value ="Nickname">
	</div>
	<div class="addplayer">
		<label>First Name</label><br />
		<input type="text" class="formtext" name="addplayer" value ="First Name">
	</div>
	<div class="addplayer">
		<label>Last Name</label><br />
		<input type="text" class="formtext" name="addplayer" value ="Last Name">
	</div>
	<div class="addplayer">
		<label>Profile</label><br />
		<input type="textarea" class="formprofile" name="addplayer" value ="Profile">
	</div>
</form>

<form>
<p>
	Player 1 (East Wind): <select class="formselect" name="player1" type="select"></select>
</p>
<p>
	Player 2 (South Wind): <select class="formselect" name="player2" type="select"></select>
</p>
<p>
	Player 3 (West Wind): <select class="formselect" name="player3" type="select"></select>
</p>
<p>
	Player 4 (North Wind): <select class="formselect" name="player4" type="select"></select>
</p>
</form>

