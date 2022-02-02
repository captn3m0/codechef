---
{"category_name":"medium","problem_code":"STICNOT","problem_name":"Sticky Notes","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n3\r\n1 2 4\r\n2 3 7\r\n1 5 10","output":1,"explanation":"**Example case 1:** There is no way to satisfy the required condition without paying any coins. When we have one coin, we can perform the following operations:\r\n- Swap the integers written on vertices $1$ and $2$.\r\n- Pay one coin and change the integer written on vertex $2$ to $7$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"saboon","problem_tester":null,"date_added":"21-10-2019","tags":{"0":"binary","1":"dec19","2":"greedy","3":"medium","4":"melfice","5":"saboon","6":"trees"},"problem_difficulty_level":"Medium","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/STICNOT","time":{"view_start_date":1576488720,"submit_start_date":1576488720,"visible_start_date":1576488720,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=STICNOT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/DEC19/hindi/STICNOT.pdf), [Bengali](https://www.codechef.com/download/translated/DEC19/bengali/STICNOT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/DEC19/mandarin/STICNOT.pdf), [Russian](https://www.codechef.com/download/translated/DEC19/russian/STICNOT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/DEC19/vietnamese/STICNOT.pdf) as well.

You are given a tree with $N$ vertices (numbered $1$ through $N$). Its edges are numbered $1$ through $N-1$. For each valid $i$, there is an integer $a_i$ written on the $i$-th vertex. Also, for each valid $i$, there is an integer $b_i$ written on the $i$-th edge.

You want the following condition to be satisfied: for each vertex $v$ and each edge $e$ adjacent to $v$, $a_v \ge b_e$. In order to achieve that, you may perform an arbitrary number of steps (including zero). In one step, you may perform one the following operations:
1. Select two different vertices $u$ and $v$. Swap $a_u$ and $a_v$.
2. Select two different edges $e$ and $f$. Swap $b_e$ and $b_f$.
3. Select a vertex $v$ and an integer $x$. Change $a_v$ to $x$ and pay one coin.

Calculate the minimum number of coins you need in order to satisfy the required condition.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- $N-1$ lines follow. For each $i$ ($1 \le i \le N-1$), the $i$-th of these lines contains three space-separated integers $u_i$, $v_i$ and $b_i$ denoting that the $i$-th edge connects vertices $u_i$ and $v_i$ and the initial value written on it is $b_i$.
- The last line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.

### Output
For each test case, print a single line containing one integer ― the minimum necessary number of coins.

### Constraints 
- $1 \le T \le 10$
- $2 \le N \le 100,000$
- $1 \le u_i, v_i \le N$ for each valid $i$
- $1 \le b_i \le 10^9$ for each valid $i$
- $1 \le a_i \le 10^9$ for each valid $i$
- the graph on the input is a tree

### Subtasks
**Subtask #1 (10 points):** $N \le 7$

**Subtask #2 (10 points):** $N \le 10$

**Subtask #3 (30 points):** $N \le 200$

**Subtask #4 (50 points):** original constraints

### Example Input
```
1
3
1 2 4
2 3 7
1 5 10
```

### Example Output
```
1
```

### Explanation
**Example case 1:** There is no way to satisfy the required condition without paying any coins. When we have one coin, we can perform the following operations:
- Swap the integers written on vertices $1$ and $2$.
- Pay one coin and change the integer written on vertex $2$ to $7$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>