---
{"category_name":"hard","problem_code":"FCTR","problem_name":"Factorize","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"rajat1603","problem_tester":null,"date_added":"25-08-2018","tags":{"0":"carmichael","1":"euler","2":"factorization","3":"hard","4":"math","5":"rajat1603","6":"sept18"},"editorial_url":"https://discuss.codechef.com/problems/FCTR","time":{"view_start_date":1537176602,"submit_start_date":1537176602,"visible_start_date":1537176602,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Hindi](http://www.codechef.com/download/translated/SEPT18/hindi/FCTR.pdf) ,[Bengali](http://www.codechef.com/download/translated/SEPT18/bengali/FCTR.pdf) , [Mandarin chinese](http://www.codechef.com/download/translated/SEPT18/mandarin/FCTR.pdf) , [Russian](http://www.codechef.com/download/translated/SEPT18/russian/FCTR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SEPT18/vietnamese/FCTR.pdf) as well.


The Euler totient function $\varphi(N)$ is defined as the number of integers between $1$ and $N$ (inclusive) which are coprime with $N$.

You are given $N$ and $\varphi(N)$. Calculate the prime factorization of $N$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $N$ and $\varphi(N)$.

### Output
For each test case, print a line containing a single integer $K$ — the number of distinct prime factors of $N$. Then, print $K$ lines. For each valid $i$, the $i$-th of these lines should contain two space-separated integers $p_i$ and $e_i$ denoting a prime divisor of $N$ and its exponent. Specifically, the following conditions should hold:
- $N = \prod_{i=1}^{K} p_i^{e_i}$
- $p_i \lt p_{i+1}$ for each valid $i$
- $e_i \gt 0$ for each valid $i$

### Constraints 
- $1 \le T \le 10$
- $2 \le N \le 10^{500}$

### Subtasks
**Subtask #1 (5 points):** $2 \le N \le 10^{14}$

**Subtask #2 (25 points):** $2 \le N \le 10^{50}$

**Subtask #3 (70 points):** $2 \le N \le 10^{500}$

### Example Input
```
2
6 2
8 4
```

### Example Output
```
2
2 1
3 1
1
2 3
```
