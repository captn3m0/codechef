---
{"category_name":"medium","problem_code":"SUBNUM","problem_name":"Subset Numbering","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kalpitk","problem_tester":null,"date_added":"6-04-2019","tags":{"0":"kalpitk"},"time":{"view_start_date":1555270200,"submit_start_date":1555270200,"visible_start_date":1555270200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Given a subset of digits S and a number N, find the smallest positive number which contains only the digits from S and is a multiple of N or -1 if solution does not exists.


###Input:
- First line contains integer $t$, denoting the number of test cases
- First line of each test case contains two integers, $m, N$, denoting size of set S and the number whose multiple you have to find.
- Next Line of the test case consists of $m$ distinct space-separated integers denoting the digits in set $S$.

###Output:
- For each test case, output single line with answer to the test case.


###Constraints 
- $1 \leq T \leq 30$
- $1 \leq |S| \leq 10$
- $1 \leq N \leq 10^5$

###Sample Input:
	2
	3 123
	2 4 6
	3 101
	0 3 2

###Sample Output:
	246
	202
	
###Explanation:
For first case, 246 is the smallest positive multiple of 123 that has only digits from set {2,4,6}