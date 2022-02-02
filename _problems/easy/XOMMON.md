---
{"category_name":"easy","problem_code":"XOMMON","problem_name":"Longest Xommon Subsequence","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kalpitk","problem_tester":null,"date_added":"6-04-2019","tags":{"0":"kalpitk"},"time":{"view_start_date":1555270200,"submit_start_date":1555270200,"visible_start_date":1555270200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Given an array of $n$ integers : $ A_1, A_2,... , A_n$, find the longest size subsequence which satisfies the following property: The xor of adjacent integers in the subsequence must be non-decreasing.

###Input:

- First line contains an integer $n$, denoting the length of the array. 
- Second line will contain $n$ space separated integers, denoting the elements of the array.

###Output:
Output a single integer denoting the longest size of subsequence with the given property.

###Constraints 
- $1 \leq n \leq 10^3$
- $0 \leq A_i \leq 10^{18}$


###Sample Input:
	8
	1 200 3 0 400 4 1 7


###Sample Output:
	6
	
###EXPLANATION:
The subsequence of maximum length is {1, 3, 0, 4, 1, 7} with Xor of adjacent indexes as {2,3,4,5,6} (non-decreasing)
