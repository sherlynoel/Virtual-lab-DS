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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- pasted-->
        <link rel="stylesheet" href="css/round_menu.css"/>
        <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/style.css"/>
     <title>VIRTUAL LABS</title>

     
     <!-- MAIN CSS -->
     
        <style>
            
            .navbar-fixed-top
            {position:fixed;z-index:1030}
  
            table,td,tr
            {
                border:1.2px solid black;
                border-collapse: collapse;
                height: 70px;
                
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
            header{
        		width: 100%;background-color:#2D3E52;

        	}
                </style>
    </head>
    
    
    
    <body>
       
     
     <!-- MENU -->
     <header class="navbar custom-navbar navbar-fixed-top" role="navigation">
        	
        
          <div class="container ">

                
              <div  id="p_1" align="center"  class="col-md-12 col-sm-12">
                   <p style="display: inline; font-size: 30px">CMR INSTITUTE OF TECHNOLOGY</p>
                   <span ><a style="text-decoration: none;font-size: 40px;padding-right: 1%;color:#F9D209;float: right;cursor:pointer"  href='mainpage.php' class="fa fa-chevron-circle-left "></a></span>
                    
                </div>
             
              
          </div>
     

    </header>
        
     <div class="hey">
         <div style="padding-top:10%" align='center' class="col-md-12 col-sm-12">
                    
      <h3 style="color:grey ">Stack Implementation</h3>
    </div>
     </div> 
                 
     
    
     <section style="padding-bottom: 200px;" data-stellar-background-ratio="0.5">
    <div class="container" align="center" >
        <div class="wow fadeInRight about-image" data-wow-delay="0.4s">
          <table style="width: 30%;table-layout: fixed;float: right">
         
            <tbody>
                
                 <tr>
                    <td align='center' >1</td>
                    <td align='center' style="width:30%" id="1"></td>
                    <td id="21" style="width:10%"></td>
                    <td style=" border:1.2px solid white;"></td>
                    <td style=" border:1.2px solid white;"></td>
                </tr>
                <tr >
                    <td align='center' >2</td>
                    <td align='center' id="2"></td>
                    <td id="22"></td>
                </tr>
                <tr >
                    <td align='center' >3</td>
                    <td align='center' id="3"></td>
                    <td id="23"></td>
                </tr>
                <tr >
                    <td align='center' >4</td>
                    <td align='center' id="4"></td>
                    <td id="24"></td>
                </tr>
                <tr >
                    <td align='center' >5</td>
                    <td align='center' id="5"></td>
                    <td id="25"></td>
                </tr>
                <tr style="height:40px"><th colspan="3" style="text-align: center;border:solid ">STACK</th></tr>
               
            </tbody>
            
        </table>


        </div>
          <div  style="padding:10% 0px 0px 10%">
            <table class="wow fadeInLeft about-image" data-wow-delay="0.4s" class="table" style="float:left;padding-top: 5%;border:1.5px solid ;float:left; width:20%;height: 20%">
              <tr>
                  <td style="text-align:center"><h5>TOP AT</h5></td>
              </tr>
              <tr>
             
                  <td style="text-align:center" id="top"></td>
             
              </tr>
         
          </table >
          <div data-wow-delay="0.4s" class="wow fadeInDown form-style-agile" 
 align="center" style="padding-top: 2%">
              <input style="width:15%" type="submit" onClick="push()" value='Push' >
           
           <input style="width:15%" type="submit" onClick="pop()" value='Pop'>
            
          </div>
           


          </div>

           
    </div>
    </section>
     
     
     
     <section  data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
                   
                    <div class="col-md-5 col-sm-12">
                         <div   style="padding: 5%;background:#f5f5f5" class="about-info">
                             <div style="text-align: center;" class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h2 style="font-weight: bold;color: #424242;">Definition</h2>
                              </div>

                             <div style="color:#818181 " class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>Stacks are dynamic data structures that follow 
                                       the Last In First Out (LIFO) principle. The last item to be inserted into a stack is the first one to be deleted from it.
                                        For example, you have a stack of trays on a table. 
                                        The tray at the top of the stack is 
                                        the first item to be moved if you require a tray from that stack.
                                   </p>
                                  </div>
                             
                         </div>
                    </div>

                    
                    
               </div>
          </div>
     </section>
     
     <section  data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
                   
                    <div class="col-md-5 col-sm-12">
                         <div   style="padding: 5%;" class="about-info">
                             <div style="text-align: center;" class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h2 style="font-weight: bold;color: #424242;">Insertion and Deletion</h2>
                              </div>

                             <div style="color:#818181 " class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>Stacks have restrictions on the insertion and
                                       deletion of elements. Elements can be inserted or 
                                       deleted only from one end of the stack i.e. 
                                       from the 'top'.</p> <p>The element at the top is called the 'top'
                                       element. The operations of inserting and deleting
                                       elements are called 'push()' and 'pop()' respectively.</p>
                                   <p>
                                        When the top element of a stack is deleted, if the stack remains non-empty, then the 
                                        element just below the previous top element becomes the new top element of the stack.

                                        For example, in the stack of trays, if you take the tray on the top and do not replace 
                                        it, then the second tray automatically becomes the top element (tray) of that stack.</p>

                             </div>
                             
                         </div>
                    </div>

                    
                    
               </div>
          </div>
     </section>
     
     <section  data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
                   
                    <div class="col-md-5 col-sm-12">
                         <div   style="padding: 5%;background:#f5f5f5" class="about-info">
                             <div style="text-align: center;" class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h2 style="font-weight: bold;color: #424242;">Features Of Stack</h2>
                              </div>

                             <div style="color:#818181 " class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>
                                   Dynamic data structures</p>
                                   <p> Do not have a fixed size</p>
                                   <p> Do not consume a fixed amount of memory</p>
                                    <p>Size of stack changes with each push() and pop() operation. Each push() and pop() operation increases and decreases the size of the stack by 1 , respectively.
                                   </p>
                                  </div>
                             
                         </div>
                    </div>

                    
                    
               </div>
          </div>
     </section>
     
     
      <script>
            var a=5;
            var b="top"
            var d=25
            
            function push(){
                
                
                if(a>=1){
                    var val=prompt();
                    if(typeof val!='object')
                        
                    {
                        document.getElementById(a).innerHTML=val;
                document.getElementById(b).innerHTML=a;
                document.getElementById(a).style.fontSize ="20px";
                document.getElementById(a).style.backgroundColor ="pink";
                
                document.getElementById(d).innerHTML="->";
               
                d--;
               
                a--;
                
                    }
                
            }
            else{
                alert("Stack Overflow");
            }
            }
            
           
            
            
            function pop(){
                if(a<5)
                {
                   
                a++;
                d++;
                if(a<5)
                {
                    
                    document.getElementById(b).innerHTML=a+1;
                
                }
                 else
                 {
                    document.getElementById(b).innerHTML="-1";
                 
                    }
                document.getElementById(a).style.backgroundColor ="white";
                
                document.getElementById(a).innerHTML='';
                document.getElementById(d).innerHTML="";
                
                
            }
            else{
                alert("Stack Underflow");
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
