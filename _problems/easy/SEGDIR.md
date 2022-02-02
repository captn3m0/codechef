---
{"category_name":"easy","problem_code":"SEGDIR","problem_name":"Moving Segments","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"wittyceaser","problem_tester":null,"date_added":"12-10-2019","tags":{"0":"wittyceaser"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"","time":{"view_start_date":1136053800,"submit_start_date":1136053800,"visible_start_date":1136053800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SEGDIR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
$N$ line segments (numbered $1$ through $N$) are placed on the $x$-axis. For each valid $i$, the $i$-th segment starts at $x = L_i$ and ends at $x = R_i$.

At the time $t = 0$, all segments start moving; for each valid $i$, the $i$-th segment starts moving with speed $V_i$. You need to assign a direction - left or right - to the movement of each segment, i.e. choose a sign for each $V_i$ (not necessarily the same for all segments). The resulting movement must satisfy the following condition: at the time $t = 10^{10000}$, there are no two segments that touch or intersect.

Decide if it is possible to assign directions to the segments in such a way that the above condition is satisfied.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains three space-separated integers $L_i$, $R_i$ and $V_i$.

### Output
For each test case, print a single line containing the string `"YES"` if it is possible to assign the directions in a valid way or `"NO"` if it is impossible.

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 1,000$
- $1 \le L_i \lt R_i \le 10^9$ for each valid $i$
- $1 \le V_i \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $2,000$

### Example Input
```
2
4
5 7 2
4 6 1
1 5 2
6 8 1
4
1 2 1
1 2 1
1 2 1
1 2 1
```

### Example Output
```
YES
NO
```

### Explanation
**Example case 1:** We can assign the direction *left* to the $1$-st and $2$-nd segment and *right* to the $3$-rd and $4$-th segment.

**Example case 2:** There is no valid way to assign directions to segments.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>