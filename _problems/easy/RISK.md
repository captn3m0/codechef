---
{"category_name":"easy","problem_code":"RISK","problem_name":"Maximum Size","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n4 4\r\n1001\r\n0110\r\n0110\r\n1001\r\n2 2\r\n11\r\n11\r\n3 3\r\n100\r\n010\r\n001","output":"2\r\n0\r\n1","explanation":"In **test case 1**, if both players play optimally, it takes $5$ steps to finish the game:\r\n\r\n**Step 1:** First Mike chooses the cells $\\{(2, 2), (2, 3), (3, 2), (3, 3)\\}$ adding $4$ to his score.\r\n\r\n**Step 2:** Second Chef chooses the cell $\\{(1, 1)\\}$ adding $1$ to his score.\r\n\r\n**Step 3:** Next Mike chooses the cell $\\{(1, 4)\\}$ adding $1$ to his score.\r\n\r\n**Step 4:** Next Chef chooses the cell $\\{(4, 1)\\}$ adding $1$ to his score.\r\n\r\n**Step 5:** Finally, Mike chooses the cell $\\{(4, 4)\\}$ adding $1$ to his score.\r\n\r\nHence total score of Chef is $1 + 1 = 2$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/3H7WVe1NHNg","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"11-01-2021","tags":{"0":"breadth","1":"daanish_adm","2":"depth","3":"easy","4":"graphs","5":"start3","6":"vichitr"},"problem_difficulty_level":"Easy","best_tag":"Breadth First Search","editorial_url":"https://discuss.codechef.com/problems/RISK","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=RISK","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chef is playing an easier variation of the board game ‘Risk’ with his friend Mike. There is an $N * M$ grid, depicting the world map. Each cell of the grid is either $1$ or $0$ where $1$ denotes that there is land on this cell, while $0$ denotes water. 

In a turn, a player can capture an uncaptured cell that has land, and keep capturing neighbouring cells that share a side with it if they are on land. A cell once captured by a player can't be captured again by another player. The game continues till no uncaptured cell has land. Each player wants to be in control of as many cells of land as possible in total when the game finishes. Find the maximum number of cells of land that Chef can capture if he plays second, and both players play optimally. 

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow.
- Each testcase contains $N + 1$ lines of input.
- First line will contain $2$ space separated integers $N$ and $M$ denoting the size of the grid. 
- Each of the next $N$ lines contains a binary string of length $M$ depicting the map. 

###Output:
For each testcase, output in a single line answer to the problem.

###Constraints 
- $1 \leq N, M \leq 10^5$
- Each character in the grid is either $0$ or $1$
- There's atleast $1$ land on the grid
- Sum of $N * M$ over all testcases is almost $10^6$.

###Sample Input:
```
3
4 4
1001
0110
0110
1001
2 2
11
11
3 3
100
010
001
```

###Sample Output:
```
2
0
1
```
	
###Explanation:

In **test case 1**, if both players play optimally, it takes $5$ steps to finish the game:

**Step 1:** First Mike chooses the cells $\{(2, 2), (2, 3), (3, 2), (3, 3)\}$ adding $4$ to his score.

**Step 2:** Second Chef chooses the cell $\{(1, 1)\}$ adding $1$ to his score.

**Step 3:** Next Mike chooses the cell $\{(1, 4)\}$ adding $1$ to his score.

**Step 4:** Next Chef chooses the cell $\{(4, 1)\}$ adding $1$ to his score.

**Step 5:** Finally, Mike chooses the cell $\{(4, 4)\}$ adding $1$ to his score.

Hence total score of Chef is $1 + 1 = 2$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>