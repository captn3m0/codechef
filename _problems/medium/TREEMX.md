---
{"category_name":"medium","problem_code":"TREEMX","problem_name":"Tree MEX","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"vijju123","problem_tester":null,"date_added":"17-11-2018","tags":{"0":"vijju123"},"time":{"view_start_date":1542546000,"submit_start_date":1542546000,"visible_start_date":1542546000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Minimum excludant (or MEX for short) of a collection of integers is the smallest non-negative integer not present in the set.

You have a tree $T$ with $n$ vertices. Consider an ordering $P = (v_1, \ldots, v_n)$ of vertices of $T$. We construct a sequence $A(P) = (a_1, \ldots, a_n)$ using the following process:


- Set all $a_i = -1$.       
- Process vertices in order $v_1, \ldots, v_n$. For the current vertex $v_i$ set $a_i = \mathrm{MEX}(a_{u_1}, \ldots, a_{u_k})$, where $u_1, \ldots, u_k$ is the set of neighbours of $v_i$.         


For instance, let $n = 3$ and $T$ be the tree with edges $(1, 2)$ and $(2, 3)$. Then, for the ordering $P = (1, 2, 3)$ we obtain the sequence $A(P) = (0, 1, 0)$, while for the ordering $P = (2, 3, 1)$ we obtain $A(P) = (1, 0, 1)$.

Consider all $n!$ orders $P$. How many different sequences $A(P)$ can we obtain? Print the answer modulo $10^9 + 7$.

###Input:

The first line contains an integer $T$, denoting number of test cases.

The first line of each test case contains an integer $n-$ the number of vertices in the tree ($1 \leq n \leq 10^5$).

The following $n - 1$ lines describe the tree edges. Each of these lines contains two integers $u_i, v_i$ describing an edge between $u_i$ and $v_i$ ($1 \leq u_i, v_i \leq n$, $u_i \neq v_i$).

###Output:
Print the answer modulo $10^9 + 7$.

###Constraints 
- $1\le T \le 10$
- $1\le n \le 10^5$
- $1 \le u_i,v_i \le n$
- $u_i \neq v_i$

###Sample Input:
```
1
5 
1 2
2 3
3 4
4 5
```


###Sample Output:
`6`
	
###EXPLANATION:
For the sample case, the possible sequences $A(P)$ are $(0, 1, 0, 1, 0)$, $(0, 1, 2, 0, 1)$, $(0, 2, 1, 0, 1)$, $(1, 0, 1, 0, 1)$, $(1, 0, 1, 2, 0)$, $(1, 2, 0, 1, 0$).