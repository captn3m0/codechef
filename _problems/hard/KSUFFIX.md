---
{"category_name":"hard","problem_code":"KSUFFIX","problem_name":"K-th Lexicographical Suffix","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"chemthan","problem_tester":null,"date_added":"7-02-2019","tags":{"0":"chemthan"},"time":{"view_start_date":1550311200,"submit_start_date":1550311200,"visible_start_date":1550311200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/SNCKFL19/hindi/KSUFFIX.pdf), [Bengali](http://www.codechef.com/download/translated/SNCKFL19/bengali/KSUFFIX.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKFL19/mandarin/KSUFFIX.pdf), [Russian](http://www.codechef.com/download/translated/SNCKFL19/russian/KSUFFIX.pdf), and [Vietnamese](http://www.codechef.com/download/translated/SNCKFL19/vietnamese/KSUFFIX.pdf) as well.

You are given an integer sequence $a_1, a_2, \ldots, a_N$ and an integer $M$.

You should answer $Q$ queries. In each query:
- You are given two integers $d$ and $k$. Let's define a modified sequence $b_1, b_2, \ldots, b_N$ as $b_i = (a_i + d) \% M$ for each valid $i$.
- Next, for each $i$ ($1 \le i \le N$), let's define the $i$-th suffix of this sequence as the subsequence $b_i, b_{i+1}, \ldots, b_N$.
- The answer to this query is the number of the $k$-th lexicographically smallest suffix of sequence $b$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $M$ and $Q$. 
- The second line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.
- Each of the following $Q$ lines contains two space-separated integers $d$ and $k$ describing a query.

### Output
For each query, print a single line containing one integer — the answer to that query.

### Constraints 
- $1 \le T \le 10^5$
- $1 \le N, Q$
- the sum of $N$ over all test cases does not exceed $10^5$
- the sum of $Q$ over all test cases does not exceed $5 \cdot 10^5$
- $1 \le M \le 10^9$
- $0 \le a_i \lt M$ for each valid $i$
- $0 \le d \le 10^9$
- $1 \le k \le N$

### Example Input
```
1
5 6 3
1 4 2 1 1
4 4
2 3
1 1
```

### Example Output
```
1
1
5
```

### Explanation
In the first query, the sequence $b$ is $[5, 2, 0, 5, 5]$. The lexicographically sorted sequence of its suffixes is $[0, 5, 5], [2, 0, 5, 5], [5], [5, 2, 0, 5, 5], [5, 5]$, so the answer is suffix number $1$: $[5, 2, 0, 5, 5]$.

In the second query, the sequence $b$ is $[3, 0, 4, 3, 3]$.

In the third query, the sequence $b$ is $[2, 5, 3, 2, 2]$.
