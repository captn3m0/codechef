---
{"category_name":"easy","problem_code":"SLAEL","problem_name":"Second Largest Element","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"sahil070197","problem_tester":null,"date_added":"20-10-2018","tags":{"0":"sahil070197"},"time":{"view_start_date":1540578600,"submit_start_date":1540578600,"visible_start_date":1540578600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Find the length of the longest contiguous segment in an array, in which if a given element $K$ is inserted, $K$ becomes the second largest element of that subarray.

###Input:

- The first line will contain $T$, number of test cases. Then the test cases follow. 
- The first line of each test case contains two integers $N$ and $K$.
- The next line contains N space-separated integers Ai denoting the elements of the array.

###Output:
Print a single line corresponding to each test case — the length of the largest segment.


###Constraints 
- $1 \leq T \leq 10$
- $1 \leq N \leq 10^6$
- $1 \leq Ai, K \leq 10^9$
- Sum of N across all test cases doesn't exceed $10^6$

###Sample Input:
	2
	5 3
	2 4 2 4 2
	8 5
	9 3 5 7 8 11 17 2


###Sample Output:
	5
	3
	
###EXPLANATION:
	If 3 is inserted at anywhere in the array, it is the second largest element. Hence the maximum length is 5.
	If 5 is inserted anywhere between 1st and 4th element, it is the second largest element. The length of such subarray is 3.
