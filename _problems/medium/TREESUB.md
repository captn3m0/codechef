---
{"category_name":"medium","problem_code":"TREESUB","problem_name":"Maximum GCD Subset","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":3.5,"source_sizelimit":50000,"problem_author":"smartnj","problem_tester":null,"date_added":"31-03-2020","tags":{"0":"cook117","1":"dynamic","2":"factorization","3":"invariants","4":"medium","5":"rajarshi_basu","6":"smartnj"},"problem_difficulty_level":"Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/TREESUB","time":{"view_start_date":1587407402,"submit_start_date":1587407402,"visible_start_date":1587407402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TREESUB","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK117/hindi/TREESUB.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK117/mandarin/TREESUB.pdf), [Russian](https://www.codechef.com/download/translated/COOK117/russian/TREESUB.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK117/vietnamese/TREESUB.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK117/bengali/TREESUB.pdf) as well.

You are given a rooted tree with $N$ nodes (numbered $1$ through $N$). Node $1$ is the root. You are also given integer sequences $x_1, x_2, \ldots, x_N$ and $v_1, v_2, \ldots, v_N$.

Let $S$ be a subset of nodes. It is called *valid* if it is non-empty and the following conditions hold:
- There is no pair of nodes $(i, j)$ such that $i,j \in S$ and $i$ is an ancestor of $j$.
- The greatest common divisor of the values $x_i$ for all nodes $i \in S$ (let's denote it by $G$) is greater than $1$.

Next, let's define the *value* of $S$ as $G \cdot V$, where $G$ is defined above and $V = \sum_{i \in S}{v_i}$.

You need to find a valid subset of nodes with the maximum value.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- Each of the next $N-1$ lines contains two space-separated integers $u$ and $v$ denoting that nodes $u$ and $v$ are connected by an edge.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $x_i$ and $v_i$.

### Output
For each test case, print three lines.
- The first of these lines should contain two space-separated integers $G \cdot V$ and $G$ for your chosen subset.
- The second line should contain a single integer $K$ ― the size of your subset.
- The third line should contain $K$ space-separated integers ― the numbers of the nodes in this subset (in any order).

If there are multiple solutions, you may find any one.

### Constraints
- $1 \le T \le 100,000$
- $1 \le N \le 100,000$
- $1 \le u, v \le N$
- the graph described on the input is a tree
- $1 \le x_i, v_i \le 100,000$ for each valid $i$
- at least one valid subset exists
- the sum of $N$ over all test cases does not exceed $1,000,000$

### Example Input
```
1
6
1 2
1 3
2 4
2 5
5 6
3 12
2 10
10 3
6 6
3 8
15 2
```

### Example Output
```
42 3
2
5 4
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>