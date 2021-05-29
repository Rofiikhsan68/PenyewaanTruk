function detailpesanan(id_transaction,base_url){
    clearTable();
    $.ajax({
        url     : base_url + 'penyewaan/getDetailTransaction/'+id_transaction,
        type    : 'GET',
        dataType : 'html',
        success : function(response){
            var data = JSON.parse(response);
            var plus = 1;
            var total = 0;
            var downPayment = data[0].down_payment;
            var remainingPayment = data[0].remaining_payment;
            console.log(remainingPayment);
            for(var i = 0;i< data.length; i++){
                var tr = $('<tr>');
                tr.append('<td>' + plus++ + '</td>');
                tr.append('<td>' + data[i].product_name + '</td>');
                tr.append('<td> Rp ' + data[i].price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + '</td>');
                tr.append('<td>' + data[i].qty + '</td>');
                tr.append('<td> Rp ' + (data[i].qty * data[i].price).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + '</td>');
                $('#table-data tbody').append(tr);
                total += data[i].qty * data[i].price;
                document.getElementById('sub_total').innerHTML = "Rp "+ total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            }
            document.getElementById('down_payment').innerHTML = "Rp " + downPayment.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            document.getElementById('remaining_payment').innerHTML = "Rp " + remainingPayment.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }
    })
}

function clearTable(){
    $("#table-data tbody").empty();
}