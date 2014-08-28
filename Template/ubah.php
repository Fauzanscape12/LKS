			<div class="left">
				<div class="panel">
					<a href="admin.php" class="btn active">Calon Student <img src="images/smilies/traveller.gif"></a>
				</div>
			</div>
			<div class="right">
				<div class="content text-center">
					<h2>LIST DOTA 2 SCHOOL PRA STUDENTS</h2>
					<div class="cleaner_h5"></div>
					<fieldset>
						<legend>CHANGE STUDENTS </legend>
						<form name="form1" method="post" action="saveedit.php">
						<table width="600" border="0" cellpadding="1" cellspacing="2">
    						<?php
								if($_GET) {
								# Baca variabel URL (browser)
									$id = $_GET['id'];
								# Baca data di dalam tabel jurusan sesuai ID yang didapat
								$sql 	= "SELECT * FROM student WHERE id='$id'";
								$query	= mysql_query($sql) or die ("Query salah : ".mysql_error());
								$r = mysql_fetch_array($query);
								}
							?>
    						<tr>
      							<td width="107"><b>Username</b></td>
      							<td width="483">: 
      							<input name="username" type="text" value="<?php echo $r['username']; ?>" size="50" maxlength="60">
      							<input name="id" type="hidden" value="<?php echo $r['id']; ?>"></td>
    						</tr>
    						<tr>
      							<td width="107"><b>Name</b></td>
      							<td width="483">: 
      							<input name="name" type="text" value="<?php echo $r['name']; ?>" size="50" maxlength="60">
      							<input name="id" type="hidden" value="<?php echo $r['id']; ?>"></td>
    						</tr>
    						<tr>
      							<td width="107"><b>Password</b></td>
      							<td width="483">: 
      							<input name="password" type="text" value="<?php echo $r['password']; ?>" size="50" maxlength="60">
      							<input name="id" type="hidden" value="<?php echo $r['id']; ?>"></td>
    						</tr>
    						<tr>
      							<td width="107"><b>Level</b></td>
      							<td width="483">: 
      							<input name="level" type="text" value="<?php echo $r['level']; ?>" size="50" maxlength="60">
      							<input name="id" type="hidden" value="<?php echo $r['id']; ?>"></td>
    						</tr>
    						<tr>
      							<td width="107"><b>Team</b></td>
      							<td width="483">: 
      							<input name="team" type="text" value="<?php echo $r['team']; ?>" size="50" maxlength="60">
      							<input name="id" type="hidden" value="<?php echo $r['id']; ?>"></td>
    						</tr>
    						<tr>
      							<td width="107"><b>Score</b></td>
      							<td width="483">: 
      							<input name="score" type="text" value="<?php echo $r['score']; ?>" size="50" maxlength="60">
      							<input name="id" type="hidden" value="<?php echo $r['id']; ?>"></td>
    						</tr>
    						<tr>
      							<td>&nbsp;</td>
      							<td><input type="submit" name="Submit" value=" Simpan "></td>
    						</tr>
  						</table>
  						</form>
					</fieldset>

				</div>
			</div>
			<div class="cleaner_h60"></div>
		</div>