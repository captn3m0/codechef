---
{"category_name":"medium","problem_code":"MEXRNG","problem_name":"MEX and Ranges","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"fekete","problem_tester":null,"date_added":"27-07-2018","tags":{"0":"fekete","1":"fekete","2":"likecs","3":"ltime62","4":"medium","5":"mex","6":"sqrt"},"editorial_url":"https://discuss.codechef.com/problems/MEXRNG","time":{"view_start_date":1532797200,"submit_start_date":1532797200,"visible_start_date":1532797200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/LTIME62/hindi/MEXRNG.pdf" target="_blank">Hindi,</a>
<a href="http://www.codechef.com/download/translated/LTIME62/mandarin/MEXRNG.pdf" target="_blank">Mandarin chinese</a>
, <a href="http://www.codechef.com/download/translated/LTIME62/russian/MEXRNG.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/LTIME62/vietnamese/MEXRNG.pdf" target="_blank">Vietnamese</a> as well.</h3>


You are given a sequence of integers $a_1, a_2, \dots, a_n$. You should answer $m$ queries on this sequence.

Each query is described by two indices $l$ and $r$. The answer to a query can be computed as follows:
- for each element of the subsequence $a_l, a_{l + 1}, \dots a_r$, compute its number of occurrences in this subsequence
- create a new set $occ$ containing each number of occurrences computed in the previous step
- the answer is the minimum excluded element of the set $occ$, i.e. the smallest positive integer which does not appear in the set $occ$

Your task is to calculate the answers to all queries. Note that the input is encoded so that you have to answer the queries online — you only know each query (except the first one) after answering all previous queries.

### Input
- The first line of the input contains two space-separated integers $n$ and $m$.
- The second line contains $n$ space-separated integers $a_1, a_2, \dots, a_n$.
- The following $m$ lines describe queries. Each of these lines contains two space-separated integers $x$ and $y$. Let $a$ be the answer to the previous query (or $a=0$ for the first query); the parameters $l$ and $r$ of the current query can be computed as $l = x \oplus a$ and $r = y \oplus a$.

Note that  $x \oplus y$ denotes bitwise XOR operation.

### Output
For each query, print a single line containing one integer — the answer to the query.

### Constraints 
- $1 \le n, m \le 10^5$
- $1 \le a_i \le 10^9$ for each valid $i$
- $0 \le x, y \lt 2n$
- $1 \le l \le r \le n$, where $l = x \oplus prevAns, r = y \oplus prevAns$

### Subtasks
**Subtask #1 (20 points):** $1 \le n, m \le 10,000$

**Subtask #2 (80 points):** original constraints

### Example Input
```
10 3
1 1 2 3 4 2 3 3 1 5
1 10
5 1
11 9
```

### Example Output
```
4
3
2
```

### Explanation
In the first query, $l=1$ and $r=10$. The elements $4$ and $5$ have the number of occurrences equal to $1$, the element $2$ has number of occurrences $2$ and the elements $1$ and $3$ have numbers of occurrences $3$, so the answer — the minimum excluded element — is $4$.

In the second query, $l=1$ and $r=5$, so $occ$ contains only integers $1$ and $2$ and the answer is $3$.

In the third query, $l=8$ and $r=10$, all elements of $a_8, a_9, a_{10}$ are unique, so the answer is $2$.
