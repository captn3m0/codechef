---
{"category_name":"easy","problem_code":"SUBTRCOV","problem_name":"Minimum Subtree Cover","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"srikkanth_adm","problem_tester":"iscsi","date_added":"3-06-2021","tags":{"0":"easy","1":"eulerian","2":"greedy","3":"june21","4":"segment","5":"srikkanth_adm"},"problem_difficulty_level":"Easy","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/SUBTRCOV","time":{"view_start_date":1623663000,"submit_start_date":1623663000,"visible_start_date":1623663000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SUBTRCOV","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Vietnamese](https://www.codechef.com/download/translated/JUNE21/vietnamese/SUBTRCOV.pdf),
[Bengali](https://www.codechef.com/download/translated/JUNE21/bengali/SUBTRCOV.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JUNE21/mandarin/SUBTRCOV.pdf), and [Russian](https://www.codechef.com/download/translated/JUNE21/russian/SUBTRCOV.pdf) as well. 

You are given a tree with $n$ vertices (numbered $1, 2, \dots, n$) and an integer $k$.

A subtree is defined as a connected subgraph of the tree. That is, a subtree is another tree that can be obtained by removing some (possibly none) vertices and all edges incident to those vertices from $T$.

A subset $S$ of vertices is called good if every subtree containing all the nodes in $S$ has at least $k$ nodes. 

Find the **size of the smallest good subset**.

### Input

- The first line contains a single integer $T$, the number of test cases. The descriptions of test cases follow.
- The first line of each testcase contains two integers, $n$ and $k$.
- The next $n-1$ lines each contains two integers $u$, $v$, denoting an edge between vertices $u$ and $v$ of the tree.

### Output

- For each test case print in a single line, the minimum size of a good subset.

### Constraints

- $1\leq n\leq 10^5$
- $1 \leq k \leq n$
- $1 \leq u, v \leq n$
- The given edges for each test case form a tree.
- The sum of $n$ over all test cases is at most $10^6$.

###Subtasks
**Subtask #1 (30 points):** $1 \leq n \leq 10^3$

**Subtask #2 (70 points):** original constraints

### Sample Input
```
2
7 5
1 2
2 3
3 4
3 5
5 6
3 7
6 4
1 2
1 3
1 4
1 5
1 6
```

### Sample Output
```
2
3
```

### Explanation

**Test Case $1$:**
Consider the set $S = \{1, 6\}$.

The smallest subtree that contains both of the vertices in $S$ is the path between them ($1 \to 2 \to 3 \to 5 \to 6$) which contains $5$ vertices. Hence for $k = 5$, the answer is $2$.

**Test Case $2$:**
Consider the set $S = \{2, 3, 4\}$.

The smallest subtree that contains these three vertices includes $4$ nodes $\{1, 2, 3, 4\}$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>