---
{"category_name":"easy","problem_code":"PATHETIC","problem_name":"Path-etic Products","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sjshohag","problem_tester":"","date_added":"9-07-2020","tags":{"0":"bipartite","1":"cook120","2":"easy","3":"prime","4":"rajarshi_basu","5":"sjshohag","6":"trees"},"problem_difficulty_level":"Easy-Medium","best_tag":"Prime Factorization","editorial_url":"https://discuss.codechef.com/problems/PATHETIC","time":{"view_start_date":1595183402,"submit_start_date":1595183402,"visible_start_date":1595183402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PATHETIC","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK120/hindi/PATHETIC.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK120/mandarin/PATHETIC.pdf), [Russian](https://www.codechef.com/download/translated/COOK120/russian/PATHETIC.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK120/vietnamese/PATHETIC.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK120/bengali/PATHETIC.pdf) as well.

You are given a tree with $N$ nodes (numbered $1$ through $N$). A tree is a connected undirected graph without cycles.

You have to assign an integer to each node; for each valid $i$, let's denote the integer assigned to node $i$ by $A_i$. This assignment must satisfy the following conditions:
- For each valid $i$, $1 \le A_i \le 2 \cdot 10^{18}$.
- For each simple path in the tree, let's denote the set of nodes in this path by $S$. Then, the product $P = \prod_{v \in S} A_v$ is divisible by $|S|$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- Each of the next $N-1$ lines contains two space-separated integers $u$ and $v$ denoting that nodes $u$ and $v$ are connected by an edge.

### Output
For each test case, print a single line containing $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

If there any multiple solutions, you may find any one of them. It can be proved a solution always exists under the given constraints.

### Constraints
- $1 \le T \le 200$
- $1 \le N \le 100$
- $1 \le u, v \le N$

### Example Input
```
2
6
1 2
2 3
1 4
5 1
6 5
2
1 2
```

### Example Output
```
2 3 2 4 6 5
1 2
```

### Explanation
**Example case 1:**
<img src = "https://codechef_shared.s3.amazonaws.com/download/Images/COOK120/tree.png" width = "500" height = "400">

This assignment satisfies all the conditions. For example, for the path $2 \rightarrow 1 \rightarrow 5 \rightarrow 6$, the product $P = 3 \cdot 2 \cdot 6 \cdot 5 = 180$ is divisible by $4$ (the number of nodes in the path).

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>