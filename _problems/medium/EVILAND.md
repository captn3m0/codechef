---
{"category_name":"medium","problem_code":"EVILAND","problem_name":"Chef in Evil Land","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"deva2802","problem_tester":null,"date_added":"14-02-2019","tags":{"0":"deva2802"},"time":{"view_start_date":1550428202,"submit_start_date":1550428202,"visible_start_date":1550428202,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/COOK103/hindi/EVILAND.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/COOK103/mandarin/EVILAND.pdf), [Russian](http://www.codechef.com/download/translated/COOK103/russian/EVILAND.pdf), [Vietnamese](http://www.codechef.com/download/translated/COOK103/vietnamese/EVILAND.pdf) and [Bengali](http://www.codechef.com/download/translated/COOK103/bengali/EVILAND.pdf) as well.

Recently, Chef has moved to an evil land. In this land, there is only one bank, which offers $N$ savings plans (numbered $1$ through $N$).

Initially, Chef has $1$ coin in his account. He may choose bank plans for as long as he wishes, in any order; each plan may be chosen any number of times. For each valid $i$, whenever Chef chooses the $i$-th savings plan, the number of coins in his bank account gets multiplied by the *interest factor* $P_i$ of this plan (whenever he chooses this plan again, the number of coins is multiplied by $P_i$ again).

Since the bank in the evil land is evil, it always stores the number of coins in each account modulo $M$. Strangely, $M$ is a prime number.

Chef knows that he will *win the lottery* if the number of coins in his bank account becomes exactly $F$. The bank does not want Chef to win, so it decided to remove some of the $N$ savings plans.

You are the head of the evil bank. Therefore, you need to remove some (possibly none or all) plans in such a way that Chef cannot win the lottery. Find the minimum number of plans you must remove.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $M$ and $F$.
- The second line contains $N$ space-separated integers $P_1, P_2, \ldots, P_N$.

### Output
For each test case, print a single line containing one integer — the minimum number of plans to remove.

### Constraints 
- $1 \le T \le 50$
- $1 \le N \le 10^4$
- $1 \le M \le 2 \cdot 10^5$
- $M$ is a prime number
- $0 \le F \lt M$
- $0 \le P_i \lt M$ for each valid $i$
- $F \neq 1$

### Example Input
```
4
2 5 3
2 4
2 3 2
1 2
7 7 0
4 1 3 2 0 6 5
10 11 2
9 1 10 4 5 8 2 3 6 0
```

### Example Output
```
1
1
1
4
```

### Explanation
**Example case 1:** Chef succeeds when he has $3$ coins in his bank account. He can achieve that by choosing plan $1$ and then plan $2$, since he would get $(2 \cdot 4) \% 5 = 3$ coins.

It is enough to delete plan $1$. Then, Chef cannot get $3$ coins, since he can only multiply the number of coins in his account by $4$.

**Example case 3:** Strangely, Chef succeeds when he has no coins in his bank account. The only way to achieve that is multiplying by $0$, so it is enough to delete plan $5$.
