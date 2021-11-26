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
                    
            <h3 style="color:grey ">Singly Linked List Program</h3>
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
following operations on Singly Linked List (SLL) of Student Data with the
fields: USN, Name, Branch, Sem, PhNo
a. Create a SLL of N Students Data by using front insertion.
b. Display the status of SLL and count the number of nodes in it
c. Perform Insertion and Deletion at End of SLL
d. Perform Insertion and Deletion at Front of SLL
e. Demonstrate how this SLL can be used as STACK
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
	char usn[10];
	char name[15];
	char branch[2];
	int sem;
	long int phno;
	struct node *link;
} NODE;

typedef struct head_node
{
	int count;
	struct node *link;
} HEAD;

NODE *getNode();
void insfront(HEAD *head);
void insrear(HEAD *head);
void delfront(HEAD *head);
void delrear(HEAD *head);
void display(HEAD *head);

void main()
{
	HEAD *head = (HEAD *) malloc(sizeof(HEAD));
	int ch;
	head->count = 0;
	head->link = NULL;
	for(;;)
	{
		printf("\nMenu\n");
		printf("1. Insert Front\n2. Insert Rear\n3. Delete Front\n4. Delete Rear\n5. Display\n6. Exit\n");
		printf("For Stack Choose 2,4 and 5 options\n");
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
				if(head->link == NULL)
					printf("List Empty\n");
				else
					delfront(head);
				break;
			case 4:
				if(head->link == NULL)
					printf("List Empty\n");
				else
					delrear(head);
				break;
			case 5:
				if(head->link == NULL)
					printf("List Empty\n");
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
	(head->count)++;
	printf("Enter Details such as USN Name Branch Semester PhNo\n");
	scanf("%s%s%s%d%ld", (new->usn), (new->name), (new->branch), &(new->sem), &(new->phno));
	new->link = head->link;
	head->link = new;
	return;
}

void insrear(HEAD *head)
{
	NODE *new = getNode();
	NODE *temp = head->link;
	(head->count)++;
	printf("Enter Details such as USN Name Branch Semester PhNo\n");
	scanf("%s%s%s%d%ld", (new->usn), (new->name), (new->branch), &(new->sem), &(new->phno));
	new->link = NULL;
	if(temp == NULL)
	{
		head->link = new;
		return;
	}
	while(temp->link != NULL)
	{
		temp = temp->link;
	}
	temp->link = new;
	return;
}

void delfront(HEAD *head)
{
	NODE *temp = head->link;
	(head->count)--;
	printf("Deleted Record is \n");
	printf("%s\t%s\t%s\t%d\t%ld\n", (temp->usn), (temp->name), (temp->branch), (temp->sem), (temp->phno));
	head->link = temp->link;
	return;
}

void delrear(HEAD *head)
{
	NODE *previous = NULL, *present = head->link;
	(head->count)--;
	if(present->link == NULL)
	{
		head->link = NULL;
	}
	else
	{
		while(present->link != NULL)
		{
			previous = present;
			present = present->link;
		}
		previous->link = NULL;
	}
	printf("Deleted Record is \n");
	printf("%s\t%s\t%s\t%d\t%ld\n", (present->usn), (present->name), (present->branch), (present->sem), (present->phno));
	free(present);
	return;
}

void display(HEAD *head)
{
	NODE *temp = head->link;
	printf("Total Records are %d\n", head->count);
	printf("USN\tName\t\tBranch\tSem\tPhNo\n");
	while(temp != NULL)
	{
		printf("%s\t%s\t\t%s\t%d\t%ld\n", (temp->usn), (temp->name), (temp->branch), (temp->sem), (temp->phno));
		temp = temp->link;
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



