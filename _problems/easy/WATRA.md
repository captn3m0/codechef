---
{"category_name":"easy","problem_code":"WATRA","problem_name":"Water Transfer","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/YRgjOKhMag0","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rlukaku37","problem_tester":"","date_added":"6-03-2021","tags":{"0":"binary","1":"cook127","2":"dijkstra","3":"easy","4":"rlukaku37"},"problem_difficulty_level":"Easy-Medium","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/WATRA","time":{"view_start_date":1616351402,"submit_start_date":1616351402,"visible_start_date":1616351402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=WATRA","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK127/mandarin/WATRA.pdf), [Russian](https://www.codechef.com/download/translated/COOK127/russian/WATRA.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK127/vietnamese/WATRA.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK127/bengali/WATRA.pdf) as well.

The city of Hunterland can be represented as a grid with $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$). Let's denote a cell in row $r$ and column $c$ by $(r,c)$. Ahmet, the mayor, plans to develop the underground water system of Hunterland.

There is a large reservoir of water in the cell $(1, 1)$. Water from the reservoir must reach the cell $(N, M)$ through a simple path in a network of underground pipes. From each cell $(i,j)$, water flows out through a one-directional pipe with a given capacity $a_{i,j}$ and direction $d_{i,j}$ (up, down, left or right), either to a side-adjacent cell or out of the grid. At any moment, a pipe cannot hold more water than its capacity. Each cell, however, can receive water from any number of adjacent cells; in particular, there can be pairs of cells which send water directly to each other through two pipes with opposite directions.

Due to poor planning of the previous mayor, the $N \cdot M$ pipes do not have optimal capacities or directions. Ahmet employs Faruk the engineer to rectify this network. Faruk does not have much time, so he may only perform up to $K$ operations. In each operation, he should:
- choose some outgoing pipe with positive capacity
- decrease its capacity by $1$
- rotate it 90 degrees clockwise, i.e. change its direction in one of the following ways: up to right, right to down, down to left or left to up

Faruk's goal is to maximise the amount of water that can be sent from the cell $(1,1)$ to the cell $(N,M)$ per unit of time. Specifically, for each simple path along pipes from the cell $(1, 1)$ to $(N, M)$ in the final network, consider the minimum of capacities of pipes in this path; the amount of water that can be sent from $(1, 1)$ to $(N, M)$ per unit of time is the maximum of these minimum values, or $0$ if there is no valid path. Help Faruk determine this maximum possible amount of water that can be sent from the cell $(1,1)$ to the cell $(N,M)$.

Note that it is not required to minimise the number of clockwise rotations. Also note that the capacity and direction of the pipe from the cell $(N, M)$ do not affect the answer, but have been given on the input for uniformity.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $M$ and $K$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains $M$ space-separated integers $a_{i,1}, a_{i,2}, \ldots, a_{i,M}$.
- $N$ more lines follow. For each valid $i$, the $i$-th of these lines contains a single string with length $M$; for each valid $j$, the $j$-th character of this string denotes the direction $d_{i,j}$ of the pipe from the cell $(i,j)$:
    - 'U' denotes an outgoing pipe directed upwards ― to the cell $(i-1, j)$
    - 'R' denotes an outgoing pipe directed to the right ― to the cell $(i, j+1)$
    - 'D' denotes an outgoing pipe directed downwards ― to the cell $(i+1, j)$
    - 'L' denotes an outgoing pipe directed to the left ― to the cell $(i, j-1)$

### Output
For each test case, print a single line containing one integer ― the maximum amount of water that can reach the cell $(N, M)$ per unit of time.

### Constraints
- $1 \leq T \leq 160,000$
- $1 \leq N, M \leq 400$
- $2 \leq N \cdot M$
- $0 \leq K \leq 10^9$
- $4 \leq a_{i,j} \leq 10^9$ for each valid $i,j$
- $d_{i,j}$ is 'U', 'R', 'D', or 'L' for each valid $i,j$
- the sum of $N \cdot M$ over all test cases does not exceed $160,000$

### Example Input 1
```
1
3 3 1
4 4 4
5 4 4
4 8 4
DRR
DUU
URL
```

### Example Output 1
```
3
```

### Explanation
**Example case 1:** Water can flow from $(1,1)$ down to $(2,1)$, then again down to $(3,1)$, then right to $(3,2)$ and again right to $(3,3)$. Since the initial direction of the pipe from the cell $(3,1)$ is upwards, we need to change it using one operation; after this operation, it is directed right and its capacity is $3$. All other pipes have correct directions. This path gives the maximum possible amount of water, which is $3$.

### Example Input 2
```
4
1 2 3
5 100
DL
2 1 0
100
5
D
L
1 2 1
10 10
LR
3 3 5
10 20 4
9 8 6
16 15 12
RRD
RDD
LDU
```

### Example Output 2
```
2
100
0
8
```

### Example Input 3
```
4
3 3 1000000000
4776 15202 12355
14820 996 21033
32699 5719 31549
ULL
LLR
RLD
3 3 1000000000
10475 8939 23763
25687 26437 9851
4998 1101 8817
DRU
LRL
RDD
3 3 1000000000
14671 3820 23657
18786 215 9033
21941 21658 11038
UDU
LRU
LRD
3 3 1000000000
15180 16030 2171
32602 28043 31232
8501 4294 29114
UDR
DLL
RDD
```

### Example Output 3
```
4775
9848
14669
15179
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>