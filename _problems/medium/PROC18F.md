---
{"category_name":"medium","problem_code":"PROC18F","problem_name":"The Illusionist","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"meetsid20","problem_tester":null,"date_added":"9-08-2018","tags":{"0":"meetsid20"},"time":{"view_start_date":1534442400,"submit_start_date":1534442400,"visible_start_date":1534442400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Niket is an incredible magician. He has prepared an extraordinary magic trick which he calls as the biggest achievement of his life. He will be performing this magic trick for the first time in the $\text{K}$-Pop World Festival. He is nervous and wants to make sure that everything goes well. His magic trick consists of $\text{N}$ acts labeled from 1 to N. Every act except act 1 is $\text{directly}$ dependent upon the successful execution of exactly one of the previous acts. The act i is said to be dependent upon act j iff - 
- act i is directly dependent upon the act j (j < i) or
- act i is dependent upon some act x which is dependent upon the act j. (j < x < i) 

An act can never happen if one or more of its dependencies failed. Note that $\text{not happening is not the same as failing}$. Also, every act has an associated value $\mathbf{a_i}$ which gets added to the audience's anger if that act $\text{fails}$. If the anger becomes very large, people will start throwing sharp objects at Niket. 

Since he is going to perform in the $\text{K}$-Pop World Festival, he is interested in knowing the minimum possible anger value of audience in the hypothetical situation where he was able to successfully execute $\text{exactly K}$ acts during his performance. This means that the remaining acts either failed or could not happen (because of the dependency constraints).

###Input
The first line contains a single interger $\text{T}$ - the number of testcases.

For each testcase,

The first line contains two space separated integers $\text{N}$ and $\text{K}$.

The following N-1 lines contain the information about the acts 2 to N. ith of these lines contains two space separated integers $p_i$ ($p_i$ < i+1) and $a_i$- This means that the (i+1)th act is directly dependent upon the $p_i$th act and adds $a_i$ to the anger value.

###Output
For each testcase, print a line containing the minimum anger value of audience if Niket could perform exactly $\text{K}$ of the acts successfully.

###Constraints 
$1 \leq \text{T} \leq 10$

$1 \leq \text{N} \leq 2000$ 

$1 \leq \text{K} \leq \text{N}$ 

$1 \leq \mathbf{a_i} \leq 10^9$ 

###Sample Input
	1
	5 3
	1 5
	2 4
	2 6
	3 8

###Sample Output
	4

###Explanation
If Niket fails on act 3,  $a_3$ = 4 gets added to the audience's anger and the act 5 can never happen. This means only 3 acts 1,2 and 4 are successful.