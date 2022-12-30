$(document).ready(function () {
   
    $('.invisible_content').hide();
    $('.card').on('click','#read_btn',function(){
        let moreLessButton=$('.invisible_content').is(':visible')?'Read More':'Read Less';
        $(this).text(moreLessButton);
        $(this).parent('.card').find('.invisible_content').toggle();
        $(this).parent('.card').find('.visible_content').toggle();

    })
    $('.article_slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
                arrows :false,
            }
        },{
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                arrows :false,
            }
        },
        
        {
            breakpoint: 520,
            settings: {
                slidesToShow: 1,
                arrows :false,
            }
        }]
    });
    /*changing image*/
$('.change_image1').click(function(){
  $('.change_image').attr('src',this.src);
})    
 
    getData();
  count();
  $('.addToCart').click(function(){
    let id=$(this).data('item_id');
    let name=$(this).data('item_name');
    let price=$(this).data('item_price');
    
    let items={
      item_id:id,
      item_name:name,
      item_price:price,
      qty:1,
    };

    let itemString=localStorage.getItem('medistore');
    let itemArray;
    if(itemString==null){
      itemArray=[];
    }else{
      itemArray=JSON.parse(itemString);
    }
    let status=false;
    $.each(itemArray,function (i,v) {
      if(id==v.item_id){
        status=true;
        v.qty++;
      }
      })
      if(status==false){
        itemArray.push(items);
      }

      let itemData=JSON.stringify(itemArray);
      localStorage.setItem('medistore',itemData);

      getData();
      count();
});


});