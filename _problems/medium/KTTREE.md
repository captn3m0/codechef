---
{"category_name":"medium","problem_code":"KTTREE","problem_name":"K-Tuple Tree","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n5 2\r\n1 2 0 1 2\r\n1 3\r\n2 3\r\n3 4\r\n3 5\r\n10 3\r\n2 1 0 1 3 2 3 2 0 3\r\n1 2\r\n3 1\r\n3 4\r\n5 4\r\n4 6\r\n3 7\r\n8 7\r\n9 10\r\n9 1","output":"4\r\n7","explanation":"**Example case 1:** The $4$ valid sequences are $(1,2)$, $(1,5)$, $(4,2)$ and $(4,5)$.\r\n\r\n**Example case 2:** The $7$ valid sequences are:\r\n- $(2,6,7)$\r\n- $(2,6,10)$\r\n- $(2,8,5)$\r\n- $(2,8,10)$\r\n- $(4,1,7)$\r\n- $(4,1,10)$\r\n- $(4,8,10)$","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"yogesh951","problem_tester":"","date_added":"16-12-2020","tags":{"0":"bitmasking","1":"disjoint","2":"dynamic","3":"ltime91","4":"medium","5":"taran_1407","6":"yogesh951"},"problem_difficulty_level":"Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/KTTREE","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=KTTREE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME91/hindi/KTTREE.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME91/bengali/KTTREE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME91/mandarin/KTTREE.pdf), [Russian](https://www.codechef.com/download/translated/LTIME91/russian/KTTREE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME91/vietnamese/KTTREE.pdf) as well.

Chef opened a chain of restaurants in Chefland and invited his $K$ friends (numbered $1$ through $K$) to move there.

Chefland can be represented by a tree with $N$ vertices (numbered $1$ through $N$). For each valid $i$, the $i$-th vertex has a type $c_i$. There are $K+1$ types of vertices: $c_i = 0$ means that there is a restaurant in vertex $i$, while $1 \le c_i \le K$ means that there is a house with a colour $c_i$ in vertex $i$.

For each valid $i$, the $i$-th friend of Chef agrees to move to Chefland only if he will live in a house of colour $i$. Friends want to meet frequently, so Chef needs to choose houses for his friends in such a way that for each pair of friends, there is at least one restaurant on the unique simple path between their houses.

Find the number of ways to choose houses for all friends. Formally, you have to find the number of sequences of vertices $(v_1, v_2, \ldots, v_K)$ such that:
- for each $i$ ($1 \le i \le K$), $c_{v_i} = i$
- for each $i$ and $j$ ($1 \le i \lt j \le K$), there is at least one vertex with type $0$ on the path between $v_i$ and $v_j$

Since the number of these sequences could be large, compute it modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $c_1, c_2, \ldots, c_N$.
- Each of the next $N-1$ lines contains two space-separated integers $u$ and $v$ denoting that vertices $u$ and $v$ are connected by an edge.

### Output
For each test case, print a single line containing one integer — the number of ways to choose houses modulo $998,244,353$.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 10^5$
- $2 \le K \le 11$
- $0 \le c_i \le K$ for each valid $i$
- $1 \le u, v \le N$
- the graph described on the input is a tree
- the sum of $N$ over all test cases does not exceed $10^5$

### Subtasks
**Subtask #1 (5 points):**
- $N \le 50$
- $K \le 3$

**Subtask #2 (10 points):**
- $N \le 2,000$
- $K \le 2$

**Subtask #3 (10 points):** $K \le 2$

**Subtask #4 (10 points):** $K \le 3$

**Subtask #5 (10 points):**
- $K \le 7$
- the tree is linear — for each valid $i$, the $i$-th edge on the input connects vertices $i$ and $(i+1)$

**Subtask #6 (40 points):** $K \le 7$

**Subtask #7 (15 points):** original constraints

### Example Input
```
2
5 2
1 2 0 1 2
1 3
2 3
3 4
3 5
10 3
2 1 0 1 3 2 3 2 0 3
1 2
3 1
3 4
5 4
4 6
3 7
8 7
9 10
9 1
```

### Example Output
```
4
7
```

### Explanation
**Example case 1:** The $4$ valid sequences are $(1,2)$, $(1,5)$, $(4,2)$ and $(4,5)$.

**Example case 2:** The $7$ valid sequences are:
- $(2,6,7)$
- $(2,6,10)$
- $(2,8,5)$
- $(2,8,10)$
- $(4,1,7)$
- $(4,1,10)$
- $(4,8,10)$

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>