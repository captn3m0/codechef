---
{"category_name":"hard","problem_code":"EGGFREE","problem_name":"Egg-free DAG","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3 3\r\n1 2\r\n2 3\r\n3 1\r\n7 6\r\n1 2\r\n2 3\r\n3 4\r\n4 5\r\n5 6\r\n6 7","output":"^^v\r\n^^^^^^","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"gainullinildar","problem_tester":null,"date_added":"25-02-2020","tags":{"0":"chordal","1":"gainullinildar","2":"hard","3":"march20","4":"tmwilliamlin"},"problem_difficulty_level":"Hard","best_tag":"Chordal Graph","editorial_url":"https://discuss.codechef.com/problems/EGGFREE","time":{"view_start_date":1112031000,"submit_start_date":1112031000,"visible_start_date":1112031000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EGGFREE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/MARCH20/hindi/EGGFREE.pdf), [Bengali](https://www.codechef.com/download/translated/MARCH20/bengali/EGGFREE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MARCH20/mandarin/EGGFREE.pdf), [Russian](https://www.codechef.com/download/translated/MARCH20/russian/EGGFREE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MARCH20/vietnamese/EGGFREE.pdf) as well.

Let's call a directed graph *egg-free* if it is acyclic and for any three pairwise distinct vertices $x$, $y$ and $z$, if the graph contains edges $x \rightarrow y$ and $x \rightarrow z$, then it also contains an edge $y \rightarrow z$ and/or an edge $z \rightarrow y$.

You are given an undirected graph with $N$ vertices (numbered $1$ through $N$) and $M$ edges (numbered $1$ through $M$). Find a way to assign a direction to each of its edges such that the resulting directed graph is egg-free, or determine that it is impossible. If there are multiple solutions, you may find any one.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- $M$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $u_i$ and $v_i$ denoting an edge between vertices $u_i$ and $v_i$.

### Output
For each test case:
- If it is impossible to assign a direction to each edge in such a way that the resulting graph is egg-free, print a single line containing the string `"No solution"` (without quotes).
- Otherwise, print a single line containing a string with length $M$. For each valid $i$, the $i$-th character of this string should be '^' if you want to direct the $i$-th edge from $u_i$ to $v_i$, or 'v' if you want to direct it from $v_i$ to $u_i$.

### Constraints
- $1 \le T \le 5$
- $1 \le N, M \le 200,000$
- $1 \le u_i, v_i \le N$ for each valid $i$
- $u_i \neq v_i$ for each valid $i$
- each pair of vertices is connected by at most one edge

### Subtasks
**Subtask #1 (10 points):** $N, M \le 20$

**Subtask #2 (20 points):** $N, M \le 200$

**Subtask #3 (70 points):** original constraints

### Example Input
```
2
3 3
1 2
2 3
3 1
7 6
1 2
2 3
3 4
4 5
5 6
6 7
```

### Example Output
```
^^v
^^^^^^
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>