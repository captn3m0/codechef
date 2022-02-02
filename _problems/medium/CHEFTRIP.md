---
{"category_name":"medium","problem_code":"CHEFTRIP","problem_name":"Chefina on a Trip","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n5 4\r\n1 5\r\n1 2\r\n4 2\r\n2 3\r\n4 6 2 1 5\r\n1 5\r\n3 4\r\n3 2\r\n5 4","output":1110,"explanation":"**Example case 1:** The sequence of heights of cities on the path from city $1$ to city $5$ is $[4, 5]$, and $4 \\lt 5$ holds, so it is a beautiful path.\r\n\r\n**Example case 2:** The sequence of heights of cities on the path from city $3$ to city $4$ is $[2, 6, 1]$, and $2 \\lt 6 \\gt 1$, so it is a beautiful path.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"rishup_nitdgp","problem_tester":null,"date_added":"2-05-2020","tags":{"0":"akashbhalotia","1":"cook118","2":"depth","3":"dynamic","4":"lowest","5":"medium","6":"rishup_nitdgp","7":"rishup_nitdgp"},"problem_difficulty_level":"Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/CHEFTRIP","time":{"view_start_date":1590345002,"submit_start_date":1590345002,"visible_start_date":1590345002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFTRIP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK118/hindi/CHEFTRIP.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK118/mandarin/CHEFTRIP.pdf), [Russian](https://www.codechef.com/download/translated/COOK118/russian/CHEFTRIP.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK118/vietnamese/CHEFTRIP.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK118/bengali/CHEFTRIP.pdf) as well.

As we all know, Chefland consists of $N$ cities (numbered $1$ through $N$) connected by $N-1$ roads in such a way that each city is reachable from all other cities. In other words, the cities and roads form a tree. For each valid $i$, the $i$-th city's height above sea level is $A_i$.

A path between two cities is said to be *beautiful* if the heights of the cities in the path first increase and then decrease. In other words, when we denote the sequence of cities the path passes through by $x_1, x_2, \ldots, x_L$, it is beautiful if $A_{x_1} \lt A_{x_2} \lt \ldots \lt A_{x_p} \gt \ldots \gt A_{x_{L-1}} \gt A_{x_L}$ holds for some integer $p$ ($1 \le p \le L$).

Chefina is planning a trip along a path in the tree. You should answer $Q$ queries. In each query, you are given two cities $x$ and $y$ and you should tell Chefina if the simple path between these cities is beautiful.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- Each of the following $N-1$ lines contains two space-separated integers $u$ and $v$ denoting that cities $u$ and $v$ are connected by a road.
- The next line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- Each of the following $Q$ lines contains two space-separated integers $x$ and $y$ describing a query.

### Output
For each test case, print a single line containing a string with length $Q$. For each valid $i$, the $i$-th character of this string should be '1' if the path in the $i$-th query is beautiful or '0' otherwise.

### Constraints
- $1 \le T \le 200$
- $1 \le N, Q \le 10^5$
- $1 \le u, v \le N$
- $1 \le x, y \le N$
- $1 \le A_i \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$
- the sum of $Q$ over all test cases does not exceed $10^6$

### Example Input
```
1
5 4
1 5
1 2
4 2
2 3
4 6 2 1 5
1 5
3 4
3 2
5 4
```

### Example Output
```
1110
```

### Explanation
**Example case 1:** The sequence of heights of cities on the path from city $1$ to city $5$ is $[4, 5]$, and $4 \lt 5$ holds, so it is a beautiful path.

**Example case 2:** The sequence of heights of cities on the path from city $3$ to city $4$ is $[2, 6, 1]$, and $2 \lt 6 \gt 1$, so it is a beautiful path.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>