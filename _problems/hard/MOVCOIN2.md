---
{"category_name":"hard","problem_code":"MOVCOIN2","problem_name":"Move the Coins 2","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3 \r\n1 2\r\n2 3\r\n1 0 1\r\n6\r\n1 2\r\n1 3\r\n4 3\r\n3 5\r\n4 6\r\n0 2 2 1 3 2","output":"4\r\n14","explanation":"Although the tree $T_{\\textit{board}}$ is undirected, arrows have been added along edges for clarity, indicating the directions in which coins must be moved for each $R$. The node $R$ itself is always highlighted in red.\r\n\r\n**Example case 1:** The original $T_{\\textit{board}}$ looks like this:\r\n\r\n![](https://codechef_shared.s3.amazonaws.com/download/Images/SEPT20/MOVCOIN2/COUNTREE_4.png)\r\n\r\nLet\u0027s examine the games for $R = 1,2,3$.\r\n\r\n![](https://codechef_shared.s3.amazonaws.com/download/Images/SEPT20/MOVCOIN2/COUNTREE_5.png)\r\n\r\nFor $R = 1$, Alice turns out to be the winner. On the first turn, she has two possible moves: move the coin from node $3$ to node $2$ or to node $1$. If she does the latter, then at the end of her turn, all coins are in node $R$, meaning that Bob is unable to move a coin during the next turn and Alice is the winner; since she is playing optimally, she does precisely that :)\r\n\r\nFor $R = 2$: Bob gets his revenge this time! Alice has two possible initial moves: move the coin from node $1$ to node $2$, or move the coin from node $3$ to node $2$. In either case, at the end of her turn, there is exactly one coin remaining in a node other than $R$. Bob merely has to move this coin to $R$ to leave Alice with no possible moves on her turn.\r\n\r\nFor $R = 3$, Alice wins again, using very similar reasoning to the $R = 1$ case (her winning move this time around is to move the coin from node $1$ to node $3$).\r\n\r\nWe\u0027ve figured out the winner of $g(T_{\\textit{board}}, R)$ for all valid $R$, and it turns out that Bob only wins one game, when $R=2$; thus the answer is $2^2 \\,\\%\\, (10^9+7) = 4$.\r\n\r\n**Example case 2:** The original $T_{\\textit{board}}$ looks like this:\r\n\r\n![](https://codechef_shared.s3.amazonaws.com/download/Images/SEPT20/MOVCOIN2/COUNTREE_6.png)\r\n\r\nThe boards for $R = 1, 2, 3, 4, 5, 6$ are, respectively:\r\n\r\n![](https://codechef_shared.s3.amazonaws.com/download/Images/SEPT20/MOVCOIN2/COUNTREE_7.png)\r\n\r\n![](https://codechef_shared.s3.amazonaws.com/download/Images/SEPT20/MOVCOIN2/COUNTREE_8.png)\r\n\r\n![](https://codechef_shared.s3.amazonaws.com/download/Images/SEPT20/MOVCOIN2/COUNTREE_9.png)\r\n\r\n![](https://codechef_shared.s3.amazonaws.com/download/Images/SEPT20/MOVCOIN2/COUNTREE_10.png)\r\n\r\n![](https://codechef_shared.s3.amazonaws.com/download/Images/SEPT20/MOVCOIN2/COUNTREE_11.png)\r\n\r\n![](https://codechef_shared.s3.amazonaws.com/download/Images/SEPT20/MOVCOIN2/COUNTREE_12.png)\r\n\r\nIt can be proved that Bob wins $g(T_{\\textit{board}}, 1)$, $g(T_{\\textit{board}}, 2)$ and $g(T_{\\textit{board}}, 3)$, while Alice wins $g(T_{\\textit{board}}, 4)$, $g(T_{\\textit{board}}, 5)$ and $g(T_{\\textit{board}}, 6)$. The answer is $(2^1 + 2^2 + 2^3) \\,\\%\\, (10^9+7) = 14$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"ssjgz","problem_tester":"","date_added":"17-04-2020","tags":{"0":"bitwise","1":"centroid","2":"hard","3":"sept20","4":"sprague","5":"ssjgz","6":"ssjgz","7":"xor"},"problem_difficulty_level":"Hard","best_tag":"Bitwise Operation","editorial_url":"https://discuss.codechef.com/problems/MOVCOIN2","time":{"view_start_date":1600075802,"submit_start_date":1600075802,"visible_start_date":1600075802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MOVCOIN2","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/SEPT20/hindi/MOVCOIN2.pdf), [Bengali](https://www.codechef.com/download/translated/SEPT20/bengali/MOVCOIN2.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/SEPT20/mandarin/MOVCOIN2.pdf), [Russian](https://www.codechef.com/download/translated/SEPT20/russian/MOVCOIN2.pdf), and [Vietnamese](https://www.codechef.com/download/translated/SEPT20/vietnamese/MOVCOIN2.pdf)  as well.

This is a sequel to the problem ["Move the Coins"](https://www.hackerrank.com/challenges/move-the-coins/problem) with a couple of twists!

Alice and Bob are playing a board game. The board is a tree $T_{\textit{board}}$ with $N$ nodes (numbered $1$ through $N$). The game involves moving some coins around the board. For a node $R$ ($1 \le R \le N$), let's define a game $g(T_{\textit{board}}, R)$ with the following rules:
1. Initially, a copy of $T_{\textit{board}}$ is taken and for each valid $v$, $c_v$ coins are placed in the node $v$.
2. Bob and Alice alternate turns; Alice plays first.
3. In each turn, the current player must take a single coin from some node other than $R$ (let's denote it by $C$) and move it to another node which lies on the path between $R$ and $C$ (including $R$, but not including $C$).
4. If a player cannot move a coin during their turn (i.e. all the coins are in the node $R$), this player loses the game.

For example, for the board in the figure below and $R=1$:

![](https://codechef_shared.s3.amazonaws.com/download/Images/SEPT20/MOVCOIN2/COUNTREE_1.png)

The current player may take a coin from one of the nodes $2$, $4$ or $5$ (if there were any coins in node $3$, taking one of those would also be an option). If they take a coin from node $5$, they can move it $X$ steps towards the node $R=1$, where $X$ is either $1$, $2$ or $3$ and the coin ends up in the node $4$, $2$ or $1$, respectively:

![](https://codechef_shared.s3.amazonaws.com/download/Images/SEPT20/MOVCOIN2/COUNTREE_2.png)

Let's assume that they pick $X=2$, so they move the coin to node $2$. At the end of this turn, the board is

![](https://codechef_shared.s3.amazonaws.com/download/Images/SEPT20/MOVCOIN2/COUNTREE_3.png)

and it is the other player's turn.

Both players play optimally. Bob knows some elementary Game Theory, so he is able to very quickly predict the winner of any game. Unimpressed, Alice gives him a harder task: she challenges him to find the winner of $g(T_{\textit{board}}, R)$ for each valid $R$ ($1 \le R \le N$).

Can you help Bob figure out the answer? Specifically, if $W$ is the set of all valid $R$ such that the winner of $g(T_{\textit{board}}, R)$ is Bob, then you must calculate $\sum_{R \in W} 2^R$ modulo $10^9+7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- Each of the next $N-1$ lines contains two space-separated integers $u$ and $v$ denoting that nodes $u$ and $v$ are connected by an edge.
- The last line contains $N$ space-separated integers $c_1, c_2, \ldots, c_N$.

### Output
For each test case, print a single line containing one integer ― the sum of $2^R$ over all valid $R$ such that the winner of $g(T_{\textit{board}}, R)$ is Bob, modulo $10^9+7$.

### Constraints 
- $1 \le T \le 1,000$
- $1 \le N \le 300,000$
- $1 \le u, v \le N$
- $0 \le c_i \le 16$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $300,000$

### Subtasks
**Subtask #1 (5 points):** 
- $T \le 10$
- $N \le 10$
- $c_i \le 6$ for each valid $i$
- $c_1 + c_2 + \ldots + c_N \le 10$

**Subtask #2 (10 points)**: 
- $T \le 100$ 
- $N \le 1,000$

**Subtask #3 (85 points)**: original constraints

### Example Input
```
2
3 
1 2
2 3
1 0 1
6
1 2
1 3
4 3
3 5
4 6
0 2 2 1 3 2
```

### Example Output
```
4
14
```

### Explanation
Although the tree $T_{\textit{board}}$ is undirected, arrows have been added along edges for clarity, indicating the directions in which coins must be moved for each $R$. The node $R$ itself is always highlighted in red.

**Example case 1:** The original $T_{\textit{board}}$ looks like this:

![](https://codechef_shared.s3.amazonaws.com/download/Images/SEPT20/MOVCOIN2/COUNTREE_4.png)

Let's examine the games for $R = 1,2,3$.

![](https://codechef_shared.s3.amazonaws.com/download/Images/SEPT20/MOVCOIN2/COUNTREE_5.png)

For $R = 1$, Alice turns out to be the winner. On the first turn, she has two possible moves: move the coin from node $3$ to node $2$ or to node $1$. If she does the latter, then at the end of her turn, all coins are in node $R$, meaning that Bob is unable to move a coin during the next turn and Alice is the winner; since she is playing optimally, she does precisely that :)

For $R = 2$: Bob gets his revenge this time! Alice has two possible initial moves: move the coin from node $1$ to node $2$, or move the coin from node $3$ to node $2$. In either case, at the end of her turn, there is exactly one coin remaining in a node other than $R$. Bob merely has to move this coin to $R$ to leave Alice with no possible moves on her turn.

For $R = 3$, Alice wins again, using very similar reasoning to the $R = 1$ case (her winning move this time around is to move the coin from node $1$ to node $3$).

We've figured out the winner of $g(T_{\textit{board}}, R)$ for all valid $R$, and it turns out that Bob only wins one game, when $R=2$; thus the answer is $2^2 \,\%\, (10^9+7) = 4$.

**Example case 2:** The original $T_{\textit{board}}$ looks like this:

![](https://codechef_shared.s3.amazonaws.com/download/Images/SEPT20/MOVCOIN2/COUNTREE_6.png)

The boards for $R = 1, 2, 3, 4, 5, 6$ are, respectively:

![](https://codechef_shared.s3.amazonaws.com/download/Images/SEPT20/MOVCOIN2/COUNTREE_7.png)

![](https://codechef_shared.s3.amazonaws.com/download/Images/SEPT20/MOVCOIN2/COUNTREE_8.png)

![](https://codechef_shared.s3.amazonaws.com/download/Images/SEPT20/MOVCOIN2/COUNTREE_9.png)

![](https://codechef_shared.s3.amazonaws.com/download/Images/SEPT20/MOVCOIN2/COUNTREE_10.png)

![](https://codechef_shared.s3.amazonaws.com/download/Images/SEPT20/MOVCOIN2/COUNTREE_11.png)

![](https://codechef_shared.s3.amazonaws.com/download/Images/SEPT20/MOVCOIN2/COUNTREE_12.png)

It can be proved that Bob wins $g(T_{\textit{board}}, 1)$, $g(T_{\textit{board}}, 2)$ and $g(T_{\textit{board}}, 3)$, while Alice wins $g(T_{\textit{board}}, 4)$, $g(T_{\textit{board}}, 5)$ and $g(T_{\textit{board}}, 6)$. The answer is $(2^1 + 2^2 + 2^3) \,\%\, (10^9+7) = 14$.



<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>