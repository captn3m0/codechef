---
{"category_name":"easy","problem_code":"CHFPARTY","problem_name":"Chef and Party","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"17-02-2019","tags":{"0":"chefparty","1":"cook103","2":"easy","3":"kingofnumbers","4":"sorting"},"editorial_url":"https://discuss.codechef.com/problems/CHFPARTY","time":{"view_start_date":1550428202,"submit_start_date":1550428202,"visible_start_date":1550428202,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/COOK103/hindi/CHFPARTY.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/COOK103/mandarin/CHFPARTY.pdf), [Russian](http://www.codechef.com/download/translated/COOK103/russian/CHFPARTY.pdf), [Vietnamese](http://www.codechef.com/download/translated/COOK103/vietnamese/CHFPARTY.pdf) and [Bengali](http://www.codechef.com/download/translated/COOK103/bengali/CHFPARTY.pdf) as well.

Tonight, Chef would like to hold a party for his $N$ friends.

All friends are invited and they arrive at the party one by one in an arbitrary order. However, they have certain conditions — for each valid $i$, when the $i$-th friend arrives at the party and sees that at that point, strictly less than $A_i$ other people (excluding Chef) have joined the party, this friend leaves the party; otherwise, this friend joins the party.

Help Chef estimate how successful the party can be — find the maximum number of his friends who could join the party (for an optimal choice of the order of arrivals).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer — the maximum number of Chef's friends who could join the party.

### Constraints
- $1 \le T \le 1,000$
- $1 \le N \le 10^5$
- the sum of $N$ over all test cases does not exceed $10^6$

### Example Input
```
3
2
0 0
6
3 1 0 0 5 5
3
1 2 3
```

### Example Output
```
2
4
0
```

### Explanation
**Example case 1:** Chef has two friends. Both of them do not require anyone else to be at the party before they join, so they will both definitely join the party.
 
**Example case 2:** At the beginning, friends $3$ and $4$ can arrive and join the party, since they do not require anyone else to be at the party before they join. After that, friend $2$ can arrive; this friend would see that there are two people at the party and therefore also join. Then, friend $1$ will also join, so in the end, there would be $4$ people attending the party.

**Example case 3:** No one will attend the party because each of Chef's friends will find zero people at the party and leave, regardless of the order in which they arrive.
