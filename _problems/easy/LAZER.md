---
{"category_name":"easy","problem_code":"LAZER","problem_name":"Lasers Everywhere","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n4 3\r\n1 3 5 1\r\n2 4 4\r\n1 2 3\r\n1 4 1","output":"2\r\n1\r\n2","explanation":"**Example case 1:**\r\n- For the first query, the beam collides with the $2$-nd line segment and the $3$-rd line segment.\r\n- For the second query, the beam collides only with the $1$-st line segment. We do not consider it to collide with the second line segment, since its left endpoint is $(x_2,y)$.\r\n- For the third query, the beam collides with the $1$-st line segment and the $3$-rd line segment.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"vivek_1998299","problem_tester":null,"date_added":"15-01-2020","tags":{"0":"binary","1":"easy","2":"march20","3":"segment","4":"sweep","5":"tmwilliamlin","6":"vivek_1998299"},"problem_difficulty_level":"Easy-Medium","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/LAZER","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=LAZER","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/MARCH20/hindi/LAZER.pdf), [Bengali](https://www.codechef.com/download/translated/MARCH20/bengali/LAZER.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MARCH20/mandarin/LAZER.pdf), [Russian](https://www.codechef.com/download/translated/MARCH20/russian/LAZER.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MARCH20/vietnamese/LAZER.pdf) as well.

Vivek likes playing with lasers, but his friend Divyansh says that reading biographies is much more interesting. In order to prove that lasers are fun too, Vivek proposed an interesting task involving them:

You are given $N$ points in a plane (numbered $1$ through $N$); for each valid $i$, the $i$-th point is $P_i = (i, A_i)$. There are $N-1$ line segments between them (numbered $1$ through $N-1$); for each valid $i$, the $i$-th line segment is formed by connecting the points $P_i$ and $P_{i+1}$.

You should answer $Q$ queries. In each query, a laser beam is fired horizontally to the right, from a point $(x_1, y)$ to a point $(x_2, y)$ (where it stops and does not propagate further). Find the number of line segments it collides with on the way.

The beam is considered to collide with a line segment if it intersects or touches this segment, except when the left endpoint of this segment is $(x_2, y)$ or its right endpoint is $(x_1, y)$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$. 
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- Each of the next $Q$ lines contains three space-separated integers $x_1$, $x_2$ and $y$ describing a query.

### Output
For each query, print a single line containing one integer ― the number of line segments the beam collides with.

### Constraints
- $1 \le T \le 5$
- $2 \le N \le 100,000$
- $1 \le Q \le 100,000$
- $1 \le A_i \le 10^9$ for each valid $i$
- $1 \le x_1 \lt x_2 \le N$
- $1 \le y \le 10^9$

### Subtasks
**Subtask #1 (30 points):** $N, Q \le 2,000$

**Subtask #2 (70 points):** original constraints

### Example Input
```
1
4 3
1 3 5 1
2 4 4
1 2 3
1 4 1
```

### Example Output
```
2
1
2
```

### Explanation
**Example case 1:**
- For the first query, the beam collides with the $2$-nd line segment and the $3$-rd line segment.
- For the second query, the beam collides only with the $1$-st line segment. We do not consider it to collide with the second line segment, since its left endpoint is $(x_2,y)$.
- For the third query, the beam collides with the $1$-st line segment and the $3$-rd line segment.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>