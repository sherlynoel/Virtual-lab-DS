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
  
         
            header{
        		width: 100%;background-color:#2D3E52;

        	}
                
                pre{
                    font-size: 20px;
                }  
            
            #p_1
        	{
        		padding: 10px;color:white;font-size: 35px;
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
                   <p  style="display: inline; font-size: 30px">CMR INSTITUTE OF TECHNOLOGY</p>
                    <span ><a style="text-decoration: none;font-size: 40px;padding-right: 1%;color:#F9D209;float: right;cursor:pointer"  href='mainpage.php' class="fa fa-chevron-circle-left "></a></span>
                </div>
             
             
          </div>
     

    </header>
    
        <section>
            <div class="hey">
            <div style="padding-top:10%" align='center' class="col-md-12 col-sm-12">
                    
            <h3 style="color:grey ">Circular Queue Program</h3>
          </div>
            </div>  
        </section>
        <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div style="padding:5% 5% 0% 5%" class="row">
                   
                    <div class="col-md-5 col-sm-12">
                         <div class="about-info">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h2 style="font-weight: bold;color: #424242">Aim</h2>
                              </div>

                             <div style="color:#818181 " class="wow fadeInUp" data-wow-delay="0.4s">
                                 <pre style="text-align:justify">
Design, Develop and Implement a menu driven Program in C for the
following operations on Circular QUEUE of Characters (Array
Implementation of Queue with maximum size MAX)
a. Insert an Element on to Circular QUEUE
b. Delete an Element from Circular QUEUE
c. Demonstrate Overflow and Underflow situations on Circular QUEUE
d. Display the status of Circular QUEUE
e. Exit
Support the program with appropriate functions for each of the above
operations
                                   </pre>
                                   
                              </div>
                         </div>
                        
                        <div class="about-info">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h2 style="font-weight: bold;color: #424242">Program</h2>
                              </div>

                             <div style="color:#818181 " class="wow fadeInUp" data-wow-delay="0.4s">
                                 <pre style="text-align:justify">
#include<stdio.h>
#include<stdlib.h>
#define size 10

void cqinsert(char queue[], int *rear, int *count);
void cqdelete(char queue[], int *front, int *count);
void display(char queue[], int front, int count);

void main()
{
	char queue[size];
	int front = 0, rear = -1, ch, count = 0;
	for(;;)
	{
		printf("\nMenu\n");
		printf("1. Insert\n2. Delete\n3. Display\n4. Exit\n");
		scanf("%d", &ch);
		switch(ch)
		{
			case 1:
				if(count == size)
					printf("Queue is Full\n");
				else
					cqinsert(queue, &rear, &count);
				break;
			case 2:
				if(count == 0)
					printf("Queue is Empty\n");
				else
					cqdelete(queue, &front, &count);
				break;
			case 3:
				if(count == 0)
					printf("Queue is Empty\n");
				else
					display(queue, front, count);
				break;
			case 4:
				exit(0);
		}
	}
}

void cqinsert(char queue[], int *rear, int *count)
{
	char ele;
	printf("Enter a Character\n");
	scanf(" %c", &ele);
	*rear = (*rear + 1) % size;
	queue[*rear] = ele;
	(*count)++;
}

void cqdelete(char queue[], int *front, int *count)
{
	printf("Deleted Character is %c\n", queue[*front]);
	*front = (*front + 1) % size;
	(*count)--;
}

void display(char queue[], int front, int count)
{
	int i;
	printf("The Characters are\n");
	for(i=0; i< count; i++)
	{
		printf("%c\t", queue[front]);
		front = (front + 1) % size;
	}
	printf("\n");
}
                                   </pre>
                                   
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



