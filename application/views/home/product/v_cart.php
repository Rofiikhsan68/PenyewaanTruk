 <!-- Start Banner Area -->
 <section class="banner-area organic-breadcrumb banner-bg">
     <div class="container">
         <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
             <div class="col-first">
                 <h1 class="color-black"><?= $title ?></h1>
                 <nav class="d-flex align-items-center">
                     <a class="color-black" href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                     <a class="color-black" href="category.html">Cart</a>
                 </nav>
             </div>
         </div>
     </div>
 </section>
 <!-- End Banner Area -->

 <!--================Cart Area =================-->
 <section class="cart_area">
     <div class="container">
         <div class="cart_inner">
             <div class="table-responsive">
                 <form action="<?= base_url() ?>cart/updateCart/" method="post">
                     <table class="table">
                         <thead>
                             <tr>
                                 <th scope="col">Product</th>
                                 <th scope="col">Price</th>
                                 <th scope="col">Hari Sewa</th>
                                 <th scope="col">Hari Selesai</th>
                                 <th scope="col">Quantity</th>
                                 <th scope="col">Total</th>
                                 <th scope="col">Hapus</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php $i_qty = 0;
                                $i_plus = 0;
                                $i_min = 0;
                                $total = 0;
                                foreach ($data_cart as $row) { ?>

                                 <tr>
                                     <td>
                                         <div class="media">
                                             <div class="d-flex">
                                                 <img style="width: 152px; height:102px;" src="<?= base_url() ?>assets/home/foto_produk/<?= $row['photo'] ?>" alt="">
                                             </div>
                                             <div class="media-body">
                                                 <p><?= $row['product_name'] ?></p>
                                             </div>
                                         </div>
                                     </td>
                                     <td>
                                         <h5>Rp <?= number_format($row['price'], 0, ".", ".") ?></h5>
                                     </td>
                                     <td>
                                     <?= date("d F Y", strtotime($row['hari_sewa'])) ?>
                                     </td>
                                     <td>
                                     <?= date("d F Y", strtotime($row['hari_selesai'])) ?>
                                     </td>
                                     <td>
                                         <div class="product_count">
                                             <input type="hidden" name="id_cart[]" value="<?= $row['id_cart'] ?>">
                                             <input type="text" name="qty[]" id="sst<?= $i_qty++ ?>" maxlength="12" value="<?= $row['qty'] ?>" title="Quantity:" class="input-text qty">
                                             <button onclick="var result = document.getElementById('sst<?= $i_plus++ ?>'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                             <button onclick="var result = document.getElementById('sst<?= $i_min++ ?>'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                         </div>
                                     </td>
                                     <td style="width: 100px;">
                                         <h5>Rp <?= number_format($row['price'] * $row['qty'] * $row['jumlah_hari'], 0, ".", ".") ?></h5>
                                     </td>
                                     <td>
                                         <center>
                                             <button type="button" onClick="deleteCart('<?= base_url() ?>cart/deleteCart/<?= $row['id_cart'] ?>')" data-toggle="modal" data-target="#modal_delete" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                                         </center>
                                     </td>
                                 </tr>
                                 <?php $total += $row['price'] * $row['qty'] * $row['jumlah_hari']; ?>
                             <?php } ?>
                             <tr class="bottom_button">
                                 <td>
                                     <button type="submit" class="gray_btn" href="#">Update Cart</button>
                                 </td>
                                 <td>

                                 </td>
                                 <td>
                                 <td>
                                 </td>

                                 <td>
                                 </td>
                                 </td>
                                 <td>
                                 </td>
                                 <td></td>
                             </tr>
                             <tr>
                                 <td>

                                 </td>
                                 <td>

                                 </td>
                                 <td></td>
                                 <td></td>
                                 <td>
                                     <h5>Subtotal</h5>
                                 </td>
                                 <td>
                                     <h5>Rp <?= number_format($total, 0, ".", ".") ?></h5>
                                 </td>
                                 <td></td>
                             </tr>

                             <tr class="out_button_area">
                                 <td>

                                 </td>
                                 <td>
                                 <td></td>
                                 <td></td>
                                 </td>
                                 <td>

                                 </td>
                                 <td>
                                     <div class="checkout_btn_inner d-flex align-items-center">
                                         <a class="gray_btn" href="<?= base_url() ?>home/all_product">Continue Shopping</a>
                                         <a href="<?= base_url() ?>home/checkout/" class="primary-btn" href="#">Proceed to checkout</a>
                                     </div>
                                 </td>
                                 <td></td>
                             </tr>
                         </tbody>
                     </table>
                 </form>
             </div>
         </div>
     </div>
 </section>
 <!--================End Cart Area =================-->

 <!-- Modal -->
 <div class="modal fade" id="modal_delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="modal_title">Hapus Produk</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 Anda Yakin ingin menghapus produk tersebut dari daftar keranjang?
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 <a id="button"><button type="button" class="btn btn-info">Hapus Produk</button></a>
             </div>
         </div>
     </div>
 </div>