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
             tr{
                            background:#222429 ;
                        
                        }
           table,td,tr
            {
                text-align: center;
                
                border:2px solid rgba(200,200,200,0.1);
                border-collapse: collapse;
                height: 35px;
                width: 300px;
            }
            #arrow{
                border: 1px solid white;
            }
            header{
        		width: 100%;background-color:#2D3E52;

        	}
                p{display: inline;}
            #p_1
        	{
        		margin: 5px;padding: 10px;color: white;font-size: 35px;
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
                  <p style=" font-size: 30px">CMR INSTITUTE OF TECHNOLOGY</p>
                  <span ><a style="text-decoration: none;font-size: 40px;padding-right: 1%;color:#F9D209;float: right;cursor:pointer"  href='mainpage.php' class="fa fa-chevron-circle-left "></a></span>
                    
                </div>
             </div>
     </section>

    </header>
          <div class="hey">
    <div align='center' class="col-md-12 col-sm-12">
                    
      <h3 style="color:grey ">Hash-Table Implementation</h3>
    </div>
          </div>
        <div  >
                <div style="padding-right: 5% ;float:right;color:#FDFDFD" class="col-md-5 col-sm-12">
                         <div  class="wow fadeInRight about-image" data-wow-delay="0.6s">
                             
                             <div >
            <table>
              <tr>
                <td>
                  0
                </td><td id="0"></td>
              </tr>
              <tr>
                <td>
                  1
                </td>
                <td id="1"></td>
              </tr>
              <tr>
                <td>
                  2
                </td>
                <td id="2"></td>
              </tr>
              <tr>
                <td>
                  3
                </td><td id="3"></td>
              </tr>
              <tr>
                <td>
                  4
                </td><td id="4"></td>
              </tr>
              <tr>
                <td>
                  5
                </td><td id="5"></td>
              </tr>
              <tr>
                <td>
                  6
                </td><td id="6"></td>
              </tr>
              <tr>
                <td>
                7
                </td><td id="7"></td>
              </tr>
              <tr>
                <td>
                 8 
                </td><td id="8"></td>
              </tr>
              <tr>
                <td>
                  9
                </td><td id="9"></td>
              </tr>
              
            </table>
            
        </div>
      
                         </div>
                    </div>
        
        <div style="width:25%;float:right" data-wow-delay="0.4s"class="wow fadeInDown form-style-agile" >
            <input  type="submit" value="Insert" onclick="hash_it()">
            <br><br>
            <input type="submit" value="Clear" onclick="clear_it()">
        </div>

        
    </div>
        
        <script type="text/javascript">
            var count=0;
            function clear_it()
            { count=0;
                
                for(var i=0;i<10;i++)
                      {
                          
                         document.getElementById(i).innerHTML="";
                         
                      }
            }
          
          function hash_it()
          {
            count++;
            if(count>10)
            {
              alert("HASH TABLE FULL")
              
            }
            else
            {   
                var val1=prompt("Enter the ID");
                if(isNaN(val1))
                {
                  alert("PLEASE ENTER A NUMBER ONLT!")
                }
                else
                {

                    var rem=val1%10;
                    var val2=val1;
                    if(document.getElementById(rem).innerHTML=="")
                    {
                      document.getElementById(rem).innerHTML=val1;
                      
                    }
                    else
                    {

                      for(var i=0;i<10;i++)
                      {
                        val1++;
                        var r=val1%10;
                        if(document.getElementById(r).innerHTML=="")
                          {
                            document.getElementById(r).innerHTML=val2; break;

                          }
                      }
                    }
                  }
           }
            

     }


        </script>

         <script>
         /* Set the width of the side navigation to 250px */
       function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
           
       }

       /* Set the width of the side navigation to 0 */
       function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
          
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







