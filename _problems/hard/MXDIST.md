---
{"category_name":"hard","problem_code":"MXDIST","problem_name":"Maximum Distance","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":"1.5 - 5","source_sizelimit":50000,"problem_author":"bciobanu","problem_tester":null,"date_added":"31-12-2018","tags":{"0":"bciobanu","1":"convex","2":"hard","3":"jan19","4":"rmq","5":"rotating","6":"sqrt","7":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/MXDIST","time":{"view_start_date":1547458202,"submit_start_date":1547458202,"visible_start_date":1547458202,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problem statements in [Hindi](http://www.codechef.com/download/translated/JAN19/hindi/MXDIST.pdf), [Bengali](http://www.codechef.com/download/translated/JAN19/bengali/MXDIST.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/JAN19/mandarin/MXDIST.pdf), [Russian](http://www.codechef.com/download/translated/JAN19/russian/MXDIST.pdf), and [Vietnamese](http://www.codechef.com/download/translated/JAN19/vietnamese/MXDIST.pdf) as well.

You are given $N$ points $(x_1, y_1), (x_2, y_2), \ldots, (x_N, y_N)$.

You should answer $Q$ queries. In each query, you are given a range $[f, t]$. Consider the points $(x_f, y_f), (x_{f+1}, y_{f+1}), \ldots, (x_t, y_t)$; the answer to a query is the square of the maximum Euclidean distance between any two of these points.

### Input
- The first line of the input contains a single integer $N$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains two space-separated integers $x_i$ and $y_i$.
- The next line contains a single integer $Q$.
- Each of the next $Q$ lines contains two space-separated integers $f$ and $t$ describing a query.

### Output
For each query, print a single line containing one integer — the squared maximum distance.

### Constraints 
- $1 \le N, Q \le 2 \cdot 10^5$
- $1 \le f \le t \le N$
- $0 \le x_i, y_i \le 2 \cdot 10^5$ for each valid $i$

### Subtasks
**Subtask #1 (15 points):** $1 \le N, Q \le 3,000$, **TL=1.5s**

**Subtask #2 (35 points):** the coordinates of all points are chosen uniformly randomly, **TL=5s**

**Subtask #3 (50 points):** original constraints, **TL=5s**
 
### Example Input
```
11
1 2
2 2
3 0
3 1
3 3
3 4
3 1
3 0
3 3
4 2
5 2
5
5 11
9 11
3 8
4 7
9 10
```

### Example Output
```
16
5
16
9
2
```
