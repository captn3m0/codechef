---
{"category_name":"easy","problem_code":"PRT","problem_name":"Profitable Paths","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n4\r\n1 2 3 4\r\n1 2\r\n2 3\r\n2 4\r\n5\r\n1 2 3 4 5\r\n1 2\r\n2 3\r\n3 4\r\n4 5","output":"24\r\n15","explanation":"**Example case 1:** $(1, 4, 2, 3)$ is one of the possible permutations that give the optimal answer. Then, the profits of paths between pairs of vertices $(1, 3)$, $(1, 4)$ and $(3, 4)$ are $7$, $8$ and $9$ respectively.\r\n\r\n**Example case 2:** Here, any permutation could be chosen.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ahmad_salah","problem_tester":null,"date_added":"5-01-2020","tags":{"0":"ahmad_salah","1":"cook114"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/PRT","time":{"view_start_date":1579458602,"submit_start_date":1579458602,"visible_start_date":1579458602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PRT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK114/hindi/PRT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK114/mandarin/PRT.pdf), [Russian](https://www.codechef.com/download/translated/COOK114/russian/PRT.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK114/vietnamese/PRT.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK114/bengali/PRT.pdf) as well.

You are given a tree with $N$ vertices (numbered $1$ through $N$) and a sequence of integers $A_1, A_2, \ldots, A_N$. You may choose an arbitrary permutation $p_1, p_2, \ldots, p_N$ of the integers $1$ through $N$. Then, for each vertex $i$, you should assign the value $A_{p_i}$ to this vertex.

The *profit* of a path between two vertices $u$ and $v$ is the sum of the values assigned to the vertices on that path (including $u$ and $v$).

Let's consider only (undirected) paths that start at a leaf and end at a different leaf. Calculate the maximum possible value of the sum of profits of all such paths. Since this value could be very large, compute it modulo $10^9 + 7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- Each of the following $N−1$ lines contains two space-separated integers $u$ and $v$ denoting that vertices $u$ and $v$ are connected by an edge.

### Output
For each test case, print a single line containing one integer — the maximum sum of profits, modulo $10^9 + 7$.

### Constraints
- $1 \le T \le 1,000$
- $1 \le N \le 300,000$
- $1 \le A_i \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^5$

### Example Input
```
2
4
1 2 3 4
1 2
2 3
2 4
5
1 2 3 4 5
1 2
2 3
3 4
4 5
```

### Example Output
```
24
15
```

### Explanation
**Example case 1:** $(1, 4, 2, 3)$ is one of the possible permutations that give the optimal answer. Then, the profits of paths between pairs of vertices $(1, 3)$, $(1, 4)$ and $(3, 4)$ are $7$, $8$ and $9$ respectively.

**Example case 2:** Here, any permutation could be chosen.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>