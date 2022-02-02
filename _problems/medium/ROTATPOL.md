---
{"category_name":"medium","problem_code":"ROTATPOL","problem_name":"Rotate the Polyline","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":"3 - 5","source_sizelimit":50000,"problem_author":"tautsjasiunsas","problem_tester":"","date_added":"22-07-2020","tags":{"0":"tautsjasiunsas"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"","time":{"view_start_date":1600075802,"submit_start_date":1600075802,"visible_start_date":1600075802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ROTATPOL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/SEPT20/hindi/ROTATPOL.pdf), [Bengali](https://www.codechef.com/download/translated/SEPT20/bengali/ROTATPOL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/SEPT20/mandarin/ROTATPOL.pdf), [Russian](https://www.codechef.com/download/translated/SEPT20/russian/ROTATPOL.pdf), and [Vietnamese](https://www.codechef.com/download/translated/SEPT20/vietnamese/ROTATPOL.pdf) as well.

Chef John is given $N$ points $\mathsf{P}_1, \mathsf{P}_2, \ldots, \mathsf{P}_N$ in a plane. For each valid $i$, the coordinates of the point $\mathsf{P}_i$ are $(x_i, y_i)$. Help him find a vector $\overrightarrow{v} = (x_v, y_v)$ such that the following holds:
- For each $i$ ($1 \le i \le N$), let $S_i = \overrightarrow{v} \cdot \overrightarrow{\mathsf{P}_i \mathsf{P}_{i+1}}$. Here, we define $\mathsf{P}_{N+1} = \mathsf{P}_1$.
- The coordinates $x_v$ and $y_v$ are integers and $|x_v|, |y_v| \le 2 \cdot 10^9$.
- It is possible to find three integers $w$, $l$ and $r$ ($1 \le l \le r \le N$) such that:
    - For each $i$ ($l \le i \le r$), $S_i w \gt 0$.
    - For each other valid $i$, $S_i w \lt 0$.

If there are multiple solutions, you may find any one. If there are no solutions, let's define $x_v = y_v = 0$. (Note that the vector $\overrightarrow{v} = (0, 0)$ cannot be a valid solution.)

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $x_i$ and $y_i$.

### Output
For each test case, print a single line containing two space-separated integers $x_v$ and $y_v$.

### Constraints
- $1 \le T \le 5$
- $3 \le N \le 10^5$
- $|x_i|, |y_i| \le 5 \cdot 10^8$ for each valid $i$
- $\mathsf{P}_1, \mathsf{P}_2, \ldots, \mathsf{P}_N$ are pairwise distinct

### Subtasks
**Subtask #1 (50 points, time limit 3 seconds):** $N \le 1,000$

**Subtask #2 (50 points, time limit 5 seconds):** original constraints

### Example Input
```
2
5
0 0
1 -1
2 3
4 0
3 7
4
0 0
0 1
1 1
1 0
```

### Example Output
```
-5 1
2 -1
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>