<?php echo $this->session->flashdata('hasil'); ?>
<h2 align="left"><strong>Data BAAK</strong></h2>
<p><a href="https://sisfopkl.000webhostapp.com/klient/klient/index.php/baak/create">Tambah Data</a></p>
<table width="847" border="1" cellpadding="3">
    <tr>
    <td width="96"><div align="center"><strong>id BAAK</strong></div></td>
    <td width="248"><div align="center"><strong>Nama BAAK</strong></div></td>
    <td width="57"><div align="center"><strong>Email</strong></div></td>
    <td width="121"><div align="center"><strong>Telp</strong></div></td>
    <td width="241"><div align="center"><strong>Alamat</strong></div></td>
    <td width="121"><div align="center"><strong>Action</strong></div></td>
  </tr>
<?php
    foreach ($mahasiswa as $m){
        echo "<tr>
                 <td><div align='center'>$m->id_baak</div></td>
                 <td>$m->nama_baak</td>
                 <td><div align='center'>$m->email</td>
                 <td>$m->telp</td>
				 <td>$m->alamat</td>
                 <td><div align='center'>".anchor('baak/edit/'.$m->id_baak,'Edit')."
                     ".anchor('baak/delete/'.$m->nim,'Delete')."
                     </div></td>
              </tr>";
     }
?>
</table>