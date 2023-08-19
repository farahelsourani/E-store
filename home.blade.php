<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<style>

    body{
        background-color: rgb(243, 238, 238);
      
    }

  .header1{
    background-image: linear-gradient(to right, #60bc57 , #0aa2c9 );
    height: 55px;
    margin-bottom: 0px;
    
   
  }

  .header1 input{
    border-radius: 10px;
    border: none;
    font-family:"be school"; 
    margin-left: 200px;
    
    margin-top: 15px;
    padding-left: 140px;
   
  }

  @font-face {
  font-family: "be school";
  src: url(SST-Arabic-Roman.ttf);
}

  .profile{
    background-image: linear-gradient(to right, #60bc57 , #0aa2c9 );
    border: none;
    color: white;
    
    border-radius: 10px;
    height: 30px;
    margin-left: 10px;
    
    margin-top: 10px;
    font-family:"be school"; 

  }

  .lang{
   
    margin-top: 10px;
    border-radius: 10px;
    background-image: linear-gradient(to right, #60bc57 , #0aa2c9 );
    border: none;
    color: white;
    margin-left: 250px;
    margin-top: 10px;

  }


  .logo{
    height: 40px;
    width: 80px;
    margin-left: 220px;
   margin-bottom: 5px;
  }

  .header2{
    display: inline;
    background-color:white;
    height: 10px;
    width: 900px;
    justify-content: center;
    text-align: center;
    

    
  
   
  }

  .groups{
    text-align: right;
    margin-top: 10px;
    background-color: white;
    border: none;
    margin-left: 10px;
    font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, #60bc57 , #0aa2c9 );
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;

  font-size: larger;
  font-family:"be school"; 

  
    

  }

  .onlinechat{
    justify-content: center;
    margin-top: 5px;
    border: none;
   background-color: white;
    font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, #60bc57 , #0aa2c9 );
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            font-family: "be school";

  
    
  }


  .suggestions{
    display: inline;
    font-family: "be school";
  }

  .col button{
    border: none;
    background-image: linear-gradient(to right, #60bc57 , #0aa2c9 );
   border-radius: 10px;
    color: white;
  }

  .offers{
    margin-top: 40px;
    background-color: black;
    height: 350px;
    width: 1000px;
  }


  .offer{
    width: 300px;
    height: 300px;
  }

  .about{
    background-color: white;
  }

  .checked {
  color: orange;
}

.footer{
    background-image: linear-gradient(to right, #60bc57 , #0aa2c9 );
    margin-bottom: 0px;
    padding-bottom: 0px;
    display: flex;
    justify-content: space-between;
   
    

}

.content{
  margin-left: 250px;
  margin-right: 250px;
}

.actions{
  font-family:"be school"; 
  
}

.ads{
  margin-top: 20px;
}


.products{
  font-family:"be school"; 
  font-size: larger;

}

.alloffer{
  font-family:"be school"; 
}

.add1{
  font-family:"be school"; 
}

.about{
  font-family:"be school"; 
}

.most-paid , .most-shown{
  font-family:"be school";
}

.feedback{
  font-family:"be school";
}

.before-footer , .footer{
  font-family:"be school";
}










 

  



 
</style>

<body>

  <div class="header1">
  <button class="lang"> EN 🌐</button>
  <select class="profile" ;>
    <option value="profile">حسابي 👤</option>
   </select>
  <input type="text" placeholder="... ما الذي تبحث عنه  🔍" >
  <img src="{{asset('images/logo.png')}}" alt="" class="logo">
  
  </div>

    <div class="header2">
        <div class="actions " style="background-color: white;  height: 50px;">
        <button style="color: black; border: none; background-color: white;" > اجهزة لوحية و كمبيوتر</button>
        <button style="color: black; border: none; background-color: white;"> ساعات ذكية</button>
        <button style="color: black; border: none; background-color: white;"> الإكسسوارات</button>
        <button style="color: black; border: none; background-color: white;"> تسلية</button>
        <button style="color: black; border: none; background-color: white;"> علامات تجارية</button>
        <button style="color: black; border: none; background-color: white;"> الموبايلات</button>

        <select class="groups" name="groups" onchange="handleSelection()">
            <option value="all">جميع الفئات</option>
            <option value="one">الفئة الاولى</option>
            <option value="two">الفئة الثانية</option>
            <option value="three">الفئة الثالثة</option>
        </select>

      </div>
    </div>
  

  <div class="content">

    <div class="ads text-center">
        <div class="row row-cols-2">
          <div class="col"><img src="{{asset('images/imagination.jpg')}}" alt="" style="border-radius: 15px; margin-bottom: 15px; width: 500px; height: 150px;" > <img src="{{asset('images/realgame.jpg')}}" alt="" style="border-radius: 15px; width: 500px; height: 150px;" ></div>
          <div class="col"><img src="{{asset('images/samsungwatch.jpg')}}" alt="" style="border-radius: 15px; margin-left: 5px; width: 450px; height: 315px;"></div>
        </div>
      </div>

      <button class="onlinechat" style=" border-radius: 10px; margin-left: 850px; background-color: white;">اونلاين شات 📱</button>

      <br><br>
   <div class="suggestions">
    <button style="border: none; padding-left: 0px;">➡️ عرض الجميع </button>
    <label for="" style="font-size: larger;  margin-left: 800px;">مُقترحة لك </label>
    <div class="container text-center" style="margin-top: 20px;">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-6">
          
          <div class="col" style="border-radius: 10px; padding: 5px;"> <div style="background-color: white; border-radius: 10px;"> <img src="{{asset('images/scooter.png')}}" alt="" style="height: 150px; width: 150px;" > <label for=""> ₪ 1600.00 </label> <button style="height: 30px; width: 140px; margin-bottom: 10px;">  👜أضف الى السلة </button> </div></div>
          
        
          <div class="col" style="border-radius: 10px; padding: 5px;"> <div style="background-color: white; border-radius: 10px;"> <img src="{{asset('images/scooter.png')}}" alt="" style="height: 150px; width: 150px;" > <label for=""> ₪ 1600.00 </label> <button style="height: 30px; width: 140px; margin-bottom: 10px;">  👜أضف الى السلة </button> </div></div>
        
          
          <div class="col" style="border-radius: 10px; padding: 5px;"> <div style="background-color: white; border-radius: 10px;"> <img src="{{asset('images/scooter.png')}}" alt="" style="height: 150px; width: 150px;" > <label for=""> ₪ 1600.00 </label> <button style="height: 30px; width: 140px; margin-bottom: 10px;">  👜أضف الى السلة </button> </div></div>
         
          <div class="col" style="border-radius: 10px; padding: 5px;"> <div style="background-color: white; border-radius: 10px;"> <img src="{{asset('images/scooter.png')}}" alt="" style="height: 150px; width: 150px;" > <label for=""> ₪ 1600.00 </label> <button style="height: 30px; width: 140px; margin-bottom: 10px;">  👜أضف الى السلة </button> </div></div>
          <div class="col" style="border-radius: 10px; padding: 5px;"> <div style="background-color: white; border-radius: 10px;"> <img src="{{asset('images/scooter.png')}}" alt="" style="height: 150px; width: 150px;" > <label for=""> ₪ 1600.00 </label> <button style="height: 30px; width: 140px; margin-bottom: 10px;">  👜أضف الى السلة </button> </div></div>
          <div class="sold" style="border-radius: 10px; padding: 5px;"> <div style="background-color: white; border-radius: 10px;"><img src="{{asset('images/iphone.png')}}" alt="" style="height: 150px; width: 150px;" > <label for=""> ₪ 1600.00 </label> <button style="height: 30px; width: 140px; margin-bottom: 10px; background-color: rgb(218, 216, 216); border-radius: 10px; border: none; " class="soldd">  انتهى من المخزن</button></div>
        </div>
      </div>
   </div>


    <div class="products text-center" style="padding-top:40px ;">
        <div class="row" >
          <div class="col" >
            <img src="{{asset('images/smartwatches.jpg')}}" alt="" style="border-radius: 10px; " > <label for="" style="font-size: large; "> منتجات اصلية<br><button style="font-size: small; font-family: Arial, Helvetica, sans-serif;
              background: linear-gradient(to right, #60bc57 , #0aa2c9 );
              -webkit-text-fill-color: transparent;
              -webkit-background-clip: text; "> عرض الجميع </button> </label> 
          </div>
          <div class="col">
            <img src="{{asset('images/enjoy.jpg')}}" alt=""  > <label for="" style="font-size: large; "> تسلية وترفيه <br><button style="font-size: small; font-family: Arial, Helvetica, sans-serif;
              background: linear-gradient(to right, #60bc57 , #0aa2c9 );
              -webkit-text-fill-color: transparent;
              -webkit-background-clip: text; "> عرض الجميع  </button></label>
          </div>
          <div class="col">
            <img src="{{asset('images/phones.jpg')}}" alt="" >  <label for="" style="font-size: large; "> الاجهزة الخلوية<br><button style="font-size: small; font-family: Arial, Helvetica, sans-serif;
              background: linear-gradient(to right, #60bc57 , #0aa2c9 );
              -webkit-text-fill-color: transparent;
              -webkit-background-clip: text; "> عرض الجميع  </button></label>
          </div>
        </div>
      </div>

      <div class="offers text-center">
        <div class="row">
          <div class="col" style=" border-radius: 10px; margin-top: 65px;"><img src="{{asset('images/scooter.png')}}" alt="" style="height: 150px; width: 150px; border-radius: 10px;" > <label for="" style="color: white;"> ₪ 1600.00 </label> <button style="height: 30px; width: 150px;" class="add1">  👜أضف الى السلة </button></div>
          <div class="col" style=" border-radius: 10px; margin-top: 65px;"><img src="{{asset('images/scooter.png')}}" alt="" style="height: 150px; width: 150px; border-radius: 10px;" > <label for="" style="color: white;" > ₪ 1600.00 </label> <button style="height: 30px; width: 150px;" class="add1">  👜أضف الى السلة </button></div>
          <div class="col" style=" border-radius: 10px; margin-top: 65px;"><img src="{{asset('images/scooter.png')}}" alt="" style="height: 150px; width: 150px; border-radius: 10px;" > <label for="" style="color: white;"> ₪ 1600.00 </label> <button style="height: 30px; width: 150px;"class="add1">  👜أضف الى السلة </button></div>

        <img src=" {{asset('images/banner.png')}}" alt="" class="offer"><button class="alloffer" style=" margin-left: 750px; width: 250px; text-align: center; border: none;
        background-image: linear-gradient(to right, #60bc57 , #0aa2c9 );
       border-radius: 10px;
        color: white; margin-top: 10px; margin-bottom: 10px;">عرض جميع العروض</button>
      </div>
        

      


   <div class="about" style="" >
    <div class="row" style="padding-bottom: 60px;">
        <div class="col"><img src="{{asset('images/feature_original.png')}}" alt="" style="height: 70px; width: 70px; margin-top: 70px;"> <br><label for="">منتجات اصلية</label><br> <button style="font-size: small; font-family: Arial, Helvetica, sans-serif;
          background: linear-gradient(to right, #60bc57 , #0aa2c9 );
          -webkit-text-fill-color: transparent;
          -webkit-background-clip: text; "> تفاصيل اكثر  </button></div>
  <div class="col"><img src="{{asset('images/feature_ship.png')}}" alt="" style="height: 70px; width: 70px; margin-top: 70px;" > <br> <label for="">توصيل مجاني </label> <br> <button style="font-size: small; font-family: Arial, Helvetica, sans-serif;
    background: linear-gradient(to right, #60bc57 , #0aa2c9 );
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text; "> تفاصيل اكثر  </button></div>
  <div class="col"><img src="{{asset('images/feature_grantee.png')}}" alt="" style="height: 70px; width: 70px; margin-top: 70px;" > <br> <label for="">كفالة سنوية</label> <br> <button style="font-size: small; font-family: Arial, Helvetica, sans-serif;
    background: linear-gradient(to right, #60bc57 , #0aa2c9 );
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text; "> تفاصيل اكثر  </button></div>
  <div class="col"><img src="{{asset('images/feature_safe.png')}}" alt="" style="height: 70px; width: 70px; margin-top: 70px;" > <br><label for="">طرق دفع أمنة</label> <br> <button style="font-size: small; font-family: Arial, Helvetica, sans-serif;
    background: linear-gradient(to right, #60bc57 , #0aa2c9 );
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text; "> تفاصيل اكثر  </button></div>

  <div class="col" >
<h5 style="margin-top: 60px; padding-right: 30px; ">متجر جوال الاكتروني</h5>
<p style="color: gray; padding-right: 30px;"> منصة تسوق الكتروني رائدة محليا   توفر مجموعة متنوعة من المنتجات  للتسوق بسهولة و امان</p>
  </div>
    </div>
   </div>

   <div class="most-paid" style="padding-top: 50px;">
    <button style="border: none;">➡️ عرض الجميع </button>
    <label for="" style="font-size: larger;  margin-left: 600px;"> الاكثر مبيعا هذا الاسبوع</label>
        <div class="container text-center" style="margin-top: 20px;">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-6">
            <div class="col" style="border-radius: 10px; padding: 5px;"> <div style="background-color: white; border-radius: 10px;"> <img src="{{asset('images/scooter.png')}}" alt="" style="height: 150px; width: 150px;" > <label for=""> ₪ 1600.00 </label> <button style="height: 30px; width: 140px; margin-bottom: 10px;">  👜أضف الى السلة </button> </div></div>
          
        
          <div class="col" style="border-radius: 10px; padding: 5px;"> <div style="background-color: white; border-radius: 10px;"> <img src="{{asset('images/scooter.png')}}" alt="" style="height: 150px; width: 150px;" > <label for=""> ₪ 1600.00 </label> <button style="height: 30px; width: 140px; margin-bottom: 10px;">  👜أضف الى السلة </button> </div></div>
        
          
          <div class="col" style="border-radius: 10px; padding: 5px;"> <div style="background-color: white; border-radius: 10px;"> <img src="{{asset('images/scooter.png')}}" alt="" style="height: 150px; width: 150px;" > <label for=""> ₪ 1600.00 </label> <button style="height: 30px; width: 140px; margin-bottom: 10px;">  👜أضف الى السلة </button> </div></div>
         
          <div class="col" style="border-radius: 10px; padding: 5px;"> <div style="background-color: white; border-radius: 10px;"> <img src="{{asset('images/scooter.png')}}" alt="" style="height: 150px; width: 150px;" > <label for=""> ₪ 1600.00 </label> <button style="height: 30px; width: 140px; margin-bottom: 10px;">  👜أضف الى السلة </button> </div></div>
          <div class="col" style="border-radius: 10px; padding: 5px;"> <div style="background-color: white; border-radius: 10px;"> <img src="{{asset('images/scooter.png')}}" alt="" style="height: 150px; width: 150px;" > <label for=""> ₪ 1600.00 </label> <button style="height: 30px; width: 140px; margin-bottom: 10px;">  👜أضف الى السلة </button> </div></div>
          <div class="sold" style="border-radius: 10px; padding: 5px;"> <div style="background-color: white; border-radius: 10px;"><img src="{{asset('images/iphone.png')}}" alt="" style="height: 150px; width: 150px;" > <label for=""> ₪ 1600.00 </label> <button style="height: 30px; width: 140px; margin-bottom: 10px; background-color: rgb(218, 216, 216); border-radius: 10px; border: none; " class="soldd">  انتهى من المخزن</button></div>
        </div>
            </div>
          </div>
       </div>
  

    <div class="fiber text-center" style="margin-top: 60px;">
            <div class="row">
              <div class="col">
               <img src="{{asset('images/fiber.jpg')}}" alt="" style="width: 450px; height: 200px; border-radius: 10px;">
              </div>
              <div class="col">
                <img src="{{asset('images/sim.jpg')}}" style="width: 450px; height: 200px; border-radius: 10px;">
              </div>
            </div>
      </div>
   

   <div class="most-shown" style="margin-top: 60px;">
    <button style="border: none;">➡️ عرض الجميع </button>
    <label for="" style="font-size: larger;  margin-left: 600px;"> الاكثر مشاهدة</label>
        <div class="container text-center" style="margin-top: 20px;">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-6">
            <div class="col" style="border-radius: 10px; padding: 5px;"> <div style="background-color: white; border-radius: 10px;"> <img src="{{asset('images/scooter.png')}}" alt="" style="height: 150px; width: 150px;" > <label for=""> ₪ 1600.00 </label> <button style="height: 30px; width: 140px; margin-bottom: 10px;">  👜أضف الى السلة </button> </div></div>
          
        
          <div class="col" style="border-radius: 10px; padding: 5px;"> <div style="background-color: white; border-radius: 10px;"> <img src="{{asset('images/scooter.png')}}" alt="" style="height: 150px; width: 150px;" > <label for=""> ₪ 1600.00 </label> <button style="height: 30px; width: 140px; margin-bottom: 10px;">  👜أضف الى السلة </button> </div></div>
        
          
          <div class="col" style="border-radius: 10px; padding: 5px;"> <div style="background-color: white; border-radius: 10px;"> <img src="{{asset('images/scooter.png')}}" alt="" style="height: 150px; width: 150px;" > <label for=""> ₪ 1600.00 </label> <button style="height: 30px; width: 140px; margin-bottom: 10px;">  👜أضف الى السلة </button> </div></div>
         
          <div class="col" style="border-radius: 10px; padding: 5px;"> <div style="background-color: white; border-radius: 10px;"> <img src="{{asset('images/scooter.png')}}" alt="" style="height: 150px; width: 150px;" > <label for=""> ₪ 1600.00 </label> <button style="height: 30px; width: 140px; margin-bottom: 10px;">  👜أضف الى السلة </button> </div></div>
          <div class="col" style="border-radius: 10px; padding: 5px;"> <div style="background-color: white; border-radius: 10px;"> <img src="{{asset('images/scooter.png')}}" alt="" style="height: 150px; width: 150px;" > <label for=""> ₪ 1600.00 </label> <button style="height: 30px; width: 140px; margin-bottom: 10px;">  👜أضف الى السلة </button> </div></div>
          <div class="sold" style="border-radius: 10px; padding: 5px;"> <div style="background-color: white; border-radius: 10px;"><img src="{{asset('images/iphone.png')}}" alt="" style="height: 150px; width: 150px;" > <label for=""> ₪ 1600.00 </label> <button style="height: 30px; width: 140px; margin-bottom: 10px; background-color: rgb(218, 216, 216); border-radius: 10px; border: none; " class="soldd">  انتهى من المخزن</button></div>
        </div>
            </div>
          </div>
   </div>

   <div class="feedback" style="margin-top: 70px; background-color: white;">
    <button style="border: none; background-color: white;">➡️ تصفح افضل العروض</button>
    <label for="" style="font-size: larger;  margin-left: 600px;"> ماذا يقول عملائنا ❤️</label>
    <div class="container text-center" style="margin-top: 50px;">
        <div class="row">
          <div class="col" >
            <img src="{{asset('images/playstation.png')}}" alt="" style="width: 160px; height: 160px;">
            <h6> 👤 Anonymous</h6>
            <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            <p>  منتجات مميزة <br>وجميلة وتوصيل سريع  <br>وسري و مميز و حلو كثير </p> 
          </div>
          <div class="col">
            <img src="{{asset('images/playstation.png')}}" alt="" style="width: 160px; height: 160px;">
            <h6> 👤 Anonymous</h6>
            <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            <p>  منتجات مميزة <br>وجميلة وتوصيل سريع  <br>وسري و مميز و حلو كثير </p> 
          </div>
          <div class="col" >
            <img src="{{asset('images/playstation.png')}}" alt="" style="width: 160px; height: 160px;">
            <h6> 👤 Anonymous</h6>
            <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            <p>  منتجات مميزة <br>وجميلة وتوصيل سريع  <br>وسري و مميز و حلو كثير </p> 
          </div>
        </div>
      </div>
      
   </div>

   <div class="before-footer" style="padding-top: 60px; padding-bottom: 40px;">
   <div class="container text-center">
    <div class="row">
      <div class="col">
        <ul style="list-style-type: none;">
            <li>حقوق المستهلك</li>
            <li>سياسة الخصوصية</li>
            <li>شروط البيع</li>
            <li>شروط الاستخدام</li>
            <li>بع معنا</li>
            <li>سياسة الضمان</li>
          </ul>
      </div>
      <div class="col">
        <h4>متواجدين دائما لمساعدتك</h4>
        <br>
        <h6> تواصل معنا من خلال الايميل </h6>
        <br>
        <h6> ✉️ care@estore.ps</h6>
      </div>
      <div class="col">
        <h4>خليك متابع كل جديد</h4>
        <h6> اشترك في النشرة الاخبارية وما تفوت اي عرض</h6>
        <input type="text" name="" id="" placeholder="ادخل بريدك الالكتروني" style="width: 250px; border-radius: 10px; border: none;">
      <button style="width: 250px; margin-top: 10px;"> اشترك الان</button>
    </div>
    </div>
  </div>
   </div>

   <div class="footer" style="height: 40px; width: 90pxs; margin-bottom: 0px;">
         
            <img src="{{asset('images/poweredBy.png')}}" alt="" style="width: 90px; height: 40px; margin-left: 10px;">
            <p style="color: white; margin-left: 700px; padding-top: 10px;">الحقوق محفوظة ©️ 2022</p>
         
        
      </div>
    </div>




</body>
</html>