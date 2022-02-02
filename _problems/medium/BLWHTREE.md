---
{"category_name":"medium","problem_code":"BLWHTREE","problem_name":"Black-and-White Tree","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n12\r\n1 1 0 0 1 0 1 1 0 1 1 1\r\n1 10\r\n5 1\r\n7 6\r\n6 12\r\n4 6\r\n1 6\r\n2 6\r\n11 1\r\n3 1\r\n1 9\r\n8 1\r\n9\r\n8 4\r\n2 9\r\n3 8\r\n6 12\r\n2 9\r\n1 9\r\n7 12\r\n1 5\r\n10 6","output":"2\r\n4\r\n1\r\n0\r\n4\r\n0\r\n1\r\n0\r\n1","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"dalgerok","problem_tester":null,"date_added":"4-11-2019","tags":{"0":"combinatorics","1":"cook112","2":"dalgerok","3":"heavy","4":"inclusion","5":"medium","6":"taran_1407"},"problem_difficulty_level":"Medium","best_tag":"Heavy Light Decomposition","editorial_url":"https://discuss.codechef.com/problems/BLWHTREE","time":{"view_start_date":1574015400,"submit_start_date":1574015400,"visible_start_date":1574015400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BLWHTREE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK112/hindi/BLWHTREE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK112/mandarin/BLWHTREE.pdf), [Russian](https://www.codechef.com/download/translated/COOK112/russian/BLWHTREE.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK112/vietnamese/BLWHTREE.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK112/bengali/BLWHTREE.pdf) as well.

Chefland is a country with $N$ cities (numbered $1$ through $N$) connected by $N-1$ bidirectional roads. It is possible to travel from each city to any other city using the roads. Moreover, each city is specialised in either black or white chocolate.

Chef wants to construct three new restaurants. However, he is still not sure where to build them. You should answer $Q$ queries; in each query, Chef gives you two cities $L$ and $R$ and you should find the number of ways to choose a set of three distinct cities that satisfies the following conditions:
- The chosen cities belong to the shortest path between the cities $L$ and $R$ (both inclusive).
- For any two chosen cities (let's denote them by $u$ and $v$; $u \neq v$), there is at least one city specialised in black chocolate on the shortest path between the cities $u$ and $v$ (both inclusive).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$. For each valid $i$, $A_i = 1$ if the $i$-th city is specialised in black chocolate or $0$ if it is specialised in white chocolate.
- Each of the following $N-1$ lines contains two space-separated integers $x$ and $y$ denoting that cities $x$ and $y$ are connected by a road.
- The next line contains a single integer $Q$.
- Each of the following $Q$ lines contains two space-separated integers $L$ and $R$ describing a query.

### Output
For each query, print a single line containing one integer — the number of ways to choose three cities.

### Constraints
- $1 \le T \le 5$
- $1 \le N, Q \le 10^5$
- $0 \le A_i \le 1$ for each valid $i$
- $1 \le x, y \le N$
- $1 \le L, R \le N$

### Example Input
```
1
12
1 1 0 0 1 0 1 1 0 1 1 1
1 10
5 1
7 6
6 12
4 6
1 6
2 6
11 1
3 1
1 9
8 1
9
8 4
2 9
3 8
6 12
2 9
1 9
7 12
1 5
10 6
```

### Example Output
```
2
4
1
0
4
0
1
0
1
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>