---
{"category_name":"medium","problem_code":"MATCH2","problem_name":"Match the Streams","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"teja349","problem_tester":null,"date_added":"29-09-2018","tags":{"0":"binary","1":"data","2":"ltime64","3":"medium","4":"mergesort","5":"taran_1407","6":"teja349"},"editorial_url":"https://discuss.codechef.com/problems/MATCH2","time":{"view_start_date":1538240402,"submit_start_date":1538240402,"visible_start_date":1538240402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Bengali](http://www.codechef.com/download/translated/LTIME64/bengali/MATCH2.pdf) , [Mandarin chinese](http://www.codechef.com/download/translated/LTIME64/mandarin/MATCH2.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME64/russian/MATCH2.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME64/vietnamese/MATCH2.pdf) as well.


You are given two integer sequences $A_1, A_2, \dots, A_N$ and $B_1, B_2, \dots, B_N$.

We define the *similarity* of the sequences $A$ and $B$ as the number of indices $i$ such that $A_i = B_i$.

You should process $Q$ queries. In each query, you are given parameters $l$, $r$ and $c$; you should change each of the elements $A_l, A_{l+1}, \dots, A_r$ to $c$, and then compute the similarity of the sequences $A$ and $B$.

Chef knows that this is simple, so he asks you to answer the queries online. Note that the input is given in a special format to ensure that.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.
- The third line contains $N$ space-separated integers $B_1, B_2, \dots, B_N$.
- Each of the next $Q$ lines contains three space-separated integers $x$, $y$ and $z$ describing a query in the following format:
    - Let's denote the similarity of $A$ and $B$ before this query by $P_r$ (for the first query, $P_r$ is the similarity of the initial sequences).
    - For this query, $l = x \oplus P_r$, $r = y \oplus P_r$ and $c = z \oplus P_r$.

### Output
For each query, print a single line containing one integer — the similarity after this query.

### Constraints
- $1 \le T \le 5$
- $1 \le N, Q \le 10^5$
- $1 \le A_i, B_i \le 10^9$ for each valid $i$
- $1 \le c \le 10^9$
- $1 \le l \le r \le N$

### Subtasks
**Subtask 1 (20 points):** $1 \le N, Q \le 2,000$

**Subtask 2 (80 points):** original constraints

### Example Input
```
1
4 3
1 2 3 4
1 1 3 5
0 1 0
0 5 3
1 4 1
```

### Example Output
```
1
0
2
```

### Explanation
**Example case 1:** The similarity before any query is applied is $2$ (the sequences match at positions $1$ and $3$).

In the first query, $l = 2$, $r=3$, $c=2$. The similarity after this query is $1$ (the only match is at position $1$).

In the second query, $l = 1$, $r=4$, $c=2$. The similarity after this query is $0$ (no match at any position).

In the third query, $l = 1$, $r=4$, $c=1$. The similarity after this query is $2$ (two matches at positions $1$ and $2$).
