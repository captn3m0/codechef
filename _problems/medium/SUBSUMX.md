---
{"category_name":"medium","problem_code":"SUBSUMX","problem_name":"Subset Sums Revisited","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"deadwing97","problem_tester":null,"date_added":"13-12-2018","tags":{"0":"deadwing97"},"time":{"view_start_date":1544985000,"submit_start_date":1544985000,"visible_start_date":1544985000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>You are given a sequence $A$ of $N$ integers: $(A_1, A_2, \ldots, A_N)$. From this sequence, you create another sequence of size $N$: $B = (B_1, B_2, \ldots, B_N)$, where $B_i = 2^{A_i}$.

You are also given an integer $K$. You need to output the number of subsequences of  $B$ whose sum is exactly $K$. Since the answer might be huge, output it modulo $10^9+7$.

###Input

- The first line contains the number of testcases in file $T$
- Each testcase is described as follows:
- The first line contains two integers, $N$ and $K$.
- The second line contains $N$ space separated integers: $A_1, A_2, \ldots, A_N$

###Output

Output $T$ lines each containing a single integer which should be the answer.

###Constraints

- $1 \leq T \leq 200$
- $1 \leq N \leq 100$
- $0 \leq A_i \leq 60$
- $1 \leq K < 2^{61}$

###Sample Input
```
1
3 8
2 2 2
```

###Sample Output
```
3
```

###Explanation
The sequence $A$ is $(2, 2, 2)$. Hence the sequence $B$ is $(4, 4, 4)$. We can pick any two of these to get a sum of 8. Hence the answer is 3.