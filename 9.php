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
                    
            <h3 style="color:grey ">Hash Table Program</h3>
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
Given a File of N employee records with a set K of Keys(4-digit) which
uniquely determine the records in file F. Assume that file F is maintained in
memory by a Hash Table(HT) of m memory locations with L as the set of
memory addresses (2-digit) of locations in HT. Let the keys in K and
addresses in L are Integers. Design and develop a Program in C that uses
Hash function H: K →L as H(K)=K mod m (remainder method), and
implement hashing technique to map a given key K to the address space L.
Resolve the collision (if any) using linear probing.
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

typedef struct emp
{
	int empno;
	char name[20];
	int sal;
} EMPLOYEE;

void main()
{
	EMPLOYEE E;
	FILE *fp;
	int n, i, s=sizeof(EMPLOYEE), minusone=-1, choice, flag, index, indexcopy, id;
	printf("Enter number of records:\n");
	scanf("%d", &n);
	fp= fopen("emp.txt", "w+");
	for(i=0; i< n; i++)
	{
		fwrite(&minusone, sizeof(int), 1, fp);
		fseek(fp, s-sizeof(int), SEEK_CUR);
	}
	while(1)
	{
		printf("Enter\n1. Add Record\n2. Display Records\n3. Exit\n");
		scanf("%d", &choice);
		flag=0;
		switch(choice)
		{
			case 1: 
				printf("Enter Employee number, Employee name and Salary:\n");
				scanf("%d%s%d", &E.empno, E.name, &E.sal);
				//Hash function
				index= indexcopy= (E.empno % n);
				fseek(fp, s*index, SEEK_SET);
				fread(&id, sizeof(int), 1, fp);
				//Linear Probing
				while(id!=-1)
				{
					flag=1;
					index++;
					if(index==n)
						index=0;
					if(index==indexcopy)
					{
						printf("FILE FULL!!\n");
						break;
					}
					fseek(fp, s*index, SEEK_SET);
					fread(&id, sizeof(int), 1, fp);
				}
				if(!((index==indexcopy)&&flag))
				{
					fseek(fp, s*index, SEEK_SET);
					fwrite(&E, sizeof(EMPLOYEE), 1, fp);
				}
				break;
			case 2:
				printf("Records are:\n");
				for(index=0; index< n; index++)
				{
					fseek(fp, s*index, SEEK_SET);
					fread(&E.empno, sizeof(int), 1, fp);
					printf("%d\t", E.empno);
					if(E.empno!=-1)
					{
						fread(E.name, 20, 1, fp);
						fread(&E.sal, sizeof(int), 1, fp);
						printf("%s\t%d", E.name, E.sal);
					}
					printf("\n");
				}
				break;
			case 3:
				fclose(fp);
				exit(0);
		}
	}
}         </pre>
                                   
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



