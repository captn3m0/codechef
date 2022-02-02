---
{"category_name":"easy","problem_code":"INDEP","problem_name":"Independent Set","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n5 7\r\n1 3\r\n1 4\r\n1 5\r\n2 3\r\n2 4\r\n2 5\r\n3 4","output":"1\r\n11000","explanation":"**Example case 1:** The only possible partition satisfying the given conditions is $A = \\{1, 2\\}, B = \\{3, 4, 5\\}$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/N9It50vwxPg","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pshishod2645","problem_tester":"","date_added":"25-02-2021","tags":{"0":"easy","1":"graphs","2":"ltime93","3":"pshishod2645"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/INDEP","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=INDEP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/LTIME93/bengali/INDEP.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME93/mandarin/INDEP.pdf), [Russian](https://www.codechef.com/download/translated/LTIME93/russian/INDEP.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME93/vietnamese/INDEP.pdf) as well.

You are given a graph $G$ with $N$ vertices (numbered $1$ through $N$) and $M$ edges. You should partition the vertices of $G$ into two sets $A$ and $B$ such that:
- each vertex of $G$ belongs to exactly one of these sets
- $A$ is non-empty
- $A$ is an independent set in $G$, i.e. for each pair of vertices $u, v \in A$, $G$ does not contain an edge $(u, v)$
- for each vertex $a \in A$ and each vertex $b \in B$, there is an edge $(a, b)$ in $G$

Find the number of such partitions $(A, B)$. Also, give an example of one of these partitions or determine that no such partition exists.

Two partitions are considered different if there is a vertex that is in the set $A$ in one partition and in the set $B$ in the other partition.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- Each of the next $M$ lines contains two space-separated integers $u$ and $v$ denoting that vertices $u$ and $v$ are connected by an edge.

### Output
For each test case, print two lines.
- The first of these lines should contain a single integer — the number of partitions satisfying the given conditions.
- The second line should contain a single string with length $N$. If there are no partitions satisfying the given conditions, each character of this string should be '0'. Otherwise, this string should describe one such partition — for each valid $i$, the $i$-th character should be '1' if vertex $i$ belongs to $A$ or '0' if it belongs to $B$.

### Constraints 
- $1 \leq T \leq 5 \cdot 10^5$
- $1 \leq N, M \leq 5 \cdot 10^5$
- $1 \le u, v \le N$
- there are no self-loops or duplicate edges in the graph
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^5$
- the sum of $M$ over all test cases does not exceed $5 \cdot 10^5$

### Subtasks
**Subtask #1 (30 points):** $N,M,T \leq 100$

**Subtask #2 (70 points):** original constraints

### Example Input
```
1
5 7
1 3
1 4
1 5
2 3
2 4
2 5
3 4
```

### Example Output
```
1
11000
```

### Explanation
**Example case 1:** The only possible partition satisfying the given conditions is $A = \{1, 2\}, B = \{3, 4, 5\}$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>