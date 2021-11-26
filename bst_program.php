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
        <link rel="stylesheet" href="css/round_menu.css"/>
        <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/style.css"/>
     
        <style>
            
            .navbar-fixed-top
            {position:fixed;z-index:1030}
  
         
            table,td,tr
            {
                border:1.2px solid black;
                border-collapse: collapse;
                height: 70px;
                
            }
           
            header{
        		width: 100%;background-color:#2D3E52;

        	}
                
                
            
            #p_1
        	{
        		margin: 5px;padding: 10px;color:white;font-size: 35px;
        		font-family: Verdana;font-weight: lighter;
        	}
            h2,h3{
               display: inline;font-weight:lighter;
               
               font-family: 'verdana';
               color:white;}
           
        
            
                </style>
    </head>
    
    <body style="background:#FDFDFD" >
        
        <header class="navbar custom-navbar navbar-fixed-top" role="navigation">
        	
        
          <div class="container ">

                
              <div id="p_1" align="center"  class=" col-md-12 col-sm-12">
                  <span style="color:#F9D209;float: left;font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
              
                  <p  style="display: inline; font-size: 30px">CMR INSTITUTE OF TECHNOLOGY</p>
                  <span ><a style="text-decoration: none;font-size: 40px;padding-right: 1%;color:#F9D209;float: right;cursor:pointer"  href='mainpage.php' class="fa fa-chevron-circle-left "></a></span>
                    
                </div>
             
              <!--
              nav bar-->
              <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a target="_blank" href="images/binary-tree-1-creation-small.gif"  class="id_1" >Creation </a>
                    <a target="_blank" href="images/binary-tree-1-search-small.gif" class="id_2" >Search</a>
                    <a target="_blank" href="images/binary-tree-1-order-small.gif" class="id_3">Inorder </a>
                    <a target="_blank" href="images/binary-tree-1-pre-order-small.gif" class="id_4">Preorder</a>
                    <a target="_blank" href="images/binary-tree-1-post-order-small.gif" class="id_5">Postorder </a>
                   </div>
              
             
          </div>
     

    </header>
    
        <section>
            <div class="hey">
            <div style="padding-top:10%" align='center' class="col-md-12 col-sm-12">
                    
            <h3 style="color:grey ">BST Implementation</h3>
          </div>
            </div> 
        </section>
        <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div style="padding:5% 5% 0% 5%" class="row">
                   <div style="padding-left: 10% ;padding-right: 5% ;float:right" class="col-md-5 col-sm-12">
                         <div style="padding-left: 50px;" class="wow fadeInUp about-image" data-wow-delay="0.6s">
                             <img width="110%" height="105%" src="images/heap.gif" class="img-responsive" alt="">
                         </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                         <div class="about-info">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h4 style="font-weight: bold;color: #818181">BINARY SEARCH TREE</h4>
                                   <h2 style="font-weight: bold;color: #424242">Definition</h2>
                              </div>

                             <div style="color:#818181 " class="wow fadeInUp" data-wow-delay="0.4s">
                                 <p style="text-align:justify">Binary Search Tree is a node-based binary tree data structure which has the 
                                       following properties:
                                       
                                    The left subtree of a node contains only nodes with keys lesser than the node’s key.
                                    The right subtree of a node contains only nodes with keys greater than the node’s key.
                                    The left and right subtree each must also be a binary search tree.
                                   
                                   </p>
                                   <p>Thus, BST divides all its sub-trees into two segments:
                                    The left sub-tree and the right sub-tree and can be defined as −</p>

                                    <p>left_subtree (keys)  ≤  node (key)  ≤  right_subtree (keys)</p>
                                   
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
                             <div style="text-align: center;" class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h2 style="font-weight: bold;color: #424242;">Representation</h2>
                              </div>

                             <div style="color:#818181 " class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>BST is a collection of nodes arranged in a way where they maintain BST properties.
                                       Each node has a key and an associated value. While searching,
                                       the desired key is compared to the keys in BST and if found, 
                                       the associated value is retrieved.
                                   </p>
                                  </div>
                             <div align="center" class="col-md-5 col-sm-12">
                                    <div  class="wow fadeInUp about-image" data-wow-delay="0.6s">
                                        <img style="padding-left: 50px;" height="300px" width="300px" src="images/bst1.JPG" class="img-responsive" alt="">
                                        <img style="padding-left: 50px;" height="300px" width="300px" src="images/bst2.JPG" class="img-responsive" alt="">
                                        <img style="padding-left: 50px;" height="300px" width="300px" src="images/bst3.JPG" class="img-responsive" alt="">
                                    
                                    </div>
                                 
                               </div>
                         </div>
                    </div>
                </div>
          </div>
     </section>
        
         <section  data-stellar-background-ratio="0.5">
          <div class="container">
               <div style="padding:5%" class="row">
                   
                    <div class="col-md-5 col-sm-12">
                         <div class="about-info">
                              <div style="float:right" class="col-md-5 col-sm-12">
                                  <div  class="wow fadeInUp about-image" data-wow-delay="0.6s">
                                      <img style="object-fit: cover;border-radius:50% 50% 40% 55%"  style="padding-left: 50px;" height="300px" width="500px" src="images/binary-search-tree-insertion-animation.gif" class="img-responsive" alt="">
                                        
                                    </div>
                                 
                               </div>
                              <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h2 style="font-weight: bold;color: #424242">Basic operations</h2>
                              </div>

                             <div style="color:#818181 " class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>Following are the basic operations of a tree −

                                    <p>Search − Searches an element in a tree.</p>

                                     <p>Insert − Inserts an element in a tree.</p>

                                     <p>Pre-order Traversal − Traverses a tree in a pre-order manner.</p>

                                     <p>In-order Traversal − Traverses a tree in an in-order manner.</p>

                                     <p>Post-order Traversal − Traverses a tree in a post-order manner.</p>
                                    </p>
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
     
     <script>
     
     

document.querySelector(".menu-button").onclick = function(e) {
  e.preventDefault();
  document.querySelector(".circle").classList.toggle("open");
};

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



