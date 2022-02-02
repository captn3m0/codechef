---
{"category_name":"school","problem_code":"ADAKING","problem_name":"Ada King","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/UHheckWroMk","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":"","date_added":"16-10-2018","tags":{"0":"alei","1":"alei","2":"cakewalk","3":"constructive","4":"july20"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/ADAKING","time":{"view_start_date":1594632600,"submit_start_date":1594632600,"visible_start_date":1594632600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ADAKING","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JULY20/hindi/ADAKING.pdf), [Bengali](https://www.codechef.com/download/translated/JULY20/bengali/ADAKING.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY20/mandarin/ADAKING.pdf), [Russian](https://www.codechef.com/download/translated/JULY20/russian/ADAKING.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY20/vietnamese/ADAKING.pdf) as well.

Chef Ada is training her calculation skills. She wants to place a <a href="">king</a> and some obstacles on a <a href="https://en.wikipedia.org/wiki/Chessboard">chessboard</a> in such a way that the number of distinct cells the king can reach is exactly $K$.

Recall that a chessboard has $8$ rows (numbered $1$ through $8$) and $8$ columns (numbered $1$ through $8$); let's denote a cell in row $r$ and column $c$ by $(r,c)$.

In one move, a king can move to any adjacent cell which shares a side or corner with its current cell and does not contain an obstacle. More formally, a king in a cell $(r,c)$ can move to any cell $(r_n,c_n)$ if $(r_n,c_n)$ is a valid cell of the chessboard which does not contain an obstacle and $(r-r_n)^2+(c-c_n)^2 \le 2$. 

A cell $(x,y)$ can be reached by a king if, after an arbitrary number of moves (including zero), the king is in the cell $(x,y)$.

Help Ada find any valid configuration of the board such that the king can reach exactly $K$ distinct cells. It is guaranteed that such a configuration always exists. If there are multiple solutions, you may find any one.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $K$.

### Output
For each test case, print $8$ lines describing a chessboard, each containing $8$ characters. For each valid $i$ and $j$, the $j$-th character on the $i$-th line should be one of the following:
- 'O' if the cell $(i,j)$ initially contains the king; there should be exactly one such cell
- 'X' if the cell $(i,j)$ contains an obstacle
- '.' if the cell $(i,j)$ is empty

### Constraints
- $1 \le T \le 64$
- $1 \le K \le 64$

### Subtasks
**Subtask #1 (10 points):** $K \le 8$

**Subtask #2 (90 points):** original constraints

### Example Input
```
4
1
5
9
64
```

### Example Output
```
........
........
........
.XXX....
.XOX....
.XXX....
........
........

........
........
........
........
........
XXX.....
..XX....
O..X....

........
.XXXXXXX
.X.O...X
.X...XXX
.XXX.X..
...XXX..
........
........

........
........
........
...O....
........
........
........
........
```

### Explanation
The descriptions of the chessboard for each test case are separated by blank lines for clarity. Note that these lines should not appear on the output of your submission.

**Example case 1:** The king is surrounded by obstacles, so it cannot move ― the only cell it can reach is its initial cell.

**Example case 4:** The king can visit all cells of the board.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>