---
{"category_name":"medium","problem_code":"SOSTD","problem_name":"Swag Subsets","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"deadwing97","problem_tester":null,"date_added":"19-12-2018","tags":{"0":"cook101","1":"deadwing97","2":"lazypropagation","3":"segment"},"editorial_url":"https://discuss.codechef.com/problems/SOSTD","time":{"view_start_date":1545589802,"submit_start_date":1545589802,"visible_start_date":1545589802,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/CK101TST/hindi/SOSTD.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/CK101TST/mandarin/SOSTD.pdf), [Russian](http://www.codechef.com/download/translated/CK101TST/russian/SOSTD.pdf), [Vietnamese](http://www.codechef.com/download/translated/CK101TST/vietnamese/SOSTD.pdf) and [Bengali](http://www.codechef.com/download/translated/CK101TST/bengali/SOSTD.pdf) as well.

Hussain really likes problems that involve summation over X, where X can be subsets, paths in a tree, intervals of numbers etc.

You are given two integer sequences $A_1, A_2, A_3, \ldots, A_N$ and $B_1, B_2, B_3, \ldots, B_N$. Consider an arbitrary non-empty subset $S$ of the set $\{1, 2, \ldots, N\}$. Let's define the *swagness* of such a set as
$$\left(\mathrm{max}_{(p \in S)} \; A_p\right) \cdot \left(\mathrm{max}_{(p \in S)} \; B_p\right) \,.$$

Hussain is interested in the sum of swagnesses of all possible sets $S$. (Note that there are $2^N-1$ such sets.) Since the sum may be very large, compute it modulo $10^9+7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, A_3, \ldots, A_N$.
- The third line contains $N$ space-separated integers $B_1, B_2, B_3, \ldots, B_N$.

### Output
For each test case, print a single line containing one integer — the total swagness modulo $10^9+7$.

### Constraints 
- $1 \le T \le 1,000$
- $2 \le N \le 2 \cdot 10^5$
- $1 \le A_i, B_i \le 10^6$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Example Input
```
1
3
1 2 3
6 5 4
```

### Example Output
```
91
```

### Explanation
**Example case 1:** The answer is $1 \cdot 6 + 2 \cdot 5 + 3 \cdot 4 + 2 \cdot 6 + 3 \cdot 6 + 3 \cdot 5 + 3 \cdot 6$.
