<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
    <div align="center">
        <div style="width:800px">
            <style>
                @page {
                    size: A5;
                    margin: 0;
                }

                @media print {
                    /*html, body {
                    width: 148mm;
                    height: 210mm;
                }*/

                }
            </style>
            <div align="center">
                <table width="100%" class="tb_data border" cellpadding="10" border="1">

                </table>
                <table width="100%" class="kop-prodi">
                    <tbody>
                        <tr class="noborder" align="center">
                            <td rowspan="4" width="140" style="text-align:center"><img style="width: auto;height:65px;" src="http://localhost/penyewaan/assets/home/img/logo.png" height="110"></td>
                            <td>
                                <h2>PT. ESTU TRANSINDO</h2>
                            </td>
                        </tr>
                        <tr class="noborder" align="center">
                            <td colspan="2">
                                Kp.Gebang RT.010 RW.006, No 13 Tambun Utara, 17510
                            </td>
                        </tr>
                        <tr class="noborder" align="center">
                            <td colspan="2">
                                Telp. 0815-3283-9980
                            </td>
                        </tr>
                        <tr class="noborder" align="center">
                            <td colspan="2">Email : estutransindo@gmail.com</td>
                        </tr>
                        <tr class="noborder" align="center">
                            <td colspan="4" align="right">
                                <hr style="border-bottom:double">
                                <!-- <font size="2">Pengaman Dokumen : <font size="4">4fdd0ab3750025d5aeca3f45ea806356</font>
                                </font> -->
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table width="800px">
                    <tbody>
                        <tr>
                            <td colspan="4" align="center">
                                <font size="4" style="border-bottom:3px solid black;"><strong>SURAT JALAN
                                    </strong></font>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table width="780" cellpadding="0" style="text-transform:uppercase;font-size:14px;">
                    <tbody>
                        <tr>
                            <td width="10%"></td>
                            <td>
                                <font size="2"><strong>No Transaksi</strong></font>
                            </td>
                            <td>
                                <font size="-1">: <?= $detail_customer['id_transaction'] ?></font>
                            </td>
                        </tr>
                        <tr>
                            <td width="10%"></td>
                            <td>
                                <font size="2"><strong>Nama Pelanggan</strong></font>
                            </td>
                            <td>
                                <font size="2">: <?= $detail_customer['full_name'] ?></font>
                            </td>
                        </tr>
                        <tr>
                            <td width="10%"></td>
                            <td>
                                <font size="2"><strong>Tanggal</strong></font>
                            </td>
                            <td>
                                <font size="2">: <?= date('d F Y',strtotime($detail_customer['transaction_date'])) ?></font>
                            </td>
                        </tr>
                        <tr>
                            <td width="10%"></td>
                            <td>
                                <font size="2"><strong>Alamat</strong></font>
                            </td>
                            <td>
                                <font size="-1">: <?= $detail_customer['destination'] ?></font>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
               
                </div>

                <p align="left">Dengan Hormat, <br> Bersamaan surat ini kami mengirimkan barang, dengan rincian barang yang kami kirimkan sebagai berikut:</p>
                <table width="800px" border="1" bordercolor="black" cellspacing="0" cellpadding="1" style="border-collapse:collapse;">
                    <tbody>
                        <tr align="center" height="10">
                            <td><b>No</b></td>
                            <td><b>Nama Barang</b><br></td>
                            <td><b>Jumlah</b></td>
                            <td><b>Berat (Kg)</b></td>
                        </tr>
                        <?php $i=1; foreach($data_barang as $row){ ?>
                        <tr valign="top" class="AlternateBG" style="font-size:8pt">
                            <td align="center"><?= $i++ ?></td>
                            <td align="center"><?= $row['goods_name'] ?></td>
                            <td align="center"><?= $row['qty'] ?></td>
                            <td align="center"><?= $row['weight'] ?></td>   
                        </tr>
                        <?php } ?>



                    </tbody>
                </table>
                <table style="margin-top: 30px;" width="100%">
                    <tbody>
                        <tr>
                            <td width="70%">&nbsp;</td>
                            <td>
                                Jakarta, <?= date('d F Y') ?><br>
                                Disahkan Oleh : <br>
                                Kepala Bagian Keuangan
                                <br><br><br><br>
                                <u>Rika Wulandari</u><br>
                                
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div style="page-break-after:always"></div>








            </div>
        </div>

        <!-- tambahan -->
       

    </div>
    <script>
        window.print();
    </script>
</body>

</html>