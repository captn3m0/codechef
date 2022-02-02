---
{"category_name":"easy","problem_code":"BUCKETS","problem_name":"Choosing from Buckets","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"arpa","problem_tester":null,"date_added":"25-12-2018","tags":{"0":"arpa","1":"dynamic","2":"ltime67","3":"probability"},"editorial_url":"https://discuss.codechef.com/problems/BUCKETS","time":{"view_start_date":1546103100,"submit_start_date":1546103100,"visible_start_date":1546103100,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Mandarin](http://www.codechef.com/download/translated/LTM67TST/mandarin/BUCKETS.pdf) , [Bengali](http://www.codechef.com/download/translated/LTM67TST/bengali/BUCKETS.pdf) , [Hindi](http://www.codechef.com/download/translated/LTM67TST/hindi/BUCKETS.pdf) , [Russian](http://www.codechef.com/download/translated/LTM67TST/russian/BUCKETS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTM67TST/vietnamese/BUCKETS.pdf) as well.

There are $N$ buckets numbered $1$ through $N$. The buckets contain balls; each ball has a color between $1$ and $K$. Let's denote the number of balls with color $j$ that are initially in bucket $i$ by $a_{i, j}$.

For each $i$ from $1$ to $N-1$ (in this order), someone draws a ball uniformly at random from bucket $i$ and puts it into bucket $i+1$, then continues to draw the next ball. After putting a ball in bucket $N$, this person draws a ball, again uniformly at random, from bucket $N$.

For each color from $1$ to $K$, find the probability that the ball drawn from bucket $N$ has this color.

### Input
- The first line of the input contains two space-separated integers $N$ and $K$. 
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains $K$ space-separated integers $a_{i, 1}, a_{i, 2}, \ldots, a_{i, K}$.

### Output
Print a single line containing $K$ space-separated real numbers. For each valid $i$, the $i$-th of these numbers should denote the probability that the last drawn ball has color $i$. your answer will be considered correct if absolute or relative error does not exceed $10^{-6}$

### Constraints 
- $1 \le N, K \le 1,000$
- $0 \le a_{i, j} \le 10$ for each valid $i, j$
- initially, there is at least one ball in bucket $1$

### Subtasks
**Subtask #1 (30 points):** $1 \le N, K \le 100$

**Subtask #2 (70 points):** original constraints

### Example Input
```
2 2
0 1
1 1
```

### Example Output
```
0.333333 0.666667
```

### Explanation
