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
Design, Develop and Implement a Program in C for the following operations
on Strings
a. Read a main String (STR), a Pattern String (PAT) and a Replace String
(REP)
b. Perform Pattern Matching Operation: Find and Replace all occurrences of
PAT in STR with REP if PAT exists in STR. Report suitable messages in
case PAT does not exist in STR.
Support the program with functions for each of the above operations. Don't
use Built-in functions.
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

int stringLen(char str[]);
void stringCat(char dest[], char src[]);

void main()
{
	int i=0,j,k=0,flag=0;
	char STR[50], PAT[15], REP[15], RESULT[50];
	printf("Enter String\n");
	gets(STR);
	printf("Enter Pattern\n");
	gets(PAT);
	printf("Enter Substitution Key\n");
	gets(REP);
	while(STR[i] != '\0')
	{
		j=0;
		while((STR[i+j] == PAT[j]) && (PAT[j] != '\0'))
		{
			j++;
		}
		
		if(PAT[j] == '\0')
		{
			flag = 1;
			RESULT[k] = '\0';
			stringCat(RESULT,REP);
			k = k + stringLen(REP);
			// Here j will always be equal to string length of pattern.
			i = i + (j -1);
		}
		else
		{
			RESULT[k++] = STR[i];
		}
		i++;
	}
	RESULT[k] = '\0';
	printf("The result is\n");
	if(flag)
		puts(RESULT);
	else
		printf("Pattern not found\n");
}

int stringLen(char str[])
{
	int len=0;
	while(str[len] != '\0')
	{
		len++;
	}
	return len;
}

void stringCat(char dest[], char src[])
{
	int i=0, j=0;
	while(dest[i] != '\0')
	{
		i++;
	}
	// i can be computed using strLength function also. Above while block can be replaced as " i = stringLen(dest); ".
	
	while(src[j] != '\0')
	{
		dest[i+j] = src[j];
		j++;
	}
	return;
}                                   </pre>
                                   
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



