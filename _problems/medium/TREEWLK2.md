---
{"category_name":"medium","problem_code":"TREEWLK2","problem_name":"Tree Walk","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"26-10-2018","tags":{"0":"binary","1":"cases","2":"kingofnumbers","3":"lca","4":"ltime65","5":"medium","6":"path","7":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/TREEWLK2","time":{"view_start_date":1540659601,"submit_start_date":1540659601,"visible_start_date":1540659601,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Mandarin](http://www.codechef.com/download/translated/LTIME65/mandarin/TREEWLK2.pdf) , [Bengali](http://www.codechef.com/download/translated/LTIME65/bengali/TREEWLK2.pdf) , [Hindi](http://www.codechef.com/download/translated/LTIME65/hindi/TREEWLK2.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME65/russian/TREEWLK2.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME65/vietnamese/TREEWLK2.pdf) as well.

There are two people walking along a tree with $N$ nodes (numbered $1$ through $N$), each of them with speed 1 edge per second.

The walk of the first person is described by a sequence of nodes $u_1, u_2, \dots, u_K$. This person appears in node $u_1$ at time $0$ and walks to node $u_2$ using the shortest **path**; then, immediately after reaching $u_2$, walks to node $u_3$ using the shortest path, and so on, until reaching $u_K$, when this person disappears.

The walk of the second person is described by another sequence $v_1, v_2, \dots, v_L$ in the same manner.

Count how many times these two people meet — in other words, how many times they reach the same node (including the first and last nodes of their walks) at the same time.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $K$ and $L$.
- Each of the next $N-1$ lines contains two space-separated integers $p$ and $q$ describing an edge between node $p$ and node $q$.
- The following line contains $K$ space-separated integers $u_1, u_2, \dots, u_K$.
- The last line contains $L$ space-separated integers $v_1, v_2, \dots, v_L$.

### Output
For each test case, print a single line containing one integer — the number of times the two people meet.

### Constraints 
- $1 \le T \le 1,000$
- $2 \le N, K, L \le 10^5$
- $1 \le p, q \le N$
- $1 \le u_i \le N$ for each valid $i$
- $1 \le v_i \le N$ for each valid $i$
- $u_i \neq u_{i+1}$ for each valid $i$
- $v_i \neq v_{i+1}$ for each valid $i$
- the sum of $N$ in all test cases does not exceed $5 \cdot 10^5$
- the sum of $K$ in all test cases does not exceed $5 \cdot 10^5$
- the sum of $L$ in all test cases does not exceed $5 \cdot 10^5$

### Subtasks
**Subtask #1 (30 points):**
- $2 \le N, K, L \le 10^3$
- the sum of $N$ in all test cases does not exceed $5 \cdot 10^3$
- the sum of $K$ in all test cases does not exceed $5 \cdot 10^3$
- the sum of $L$ in all test cases does not exceed $5 \cdot 10^3$

**Subtask #2 (70 points):** original constraints

### Example Input
```
1
5 4 3
1 2
2 3
2 4
4 5
1 4 3 5
1 3 5
```

### Example Output
```
3
```
