---
{"category_name":"hard","problem_code":"DIFVAL","problem_name":"Danya and Different Values","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n11\r\n1 2 2 2 4 4 1 8 8 10\r\n5 3 2 3 1 1 2 4 1 2 3\r\n9\r\n2 1\r\n1 1\r\n2 3\r\n0 0\r\n2 1\r\n4 6\r\n13 4\r\n11 1\r\n13 4","output":"3\r\n3\r\n1\r\n3\r\n5\r\n5\r\n3\r\n4\r\n1","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":3.3,"source_sizelimit":50000,"problem_author":"sonechko","problem_tester":null,"date_added":"20-05-2020","tags":{"0":"june20","1":"medium","2":"persistence","3":"rajarshi_basu","4":"segment","5":"small","6":"sonechko"},"problem_difficulty_level":"Medium-Hard","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/DIFVAL","time":{"view_start_date":1592213402,"submit_start_date":1592213402,"visible_start_date":1592213402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DIFVAL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JUNE20/hindi/DIFVAL.pdf), [Bengali](https://www.codechef.com/download/translated/JUNE20/bengali/DIFVAL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JUNE20/mandarin/DIFVAL.pdf), [Russian](https://www.codechef.com/download/translated/JUNE20/russian/DIFVAL.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JUNE20/vietnamese/DIFVAL.pdf) as well.

Danya has a rooted tree with $N$ nodes (numbered $1$ through $N$). Node $1$ is the root and for each $i$ ($2 \le i \le N$), the parent of the $i$-th node is $p_i$. For each valid $i$, the $i$-th node also has a value $a_i$.

Danya really loves his tree and wants to play with it. You should answer his $Q$ queries. In each query:
- You are given two integers $X$ and $D$.
- Consider the set $S$ of all nodes $v$ that lie in the subtree of node $X$ (including $X$) such that the distance between $X$ and $v$ does not exceed $D$.
- The answer to this query is the number of different values $a_v$ among all $v \in S$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N-1$ space-separated integers $p_2, p_3, \ldots, p_N$.
- The third line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.
- The fourth line contains a single integer $Q$.
- $Q$ lines follow. Each of these lines contains two space-separated integers $x$ and $d$ describing a query; the parameters $X$ and $D$ can be computed in the following way:
    - Let's denote the answer to the previous query by $ans$ ($ans = 0$ if this is the first query).
    - Then, $X = x \oplus ans$ and $D = d \oplus ans$, where $\oplus$ denotes the bitwise XOR operator.

### Output
For each query, print a single line containing one integer ― the answer to the query.

### Constraints
- $1 \le T \le 5$
- $1 \le N \le 2 \cdot 10^5$
- $1 \le p_i \le i-1$ for each valid $i$
- $1 \le a_i \le N$ for each valid $i$
- $1 \le Q \le 2 \cdot 10^5$
- $0 \le x, d \le 4 \cdot 10^5$
- $1 \le X \le N$
- $0 \le D \le N$

### Subtasks
**Subtask #1 (16 points):** $N, Q \le 1,000$

**Subtask #2 (24 points):** the tree is a bamboo, i.e. $p_i = i-1$ for each valid $i$

**Subtask #3 (60 points):** original constraints 

### Example Input
```
1
11
1 2 2 2 4 4 1 8 8 10
5 3 2 3 1 1 2 4 1 2 3
9
2 1
1 1
2 3
0 0
2 1
4 6
13 4
11 1
13 4
```

### Example Output
```
3
3
1
3
5
5
3
4
1
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>