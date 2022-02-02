---
{"category_name":"easy","problem_code":"DDQUERY","problem_name":"Double Distance Query","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\n5 3\n1 2\n2 3\n3 4\n3 5\n2 1 4 1\n2 2 4 2\n1 1 2 1","output":"3\n5\n-1","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":6,"source_sizelimit":50000,"problem_author":"jafarbadour","problem_tester":null,"date_added":"24-10-2019","tags":{"0":"jafarbadour","1":"jafarbadour","2":"ltime77"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/DDQUERY","time":{"view_start_date":1572111000,"submit_start_date":1572111000,"visible_start_date":1572111000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DDQUERY","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME77/hindi/DDQUERY.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME77/bengali/DDQUERY.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME77/mandarin/DDQUERY.pdf), [Russian](https://www.codechef.com/download/translated/LTIME77/russian/DDQUERY.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME77/vietnamese/DDQUERY.pdf) as well.

You are given an unweighted tree with $N$ nodes (numbered $1$ through $N$). Let's denote the distance between any two nodes $p$ and $q$ by $d(p, q)$.

You should answer $Q$ queries. In each query, you are given parameters $a$, $d_a$, $b$, $d_b$, and you should find a node $x$ such that $d(x, a) = d_a$ and $d(x, b) = d_b$, or determine that there is no such node.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- Each of the next $N-1$ lines contains two space-separated integers $u$ and $v$ denoting that nodes $u$ and $v$ are connected by an edge.
- Each of the next $Q$ lines contains four space-separated integers $a$, $d_a$, $b$ and $d_b$ describing a query.

### Output
For each query, print a single line containing one integer ― the number of a node satisfying the given requirements, or $-1$ if no such node exists.

If there are multiple solutions, you may output any one.

### Constraints
- $1 \le T \le 1,000$
- $1 \le N, Q \le 10^6$
- $1 \le u, v \le N$
- the graph on the input is a tree
- $1 \le a, b \le N$
- $1 \le d_a, d_b \lt N$
- the sum of $N$ over all test cases does not exceed $10^6$
- the sum of $Q$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (50 points)**:
- $1 \le N, Q \le 1,000$
- the sum of $N$ over all test cases does not exceed $1,000$
- the sum of $Q$ over all test cases does not exceed $1,000$

**Subtask #2 (50 points)**: original constraints

### Example Input
```
1
5 3
1 2
2 3
3 4
3 5
2 1 4 1
2 2 4 2
1 1 2 1
```

### Example Output
```
3
5
-1
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>