---
{"category_name":"medium","problem_code":"BSTN","problem_name":"Bus Station","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"watcher","problem_tester":null,"date_added":"23-01-2019","tags":{"0":"data","1":"dynamic","2":"ltime68","3":"segment","4":"watcher"},"editorial_url":"https://discuss.codechef.com/problems/BSTN","time":{"view_start_date":1548522002,"submit_start_date":1548522002,"visible_start_date":1548522002,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Mandarin](http://www.codechef.com/download/translated/LTIME68/mandarin/BSTN.pdf) , [Bengali](http://www.codechef.com/download/translated/LTIME68/bengali/BSTN.pdf) , [Hindi](http://www.codechef.com/download/translated/LTIME68/hindi/BSTN.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME68/russian/BSTN.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME68/vietnamese/BSTN.pdf) as well.

Ryan is the president of a planet. There is a large bus station on this planet and $M$ buses stop at this station every day. For each valid $i$, the $i$-th bus arrives at the station $t_i$ seconds after midnight (on Ryan's planet, each day lasts $10^{100}$ hours, not $24$ hours), waits at the station for some non-negative (not necessarily integer) amount of time and then leaves.

Ryan knows that $N$ people are coming to the station today. For each $i$ ($1 \le i \le N$), the $i$-th person is described by parameters $s_i$, $a_i$, $b_i$, $c_i$, $d_i$ with the following meaning:
- This person arrives at the station $s_i$ seconds after midnight with dissatisfaction $0$.
- If there is at least one bus that leaves the station strictly less than $a_i$ seconds before this person arrives, their dissatisfaction increases by $b_i$.
- If this person has to wait at the station for at least $c_i$ seconds before boarding a bus and leaving (this includes the time they spend waiting for a bus and the time spent waiting for that bus to leave), their dissatisfaction increases by $d_i$.

Ryan may be the president, but his power is quite limited. He can tell each bus driver when to leave the station and each passenger when to board a bus (these times do not have to be integers). He also has to follow one rule: it is not allowed for two buses to be at the station at the same time.

As the president, his job is to make the citizens happy. Therefore, he is wondering about the minimum total dissatisfaction (the sum of final dissatisfactions of all $N$ passengers) he can achieve by using his power optimally. Of course, as an assistant to the president, you are the one who has to calculate that for him.

Note that each passenger should board a bus at some point (during the day when they arrive at the station). Ryan does not want to leave someone hanging there for an eternity. Also, a passenger is allowed to board a bus at the moment when that bus is leaving (even if that passenger just arrived at the station at that moment).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $M$.
- The second line contains $M$ space-separated integers $t_1, t_2, \ldots, t_M$.
- The third line contains a single integer $N$.
- The fourth line contains $N$ space-separated integers $s_1, s_2, \ldots, s_N$.
- The fifth line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.
- The sixth line contains $N$ space-separated integers $b_1, b_2, \ldots, b_N$.
- The seventh line contains $N$ space-separated integers $c_1, c_2, \ldots, c_N$.
- The eighth line contains $N$ space-separated integers $d_1, d_2, \ldots, d_N$.

### Output
For each test case, print a single line containing one integer — the minimum total dissatisfaction of the passengers.

### Constraints 
- $1 \le T \le 1,000$
- $1 \le M, N \le 5 \cdot 10^5$
- $1 \le t_i \le 10^9$ for each valid $i$
- $1 \le s_i, a_i, b_i, c_i, d_i \le 10^9$ for each valid $i$
- $t_1, t_2, \ldots, t_M, s_1, s_2, \ldots, s_N$ are pairwise distinct
- the sum of $M$ over all test cases does not exceed $5 \cdot 10^5$
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^5$

### Subtasks
**Subtask #1 (15 points):**
- $1 \le T \le 50$
- $1 \le N, M \le 10^3$

**Subtask #2 (85 points):** original constraints

### Example Input
```
1
2
5 10
3
4 6 11
4 4 4
4 4 4
2 4 1
100 2 2
```

### Example Output
```
6
```
