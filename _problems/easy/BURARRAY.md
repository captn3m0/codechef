---
{"category_name":"easy","problem_code":"BURARRAY","problem_name":"Igzi and Burly Array","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\n7 9\n2 2 5\n1 0\n2 -3 0\n1 1\n2 0 3\n1 -4\n1 -2\n2 -4 -1\n2 -5 -3","output":"5  \n4\n4\n0\n1","explanation":"- Query 1: $l = 2$, $r = 5$. The maximum element of the subsequence $A_2, A_3, A_4, A_5$ is $A_5 = 5$. After this query, $s$ becomes $5\\%7 = 5$.\n- Query 2: $x = 5$. $A_5$ becomes $0$.\n- Query 3: $l = 2$, $r = 5$. The maximum element of the same subsequence is now $A_4 = 4$; $s$ becomes $(5+4)\\%7 = 2$.\n- Query 4: $x = 3$, $A_3$ becomes $0$.\n- Query 5: $l = 2$, $r = 5$. The maximum element of the same subsequence is still $A_4 = 4$; $s$ becomes $(5+4+4)\\%7 = 6$.\n- Query 6: $x = 2$, $A_2$ becomes $0$.\n- Query 7: $x = 4$, $A_4$ becomes $0$.\n- Query 8: $l = 2$, $r = 5$. All elements of the same subsequence as before are $0$, so the maximum is $0$; $s$ becomes $(5+4+4+0)\\%7 = 6$.\n- Query 9: $l = 1$, $r = 3$. The maximum of the subsequence $A_1, A_2, A_3$ is $A_1 = 1$; $s$ becomes $(5+4+4+0+1)\\%7 = 0$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"thesitzr","problem_tester":null,"date_added":"23-06-2019","tags":{"0":"binary","1":"ltime73","2":"taran_1407","3":"thesitzr","4":"treap","5":"union"},"problem_difficulty_level":"Easy","best_tag":"Binary Search","editorial_url":"","time":{"view_start_date":1561827602,"submit_start_date":1561827602,"visible_start_date":1561827602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BURARRAY","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME73/hindi/BURARRAY.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME73/bengali/BURARRAY.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME73/mandarin/BURARRAY.pdf), [Russian](https://www.codechef.com/download/translated/LTIME73/russian/BURARRAY.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME73/vietnamese/BURARRAY.pdf) as well.

Chef's friend Igzi is often at the coding gym, working out his mind muscles. When he is there, he asks Chef to guard his most prized posession: a sequence $A_1, A_2, \ldots, A_N$. Initially, for each $i$ ($1 \le i \le N$), $A_i = i$ held. However, Chef sometimes gets bored and starts playing with the sequence. Since $N$ can be very large, Chef has a lot of fun with it and he would like to share it with you.

You should process $Q$ queries of two types:
- `1 x`: set $A_x = 0$
- `2 l r`: find the maximum element in the subsequence $A_l, A_{l+1}, \ldots, A_r$

Since Chef does not want to make Igzi angry, the queries are encoded so that they have to be processed online:
- For each query, let's denote the sum of answers to all previous queries of type 2, modulo $N$, by $s$. (Initially, $s = 0$.)
- For each query of the first type, you are given an integer $y$. You can compute $x$ as $y + s$.
- For each query of the second type, you are given two integers $p$ and $q$. You can compute $l$ as $p + s$ and $r$ as $q + s$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- The following $Q$ lines describe queries.
    - Each of these lines starts with an integer $t$ denoting the type of the current query: $t = 1$ for a query of the first type or $t = 2$ for a query of the second type.
    - For a query of the first type, it is followed by a space and an integer $y$.
    - For a query of the second type, it is followed by a space and two space-separated integers $p$ and $q$.

### Output
For each query of the second type, print a single line containing one integer ― the maximum of the given subsequence.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 10^{18}$
- $1 \le Q \le 500,000$
- $1 \le l \le r \le N$
- $1 \le x \le N$
- the sum of $Q$ over all test cases does not exceed $1,000,000$

### Subtasks
**Subtask #1 (10 points):** $N, Q \le 1,000$

**Subtask #2 (10 points):** $N \le 100,000$

**Subtask #3 (30 points):** each query of the second type appears after all queries of the first type

**Subtask #4 (50 points):** original constraints

### Example Input
```
1
7 9
2 2 5
1 0
2 -3 0
1 1
2 0 3
1 -4
1 -2
2 -4 -1
2 -5 -3
```

### Example Output
```
5  
4
4
0
1
```

### Explanation
- Query 1: $l = 2$, $r = 5$. The maximum element of the subsequence $A_2, A_3, A_4, A_5$ is $A_5 = 5$. After this query, $s$ becomes $5\%7 = 5$.
- Query 2: $x = 5$. $A_5$ becomes $0$.
- Query 3: $l = 2$, $r = 5$. The maximum element of the same subsequence is now $A_4 = 4$; $s$ becomes $(5+4)\%7 = 2$.
- Query 4: $x = 3$, $A_3$ becomes $0$.
- Query 5: $l = 2$, $r = 5$. The maximum element of the same subsequence is still $A_4 = 4$; $s$ becomes $(5+4+4)\%7 = 6$.
- Query 6: $x = 2$, $A_2$ becomes $0$.
- Query 7: $x = 4$, $A_4$ becomes $0$.
- Query 8: $l = 2$, $r = 5$. All elements of the same subsequence as before are $0$, so the maximum is $0$; $s$ becomes $(5+4+4+0)\%7 = 6$.
- Query 9: $l = 1$, $r = 3$. The maximum of the subsequence $A_1, A_2, A_3$ is $A_1 = 1$; $s$ becomes $(5+4+4+0+1)\%7 = 0$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>