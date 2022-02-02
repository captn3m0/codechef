---
{"category_name":"medium","problem_code":"EBAIT","problem_name":"Election Bait","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"bciobanu","problem_tester":null,"date_added":"18-11-2018","tags":{"0":"bciobanu","1":"equality","2":"medium","3":"number","4":"snckel19","5":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/EBAIT","time":{"view_start_date":1544295600,"submit_start_date":1544295600,"visible_start_date":1544295600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/S19ELTST/hindi/EBAIT.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/S19ELTST/mandarin/EBAIT.pdf), [Russian](http://www.codechef.com/download/translated/S19ELTST/russian/EBAIT.pdf), [Vietnamese](http://www.codechef.com/download/translated/S19ELTST/vietnamese/EBAIT.pdf) and [Bengali](http://www.codechef.com/download/translated/S19ELTST/bengali/EBAIT.pdf) as well.

The final elections for the government of Berland are taking place. There are only two parties in these elections; let's denote them by 'A' and 'B'. A party wins the elections if it has strictly more votes than the other party; if a tie occurs, the elections are invalid. The voting system is fully electronic, so throughout the day, the current results of the elections are updated live, as soon as each vote is cast. However, what the citizens do not know is that the whole election is a setup: the parties are actually working together to make the population think party A is winning until the end of the elections, which is when party B would come out victorious.

The parties want to make this work by simply ignoring all votes which are not set up by them. Instead, they want to bring $N$ convoys of buses (numbered $1$ through $N$) carrying people whose votes will be actually counted. Let's denote the number of buses in the $i$-th convoy by $V_i$. Each bus in an odd-numbered convoy should carry $X$ people voting for party A and each bus in an even-numbered convoy should carry $Y$ people voting for party B.

The convoys arrive in the given order. For a convoy with $V_i$ buses, the people from the first bus of this convoy cast their votes one by one, then the people from the second bus cast their votes, and so on until the people from the $V_i$-th bus cast their votes. Then, all the people leave on the same buses before the next convoy arrives. For each bus except the last bus from the last convoy, after the people from this bus cast their votes, party A must have strictly more votes than party B. After the people from the last bus overall cast their votes, party B must have strictly more votes than party A.

Party A can afford buses with at most $C_1$ seats and party B can affords buses with at most $C_2$ seats, so $1 \le X \le C_1$ and $1 \le Y \le C_2$ must hold. Find values of $X$ and $Y$ which make this scenario possible or report that there is no solution. If there are multiple solutions, you may find any one.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case will contain three space-separated integers $N$, $C_1$ and $C_2$. 
- The second line contains $N$ space-separated integers $V_1, V_2, \dots, V_N$.

### Output
For each test case, print a single line. It should contain two space-separated integers $X$ and $Y$, or a single integer $-1$ if there is no solution.

### Constraints 
- $1 \le T \le 500$
- $1 \le C_1, C_2 \le 10^9$
- $1 \le V_i \le 10^9$ for each valid $i$
- $\sum_{i=1}^N V_i \le 10^9$
- the sum of $N$ over all test cases does not exceed $10^6$

### Example Input
```
2
4 30 30
3 4 1 8
6 20 10
1 1 1 2 1 4
```

### Example Output
```
28 10
20 9
```

### Explanation
**Example case 1:** The sequence of buses is "AAABBBBABBBBBBBB". Whenever we find an 'A', $X = 28$ people vote for party A and whenever we find a 'B', $Y = 10$ people vote for party B.

**Example case 2:** We can verify that the number of people voting for party A is greater than the number of people voting for party B after the people from each bus vote, except for the last bus, which is when the number of votes for party B is $120$ and the number of votes for party A is $112$.
