---
{"category_name":"easy","problem_code":"ARYGRD","problem_name":"Arya and the Grid of Stars","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"aashu_k","problem_tester":null,"date_added":"25-03-2019","tags":{"0":"aashu_k"},"time":{"view_start_date":1554669000,"submit_start_date":1554669000,"visible_start_date":1554669000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Arya is planning to go back to Winterfell. In order to reach there and survive, she must collect maximum stars from a maze. The maze is in the form of a grid of size $m \times n$. Each cell is either blank, has a star or has a stone.

She starts from $(1,1)$ to reach $(m, n)$ using right and bottom moves and then she returns to $(1, 1)$ using top and left moves. 

The only constraint is that if she visits some cells in a particular row in the whole journey (forward and backward), then maximum distance between any pair of visited cells (forward and backward) for every row is $x$, where $x$ is given in the input. Distance between $(i, j)$ and $(i, k)$ is $|k - j|$.
**Also note that she cannot go into the cells with a stone.**
Tell the maximum stars that can be collected by Arya.

###Input:

- First line will contain three integers: $m$, number of rows, $n$, number of columns and $x$, the distance constraint. 
- Next $m$ lines contain the grid. Each line contains '.', '*' or '#' denoting empty cell, star or stone. The cells $(1, 1)$ or $(m, n)$ can have stones.

###Output:
Print the maximum number of stars that can be collected by Arya. If it is not possible to reach $(m, n)$ from $(1, 1)$, then print -1. 

###Constraints 
- $1 \leq m, n \leq 1000$
- $0 \leq x \leq 5$

###Sample Input:
	3 3 0
	.*.
	*.*
	.*.

###Sample Output:
	-1
	
###EXPLANATION:
If x = 0, then it is not possible to reach 3,3 as we cannot move left in any row..

###Sample Input:
	3 3 1
	.*.
	*.*
	.*.

###Sample Output:
	3
	
###EXPLANATION:
If x = 1, then we can at most visit 2 consecutive cells in any row.
Thus (0,0) => (0,1) => (1,1) => (1,2) => (2,2) => (2,1) => (1,1) => (0,1) => (0,0)
OR
(0,0) => (1,0) => (1,1) => (2,1) => (2,2) => (2,1) => (1,1) => (0,1) => (0,0)
Note that in this case, we cannot go to (1, 2) while returning as it will lead to maximum distance of 3 between (1,0) and (1,2).

###Sample Input:
	3 3 2
	.*.
	*.*
	.*.

###Sample Output:
	4
	
###EXPLANATION:
(0,0) => (0,1) => (0,2) => (1,2) => (2,2) => (2,1) => (2,0) => (1,0) => (0,0)