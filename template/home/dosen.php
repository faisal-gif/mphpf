<h2>Data Mahasiswa</h2>
<a href="<?php echo $this->homeAddress('/add-new-dosen'); ?>">Tambah Dosen Baru</a>
<br/>
<br/>
<table class="data-table">
    <thead class="data-table-th">
        <td class="data-table-td">NIP</td>
        <td class="data-table-td">Nama</td>
        <td class="data-table-td">Alamat</td>
        <td class="data-table-td">Prodi</td>
        <td class="data-table-td">Jurusan</td>
        <td class="data-table-td">No. Telepon</td>
    </thead>
    <tbody>
    <?php foreach ($this->data('all_dosen') as $dosen) { ?>
        <tr class="data-table-tr">
            <td class="data-table-td"><?php echo $dosen['nip'] ?></td>
            <td class="data-table-td"><?php echo $dosen['nama'] ?></td>
            <td class="data-table-td"><?php echo $dosen['alamat'] ?></td>
            <td class="data-table-td"><?php echo $dosen['prodi'] ?></td>
            <td class="data-table-td"><?php echo $dosen['jurusan'] ?></td>
            <td class="data-table-td"><?php echo $dosen['no_telp'] ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
