---
{"category_name":"medium","problem_code":"CHEFCOMP","problem_name":"Chefina and Strange Tree","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3\r\n1 2\r\n2 3\r\n1 2 3\r\n1 2 3\r\n1 3 6\r\n3\r\n1 2\r\n1 3\r\n1 2 3\r\n5 6 3\r\n4 10 12","output":"1 2 3\r\n1 2 -1","explanation":"**Example case 1:** The process is as follows:\r\n- On day $1$, people from city $1$ eat $1$ fruit from each garden. Afterwards, there are $[0, 2, 5]$ fruits in the gardens of cities $[1, 2, 3]$ respectively, so the answer for city $1$ is $1$, since the number of fruits in this garden becomes zero on day $1$.\r\n- Then, on day $2$, people from city $2$ eat $2$ fruits from each of the gardens in cities $2$ and $3$. Afterwards, there are $0$ fruits in the garden of city $2$ (so the answer for city $2$ is $2$, since the number of fruits in this garden becomes zero on this day) and $3$ fruits in the garden of city $3$.\r\n- Finally, on day $3$, people from city $3$ eat $3$ fruits from the garden of city $3$, so the answer for city $3$ is $3$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"rishup_nitdgp","problem_tester":"","date_added":"17-07-2020","tags":{"0":"aug20","1":"binary","2":"daniel_1999","3":"depth","4":"disjoint","5":"dsu","6":"medium","7":"rishup_nitdgp","8":"rishup_nitdgp"},"problem_difficulty_level":"Medium-Hard","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/CHEFCOMP","time":{"view_start_date":1597656602,"submit_start_date":1597656602,"visible_start_date":1597656602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFCOMP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/AUG20/hindi/CHEFCOMP.pdf), [Bengali](https://www.codechef.com/download/translated/AUG20/bengali/CHEFCOMP.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/AUG20/mandarin/CHEFCOMP.pdf), [Russian](https://www.codechef.com/download/translated/AUG20/russian/CHEFCOMP.pdf), and [Vietnamese](https://www.codechef.com/download/translated/AUG20/vietnamese/CHEFCOMP.pdf).

In Chefland, there are $N$ cities (numbered $1$ through $N$) connected by $N-1$ bidirectional roads. Each city has exactly one garden. For each valid $i$, let's denote the population of the $i$-th city by $A_i$ and the initial number of fruits in its garden by $B_i$; also, at any time, let's denote the current number of fruits in its garden by $F_i$ ($F_i = B_i$ initially).

You are given a permutation $P$ of the integers $1$ through $N$. For each $i$ ($1 \le i \le N$), during the $i$-th of the next $N$ days, the people of the city $P_i$ do the following:
1. For each city $j$ which is reachable from the city $P_i$ (including the city $P_i$ itself), visit the city $j$ and consume $\mathrm{min}(A_{P_i}, F_j)$ fruits from the garden of the city $j$; afterwards, $F_j$ decreases by $\mathrm{min}(A_{P_i}, F_j)$.
2. Return to the city $P_i$ and cut off all the roads that are connecting it to other cities, so that nobody can visit the city $P_i$ or visit any other city from their city if it requires passing through the city $P_i$.

For each valid $i$, let $D_i$ be the first day when the number of fruits in the $i$-th city's garden becomes zero, or $-1$ if the fruits in its garden never end up all eaten. Find $D_1, D_2, \ldots, D_N$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- Each of the next $N-1$ lines contains two space-separated integers $u$ and $v$ denoting that vertices $u$ and $v$ are connected by an edge.
- The next line contains $N$ space-separated integers $P_1, P_2, \ldots, P_N$.
- The next line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- The last line contains $N$ space-separated integers $B_1, B_2, \ldots, B_N$.

### Output
For each test case, print a single line containing $N$ space-separated integers $D_1, D_2, \ldots, D_N$.

### Constraints
- $1 \le T \le 10^5$
- $1 \le N \le 2 \cdot 10^5$
- $1 \le u, v \le N$
- $1 \le P_i \le N$ for each valid $i$
- $1 \le A_i, B_i \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^5$

### Subtasks
**Subtask #1 (30 points):**
- $N \le 10^3$
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^3$

**Subtask #2 (70 points):** original constraints

### Example Input
```
2
3
1 2
2 3
1 2 3
1 2 3
1 3 6
3
1 2
1 3
1 2 3
5 6 3
4 10 12
```

### Example Output
```
1 2 3
1 2 -1
```

### Explanation
**Example case 1:** The process is as follows:
- On day $1$, people from city $1$ eat $1$ fruit from each garden. Afterwards, there are $[0, 2, 5]$ fruits in the gardens of cities $[1, 2, 3]$ respectively, so the answer for city $1$ is $1$, since the number of fruits in this garden becomes zero on day $1$.
- Then, on day $2$, people from city $2$ eat $2$ fruits from each of the gardens in cities $2$ and $3$. Afterwards, there are $0$ fruits in the garden of city $2$ (so the answer for city $2$ is $2$, since the number of fruits in this garden becomes zero on this day) and $3$ fruits in the garden of city $3$.
- Finally, on day $3$, people from city $3$ eat $3$ fruits from the garden of city $3$, so the answer for city $3$ is $3$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>