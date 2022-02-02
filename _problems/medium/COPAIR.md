---
{"category_name":"medium","problem_code":"COPAIR","problem_name":"Coloured Pairings","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n6 4\r\n4 -2 5 3 -6 7\r\n1 2 2 3 1 3\r\n1 2\r\n2 3\r\n1 3\r\n5 6\r\n4 4\r\n-1 -1 5 -3\r\n1 1 1 2\r\n1 2\r\n1 3\r\n1 4\r\n2 4","output":"7\r\n15\r\n8\r\n0\r\n5\r\n5\r\n5\r\n0","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":10,"source_sizelimit":50000,"problem_author":"shashwatchandr","problem_tester":"","date_added":"22-07-2020","tags":{"0":"ltime86","1":"medium","2":"rajarshi_basu","3":"shashwatchandr","4":"sqrt"},"problem_difficulty_level":"Medium-Hard","best_tag":"Medium Hard","editorial_url":"https://discuss.codechef.com/problems/COPAIR","time":{"view_start_date":1595696400,"submit_start_date":1595696400,"visible_start_date":1595696400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=COPAIR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME86/hindi/COPAIR.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME86/bengali/COPAIR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME86/mandarin/COPAIR.pdf), [Russian](https://www.codechef.com/download/translated/LTIME86/russian/COPAIR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME86/vietnamese/COPAIR.pdf) as well.

You are given two sequences $A_1, A_2, \ldots, A_N$ and $C_1, C_2, \ldots, C_N$. For each valid $i$, $C_i$ is the colour of $A_i$.

You should answer $Q$ queries. In each query:
- You are given two colours $x$ and $y$.
- Consider the subsequence of $A$ which contains only elements $A_i$ such that $C_i = x$ or $C_i = y$ (in the original order). Let's denote it by $B$.
- For each contiguous subsequence of $B$ (including empty subsequence), consider the sum of all its elements. Find the maximum of these sums. 


### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- The third line contains $N$ space-separated integers $C_1, C_2, \ldots, C_N$.
- $Q$ lines follow. Each of these lines contains two space-separated integers $x$ and $y$ describing a query.

### Output
For each query, print a single line containing one integer — the maximum sum of a contiguous subsequence of $B$.

### Constraints
- $1 \le T \le 10^2$
- $1 \le N, Q \le 3*10^5$
- $|A_i| \le 10^9$ for each valid $i$
- $1 \le C_i \le N$ for each valid $i$
- $1 \le x \ne y \le N$
- the sum of $N$ over all test cases does not exceed $3*10^5$
- the sum of $Q$ over all test cases does not exceed $3*10^5$

### Subtasks
**Subtask #1 (50 points):** Every color except the color $1$ occurs in at most $1$ query.  

**Subtask #2 (50 points):** Original constraints

### Example Input
```
2
6 4
4 -2 5 3 -6 7
1 2 2 3 1 3
1 2
2 3
1 3
5 6
4 4
-1 -1 5 -3
1 1 1 2
1 2
1 3
1 4
2 4
```

### Example Output
```
7
15
8
0
5
5
5
0
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>