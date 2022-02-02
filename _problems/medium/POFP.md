---
{"category_name":"medium","problem_code":"POFP","problem_name":"Pairs of Pairs","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n2 17\r\n3 5\r\n817 999999797","output":"1\r\n3\r\n223160771","explanation":"**Example case 1:** For $N = 2$, there are two valid pairings $[(1,3), (2,4)]$ and $[(1,4), (2,3)]$, with costs $0$ and $1$ respectively.\r\n\r\n**Example case 2:** For $N = 3$, all valid pairings along with their costs are listed below. \r\n- $[(1,4), (2,5), (3,6)]$ with cost $0$\r\n- $[(1,4), (2,6), (3,5)]$ with cost $1$\r\n- $[(1,5), (2,4), (3,6)]$ with cost $1$\r\n- $[(1,5), (2,6), (3,4)]$ with cost $2$\r\n- $[(1,6), (2,5), (3,4)]$ with cost $3$\r\n- $[(1,6), (2,4), (3,5)]$ with cost $2$\r\n- $[(1,3), (2,6), (4,5)]$ with cost $1$\r\n- $[(1,3), (2,5), (4,6)]$ with cost $0$\r\n- $[(1,6), (2,3), (4,5)]$ with cost $2$\r\n- $[(1,5), (2,3), (4,6)]$ with cost $1$\r\n\r\nThe sum of all costs is $13$ and its remainder modulo $5$ is $3$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"shashwatchandr","problem_tester":"","date_added":"22-07-2020","tags":{"0":"dynamic","1":"ltime86","2":"medium","3":"rajarshi_basu","4":"shashwatchandr"},"problem_difficulty_level":"Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/POFP","time":{"view_start_date":1595696400,"submit_start_date":1595696400,"visible_start_date":1595696400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=POFP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME86/hindi/POFP.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME86/bengali/POFP.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME86/mandarin/POFP.pdf), [Russian](https://www.codechef.com/download/translated/LTIME86/russian/POFP.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME86/vietnamese/POFP.pdf) as well.

Consider any way to pair the integers $1$ through $2N$ into $N$ pairs $(A_1,B_1), (A_2,B_2), \ldots, (A_N,B_N)$ in such a way that each of these integers is present in exactly one pair, $A_i \lt B_i$ for each valid $i$ and $A_1 \lt A_2 \lt \ldots \lt A_N$. Let's call such a sequence of pairs a *pairing*.

For a pairing $(A_1,B_1), (A_2,B_2), \ldots, (A_N,B_N)$, we can create an undirected graph with $2N$ nodes (numbered $1$ through $2N$) and the following edges:
- first type: for each valid $i$, an edge between nodes $i$ and $i+1$
- second type: for each valid $i$, an edge between nodes $A_i$ and $B_i$

This pairing is valid if for each edge $(i,i+1)$ of the first type, there is an edge of the second type $(A_j, B_j)$ which "surrounds" it, i.e. satisfies $A_j \le i$ and $B_j \gt i$. The *cost* of a valid pairing is defined as the number of pairs of edges of the second type such that one of these edges is "nested" in the other, i.e. pairs $(A_i, B_i)$ and $(A_j, B_j)$ such that $A_i \lt A_j \lt B_j \lt B_i$.

Find the sum of costs of all valid pairings. Since this number may be very large, compute it modulo a given prime $P$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $N$ and $P$.

### Output
For each test case, print a single line containing one integer — the sum of costs of all valid pairings modulo $P$.

### Constraints
- $1 \le T \le 10^2$
- $2 \le N \le 10^3$
- $1 \le P \le 10^9$
- $P$ is prime
- the sum of $N$ over all test cases does not exceed $10,000$

### Subtasks
**Subtask #1 (50 points):** $N \le 10$

**Subtask #2 (50 points):** original constraints

### Example Input
```
3
2 17
3 5
817 999999797
```

### Example Output
```
1
3
223160771
```

### Explanation
**Example case 1:** For $N = 2$, there are two valid pairings $[(1,3), (2,4)]$ and $[(1,4), (2,3)]$, with costs $0$ and $1$ respectively.

**Example case 2:** For $N = 3$, all valid pairings along with their costs are listed below. 
- $[(1,4), (2,5), (3,6)]$ with cost $0$
- $[(1,4), (2,6), (3,5)]$ with cost $1$
- $[(1,5), (2,4), (3,6)]$ with cost $1$
- $[(1,5), (2,6), (3,4)]$ with cost $2$
- $[(1,6), (2,5), (3,4)]$ with cost $3$
- $[(1,6), (2,4), (3,5)]$ with cost $2$
- $[(1,3), (2,6), (4,5)]$ with cost $1$
- $[(1,3), (2,5), (4,6)]$ with cost $0$
- $[(1,6), (2,3), (4,5)]$ with cost $2$
- $[(1,5), (2,3), (4,6)]$ with cost $1$

The sum of all costs is $13$ and its remainder modulo $5$ is $3$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>