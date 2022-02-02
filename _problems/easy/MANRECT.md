---
{"category_name":"easy","problem_code":"MANRECT","problem_name":"Manhattan Rectangle","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sanroylozan","problem_tester":null,"date_added":"19-01-2019","tags":{"0":"equations","1":"feb19","2":"manhattan","3":"medium","4":"observations","5":"sanroylozan"},"editorial_url":"https://discuss.codechef.com/problems/MANRECT","time":{"view_start_date":1550050202,"submit_start_date":1550050202,"visible_start_date":1550050202,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/FEB19TST/hindi/MANRECT.pdf), [Bengali](http://www.codechef.com/download/translated/FEB19TST/bengali/MANRECT.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/FEB19TST/mandarin/MANRECT.pdf), [Russian](http://www.codechef.com/download/translated/FEB19TST/russian/MANRECT.pdf), and [Vietnamese](http://www.codechef.com/download/translated/FEB19TST/vietnamese/MANRECT.pdf) as well.

**This is an interactive problem.**

Chef has a secret rectangle. The sides of this rectangle are aligned with Cartesian axes $x$ and $y$. Let's denote the coordinates of the lower left corner of the rectangle by $(x_l, y_l)$ and the coordinates of the upper right corner by $(x_u, y_u)$; it is guaranteed that $x_l, y_l, x_u, y_u$ are non-negative integers. Your task is to find these coordinates.

You may ask Chef at most $Q$ queries (providing your answer does not count as a query). In each query, you give Chef a point with integer coordinates $(x_0, y_0)$. Chef responds with the Manhattan distance of this point to the closest point in the secret rectangle, i.e. if we denote the set of points in the rectangle by
$$S = \left\{(p, q) \mid p, q \in \mathbb{Z} \: \text{and} \: x_l \le p \le x_u \: \text{and} \: y_l \le q \le y_u\right\} \,,$$
then Chef answers with
$$\min_{(p, q) \in S} \left| p - x_0 \right| + \left| q - y_0 \right| \,.$$

### Interaction
- First, your program should read a line containing a single integer ― the number of test cases $T$. The description of interaction for $T$ test cases follows.
- For each test case, you may ask queries. To ask a query, print a line containing the character 'Q', a space and two space-separated integers $x_0$ and $y_0$ ($0 \le x_0, y_0 \le 10^9$). Then, you should read a line containing a single integer. If this integer is non-negative, it denotes the answer to your query. Otherwise, it means that you exceeded the limit on the number of queries, the coordinates you printed are invalid or some other error occured.
- When you have found the secret rectangle, you should print a line containing the character 'A', a space and four space-separated integers $x_l$, $y_l$, $x_u$ and $y_u$. Then, you should read a single line containing one integer, which is $1$ if your answer was correct or negative if it was wrong.

Note that when you read a negative integer, you should immediately terminate your program to receive a Wrong Answer verdict; otherwise, you may receive any verdict. Don't forget to flush the output after printing each line!

### Constraints 
- $1 \le T \le 500$
- $0 \le x_l \le x_u \le 10^9$
- $0 \le y_l \le y_u \le 10^9$

### Subtasks
**Subtask #1 (10 points):**
- $T \le 10$
- $x_u, y_u \le 100$
- $Q = 12345$

**Subtask #2 (40 points):** $Q = 70$

**Subtask #3 (50 points):** $Q = 7$

### Example
```
You                 Grader
                    1
Q 1 2
                    0
Q 3 4
                    0
Q 0 1
                    2
Q 4 5
                    2
A 1 2 3 4
                    1
```

### Explanation
**Example case 1:** From answers to the first two queries, it is clear that the lower left and upper right corner of the rectangle lie at points $(1, 2)$ and $(3, 4)$ respectively.
