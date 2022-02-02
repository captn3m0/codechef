---
{"category_name":"medium","problem_code":"CSUBSQ","problem_name":"Count Subsequences","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"deadwing97","problem_tester":null,"date_added":"14-12-2018","tags":{"0":"cook101","1":"deadwing97","2":"divide","3":"dynamic"},"editorial_url":"https://discuss.codechef.com/problems/CSUBSQ","time":{"view_start_date":1545589800,"submit_start_date":1545589800,"visible_start_date":1545589800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/CK101TST/hindi/CSUBSQ.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/CK101TST/mandarin/CSUBSQ.pdf), [Russian](http://www.codechef.com/download/translated/CK101TST/russian/CSUBSQ.pdf), [Vietnamese](http://www.codechef.com/download/translated/CK101TST/vietnamese/CSUBSQ.pdf) and [Bengali](http://www.codechef.com/download/translated/CK101TST/bengali/CSUBSQ.pdf) as well.

Let's call an integer sequence *nice* if the sum of its elements is divisible by a given integer $K$. You are given an integer sequence $A_1, A_2, \ldots, A_N$. Hasan wanted to find the number of nice subsequences of this sequence. However, this problem is too easy, so Hasan decided to add an extra constraint. 

For an arbitrary non-empty sequence of indices $i_1 \lt i_2 \lt \ldots \lt i_L$, let's call a subsequence $A_{i_1}, A_{i_2}, \ldots, A_{i_L}$ *very nice* if it is nice and $i_L-i_1 \ge W$. Help Hasan and find the number of very nice subsequences. Since this number may be very large, compute it modulo $10^9+7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $K$ and $W$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer — the number of very nice subsequences modulo $10^9+7$.

### Constraints 
- $1 \le T \le 1,000$
- $1 \le N \le 10^5$
- $2 \le K \le 50$
- $0 \le W \le N-1$
- $0 \le A_i \le K-1$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $3 \cdot 10^5$

### Example Input
```
1
6 3 3
1 1 1 1 1 1
```

### Example Output
```
17
```
