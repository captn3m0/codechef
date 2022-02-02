---
{"category_name":"easy","problem_code":"SUBMEXS","problem_name":"Chef and Subtree MEXs","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3\r\n1 1\r\n5\r\n1 1 2 2","output":"4\r\n9","explanation":"","isDeleted":false}}},"video_editorial_url":"https://youtu.be/x6OVpNgfv3I","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mohammed200218","problem_tester":"","date_added":"13-10-2020","tags":{"0":"depth","1":"greedy","2":"ltime89","3":"mex","4":"mohammed200218","5":"mohammed200218","6":"simple"},"problem_difficulty_level":"Simple","best_tag":"Depth First Search","editorial_url":"https://discuss.codechef.com/problems/SUBMEXS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SUBMEXS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME89/hindi/SUBMEXS.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME89/bengali/SUBMEXS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME89/mandarin/SUBMEXS.pdf), [Russian](https://www.codechef.com/download/translated/LTIME89/russian/SUBMEXS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME89/vietnamese/SUBMEXS.pdf) as well.

The MEX of a set of integers is defined as the smallest non-negative integer that does not belong to this set. For example, $\mathrm{MEX}(\{0,2,3\}) = 1$ and $\mathrm{MEX}(\{1,3\}) = 0$.

Chef has a tree with $N$ nodes (numbered $1$ through $N$). The tree is rooted at node $1$. Chef wants to assign a non-negative integer to each node in such a way that each integer between $0$ and $N-1$ (inclusive) is assigned to exactly one node.

For each node $u$, consider the integers assigned to the nodes in the subtree of $u$ (including $u$); let $a_u$ denote the MEX of these integers. Chef wants $a_1 + a_2 + \ldots + a_N$ to be as large as possible. Find the maximum possible value of this sum.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N-1$ space-separated integers $p_1, p_2, \ldots, p_{N-1}$. For each valid $i$, the node $p_i$ is the parent of the node $i+1$.

### Output
For each test case, print a single line containing one integer ― the maximum sum of subtree MEX-s which can be obtained if you assign the weights optimally.

### Constraints
- $1 \le T \le 5$
- $2 \le N \le 10^5$
- $1 \le p_i \lt i$ for each valid $i$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
2
3
1 1
5
1 1 2 2
```

### Example Output
```
4
9
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>