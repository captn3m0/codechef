---
{"category_name":"medium","problem_code":"RECNDARY","problem_name":"Chef and Array","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"rishup_nitdgp","problem_tester":null,"date_added":"20-03-2020","tags":{"0":"fenwick","1":"medium","2":"rc122020","3":"rishup_nitdgp","4":"rishup_nitdgp","5":"segment"},"problem_difficulty_level":"Medium","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/RECNDARY","time":{"view_start_date":1588010400,"submit_start_date":1588010400,"visible_start_date":1588010400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=RECNDARY","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chef has a circular array $A$ of $N$ integers $A_1, A_2 \ldots A_N$ where $A_N$ and $A_1$ are considered adjacent. 

The subarray $A_{i,j}$ defined as an array formed using elements of $A$ from $i^{th}$ index element to $j^{th}$ index element (both inclusive). Formally, $A_{i, j}$ is defined as:
- If $i \leq j$, then the subarray of $A$ from the index $i$ to index $j$, both inclusive.
- If $i > j$, then it denotes the subarray of $A$ from index $i$ to index $N$, followed by subarray of $A$ from index $1$ to index $j$.

A function $f(B)$ is defined on an array $B$ as the number of subarrays of $B$ which have sum less than $K$.

Let $S = \sum_{i = 1}^N \sum_{j = 1}^N f(A_{i, j})$. Find the value of $S$ modulo $1,000,000,007$.

###Input:
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two integers $N$ and $K$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

###Output:
For each test case, print a single line containing one integer ― the value of $S$ modulo $1,000,000,007$.

###Constraints 
- $1 \le T \le 10$
- $1 \le N \le 2*10^5$
- $|K| \le 10^{15}$
- $|A_i| \le 10^9$ for each valid $i$

###Sample Input:
```
3
3 1
0 0 0
2 1
1 -1
1 1
-1
```

###Sample Output:
```
30
5
1
```

###Explanation
In the second test case, the array is $[1, -1]$ and $K = 1$.

$f(A_{1, 1})= 0$

$f(A_{1, 2}) = 2$, because both the subarrays $[1, -1]$ and $[-1]$ have sum $< K$.

$f(A_{2, 1}) = 2$, because the array we are considering now is $[-1, 1]$, and both the subarrays $[1, -1]$ and $[-1]$ have sum $< K$.

$f(A_{2, 2}) = 1$

The sum of these is 5, which is the answer.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>