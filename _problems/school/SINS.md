---
{"category_name":"school","problem_code":"SINS","problem_name":"The Deadly Sin","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kr_abhinav","problem_tester":null,"date_added":"3-04-2018","tags":{"0":"kr_abhinav"},"time":{"view_start_date":1522873800,"submit_start_date":1522873800,"visible_start_date":1522873800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Meliodas and Ban are fighting over chocolates. Meliodas has $X$ chocolates, while Ban has $Y$. Whoever has lesser number of chocolates eats as many chocolates as he has from the other's collection. This eatfest war continues till either they have the __same number of chocolates__, or atleast one of them is left with __no chocolates__.  
Can you help Elizabeth predict the total no of chocolates they'll be left with at the end of their war?


###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contains of a single line of input, which contains two integers $X, Y$, the no of chocolates Meliodas and Ban have, respectively. 

###Output:
For each testcase, output in a single line the no of chocolates that remain after Ban and Meliodas stop fighting.

###Constraints 
- $1 \leq T \leq 100000$
- $0 \leq X,Y \leq 10^9$

###Sample Input:
3  
5 3  
10 10  
4 8  

###Sample Output:
2  
20  
8  
	
###EXPLANATION:
Denoting Meliodas as $M$, Ban as $B$.
 
Testcase 1:  
$M$=5, $B$=3  
Ban eates 3 chocolates of Meliodas.  
$M$=2, $B$=3  
Meliodas eats 2 chocolates of Ban.  
$M$=2, $B$=1  
Ban eates 1 chocolate of Meliodas.  
$M$=1, $B$=1  
Since they have the same no of candies, they stop quarreling.  
Total candies left: 2  

Testcase 2:  
$M$=10, $B$=10  
Since both of them had the same candies to begin with, there was no point in fighting.  
Total candies left: 20  

Testcase 3:  
$M$=4, $B$=8  
Meliodas eats 4 chocolates of Ban.  
$M$=4, $B$=4  
Since they have the same no of candies, they stop quarreling.  
Total candies left: 8  