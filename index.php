<!DOCTYPE html>
<html>
<head>
 <title></title>
 <style>
  *{margin: 0; padding: 0; box-sizing: border-box;}
  section{ width: 100%; background: cyan;
}

  section div{
   /*width: 30%;*/
   flex-basis: 30%;
   padding: 20px;
   border:1px solid black;

  }

  .flexone{
   /*flex:1;*/
   background: red;
  }

  .flextwo{
   /*flex:2;*/
   background: yellow;}

  .flexthree{
   /*flex:2;*/
   background: green;} 

  @media(min-width: 768px){
   section{
    display: flex;
    justify-content: space-between;
    
   }
  }

 </style>
</head>
<body>

<section>
 
 <div class="flexone"> DONATION FOR SUPPORT:    PhonePay = vinodbahadur@ybl      GooglePay: vbthapa55@oksbi
 Believe me all this money will be used to make more quality videos and to make my channel grow. So that I can always provide you awesome free videos :) </div>

 <div class="flextwo"> Lorems ipsum dolor sit amet, </div>

 <div class="flexthree"> Three  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 tempor incididunt ut labore et dolore magna aliqua. </div>
</section>

</body>
</html>