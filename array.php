<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Experiment 1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/round_menu.css"/>
        <link rel="stylesheet" href="css/animate.css"/>
        
        <style>
            .navbar-fixed-top
            {position:fixed;z-index:1030}
  
         
            table,td,tr
            {
                border:1.2px solid black;
                border-collapse: collapse;
                
                
            }
            td{
                width: 18.5%;
            }
            
            

            header{
        		width: 100%;background-color:#2D3E52;

        	}
               
            #p_1
        	{
        		padding: 10px;color: white;font-size: 35px;
        		font-family: Verdana;font-weight: lighter;
        	}
            h2,h3{
               display: inline;font-weight:lighter;
               
               font-family: 'verdana';
               color:white}
       
        </style>
    </head>
    
    <body>
        
        <header class="navbar custom-navbar navbar-fixed-top" role="navigation">
        	
        <section >
          <div class="container ">

                
              <div id="p_1" align="center"  class="col-md-12 col-sm-12">
                  <p style=" display: inline;font-size: 30px">CMR INSTITUTE OF TECHNOLOGY</p>
                  <span ><a style="text-decoration: none;font-size: 40px;padding-right: 1%;color:#F9D209;float: right;cursor:pointer"  href='mainpage.php' class="fa fa-chevron-circle-left "></a></span>
                    
                </div>
             
     </section>

    </header>
          <div class="hey">
        <div style="padding-top:10%" align='center' class="col-md-12 col-sm-12">
                    
      <h3 style="color:grey ">Array Implementation</h3>
    </div>
          </div>
            <br><br>
            
    <section data-stellar-background-ratio="0.5">
                <div style="padding-left:3%" class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h2 style="font-weight: bold;color: #424242">Representation</h2>
                              </div>

                
                <div class="wow fadeInUp " data-wow-delay="0.5s" style="padding:50px;">
                
                
                <table  align="center">
          <tr rowspan="2" style="height: 70px;text-align:center;">
            <td id="1"></td>
            <td id="2"></td>
            <td id="3"></td>
            <td id="4"></td>
            <td id="5"></td>
            <td rowspan="2">Array</td>

          </tr>
          <tr style="height: 20px;text-align:center;">
            
            <td >1</td>
            <td >2</td>
            <td >3</td>
            <td >4</td>
            <td >5</td>

          </tr>
          <tr >
              <td style="text-align:center;"colspan="5">Position</td>
          </tr>
        </table>
        
            <div class="wow fadeInDown form-style-agile" style="padding-top:5%;" align="center">
          
                <input style="width:15%" onClick="insert()" type="submit" value='Insert'>
            
            <input style="width:15%" onClick="delete_element()" type="submit" value='Delete' >
               </div>
             </div>
            
             </section>
            
            
            <section style="background:#f5f5f5"  data-stellar-background-ratio="0.5">
          <div class="container">
               <div style="padding:5%" class="row">
                   
                    <div class="col-md-5 col-sm-12">
                         <div class="about-info">
                             <div  class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h2 style="font-weight: bold;color: #424242">Basic Operations</h2>
                              </div>

                             <div  class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>An array is a collection of items stored at contiguous
                                       memory locations. The idea is to store multiple items of the same type together.
                                       This makes it easier to calculate the position of each element by 
                                       simply adding an offset to a base value, i.e., the memory location of 
                                       the first element of the array 
                                       (generally denoted by the name of the array).</p>
                                  </div>
                             <div align="center" class="col-md-5 col-sm-12">
                                    <div  class="wow fadeInUp about-image" data-wow-delay="0.6s">
                                        <img style="padding: 2%" height="30%" width="40%" src="images/insert_array.gif" class="img-responsive" alt="">
                                        <img style="padding: 2%;" height="30%" width="40%" src="images/delete_array.gif" class="img-responsive" alt="">
                                        </div>
                                 
                               </div>
                         </div>
                    </div>

                    
                    
               </div>
          </div>
     </section>
        
            
            
       
     
    <script type="text/javascript">
      
      function insert()
      {

        var item=prompt("Enter the Element");
        
        if(item!="" && (typeof item!="object"))
        {
            var position =prompt("Enter Position");
        }
        
        if (position>5)
        {
          alert("Array Size Exceeded")
        }
        else
        {
          var d=document.getElementById(position);
          d.innerHTML=item;
          d.setAttribute('style','background-color:skyblue');
          
        }
        

      }

       function delete_element()
      {
        
        var position1 =prompt("Enter Position")
        
        if((position1>5 || position1<1)&&(typeof position1 !="object"))
        {
          alert("Invalid Position");

        }
        else

        {
          var d1=document.getElementById(position1)
          console.log(typeof d1.value)
          if(typeof d1.value =="object")
          {
              alert("Nothing To Delete")
          }
          
        d1.innerHTML=" ";
            d1.setAttribute('style','background-color:white');
            
        }

        
      }


    </script>
      <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

     
    </body>
</html>





