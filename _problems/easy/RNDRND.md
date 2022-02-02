---
{"category_name":"easy","problem_code":"RNDRND","problem_name":"Go Round","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kalpitk","problem_tester":null,"date_added":"4-04-2019","tags":{"0":"kalpitk"},"time":{"view_start_date":1555270200,"submit_start_date":1555270200,"visible_start_date":1555270200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>In a Circular City, there are $n$ houses, numbered from 1 to n and arranged in 1,2,...,n,1,2,...
Chef needs to deliver packages to $m$ (m<=n) houses. 

Chef is initially at house 1. Chef decides an integer $x$ and stops after every $x$ houses. i.e- if $n=7$ and $x=2$. He will stop at 1,3,5,7,2,... He may deliver a package when he stops at a house. His work is done when all the packages are delivered.

What is the minimum number of times Chef has to stop, if he can choose any $x$ ?

__Note__: Starting point (1) is also counted in number of stops

###Input:

- First line will contain $n, m$, denoting number of houses and number of packages respectively.
- Next line contains $m$ distinct space separated integers denoting the houses

###Output:
Single line containing an integer denoting minimum number of stops.

###Constraints 
- $3 \leq n \leq 1000$
- $1 \leq m \leq n$

###Sample Input 1:
	5 3
	1 2 4

###Sample Output 1:
	3

###Sample Input 2:
	6 2
	3 4

###Sample Output 2:
	4
	
###EXPLANATION:
For first input,
If Chef chooses $x=3$, he will stop at 1, 4, 2 before delivering all the packages.

For second,
If Chef chooses $x=1$, he will stop at 1, 2, 3, 4 before delivering all the packages.
