<?php echo form_open('baak/create');?>
<table>
    <tr><td>ID BAAK</td><td><?php echo form_input('id_baak');?></td></tr>
    <tr><td>NAMA</td><td><?php echo form_input('nama_baak');?></td></tr>
<tr><td>EMAIL</td><td><?php echo form_input('email');?></td></tr>
<tr><td>TELP</td><td><?php echo form_input('telp');?></td></tr>
    <tr><td>ALAMAT</td><td><?php echo form_input('alamat');?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('baak','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>