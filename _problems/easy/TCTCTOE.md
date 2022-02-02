---
{"category_name":"easy","problem_code":"TCTCTOE","problem_name":"Tic Tac Toe","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\nXOX\r\nXXO\r\nO_O\r\nXXX\r\nOOO\r\n___\r\nXOX\r\nOX_\r\nXO_","output":"2\r\n3\r\n1","explanation":"**Test Case $1$:** The board is reachable, and although no player can win from this position, still the game continues.\r\n\r\n**Test Case $2$:** There can\u0027t be multiple winners in the game.\r\n\r\n**Test Case $3$:** The first player is clearly a winner with one of the diagonals.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/fOrA7eufFeo","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"26-04-2021","tags":{"0":"daanish_adm","1":"depth","2":"easy","3":"may21"},"problem_difficulty_level":"Easy","best_tag":"Depth First Search","editorial_url":"https://discuss.codechef.com/problems/TCTCTOE","time":{"view_start_date":1621243802,"submit_start_date":1621243802,"visible_start_date":1621243802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TCTCTOE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/MAY21/bengali/TCTCTOE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MAY21/mandarin/TCTCTOE.pdf), [Russian](https://www.codechef.com/download/translated/MAY21/russian/TCTCTOE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MAY21/vietnamese/TCTCTOE.pdf) as well.

Tic-tac-toe is a game played between two players on a $3 \times 3$ grid. In a turn, a player chooses an empty cell and places their symbol on the cell. The players take alternating turns, where the player with the first turn uses the symbol $X$ and the other player uses the symbol $O$. The game continues until there is a row, column, or diagonal containing three of the same symbol ($X$ or $O$), and the player with that token is declared the winner. Otherwise if every cell of the grid contains a symbol and nobody won, then the game ends and it is considered a draw.

You are given a tic-tac-toe board $A$ after a certain number of moves, consisting of symbols $O$, $X$, and underscore($\_$). Underscore signifies an empty cell.

Print
- $1$: if the position is reachable, and the game has drawn or one of the players won.
- $2$: if the position is reachable, and the game will continue for at least one more move.
- $3$: if the position is not reachable.

**Note:** 
- Starting from an empty board, **reachable** position means that the grid is possible after a finite number of moves in the game where the players may or may not be playing optimally.
- The answer for each testcase should be with respect to the present position and independent of the results in the further successive moves.

###Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow. 
- Each test case contains $3$ lines of input where each line contains a string describing the state of the game in $i^{th}$ row.

###Output
For each test case, output in a single line $1$, $2$ or $3$ as described in the problem.

###Constraints 
- $1 \leq T \leq 3^9$
- $A_{ij} \in \{X, O, \_ \}$

###Subtasks
**Subtask #1 (100 points):** Original Constraints

###Sample Input
```
3
XOX
XXO
O_O
XXX
OOO
___
XOX
OX_
XO_
```

###Sample Output
```
2
3
1
```
	
###Explanation
**Test Case $1$:** The board is reachable, and although no player can win from this position, still the game continues.

**Test Case $2$:** There can't be multiple winners in the game.

**Test Case $3$:** The first player is clearly a winner with one of the diagonals.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>