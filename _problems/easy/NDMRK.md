---
{"category_name":"easy","problem_code":"NDMRK","problem_name":"Node Marking","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"retarded_ape","problem_tester":"","date_added":"21-06-2021","tags":{"0":"dynamic","1":"easy","2":"ltime97","3":"retarded_ape","4":"trees"},"problem_difficulty_level":"Easy-Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/NDMRK","time":{"view_start_date":1624727702,"submit_start_date":1624727702,"visible_start_date":1624727702,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=NDMRK","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Mandarin](https://www.codechef.com/download/translated/LTIME97/mandarin/NDMRK.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME97/bengali/NDMRK.pdf), [Russian](https://www.codechef.com/download/translated/LTIME97/russian/NDMRK.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME97/vietnamese/NDMRK.pdf) as well.

You are given an integer $K$ and a tree of size $N$, rooted at node $1$. In one operation, you can either select a node of the tree and color its entire subtree or create a new (uncolored) copy of the given tree. Find the minimum number of operations required so that the total number of colored nodes among all trees is exactly $K$.

###Input

- The first line contains an integer $T$, denoting the number of test cases. Then $T$ test cases follow.
- For each test case, the first line contains two integers $N$ and $K$, the size of the given tree and the number of nodes to be colored, respectively.
- The next line contains $N-1$ integers $p_2,\ldots, p_n$, where $p_i$ is the parent of node $i$.

###Output
For each testcase, output a single integer: the minimum number of operations required to color exactly $K$ total nodes.

###Constraints 
- $1 \leq T \leq 400$
- $1 \leq N \leq 5\cdot 10^4$
- $1 \leq K \leq 10^3$
- $1\le p_i\le N$
- The input describes a valid tree rooted at node $1$
- The sum of $N\cdot K$ over all test cases does not exceed $10^7$

###Subtasks
- **Subtask 1 (10 points):** The tree is a simple path
- **Subtask 2 (35 points):** $1 \leq N,K \leq 200$ and the sum of $N\cdot K$ does not exceed $4\cdot 10^4$
- **Subtask 3 (55 points):** Original constraints


###Sample Input
```
2
3 5
1 1
4 6
1 2 2
```

###Sample Output
```
4
3
```

###Explanation

For the first test case:
- Operation $1$: The subtree of node $1$ is colored (coloring a total of $3$ nodes).
- Operation $2$: A new copy of tree is generated.
- Operation $3$: The subtree of node $2$ of the new tree is colored.
- Operation $4$: The subtree of node $3$ of the new tree is colored.

For the second test case:
- Operation $1$: The subtree of node $2$ is colored (coloring a total of $3$ nodes).
- Operation $2$: A new copy of tree is generated.
- Operation $3$: The subtree of node $2$ is colored (coloring a total of $3$ more nodes).
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>