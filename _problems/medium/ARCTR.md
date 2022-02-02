---
{"category_name":"medium","problem_code":"ARCTR","problem_name":"Archi and Tree","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"barenuz","problem_tester":"mgch","date_added":"18-05-2018","tags":{"0":"barenuz","1":"barenuz","2":"convex","3":"hld","4":"june18","5":"likecs","6":"medium"},"time":{"view_start_date":1528709405,"submit_start_date":1528709405,"visible_start_date":1528709405,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/JUNE18/mandarin/ARCTR.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/JUNE18/russian/ARCTR.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/JUNE18/vietnamese/ARCTR.pdf" target="_blank">Vietnamese</a> as well.</h3>

Archi is a small boy from Uzhlyandia. For Chef's birthday, he prepared a tree with $N$ vertices (numbered $1$ through $N$). Each edge in this tree has a certain length.

There are $M$ speedsters on the tree, numbered $1$ through $M$. For each valid $i$, speedster number $i$ starts at time $t_i$ from vertex number $u_i$ and runs straight to vertex number $v_i$ with constant velocity $s_i$. Before time $t_i$, the speedster is not considered to be present in the tree.

Chef is interested in the following question: for each vertex, what is the smallest time when a speedster is present at this vertex?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- Each of the next $N-1$ lines contains three space-separated integers $u$, $v$ and $w$ denoting an edge between vertices $u$ and $v$ with length $w$.
- The next line contains a single integer $M$.
- For each valid $i$, the $i$-th of the next $M$ lines contains four space-separated integers $u_i$, $v_i$, $t_i$ and $s_i$ describing the $i$-th speedster.

### Output
For each test case, print $N$ lines. For each valid $i$, the $i$-th of these lines should contain a single real number — the minimum time when the $i$-th vertex is visited by a speedster, or $-1$ if it is never visited. Your answer will be considered correct if its absolute or relative error does not exceed $10^{-6}$.

### Constraints 
- $1 \le T \le 100$
- $1 \le N, M \le 2 \cdot 10^5$
- $1 \le u, v \le N$
- $1 \le w, t, s \le 10^9$
- the graph described on the input is a tree
- the sum of $N$ for all test cases does not exceed $2 \cdot 10^5$
- the sum of $M$ for all test cases does not exceed $2 \cdot 10^5$

### Subtasks
**Subtask #1 (10 points):**
- the sum of $N$ for all test cases does not exceed $5 \cdot 10^3$
- the sum of $M$ for all test cases does not exceed $5 \cdot 10^3$

**Subtask #2 (20 points):** the velocities of all speedsters are identical

**Subtask #3 (20 points):** the tree is a bamboo (a path)

**Subtask #4 (50 points):** original constraints

### Example Input
```
1
5
1 2 3
1 3 5
3 4 1
4 5 4
3
2 1 3 4
4 2 1 3
1 3 2 6
```

### Example Output
```
2.0000000
3.0000000
1.3333333
1.0000000
-1
```
