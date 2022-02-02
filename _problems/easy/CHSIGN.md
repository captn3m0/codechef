---
{"category_name":"easy","problem_code":"CHSIGN","problem_name":"Change the Signs","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"isaf27","problem_tester":null,"date_added":"19-03-2018","tags":{"0":"dynamic","1":"easy","2":"isaf27","3":"may18"},"editorial_url":"https://discuss.codechef.com/problems/CHSIGN","time":{"view_start_date":1526290200,"submit_start_date":1526290200,"visible_start_date":1526290200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/MAY18/mandarin/CHSIGN.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/MAY18/russian/CHSIGN.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/MAY18/vietnamese/CHSIGN.pdf" target="_blank">Vietnamese</a> as well.</h3>

You are given a sequence of integers $A_1, A_2, \dots, A_N$.

You should choose an arbitrary (possibly empty) subsequence of $A$ and multiply each element of this subsequence by $-1$. The resulting sequence should satisfy the following condition: the sum of elements of any **contiguous** subsequence with length greater than 1 is strictly positive.

You should minimise the sum of elements of the resulting sequence. Find one such sequence with the minimum possible sum.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.

### Output
For each test case, print a single line containing $N$ space-separated integers $B_1, B_2, \dots, B_N$. For each valid $i$, $B_i$ must be equal to either $A_i$ (the sign of this element did not change) or $-A_i$ (the sign of this element changed).

If there is more than one answer, you may output any one.

### Constraints
- $1 \le T \le 10^5$
- $2 \le N \le 10^5$
- $1 \le A_i \le 10^9$ for each valid $i$
- the sum of $N$ for all test cases does not exceed $5 \cdot 10^5$

### Subtasks
**Subtask #1 (20 points):**
- $1 \le T \le 200$
- $2 \le N \le 10$

**Subtask #2 (30 points):**
- $1 \le T \le 1,000$
- $N \le 2,000$

**Subtask #3 (50 points):** original constraints

### Example Input
```
4
4
4 3 1 2
6
1 2 2 1 3 1
5
10 1 2 10 5
4
1 2 1 2
```

### Example Output
```
4 3 -1 2
-1 2 2 -1 3 -1
10 -1 2 10 -5
1 2 -1 2
```

### Explanation
**Example case 1:** If we change only the sign of $A_3$, we get a sequence $\{4, 3, -1, 2\}$ with sum $8$. This sequence is valid because the sums of all its contiguous subsequences with length $> 1$ are positive. (For example, the sum of elements of the contiguous subsequence $\{A_3, A_4\}$ equals $-1 + 2 = 1 > 0$.)

There are only two valid sequences $\{4, 3, -1, 2\}$ and $\{4, 3, 1, 2\}$ with sums $8$ and $10$ respectively, so this sequence has the smallest possible sum.

For instance, the sequence $\{4, -3, 1, 2\}$ isn't valid, because the sum of $\{A_2, A_3, A_4\}$ equals $-3 + 1 + 2 = 0 \le 0$.
