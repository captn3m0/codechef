---
{"category_name":"easy","problem_code":"GEARS","problem_name":"Gears","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"andreab3301","problem_tester":null,"date_added":"30-06-2018","tags":{"0":"andreab3301","1":"july18","2":"medium"},"editorial_url":"https://discuss.codechef.com/problems/GEARS","time":{"view_start_date":1531733410,"submit_start_date":1531733410,"visible_start_date":1531733410,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/mandarin/GEARS.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/russian/GEARS.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/vietnamese/GEARS.pdf">Vietnamese</a> as well.</h3>



You are given $N$ gears numbered $1$ through $N$. For each valid $i$, gear $i$ has $A_i$ teeth. In the beginning, no gear is connected to any other. Your task is to process $M$ queries and simulate the gears' mechanism. There are three types of queries:
- Type 1: Change the number of teeth of gear $X$ to $C$.
- Type 2: Connect two gears $X$ and $Y$.
- Type 3: Find the speed of rotation of gear $Y$ if gear $X$ rotates with speed $V$.

It is known that if gear $i$ is directly connected to gear $j$ and gear $i$ rotates with speed $V$, then gear $j$ will rotate with speed $-V A_i / A_j$, where the sign of rotation speed denotes the direction of rotation (so minus here denotes rotation in the opposite direction). You may also notice that gears can be blocked in some cases. This happens when some gear would have to rotate in different directions. If a gear is connected to any blocked gear, it is also blocked. For example, if three gears are connected to each other, this configuration can not rotate at all, and if we connect a fourth gear to these three, it will also be blocked and not rotate.

### Input
- The first line of the input contains two space-separated integers $N$ and $M$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.
- The following $M$ lines describe queries. Each of these lines begins with an integer $T$ denoting the type of the current query.
    - If $T = 1$, it is followed by a space and two space-separated integers $X$ and $C$.
    - If $T = 2$, it is followed by a space and two space-separated integers $X$ and $Y$.
    - If $T = 3$, it is followed by a space and three space-separated integers $X$, $Y$ and $V$.

### Output
For each query of type 3, print a single line containing two integers separated by a slash '/' — the numerator and denominator of the rotation speed of the given gear expressed as an irreducible fraction (even if this speed is an integer), or $0$ if the gear does not rotate at all.

### Constraints 
- $1 \le N \le 10^5$
- $1 \le M \le 2\cdot 10^5$
- $6 \le A_i \le 10^6$ for each valid $i$
- $1 \le X, Y \le N$
- $1 \le C, V \le 10^6$

### Subtasks
**Subtask #1 (30 points):**
- $N \le 2,000$
- $M \le 5,000$

**Subtask #2 (70 points):** original constraints

### Example Input
```
4 10
6 8 10 13
3 1 2 2
2 1 2
3 1 2 3
2 2 3
1 1 7
3 1 3 10
2 3 1
3 1 3 2
2 1 4
3 1 4 6
```

### Example Output
```
0
-9/4
7/1
0
0
```

### Explanation
For the first query of type 3, there are no connections between gears, so the answer is $0$.

For the second query of type 3, we can calculate the rotation speed using the formula $-3\cdot\frac{6}{8} = \frac{-9}{4}$.

For the third query of type 3, we can use the formula twice, so the speed of the second gear is $-10\cdot\frac{7}{8} = -\frac{35}{4}$, and the speed of the third gear is $-(-\frac{35}{4})\frac{8}{10} = \frac{7}{1}$.

For the last query of type 3, all gears are blocked.
