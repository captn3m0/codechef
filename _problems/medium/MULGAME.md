---
{"category_name":"medium","problem_code":"MULGAME","problem_name":"Multiple Games","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n3 2 10\r\n2 3 4\r\n1 2\r\n2 3","output":2,"explanation":"**Example case 1:** The set of allowed moves in the first game is $S = \\{2,3\\}$ and in the second game, it is $S = \\{3,4\\}$. If Alice chooses $G=3$, she can win both games.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/Szbw45_MBfE","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"losmi247","problem_tester":"","date_added":"15-01-2021","tags":{"0":"feb21","1":"game","2":"losmi247","3":"losmi247","4":"medium"},"problem_difficulty_level":"Medium","best_tag":"Game Theory","editorial_url":"https://discuss.codechef.com/problems/MULGAME","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MULGAME","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/FEB21/hindi/MULGAME.pdf), [Bengali](https://www.codechef.com/download/translated/FEB21/bengali/MULGAME.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/FEB21/mandarin/MULGAME.pdf), [Russian](https://www.codechef.com/download/translated/FEB21/russian/MULGAME.pdf), and [Vietnamese](https://www.codechef.com/download/translated/FEB21/vietnamese/MULGAME.pdf) as well.

You are given a strictly increasing sequence of positive integers $A_1, A_2, \ldots, A_N$. It is also guaranteed that for each valid $i$, $A_i+A_1 \ge A_{i+1}$.

Alice and Bob want to play $Q$ independent games using this sequence. Before they play these games, Alice should choose a positive integer $G$ between $1$ and $M$ (inclusive). The rules of each game are as follows:
- There is a set $S$ of positive integers representing allowed moves in this game. For each valid $i$, in the $i$-th game, this set is $S = \{A_{L_i},A_{L_i+1},\ldots,A_{R_i}\}$ (in other words, given by a contiguous subsequence of $A$).
- The game is played with a single pile. Let's denote the number of objects in this pile by $P$. At the beginning of the game, $P = G$. In other words, Alice and Bob play all the games with the same initial number of objects that Alice chooses.
- The players alternate turns; Alice plays first.
- In each turn, the current player must choose a positive integer $b$ from the set $S$ such that $b \le P$ and remove $b$ objects from the pile, i.e. change $P$ to $P-b$.
- When the current player cannot choose any such integer $b$, this player loses this game.

Both players play optimally. You need to find the maximum number of games Alice can win if she chooses $G$ optimally.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $Q$ and $M$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- $Q$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $L_i$ and $R_i$.

### Output
For each test case, print a single line containing one integer ― the maximum number of games Alice can win.

### Constraints
- $1 \le T \le 50$
- $1 \le N,Q,M \le 2 \cdot 10^5$
- $1 \le A_i \le 10^8$ for each valid $i$
- $A_i+A_1 \ge A_{i+1} \gt A_i$ for each valid $i$
- $1 \le L_i \le R_i \le N$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^5$
- the sum of $Q$ over all test cases does not exceed $2 \cdot 10^5$
- the sum of $M$ over all test cases does not exceed $2 \cdot 10^5$

### Subtasks
**Subtask #1 (5 points):** 
- $N,Q,M \leq 400$
- the sum of $N$ over all test cases does not exceed $400$
- the sum of $Q$ over all test cases does not exceed $400$
- the sum of $M$ over all test cases does not exceed $400$

**Subtask #2 (30 points):** 
- $N,Q,M \leq 5,000$
- the sum of $N$ over all test cases does not exceed $5,000$
- the sum of $Q$ over all test cases does not exceed $5,000$
- the sum of $M$ over all test cases does not exceed $5,000$

**Subtask #3 (65 points):** original constraints

### Example Input
```
1
3 2 10
2 3 4
1 2
2 3
```

### Example Output
```
2
```

### Explanation
**Example case 1:** The set of allowed moves in the first game is $S = \{2,3\}$ and in the second game, it is $S = \{3,4\}$. If Alice chooses $G=3$, she can win both games.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>