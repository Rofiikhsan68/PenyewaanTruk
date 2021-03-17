<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb banner-bg">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1 class="color-black">Checkout</h1>
                <nav class="d-flex align-items-center">
                    <a class="color-black" href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a class="color-black" href="single-product.html">Checkout</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Checkout Area =================-->
<section class="checkout_area section_gap">
    <div class="container">
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Your Order</h3>
                    <div class="cart_inner">
                        <div class="table-responsive">
                            <form action="" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Product</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     

                                            <tr>
                                                <td>
                                                    <div class="media">
                                                        <div class="d-flex">
                                                            <img style="width: 152px; height:102px;" src="" alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5></h5>
                                                </td>
                                                <td>
                                                    <div class="product_count">
                                                        <input type="hidden" name="id_cart[]" value="">
                                                        <input type="text" readonly value="" title="Quantity:" class="input-text qty">

                                                    </div>
                                                </td>
                                                <td style="width: 100px;">
                                                    <h5></h5>
                                                </td>

                                            </tr>
                                        
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>Detail Shipping</h2>
                     
                        <div class="row">
                            <div class="col-md-10">
                                <div class="detail">
                                    <p>Jl. Bona No.123, RT.5/RW.3, Penggilingan, Kec. Cakung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13940, Indonesia Kota Jakarta Timur </p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <a href="" data-toggle="modal" data-target="#modalAlamat"> <span class="badge badge-primary"><i class="fa fa-edit"></i> Edit</span></a>
                            </div>
                        </div>
                        <hr>
                        <ul class="list list_2">
                            <li><a href="#">Subtotal <span></span></a></li>
                            <li><a href="#">Shipping <span>Flat rate: Rp 15.000</span></a></li>
                            <li><a href="#">Total <span></span></a></li>
                        </ul>
                        <div class="payment_item">
                            <div class="radion_btn">
                                <input type="radio" id="f-option5" name="selector">
                                <label for="f-option5">Transfer ATM</label>
                                <div class="check"></div>
                            </div>
                            <p>Anda dapat melakukan Pembayaran melalui Transfer ATM. <br> Transfer Ke Rekening BNI 00931442124 a/n WeTrif</p>
                        </div>
                        <div class="payment_item active">
                            <div class="radion_btn">
                                <input type="radio" id="f-option6" name="selector">
                                <label for="f-option6">COD </label>
                                <img src="img/product/card.jpg" alt="">
                                <div class="check"></div>
                            </div>
                            <p>Cash On Delivery, Anda dapat Melakukan Pembayaran ditempat</p>
                        </div>
                        <!-- <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector">
                                <label for="f-option4">I’ve read and accept the </label>
                                <a href="#">terms & conditions*</a>
                            </div> -->
                        <a class="primary-btn" href="">Proses Transaksi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Checkout Area =================-->

<div class="modal fade" id="modalAlamat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Edit Alamat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea type="" rows="5" class="form-control" id="inputEmail3">Jl. Bona No.123, RT.5/RW.3, Penggilingan, Kec. Cakung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13940, Indonesia Kota Jakarta Timur</textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Perbarui Alamat</button>
            </div>
        </div>
    </div>
</div>