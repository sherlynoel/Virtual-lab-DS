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
            a {
  outline: none;
  text-decoration: none;
  padding: 2px 1px 0;
}

a:link {
  color: #ffffff;
}

a:visited {
  color: #ffffff;
}


           
        
            
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
                    
            <h3 style="color:grey ">Stack Program</h3>
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
following operations on STACK of Integers (Array Implementation of Stack
with maximum size MAX)
a. Push an Element on to Stack
b. Pop an Element from Stack
c. Demonstrate how Stack can be used to check Palindrome
d. Demonstrate Overflow and Underflow situations on Stack
e. Display the status of Stack
f. Exit
Support the program with appropriate functions for each of the above
operations.
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
#define MAX 20

int stack_full(int top);
int stack_empty(int top);
void push(int stack[], int *top, int ele);
int pop(int stack[], int *top);
int is_palindrome(int stack[], int top);
void display(int stack[], int top);

void main()
{
	int stack[MAX], top = -1, ele, ch;
	for(;;)
	{
		printf("\nMenu\n");
		printf("1. Push\n2. Pop\n3. Check Palindrome\n4. Stack Status\n5. Display\n6. Exit\n");
		scanf("%d", &ch);
		switch(ch)
		{
			case 1:
				if(stack_full(top))
					printf("Stack Full\n");
				else
				{
					printf("Enter an Element\n");
					scanf("%d", &ele);
					push(stack, &top, ele);
				}
				break;
			case 2:
				if(stack_empty(top))
					printf("Stack Empty\n");
				else
				{
					ele = pop(stack, &top);
					printf("Deleted Element is %d", ele);
				}
				break;
			case 3:
				if(stack_empty(top))
					printf("Stack Empty\n");
				else if(is_palindrome(stack, top))
				{
					printf("Stack is Palindrome\n");
					display(stack, top);
				}
				else
					printf("Stack is not Palindrome\n");
				break;
			case 4:
				if(stack_empty(top))
					printf("Stack Empty\n");
				else if(stack_full(top))
					printf("Stack Full\n");
				else
					printf("Stack contains %d elements\n", top+1);
				break;
			case 5:
				if(stack_empty(top))
					printf("Stack Empty\n");
				else
					display(stack, top);
				break;
			case 6:
				exit(0);
		}
	}
}

int stack_full(int top)
{
	if(top == MAX-1)
		return 1;
	return 0;
}

int stack_empty(int top)
{
	if(top == -1)
		return 1;
	return 0;
}

void push(int stack[], int *top, int ele)
{
	stack[++(*top)] = ele;
}

int pop(int stack[], int *top)
{
	return stack[(*top)--];
}

int is_palindrome(int stack[], int top)
{
	int i, not_palindrome=0;
	for(i=0; i<=top/2; i++)
	{
		if(stack[i] != stack[top-i])
		{
			not_palindrome = 1;
			break;
		}
	}
	if(not_palindrome)
		return 0;
	else
		return 1;
}

void display(int stack[], int top)
{
	int i;
	for(i=0; i <= top; i++)
	{
		printf("%d ", stack[i]);
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



