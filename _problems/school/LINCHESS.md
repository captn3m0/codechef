---
{"category_name":"school","problem_code":"LINCHESS","problem_name":"Chef and Linear Chess","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n4 6\r\n4 3 2 8\r\n4 7\r\n4 3 2 8","output":"3\r\n-1","explanation":"**Example case 1:** The player who starts at the position $2$ can move to square $4$ and then to square $6$. The player who starts at the position $3$ can move to square $6$. The player at position $2$ can capture Chef\u0027s pawn in $2$ turns, whereas the player at position $3$ can capture Chef\u0027s pawn in $1$ turn. Therefore, the answer is $3$.\r\n\r\n**Example case 2:** No player can capture Chef\u0027s pawn.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/zfu9pzuWngQ","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"aryanag_adm","problem_tester":"","date_added":"20-07-2020","tags":{"0":"aryanag_adm","1":"aryanag_adm","2":"aug20","3":"daniel_1999","4":"greatest","5":"rishup_nitdgp"},"problem_difficulty_level":"Unavailable","best_tag":"Greatest Common Divisor","editorial_url":"https://discuss.codechef.com/problems/LINCHESS","time":{"view_start_date":1597656600,"submit_start_date":1597656600,"visible_start_date":1597656600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=LINCHESS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/AUG20/hindi/LINCHESS.pdf), [Bengali](https://www.codechef.com/download/translated/AUG20/bengali/LINCHESS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/AUG20/mandarin/LINCHESS.pdf), [Russian](https://www.codechef.com/download/translated/AUG20/russian/LINCHESS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/AUG20/vietnamese/LINCHESS.pdf) as well.

Chef wants to play a game of *linear chess* on a one-dimensional board ― an infinite row of squares numbered by positive integers. In this game, he has a pawn, which is initially at a square $K$. There are also $N$ other people (numbered $1$ through $N$); Chef can choose one of them to play against. For each valid $i$, the $i$-th player would play in the following way:
- Take a pawn and place it on a square $P_i$.
- Repeat the following move any number of times: move the pawn from its current square $P_i$ squares forward, i.e. from a square $s$, this player's pawn is moved to the square $s+P_i$.
- If this player moves their pawn to the square with Chef's pawn, then Chef's pawn is *captured* and he loses the game.

Unfortunately, Chef cannot move his pawn during the game, making him an easy target for other players. Given the starting positions of all $N+1$ players, find a player who can capture Chef's pawn in the smallest number of moves or determine that no player can capture his pawn.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $P_1, P_2, \ldots, P_N$.

### Output
For each test case, print a single line containing one integer ― the starting square of one player that can beat Chef in the smallest number of turns, or $-1$ if no player can beat him.

If there are multiple solutions, you may find any one.

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 1,000$
- $1 \le K \le 10^9$
- $1 \le P_i \le 10^9$ for each valid $i$
- $K, P_1, P_2, \ldots, P_N$ are pairwise distinct

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
2
4 6
4 3 2 8
4 7
4 3 2 8
```

### Example Output
```
3
-1
```

### Explanation
**Example case 1:** The player who starts at the position $2$ can move to square $4$ and then to square $6$. The player who starts at the position $3$ can move to square $6$. The player at position $2$ can capture Chef's pawn in $2$ turns, whereas the player at position $3$ can capture Chef's pawn in $1$ turn. Therefore, the answer is $3$.

**Example case 2:** No player can capture Chef's pawn.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>