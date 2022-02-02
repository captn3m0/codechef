---
{"category_name":"medium","problem_code":"WINHERE","problem_name":"Winter Is Here","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"aashu_k","problem_tester":null,"date_added":"31-03-2019","tags":{"0":"aashu_k"},"time":{"view_start_date":1554669000,"submit_start_date":1554669000,"visible_start_date":1554669000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>**Winter is here** and so are the white walkers. 

The war against white walker is going on a 2-D plane.  

Jon Snow, the heir to the Iron Throne is standing at $(0,0)$ on the plane.  

$N$ white walkers are coming towards the wall to attack the night's watch.   
Currently each white walker is at a fixed point $(x_i, y_i)$  on the 2-D plane.     

Horizontal distance between two points $(x_1,y_1)$ and $(x_2,y_2)$ is $|x_1-x_2|$, and vertical distance between them is $|y_1-y_2|$.  

There are $Q$ queries to answer.  
Each query is of the form $L \, R \, K$.    $(1 \leq L \leq R \leq N) $

For each query, only white walkers in the range $[L,R]$ have to be considered.  
 
**Active** white walkers in this range $[L,R]$ are only those whose **horizontal distance from Jon is not more than** $K$ **units**.    

The **POWER** of the **active** white walker army is calculated as the $XOR$ sum of the **number of divisors of the vertical distance of active enemies from Jon.**

Jon knows that the active army is of no harm **if their power is 0**.   
Jon snow has a weapon with which he can kill **exactly one** ***active*** white walker, such that killing him will render the army powerless.  

Can you help Jon to find out for each query **how many choices does he have to kill exactly one white walker such that the army becomes powerless**?

###Input:
- First line contains $N$. The number of white walkers in the army.
- Next $N$ lines contains 2 integers - $(x_i,y_i)$ each denoting the x and y coordinate of white walkers.
- Next line contains an integer $Q$ denoting the number of queries.
- Next $Q$ lines contains 3 integers each. $L$, $R$ and $K$.

###Output :
- For each query print the number of white walkers Jon can target to make the army powerless.

###Constraints :
- $1 \leq N \leq 10^5$
- $ 1 \leq Q \leq 2*10^5$
- $1 \leq L \leq R \leq N$
- $1 \leq x_i,y_i ,K \leq 10^9$

###Sample Input:
    4
    1 15
    2 2
    3 2
    2 5
    2
    2 4 5
    1 3 2

###Sample Output:
    3
    0

	
###EXPLANATION:
**For query 1**
- Active white walkers are at  (2,2), (3,2) and (2,5), as these have horizontal distance from Jon $\leq K$.
- Power of the active army is XOR sum of NOD of vertical distance from Jon = NOD(2) xor NOD(2) xor NOD(5), where NOD means Number of divisors. Power = 2 ^ 2 ^ 2 = 2
- Therefore Jon can kill any one of the 3 white walkers. So the power of remaining army will be 2 ^ 2 = 0.    

**For query 2**
- Active white walkers are at  (1,15), and (2,2) as these have horizontal distance from Jon $\leq K$.
- Power of the active army is XOR sum of NOD of vertical distance from Jon = NOD(15) xor NOD(2) , where NOD means Number of divisors. Power = 4^2 = 6
- There is no choice here to kill exactly 1 white walker here to render the power = 0  Hence, the answer is 0.
