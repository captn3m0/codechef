---
{"category_name":"medium","problem_code":"NRWP","problem_name":"Not a Real World Problem","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n2 2 3\r\n1 4\r\n-1 -2\r\n1 1 3\r\n1 2 1\r\n2 2 2","output":"12\r\n1 1 -1","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"carre","problem_tester":null,"date_added":"18-03-2020","tags":{"0":"carre","1":"carre","2":"may20","3":"medium","4":"mincut","5":"physics"},"problem_difficulty_level":"Medium-Hard","best_tag":"Medium Hard","editorial_url":"https://discuss.codechef.com/problems/NRWP","time":{"view_start_date":1589189402,"submit_start_date":1589189402,"visible_start_date":1589189402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=NRWP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/MAY20/hindi/NRWP.pdf), [Bengali](https://www.codechef.com/download/translated/MAY20/bengali/NRWP.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MAY20/mandarin/NRWP.pdf), [Russian](https://www.codechef.com/download/translated/MAY20/russian/NRWP.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MAY20/vietnamese/NRWP.pdf) as well.

Consider a grid with $H$ rows (numbered $1$ through $H$) and $W$ columns (numbered $1$ through $W$). Let's denote the value in a cell in row $i$ and column $j$ by $h_{i,j}$. $N$ particles (numbered $1$ through $N$) are distributed in the cells in such a way that there is at most one particle in each cell. For each valid $i$, the $i$-th particle has a value $p_i$ and it is placed in the cell in row $y_i$ and column $x_i$.

Let's denote the set of all particles by $P$ and the set of all unordered pairs of particles that are located in side-adjacent cells by $E$. We define the value of the grid as
$$V = \sum_{i \in P} p_i \cdot h_{y_i,x_i} + \sum_{(i,j) \in E} p_i \cdot p_j \,.$$

You are given the grid and the locations of all particles, but not their exact values ― only $\lvert p_1 \rvert, \lvert p_2 \rvert, \ldots, \lvert p_N \rvert$. Your task is to choose the sign of each value $p_i$ in such a way that the value $V$ is maximum possible. Each sign may be chosen independently from all other signs.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $H$, $W$ and $N$.
- $H$ lines follow. For each valid $i$, the $i$-th of these lines contains $W$ space-separated integers $h_{i,1}, h_{i,2}, \ldots, h_{i,W}$.
- $N$ more lines follow. For each valid $i$, the $i$-th of these lines contains three space-separated integers $y_i$, $x_i$ and $\lvert p_i \rvert$.

### Output
For each test case, print two lines.
- The first of these lines should contain a single integer ― the maximum value of $V$.
- The second line should contain $N$ space-separated integers. For each valid $i$, the $i$-th of these integers should be $1$ if you choose a positive sign for the value of the $i$-th particle (i.e. its value should be $\lvert p_i \rvert$) or $-1$ if you choose a negative sign (i.e. its value should be $-\lvert p_i \rvert$).

If there are multiple solutions, you may find any one.

### Constraints
- $1 \le T \le 10$
- $1 \le H, W \le 1,000$
- $1 \le N \le 200$
- $\lvert h_{i,j} \rvert \le 1,000$ for each valid $i, j$
- $1 \le y_i \le H$ for each valid $i$
- $1 \le x_i \le W$ for each valid $i$
- $\lvert p_i \rvert \le 100$ for each valid $i$
- no two particles are located in the same cell
- the sum of $H \cdot W$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (10 points):** $N \le 15$

**Subtask #2 (20 points):** $H \le 2$

**Subtask #3 (70 points):** original constraints

### Example Input
```
1
2 2 3
1 4
-1 -2
1 1 3
1 2 1
2 2 2
```

### Example Output
```
12
1 1 -1
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>