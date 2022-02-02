---
{"category_name":"medium","problem_code":"CNTIT","problem_name":"Count It","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n5 3\r\n1 2 1\r\n1 3 2\r\n2 4 3\r\n2 5 2\r\n6 2\r\n1 2 1\r\n2 3 1\r\n3 4 2\r\n4 5 1\r\n5 6 2","output":"5\r\n4","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"kmaaszraa","problem_tester":null,"date_added":"12-01-2020","tags":{"0":"centroid","1":"cook114","2":"depth","3":"fenwick","4":"kmaaszraa","5":"raja1999"},"problem_difficulty_level":"Medium","best_tag":"Depth First Search","editorial_url":"https://discuss.codechef.com/problems/CNTIT","time":{"view_start_date":1579458602,"submit_start_date":1579458602,"visible_start_date":1579458602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CNTIT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK114/hindi/CNTIT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK114/mandarin/CNTIT.pdf), [Russian](https://www.codechef.com/download/translated/COOK114/russian/CNTIT.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK114/vietnamese/CNTIT.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK114/bengali/CNTIT.pdf) as well.

Roger loves drawing polygons. For an arbitrary sequence of points in a 2D plane $P_0, P_1, \ldots, P_{M-1}$, he can draw a polygon with $M$ sides by connecting the points $P_i$ and $P_{(i+1)\%M}$ with a straight line segment for each valid $i$. As a result, any point forms a polygon with $M = 1$, any two distinct points also form a polygon with $M = 2$ and a polygon may have sides with length $0$.

Roger calls a multiset $S$ of $M$ integers *polygonable* if there is a polygon created from a sequence with size $M$ (as defined above) such that the multiset of its side lengths is equal to $S$. For example, the multisets $(0, 0)$, $(1, 3, 3)$ or $(9, 9)$ are all polygonable, but $(4)$ and $(2, 5, 8)$ are not.

Roger has a tree with $N$ vertices (numbered $1$ through $N$), where each edge is coloured in one of $K$ colours (numbered $1$ through $N$). He wants to pick an unordered pair of distinct vertices in the tree and create a multiset $S = (S_1, S_2, \ldots, S_K)$, where $S_i$ is the number of edges on the path between the chosen vertices which have colour $i$. Now, Roger is wondering: in how many ways can he pick a pair of vertices such that the resulting multiset $S$ is polygonable? Find the number of such pairs.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- Each of the next $N-1$ lines contains three space-separated integers $v$, $u$ and $c$, denoting an edge with colour $c$ between vertices $v$ and $u$.

### Output
For each test case, print a single line containing one integer ― the number of valid pairs.

### Constraints 
- $1 \le T \le 10$
- $1 \le N \le 2 \cdot 10^5$
- $1 \le K \le 10$
- $1 \le u, v \le N$
- $1 \le c \le K$
- the graph described on the input is a tree
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^5$

### Example Input
```
2
5 3
1 2 1
1 3 2
2 4 3
2 5 2
6 2
1 2 1
2 3 1
3 4 2
4 5 1
5 6 2
```

### Example Output
```
5
4
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>