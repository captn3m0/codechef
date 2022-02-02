---
{"category_name":"easy","problem_code":"KDIAMS","problem_name":"Graph Construction","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/KTa1MmkYIH4","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jatin_adm","problem_tester":"","date_added":"21-11-2020","tags":{"0":"constructive","1":"cook124","2":"easy","3":"jatin_adm"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/KDIAMS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=KDIAMS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK124/hindi/KDIAMS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK124/mandarin/KDIAMS.pdf), [Russian](https://www.codechef.com/download/translated/COOK124/russian/KDIAMS.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK124/vietnamese/KDIAMS.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK124/bengali/KDIAMS.pdf) as well.

You are given integers $N$ and $K$. Construct a connected undirected unweighted graph with $N$ nodes (numbered $1$ through $N$) such that there are exactly $K$ unordered pairs of nodes which have distance equal to the diameter of the graph (the largest distance between two nodes), or determine that no such graph exists.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $N$ and $K$.

### Output
For each test case:
- If no valid graph exists, print a single line containing the integer $-1$.
- Otherwise, first, print a line containing a single integer $M$ — the number of edges in your graph.
- Then, print $M$ lines. Each of these lines must contain two space-separated integers $u$ and $v$ ($1 \le u, v \le N$; $u \neq v$) denoting the endpoints of one edge. All edges must be different, i.e. parallel edges are not allowed.

### Constraints
- $1 \le T \le 100$
- $2 \le N \le 100$
- $1 \le K \le \frac{N(N-1)}{2}$

### Example Input
```
1
6 4
```

### Example Output
```
7
1 2
2 3
3 1
3 4
4 5
5 6
6 4
```

### Explanation
**Example case 1:** The diameter of the graph is $3$. There are exactly $4$ unordered pairs of nodes at distance $3$: $(1, 5)$, $(1, 6)$, $(2, 5)$ and $(2, 6)$.

![](https://codechef_shared.s3.amazonaws.com/download/Images/COOK124/DIAMS.png)

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>