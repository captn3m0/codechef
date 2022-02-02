---
{"category_name":"easy","problem_code":"TWOLANE","problem_name":"Two-lane Road","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"4\n2 10 20\n4 7\n1 2\n4 15 20\n4 6 9 13\n1 2 2 1\n5 10 1\n1 3 5 7 9\n1 2 1 2 1\n2 10 2\n4 5\n1 2","output":"10\n13\n10\n5","explanation":"**Example case 1:** Chef can start in lane $2$ and switch to lane $1$ at the position $X = 6$, then continue until reaching the restaurant.\n\n**Example case 2:** Chef can start in lane $2$ and switch to lane $1$ at $X = 5$. However, he cannot avoid the obstacle at $X = 13$, because he has not driven for at least $20$ units since the last switch.\n\n**Example case 3:** Chef should start in lane $2$ and then switch lanes at the positions $X=2$, $X=4$, $X=6$ and $X=8$. This way, he can reach the restaurant.\n\n**Example case 4:** Chef can start in lane $2$ but he cannot escape the second obstacle at $X$=5 since the first obstacle at $X$=4 doesn\u0027t give enough space for Chef to switch lanes.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"24-07-2019","tags":{"0":"easy","1":"greedy","2":"kingofnumbers","3":"ltime74"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/TWOLANE","time":{"view_start_date":1564246800,"submit_start_date":1564246800,"visible_start_date":1564246800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TWOLANE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME74/hindi/TWOLANE.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME74/bengali/TWOLANE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME74/mandarin/TWOLANE.pdf), [Russian](https://www.codechef.com/download/translated/LTIME74/russian/TWOLANE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME74/vietnamese/TWOLANE.pdf) as well.

Chef works as a cook in a restaurant. Each morning, he has to drive down a straight road with length $K$ to reach the restaurant from his home. Let's describe this road using a coordinate $X$; the position of Chef's home is $X = 0$ and the position of the restaurant is $X = K$.

The road has exactly two lanes (numbered $1$ and $2$), but there are $N$ obstacles (numbered $1$ through $N$) on it. For each valid $i$, the $i$-th obstacle blocks the lane $L_i$ at the position $X = X_i$ and does not block the other lane.

When driving, Chef cannot pass through an obstacle. He can switch lanes in zero time at any integer $X$-coordinate which does not coincide with the $X$-coordinate of any obstacle. However, whenever he switches lanes, he cannot switch again until driving for at least $D$ units of distance, and he can travel only in the direction of increasing $X$. Chef can start driving in any lane he wants. He can not switch lanes at non-integer  $X$-coordinate.

Sometimes, it is impossible to reach the restaurant without stopping at an obstacle. Find the maximum possible distance Chef can travel before he has to reach an obstacle which is in the same lane as him. If he can avoid all obstacles and reach the restaurant, the answer is $K$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $K$ and $D$.
- The second line contains $N$ space-separated integers $X_1, X_2, \ldots, X_N$.
- The third line contains $N$ space-separated integers $L_1, L_2, \ldots, L_N$.

### Output
For each test case, print a single line containing one integer ― the maximum distance Chef can travel.

### Constraints 
- $1 \le T \le 1,000$
- $1 \le N \le 10^5$
- $2 \le K \le 10^9$
- $1 \le D \le 10^9$
- $1 \le X_i \le K-1$ for each valid $i$
- $X_i \lt X_{i+1}$ for each valid $i$
- $1 \le L_i \le 2$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
4
2 10 20
4 7
1 2
4 15 20
4 6 9 13
1 2 2 1
5 10 1
1 3 5 7 9
1 2 1 2 1
2 10 2
4 5
1 2
```

### Example Output
```
10
13
10
5
```

### Explanation
**Example case 1:** Chef can start in lane $2$ and switch to lane $1$ at the position $X = 6$, then continue until reaching the restaurant.

**Example case 2:** Chef can start in lane $2$ and switch to lane $1$ at $X = 5$. However, he cannot avoid the obstacle at $X = 13$, because he has not driven for at least $20$ units since the last switch.

**Example case 3:** Chef should start in lane $2$ and then switch lanes at the positions $X=2$, $X=4$, $X=6$ and $X=8$. This way, he can reach the restaurant.

**Example case 4:** Chef can start in lane $2$ but he cannot escape the second obstacle at $X$=5 since the first obstacle at $X$=4 doesn't give enough space for Chef to switch lanes.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>