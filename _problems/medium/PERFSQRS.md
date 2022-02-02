---
{"category_name":"medium","problem_code":"PERFSQRS","problem_name":"Ppeerrffeecctt Ssqquuaarreess","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3 2 1\r\n2 3","output":4,"explanation":"The $4$ valid sequences are $[1, 1, 1]$, $[1, 2, 2]$, $[2, 1, 1]$ and $[2, 2, 2]$. \r\n\r\n### Example Input\r\n```\r\n10 23 2\r\n2 3 \r\n5 9\r\n```\r\n\r\n### Example Output\r\n```\r\n735312645\r\n```\r\n\r\n### Example Input\r\n```\r\n998244 244353 6\r\n69 6969\r\n45666 51253\r\n60010 100000\r\n101010 200999\r\n555555 606060\r\n969699 998244\r\n```\r\n\r\n### Example Output\r\n```\r\n898332469\r\n```","isDeleted":false}}},"video_editorial_url":"https://youtu.be/-8fLGaPtAJc","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"sjshohag","problem_tester":"","date_added":"7-10-2020","tags":{"0":"cook123","1":"medium","2":"mobius","3":"number","4":"polynomial","5":"psychik","6":"sjshohag","7":"sjshohag"},"problem_difficulty_level":"Medium-Hard","best_tag":"Mobius Function","editorial_url":"https://discuss.codechef.com/problems/PERFSQRS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PERFSQRS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK123/hindi/PERFSQRS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK123/mandarin/PERFSQRS.pdf), [Russian](https://www.codechef.com/download/translated/COOK123/russian/PERFSQRS.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK123/vietnamese/PERFSQRS.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK123/bengali/PERFSQRS.pdf) as well.

For a sequence of integers $A_1, A_2, \ldots, A_N$, let $G(A)$ denote a graph with $N$ nodes (numbered $1$ through $N$) such that for each pair of distinct nodes $i$ and $j$, there is an undirected edge between these nodes if and only if $A_i \cdot A_j$ is a *perfect square*.

You are given a graph with $N$ nodes (numbered $1$ through $N$) and an integer $K$. Find the number of integer sequences  $A_1, A_2, \ldots, A_N$ such that $1 \le A_i \le K$ for each valid $i$ and the given graph is a *subgraph* of $G(A)$. Since this number might be very large, compute it modulo $998,244,353$.

Note that the graph is described in an unusual way ― you are given $M$ non-intersecting ranges $[L_1, R_1], [L_2, R_2], \ldots, [L_M, R_M]$ and for each valid $i$, the graph contains undirected edges between nodes $L_i$ and $L_i + 1$, between nodes $L_i + 1$ and $L_i + 2$, and so on up to an edge between nodes $R_i - 1$ and $R_i$.

Notes:
- An integer $X$ is a perfect square if there is an integer $Y$ such that $X = Y^2$.
- A simple graph $B$ with $N$ nodes is a subgraph of a simple graph $A$ with $N$ identically numbered nodes if for each valid pair of nodes $u$ and $v$ connected by an edge in $B$, there is also an edge connecting nodes $u$ and $v$ in $A$. Refer to the following animation for more clarity:
<img src = "https://codechef_shared.s3.amazonaws.com/download/Images/COOK123/PERFSQRS/subgraph720p.gif" width = "100%" height = "100%">

### Input
- The first line of the input contains three space-separated integers $N$, $K$ and $M$.
- $M$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $L_i$ and $R_i$.

### Output
Print a single line containing one integer ― the number of valid sequences modulo $998,244,353$.

### Constraints
- $1 \le N \le 10^{10}$
- $1 \le K \le 10^{14}$
- $0 \le M \le 10^5$
- $1 \le L_i \lt R_i \le N$ for each valid $i$
- $R_i - L_i + 1 \le 10^5$ for each valid $i$
- $R_{i - 1} \lt L_i$ for each valid $i$

### Example Input
```
3 2 1
2 3
```

### Example Output
```
4
```

### Explanation
The $4$ valid sequences are $[1, 1, 1]$, $[1, 2, 2]$, $[2, 1, 1]$ and $[2, 2, 2]$. 

### Example Input
```
10 23 2
2 3 
5 9
```

### Example Output
```
735312645
```

### Example Input
```
998244 244353 6
69 6969
45666 51253
60010 100000
101010 200999
555555 606060
969699 998244
```

### Example Output
```
898332469
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>