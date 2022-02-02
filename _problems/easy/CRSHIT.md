---
{"category_name":"easy","problem_code":"CRSHIT","problem_name":"Crash It","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5 3 11\r\n1 3\r\n1 10\r\n2 4\r\n2 7\r\n2 0\r\n3\r\n8\r\n100","output":"4\r\n10\r\n110","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kmaaszraa","problem_tester":null,"date_added":"17-12-2019","tags":{"0":"cook113","1":"easy","2":"kmaaszraa","3":"kmaaszraa","4":"sorting","5":"two"},"problem_difficulty_level":"Easy-Medium","best_tag":"Two Pointers","editorial_url":"https://discuss.codechef.com/problems/CRSHIT","time":{"view_start_date":1577041202,"submit_start_date":1577041202,"visible_start_date":1577041202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CRSHIT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK113/hindi/CRSHIT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK113/mandarin/CRSHIT.pdf), [Russian](https://www.codechef.com/download/translated/COOK113/russian/CRSHIT.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK113/vietnamese/CRSHIT.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK113/bengali/CRSHIT.pdf) as well.

Roger recently built a circular race track with length $K$. After hosting a few races, he realised that people do not come there to see the race itself, they come to see racers crash into each other (what's wrong with our generation...). After this realisation, Roger decided to hold a different kind of "races": he hired $N$ racers (numbered $1$ through $N$) whose task is to crash into each other.

At the beginning, for each valid $i$, the $i$-th racer is $X_i$ metres away from the starting point of the track (measured in the clockwise direction) and driving in the direction $D_i$ (clockwise or counterclockwise). All racers move with the constant speed $1$ metre per second. The lengths of cars are negligible, but the track is only wide enough for one car, so whenever two cars have the same position along the track, they crash into each other and the direction of movement of each of these cars changes (from clockwise to counterclockwise and vice versa). The cars do not change the directions of their movement otherwise.

Since crashes reduce the lifetime of the racing cars, Roger sometimes wonders how many crashes happen. You should answer $Q$ queries. In each query, you are given an integer $T$ and you should find the number of crashes that happen until $T$ seconds have passed (inclusive).

### Input
- The first line of the input contains three space-separated integers $N$, $Q$ and $K$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains two space-separated integers $D_i$ and $X_i$, where $D_i = 1$ and $D_i = 2$ denote the clockwise and counterclockwise directions respectively.
- Each of the next $Q$ lines contain a single integer $T$ describing a query.

### Output
For each query, print a single line containing one integer — the number of crashes.

### Constraints
- $1 \le N \le 10^5$
- $1 \le Q \le 1,000$
- $1 \le K \le 10^{12}$
- $1 \le D_i \le 2$ for each valid $i$
- $0 \le X_i \le K - 1$ for each valid $i$
- $X_1, X_2, \ldots, X_N$ are pairwise distinct
- $0 \le T \le 10^{12}$

### Example Input
```
5 3 11
1 3
1 10
2 4
2 7
2 0
3
8
100
```

### Example Output
```
4
10
110
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>