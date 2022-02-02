---
{"category_name":"medium","problem_code":"CHGORAM","problem_name":"Chef and Gordon Ramsay","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n4\r\n2 1 3\r\n1 2\r\n2 3\r\n2 4","output":1,"explanation":"**Example case 1:** The only valid triple is $(3, 2, 4)$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"sanroylozan","problem_tester":null,"date_added":"19-06-2019","tags":{"0":"aug19","1":"depth","2":"eulerian","3":"fenwick","4":"medium","5":"order","6":"policy","7":"sanroylozan","8":"segment","9":"vijju123"},"problem_difficulty_level":"Medium-Hard","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/CHGORAM","time":{"view_start_date":1565602202,"submit_start_date":1565602202,"visible_start_date":1565602202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHGORAM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/AUG19/hindi/CHGORAM.pdf), [Bengali](https://www.codechef.com/download/translated/AUG19/bengali/CHGORAM.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/AUG19/mandarin/CHGORAM.pdf), [Russian](https://www.codechef.com/download/translated/AUG19/russian/CHGORAM.pdf), and [Vietnamese](https://www.codechef.com/download/translated/AUG19/vietnamese/CHGORAM.pdf) as well. 

Chef really admires Gordon Ramsay. Both of them have restaurant chains. While Chef's restaurant chain consists of $N$ facilities (numbered $1$ through $N$), Gordon Ramsay has only $3$, and yet Gordon's restaurants are superior. Chef's marketing team has figured out how to take over the market. According to them, the problem is that the customers have too many restaurants to choose from and that Gordon's staff, by accident or by sheer marketing genius, has figured out the perfect distribution of restaurants. Therefore, Chef wants to close down $N-3$ restaurants as fast as possible and create a restaurant structure similar to Gordon Ramsay's. For that, he needs your help!

We know that Gordon Ramsay's restaurants are numbered $1, 2, 3$, where restaurant $1$ is the smallest and restaurant $3$ is the largest. They are located on a line in the order $p_1, p_2, p_3$, so the restaurants $p_1$ and $p_2$ are adjacent and the restaurants $p_2$ and $p_3$ are adjacent too.

Chef's restaurant system is a tree with $N$ vertices, where each vertex is one of his precious restaurants. Just like with Gordon's restaurants, they are numbered in the order of increasing size. Chef wants to count the number of ordered triples of restaurants $(a_1, a_2, a_3)$ which he can keep open while satisfying the following rules:
1. The restaurants $a_1$, $a_2$ and $a_3$ are located on a line, i.e. $a_2$ is on the shortest path between $a_1$ and $a_3$ (rebuilding the existing structure would be too costly).
2. For each $i, j$ ($1 \le i, j \le 3$), if $p_i \lt p_j$, then $a_i \lt a_j$.

Help Chef and calculate the number of these triples!

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains three space-separated integers $p_1$, $p_2$ and $p_3$.
- Each of the next $N-1$ lines contains two space-separated integers $u$ and $v$ denoting that the restaurants $u$ and $v$ are connected by an edge.

### Output
For each test case, print a single line containing one integer ― the number of triples.

### Constraints 
- $1 \le T \le 20$
- $3 \le N \le 10^5$
- $1 \le u, v \le N$
- the graph of Chef's restaurants is a tree
- the sequence $(p_1, p_2, p_3)$ is a permutation of $(1, 2, 3)$

### Subtasks
**Subtask #1 (5 points):** $1 \le N \le 100$

**Subtask #2 (10 points):** $1 \le N \le 1,000$

**Subtask #3 (10 points):** the tree is a [star graph](http://mathworld.wolfram.com/StarGraph.html)

**Subtask #4 (15 points):** the tree is a [path graph](http://mathworld.wolfram.com/PathGraph.html)

**Subtask #5 (30 points):** the sum of $N$ over all test cases does not exceed $2 \cdot 10^5$

**Subtask #6 (30 points):** original constraints

### Example Input
```
1
4
2 1 3
1 2
2 3
2 4
```

### Example Output
```
1
```

### Explanation
**Example case 1:** The only valid triple is $(3, 2, 4)$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>