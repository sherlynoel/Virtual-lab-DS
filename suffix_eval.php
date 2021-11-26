<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <title>Experiment 1</title>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/round_menu.css"/>
        <link rel="stylesheet" href="css/animate.css"/>
        
        <style>
             
            .navbar-fixed-top
            {position:fixed;z-index:1030}
  
         
            table,td,tr
            {
                text-align: center;
                table-layout: fixed;
                border:2px solid rgba(200,200,200,0.1);
                border-collapse: collapse;
                height: 35px;
                width: 50%;
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
           
        tr:nth-child(even) {
                            background:#222429 ;
                        }
                        tr:nth-child(odd) {
                            background:	#2C2F34;
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
             
             </div>
     </section>

    </header>
          <div class="hey">
    <div style="padding-top:10%" align='center' class="col-md-12 col-sm-12">
                    
      <h3 style="color:grey ">Suffix Evaluation</h3>
    </div>
          </div>
        
        <div style="margin: -30px">
            
            
            <div align="center" class="form-style-agile" data-wow-delay="0.4s" >

                <input style="color:grey;width:30%" type="textbox" placeholder="Suffix Expression" id="expr" required=""/>
                <br>
                <input style="width:15%" type="submit" value="Evaluate" onClick="fas()" >
                <input style="width:15%" type="submit" value="Reset" onclick="window.location.reload()" >
        
        </div>

            <div align="center" class="form-style-agile " style="color:white;padding:5%">
                <table style="margin: -8%">
               <tr>
                 <td>Index</td>
                 <td>Current Token</td>
                 <td>Stack</td>
               </tr>

               <tr>
                 <td id="11"></td>
                 <td id="21"></td>
                 <td id="31"></td>
               </tr>
               <tr>
                 <td id="12"></td>
                 <td id="22"></td>
                 <td id="32"></td>
               </tr>
               <tr>
                 <td id="13"></td>
                 <td id="23"></td>
                 <td id="33"></td>
               </tr>
               <tr>
                 <td id="14"></td>
                 <td id="24"></td>
                 <td id="34"></td>
               </tr>
               <tr>
                 <td id="15"></td>
                 <td id="25"></td>
                 <td id="35"></td>
               </tr>
               <tr>
                 <td id="16"></td>
                 <td id="26"></td>
                 <td id="36"></td>
               </tr>
               <tr>
                 <td id="17"></td>
                 <td id="27"></td>
                 <td id="37"></td>
               </tr>
                <tr>
                 <td id="18"></td>
                 <td id="28"></td>
                 <td id="38"></td>
               </tr>
                <tr>
                 <td id="19"></td>
                 <td id="29"></td>
                 <td id="39"></td>
               </tr>

             </table>


              </div>           



        </div>
            
    
      
    
    <script >
        var top1=-1,s=[],MAX=40;
        var mov=11,curr=21,stac=31;
        function fas()
        {
            mov=11,curr=21,stac=31,s=[];
            var suff=[],isuff;
            var i, op1,op2,res;
            suff=document.getElementById("expr").value;
            var j=0;
            
            for( var i=0; i<suff.length;i++)
            {
                if(!isNaN(suff[i]))
                {
                    isuff=parseInt(suff[i]);
                    setTimeout(push(isuff),9000);
                    document.getElementById(mov).innerHTML=j++;
                    document.getElementById(curr).innerHTML=isuff;
                    document.getElementById(stac).innerHTML=s;
                    
                    mov++;curr++;stac++;
                }
               else
               {
                   
                   op2=pop();
                   
                   op1=pop();
                   document.getElementById(mov).innerHTML=j++;
                   document.getElementById(curr).innerHTML=suff[i];
                    
                    
                   res=evalu(suff[i],op1,op2);
                   
                   
                   
                   
                   push(res);
                   
                    document.getElementById(stac).innerHTML=s;
                     mov++;curr++;stac++;
               }
            }
            res=pop();
            alert(res);
        }
        
        
        function push(elem)
        {
           
            if(top1==MAX-1)
            {
                alert("Stack Overflow");
            }
            else
            {
                 top1++;
                 s[top1]=elem;
                
                 
            }
            
        }
        
        function pop()
        {
            var del;
            if(top1==-1)
            {
                
                alert("underflow");
            }
            else
            {
                del=s[top1];
                s.splice(top1,1);
                top1--;
                
                return del;
            }
            
            
            
        }
        function evalu(op,op1,op2){
            
            switch(op)
            {
                case '+': return op1+op2;  
                case '-': return op1-op2;             
                case '*': return op1*op2;             
                case '/': return op1/op2;             
                case '^': return Math.pow(op1,op2);             
                case '%': return op1%op2;            
                default: alert("INVALID");       
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





