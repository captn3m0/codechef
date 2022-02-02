---
{"category_name":"easy","problem_code":"CUTPIZ","problem_name":"Cutting Pizza","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vijju123","problem_tester":null,"date_added":"17-11-2018","tags":{"0":"vijju123"},"time":{"view_start_date":1542546000,"submit_start_date":1542546000,"visible_start_date":1542546000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Vasya has ordered a pizza delivery. The pizza can be considered a perfect circle. There were $n$ premade cuts in the pizza when it was delivered. Each cut is a straight segment connecting the center of the pizza with its boundary.

Let $O$ be the center of the pizza, $P_i$ be the endpoint of the $i$-th cut lying on the boundary, and $R$ be the point of the boundary straight to the right of $O$. Then the counterclockwise-measured angle $\angle ROP_i$ is equal to $a_i$ degrees, where $a_i$ is an integer between $0$ and $359$. Note that angles between $0$ and $180$ angles correspond to $P_i$ in the top half of the pizza, while angles between $180$ and $360$ angles correspond to the bottom half.

Vasya may cut his pizza a few more times, and the new cuts still have to be straight segments starting at the center. He wants to make the pizza separated into several equal slices, with each slice being a circular sector with no cuts inside of it. How many new cuts Vasya will have to make?

###Input:

The first line of input contains $T$ , i.e number of test cases per file.

The first line of each test case contains a single integer $n-$  the numbers of premade cuts ($2 \leq n \leq 360$).

The second lines contains $n$ integers $a_1, \ldots, a_n-$ angles of the cuts $1, \ldots, n$ respectively ($0 \leq a_1 < \ldots, a_{n - 1} < 360$).

###Output:
Print a single integer$-$ the smallest number of additional cuts Vasya has to make so that the pizza is divided into several equal slices.


###Constraints 
- $1  \leq T  \leq 36$
- $2 \leq n \leq 360$
- $0 \leq a_1 < \ldots, a_{n - 1} < 360$

###Sample Input:
```
3
4 
0 90 180 270
2
90 210
2
0 1
```

###Sample Output:
```
0
1
358
```

	
###EXPLANATION:
In the first sample the pizza is already cut into four equal slices.

In the second sample the pizza will be cut into three equal slices after making one extra cut at $330$ degrees.

In the third sample Vasya will have to cut his pizza into $360$ pieces of $1$ degree angle each.