<?php

class connect
{
	//properties
	private $dbHost;
	private $dbUser;
	private $dbPass;
	private $dbName;
	//constructor
	public function __construct($a,$b,$c,$d)
	{
		$this->dbHost = $a;
		$this->dbUser = $b;
		$this->dbPass = $c;
		$this->dbName = $d;
	}


	//method koneksi mysql
	function connect()
	{
		mysql_connect($this->dbHost,$this->dbUser,$this->dbPass);
		mysql_select_db($this->dbName);
	}

	public function add($name,$username,$password,$email,$hero,$level)
	{
		# code...
		$query = "INSERT INTO student (name,username,password,email,hero,level) values('$name','$username','$password','$email','$hero','$level')";
		$hasil = mysql_query($query);
		if ($hasil) echo "Data sudah disimpan";
		else echo "Gagal bro"; echo "<br><a href='index.php'>Back To Web</a>";
	}

	function tampil()
	{
		echo "<table border='1'>";
		echo "<tr><th>No</th><th>Judul</th><th>Pengarang</th><th>Penerbit</th><th>Tahun Terbit</th><th>Action</th></tr>";

		//query for tampil
		$query = "SELECT * FROM buku ORDER BY id";
		$hasil = mysql_query($query);
		$i = 1;
		while ($data = mysql_fetch_array($hasil)) {
			# code...

			
			echo "<tr><td>".$i."</td><td>".$data['judul']."</td><td>".$data['pengarang']."</td><td>".$data['penerbit']."</td><td>".$data['tahunterbit']."</td>

			<td><a href='".$_SERVER['PHP_SELF']."?op=edit&id=".$data['id']."'>Edit</a> | 
			<a href='".$_SERVER['PHP_SELF']."?op=del&id=".$data['id']."'>Hapus</a></td></tr>";
			$i++;
		}
		echo "</table>";
	}	

	public function delete($id)
	{
		# code...
		$query = "DELETE FROM buku WHERE id = '$id'";
		mysql_query($query);
		echo "Data buku Id ".$id." telah dihapus";
	}

	public function data($type,$id)
	{
		# code...
		$query = "SELECT * FROM buku WHERE id = '$id'";
		$hasil = mysql_query($query);
		$data = mysql_fetch_array($hasil);
		if ($type == 'judul') return $data['judul'];
		else if ($type == 'pengarang') return $data['pengarang'];
		else if ($type == 'penerbit') return $data['penerbit'];
		else if ($type == 'thnterbit') return $data['tahunterbit'];
	}


	public function lihatdata($type,$id)
	{
		# code...
		$query = "SELECT * FROM student WHERE id = '$id'";
		$hasil = mysql_query($query);
		$data = mysql_fetch_array($hasil);
		if ($type == 'judul') return $data['judul'];
		else if ($type == 'pengarang') return $data['pengarang'];
		else if ($type == 'penerbit') return $data['penerbit'];
		else if ($type == 'thnterbit') return $data['tahunterbit'];
	}


	public function update($id,$judul,$pengarang,$penerbit,$thnterbit)
	{
		# code...
		$query = "UPDATE buku SET
				judul = '$judul',pengarang = '$pengarang', penerbit = '$penerbit', tahunterbit='$thnterbit'
				WHERE id = '$id'";
				mysql_query($query);
				echo "DATA buku sudah di update";
	}

	public function updatenew($id,$username,$name,$password,$level,$team,$score)
	{
		# code...
		$query = "UPDATE student SET
				username = '$username',name = '$name', password = '$password', level ='$level' , team='$team',score='$score'
				WHERE id = '$id'";
				mysql_query($query);
				if ($query) {
					# code...
				echo '<script language="javascript">';
				echo 'alert("Mantap")';
				echo '</script>';
				echo '<meta http-equiv="Refresh" content="0; URL=admin.php">';
				}
				else {
				echo '<script language="javascript">';
				echo 'alert("Gagal")';
				echo '</script>';
				echo '<meta http-equiv="Refresh" content="0; URL=admin.php">';
				}
	}

	public function addbuku($judul,$pengarang,$penerbit,$thnterbit)
	{
		$query = "INSERT INTO buku (judul,pengarang,penerbit,tahunTerbit) values ('$judul','$pengarang','$penerbit','$thnterbit')";

		$hasil = mysql_query($query);
		if ($hasil) {
			# code...
			echo "Data Berhasil";
		}
		else {
			echo "Belum";
		}
	}
}