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
  
            figure{
                
                display: inline;
            }
            
            table,td,tr
            {
                border:1.2px solid black;
                border-collapse: collapse;
                
                width: 500px;
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
           
            
            
            .sub-main-w3 #pat {
    max-width: 30%;
    
    background: rgba(42,62,82,0.8);
    padding: 2%;
    box-sizing: border-box;
    
    
   
    justify-content: center;
    
    box-shadow: 0px 0px 13px 1px rgba(0, 0, 0, 0.22);
}
        
                </style>
    </head>
    
    <body>
        
        <header class="navbar custom-navbar navbar-fixed-top" role="navigation" >
        	
        <section >
          <div class="container ">

                
              <div id="p_1" align="center"  class="col-md-12 col-sm-12">
                   <p style="display: inline; font-size: 30px">CMR INSTITUTE OF TECHNOLOGY</p>
                   <span ><a style="text-decoration: none;font-size: 40px;padding-right: 1%;color:#F9D209;float: right;cursor:pointer"  href='mainpage.php' class="fa fa-chevron-circle-left "></a></span>
                    
                </div>
             
              <!--
              nav bar-->
              

          </div>
     </section>

    </header>
          <div class="hey">
        <div style="padding-top:10%" align='center' class="col-md-12 col-sm-12">
                    
      <h3 style="color:grey ">Pattern Matching and Replacement</h3>
    </div>
          </div>
        <section  data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    
                    
<div class="sub-main-w3"  align="left" style="padding: 5% ">
    <div  class="wow fadeInRight hello" data-wow-delay="0.6s">
        
    
        <div  id='pat' style="background: #2D3E52;float:right;" class="form-style-agile">
            
            <p style="color:white;">
The idea is to traverse the original 
string and count the number 
of times old word occurs in the string. Now make a new string of sufficient size 
so that new word can be replaced. 

Now copy original string to new string 
with replacement of word.
            </p>
        </div>
        <div id='pat' style="background: #2D3E52;float:right" class="form-style-agile">
            <h2 style="color:#F9D209;">
                Example
            </h2>

<p style="color:white;">Input : str[] = "cmrithellocmrit", </p>
<p style="color:white;">        oldW[] = "cmrit", </p>
<p style="color:white;">        newW[] = "world"</p>
<p style="color:white;">Output :
            
"worldhelloworld"
</p>
<p></p>

    </div>
    </div>
    
    <div class="wow fadeInLeft" id='pat' data-wow-delay="0.6s">
        <div align="center">
                    <h2 >Pattern Match
				
			</h2>
                    
                </div>
			
			<div class="form-style-agile">
				
				<input placeholder="String"  id='STRING' type="textbox" name="STRING" required="">
			</div>
                        <div class="form-style-agile">
				
				<input placeholder="Pattern" id='PATTERN' type="textbox" name="PATTERN" required="">
			</div>
                       <div align="center" class="form-style-agile" >
                            <input type="submit" onclick="fun1()" value="Match">
		
                        </div><div class="form-style-agile">
				
				<input placeholder="Replace"  id='REPLACE' type="textbox" name="PATTERN" required="">
			</div>
                        <div align="center" class="form-style-agile" >
                            <input type="submit" onclick="fun2()" name="btn-register" value="Replace">
		
                        </div>
                        
    </div>
                
	</div>
	
                </div>
                
            </div>
            
        </section>
       
        <section style="background:#f5f5f5"  data-stellar-background-ratio="0.5">
          <div class="container">
               <div style="padding:5%" class="row">
                   
                    <div class="col-md-5 col-sm-12">
                         <div class="about-info">
                              <div align="center" class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h2 style="font-weight: bold;color: #424242">Representation</h2>
                              </div>
                             <br>
                                <div align="center" class="col-md-5 col-sm-12">
                                    <div  class="wow fadeInUp about-image" data-wow-delay="0.6s">
                                            
                                            <img style="padding: 1%" height="60%" width="37%" src="images/matched.gif" class="img-responsive" alt="">
                                            
                                            <img style="padding: 1%" height="60%" width="37%"  src="images/not_matched.gif" class="img-responsive" alt="">
                                            
                                    </div>
                                 
                                </div>
                         </div>
                    </div>

                    
                    
               </div>
          </div>
     </section>
        
        
       <script>
         /* Set the width of the side navigation to 250px */
         
         function fun1()
         {
            var d1=document.getElementById("STRING").value;
            var d2=document.getElementById("PATTERN").value;
           if(d1==""|d2=="")
           {
               alert("INVALID");
           }
          else
          {
              var n = d1.search(d2);
            if(n==-1)
            {
                alert("PATTERN NOT FOUND!")
            }
            else
            {
                alert("PATTERN MATCHED !! ")

            }
              
          }
            
            
         }
         
         function fun2()
         {
             var d1=document.getElementById("STRING").value;
            var d2=document.getElementById("PATTERN").value;
           
           if(d1==""|d2=="")
           {
               alert("INVALID");
           }
           else{
               d2 = new RegExp(d2, "g");
               
               var d3=document.getElementById("REPLACE").value;
            var d4=d1.replace(d2,d3);
            alert("String after replacement: "+d4)
            
               
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






