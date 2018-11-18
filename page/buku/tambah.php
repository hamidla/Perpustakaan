<div class="panel panel-default">
                        <div class="panel-heading">
                        TAMBAH DATA
</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>JUDUL :</label>
                                            <input class="form-control" name="judul" />
                                        </div>
                                        <div class="form-group">
                                            <label>PENGARANG :</label>
                                            <input class="form-control" name="pengarang" />
                                        </div>
                                        <div class="form-group">
                                            <label>PENERBIT :</label>
                                            <input class="form-control" name="penerbit" />
                                        </div>

                                         <div class="form-group">
                                            <label>Tahun Terbit :</label>
                                            <select class="form-control" name="tahun">
                                                <?php 

                                                		$tahun =date("Y");

                                                		for ($i=$tahun-29; $i <= $tahun ; $i++) { 
                                                			echo "
                                                					<option value='".$i."'>".$i."</option>
                                                			";
                                                		}

                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>ISBN : </label>
                                            <input class="form-control" name="isbn" />
                                        </div>
                                        <div class="form-group">
                                            <label>JUMLAH BUKU</label>
                                            <input class="form-control" type="number" name="jumlah" />
                                        </div>
                                         <div class="form-group">
                                            <label>LOKASI : </label>
                                            <select class="form-control" name="lokasi">
                                                <option value="rak1">rak 1</option>
                                                <option value="rak2">rak 2</option>
                                                <option value="rak3">rak 3</option>
                                                
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>TANGGAL INPUT : </label>
                                            <input class="form-control" name="tanggal" type="date" />
                                        </div>
                                        <div>
                                        	<input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                                        </div>
                                </div>
                            </form>
                                </div>
</div>
</div>
</div>
<?php
		$judul = $_POST ['judul'];
		$pengarang = $_POST ['pengarang'];
		$penerbit = $_POST ['penerbit'];
		$tahun = $_POST ['tahun'];
		$isbn = $_POST ['isbn'];
		$jumlah = $_POST ['jumlah'];
		$lokasi = $_POST ['lokasi'];
		$tanggal = $_POST ['tanggal'];

		$simpan = $_POST ['simpan'];

		if ($simpan) {
			$sql = $koneksi ->Query("insert into tb_buku (judul,pengarang,penerbit,tahun_terbit,isbn,jumlah_buku,lok_asl,tgl_input)
				values('$judul','$pengarang','$penerbit','$tahun','$isbn','$jumlah','$lokasi','$tanggal ')");

			if ($sql){
				?>
					<script type="text/javascript">
						
						alert ("data berhasil disimpan");

					</script>					
				<?php
			}
		}
  ?>