---
{"category_name":"medium","problem_code":"BACREP","problem_name":"Bacterial Reproduction","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5 8\r\n4 3\r\n3 1\r\n5 2\r\n1 2\r\n1 10 4 9 4\r\n+ 1 6\r\n? 3\r\n+ 3 5\r\n? 3\r\n+ 2 2\r\n+ 5 10\r\n? 5\r\n? 4","output":"6\r\n0\r\n33\r\n25","explanation":"The numbers of bacteria in all vertices at the end of each second are:\r\n- $0$-th second: $6, 1, 1, 13, 14$\r\n- $1$-st second: $0, 6, 6, 14, 15$\r\n- $2$-nd second: $0, 0, 5, 20, 21$\r\n- $3$-rd second: $0, 0, 0, 25, 21$\r\n- $4$-th second: $0, 2, 0, 25, 21$\r\n- $5$-th second: $0, 0, 0, 25, 33$\r\n- $6$-th second: $0, 0, 0, 25, 33$\r\n- $7$-th second: $0, 0, 0, 25, 33$","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"mikaeel","problem_tester":null,"date_added":"1-08-2019","tags":{"0":"fenwick","1":"medium","2":"mikaeel","3":"oct19","4":"r_64","5":"segment","6":"trees"},"problem_difficulty_level":"Medium-Hard","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/BACREP","time":{"view_start_date":1571045400,"submit_start_date":1571045400,"visible_start_date":1571045400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BACREP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/OCT19/hindi/BACREP.pdf), [Bengali](https://www.codechef.com/download/translated/OCT19/bengali/BACREP.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/OCT19/mandarin/BACREP.pdf), [Russian](https://www.codechef.com/download/translated/OCT19/russian/BACREP.pdf), and [Vietnamese](https://www.codechef.com/download/translated/OCT19/vietnamese/BACREP.pdf) as well.

Chef has a rooted tree with $N$ vertices (numbered $1$ through $N$); vertex $1$ is the root of the tree. Initially, there are some bacteria in its vertices. Let's denote the number of sons of vertex $v$ by $s_v$; a leaf is a vertex without sons. During each second, the following events happen:
- For each non-leaf vertex $v$, if there are $x$ bacteria in this vertex at the start of this second, they divide into $s_v \cdot x$ bacteria. At the end of this second, $x$ of these bacteria instantly move to each of its sons (none of them stay in vertex $v$). The original $x$ bacteria do not exist any more.
- Zero or more bacteria appear in one vertex. These bacteria do not divide or move at this second.

Initially, we are at the start of second $0$. You should process $Q$ queries ― one query during each of the seconds $0$ through $Q-1$. There are two types of queries:
- `+ v k`: During this second, $k$ bacteria appear in vertex $v$.
- `? v`: Find the number of bacteria in vertex $v$ at the end of this second ― after the divided bacteria have moved.

### Input
- The first line of the input contains two space-separated integers $N$ and $Q$.
- Each of the next $N-1$ lines contains two space-separated integers $x$ and $y$ denoting that vertices $x$ and $y$ are connected by an edge.
- The next line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$ denoting the initial numbers of bacteria in vertices $1$ through $N$.
- $Q$ lines follow. Each of these lines describes a query in the format `+ v k` or `? v`.

### Output
For each query of the second type, print a single line containing one integer ― the number of bacteria in the given vertex.

### Constraints
- $1 \le N, Q \le 5 \cdot 10^5$
- $1 \le a_i \le 10^9$ for each valid $i$
- $1 \le x, y \le N$
- the graph described on the input is a tree
- $1 \le v \le N$
- $1 \le k \le 10^9$

### Subtasks
**Subtask #1 (20 points):** $1 \le N, Q \le 5,000$

**Subtask #2 (30 points):** $1 \le N, Q \le 10^5$

**Subtask #3 (50 points):** original constraints

### Example Input
```
5 8
4 3
3 1
5 2
1 2
1 10 4 9 4
+ 1 6
? 3
+ 3 5
? 3
+ 2 2
+ 5 10
? 5
? 4
```

### Example Output
```
6
0
33
25
```

### Explanation
The numbers of bacteria in all vertices at the end of each second are:
- $0$-th second: $6, 1, 1, 13, 14$
- $1$-st second: $0, 6, 6, 14, 15$
- $2$-nd second: $0, 0, 5, 20, 21$
- $3$-rd second: $0, 0, 0, 25, 21$
- $4$-th second: $0, 2, 0, 25, 21$
- $5$-th second: $0, 0, 0, 25, 33$
- $6$-th second: $0, 0, 0, 25, 33$
- $7$-th second: $0, 0, 0, 25, 33$

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>