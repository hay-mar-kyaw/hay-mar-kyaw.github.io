function getData(){
    let itemStr=localStorage.getItem('medistore');
    if(itemStr){
        let itemArr=JSON.parse(itemStr);
        let data='';
        let j=1;
        let total=0;
        $.each(itemArr,function (i,v) {
            data+=`<tr>
                    <td>${j++}</td>
                    <td>${v.item_name}</td>
                    <td>${v.item_price}</td>
                    <td><button class="btn btn-outline-secondary min" data-item_i=${i}>-</button>${v.qty}<button class="btn btn-outline-secondary max" data-item_i=${i}>+</button></td>
                    <td>${v.item_price*v.qty}</td>
                </tr>    `
                total+=v.item_price*v.qty;
          });
          data+=`<td colspan="4">Total</td>
                <td>${total}</td>`
          $('#data_body').html(data);
    }else{
        let data='';
        $('#data_body').html(data);
    }
    count ();

}