---
{"category_name":"medium","problem_code":"SAFETR","problem_name":"Safety in Treeland","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n5 2\r\n5 2\r\n5 4\r\n5 3\r\n3 1\r\n2 1\r\n5 1\r\n5 2\r\n5 2\r\n1 2\r\n2 4\r\n3 1\r\n4 2\r\n5 2","output":"0 1 0 0 1\r\n0 2 0 2 2","explanation":"","isDeleted":false}}},"video_editorial_url":"https://youtu.be/AH9aSIw0arQ","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":3.5,"source_sizelimit":50000,"problem_author":"arthurfn","problem_tester":"","date_added":"2-05-2020","tags":{"0":"arthurfn","1":"arthurfn","2":"cook121","3":"depth","4":"fenwick","5":"maths","6":"medium","7":"psychik","8":"segment"},"problem_difficulty_level":"Medium-Hard","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/SAFETR","time":{"view_start_date":1598208302,"submit_start_date":1598208302,"visible_start_date":1598208302,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SAFETR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK121/hindi/SAFETR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK121/mandarin/SAFETR.pdf), [Russian](https://www.codechef.com/download/translated/COOK121/russian/SAFETR.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK121/vietnamese/SAFETR.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK121/bengali/SAFETR.pdf) as well.

The kingdom of Treeland consists of $N$ cities (numbered $1$ through $N$) connected by $N-1$ bidirectional roads in such a way that there is a path between each pair of cities.

In order to increase security in Treeland, the government decided to set up police offices in $K$ of its cities. For each valid $i$, the $i$-th office is in city $V_i$ and it has a *radius of efficiency* $R_i$.

Let's define the security level $S_i$ of each city $i$ as follows:
- Initially, the security level of each city is equal to zero.
- Then, for each police office $j$ that was built ($1 \le j \le K$), the security levels change in the following manner:
    - The security level of the city $V_j$ increases by $R_j$.
    - The security levels of all cities at the distance $1$ from $V_j$ increase by $R_j-1$.
    - ...
    - The security levels of all cities at the distance $R_j-1$ from $V_j$ increase by $1$.
- Formally, for each city $i$, the $j$-th office increases the security level of this city by $\mathrm{max}(0, R_j - \mathrm{distance}(i, V_j))$.

Alice was in charge of calculating the new security levels of all cities after the offices were built. She already finished her job and noticed an interesting coincidence: for each valid $i$, $S_{V_i} = R_i$ holds. Now she has challenged you to find the security levels of all cities.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- Then, $N-1$ lines follow. Each of these lines contains two space-separated integers $u$ and $v$ denoting that cities $u$ and $v$ are connected by a road.
- $K$ more lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $V_i$ and $R_i$.

### Output
For each test case, print a single line containing $N$ space-separated integers $S_1, S_2, \ldots, S_N$.

### Constraints
- $1 \le T \le 2,000$
- $2 \le N, K \le 8 \cdot 10^5$
- $1 \le u, v \le N$
- $1 \le V_i \le N$ for each valid $i$
- $V_1, V_2, \ldots, V_K$ are pairwise distinct
- $1 \le R_i$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $8 \cdot 10^5$

### Example Input
```
2
5 2
5 2
5 4
5 3
3 1
2 1
5 1
5 2
5 2
1 2
2 4
3 1
4 2
5 2
```

### Example Output
```
0 1 0 0 1
0 2 0 2 2
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>