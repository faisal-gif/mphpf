<form method="post" action="<?php $this->homeAddress('/add-new-dosen'); ?>">
    <label for="txt_name">Nip:</label>
    <br/>
    <input style="margin-bottom: 16px; width: 20%" id="txt_nip" type="text" placeholder="NIP dosen" name="NIP"/>
    <br />
    <label for="txt_name">Nama:</label>
    <br/>
    <input style="margin-bottom: 16px; width: 20%" id="txt_name" type="text" placeholder="Nama lengkap dosen" name="nama"/>
    <br />
    <label for="txa_address">Alamat:</label>
    <br/>
    <textarea style="margin-bottom: 16px; width: 20%; height: 60px;" id="txt_address" type="text" placeholder="Alamat lengkap Dosen" name="alamat"></textarea>
    <br/>
    <label for="txt_phone_number">No. Telepon:</label>
    <br/>
    <input style="margin-bottom: 16px; width: 20%" type="txt_phone_number" placeholder="No. Telepon yang aktif" name="no_telp"/>
    <br/>
    <label for="txt_prodi">Prodi:</label>
    <br/>
    <input style="margin-bottom: 16px; width: 20%" type="txt_prodi" placeholder="Prodi" name="prodi"/>
    <br/>
    <label for="txt_jurusan">Jurusan:</label>
    <br/>
    <input style="margin-bottom: 16px; width: 20%" type="txt_jurusan" placeholder="Jurusan" name="jurusan"/>
    <br/>
    <input type="submit" name="submit" value="Simpan" />
</form>
