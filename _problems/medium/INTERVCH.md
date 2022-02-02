---
{"category_name":"medium","problem_code":"INTERVCH","problem_name":"Digit Bounded Numbers","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"deadwing97","problem_tester":null,"date_added":"19-12-2018","tags":{"0":"cook101","1":"deadwing97","2":"dynamic","3":"inclusion"},"editorial_url":"https://discuss.codechef.com/problems/INTERVCH","time":{"view_start_date":1545589802,"submit_start_date":1545589802,"visible_start_date":1545589802,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/CK101TST/hindi/INTERVCH.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/CK101TST/mandarin/INTERVCH.pdf), [Russian](http://www.codechef.com/download/translated/CK101TST/russian/INTERVCH.pdf), [Vietnamese](http://www.codechef.com/download/translated/CK101TST/vietnamese/INTERVCH.pdf) and [Bengali](http://www.codechef.com/download/translated/CK101TST/bengali/INTERVCH.pdf) as well.

You are given $N$ intervals $[L_1, R_1], [L_2, R_2], \ldots, [L_N, R_N]$. Consider $N$ integers $x_1, x_2, \ldots, x_N$ such that:
- $x_i \in [L_i, R_i]$ for each valid $i$
- all decimal digits of $S = x_1 + x_2 + x_3 + \ldots + x_N$ (without leading zeroes) lie between $A$ and $B$ inclusive

In how many different ways can you pick the sequence $x_1, x_2, \ldots, x_N$? Since this number may be very large, compute it modulo $10^9+7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $A$ and $B$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains two space-separated integers $L_i$ and $R_i$.

### Output
For each test case, print a single line contains one integer — the number of ways to choose $x_1, x_2, \ldots, x_N$, modulo $10^9+7$.

### Constraints
- $1 \le T \le 200$
- $1 \le N \le 7$
- $0 \le A \le B \le 9$
- $0 \le L_i \le R_i \lt 10^9$ for each valid $i$
- if $T \gt 1$, then $N \le 3$

### Example Input


1

2 2 4

1 3

1 3


### Example Output

6

