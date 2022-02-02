---
{"category_name":"easy","problem_code":"PEWDSVTS","problem_name":"Pied Piper vs Hooli","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mathecodician","problem_tester":null,"date_added":"17-04-2019","tags":{"0":"cook105","1":"mathecodician","2":"priority","3":"radix","4":"simple"},"editorial_url":"https://discuss.codechef.com/problems/PEWDSVTS","time":{"view_start_date":1555871402,"submit_start_date":1555871402,"visible_start_date":1555871402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problems statements in [Hindi](http://www.codechef.com/download/translated/COOK105/hindi/PEWDSVTS.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/COOK105/mandarin/PEWDSVTS.pdf), [Russian](http://www.codechef.com/download/translated/COOK105/russian/PEWDSVTS.pdf), [Vietnamese](http://www.codechef.com/download/translated/COOK105/vietnamese/PEWDSVTS.pdf) and [Bengali](http://www.codechef.com/download/translated/COOK105/bengali/PEWDSVTS.pdf) as well.

Pied Piper is a startup company trying to build a new Internet called Pipernet. Currently, they have $A$ users and they gain $X$ users everyday. There is also another company called Hooli, which has currently $B$ users and gains $Y$ users everyday.

Whichever company reaches $Z$ users first takes over Pipernet. In case both companies reach $Z$ users on the same day, Hooli takes over.

Hooli is a very evil company (like E-Corp in Mr. Robot or Innovative Online Industries in Ready Player One). Therefore, many people are trying to help Pied Piper gain some users.

Pied Piper has $N$ *supporters* with contribution values $C_1, C_2, \ldots, C_N$. For each valid $i$, when the $i$-th supporter *contributes*, Pied Piper gains $C_i$ users instantly. After contributing, the contribution value of the supporter is halved, i.e. $C_i$ changes to $\left\lfloor C_i / 2 \right\rfloor$. Each supporter may contribute any number of times, including zero. Supporters may contribute at any time until one of the companies takes over Pipernet, even during the current day.

Find the minimum number of times supporters must contribute (the minimum total number of contributions) so that Pied Piper gains control of Pipernet.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains six space-separated integers $N$, $A$, $B$, $X$, $Y$ and $Z$.
- The second line contains $N$ space-separated integers $C_1, C_2, \ldots, C_N$ — the initial contribution values.

### Output
For each test case, if Hooli will always gain control of Pipernet, print a single line containing the string `"RIP"` (without quotes). Otherwise, print a single line containing one integer — the minimum number of times supporters must contribute.

### Constraints 
- $1 \le T \le 10$
- $1 \le N \le 10^5$
- $1 \le A, B, X, Y, Z \le 10^9$
- $A, B \lt Z$
- $0 \le C_i \le 10^9$ for each valid $i$

### Example Input
```
3
3 10 15 5 10 100
12 15 18
3 10 15 5 10 100
5 5 10
4 40 80 30 30 100
100 100 100 100
```

### Example Output
```
4
RIP
1
```

### Explanation
**Example case 1:** After $8$ days, Pied Piper will have $50$ users and Hooli will have $95$ users. Then, if each supporter contributes once, Pied Piper will also have $95$ users. After that, they still need $5$ more users, so supporter $3$ can contribute again, with $18/2 = 9$ more users. So the answer will be $4$.

**Example case 2:** There is no way to beat Hooli.
