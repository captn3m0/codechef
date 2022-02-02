---
{"category_name":"easy","problem_code":"BOXGAM97","problem_name":"Box Game","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n4 3 0\r\n4 1 9 5\r\n4 3 1\r\n4 1 9 5","output":"9\r\n1","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jafarbadour","problem_tester":null,"date_added":"25-10-2019","tags":{"0":"jafarbadour","1":"jafarbadour","2":"ltime77"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/BOXGAM97","time":{"view_start_date":1572111000,"submit_start_date":1572111000,"visible_start_date":1572111000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BOXGAM97","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME77/hindi/BOXGAM97.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME77/bengali/BOXGAM97.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME77/mandarin/BOXGAM97.pdf), [Russian](https://www.codechef.com/download/translated/LTIME77/russian/BOXGAM97.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME77/vietnamese/BOXGAM97.pdf) as well.

There are $N$ boxes on a table, numbered $1$ through $N$ from left to right. Each box has a number written on it; let's denote the number written on box $i$ by $A_i$.

Two players ― Jafar and Almir ― are playing a game that lasts for $K$ turns. The rules of the game are as follows:
- Before the game starts, they flip a coin to decide the starting player.
- In the first turn, the starting player chooses a box and places the ball in it.
- Afterwards, the players alternate turns (in the second turn, the non-starting player is playing).
- In each turn, the current player can move the ball one box to the left (unless it is in box $1$) or one box to the right (unless it is in box $N$).
- The result of the game is the number written on the box containing the ball after $K$ turns.

Jafar plays in such a way that when the game ends, the number on the box which contains the ball is the biggest possible. On the contrary, Almir wants this number to be the smallest possible.

You know which player moves first. Determine the result of the game, assuming that both players play optimally.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $K$ and $P$, where $P$ denotes the starting player (Jafar if $P = 0$, Almir if $P = 1$).
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$,

### Output
For each test case, print a single line containing one integer ― the result of the game.

### Constraints
- $1 \le T \le 1,000$
- $2 \le N \le 100$
- $1 \le K \le 10^9$
- $0 \le P \le 1$
- $1 \le A_i \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
2
4 3 0
4 1 9 5
4 3 1
4 1 9 5
```

### Example Output
```
9
1
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>