function addProduct(base_url){
    document.getElementById('modal_title').innerHTML = "Form Tambah Produk";
    document.getElementById('form').action = base_url + 'product/addProduct';
    document.getElementById('nama_produk').value = "";
    document.getElementById('harga_produk').value = "";
    document.getElementById('brand').value = "";
    document.getElementById('ukuran').value = "";
    document.getElementById('warna').value = "";
    document.getElementById('kategori').value = "";
    document.getElementById('id_product').value = "";
    document.getElementById('label_foto').innerHTML = ""
}

function updateProduct(base_url,nama_produk,harga,ukuran,warna,brand,kategori,foto,id){
    $.ajax({
        type        : "GET",
        url         : base_url + 'product/readDataById/' + id,
        dataType    : "html",
        success     : function(response){
           var data = JSON.parse(response);
           document.getElementById("deskripsi").value = data.deskripsi;
        }
    });
    document.getElementById('modal_title').innerHTML = "Form Update Produk";
    document.getElementById('form').action = base_url + 'product/updateProduct';
    document.getElementById('nama_produk').value = nama_produk;
    document.getElementById('harga_produk').value = harga;
    document.getElementById('brand').value = brand;
    document.getElementById('ukuran').value = ukuran;
    document.getElementById('warna').value = warna;
    document.getElementById('kategori').value = kategori;
    document.getElementById('id_product').value = id;
    document.getElementById('label_foto').innerHTML = foto



}