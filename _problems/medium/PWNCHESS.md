---
{"category_name":"medium","problem_code":"PWNCHESS","problem_name":"Pawn Chess","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"15-04-2018","tags":{"0":"alei","1":"cook93","2":"game","3":"games","4":"medium"},"editorial_url":"https://discuss.codechef.com/problems/PWNCHESS","time":{"view_start_date":1524421800,"submit_start_date":1524421800,"visible_start_date":1524421800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problem statement in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK93/mandarin/PWNCHESS.pdf">Mandarin chinese</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK93/vietnamese/PWNCHESS.pdf">Vietnamese</a>.</h3>

After winning the Candidates Tournament, Suzumo is intensively training for his upcoming match against Magus Cartesian.

In order to improve his calculation skills, Suzumo invented a new game, which he named PawnChess. PawnChess is a two-player game played on a row of $N$ cells. Its rules are as follows:

- Initially, some pawns are placed in some cells; each pawn is either black or white. There may be at most one pawn in each cell at any time. For each white pawn, all the pawns that are to the left of this pawn are also white.
- Let's call the players White and Black. Each player may only move pawns of their colour. The players alternate turns; White moves first.
- In White's turn, White must move one pawn one cell to the right (if the pawn was in cell $i$, it is moved to cell $i+1$). Similarly, in Black's turn, Black must move one pawn one cell to the left (from cell $i$ to cell $i-1$). It is not allowed to move a pawn outside of the row of cells or to move a pawn to a cell which already contains a pawn with the same colour.
- If a pawn $P$ is moved to an empty cell, nothing happens. If it is moved to a cell containing a pawn $R$ with the opposite colour, the pawn $R$ is captured — removed from the game, and $P$ is placed in the cell which previously contained $R$.
- The winner of the game is the player that captures all the pieces of their opponent. Note that as long as there is at least one black and at least one white pawn, each player can make a move.

Given the initial configuration of the game board, help Suzumo determine the winner of the game. Assume that both players play optimally.

### Input

- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single string $S$ with length $N$ describing the game board. Each character in $S$ is '.', 'W' or 'B' denoting an empty cell, a white pawn and a black pawn respectively.

### Output

For each test case, print a single line containing the string `"W"` if White wins the game or `"B"` if Black wins.

### Constraints 

- $2 \le N \le 128$
- there is at least one white pawn and at least one black pawn
- all pawns to the left of a white pawn are always white
- the sum of $N$ over all test cases is at most $5 \cdot 10^5$

### Example Input
```
2
W..B
WW.B
```

### Example Output
```
W
B
```

### Explanation

**Example case 2:** One possible sequence of moves is as follows:
```
WW.B
W.WB
W.B.
.WB.
.B..
```
