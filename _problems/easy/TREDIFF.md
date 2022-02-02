---
{"category_name":"easy","problem_code":"TREDIFF","problem_name":"Tree difference","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n6 3\r\n10 2 5 6 5 6\r\n1 2\r\n2 3\r\n2 4\r\n1 5\r\n5 6\r\n5 6\r\n3 5\r\n1 4","output":"1\r\n0\r\n4","explanation":"**Example case 1:**\r\n- For the first query, $S=\\{5, 6\\}$, so the answer is $|A_5-A_6|=1$.\r\n- For the second query, $S=\\{3, 2, 1, 5\\}$ and we can see that $|A_3-A_5|=0$.\r\n- For the third query, $S=\\{1, 2, 4\\}$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"vivek_1998299","problem_tester":null,"date_added":"26-05-2020","tags":{"0":"easy","1":"ltime84","2":"pigeonhole","3":"taran_1407","4":"vivek_1998299"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/TREDIFF","time":{"view_start_date":1590858002,"submit_start_date":1590858002,"visible_start_date":1590858002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TREDIFF","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME84/hindi/TREDIFF.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME84/bengali/TREDIFF.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME84/mandarin/TREDIFF.pdf), [Russian](https://www.codechef.com/download/translated/LTIME84/russian/TREDIFF.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME84/vietnamese/TREDIFF.pdf) as well.

You are given a tree with $N$ nodes (numbered $1$ through $N$). For each valid $i$, node $i$ has a value $A_i$.

You should answer $Q$ queries. In each query:
- You are given two nodes $a$ and $b$.
- Let $S$ denote the set of all nodes on the simple path between the nodes $a$ and $b$ (including these nodes).
- Find the minimum value of $|A_x-A_y|$ over all pairs $x, y \in S$ such that $x \neq y$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- Each of the next $N-1$ lines contains two space-separated integers $u$ and $v$ denoting that nodes $u$ and $v$ are connected by an edge.
- Each of the last $Q$ lines contains two space-separated integers $a$ and $b$ describing a query.

### Output
For each query, print a single line containing one integer ― the answer to the query.

### Constraints
- $1 \le T \le 20$
- $2 \le N \le 2 \cdot 10^5$
- $1 \le Q \le 2 \cdot 10^5$
- $1 \le A_i \le 100$ for each valid $i$
- $1 \le u, v, a, b \le N$
- $a \neq b$
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^5$
- the sum of $Q$ over all test cases does not exceed $5 \cdot 10^5$

### Subtasks
**Subtask #1 (30 points):** $N, Q \le 1,000$

**Subtask #2 (70 points):** original constraints

### Example Input
```
1
6 3
10 2 5 6 5 6
1 2
2 3
2 4
1 5
5 6
5 6
3 5
1 4
```

### Example Output
```
1
0
4
```

### Explanation
**Example case 1:**
- For the first query, $S=\{5, 6\}$, so the answer is $|A_5-A_6|=1$.
- For the second query, $S=\{3, 2, 1, 5\}$ and we can see that $|A_3-A_5|=0$.
- For the third query, $S=\{1, 2, 4\}$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>