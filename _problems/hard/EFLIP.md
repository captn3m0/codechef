---
{"category_name":"hard","problem_code":"EFLIP","problem_name":"Chef and Edge Flipping","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/D-ldgVoSBko","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mohammed200218","problem_tester":"","date_added":"16-10-2020","tags":{"0":"constructive","1":"depth","2":"graphs","3":"hard","4":"ltime89","5":"mohammed200218","6":"mohammed200218","7":"psychik"},"problem_difficulty_level":"Hard","best_tag":"Depth First Search","editorial_url":"https://discuss.codechef.com/problems/EFLIP","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EFLIP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME89/hindi/EFLIP.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME89/bengali/EFLIP.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME89/mandarin/EFLIP.pdf), [Russian](https://www.codechef.com/download/translated/LTIME89/russian/EFLIP.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME89/vietnamese/EFLIP.pdf) as well.

Chef likes tournament graphs, which are directed graphs where each unordered pair of vertices is directly connected by exactly one edge. A directed graph is *strongly connected* if for each pair of vertices $(a, b)$, there is a path from the vertex $a$ to the vertex $b$.

Consider a tournament graph $G$ with $N$ vertices (numbered $1$ through $N$). Chef takes a sequence of pairs of vertices $(a_1, b_1), (a_2, b_2), \ldots, (a_M, b_M)$ and does the following for each $i$ from $1$ to $M$ in this order:
- Flip the direction of the edge between vertices $a_i$ and $b_i$.
- If the graph is strongly connected either before or after flipping this edge, declare $G$ a *bad tournament*.

If $G$ is never declared a bad tournament, Chef calls it a *good tournament*. Given the sequence of $M$ edge flips, find a good tournament.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- $M$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $a_i$ and $b_i$.

### Output
For each test case, print $N-1$ lines. For each valid $i$, the $i$-th of these lines should contain $N-i$ space-separated integers; for each valid $j$, the $j$-th of these integers should be $1$ if there is an edge from the vertex $i$ to the vertex $i+j$ or $0$ if there is an edge from the vertex $i+j$ to the vertex $i$.

It can be proved that a good tournament always exists under the given constraints. If there are multiple solutions, you may print any one of them.

### Constraints
- $1 \le T \le 400$
- $6 \le N \le 400$
- the sum of $N$ over all test cases does not exceed $4,000$

### Subtasks
**Subtask #1 (30 points):** $M = N-2$

**Subtask #2 (40 points):** $M = \left\lceil\frac{3N}{2}\right\rceil - 3$

**Subtask #3 (30 points):** $M = 2N-11$

### Example Input
```
1
6 4
1 3
3 4
2 6
5 6
```

### Example Output
```
1 0 1 1 1
0 0 0 1
1 1 1
1 1
0
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>