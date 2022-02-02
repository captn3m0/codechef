---
{"category_name":"medium","problem_code":"CUTPLANT","problem_name":"Cutting Plants","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"step_by_step","problem_tester":null,"date_added":"30-01-2018","tags":{"0":"april18","1":"data","2":"deque","3":"medium","4":"segment","5":"sqrt","6":"step_by_step"},"editorial_url":"https://discuss.codechef.com/problems/CUTPLANT","time":{"view_start_date":1523957400,"submit_start_date":1523957400,"visible_start_date":1523957400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/APRIL18/mandarin/CUTPLANT.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/APRIL18/russian/CUTPLANT.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/APRIL18/vietnamese/CUTPLANT.pdf">Vietnamese</a> as well.</h3>

Daniil is a royal gardener. He takes care of a garden with $N$ plants numbered $1$ through $N$. For each $i$ ($1 \le i \le N$), the initial height of the $i$-th plant is $A_i$. Unfortunately, the Queen doesn't like the garden, so she asked Daniil to cut some plants — in order to satisfy the Queen's request, the $i$-th plant should have height $B_i$ (for each $1 \le i \le N$).

Daniil is allowed to perform the following operation an arbitrary number of times (including zero):
- Let's denote the current heights of plants by $H_1, H_2, \dots, H_N$.
- Choose two indices $L$ and $R$ ($1 \le L \le R \le N$) and a new height $h$ such that $h \le H_i$ for each $i$ between $L$ and $R$ inclusive.
- Cut plants $L$ through $R$ down to height $h$, i.e. change the height of plant $i$ to $h$ for each $L \le i \le R$.

Some time ago, Daniil was one of the best competitive programmers. Therefore, he is interested in the minimum number of operations needed to satisfy the Queen's request. Can you help him?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$ denoting the number of plants.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$ denoting the initial heights of plants.
- The third line contains $N$ space-separated integers $B_1, B_2, \dots, B_N$ denoting the final heights of plants.

### Output
For each test case, print a single line containing one integer — the minimum number of operations needed to obtain the desired sequence of heights or $-1$ if it is impossible.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 10^5$
- $1 \le A_i, B_i \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (30 points):** 
- $1 \le N \le 1,000$
- the initial heights of all plants are identical

**Subtask #2 (30 points):** $1 \le N \le 1,000$

**Subtask #3 (40 points):** original constraints

### Example Input
<pre><tt>
4
3
3 1 3
2 1 2
7
1 3 4 5 1 2 3
1 2 1 2 1 1 1
3
2 3 9
2 3 9
2
1 2
2 1
</tt></pre>

### Example Output
<pre><tt>
2
3
0
-1
</tt></pre>

### Explanation
**Example case 1:**
Daniil can perform two operations: reduce the height of the first plant to $2$ and reduce the height of the third plant to $2$. Note that it is not possible to reduce the heights of all three plants to $2$ in one operation, because the second plant's height is less than $2$. We need two operations, thus the answer is $2$.

**Example case 2:**
In the first operation, cut the plants in the interval $[2, 4]$ down to height $2$. Afterwards, cut the third plant down to height $1$. Finally, cut the plants in the interval $[6, 7]$.

**Example case 3:**
All plants already have the desired heights, so the answer is $0$.

**Example case 4:**
It is impossible to achieve the desired sequence of heights.
