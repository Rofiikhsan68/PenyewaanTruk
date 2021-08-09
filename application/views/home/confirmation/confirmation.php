<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb banner-bg">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1 class="color-black">Konfirmasi</h1>
                <nav class="d-flex align-items-center">
                    <a class="color-black" href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a class="color-black" href="category.html">Konfirmasi</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Order Details Area =================-->
<section class="order_details section_gap">
    <div class="container">
        <h3 class="title_confirmation">Terimakasih, Pesanan anda sudah berhasil kami terima.</h3>
        <div class="row order_d_inner">
            <div class="col-lg-4">
                <div class="details_item">
                    <h4>Info Pesanan</h4>
                    <ul class="list">
                        <li><a href="#"><span>Order number</span> : <?= $data_transaction_group['id_transaction']?></a></li>
                        <li><a href="#"><span>Date</span> : <?= date("d F Y", strtotime($data_transaction_group['transaction_date']))?></a></li>
                        <li><a href="#"><span>Total</span> : Rp <?= number_format($data_transaction_group['total_price']), 0, ",", "."?></a></li>
                        <li><a href="#"><span>Payment method</span> : Transfer ATM</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="details_item">
                    <h4>List Barang</h4>
                    <ul class="list">
                    <?php $i=1; $total=0; foreach($data_barang as $row) {?>
							<li><a href="#"><span>Barang <?= $i++;?></span> : <?= $row['goods_name']?></a></li>
							<li><a href="#"><span>Bobot</span> : <?= $row['weight']?> Kg</a></li>
							<?php }?>
                           
						
                        </ul> 
                        
                    <div class="row">
                      
                        <div class="col-md-8">
                            <p></p>
                        </div>
                    </div>

                </div>
            </div>


           
            <div class="col-lg-4">
                <div class="details_item">
                    <h4>Pembayaran</h4>
                    <!-- <ul class="list">
                        <li><a href="#"><span>Street</span> : 56/8</a></li>
                        <li><a href="#"><span>City</span> : Los Angeles</a></li>
                        <li><a href="#"><span>Country</span> : United States</a></li>
                        <li><a href="#"><span>Postcode </span> : 36952</a></li>
                    </ul> -->

                    <p>
                        Silahkan lakukan Pembayaran melalui Transfer ATM. <br> Transfer Ke Rekening BNI 00931442124 a/n Estu Transindo.
                        dengan jumlah <span style="font-weight:bold;"> Rp <?= number_format($data_transaction_group['total_price']),",","."?></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="order_details_table">
            <h2>Order Details</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Hari Sewa</th>
                            <th scope="col">Hari Selesai</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $total =0; foreach($data_transaction as $row){?>
                            <tr>
                                <td>
                                    <p><?= $row['product_name'] ?></p>
                                </td>
                                <td>
                                <p> <?= date("d F Y", strtotime($row['hari_sewa'])) ?></p>
                                </td>
                                <td>
                                <p> <?= date("d F Y", strtotime($row['hari_selesai'])) ?></p>
                                </td>
                                <td>
                                    <h5><?= $row['qty'] ?></h5>
                                </td>
                                <td>
                                    <p>Rp <?= number_format($row['price']),",","." ?></p>
                                </td>
                            </tr>
                            <?php $total += $row['price']*$row['qty']?>
							<?php }?>  
                       
                        
                        
                        <tr>
                            <td>
                                <h4>Subtotal</h4>
                            </td>
                            <td>
                                <h5></h5>
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                                <p>Rp <?=number_format($total), ",","." ?></p>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <h4>Total</h4>
                            </td>
                            <td>
                                <h5></h5>
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                                <p>Rp <?=number_format($total), ",","." ?></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!--================End Order Details Area =================-->