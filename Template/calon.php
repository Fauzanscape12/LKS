			<div class="left">
				<div class="panel">
					<a href="index.php" class="btn">Home <img src="images/smilies/cool2.gif"></a>
					<a href="register.php" class="btn">Register <img src="images/smilies/request.gif"></a>
					<a href="student.php" class="btn">Student <img src="images/smilies/shakehand2.gif"></a>
					<a href="calon.php" class="btn active">Calon Student <img src="images/smilies/traveller.gif"></a>
					<div class="cleaner_h20"></div>
					<a href="about.php" class="btn">About us <img src="images/smilies/jempol1.gif"></a>
					<a href="contact.php" class="btn">Contact me <img src="images/smilies/bingung.gif"></a>
				</div>
			</div>
			<div class="right">
				<div class="content text-center">
					<h2>LIST DOTA 2 SCHOOL PRA STUDENTS</h2>
					<div class="cleaner_h5"></div>
					<fieldset>
						<legend>STUDENTS STATUS </legend>
						<table width="100%" border="1" bordercolor="#807D79" cellpadding="5" cellspacing="0">
							<tr><th>No</th><th>Id Student</th><th>Username</th><th>Hero</th><th>Score</th></tr>
							<?php
							$q = mysql_query("Select * from student");
							$n = 1;
							while ($r = mysql_fetch_array($q)) {
								if($r['score']>70){ $warna="#B3D577"; } else {$warna="#D87676";}
								echo '<tr bgcolor="'.$warna.'" style="color:black;"><td>'.$n.'</td><td>'.$r["id"].'</td><td>'.$r["username"].'</td><td>'.$r['hero'].'</td><td>'.$r["score"].'</td></tr>';
								$n++;
							}
							?>
						</table>
					</fieldset>

				</div>
			</div>
			
		</div>