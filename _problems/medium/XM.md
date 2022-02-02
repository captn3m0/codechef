---
{"category_name":"medium","problem_code":"XM","problem_name":"XOR Magic","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"vivek_1998299","problem_tester":null,"date_added":"17-05-2019","tags":{"0":"dynamic","1":"ltime72","2":"precomputation","3":"prefix","4":"taran_1407","5":"vivek_1998299"},"time":{"view_start_date":1558803600,"submit_start_date":1558803600,"visible_start_date":1558803600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/LTIME72/hindi/XM.pdf), [Bengali](http://www.codechef.com/download/translated/LTIME72/bengali/XM.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME72/mandarin/XM.pdf), [Russian](http://www.codechef.com/download/translated/LTIME72/russian/XM.pdf), and [Vietnamese](http://www.codechef.com/download/translated/LTIME72/vietnamese/XM.pdf) as well.

Vivek loves to play with sequences and XORs, so he challenges you to solve the following problem.

You are given a sequence $A_1, A_2, \ldots, A_N$. You should answer $Q$ queries. In each query, you are given a subsequence $A_L, A_{L+1}, \ldots, A_R$; the answer to this query is $\sum_{i=L}^R A_i \oplus (i-L)$, where $\oplus$ denotes the bitwise XOR operator.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- The next $Q$ lines describe queries. Each of these lines contains two space-separated integers $L$ and $R$.

### Output
For each query, print a single line containing one integer ― the answer to the query.

### Constraints 
- $1 \le T \le 10$
- $1 \le N \le 10^5$
- $1 \le Q \le 10^5$
- $1 \le A_i \le 10^9$ for each valid $i$
- $1 \le L \le R \le N$

### Subtasks
**Subtask #1 (30 points):** $1 \le N, Q \le 1,000$

**Subtask #2 (70 points):** original constraints

### Example Input
```
1
3 2
3 1 2
1 3
2 3
```

### Example Output
```
3
4
```

### Explanation
The answer to the first query is $A_1 \oplus 0 + A_2 \oplus 1 + A_3 \oplus 2 = 3$.
