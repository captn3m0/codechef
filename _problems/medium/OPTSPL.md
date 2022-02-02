---
{"category_name":"medium","problem_code":"OPTSPL","problem_name":"Optimal Splitting","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kalpitk","problem_tester":null,"date_added":"23-03-2019","tags":{"0":"kalpitk"},"time":{"view_start_date":1555270200,"submit_start_date":1555270200,"visible_start_date":1555270200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Given a tree with n nodes. Split it into 3 parts such that all the three parts are connected components in original graph and each node is exactly present in one of the parts and the following function is minimised:
Let s1,s2,s3 be the sizes of the 3 parts (or connected components)
then $f=|s1-s2|+|s2-s3|+|s1-s3|$

Also calculate the number of ways of splitting the tree. Two ways are considered different if different sets of edges is removed.

###Input:

- First line will contain $n$, number of vertices in the tree. 
- Each of the next $n-1$ lines contain two space separated integers $u$ and $v$ denoting an edge between u and v

###Output:
Output in a single line two space centered integers denoting the optimal value of function and number of ways to achieve it.

###Constraints 
- $3 \leq n \leq 100000$

###Sample Input 1:
	5
	1 2
	2 3
	3 4
	4 5

###Sample Output 1:
	2 3

###Sample Input 2:
	9
	1 2
	1 3
	3 4
	3 5
	4 6
	4 7
	5 8
	5 9

###Sample Output 2:
	0 1
	
###EXPLANATION:
For first input,
Optimum Splitting=[1]+[2,3]+[4,5] or [1,2]+[3]+[4,5] or [1,2]+[3,4]+[5]
Hence number of ways=3
and f=|2-1|+|2-2|+|2-1|=2

For second,
Optimum Splliting=[1,2,3]+[4,6,7]+[5,8,9]
Hence number of ways=1
and f=|3-3|+|3-3|+|3-3|=0
