---
{"category_name":"easy","problem_code":"TEAMMATE","problem_name":"Finding Teammate","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"10-10-2018","tags":{"0":"combinatorics","1":"easy","2":"kingofnumbers","3":"snckql19","4":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/TEAMMATE","time":{"view_start_date":1539698400,"submit_start_date":1539698400,"visible_start_date":1539698400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/S19QLTST/hindi/TEAMMATE.pdf), [Mandarin chinese](http://www.codechef.com/download/translated/S19QLTST/mandarin/TEAMMATE.pdf), [Russian](http://www.codechef.com/download/translated/S19QLTST/russian/TEAMMATE.pdf), [Vietnamese](http://www.codechef.com/download/translated/S19QLTST/vietnamese/TEAMMATE.pdf) and [Bengali](http://www.codechef.com/download/translated/S19QLTST/bengali/TEAMMATE.pdf) as well.

Snackdown 2019 is coming! Since Snackdown is a contest of teams with up to two members, everyone is looking for a teammate. There are $N$ contestants (numbered $1$ through $N$) who want to participate in Snackdown; let's denote the skill level of the $i$-th contestant by $S_i$. These people want to pair up in $N/2$ teams; each team should consist of two people.

Clearly everyone wishes for their teammate to be as skilled as possible, so everyone wants to maximize their teammate's skill level. We call a pairing (an unordered $N/2$-tuple of teams) *valid* if there are no two teams consisting of people $(A, B)$ and $(C, D)$ such that $S_D \gt S_B$ and $S_A \gt S_C$ — in that case, $A$ and $D$ would both prefer to be on the same team rather than with their current teammates.

Find the number of valid pairings. Since this number can be large, compute it modulo $1,000,000,007$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $S_1, S_2, \dots, S_N$.

### Output
For each test case, print a single line containing one integer — the number of valid pairings modulo $1,000,000,007$.

### Constraints 
- $1 \le T \le 1,000$
- $2 \le N \le 10^5$
- $N$ is even
- the sum of $N$ for all test cases does not exceed $10^6$
- $1 \le S_i \le 10^6$ for each valid $i$

### Example Input
```
2
4
1 7 3 8
4
2 3 2 2
```

### Example Output
```
1
3
```

### Explanation
**Example case 1:** The only valid pairing is for contestant $2$ to be paired with contestant $4$ (so contestants $1$ and $3$ form the other team).

**Example case 2:** Since person $2$ has the highest skill level and all others have the same skill levels, person $2$ can choose anyone among the other three as a teammate. The remaining two people also form a team, so the number of pairings is $3$.
