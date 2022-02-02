---
{"category_name":"hard","problem_code":"POLCHAIN","problem_name":"Polygon Chain","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":null,"date_added":"6-02-2020","tags":{"0":"feb20","1":"geometry","2":"hard","3":"jtnydv25","4":"tmwilliamlin"},"problem_difficulty_level":"Hard","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/POLCHAIN","time":{"view_start_date":1136053800,"submit_start_date":1136053800,"visible_start_date":1136053800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=POLCHAIN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/FEB20/hindi/POLCHAIN.pdf), [Bengali](https://www.codechef.com/download/translated/FEB20/bengali/POLCHAIN.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/FEB20/mandarin/POLCHAIN.pdf), [Russian](https://www.codechef.com/download/translated/FEB20/russian/POLCHAIN.pdf), and [Vietnamese](https://www.codechef.com/download/translated/FEB20/vietnamese/POLCHAIN.pdf) as well.

A polygon $T$ is said to be *inside* a polygon $S$ if all points that lie strictly inside $T$ (not on the perimeter of $T$) also lie strictly inside $S$.

A multiset of polygons $\{Q_1, Q_2, \ldots, Q_r\}$ is said to *form a chain* if there is a permutation $p_1, p_2, \ldots, p_r$ of the integers $1$ through $r$ such that for each $i$ ($1 \le i \lt r$), $Q_{p_i}$ is inside $Q_{p_{i+1}}$.

You are given $N$ convex polygons $P_1, P_2, \ldots, P_N$ in a 2D Cartesian coordinate system. Every $10^{-100}$ seconds, you may choose one of the polygons and translate it by upto $10^{-100}$ either along the $x$-axis or along the $y$-axis.

Find the minimum amount of time necessary to make all $N$ polygons form a chain or decide that it is impossible.

### Input
- The first line of the input contains a single integer $N$. The descriptions of $N$ polygons follow.
- For each polygon:
    - The first line contains a single integer $M$ denoting the number of its vertices.
    - The following $M$ lines describe the vertices in counterclockwise order. Each of these lines contains two space-separated integers $x$ and $y$ denoting the coordinates of one vertex.

### Output
If it is impossible to make the polygons form a chain, print a single line containing the integer $-1$.

Otherwise, print a single line containing one real number ― the minimum amount of time. Your answer will be considered correct if its absolute or relative error does not exceed $10^{-6}$.

### Constraints
- $2 \le N \le 20$
- the sum of $M$ over all polygons does not exceed $100$
- $|x|, |y| \le 100$

### Subtasks
**Subtask #1 (10 points):** $N = 2$ and both polygons are axis-aligned rectangles

**Subtask #2 (20 points):** $N = 2$

**Subtask #3 (20 points):** all polygons are axis-aligned rectangles

**Subtask #4 (50 points):** original constraints

### Example Input
```
2
4
1 3
2 2
3 3
2 4
4
0 0
2 0
2 2
0 2
```

### Example Output
```
3
```

### Explanation
**Example case 1:** Both $P_1$ and $P_2$ are squares. If we move $P_2$ by $1$ unit in the $x$-direction and by $2$ units in the $y$-direction, the vertices of $P_1$ become the midpoints of edges of $P_2$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>