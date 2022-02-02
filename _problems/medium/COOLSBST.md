---
{"category_name":"medium","problem_code":"COOLSBST","problem_name":"Cool Subsets","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n3 4 1 2\r\n1 10 15 20\r\n1 8 1 8","output":"10\r\n0\r\n1703","explanation":"**Example case 1:** We have S = $\\{3,4\\}$, which has the following $3$ non-empty subsets with sizes in the range $[1,2]$:\r\n- $\\{3\\}$: coolness $2$, the cool divisors are $\\{1,3\\}$\r\n- $\\{4\\}$: coolness $3$, the cool divisors are $\\{1,2,4\\}$\r\n- $\\{3,4\\}$: coolness $5$, the cool divisors are $\\{1,2,3,4,6\\}$\r\n\r\n**Example case 2:** There are no subsets with size in the range $[15,20]$, so the sum is $0$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/l2U13VciTPQ","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"nishant403","problem_tester":"","date_added":"24-03-2020","tags":{"0":"combinatorics","1":"jan21","2":"medium","3":"nishant403","4":"number","5":"square"},"problem_difficulty_level":"Medium-Hard","best_tag":"Number Theory","editorial_url":"https://discuss.codechef.com/problems/COOLSBST","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=COOLSBST","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JAN21/hindi/COOLSBST.pdf), [Bengali](https://www.codechef.com/download/translated/JAN21/bengali/COOLSBST.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JAN21/mandarin/COOLSBST.pdf), [Russian](https://www.codechef.com/download/translated/JAN21/russian/COOLSBST.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JAN21/vietnamese/COOLSBST.pdf) as well.

An integer $X$ is *cool* if it has a <a href="https://en.wikipedia.org/wiki/Primitive_root_modulo_n">primitive root</a> modulo $X$.

The *coolness* of a non-empty set of $N$ distinct integers $S = \{x_1, x_2, \ldots, x_N\}$ is the number of cool divisors of $\prod_{i=1}^N x_i$.

You are given four integers $L$, $R$, $A$ and $B$. Let $S$ be the set containing all integers between $L$ and $R$ (inclusive). Consider all non-empty subsets of $S$ with size between $A$ and $B$ (inclusive). Find the sum of values of coolness of all these subsets. Since this sum can be huge, compute it modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains four space-separated integers $L$, $R$, $A$ and $B$. 

### Output
For each test case, print a single line containing one integer ― the total coolness modulo $998,244,353$.

### Constraints
- $1 \leq T \leq 100,000$
- $1 \leq L \leq R \leq 100,000$
- $1 \leq A \leq B \leq 100,000$

### Subtasks
**Subtask #1 (10 points):**
- $R \leq 16$
- $B \leq 16$ 

**Subtask #2 (35 points):** $A = B$

**Subtask #3 (55 points):** original constraints

### Example Input
```
3
3 4 1 2
1 10 15 20
1 8 1 8
```

### Example Output
```
10
0
1703
```

### Explanation
**Example case 1:** We have S = $\{3,4\}$, which has the following $3$ non-empty subsets with sizes in the range $[1,2]$:
- $\{3\}$: coolness $2$, the cool divisors are $\{1,3\}$
- $\{4\}$: coolness $3$, the cool divisors are $\{1,2,4\}$
- $\{3,4\}$: coolness $5$, the cool divisors are $\{1,2,3,4,6\}$

**Example case 2:** There are no subsets with size in the range $[15,20]$, so the sum is $0$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>