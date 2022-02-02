---
{"category_name":"hard","problem_code":"CSTREE","problem_name":"Complement Spanning Trees","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5\n3 0 1\n3 3 2\n1 2\n1 3\n2 3\n3 3 1\n1 2\n1 3\n2 3\n6 9 20\n1 3\n2 3\n4 3\n5 3\n6 3\n1 4\n2 4\n4 5\n4 6\n30 4 5000\n1 2\n3 4\n5 6\n6 7","output":"3\n81\n0\n13872131\n797280964","explanation":"**Example case 1:** $H$ is the complete graph on three nodes, so the number of spanning trees is $3$ (any two of the edges form a spanning tree).","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"lg5293","problem_tester":null,"date_added":"24-06-2019","tags":{"0":"algebra","1":"aug19","2":"fast","3":"hard","4":"interpolation","5":"kirchhoffs","6":"lg5293","7":"polynomial","8":"vijju123"},"problem_difficulty_level":"Hard","best_tag":"Fast Fourier Transform","editorial_url":"https://discuss.codechef.com/problems/CSTREE","time":{"view_start_date":1565602202,"submit_start_date":1565602202,"visible_start_date":1565602202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CSTREE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/AUG19/hindi/CSTREE.pdf), [Bengali](https://www.codechef.com/download/translated/AUG19/bengali/CSTREE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/AUG19/mandarin/CSTREE.pdf), [Russian](https://www.codechef.com/download/translated/AUG19/russian/CSTREE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/AUG19/vietnamese/CSTREE.pdf) as well.

You are given a small graph $G_s$ with $N$ nodes (numbered $1$ through $N$) and $M$ edges.

Let's create a big graph $G_b$ with $NK$ nodes (numbered $1$ through $NK$) and $MK$ edges. $G_b$ consists of $K$ copies of $G_s$ ― formally, for each $k$ ($0 \le k \le K-1$) and each edge between nodes $u$ and $v$ in $G_s$, there is an edge between nodes $u+kN$ and $v+kN$ in $G_b$.

Afterwards, let's take the complement of $G_b$ and call it $H$ ― formally, $H$ is a graph with $NK$ nodes (numbered $1$ through $NK$) such that for each pair of nodes, there is an edge between these two nodes in $H$ if and only if there is no edge between these two nodes in $G_b$.

Count the number of spanning trees in $H$. Since this number could be very large, compute it modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $M$ and $K$.
- Each of the next $M$ lines contains two space-separated integers $a$ and $b$ denoting that the nodes $a$ and $b$ in $G_s$ are connected by an edge.

### Output
For each test case, print a single line containing one integer ― the number of spanning trees in $H$ modulo $998,244,353$.

### Constraints
- $1 \le T \le 20$
- $1 \le N \le 30$
- $0 \le M \le N(N-1)/2$
- $1 \le K \le 10^8$
- $1 \le a, b \le N$
- $G_s$ does not contain any self-loops or multi-edges

### Subtasks
**Subtask #1 (15 points):** $K \le 10$

**Subtask #2 (19 points):**
- $K \le 50$
- $M \le 5$

**Subtask #3 (21 points):**
- $K \le 5,000$
- $M = N(N-1)/2$

**Subtask #4 (22 points):** $K \le 5,000$

**Subtask #5 (23 points):** original constraints

### Example Input
```
5
3 0 1
3 3 2
1 2
1 3
2 3
3 3 1
1 2
1 3
2 3
6 9 20
1 3
2 3
4 3
5 3
6 3
1 4
2 4
4 5
4 6
30 4 5000
1 2
3 4
5 6
6 7
```

### Example Output
```
3
81
0
13872131
797280964
```

### Explanation
**Example case 1:** $H$ is the complete graph on three nodes, so the number of spanning trees is $3$ (any two of the edges form a spanning tree).

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>