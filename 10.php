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
                    
            <h3 style="color:grey ">Doubly Linked Program</h3>
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
following operations on Doubly Linked List (DLL) of Employee Data with
the fields: SSN, Name, Dept, Designation, Sal, PhNo
a. Create a DLL of N Employees Data by using end insertion.
b. Display the status of DLL and count the number of nodes in it
c. Perform Insertion and Deletion at End of DLL
d. Perform Insertion and Deletion at Front of DLL
e. Demonstrate how this DLL can be used as Double Ended Queue
f. Exit

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

typedef struct node
{
	char ssn[20], name[20], department[20], designation[20];
	float sal;
	long int phno;
	struct node *llink, *rlink;
} NODE;

typedef struct headnode
{
	int count;
	struct node *llink, *rlink;
} HEAD;

void insfront(HEAD *head);
void insrear(HEAD *head);
void delfront(HEAD *head);
void delrear(HEAD *head);
void display(HEAD *head);
NODE *getNode();

void main()
{
	int ch;
	HEAD *head = (HEAD *) malloc(sizeof(HEAD));
	head->count = 0;
	head->llink = NULL;
	head->rlink = NULL;
	for(;;)
	{
		printf("\n\nMenu\n");
		printf("\n1. Insert Front\n2. Insert Rear\n3. Delete Front\n4. Delete Rear\n5. Display\n6. Exit\n");
		scanf("%d", &ch);
		switch(ch)
		{
			case 1:
				insfront(head);
				break;
			case 2:
				insrear(head);
				break;
			case 3:
				if(head->rlink == NULL)
					printf("List Empty");
				else
					delfront(head);
				break;
			case 4:
				if(head->rlink == NULL)
					printf("List Empty");
				else
					delrear(head);
				break;
			case 5:
				if(head->rlink == NULL)
					printf("List Empty");
				else
					display(head);
				break;
			case 6:
				exit(0);
		}
	}
}

NODE *getNode()
{
	NODE *temp = (NODE *) malloc(sizeof(NODE));
	if(temp == NULL)
	{
		printf("No Memory\n");
		exit(0);
	}
	return temp;
}

void insfront(HEAD *head)
{
	NODE *new = getNode();
	NODE *next = head->rlink;
	printf("Enter Details such as SSN Name Department Designation Salary PhNo\n");
	scanf("%s%s%s%s%f%ld", (new->ssn), (new->name), (new->department), (new->designation), &(new->sal), &(new->phno));
	if(next != NULL)
		next->llink = new;
	new->rlink = next;
	head->rlink = new;
	(head->count)++;
}

void insrear(HEAD *head)
{
	NODE *new = getNode();
	NODE *temp = NULL;
	printf("Enter Details such as SSN Name Department Designation Salary PhNo\n");
	scanf("%s%s%s%s%f%ld", (new->ssn), (new->name), (new->department), (new->designation), &(new->sal), &(new->phno));
	(head->count)++;
	new->rlink = NULL;
	if(head->rlink == NULL)
	{
		head->rlink = new;
		return;
	}
	temp = head->rlink;
	while(temp->rlink != NULL)
		temp = temp->rlink;
	temp->rlink = new;
	new->llink = temp;
}

void delfront(HEAD *head)
{
	NODE *temp = head->rlink;
	printf("Deleted Record is\n");
	printf("%s\t%s\t%s\t%s\t%f\t%ld\n", (temp->ssn), (temp->name), (temp->department), (temp->designation), (temp->sal), (temp->phno));
	head->rlink = temp->rlink;
	free(temp);
	(head->count)--;
}

void delrear(HEAD *head)
{
	NODE *previous = NULL, *present = head->rlink;
	if(present->rlink == NULL)
	{
		head->rlink = NULL;
	}
	else
	{
		while(present->rlink != NULL)
		{
			previous = present;
			present =  present->rlink;
		}
		previous->rlink = NULL;
	}
	printf("Deleted Record is\n");
	printf("%s\t%s\t%s\t%s\t%f\t%ld\n", (present->ssn), (present->name), (present->department), (present->designation), (present->sal), (present->phno));
	(head->count)--;
	free(present);
}

void display(HEAD *head)
{
	NODE *temp = head->rlink;
	printf("Total Number of records are %d\n", head->count);
	printf("SSN\tName\tDepartment\tDesignation\tSalary\t\tPhNo\n");
	while(temp != NULL)
	{
		printf("%s\t%s\t%s\t\t%s\t\t%f\t%ld\n", (temp->ssn), (temp->name), (temp->department), (temp->designation), (temp->sal), (temp->phno));
		temp = temp->rlink;

	}
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



