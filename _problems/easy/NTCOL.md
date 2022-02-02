---
{"category_name":"easy","problem_code":"NTCOL","problem_name":"Not Too Colourful","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/NZjVX1qGfyg","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"explodingfrz","problem_tester":"","date_added":"11-01-2021","tags":{"0":"constructive","1":"cook126","2":"easy","3":"explodingfrz"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/NTCOL","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=NTCOL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK126/hindi/NTCOL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK126/mandarin/NTCOL.pdf), [Russian](https://www.codechef.com/download/translated/COOK126/russian/NTCOL.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK126/vietnamese/NTCOL.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK126/bengali/NTCOL.pdf) as well.

You have a grid with $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$). Initially, the grid is empty. You also have $N \cdot M$ tiles with three colours: $R$ tiles are red, $G$ tiles are green and $B$ tiles are blue.

Find a way to place these tiles in the grid such that for each tile, there are at most two distinct colours among the tiles that share a side with it.

For example, a valid placement for $N = M = R = G = B = 3$ is:

<center>
<img src="https://codechef_shared.s3.amazonaws.com/download/Images/COOK126/NTCOL/NTCOL_1.png" width="300" height="300">
</center>

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains five space-separated integers $N$, $M$, $R$, $G$ and $B$.

### Output
For each test case, print $N$ lines describing the placement of the tiles in the grid. For each valid $i$, the $i$-th of these lines should contain a string with length $M$ describing the tiles in the $i$-th row, with red, green and blue tiles denoted by the characters 'R', 'G' and 'B' respectively.

If there are multiple solutions, you may find any one of them. It can be proved that a solution always exists. 

### Constraints
- $1 \leq T \leq 15,000$
- $1 \leq N, M \leq 500$
- $0 \leq R, G, B \leq N \cdot M$
- $R + G + B = N \cdot M$
- the sum of $N \cdot M$ over all test cases does not exceed $3 \cdot 10^5$

### Example Input
```
6
1 1 0 0 1
1 3 1 1 1
3 2 1 4 1
3 3 3 3 3
4 3 4 2 6
10 10 41 20 39
```

### Example Output
```
B
RGB
RG
GG
GB
RGB
BRG
GBR
GGB
BBB
BBR
RRR
RRRRRRRRRR
RRRRRRRRRR
RRRRRRRRRR
RRRRRRRRRR
RGGGGGGGGG
GGGGGGGGGG
GBBBBBBBBB
BBBBBBBBBB
BBBBBBBBBB
BBBBBBBBBB
```

### Explanation
Let's denote a cell in the $i$-th row from the top and $j$-th column from the left by $(i, j)$.

**Example case 1:** The only option is to place the single blue tile at $(1, 1)$. This cell clearly has no adjacent cells and therefore, the number of distinct colours among tiles that share a side with it is $0$, satisfying the condition.

**Example case 2:** 

<center>
<img src="https://codechef_shared.s3.amazonaws.com/download/Images/COOK126/NTCOL/NTCOL_2.png" width="300" height="100" >
</center>

The red tile at $(1, 1)$ shares a side only with the green tile at $(1, 2)$.

The green tile at $(1, 2)$ shares a side with the red tile at $(1, 1)$ as well as with the blue tile at $(1, 3)$.

The green tile at $(1, 3)$ shares a side only with the green tile at $(1, 2)$.

Each tile has at most $2$ tiles that share a side with it, so the condition must be satisfied. Note that there are other valid answers such as `BGR`, `GBR`, etc.

**Example case 3:**

<center>
<img src="https://codechef_shared.s3.amazonaws.com/download/Images/COOK126/NTCOL/NTCOL_3.png" width="200" height="300" >
</center>

Each tile has tiles with at most $2$ distinct colours adjacent to it, so the condition is satisfied by this placement.

For example, the tile at $(2, 1)$ shares sides with the tiles at $(1, 1)$, $(2, 2)$ and $(3, 1)$, which are red, green and green respectively.

**Example case 4:** The example output corresponds to the figure in the statement. 

For example, the tile at $(2, 2)$ shares sides with the tiles at $(1, 2)$, $(2, 1)$, $(2, 3)$ and $(3, 2)$, which are green, blue, green and blue respectively.

Once again, we can see that each tile has only tiles with at most two distinct colours adjacent to it, so the condition is satisfied by this placement.

Note that the placement in the following figure is invalid, since the tile at $(2, 2)$ has tiles with all three distinct colours adjacent to it. There are four tiles which share a side with it ― the tiles at $(1, 2)$, $(2, 1)$, $(2, 3)$ and $(3, 2)$, which are coloured green, green, red and blue respectively.

<center>
<img src="https://codechef_shared.s3.amazonaws.com/download/Images/COOK126/NTCOL/NTCOL_4.png" width="300" height="300" >
</center>

The following placement is also invalid for this test case, since the number of tiles with each colour is wrong ― there are $5$ red tiles, $3$ green tiles and $1$ blue tile.

<center>
<img src="https://codechef_shared.s3.amazonaws.com/download/Images/COOK126/NTCOL/NTCOL_5.png" width="300" height="300" >
</center>

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>