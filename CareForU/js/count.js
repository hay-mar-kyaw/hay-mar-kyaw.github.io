function count(){
    let itemString=localStorage.getItem('medistore');
    if(itemString){
        let itemArray=JSON.parse(itemString);
        
       if(itemArray!=0){
        let count=itemArray.length;
         //   let count=0;
           // $each(itemArray,function(i,v){
             //   count+=v.qty;
            //});
            $('#count_number').text(count);
        }
        
    }
}