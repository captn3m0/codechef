---
{"category_name":"school","problem_code":"PROC18A","problem_name":"The Great Run","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"meetsid20","problem_tester":null,"date_added":"8-08-2018","tags":{"0":"meetsid20"},"time":{"view_start_date":1534442400,"submit_start_date":1534442400,"visible_start_date":1534442400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Vishal loves running. He often visits his favourite Nehru Park and runs for very long distances. On one such visit he found that the number of girls in the park was unusually high. Now he wants to use this as an opportunity to impress a large number of girls with his awesome speed. 

The track on which he runs is an $\text{N}$ kilometres long straight path. There are $\mathbf{a_i}$ girls standing within the $\text{ith}$ kilometre of this path. A girl will be impressed only if Vishal is running at his maximum speed when he passes by her. But he can run at his best speed only for a single continuous stretch of $\text{K}$ kilometres. Now Vishal wants to know what is the maximum number of girls that he can impress.

###Input
First line of the input contains the number of testcases $\text{T}$.


For each test case,

First line contains two space-separated integers $\text{N}$ and $\text{K}$, the length of the track and the maximum distance he can run at his best speed.

Second line contains N space-separated integers, the number of girls within each kilometre of the track.

###Output
For each test case print one line containing an integer, denoting the maximum number of girls Vishal can impress.

###Constraints 
$1 \leq \text{T} \leq 10$

$1 \leq \text{K} \leq \text{N} \leq 100$ 

$1 \leq \mathbf{a_i} \leq 100$ 

###Sample Input
	1
	7 2
	2 4 8 1 2 1 8

###Sample Output
12

###Explanation
He can impress 4+8=12 girls if he runs at his best speed between the 2nd and the 3rd kilometre, inclusive.