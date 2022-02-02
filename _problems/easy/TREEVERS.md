---
{"category_name":"easy","problem_code":"TREEVERS","problem_name":"Treeversion","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n3\r\n1 0 1\r\n1 2\r\n1 3","output":1,"explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"erfaniaa","problem_tester":null,"date_added":"26-09-2019","tags":{"0":"deadwing97","1":"erfaniaa","2":"ltime76"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/TREEVERS","time":{"view_start_date":1569690002,"submit_start_date":1569690002,"visible_start_date":1569690002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TREEVERS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME76/hindi/TREEVERS.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME76/bengali/TREEVERS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME76/mandarin/TREEVERS.pdf), [Russian](https://www.codechef.com/download/translated/LTIME76/russian/TREEVERS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME76/vietnamese/TREEVERS.pdf) as well.

You are given a rooted tree with $N$ nodes (numbered $1$ through $N$); the root is node $1$. For each valid $i$, node $i$ has weight $w_i$, which is either $0$ or $1$.

We want to traverse the tree using depth first search. The order in which the nodes are visited is not uniquely defined, since we may visit the children of each node in an arbitrary order. Formally, the pseudocode of DFS-traversal is:
```
function DFS(node n):
	node n is visited
	for each node s (s is a son of n) in some order:
		call DFS(s)
	return
call DFS(root)
```

For each possible DFS-traversal of the tree, consider the sequence of weights of nodes in the order in which they are visited; each node is visited exactly once, so this sequence has length $N$. Calculate the number of inversions for each such sequence. The minimum of these numbers is the *treeversion* of our tree.

Find the treeversion of the given tree.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $w_1, w_2, \ldots, w_N$.
- Each of the following $N-1$ lines contains two space-separated integers $x$ and $y$ denoting that nodes $x$ and $y$ are connected by an edge.

### Output
For each test case, print a single line containing one integer — the treeversion of the given tree.

### Constraints
- $1 \le T \le 1,000$
- $1 \le N \le 10^5$
- $0 \le w_i \le 1$ for each valid $i$
- $1 \le x, y \le N$
- the graph on the input is a tree
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (50 points)**:
- $1 \le N \le 1,000$
- the sum of $N$ over all test cases does not exceed $10,000$

**Subtask #2 (50 points)**: original constraints

### Example Input
```
1
3
1 0 1
1 2
1 3
```

### Example Output
```
1
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>