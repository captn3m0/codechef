---
{"category_name":"easy","problem_code":"NBONACCI","problem_name":"XOR N-bonacci Sequence","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"erfaniaa","problem_tester":null,"date_added":"16-03-2019","tags":{"0":"cook104","1":"easye","2":"erfaniaa"},"editorial_url":"https://discuss.codechef.com/problems/NBONACCI","time":{"view_start_date":1553452200,"submit_start_date":1553452200,"visible_start_date":1553452200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/COOK104/hindi/NBONACCI.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/COOK104/mandarin/NBONACCI.pdf),
[Vietnamese](http://www.codechef.com/download/translated/COOK104/vietnamese/NBONACCI.pdf) and [Bengali](http://www.codechef.com/download/translated/COOK104/bengali/NBONACCI.pdf) as well.

An *$N$-bonacci sequence* is an infinite sequence $F_1, F_2, \ldots$ such that for each integer $i \gt N$, $F_i$ is calculated as $f(F_{i-1}, F_{i-2}, \ldots, F_{i-N})$, where $f$ is some function. A *XOR $N$-bonacci sequence* is an $N$-bonacci sequence for which $f(F_{i-1}, F_{i-2}, \ldots, F_{i-N}) = F_{i-1} \oplus F_{i−2} \oplus \ldots \oplus F_{i−N}$, where $\oplus$ denotes the [bitwise XOR operation](https://en.wikipedia.org/wiki/Bitwise_operation#XOR).

Recently, Chef has found an interesting sequence $S_1, S_2, \ldots$, which is obtained from prefix XORs of a XOR $N$-bonacci sequence $F_1, F_2, \ldots$. Formally, for each positive integer $i$, $S_i = F_1 \oplus F_2 \oplus \ldots \oplus F_i$. You are given the first $N$ elements of the sequence $F$, which uniquely determine the entire sequence $S$.

You should answer $Q$ queries. In each query, you are given an index $k$ and you should calculate $S_k$. It is guaranteed that in each query, $S_k$ does not exceed $10^{50}$.

### Input
- The first line of the input contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $F_1, F_2, \ldots, F_N$.
- The following $Q$ lines describe queries. Each of these lines contains a single integer $k$.

### Output
For each query, print a single line containing one integer $S_k$.

### Constraints
- $1 \le N, Q \le 10^5$
- $0 \le F_i \le 10^9$ for each $i$ such that $1 \le i \le N$
- $1 \le k \le 10^9$

### Example Input
```
3 4
0 1 2
7
2
5
1000000000
```

### Example Output
```
3
1
0
0
```
