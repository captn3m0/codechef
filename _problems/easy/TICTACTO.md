---
{"category_name":"easy","problem_code":"TICTACTO","problem_name":"Tic Tac Toe","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/f3TjIUpa3bw","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kairakal","problem_tester":"","date_added":"23-06-2021","tags":{"0":2,"1":"binary","2":"easy","3":"kairakal","4":"ltime97"},"problem_difficulty_level":"Easy-Medium","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/TICTACTO","time":{"view_start_date":1624727702,"submit_start_date":1624727702,"visible_start_date":1624727702,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TICTACTO","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Mandarin](https://www.codechef.com/download/translated/LTIME97/mandarin/TICTACTO.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME97/bengali/TICTACTO.pdf), [Russian](https://www.codechef.com/download/translated/LTIME97/russian/TICTACTO.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME97/vietnamese/TICTACTO.pdf) as well.

Two drunken players Alice and Bob are playing a modified version of Tic-Tac-Toe.

Initially, there is a $N \times M$ empty grid.

Alice and Bob take alternate turns **starting with Alice**. In her turn, Alice chooses an empty cell on the board and puts a `"A"` on the chosen cell. In Bob's turn, he chooses an empty cell and puts a `"B"` on the chosen cell.

The player who first gets any $K\times K$ subgrid completely filled with his/her initial wins the game. By a $K\times K$ subgrid, we mean the intersection of $K$ consecutive rows and $K$ consecutive columns. The players do not stop making turns after one of them wins and they play all $N \cdot M$ turns until the grid is filled.

You are given the sequence of moves played by each player (The cell selected by the player in his/her turn). You have to output the winner of the game or report that there is no winner.

### Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow.
- The first line of each test case contains three integers $N$, $M$, $K$.
- Each of the next $N\cdot M$ lines contains two integers $X$, $Y$ (the row and column of the cell chosen by the player with the current turn)

### Output
For each test case, output `"Alice"` if Alice wins the game or `"Bob"` if Bob wins the game or `"Draw"` if no one wins.

### Constraints
- $1 \leq T \leq 10^5$
- $1 \leq N, M \leq 1000$
- $1 \leq K \leq \min(N,M)$
- $1 \leq X \leq N$
- $1 \leq Y \leq M$
- The sum of $N\cdot M$ over all test cases does not exceed $10^6$.

### Subtasks

**Subtask 1 (10 points):** $1 \leq N \leq 10,\ 1 \leq M \leq 10$

**Subtask 2 (20 points):** $1 \leq N \leq 50,\ 1 \leq M \leq 50$

**Subtask 3 (70 points):** Original Constraints

### Sample Input
```
1
3 4 2
1 1
3 1
1 2
2 3
2 1
2 4
3 2
3 4
1 3
3 3
2 2
1 4
```
	

### Sample Output
```
Bob
```

### Explanation
After $10$ turns of the game the state of the grid is:
```
AAA.
A.BB
BABB
```

At this moment, Bob has achieved a subgrid of $2 \times 2$ with his initials while Alice has not achieved it yet so Bob is the winner.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>