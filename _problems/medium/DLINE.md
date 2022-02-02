---
{"category_name":"medium","problem_code":"DLINE","problem_name":"Drawing Lines","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"arpa","problem_tester":null,"date_added":"25-12-2018","tags":{"0":"arpa","1":"dynamic","2":"ltime67"},"editorial_url":"https://discuss.codechef.com/problems/DLINE","time":{"view_start_date":1546103100,"submit_start_date":1546103100,"visible_start_date":1546103100,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Mandarin](http://www.codechef.com/download/translated/LTM67TST/mandarin/DLINE.pdf) , [Bengali](http://www.codechef.com/download/translated/LTM67TST/bengali/DLINE.pdf) , [Hindi](http://www.codechef.com/download/translated/LTM67TST/hindi/DLINE.pdf) , [Russian](http://www.codechef.com/download/translated/LTM67TST/russian/DLINE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTM67TST/vietnamese/DLINE.pdf) as well.

There is an infinite sheet of paper and a pen. At any time, the pen may be placed above a point $(x, y)$ on the paper or touching it at a point $(x, y)$; in both cases, we call the point $(x, y)$ the *position* of the pen. The initial position of the pen is $(0, 0)$.

You may perform the following types of actions:
- move the pen down until it touches the paper
- lift the pen (if it was touching the paper); after this action, the pen is not touching the paper
- move the pen from its current position $(x, y)$ to $(x-1, y)$ or $(x+1, y)$
- move the pen from its current position $(0, y)$ to $(0, y+1)$

Actions of the first two types take no time, an action of the third type takes $1$ second and an action of the fourth type takes $1$ second. Each action may be performed any number of times. You may only move the pen for at most $P$ seconds in total.

Whenever the pen is moved from $(x_1, y_1)$ to $(x_2, y_2)$ while touching the paper, it draws a line segment between these points (inclusive). Drawing over a line segment repeatedly is allowed.

You are given $N$ *special* line segments; each of them is parallel with the $x$-axis. A special line segment is *fully drawn* if each point belonging to it also belongs to some drawn line segment. Your goal is to fully draw as many special line segments as possible in $P$ seconds. How many can you fully draw?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $P$.
- Each of the next $N$ lines contains three space-separated integers $y$, $s$ and $e$ denoting a special line segment between points $(s, y)$ and $(e, y)$ (including these points).

### Output
For each test case, print a single line containing one integer — the maximum number of special segments you can fully draw.

### Constraints
- $1 \le T \le 15$
- $1 \le N \le 1,000$
- $0 \le s \le e \le 10^6$
- $0 \le P \le 10^6$
- $0 \le y \le 2,000$
- the special line segments do not touch or intersect

### Subtasks
**Subtask #1 (10 points):** $1 \le N \le 10$

**Subtask #2 (90 points):** original constraints

### Example Input
```
4
1 2
0 1 2
3 13
1 1 2
3 1 3
1 3 4
3 14
1 1 2
3 1 3
1 3 4
4 10
1 3 4
1 1 2
2 1 2
2 3 4
```

### Example Output
```
1
2
3
3
```

### Explanation
