---
{"category_name":"medium","problem_code":"BINSTR","problem_name":"Binary Strings","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"smelskiy","problem_tester":null,"date_added":"30-10-2018","tags":{"0":"implementation","1":"medium","2":"nov18","3":"persistence","4":"segment","5":"smelskiy","6":"taran_1407","7":"trie"},"editorial_url":"https://discuss.codechef.com/problems/BINSTR","time":{"view_start_date":1542015002,"submit_start_date":1542015002,"visible_start_date":1542015002,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Hindi](http://www.codechef.com/download/translated/NOV18/hindi/BINSTR.pdf) , [Vietnamese](http://www.codechef.com/download/translated/NOV18/vietnamese/BINSTR.pdf) , [Mandarin Chinese](http://www.codechef.com/download/translated/NOV18/mandarin/BINSTR.pdf) , [Russian](http://www.codechef.com/download/translated/NOV18/russian/BINSTR.pdf) and [Bengali](http://www.codechef.com/download/translated/NOV18/bengali/BINSTR.pdf) as well.

In ShareChat, there is a sequence of binary integers $A_1, A_2, \ldots, A_N$. You should answer $Q$ queries on this sequence. In each query, you are given two indices $L$ and $R$ and a binary integer $X$.

The answer to a query is the smallest index $i$ ($L \le i \le R$) such that the value $A_i \oplus X$ is maximum possible, i.e. equal to $\mathrm{max}(A_L \oplus X, A_{L+1} \oplus X, \ldots, A_R \oplus X)$. Here, $\oplus$ denotes the bitwise XOR operation.

### Input
- The first line of the input contains two space-separated integers $N$ and $Q$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains a single binary string denoting the number $A_i$ (in binary representation).
- The following $Q$ lines describe queries. Each of these lines contains two space-separated integers $L$ and $R$, followed by a space and a binary string denoting the number $X$ (in binary representation).

### Output
For each query, print a single line containing one integer — the answer to that query.

### Constraints
- $1 \le N \le 10^5$
- $1 \le Q \le 10^5$
- $1 \le A_i$ for each valid $i$
- $1 \le L \le R \le N$
- $1 \le X$
- the sum of lengths of strings denoting $A_1, A_2, \ldots, A_N$ does not exceed $10^6$
- the sum of lengths of strings denoting $X$ over all queries does not exceed $10^6$

### Subtasks
**Subtask #1 (33 points):** all binary strings on the input have equal lengths

**Subtask #2 (67 points):** original constraints 

### Example Input
```
5 4
100
101
1
1011
11
2 3 10
1 5 1100
3 5 1010
1 5 11100
```

### Example Output
```
2
5
3
5
```
