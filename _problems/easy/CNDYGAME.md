---
{"category_name":"easy","problem_code":"CNDYGAME","problem_name":"Magical Candy Store","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n4\r\n4 10 2 1\r\n2\r\n4\r\n5","output":"17\r\n21","explanation":"**Example case 1:** In the $1$-st, $2$-nd and $3$-rd turn, Chef takes $4$, $10$ and $2$ candies ($16$ in total) respectively. In the $4$-th turn, Chef takes $1$ candy ($17$ in total; this is the answer to the first query), which is odd and hence he has to go to the counter which is closed. However, since $N = 4$ turns are just completed, the counter which was currently open closes and the other one (where Chef went) opens. In the $5$-th round, Chef can take $4$ candies, so he has $21$ candies.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/FsC8T-55DHw","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"utkarsh911","problem_tester":"","date_added":"10-10-2020","tags":{"0":"constructive","1":"easy","2":"game","3":"greedy","4":"nov20","5":"prefix","6":"utkarsh911","7":"utkarsh911"},"problem_difficulty_level":"Easy-Medium","best_tag":"Game Theory","editorial_url":"https://discuss.codechef.com/problems/CNDYGAME","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CNDYGAME","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/NOV20/hindi/CNDYGAME.pdf), [Bengali](https://www.codechef.com/download/translated/NOV20/bengali/CNDYGAME.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/NOV20/mandarin/CNDYGAME.pdf), [Russian](https://www.codechef.com/download/translated/NOV20/russian/CNDYGAME.pdf), and [Vietnamese](https://www.codechef.com/download/translated/NOV20/vietnamese/CNDYGAME.pdf) as well.

Chef and Chefu are at a magical candy store playing a game with the following rules:
- There are two candy counters; each of them stores an infinite number of candies. At any time, only one of the counters is open and the other is closed.
- Exactly one player is present at each of the counters. Initially, Chef is at the open counter and Chefu is at the closed counter.
- There is a sequence of $N$ **distinct** integers $A_1, A_2, \ldots, A_N$. The game consists of $R$ turns; in the $i$-th turn, the open counter offers only $C = A_{ (i-1) \% N + 1}$ candies to the player present at this counter. This player should choose a positive number of candies $M$ to accept, where $1 \le M \le C$.
- If this player accepts an odd number of candies, the players have to swap their positions (each player goes to the other counter).
- After each $N$ turns, the counter which was currently open is closed and the counter which was currently closed is opened.
- The primary goal of each player is to maximise his own number of candies after $R$ turns. As a second priority, each player wants to minimise the number of candies his opponent has after $R$ turns.

You should process $Q$ queries. In each query, you are given $R$ and you should find the number of candies Chef has after $R$ turns, assuming that both players play the game optimally. Since this number could be very large, compute it modulo $10^9 + 7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- The third line contains a single integer $Q$.
- Each of the next $Q$ lines contains a single integer $R$ describing a query.

### Output
For each query, print a single line containing one integer ― the maximum number of candies Chef can get, modulo $10^9+7$.

### Constraints
- $1 \le T \le 25$
- $1 \le N \le 10^5$
- $1 \le A_i \le 10^9$ for each valid $i$
- $A_1, A_2, \ldots, A_N$ are pairwise distinct
- $1 \le Q \le 10^5$
- $1 \le R \le 10^{12}$
- the sum of $N + Q$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (15 points):**
- $N \le 10$
- $Q \le 35$
- $R \le 35$

**Subtask #2 (85 points):** original constraints

### Example Input
```
1
4
4 10 2 1
2
4
5
```

### Example Output
```
17
21
```

### Explanation
**Example case 1:** In the $1$-st, $2$-nd and $3$-rd turn, Chef takes $4$, $10$ and $2$ candies ($16$ in total) respectively. In the $4$-th turn, Chef takes $1$ candy ($17$ in total; this is the answer to the first query), which is odd and hence he has to go to the counter which is closed. However, since $N = 4$ turns are just completed, the counter which was currently open closes and the other one (where Chef went) opens. In the $5$-th round, Chef can take $4$ candies, so he has $21$ candies. 

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>