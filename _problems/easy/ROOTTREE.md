---
{"category_name":"easy","problem_code":"ROOTTREE","problem_name":"Root the Tree","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3\r\n1 2\r\n3 2\r\n3\r\n1 2\r\n2 3","output":"1\r\n0","explanation":"**Example case 1:** We can delete the edge from vertex $3$ to vertex $2$ and insert an edge from $3$ to $1$. Then, the graph becomes a rooted directed tree with vertex $3$ as the root. However, there are many other possible solutions.\r\n\r\n**Example case 2:** The graph is already a rooted directed tree; the root is vertex $1$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/Joezp9YzE5M","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"anton_trygub","problem_tester":"","date_added":"13-09-2020","tags":{"0":"anton_trygub","1":"easy","2":"graphs","3":"ltime88","4":"trees"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/ROOTTREE","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ROOTTREE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME88/hindi/ROOTTREE.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME88/bengali/ROOTTREE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME88/mandarin/ROOTTREE.pdf), [Russian](https://www.codechef.com/download/translated/LTIME88/russian/ROOTTREE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME88/vietnamese/ROOTTREE.pdf) as well.

A *directed tree* is a directed graph such that if all edges were undirected, this graph would be a tree. A *rooted directed tree* is a directed tree in which there is one vertex (the *root*, let's denote it by $r$) such that it is possible to reach all vertices of the graph from $r$ by moving along the directed edges.

You are given a directed tree with $N$ vertices (numbered $1$ through $N$). You may perform the following operation on it any number of times (including zero):
- Choose some edge which currently exists in the graph.
- Remove this edge.
- Add a new edge in such a way that the graph becomes a directed tree again.

What is the smallest number of operations which need to be performed in order to make the directed tree rooted?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- Each of the next $N-1$ lines contains two space-separated integers $u$ and $v$ denoting that there is a directed edge from $u$ to $v$ in the tree.

### Output
For each test case, print a single line containing one integer ― the smallest number of operations we need to perform to create a rooted directed tree.

### Constraints
- $1 \le N \le 10^4$
- $1 \le u, v \le N$
- the graph described on the input is a directed tree
- the sum of $N$ over all test cases does not exceed $10^5$

### Subtasks
**Subtask #1 (20 points):** for each edge, $u = 1$ or $v = 1$ (the graph is a directed star)

**Subtask #2 (80 points):** original constraints

### Example Input
```
2
3
1 2
3 2
3
1 2
2 3
```

### Example Output
```
1
0
```

### Explanation
**Example case 1:** We can delete the edge from vertex $3$ to vertex $2$ and insert an edge from $3$ to $1$. Then, the graph becomes a rooted directed tree with vertex $3$ as the root. However, there are many other possible solutions.

**Example case 2:** The graph is already a rooted directed tree; the root is vertex $1$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>