---
{"category_name":"easy","problem_code":"DPAIRS","problem_name":"Distinct Pairs","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sanroylozan","problem_tester":null,"date_added":"31-12-2018","tags":{"0":"data","1":"easy","2":"jan19","3":"observations","4":"sanroylozan","5":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/DPAIRS","time":{"view_start_date":1547458202,"submit_start_date":1547458202,"visible_start_date":1547458202,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problem statements in [Hindi](http://www.codechef.com/download/translated/JAN19/hindi/DPAIRS.pdf), [Bengali](http://www.codechef.com/download/translated/JAN19/bengali/DPAIRS.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/JAN19/mandarin/DPAIRS.pdf), [Russian](http://www.codechef.com/download/translated/JAN19/russian/DPAIRS.pdf), and [Vietnamese](http://www.codechef.com/download/translated/JAN19/vietnamese/DPAIRS.pdf) as well.

Chef has two integer sequences $A_1, A_2, \ldots, A_N$ and $B_1, B_2, \ldots, B_M$. You should choose $N+M-1$ pairs, each in the form $(A_x, B_y)$, such that the sums $A_x + B_y$ are all pairwise distinct.

It is guaranteed that under the given constraints, a solution always exists. If there are multiple solutions, you may find any one.

### Input
- The first line of the input contains two space-separated integers $N$ and $M$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- The third line contains $M$ space-separated integers $B_1, B_2, \ldots, B_M$.

### Output
Print $N+M-1$ lines. Each of these lines should contain two space-separated integers $x$ and $y$ denoting that you chose a pair $(A_{x+1}, B_{y+1})$.

### Constraints
- $1 \le N, M \le 2 \cdot 10^5$
- $|A_i| \le 10^9$ for each valid $i$
- $|B_i| \le 10^9$ for each valid $i$
- $A_1, A_2, \ldots, A_N$ are pairwise distinct
- $B_1, B_2, \ldots, B_M$ are pairwise distinct

### Subtasks
**Subtask #1 (25 points):** $1 \le N, M \le 10^3$

**Subtask #2 (75 points):** original constraints

### Example Input
```
3 2
10 1 100
4 3
```

### Example Output
```
2 1
0 0
1 0
0 1
```

### Explanation
The chosen pairs and their sums are:
- $A_3 + B_2 = 100+3 = 103$
- $A_1 + B_1 = 10+4 = 14$
- $A_2 + B_1 = 1+4 = 5$
- $A_1 + B_2 = 10+3 = 13$

Since all sums are distinct, this is a correct output.
