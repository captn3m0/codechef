---
{"category_name":"hard","problem_code":"PARRTY","problem_name":"Party","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"watcher","problem_tester":null,"date_added":"31-12-2018","tags":{"0":"implementation","1":"jan19","2":"medium","3":"segment","4":"taran_1407","5":"watcher"},"editorial_url":"https://discuss.codechef.com/problems/PARRTY","time":{"view_start_date":1547458202,"submit_start_date":1547458202,"visible_start_date":1547458202,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problem statements in [Hindi](http://www.codechef.com/download/translated/JAN19/hindi/PARRTY.pdf), [Bengali](http://www.codechef.com/download/translated/JAN19/bengali/PARRTY.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/JAN19/mandarin/PARRTY.pdf), [Russian](http://www.codechef.com/download/translated/JAN19/russian/PARRTY.pdf), and [Vietnamese](http://www.codechef.com/download/translated/JAN19/vietnamese/PARRTY.pdf) as well.

There are $N$ employees (numbered $1$ through $N$) working at ShareChat. You are given $M$ pairs of employees that do not get along with each other.

Arya, the CEO of ShareChat, wants to throw a party. She is still not sure which employees to invite, but her assistant has given her $Q$ suggestions. Each suggestion consists of $K$ intervals $[L_1, R_1], [L_2, R_2], \ldots, [L_K, R_K]$; this means that all employees whose numbers lie in the union of these intervals should be invited to the party.

Arya is a perfectionist, so she wants all invited employees to get along. You, her second assistant, are the only one she could trust with finding out, for each suggestion, if this condition is satisfied. Complete this task!

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- Each of the following $M$ lines contains two space-separated integers $u$ and $v$ indicating that employees $u$ and $v$ do not get along.
- The next line contains a single integer $Q$.
- The following $Q$ lines describe suggestions. Each of these lines contains an integer $K$, followed by a space and $2K$ space-separated integers $L_1, R_1, L_2, R_2, \ldots, L_K, R_K$.

### Output
For each suggestion, print a single line containing the string `"YES"` if all invited employees get along or `"NO"` otherwise. 

### Constraints
- $1 \le T \le 100$
- $1 \le N, M, Q \le 2 \cdot 10^5$
- $1 \le u, v \le N$
- $u \neq v$
- $1 \le K \le 2 \cdot 10^5$
- $1 \le L_i \le R_i \le N$ for each valid $i$
- $[L_1, R_1], [L_2, R_2], \ldots, [L_K, R_K]$ are pairwise disjoint
- the sum of $K$ over all test cases does not exceed $2 \cdot 10^5$
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^5$
- the sum of $M$ over all test cases does not exceed $2 \cdot 10^5$
- the sum of $Q$ over all test cases does not exceed $2 \cdot 10^5$

### Example Input
```
2
3 3
1 2
2 3
1 3
2
1 2 2
2 3 3 1 1
4 2
1 4
1 4
2
2 1 1 2 3
2 1 2 3 4
```

### Example Output
```
YES
NO
YES
NO
```
