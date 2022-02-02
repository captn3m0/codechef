---
{"category_name":"medium","problem_code":"ENETIRE","problem_name":"Our Enemy does not Tire","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"shivamg_isc","problem_tester":null,"date_added":"2-04-2019","tags":{"0":"shivamg_isc"},"time":{"view_start_date":1554669000,"submit_start_date":1554669000,"visible_start_date":1554669000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>**Jon Snow** has to defeat the army of the **Night King**.     
For that he needs to increase the power of the **Dragon Glass.**  

Dragon Glass's power depends on certain numbers, described as follows.  

Dragon Glass follows its own number system, which comprises $Y$ integers ranging in  $[0,Y-1]$.         

Normally, there are bases like base 2 (binary) , 8 (octal)  , 10 (decimal) , etc.    
In this new number system, there are total $(X+1)$ bases, ranging from base $2$ to base $X+2$ in which these $Y$ numbers can be represented.    

Jon Snow initially has exactly $M$ **distinct numbers** in base $2$. $(1<=M<=Y)$       

If a number $b$ is in base $a$, it can be transformed into 3 of the following -  

 - Number $b+1$ in base $a+1$, if $0 \leq b+1 \leq Y-1$
 - Number $b$ in base $a+1$
 - Number $b-1$ in base $a+1$, if $0 \leq b-1 \leq Y-1$

These transformations have some restrictions, which are detailed below.

So, let’s say $Y$ = 10 (**numbers range from [0-9]**). And $M$ be 3.   
Let those $M$ numbers we initially have in base $2$ be 4, 7 and 9.  
So, **4 in base 2** can be transformed into **3, 4 and 5 in base 3**.  
Similarly, **7 in base 2** can be transformed into **6,7 and 8 in base 3**.  
Similarly, **9 in base 2** can be transformed into **8 and 9 in base 3**.     
**3 in base 3** can be transformed into **2, 3 and 4 in base 4.**  
And, so on....... .... .....   

But, the dragon glass is not perfect.  
**Some of the combinations of bases and numbers are blocked i.e can't be obtained.** In other words, you cannot transform into any of these combinations. 

There are $N$ total such combinations which can't be obtained.  
These combinations are of the following form -   

 - $a$  $b$ 
It denotes that number $b$ in base $a$ is blocked i.e can't be obtained. 
**There are at most 200 distinct bases in which numbers can’t be obtained.**  That is, among the $N$ blocked combinations, there are at most 200 distinct bases. 

Suppose that currently we have number $b$ in base $a$.    
If the number $b$ and $b+1$ are blocked to be obtained in base $a+1$, then number $b$ in base $a$ can be transformed into $b+1$ in base $a$ (**provided it is not blocked**).    
If the number $b$ and $b-1$ are blocked to be obtained in base $a+1$, then number $b$ in base $a$ can be transformed into $b-1$ in base $a$ (**provided it is not blocked**).         

**Also, one can never go back to a combination/pair which was obtained in the past.**   
In other words, let’s say we have $(a,b)$ - ( number $b$ in base $a$ ), and we apply some sequence of transformations to it and obtain $(c,d)$ - ( number $d$ in base $c$), 

$(a,b) \rightarrow  … ... ... \rightarrow (c,d)$     
Then $(a,b)  ….. \rightarrow  (c,d) \rightarrow  ….. \rightarrow  (a,b)$ is not allowed.

You need to help Jon Snow find **the number of ways to obtain numbers in base $(X+2)$ i.e the last base as stated above**. In other words, you have to find the number of different sequences of transformations, which start out with one of the $M$ numbers in base 2, and end with some number in base $X+2$.

**As the value can be very high, print it mod** $10^9+7$.  
Please refer sample examples for more explanation.  


###Input:

- First line will contain 4 space separated integers - $Y,X,M,N$ .
- Second line comprises $M$ distinct space separated integers denoting the numbers in the range $[0,Y-1]$ initially in base 2.    
- $N$ lines follow. Each line comprises 2 space separated integers $a$ $b$ denoting the number $b$ in base $a$ is blocked i.e can't be obtained.

###Output:
Output in a single line number of ways to obtain numbers in base $X+2$ modulo $10^9+7$.

###Constraints 
- $1 \leq  Y \leq 200$
- $1 \leq X \leq 10^9$   
- $1 \leq M \leq Y $  (These $M$ elements range in $[0, Y-1]$)
- $0 \leq N \leq 200*Y $ (as only 200 distinct bases will have numbers that can't be obtained)  
- $3 \leq a \leq X+1$ 
- $0 \leq b \leq Y-1$

###Sample Input 1:
  
  3 3 1 3   
  0      
  3 0    
  3 1   
  4 2


###Sample Output 1:
	3
	
###EXPLANATION 1:
$Y$ = 3 (The Number system has integers only in range [0,2]).    
$X$ = 3 ( The bases range from base 2 to base 5).    
$M$ = 1 ( At base 2, only 1 number is present).   
Array of $M$ integers  = {0} ( Only number 0 is present initially at base 2).     
$N$ = 3 ( There are 3 combinations that are blocked/can't be obtained )     
Array of length $N$ = { ( 3, 0), (3, 1), (4,2) } (Number 0 and 1 in base 3 can never be obtained, and number 2 in base 4 can never be obtained).      

The answer is 3. 
The possible ways are obtained as follows -

Number 0 in base 2 can transform into number 0 and number 1 in base 3.   
But, both these numbers can’t be obtained. So, number 0 in base 2 can be transformed to number 1 in base 2.    
This number 1 in base 2 can be transformed into number 2 in base 3.     
This number 2 in base 3 can be transformed into number 1 in base 4.     
This number 1 in base 4 can be transformed into **number 0 in base 5, number 1 in base 5 or number 2 in base 5.**     

Thus at base (X+2) i.e base 5, there are 3 ways of obtaining numbers.         

###Sample Input 2:
  
  3 3 1 2   
  0      
  3 0    
  3 1      

###Sample Output 2:
	5   

###EXPLANATION 2:  
$Y$ = 3 (The Number system has integers only in range [0,2]).    
$X$ = 3 ( The bases range from base 2 to base 5).   
$M$ = 1 ( At base 2, only 1 number is present).   
Array of $M$ integers  = {0} ( Only number 0 is present initially at base 2).     
$N$ = 2 ( There are 2 combinations that are blocked/can't be obtained )      
Array of length $N$ = { ( 3, 0), (3, 1) } (Number 0 and 1 in base 3 can never be obtained).     

The answer is 5.       
The possible ways are obtained as follows -        

Number 0 in base 2 can transform into number 0 and number 1 in base 3.       
But, both these numbers can’t be obtained. So, number 0 in base 2 can be transformed to number 1 in base 2.        
This number 1 in base 2 can be transformed into number 2 in base 3.        
This number 2 in base 3 can be transformed into number 1 in base 4, and number 2 in base 4.    
This number 1 in base 4 can be transformed into **number 0 in base 5, number 1 in base 5 or number 2 in base 5.**       
The number 2 in base 4 can be transformed into **number 1 in base 5 or number 2 in base 5**.      

Thus at base (X+2) i.e base 5, there are 5 ways of obtaining numbers.    


###Sample Input 3:
  
  4 2 2 2  
  1 2        
  3 1    
  3 2      

###Sample Output 3:  
	8     

###EXPLANATION 3:   
$Y$ = 4 (The Number system has integers only in range [0,3]).    
$X$ = 2 ( The bases range from base 2 to base 4).    
$M$ = 2 ( At base 2, only 2 numbers are present).   
Array of $M$ integers  = {1,2} ( Only numbers 1 and 2 are present initially at base 2).    
$N$ = 2 ( There are 2 combinations that are blocked/can't be obtained )    
Array of length $N$ = { ( 3, 1), (3, 2) } (Number 1 and 2 in base 3 can never be obtained).           

The number 1 in base 2 can transform into numbers 0,1 and 2 in base 3.      
But numbers 1 and 2 in base 3 can't be obtained. So, number 1 in base 2 can be transformed into number 2 in base 2.     
The number 2 in base 2  can be transformed into number 3 in base 3.        
The number 3 in base 3 can be transformed into **numbers 2 and 3 in base 4.**          

The number 0 in base 3 can be transformed into **numbers 0 and 1 in base 4**  .   

Similarly, one can find 4 other ways.      
Total number of ways to obtain numbers at base (X+2) i.e base 4 are 8.
   