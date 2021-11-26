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
                    
            <h3 style="color:grey ">BST Program</h3>
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
Design, Develop and Implement a menu driven Program in C for the following operations
on Binary Search Tree (BST) of Integers
a. Create a BST of N Integers: 6, 9, 5, 2, 8, 15, 24, 14, 7, 8, 5, 2
b. Traverse the BST in Inorder, Preorder and Post Order
c. Search the BST for a given element (KEY) and report the appropriate message
d. Delete an element(ELEM) from BST
e. Exit
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

typedef struct t_node
{
	char data;
	struct t_node *llink;
	struct t_node *rlink;
} TNODE;

void inorder(TNODE *root);
void preorder(TNODE *root);
void postorder(TNODE *root);
int search(TNODE *root, int key);
TNODE *getnode();
TNODE *insert(TNODE *root, int ele);
TNODE *delete(TNODE *root, int ele);
TNODE *findMin(TNODE *root);

void main()
{
	TNODE *root=NULL;
	int ch, flag;
	int ele, key;
	for(;;)
	{
		printf("\n1.Insert\n2.Inorder\n3.Preorder\n4.Postorder\n5.Search\n6.Delete\n7.Exit\n");
		printf("\nEnter your choice\n");
		scanf("%d",&ch);
		switch(ch)
		{
			case 1:
				printf("Enter the element to be inserted\n");
				scanf("%d",&ele);
				root=insert(root,ele);
				break;
					
			case 2:
				if(root==NULL)
					printf("Empty tree\n");
				else
				{
					printf("The contents are\n");
					inorder(root);
				}
				break;
					
			case 3:
				if(root==NULL)
					printf("Empty tree\n");
				else
				{
					printf("The contents are\n");
					preorder(root);
				}
				break;
					
			case 4:
				if(root==NULL)
					printf("Empty tree\n");
				else
				{
					printf("The contents are\n");
					postorder(root);
				}
				break;
				
			case 5:
				printf("Enter the element to be searched\n");
				scanf("%d",&key);
				flag=search(root, key);
				if(flag)
					printf("Found\n");
				else
					printf("Not Found\n");
				break;
				
				
			case 6:	
				printf("Enter the element to be deleted\n");
				scanf("%d", &ele);
				root = delete(root, ele);
				break;
				
			case 7:	exit(0);
		}
	}
}

TNODE *getnode()
{
	TNODE *temp=(TNODE *)malloc(sizeof(TNODE));
	if(temp==NULL)
	{
		printf("No Memory\n");
		exit(0);
	}
	return temp;
}

TNODE *insert(TNODE *root,int ele)
{
	TNODE *new=NULL;
	if(root==NULL)
	{
		new = getnode();
		new->data=ele;
		new->rlink=new->llink=NULL;
		return new;
	}
	if(ele>(root->data))
		root->rlink=insert(root->rlink,ele);
	if(ele<(root->data))
		root->llink=insert(root->llink,ele);
	return root;
}

void inorder(TNODE *root)
{
	if(root!=NULL)
	{
		inorder(root->llink);
		printf("%d ",root->data);
		inorder(root->rlink);
	}
}

void preorder(TNODE *root)
{
	if(root!=NULL)
	{
		printf("%d ",root->data);
		preorder(root->llink);
		preorder(root->rlink);
	}
}

void postorder(TNODE *root)
{
	if(root!=NULL)
	{
		postorder(root->llink);
		postorder(root->rlink);
		printf("%d ",root->data);
	}
}

int search(TNODE *root,int key)
{
	if(root!=NULL)
	{
		if(key==root->data)
			return 1;
		if(key>root->data)
			return(search(root->rlink,key));
		if(key< root->data)
			return(search(root->llink,key));
	}
	return 0;
}

TNODE *delete(TNODE *root, int ele)
{
	TNODE *temp = NULL;
	if(root == NULL)
		printf("Element not found\n");
	else if(ele < root->data)
		root->llink = delete(root->llink, ele);
	else if(ele > root->data)
		root->rlink = delete(root->rlink, ele);
	else
	{
		if(root->llink != NULL && root->rlink != NULL)
		{
			temp = findMin(root->rlink);
			root->data = temp->data;
			root->rlink = delete(root->rlink, temp->data);
		}
		else
		{
			temp = root;
			if(root->llink == NULL)
				root = root->rlink;
			else if(root->rlink == NULL)
				root = root->llink;
			free(temp);
		}
	}
	return root;
}

TNODE *findMin(TNODE *root)
{
	if(root == NULL)
		return NULL;
	
	if(root->llink != NULL)
		return findMin(root->llink);
	else
		return root;
}                        </pre>
                                   
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



