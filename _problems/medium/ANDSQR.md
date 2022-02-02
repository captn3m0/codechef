---
{"category_name":"medium","problem_code":"ANDSQR","problem_name":"AND Square Subsegments","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"shavelv","problem_tester":null,"date_added":"30-03-2018","tags":{"0":"and","1":"bit","2":"fenwick","3":"lazy","4":"observation","5":"pre","6":"seg","7":"sept18","8":"shavelv"},"editorial_url":"https://discuss.codechef.com/problems/ANDSQR","time":{"view_start_date":1537176602,"submit_start_date":1537176602,"visible_start_date":1537176602,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Hindi](http://www.codechef.com/download/translated/SEPT18/hindi/ANDSQR.pdf) ,[Bengali](http://www.codechef.com/download/translated/SEPT18/bengali/ANDSQR.pdf) , [Mandarin chinese](http://www.codechef.com/download/translated/SEPT18/mandarin/ANDSQR.pdf) , [Russian](http://www.codechef.com/download/translated/SEPT18/russian/ANDSQR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SEPT18/vietnamese/ANDSQR.pdf) as well.

You are given a sequence of non-negative integers $A_1, A_2, \dots, A_N$ and $Q$ queries. A sequence is *good* if the bitwise AND of all its elements is a perfect square. In each query:
- you are given two parameters $L$ and $R$
- consider the subsequence $B = A_L, A_{L+1}, \dots, A_R$
- you should find the number of good **contiguous** subsequences of $B$ 

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.
- Each of the following $Q$ lines contains two space-separated integers $L$ and $R$ describing one query.

### Output
For each query, print a single line containing one integer — the number of good contiguous subsequences.

### Constraints 
- $1 \le T \le 1,000$
- $1 \le N \le 10^5$
- $0 \le A_i \lt 2^{30}$ for each valid $i$
- $1 \le Q \le 5 \cdot 10^5$
- $1 \le L \le R \le N$
- the sum of $N$ over all test cases does not exceed $10^5$
- the sum of $Q$ over all test cases does not exceed $5 \cdot 10^5$

### Subtasks
**Subtask #1 (30 points):**
- the sum of $N$ over all test cases does not exceed $100$
- the sum of $Q$ over all test cases does not exceed $100$

**Subtask #2 (70 points):** original constraints

### Example Input
```
1
3 2
1 2 3
2 2
1 3
```

### Example Output
```
0
3
```

### Explanation
**Example case 1:** For the first query, there is only one possible subsequence, $[2]$. The AND of its elements is equal to its only element $2$, which is not a perfect square.

For the second query, there are six contiguous subsequences:
- $[1]$; its AND is 1, a perfect square
- $[1, 2]$; its AND is 0, a perfect square
- $[1, 2, 3]$; its AND is 0, a perfect square
- $[2]$; its AND is 2, not a perfect square
- $[2, 3]$; its AND is 2, not a perfect square
- $[3]$; its AND is 3, not a perfect square
