---
{"category_name":"easy","problem_code":"VSN","problem_name":"Vision","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"nots0fast","problem_tester":"mgch","date_added":"4-04-2018","tags":{"0":"binary","1":"cross","2":"easy","3":"geometry","4":"june18","5":"likecs","6":"nots0fast","7":"nots0fast"},"time":{"view_start_date":1528709405,"submit_start_date":1528709405,"visible_start_date":1528709405,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/JUNE18/mandarin/VSN.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/JUNE18/russian/VSN.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/JUNE18/vietnamese/VSN.pdf" target="_blank">Vietnamese</a> as well.</h3>

You are given two points $P$ and $Q$ and an opaque sphere in a three-dimensional space. The point $P$ is not moving, while $Q$ is moving in a straight line with constant velocity. You are also given a direction vector $d$ with the following meaning: the position of $Q$ at time $t$ is $Q(t) = Q(0) + d \cdot t$, where $Q(0)$ is the initial position of $Q$.

It is guaranteed that $Q$ is not visible from $P$ initially (at time $t=0$). It is also guaranteed that $P$ and $Q$ do not touch the sphere at any time.

Find the smallest positive time $t_v$ when $Q$ is visible from $P$, i.e. when the line segment connecting points $P$ and $Q$ does not intersect the sphere.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains 13 space-separated integers.
    - The first three integers $P_x, P_y, P_z$ denote the coordinates of $P$.
    - The next three integers $Q_x, Q_y, Q_z$ denote the initial coordinates of $Q$.
    - The next three integers $d_x, d_y, d_z$ denote the components of the direction vector $d$.
    - The last four integers $c_x, c_y, c_z, r$ denote the coordinates of the centre of the sphere and its radius.

### Output
For each test case, print a single line containing one real number — the time $t_v$. Your answer will be considered correct if its absolute or relative error does not exceed $10^{-6}$. It is guaranteed that $t_v$ exists and does not exceed $10^9$.

### Constraints
- $1 \le T \le 10^5$
- the absolute values of coordinates of all points do not exceed $2\cdot10^9$
- $1 \le r \le 10^9$

### Subtasks
**Subtask #1 (25 points):** $P_z = Q_z = d_z = c_z = 0$

**Subtask #2 (75 points):** original constraints

### Example Input
```
1
3 0 0 -10 -10 0 0 10 0 0 -3 0 3
```

### Example Output
```
1.0000000000
```
