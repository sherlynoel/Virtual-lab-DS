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
                    
            <h3 style="color:grey ">Suffix Evaluation Program</h3>
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
Design, Develop and Implement a Program in C for the following Stack
Applications
a. Evaluation of Suffix expression with single digit operands and operators:
+, -, *, /, %, ^
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
#include<math.h>

typedef enum {plus, minus, mul, divi, mod, pwr, eos, operand} precedence;

precedence getToken(char postfix[], int *n, char *symbol);
int eval(char postfix[]);
void push(int stack[], int *top, int ele);
int pop(int stack[], int *top);
int operation(int opr1, int opr2, precedence token);

void main()
{
	char postfix[30];
	printf("Enter Postfix Expression\n");
	gets(postfix);
	printf("The Result after Evaluation is %d", eval(postfix));
}

precedence getToken(char postfix[], int *n, char *symbol)
{
	*symbol = postfix[(*n)++];
	switch(*symbol)
	{
		case '+':	return plus;
		case '-':	return minus;
		case '*':	return mul;
		case '/':	return divi;
		case '%':	return mod;
		case '^':	return pwr;
		case '\0':	return eos;
		default:	return operand;
	}
}

int eval(char postfix[])
{
	int stack[20], top=-1, n=0, opr1, opr2;
	precedence token;
	char symbol;
	for(token = getToken(postfix, &n, &symbol); token != eos; token = getToken(postfix, &n, &symbol))
	{
		if(token == operand)
		{
			push(stack, &top, symbol - '0');
		}
		else
		{
			opr2 = pop(stack, &top);
			opr1 = pop(stack, &top);
			push(stack, &top, operation(opr1, opr2, token));
		}
	}
	return stack[0];
}

void push(int stack[], int *top, int ele)
{
	stack[++(*top)] = ele;
}

int pop(int stack[], int *top)
{
	return stack[(*top)--];
}

int operation(int opr1, int opr2, precedence token)
{
	switch(token)
	{
		case plus:	return opr1+opr2;
		case minus:	return opr1-opr2;
		case mul:	return opr1*opr2;
		case divi:	return opr1/opr2;
		case mod:	return opr1%opr2;
		case pwr:	return pow(opr1, opr2);
	}
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



