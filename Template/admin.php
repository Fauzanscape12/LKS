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
						<legend>STUDENTS STATUS </legend>
						<table width="100%" border="1" bordercolor="#807D79" cellpadding="5" cellspacing="0">
							<tr><th>No</th><th>Id Student</th><th>Username</th><th>Hero</th><th>Score</th><th>Option</th></tr>
							<?php
							$q = mysql_query("Select * from student");
							$n = 1;
							while ($r = mysql_fetch_array($q)) {
								if($r['score']>70){ $warna="#B3D577"; } else {$warna="#D87676";}
								echo '<tr bgcolor="'.$warna.'" style="color:black;"><td>'.$n.'</td><td>'.$r["id"].'</td><td>'.$r["username"].'</td><td>'.$r['hero'].'</td><td>'.$r["score"].'</td><td><a href="ubah.php"> Edit</a></td></tr>';
								$n++;
							}
							?>
						</table>
					</fieldset>

				</div>
			</div>
			<div class="cleaner_h60"></div>
		</div>