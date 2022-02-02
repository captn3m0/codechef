---
{"category_name":"easy","problem_code":"RECNDSUB","problem_name":"Chef and Subsequences","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"rishup_nitdgp","problem_tester":null,"date_added":"12-02-2020","tags":{"0":"combinatorics","1":"easy","2":"number","3":"rc122020","4":"rishup_nitdgp","5":"rishup_nitdgp","6":"sachin_yadav"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/RECNDSUB","time":{"view_start_date":1588010400,"submit_start_date":1588010400,"visible_start_date":1588010400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=RECNDSUB","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chef has a sequence $A$ of $N$ integers such that $|A_i| \leq 1$.

For each $x$ such that $-N \leq x \leq N$, find the number of non-empty subsequences of $A$ whose sum of elements is $x$. Since that answer may be too large, print this modulo $163,577,857$.

###Input:
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

###Output:
Output $2N+1$ space-separated integers $C_0, C_1 \ldots C_{2*N}$, where $C_i$ denotes the number of non-empty subsequences with sum $(i-N)$, modulo $163,577,857$.

###Constraints:
- $1 \le T \le 10^5$
- $1 \le N \le 10^5$
- $|A_i| \le 1$ for each valid $i$
- It's guaranteed that the total length of the arrays in one test file doesn't exceed $2*10^6$

###Sample Input:
```
2
2
1 0
3
-1 1 -1
```

###Sample Output:
```
0 0 1 2 0
0 1 3 2 1 0 0
```

### Explanation:
In the first test case, the non-empty subsequences with sum $0$ are $\{0\}$ while the subsequences with sum $1$ are $\{1\}$ and $\{1,0\}$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>