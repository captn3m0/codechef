---
{"category_name":"medium","problem_code":"CIRCINTE","problem_name":"Circular Intervals","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"22-06-2018","tags":{"0":"admin3"},"time":{"view_start_date":1529692200,"submit_start_date":1529692200,"visible_start_date":1529692200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>The integers $0$ to $M - 1$ have been arranged in a circular fashion. That is, $0, 1, 2, \ldots, M - 1$, are in that order and
also, $0$ and $M - 1$ are next to each other. The distance between any two adjacent numbers on this circle is 1. You are given $N$ intervals on this, such that no two intervals touch or intersect with each other. The i-th interval will be of the form [$L_i, R_i$]. This means that the i-th interval contains all the integers between $L_i$ and $R_i$, both end points inclusive. You are supposed to mark exactly one number inside each interval, in such a way that the minimum distance between any two marked numbers is maximized.

More formally, we have $0 \leq L_1 \leq R_1 < L_2 \leq R_2 < L_3 \ldots < L_N \leq R_N \leq M - 1$. You are supposed to mark exactly $N$ numbers: $A_1, A_2, \ldots, A_N$, such that $L_i \leq A_i \leq R_i$ for all $1 \leq i \leq N$. And you want to do it in such a manner $min_{i \neq j}$ (shortest distance between $A_i$ and $A_j$ ), is maximized.

###Input:

- First line of the input contains a pair of integers $M$ and $N$.
- The i-th of the next $N$ lines contains two numbers $L_i$ and $R_i$ which denote the end points of the i-th interval.

###Output:
- A single integer denoting the maximized minimum distance between any two marked numbers.

###Constraints 
- $1 \leq M \leq 10^{18}$
- $2 \leq N \leq 4 * 10^5$

###Subtasks
- 10 points : 
	- $1 \leq M \leq 10000$
	- $2 \leq N \leq 100$
- 25 points : 
	- $1 \leq M \leq 10^{18}$
	- $2 \leq N \leq 1000$
- 65 points : No further constraints.

###Sample Input:
	9 3
	0 2
	3 4
	5 7

###Sample Output:
	3
	
###Explanation:
We can choose $A_1 = 0, A_2 = 3, A_3 = 6$. The distance between every adjacent marked pair of numbers is 3, and hence that is the minimum. You can check that you cannot do any better, and hence 3 is the answer.