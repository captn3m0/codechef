---
{"category_name":"easy","problem_code":"JTSARTR","problem_name":"Joined Subarrays on Tree","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n4\r\n2 1 5 3\r\n1 2\r\n1 3\r\n3 4","output":2,"explanation":"**Example case 1:** We choose $v = 3$. Then, $A(3) = (2, 5)$; its subarrays $(2)$ and $(5)$ satisfy all required conditions and the sum of their lengths is $2$. There is no way to get a greater value of the function $F$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/LGztBRQuHOY","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"manishtanwar","problem_tester":"","date_added":"18-02-2020","tags":{"0":"binary","1":"cook122","2":"depth","3":"dynamic","4":"manishtanwar","5":"manishtanwar","6":"medium","7":"rahuldugar","8":"rishup_nitdgp"},"problem_difficulty_level":"Medium","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/JTSARTR","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=JTSARTR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK122/hindi/JTSARTR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK122/mandarin/JTSARTR.pdf), [Russian](https://www.codechef.com/download/translated/COOK122/russian/JTSARTR.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK122/vietnamese/JTSARTR.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK122/bengali/JTSARTR.pdf) as well.

Alice thought of a function $F$, which takes an arbitrary array of integers $A = (A_1, A_2, \ldots, A_M)$ as the only argument and is defined in the following way:
- Consider all pairs of subarrays $(A_i, A_{i+1}, \ldots, A_j)$ and $(A_k, A_{k+1}, \ldots, A_l)$ such that:
    - $1 \le i \le j \lt k \le l \le M$
    - both subarrays are non-decreasing
    - $A_j \le A_k$
- If there is no such pair of subarrays, $F(A) = 0$.
- Otherwise, $F(A)$ is the maximum of the expression $(j-i+1) + (l-k+1)$ over all such pairs of subarrays.

In other words, you need to choose two non-overlapping non-empty subarrays of $A$ and concatenate them in the same order; the resulting array should be non-decreasing and $F(A)$ is its maximum possible length.

Bob challenged Alice to solve the following problem and she needs your help.

You are given a tree with $N$ vertices (numbered $1$ through $N$), rooted at the vertex $1$. There is an integer written in each vertex; for each valid $i$, let's denote the integer written in vertex $i$ by $V_i$. You should choose one vertex ― let's denote it by $v$. Then, consider an array $A$ containing values which are written in vertices on the path from the root to $v$ (inclusive), in this order, and calculate $F(A)$. Find the maximum possible value of $F(A)$ which you can obtain this way.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $V_1, V_2, \cdot, V_N$.
- Each of the following $N-1$ lines contains two space-separated integers $u$ and $v$ denoting that vertices $u$ and $v$ are connected by an edge.

### Output
For each test case, print a single line containing one integer ― the maximum of $F(A)$.

### Constraints
- $1 \le T \le 1,000$
- $2 \le N \le 5 \cdot 10^5$
- $|V_i| \le 10^9$ for each valid $i$
- $1 \le u, v \le N$
- the sum of $N$ over all test cases does not exceed $10^6$

### Example Input
```
1
4
2 1 5 3
1 2
1 3
3 4
```

### Example Output
```
2
```

### Explanation
**Example case 1:** We choose $v = 3$. Then, $A(3) = (2, 5)$; its subarrays $(2)$ and $(5)$ satisfy all required conditions and the sum of their lengths is $2$. There is no way to get a greater value of the function $F$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>