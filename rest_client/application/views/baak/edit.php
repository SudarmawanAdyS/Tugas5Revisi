<?php echo form_open('baak/edit');?>
<?php echo form_hidden('id_baak',$baak[0]->id_baak);?>
 
<table>
    <tr><td>id BAAK</td><td><?php echo form_input('',$baak[0]->id_baak,"disabled");?></td></tr>
    <tr><td>NAMA</td><td><?php echo form_input('nama_baak',$baak[0]->nama_baak);?></td></tr>
<tr><td>EMAIL</td><td><?php echo form_input('email',$baak[0]->email);?></td></tr>
<tr><td>TELP</td><td><?php echo form_input('telp',$baak[0]->telp);?></td></tr>
    <tr><td>ALAMAT</td><td><?php echo form_input('alamat',$baak[0]->alamat);?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('baak','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>