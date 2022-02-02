---
{"category_name":"easy","problem_code":"SIMGAM","problem_name":"A Simple Game","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"anay07","problem_tester":null,"date_added":"6-09-2019","tags":{"0":"anay07"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"","time":{"view_start_date":1541539800,"submit_start_date":1541539800,"visible_start_date":1541539800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SIMGAM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/NOV19/hindi/SIMGAM.pdf), [Bengali](https://www.codechef.com/download/translated/NOV19/bengali/SIMGAM.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/NOV19/mandarin/SIMGAM.pdf), and [Vietnamese](https://www.codechef.com/download/translated/NOV19/vietnamese/SIMGAM.pdf) as well.

Chef is in need of money, so he decided to play a game with Ramsay. In this game, there are $N$ rows of coins (numbered $1$ through $N$). For each valid $i$, the $i$-th row contains $C_i$ coins with values $A_{i, 1}, A_{i, 2}, \ldots, A_{i, C_i}$.

Chef and Ramsay alternate turns; Chef plays first. In each turns, the current player can choose one row that still contains coins and take one of the coins remaining in this row. Chef may only take the the first (leftmost) remaining coin in the chosen row, while Ramsay may only take the last (rightmost) remaining coin in the chosen row. The game ends when there are no coins left.

Each player wants to maximise the sum of values of the coins he took. Assuming that both Chef and Ramsay play optimally, what is the maximum amount of money (sum of values of coins) Chef can earn through this game?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains an integer $C_i$, followed by a space and $C_i$ space-separated integers $A_{i, 1}, A_{i, 2}, \ldots, A_{i, C_i}$.

### Output
For each test case, print a single line containing one integer ― the maximum amount of money Chef can earn.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 10^4$
- $1 \le C_i \le 10$ for each valid $i$
- $1 \le A_{i, j} \le 10^5$ for each valid $i$ and $j$

### Subtasks
**Subtask #1 (20 points):** $N = 1$

**Subtask #2 (80 points):** original constraints

### Example Input
```
1
2
4 5 2 3 4
2 1 6
```

### Example Output
```
8
```

### Explanation
**Example case 1:** One optimal sequence of moves is: Chef takes the coin with value $5$, Ramsay takes $4$, Chef takes $2$, Ramsay takes $3$, Chef takes $1$ and Ramsay takes $6$. At the end, Chef has $5+2+1 = 8$ units of money.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>