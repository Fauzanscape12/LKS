			<div class="left">
				<div class="panel">
					<a href="index.php" class="btn">Home <img src="images/smilies/cool2.gif"></a>
					<a href="register.php" class="btn">Register <img src="images/smilies/request.gif"></a>
					<a href="student.php" class="btn active">Student <img src="images/smilies/shakehand2.gif"></a>
					<a href="calon.php" class="btn">Calon Student <img src="images/smilies/traveller.gif"></a>
					<div class="cleaner_h20"></div>
					<a href="about.php" class="btn">About us <img src="images/smilies/jempol1.gif"></a>
					<a href="contact.php" class="btn">Contact me <img src="images/smilies/bingung.gif"></a>
				</div>
			</div>
			<div class="right">
				<div class="content text-center">
					<h2>STUDENTS OF DOTA 2 SCHOOL</h2>
					<div class="cleaner_h5"></div>
					<fieldset>
					<legend>NAME OF STUDENTS FROM DOTA 2 SCHOOL</legend>
					<table bordercolor="#807D79" width="100%" border="1" cellpadding="5" cellspacing="0">
					<tr><th>No.</th><th>Id Student</th><th>Username</th><th>Team</th><th>Level</th></tr>
					<?php
						$q = mysql_query("select * from student where score > '69'");
						$n = 1;
						while($r = mysql_fetch_array($q))
						{
							echo '<tr><td>'.$n.'</td><td>'.$r["id"].'</td><td>'.$r["username"].'</td><td>'.$r["team"].'</td><td>'.$r["level"].'</td></tr>';
							$n++;
						}
					?>
					</table>
					</fieldset>

				</div>
			</div>
			
		</div>