---
{"category_name":"easy","problem_code":"FAPF","problem_name":"Firdavs and Planet F","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"farhod_farmon","problem_tester":null,"date_added":"25-04-2019","tags":{"0":"easy","1":"farhod_farmon","2":"ltime71","3":"observations","4":"partial","5":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/FAPF","time":{"view_start_date":1556384402,"submit_start_date":1556384402,"visible_start_date":1556384402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/LTIME71/hindi/FAPF.pdf), [Bengali](http://www.codechef.com/download/translated/LTIME71/bengali/FAPF.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME71/mandarin/FAPF.pdf), [Russian](http://www.codechef.com/download/translated/LTIME71/russian/FAPF.pdf), and [Vietnamese](http://www.codechef.com/download/translated/LTIME71/vietnamese/FAPF.pdf) as well.

Firdavs is living on planet F. There are $N$ cities (numbered $1$ through $N$) on this planet; let's denote the value of city $i$ by $v_i$. Firdavs can travel directly from each city to any other city. When he travels directly from city $x$ to city $y$, he needs to pay $f(x, y) = |v_y-v_x|+y-x$ coins (this number can be negative, in which case he receives $-f(x, y)$ coins).

Let's define a simple path from city $x$ to city $y$ with length $k \ge 1$ as a sequence of cities $a_1, a_2, \ldots, a_k$ such that all cities in this sequence are different, $a_1 = x$ and $a_k = y$. The cost of such a path is $\sum_{i=1}^{k-1} f(a_i, a_{i+1})$.

You need to answer some queries for Firdavs. In each query, you are given two cities $x$ and $y$, and you need to find the minimum cost of a simple path from city $x$ to city $y$. Then, you need to find the length of the longest simple path from $x$ to $y$ with this cost.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $v_1, v_2, \ldots, v_N$.
- The following $Q$ lines describe queries. Each of these lines contains two space-separated integers $x$ and $y$.

### Output
For each query, print a single line containing two space-separated integers ― the minimum cost and the maximum length.

### Constraints
- $1 \le T \le 100$
- $1 \le N, Q \le 2 \cdot 10^5$
- $0 \le v_i \le 10^9$ for each valid $i$
- $1 \le x, y \le N$
- the sum of $N$ in all test cases does not exceed $5 \cdot 10^5$
- the sum of $Q$ in all test cases does not exceed $5 \cdot 10^5$

### Subtasks
**Subtask #1 (30 points):**
- $1 \le N, Q \le 1,000$
- $v_1 \lt v_2 \lt \ldots \lt v_N$
- the sum of $N$ in all test cases does not exceed $5,000$
- the sum of $Q$ in all test cases does not exceed $5,000$

**Subtask #2 (70 points):** original constraints

### Example Input
```
2
4 2
4 2 5 7
2 3
3 4
2 1
1 1
2 1
```

### Example Output
```
4 3
3 2
-1 2
```

### Explanation
**Example case 1:** For the first query, there are two paths with cost $4$ from city $2$ to city $3$:
- $2 \rightarrow 1 \rightarrow 3$: cost $(|4-2|+1-2)+(|5-4|+3-1) = 4$, length $3$
- $2 \rightarrow 3$: cost $|5-2|+3-2 = 4$, length $2$

All other paths have greater costs, so the minimum cost is $4$. Among these two paths, we want the one with greater length, which is $3$.
