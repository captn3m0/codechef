---
{"category_name":"hard","problem_code":"MDSWIN","problem_name":"Winning Ways","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n2 3\r\n2\r\n4","output":6,"explanation":"**Example case 1:** There are two choices of thresholds that are losing for Irshad: $(2, 2, 2)$ and $(4, 4, 4)$. If these thresholds are used, Mehedi always wins regarless of Irshad\u0027s moves. All six remaining choices are winning for Irshad.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":7,"source_sizelimit":50000,"problem_author":"upobir","problem_tester":null,"date_added":"1-10-2019","tags":{"0":"challenge","1":"nim","2":"nov19","3":"transformation","4":"upobir","5":"watcher"},"problem_difficulty_level":"Hard","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MDSWIN","time":{"view_start_date":1573464602,"submit_start_date":1573464602,"visible_start_date":1573464602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MDSWIN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/NOV19/hindi/MDSWIN.pdf), [Bengali](https://www.codechef.com/download/translated/NOV19/bengali/MDSWIN.pdf), and [Mandarin Chinese](https://www.codechef.com/download/translated/NOV19/mandarin/MDSWIN.pdf), [Russian](https://www.codechef.com/download/translated/NOV19/russian/MDSWIN.pdf), and [Vietnamese](https://www.codechef.com/download/translated/NOV19/vietnamese/MDSWIN.pdf) as well.

Welcome to the finals of Chef's Combinatorial Games Competition 2019! The finalists Irshad and Mehedi are ready to play against each other no matter what game is given. As it is the final round, Chef prepared a completely new game with the following rules:
- There are $K$ stacks of stones (numbered $1$ through $K$). For each valid $i$, the $i$-th stack has a *threshold* $H_i$.
- Initially, each stack contains one stone.
- The players alternate turns; Irshad plays first.
- During each turn, the current player must choose one or two stacks and make a move in each chosen stack.
- To make a move in a stack $i$ containing $x$ stones at the beginning of the current turn, the current player must add one or more stones to this stack in such a way that the resulting number of stones $y$ ($y \gt x$) divides that stack's threshold $H_i$. (If this stack already contains $H_i$ stones, it is impossible to make a move.)
- When it is impossible to make a move in any stack, the current player loses the game.

Of course, Irshad and Mehedi are brilliant programmers, so they can easily play this game optimally for given thresholds. Therefore, to spice up the game, Chef chose $K$ people from the audience and gave one stack to each of them. He also provided a set $S = \{x_1, x_2, \ldots, x_N\}$. Each of the chosen people should uniformly randomly, independently from all other people, choose the threshold of his/her stack from the set $S$.

While this is happening, Irshad asks you: "Hey, in how many ways can these people set the thresholds such that I win?" You need to find the answer modulo $1,000,000,007$ ($10^9+7$).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains a single integer $x_i$.

### Output
For each test case, print a single line containing one integer ― the number of ways to choose the thresholds such that Irshad wins, modulo $1,000,000,007$ ($10^9+7$).

### Constraints
- $1 \le T \le 5$
- $1 \le N \le 100,000$
- $1 \le K \le 10^9$
- $1 \le x_i \le 10^9$ for each valid $i$
- $x_1, x_2, \ldots, x_N$ are pairwise distinct

### Subtasks
**Subtask #1 (10 points):**
- $N, K \le 12$
- $x_i \le 12$ for each valid $i$

**Subtask #2 (30 points):**
- $N, K \le 50,000$
- $x_i \le 50,000$ for each valid $i$

**Subtask #3 (60 points):** original constraints

### Example Input
```
1
2 3
2
4
```

### Example Output
```
6
```

### Explanation
**Example case 1:** There are two choices of thresholds that are losing for Irshad: $(2, 2, 2)$ and $(4, 4, 4)$. If these thresholds are used, Mehedi always wins regarless of Irshad's moves. All six remaining choices are winning for Irshad.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>