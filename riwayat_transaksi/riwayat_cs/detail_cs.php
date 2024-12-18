<?php 
   require_once('../../_header.php');
   $get_id = $_GET['id_cs'];
   $data = query("SELECT * FROM tb_riwayat_cs WHERE id_cs = $get_id")[0];
   // var_dump($data);
?>

<div id="detail_or_cs" class="main-content">
   <div class="container">
      <div class="baris">
         <div class="col mt-2">
            <div class="card-md">
               <div class="card-title card-flex">
                  <div class="card-col">
                     <h2>Detail Order</h2>	
                  </div>

                  <div class="card-col txt-right">
                     <h3 class="no-order"><small>No Order : </small><?=$data['or_number']?></h3>	
                  </div>
               </div>

               <div class="card-body">
                     <div class="jdl-or">
                        <h4>Customer</h4>
                     </div>
                     <table class="tb-detail_customer">   
                        <tr>
                           <th>Nama</th>
                           <td><?=$data['pelanggan']?></td>
                        </tr>

                        <tr>
                           <th>Nomor Telepon</th>
                           <td><?=$data['no_telp']?></td>
                        </tr>

                        <tr>
                           <th>Alamat</th>
                           <td><?=$data['alamat']?></td>
                        </tr>

                        <tr>
                           <th>Order Masuk</th>
                           <td><?=$data['tgl_msk']?></td>
                        </tr>

                        <tr>
                           <th>Diambil Pada</th>
                           <td><?=$data['tgl_klr']?></td>
                        </tr>
                        
                        <tr>
                           <th>Durasi Kerja</th>
                           <td><?=$data['wkt_kerja']?></td>
                        </tr>

                        <tr>
                           <th>Jenis Paket</th>
                           <td><?=$data['j_paket']?></td>
                        </tr>  
                        </tr>
                     </table>

                     <div class="mt-1"></div>
                     
                     <div class="jdl-or">
                        <h4>Order</h4>
                     </div>
                     
                     <table class="tb-detail_order">   
                        <tr>
                           <th>Jumlah (Pcs)</th>
                           <th>Harga Per-Pcs</th>
                           <th>Total Bayar</th>
                        </tr>

                        <tr>
                           <td><?=$data['jml_pcs'] . " (Pcs)"?></td>
                           <td><?="Rp. " . $data['h_perpcs']?></td>
                           <td><?="Rp. " . $data['total']?></td>
                        </tr>

                        <tr>
                           <th colspan="2" style="text-align: center;">Nominal Bayar</th>
                           <td><?="Rp. " . $data['nominal_byr']?></td>
                        </tr>

                        <tr>
                           <th colspan="2" style="text-align: center;">Uang Kembali</th>
                           <td><?="Rp. " . $data['kembalian']?></td>
                        </tr>
                     </table>

                     <div class="details">
                        <h4 class="mb-01">Keterangan:</h4>
                        <p class="lead"><?=$data['keterangan']?></p>
                     </div>

                     <div class="form-footer_detail">
                        <div class="buttons">
                           <a class="btn-sm bg-primary" href="<?=url('riwayat_transaksi/riwayat_cs/cetak_info.php')?>?id_cs=<?=$data['id_cs']?>">Cetak Invoice</a>
                           <a class="btn-sm bg-transparent" href="<?=url('riwayat_transaksi/riwayat.php')?>">Kembali</a>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>