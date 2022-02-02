---
{"category_name":"easy","problem_code":"SUBCENTR","problem_name":"Subtree Center","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\n3 2\n1 2\n2 3\n2 1 3\n2 1 2\n5 2\n1 2\n2 3\n2 4\n3 5\n1 2\n2 4 5","output":"1 2\n2 1 2\n1 2\n2 2 3","explanation":"**Example case 1:** The figure below describes the second query. The smallest subtree containing the given nodes is coloured red and the nodes which are its centers are coloured blue.\n\n\u003Cimg src=\u0022https://s3.amazonaws.com/codechef_shared/download/Images/DAANISH/2.png\u0022 width=\u0022450\u0022 height=\u0022378\u0022 /\u003E\n\n**Example case 2:** The figure below describes the second query with subtree and centers coloured in the same way.\n\n\u003Cimg src=\u0022https://s3.amazonaws.com/codechef_shared/download/Images/DAANISH/1.png\u0022 width=\u0022450\u0022 height=\u0022378\u0022 /\u003E","isDeleted":false}}},"video_editorial_url":"https://youtu.be/NCiqFEgFAC8","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"13-05-2021","tags":{"0":"daanish_adm","1":"easy","2":"lowest","3":"start4"},"problem_difficulty_level":"Easy-Medium","best_tag":"Lowest Common Ancestor","editorial_url":"https://discuss.codechef.com/problems/SUBCENTR","time":{"view_start_date":1622381400,"submit_start_date":1622381400,"visible_start_date":1622381400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SUBCENTR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/START4/bengali/SUBCENTR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/START4/mandarin/SUBCENTR.pdf), [Russian](https://www.codechef.com/download/translated/START4/russian/SUBCENTR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/START4/vietnamese/SUBCENTR.pdf) as well.

You are given a tree with $N$ nodes (numbered $1$ through $N$) and $Q$ queries (numbered $1$ through $Q$). For each valid $i$, in the $i$-th query, you are given $K_i$ nodes $x_1, x_2, \ldots, x_{K_i}$. Consider the smallest subtree which contains all of these nodes; you should find all centers of this subtree.

A node is called a *center* of a tree if it lies in the middle of at least one longest path in that tree. Note that there may be multiple longest paths (paths with the same maximum length) and for a longest path which contains an even number of nodes, there are two nodes lying in the middle of this path.

**Note:** A subtree here refers to a connected subgraph of the tree. Selecting a node does not mean all its descendants have to be selected.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- $N-1$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $u$ and $v$ denoting that there is an edge between nodes $u$ and $v$ in the tree.
- $Q$ more lines follow. For each valid $i$, the $i$-th of these lines contains an integer $K_i$, followed by a space and $K_i$ space-separated integers $x_1, x_2, \ldots, x_{K_i}$.

**Note:** The input and output of this problem are large, so prefer using fast input/output methods.

### Output
For each query, print a single line containing an integer $C$ denoting the number of centers, followed by a space and $C$ space-separated integers — the nodes which are centers of the given subtree, sorted in increasing order.

### Constraints
- $1 \le T \le 10^5$
- $1 \leq N \leq 10^5$
- $1 \leq u, v \leq N$
- the graph described on the input is a tree
- $1 \le Q \le 10^6$
- $1 \leq x_i \leq N$ for each valid $i$
- for each query, $x_1, x_2, \ldots, x_{K_i}$ are pairwise distinct
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^5$
- the sum of $K_i$ over all queries in all test cases does not exceed $10^6$

### Example Input
```
2
3 2
1 2
2 3
2 1 3
2 1 2
5 2
1 2
2 3
2 4
3 5
1 2
2 4 5
```

### Example Output
```
1 2
2 1 2
1 2
2 2 3
```
	
### Explanation
**Example case 1:** The figure below describes the second query. The smallest subtree containing the given nodes is coloured red and the nodes which are its centers are coloured blue.

<img src="https://s3.amazonaws.com/codechef_shared/download/Images/DAANISH/2.png" width="450" height="378" />

**Example case 2:** The figure below describes the second query with subtree and centers coloured in the same way.

<img src="https://s3.amazonaws.com/codechef_shared/download/Images/DAANISH/1.png" width="450" height="378" />

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>