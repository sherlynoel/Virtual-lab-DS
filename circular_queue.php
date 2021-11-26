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
    
    <body >
        
        <header class="navbar custom-navbar navbar-fixed-top" role="navigation">
        	
        
          <div class="container ">

                
              <div id="p_1" align="center"  class=" col-md-12 col-sm-12">
                  <p  style="display: inline; font-size: 30px">CMR INSTITUTE OF TECHNOLOGY</p>
                  <span ><a style="text-decoration: none;font-size: 40px;padding-right: 1%;color:#F9D209;float: right;cursor:pointer"  href='mainpage.php' class="fa fa-chevron-circle-left "></a></span>
                    
                </div>
             
             

          </div>
     

    </header>
    
        <section><div class="hey">
            <div style="padding-top:10%" align='center' class="col-md-12 col-sm-12">
                    
            <h3 style="color:grey ">Circular Queue Implementation</h3>
          </div>
            </div>
        </section>
        <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div style="padding:5% 5% 0% 5%" class="row">
                   <div style="padding-left: 10% ;padding-right: 5% ;float:right" class="col-md-5 col-sm-12">
                         <div style="padding-left: 50px;" class="wow fadeInRight about-image" data-wow-delay="0.6s">
                             <img width="300px" height="240px" src="images/c_queue2.gif" class="img-responsive" alt="">
                         </div>
                    </div>
                    
                    <div class="col-md-5 col-sm-12">
                         <div class="about-info">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h4 style="font-weight: bold;color: #818181">BINARY SEARCH TREE</h4>
                                   <h2 style="font-weight: bold;color: #424242">Definition</h2>
                              </div>

                             <div style="color:#818181 " class="wow fadeInUp" data-wow-delay="0.4s">
                                 <p style="text-align:justify">Circular Queue is a linear data structure 
                                     in which the operations are performed based on FIFO (First In First Out)
                                     principle and the last position is connected back to the first position to make a circle.
                                     It is also called ‘Ring Buffer’. 
                                     The figure shows the structure of circular queue. It stores an element in a circular way and performs the operations according to its FIFO structure.

                                   </p>
                                   
                                   
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
                             <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h2 style="font-weight: bold;color: #424242;">Features</h2>
                              </div>

                             <div style="color:#818181 " class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>Features of Circular Queue</p>
                                   <p>In case of a circular queue, head pointer will always point to the front of the queue, 
                                       and tail pointer will always point to the end of the queue.
                                    <p>Initially , the head and the tail pointers will be pointing to the same location, 
                                        this would mean that the queue is empty.</p>
                                    <p>New data is always added to the location pointed by the tail pointer, 
                                        and once the data is added, 
                                        tail pointer is incremented to point to the next available location.
                                    </p>
                                    <p>In a circular queue, data is not actually removed 
                                        from the queue. Only the head pointer is incremented by one position when dequeue is executed.
                                        As the queue data is only the data between head and tail, hence the data left outside is 
                                        not a part of the queue anymore, hence removed.
                                    </p>
                                    <p>The head and the tail pointer will get reinitialised to 0 
                                        every time they reach the end of the queue.</p>
                                    <p>
                                        Also, the head and the tail pointers can cross each other. 
                                        In other words, head pointer can be greater than the tail. 
                                        This will happen when we dequeue the queue a couple of times and the tail 
                                        pointer gets reinitialised upon reaching the end of the queue.
                                        
                                    </p>
                                    
                                  </div>
                             
                         </div>
                    </div>
                </div>
          </div>
     </section>
       
     <section data-stellar-background-ratio="0.5">
          <div class="container">
               <div style="padding:5%" class="row">
                   
                    <div class="col-md-5 col-sm-12">
                         <div class="about-info">
                             <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h2 style="font-weight: bold;color: #424242;">Implementation</h2>
                              </div>

                             <div style="color:#818181 " class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>1.Initialize the queue, with size of the queue defined (maxSize), and head and tail pointers</p>
                                   <p>
                                       2.enqueue: Check if the number of elements is equal to maxSize - 1:
                                   </p>
                                    <p>-> If Yes, then return Queue is full.</p>
                                    <p>-> If No, then add the new data element to the location of tail pointer and increment the tail pointer.</p>
                                    <p>3.dequeue: Check if the number of elements in the queue is zero:</p>
                                    <p>-> If Yes, then return Queue is empty.</p>
                                    <p>
                                        -> If No, then increment the head pointer.</p>
                                    <p>
                                        4.Finding the size:</p>
                                    
                                 <p>
                                        -> If, tail >= head, size = (tail - head) + 1</p>
                                    
                                 <p>
                                       -> But if, head > tail, then size = maxSize - (head - tail) + 1
</p>
                                    
                                 
                                  </div>
                             
                         </div>
                    </div>
                </div>
          </div>
     </section>
       
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




