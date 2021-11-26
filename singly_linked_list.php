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
        
        <style>
             
            .navbar-fixed-top
            {position:fixed;z-index:1030}
            tr,td{
                border: 1px solid black;
                height: 80px;
                border-collapse:collapse;
                width: 60px;
                text-align: center;
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
           
            
             .sub-main-w3 {
    
    
    
    justify-content: center;
    align-items: center;
}

.sub-main-w3 #i {
    max-width: 50%;
    
    background: rgba(42,62,82,0.8);
    
    box-sizing: border-box;
    
    
   
    justify-content: center;
    
    box-shadow: 0px 0px 13px 1px rgba(0, 0, 0, 0.22);
}


.form-style-agile input
 {
     
    width: 40%;
    color: white;
    outline: none;
    font-size: 14px;
    letter-spacing: 1px;
    padding: 15px 15px;
    box-sizing: border-box;
    border: 1px solid #fff;
    background: rgba(45,62,80);
    
}

.form-style-agile input[type="submit"] {
    cursor:pointer;
     width: 30%;
    
    outline: none;
    font-size: 14px;
    letter-spacing: 1px;
    
    box-sizing: border-box;
    border: 3px solid #2D3E52;
    background: rgba(45,62,80);
    color: white;
    background: #F9D209;
    
    transition: 0.5s all;
}

.form-style-agile input[type="submit"]:hover {
    border: 3px solid white;
    background:#2D3E52 ;
    color: white;
    transition: 0.5s all;
    
}

            
            
            
                </style>
    </head>
    
    <body style="background:#FAFAFA">
        
        <header class="navbar custom-navbar navbar-fixed-top" role="navigation">
        	
        <section >
          <div class="container ">

                
              <div  id="p_1" align="center"  class="col-md-12 col-sm-12">
                 <p style=" font-size: 30px">CMR INSTITUTE OF TECHNOLOGY</p>
                 <span ><a style="text-decoration: none;font-size: 40px;padding-right: 1%;color:#F9D209;float: right;cursor:pointer"  href='mainpage.php' class="fa fa-chevron-circle-left "></a></span>
                    
                </div>
             
              
          </div>
     </section>

    </header>
          <div class="hey">
    <div style="padding-top:10%" align='center' class="col-md-12 col-sm-12">
                    
      <h3 style="color:grey ">Linked-List Implementation</h3>
    </div>
          </div>
      <br><br>
      <div align="center" class="sub-main-w3">
    
          <div id="i">
            
              <div style="padding-top:5%" align="center">
                    <h2 >Enter Data
				
			</h2>
                    
                </div>
			
			<div  class="form-style-agile">
				
				<input placeholder="USN"  id='usn' type="textbox" required="">
                                <input placeholder="Name"  id='name' type="textbox" required="">
			
				<br><br>
				<input placeholder="Branch" id='branch' type="textbox"  required="">
                                <input placeholder="Semester"  id='sem' type="textbox"required="">
			<br><br>
                        <input type="submit" onclick="insert_ll()" value="Insert">
                        <input type="submit" onclick="delete_ll()"  value="Delete">
		
                        
		
                        </div>
         </div>
	</div>
	
      
      
         
       
        <script>
            var n=prompt("Enter the Number Of Students")
            var n1=n;
            var n2=0;
            var n3=0;
            
          document.write("<table style='padding:1% 0 0 5%'><tr>");
            for(var i=1;i<=n;i++)
            {
                document.write("<td id="+i+"></td><td style='background:#2D3E52;color:white;'>NEXT</td><td id='arrow'>-----></td>");
            
            }
            document.write("<td style='background-color:yellow;'>NULL</td></tr></table>");
       
        
            
            function insert_ll()
            {
                if(n1<1){
                    alert("Linked list full");
                    
                }
                if(n1>n && n2!=1){
                    n1=n;
                }
                if(n2==1){
                    n1--;
                }
                if(n1<=n && n1>0)
                {
                    n2=0;
                 console.log(n1);   
                var a=document.getElementById("usn").value;
                var b=document.getElementById("name").value;
                var c=document.getElementById("branch").value;
                var d=document.getElementById("sem").value;
                document.getElementById(n1).innerHTML=a+"<br>"+b+"<br>"+c+"<br>"+d;
                document.getElementById(n1).setAttribute('style','background-color:rgba(40,60,80,0.2);color:#2D3E52');
                n1--;
                console.log("ss",n1);
               
                n3=1;
            }
                
                
            }
            
            function delete_ll()
        {
            if(n1>n){
                    alert("Linked list underflow");
                    
                }
                if(n1<1 && n3!=1)
                {
                    n1=1;
                }
                if(n3==1){
                    console.log("in n3",n1);
                    n1++;
                }
                if(n1<=n)
                {
                  console.log("del",n1);  
                
                     document.getElementById(n1).innerHTML="";
                document.getElementById(n1).setAttribute('style','background-color:white');
                n1++;
                n2=1;
                n3=0;
                
            }
                
               
        }
    
        </script>
    
    </body>
</html>






