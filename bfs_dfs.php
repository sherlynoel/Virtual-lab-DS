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
  
         
            tr,td{
                border: 1px solid black;
                height: 50px;
                border-collapse:collapse;
                width: 100px;
                text-align: center;
            }
            #arrow{
                border: 1px solid white;
            }
           
            button{
                
                background-color: #4CAF50;
                width: 100px;
                color:white;
                padding-left:5%;
                padding-right:5%;
                
                text-align: center;
                
                display:block;
                font-size:16px;
                
                cursor:pointer;
                
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
                  <span style="color:#F9D209;float: left;font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
              
                    <p style="display:inline; font-size: 30px">CMR INSTITUTE OF TECHNOLOGY</p>
                    <span ><a style="text-decoration: none;font-size: 40px;padding-right: 1%;color:#F9D209;float: right;cursor:pointer"  href='mainpage.php' class="fa fa-chevron-circle-left "></a></span>
                    
                </div>
             
              <!--
              nav bar-->
              <div  id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="3a.php">BFS-Working</a>
                    <a href="3b.php">DFS-Working</a>
                    </div>

          </div>
     </section>

    </header>
          <div class="hey">
        <div style="padding-top:10%" align='center' class="col-md-12 col-sm-12">
                    
      <h3 style="color:grey ">BFS-DFS Implementation</h3>
    </div>
    
          </div>
        
        <section    data-stellar-background-ratio="0.5">
          <div class="container">
               <div style="padding:5% 5% 0% 5%" class="row">
                   <div style="padding-left: 10% ;padding-right: 5% ;float:right"  class="col-md-5 col-sm-12">
                         <div style="padding-left: 50px;" class="wow fadeInUp about-image" data-wow-delay="0.6s">
                             <img width="90%" height="90%" src="images/bfs1.gif" class="img-responsive" alt="">
                         </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                         <div class="about-info">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h2 style="font-weight: bold;color: #424242">Breadth First Search (BFS)</h2>
                              </div>

                             <div style="text-align:justify;height:50%" class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>

There are many ways to traverse graphs. BFS is the most commonly used approach.

BFS is a traversing algorithm where you should start traversing from a selected node (source or starting node) and traverse the graph layerwise thus exploring the neighbour nodes (nodes which are directly connected to source node). You must then move towards the next-level neighbour nodes.

As the name BFS suggests, you are required to traverse the graph breadthwise as follows:
</p>
<p>1.First move horizontally and visit all the nodes of the current layer</p>
<p>2.Move to the next layer</p>
                                   
                                  </div>
                            
                         </div>
                    </div>

                    
                    
               </div>
          </div>
     </section>
        
        
        
        
        
        
        <section   data-stellar-background-ratio="0.5">
          <div class="container">
               <div style="padding:5% 5% 0% 5%"  class="row">
                   <div style="padding-left: 10% ;padding-right: 5% ;float:right"  class="col-md-5 col-sm-12">
                         <div style="padding-left: 50px;" class="wow fadeInUp about-image" data-wow-delay="0.6s">
                             <img width="100%" height="100%"  src="images/dfs1.gif" class="img-responsive" alt="">
                         </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                         <div class="about-info">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h2 style="font-weight: bold;color: #424242">Depth First Search (DFS)</h2>
                              </div>

                             <div style="text-align:justify;height:50%" class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>
                        Depth-first Search (DFS) is an algorithm for searching a graph or tree data structure. 
                        The algorithm starts at the root (top) node of a tree and goes as far as it can down
                        a given branch (path), and then backtracks until it finds an unexplored path, 
                        and then explores it.
                        The algorithm does this until the entire graph has been explored.
                        DFS algorithm traverses a graph in a 
                        depthward motion and uses a stack to remember to get the next vertex to start a search, 
                        when a dead end occurs in any iteration.
                                   </p>
<p>1.First move vertically and visit all the child nodes of the current layer</p>
<p>2.Move to the next sibling</p>
                                   
                                  </div>
                            
                         </div>
                    </div>
                </div>
          </div>
     </section>
        
        
        
        
        
        
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







