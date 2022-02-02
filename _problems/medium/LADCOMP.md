---
{"category_name":"medium","problem_code":"LADCOMP","problem_name":"Madoka and Ladder Decomposition","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":"1 - 2.2","source_sizelimit":50000,"problem_author":"fairy_winx","problem_tester":"","date_added":"28-06-2021","tags":{"0":"eulerian","1":"fairy_winx","2":"july21","3":"medium"},"problem_difficulty_level":"Medium","best_tag":"Eulerian Tour","editorial_url":"https://discuss.codechef.com/problems/LADCOMP","time":{"view_start_date":1626082200,"submit_start_date":1626082200,"visible_start_date":1626082200,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=LADCOMP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/JULY21/bengali/LADCOMP.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY21/mandarin/LADCOMP.pdf), [Russian](https://www.codechef.com/download/translated/JULY21/russian/LADCOMP.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY21/vietnamese/LADCOMP.pdf) as well.

Madoka was given a tree on her coming of age, and not a simple one, but a rooted tree of $n$ vertices with a root at the vertex with the number $1$.

For all $i\ge 2$, let $P_i$ ($1 \leq P_i \leq i - 1$) be the parent of the vertex $i$.

Let's define the depth array $h$ as follows: $h_1 = 1$, and $h_i = h_{P_i} + 1$ for all $i \ge 2$.

The subtree of a vertex $u$, denoted $S(u)$, is defined as the set of vertices $v$ such that the unique path from $1$ to $v$ contains $u$. Also, we define $$\mathrm{val}_u = \max \{h(v) : v\in S(u)\}.$$

A tree is divided into paths by a ladder decomposition if each vertex is located on exactly one path, and each vertex $u$ with at least one child lies in the same path as its child $v$ with the maximum $\mathrm{val}_v$, and if there are several such vertices, then the vertex with the minimum number is selected.

Madoka defines the beauty of a tree in the following way. Let the ladder decomposition of the path lengths be $L_1, \dots, L_k$, then the beauty of the tree is $L_1^2 + L_2^2 + \cdots + L_k^2$

For each $i$ ($1\le i\le n$), your task is to calculate the beauty of the tree formed by the first $i$ vertices.

### Input

- The first line contains an integer $T$ - the number of test cases. Then $T$ test cases follow.
- The first line of each test case contains a single integer $n$ - the size of the tree.
- The second line contains $n-1$ integers $P_2, \ldots, P_n$.

### Output
For each test case, print in a separate line a single integer - the answer to the problem.

### Constraints
- $1 \leq T \leq 10$
- $2 \leq n \leq 8 \cdot 10^5$
- $1\le P_i \lt i$ for all $2\le i\le n$
- The sum of $n$ over all test cases is at most $8 \cdot 10^5$

### Subtasks

- **Subtask 1 (10 points):** 
    - The sum of $n$ is at most $2\cdot 10^3$.
    - The time limit is $1$ second.
- **Subtask 2 (20 points):**
    - $h_i\leq 3$ for all $i$.
    - The sum of $n$ is at most $10^5$.
    - The time limit is $1$ second.
- **Subtask 3 (50 points):**
    - The sum of $n$ is at most $2\cdot 10^5$.
    - The time limit is $1$ second.
- **Subtask 4 (20 points):**
    - Original constraints.
    - The time limit is $2.2$ seconds.

### Sample Input
```
2
6
1 2 1 4 3
12
1 2 1 4 4 6 2 8 5 6 11
```

### Sample Output
```
0 1 4 4 5 10
0 1 4 4 5 5 10 10 13 14 14 21
```

### Explanation
<img src="https://i.ibb.co/VDnNs3r/2.png" class="center" width="774" height="713">


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>