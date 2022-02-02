---
{"category_name":"easy","problem_code":"WNDR","problem_name":"Wanderer","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"watcher","problem_tester":null,"date_added":"20-01-2019","tags":{"0":"dynamic","1":"graphs","2":"ltime68","3":"watcher"},"editorial_url":"https://discuss.codechef.com/problems/WNDR","time":{"view_start_date":1548522002,"submit_start_date":1548522002,"visible_start_date":1548522002,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Mandarin](http://www.codechef.com/download/translated/LTIME68/mandarin/WNDR.pdf) , [Bengali](http://www.codechef.com/download/translated/LTIME68/bengali/WNDR.pdf) , [Hindi](http://www.codechef.com/download/translated/LTIME68/hindi/WNDR.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME68/russian/WNDR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME68/vietnamese/WNDR.pdf) as well.

Nadaca is a country with $N$ cities. These cities are numbered $1$ through $N$ and connected by $M$ bidirectional roads. Each city can be reached from every other city using these roads.

Initially, Ryan is in city $1$. At each of the following $K$ seconds, he may move from his current city to an adjacent city (a city connected by a road to his current city) or stay at his current city. Ryan also has $Q$ conditions $(a_1, b_1), (a_2, b_2), \ldots, (a_Q, b_Q)$ meaning that during this $K$-second trip, for each valid $i$, he wants to be in city $a_i$ after exactly $b_i$ seconds.

Since you are very good with directions, Ryan asked you to tell him how many different trips he could make while satisfying all conditions. Compute this number modulo $10^9 + 7$. A trip is a sequence of Ryan's current cities after $1, 2, \ldots, K$ seconds.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $M$ and $K$.
- Each of the next $M$ lines contains two space-separated integers $u$ and $v$ denoting a road between cities $u$ and $v$.
- The next line contains a single integer $Q$.
- $Q$ lines follow. For each $i$ ($1 \le i \le Q$), the $i$-th of these lines contains two space-separated integers $a_i$ and $b_i$.

### Output
For each test case, print a single line containing one integer — the number of trips Ryan can make, modulo $10^9+7$.

### Constraints
- $1 \le T \le 50$
- $1 \le N, M, K, Q \le 9,000$
- $1 \le u_i, v_i \le N$ for each valid $i$
- $u_i \neq v_i$ for each valid $i$
- there is at most one road between each pair of cities
- each city is reachable from every other city
- $1 \le a_i \le N$ for each valid $i$
- $0 \le b_i \le K$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $9,000$
- the sum of $K$ over all test cases does not exceed $9,000$
- the sum of $M$ over all test cases does not exceed $9,000$
- the sum of $Q$ over all test cases does not exceed $9,000$

### Subtasks
**Subtask #1 (20 points):**
- the sum of $N$ over all test cases does not exceed $400$
- the sum of $K$ over all test cases does not exceed $400$
- the sum of $M$ over all test cases does not exceed $400$
- the sum of $Q$ over all test cases does not exceed $400$

**Subtask #2 (80 points):** original constraints

### Example Input
```
3
4 3 3
1 2
1 3
1 4
0
4 3 3
1 2
1 3
1 4
1
2 2
4 3 3
1 2
1 3
1 4
1
2 1
```

### Example Output
```
28
4
6
```
