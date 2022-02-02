---
{"category_name":"medium","problem_code":"STRTF","problem_name":"Strange Transform","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"bciobanu","problem_tester":null,"date_added":"1-11-2018","tags":{"0":"bciobanu","1":"bitwise","2":"medium","3":"meet","4":"precomputation","5":"snckpe19","6":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/STRTF","time":{"view_start_date":1541269800,"submit_start_date":1541269800,"visible_start_date":1541269800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Russian](http://www.codechef.com/download/translated/S19PETST/russian/STRTF.pdf), [Vietnamese](http://www.codechef.com/download/translated/S19PETST/vietnamese/STRTF.pdf), [Hindi](http://www.codechef.com/download/translated/S19PETST/hindi/STRTF.pdf), [Mandarin chinese](http://www.codechef.com/download/translated/S19PETST/mandarin/STRTF.pdf) and [Bengali](http://www.codechef.com/download/translated/S19PETST/bengali/STRTF.pdf) as well.

You are given an integer sequence $A_1, A_2, \ldots, A_N$.

Let's define a transformation $f$. Applying $f$ on $A$ gives a new sequence $f(A) = [B_1, B_2, \ldots, B_N]$, where $B_N = A_N$ and $B_i = A_i \oplus A_{i+1}$ for each valid $i$.

Next, let's denote the sequence obtained by starting with $A$ and applying the transformation $k$ times by $f^k(A)$. Formally, $f^0(A) = A$ and $f^{k+1}(A) = f(f^k(A))$ for any integer $k \ge 0$.

You should answer $Q$ queries. In each query, you are given two integers $K$ and $X$; the answer to this query is $f^K(A)_X$, i.e. the $X$-th element of the sequence $f^K(A)$.

### Input
- The first line of the input contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- Each of the next $Q$ lines contains two space-separated integers $K$ and $X$ describing one query.

### Output
For each query, print a single line containing one integer — the answer to this query.

### Constraints 
- $1 \le N, Q \le 2 \cdot 10^5$ 
- $0 \le A_i \le 10^9$ for all valid $i$ 
- $0 \le K \le 10^9$
- $1 \le X \le N$ 

### Example Input
```
7 7
1 7 5 2 27 48 11
1 3
2 4
2 5
2 7
3 1
3 3
10000 7
```

### Example Output
```
7
50
16
11
1
44
11
```
