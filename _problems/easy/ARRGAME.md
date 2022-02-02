---
{"category_name":"easy","problem_code":"ARRGAME","problem_name":"Game on a Strip","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"4\r\n7\r\n1 1 0 0 0 1 1\r\n8\r\n1 0 1 1 1 0 0 1\r\n4\r\n1 1 0 1\r\n4\r\n1 1 1 1","output":"Yes\r\nNo\r\nYes\r\nNo","explanation":"**Example case 1:** Since both Nayeon and Tzuyu play optimally, Nayeon can start e.g. by moving to cell $4$, which then becomes blocked. Tzuyu has to pick either the cell $3$ or the cell $5$, which also becomes blocked. Nayeon is then left with only one empty cell next to cell $4$ (the one Tzuyu did not pick); after she moves there, Tzuyu is unable to move, so she loses the game.\r\n\r\n**Example case 2:** Regardless of what cell Nayeon moves to at the start, Tzuyu will always be able to beat her.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/VKrMU4xsNgQ","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"benritmico","problem_tester":"","date_added":"30-07-2020","tags":{"0":"benritmico","1":"easy","2":"game","3":"ltime87","4":"psychik"},"problem_difficulty_level":"Easy","best_tag":"Game Theory","editorial_url":"https://discuss.codechef.com/problems/ARRGAME","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ARRGAME","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME87/hindi/ARRGAME.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME87/bengali/ARRGAME.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME87/mandarin/ARRGAME.pdf), [Russian](https://www.codechef.com/download/translated/LTIME87/russian/ARRGAME.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME87/vietnamese/ARRGAME.pdf) as well.

Tzuyu gave Nayeon a strip of $N$ cells (numbered $1$ through $N$) for her birthday. This strip is described by a sequence $A_1, A_2, \ldots, A_N$, where for each valid $i$, the $i$-th cell is blocked if $A_i = 1$ or free if $A_i = 0$. Tzuyu and Nayeon are going to use it to play a game with the following rules:

- The players alternate turns; Nayeon plays first.
- Initially, both players are outside of the strip. However, note that afterwards during the game, their positions are always different.
- In each turn, the current player should choose a free cell and move there. Afterwards, this cell becomes blocked and the players cannot move to it again.
- If it is the current player's first turn, she may move to any free cell.
- Otherwise, she may only move to one of the left and right adjacent cells, i.e. from a cell $c$, the current player may only move to the cell $c-1$ or $c+1$ (if it is free).
- If a player is unable to move to a free cell during her turn, this player loses the game.

Nayeon and Tzuyu are very smart, so they both play optimally. Since it is Nayeon's birthday, she wants to know if she can beat Tzuyu. Find out who wins.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing the string `"Yes"` if Nayeon wins the game or `"No"` if Tzuyu wins (without quotes).

### Constraints
- $1 \le T \le 40,000$
- $2 \le N \le 3\cdot 10^5$
- $0 \le A_i \le 1$ for each valid $i$
- $A_1 = A_N = 1$
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (50 points):** $A_i = 0$ for each $i$ ($2 \le i \le N-1$)

**Subtask #2 (50 points):** original constraints

### Example Input
```
4
7
1 1 0 0 0 1 1
8
1 0 1 1 1 0 0 1
4
1 1 0 1
4
1 1 1 1
```

### Example Output
```
Yes
No
Yes
No
```

### Explanation
**Example case 1:** Since both Nayeon and Tzuyu play optimally, Nayeon can start e.g. by moving to cell $4$, which then becomes blocked. Tzuyu has to pick either the cell $3$ or the cell $5$, which also becomes blocked. Nayeon is then left with only one empty cell next to cell $4$ (the one Tzuyu did not pick); after she moves there, Tzuyu is unable to move, so she loses the game.

**Example case 2:** Regardless of what cell Nayeon moves to at the start, Tzuyu will always be able to beat her.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>