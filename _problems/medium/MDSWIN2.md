---
{"category_name":"medium","problem_code":"MDSWIN2","problem_name":"Winning Ways 2","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n5\r\n1 2 1 2 2\r\n3\r\n1 1\r\n2 3\r\n2 5","output":"1\r\n0\r\n3","explanation":"**Example case 1:**\r\n- In the first game, there is only one move and it is a winning move for the first player.\r\n- In the second game, the second player can always win regardless of the first player\u0027s move.\r\n- In the third game, the first player can choose the subset of elements with indices $\\{2, 4\\}$, $\\{2, 5\\}$ or $\\{4, 5\\}$ (in the input sequence $A$) to ensure his victory in the future.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"upobir","problem_tester":null,"date_added":"6-01-2020","tags":{"0":"basic","1":"combinatorics","2":"march20","3":"medium","4":"mos","5":"nim","6":"tmwilliamlin","7":"upobir"},"problem_difficulty_level":"Medium-Hard","best_tag":"Mos Algorithm","editorial_url":"https://discuss.codechef.com/problems/MDSWIN2","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MDSWIN2","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/MARCH20/hindi/MDSWIN2.pdf), [Bengali](https://www.codechef.com/download/translated/MARCH20/bengali/MDSWIN2.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MARCH20/mandarin/MDSWIN2.pdf), [Russian](https://www.codechef.com/download/translated/MARCH20/russian/MDSWIN2.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MARCH20/vietnamese/MDSWIN2.pdf) as well.

Chef's Combinatorial Games Competition is starting again this year, and the qualification round is happening right now! This time, Chef is keeping it simple ― there will be two-player games with the following rules:
- Initially, the players are given an integer sequence $S$.
- The players alternate turns.
- In each turn, the current player must choose one or more elements of the current sequence $S$ such that the values of all chosen elements are identical, and erase these elements from $S$.
- When a player cannot choose anything (the sequence $S$ is already empty), this player loses the game.

Since Chef is currently busy planning for the finals, he does not have time to prepare sequences for all qualification games. Instead, he chose a large sequence $A_1, A_2, \ldots, A_N$ and he wants to use its contiguous subsequences for the games. To get a idea of how these games will turn out, Chef wants you to answer $Q$ queries. In each query, you are given a subsequence $A_L, A_{L+1}, \ldots, A_R$, and you have to find the number of winning moves the first player can play on the first turn. Since this number can be quite large, compute it modulo $998,244,353$.

Assume that both players play optimally. The queries are independent ― the sequence $A$ does not change.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- The third line contains a single integer $Q$.
- Each of the next $Q$ lines contains two space-separated integers $L$ and $R$ describing a query.

### Output
For each query, print a single line containing one integer ― the number of winning moves of the first player modulo $998,244,353$.

### Constraints
- $1 \le T \le 5$
- $1 \le N, Q \le 10^5$
- $1 \le A_i \le 10^9$ for each valid $i$
- $1 \le L \le R \le N$

### Subtasks
**Subtask #1 (10 points):**
- $N, Q \le 100$
- $A_i \le 10^5$ for each valid $i$

**Subtask #2 (20 points):** $N, Q \le 10^3$

**Subtask #3 (70 points):** original constraints

### Example Input
```
1
5
1 2 1 2 2
3
1 1
2 3
2 5
```
### Example Output
```
1
0
3
```

### Explanation
**Example case 1:**
- In the first game, there is only one move and it is a winning move for the first player.
- In the second game, the second player can always win regardless of the first player's move.
- In the third game, the first player can choose the subset of elements with indices $\{2, 4\}$, $\{2, 5\}$ or $\{4, 5\}$ (in the input sequence $A$) to ensure his victory in the future.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>