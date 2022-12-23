$(document).ready(function(){
 
    $('.customer-logos').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 3
            }
        },{
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        },
        
        {
            breakpoint: 520,
            settings: {
                slidesToShow: 1
            }
        }]
    });
    
    /*Slick Slider*/
$('.trendSlider').slick({
    arrows:true,
    dots:true,
    autoplay:true,
    autoplaySpeed:1500,
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 4,
    slidesToScroll:1,
    arrows:true,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 4
        }
      },
      {
        breakpoint: 768,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 520,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '25px',
          slidesToShow: 1
        }
      }
    ]
  });
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

    let itemString=localStorage.getItem('shop');
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
      localStorage.setItem('shop',itemData);

      getData();
      count();
});

/*changing image*/
$('.change_image1').click(function(){
  $('.change_image').attr('src',this.src);
})
});

