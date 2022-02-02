---
{"category_name":"medium","problem_code":"ISLNDHOP","problem_name":"Island Hopping","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"explodingfrz","problem_tester":"","date_added":"22-06-2021","tags":{"0":"dynamic","1":"explodingfrz","2":"graphs","3":"ltime97","4":"medium","5":"observation"},"problem_difficulty_level":"Medium-Hard","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/ISLNDHOP","time":{"view_start_date":1624727702,"submit_start_date":1624727702,"visible_start_date":1624727702,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ISLNDHOP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Mandarin](https://www.codechef.com/download/translated/LTIME97/mandarin/ISLNDHOP.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME97/bengali/ISLNDHOP.pdf), [Russian](https://www.codechef.com/download/translated/LTIME97/russian/ISLNDHOP.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME97/vietnamese/ISLNDHOP.pdf) as well.

The nation of Islandia can be represented as an $N \times N$ grid. Let $(i, j)$ denote the square at the $i$-th row from the top and the $j$-th column from the left. A cell $(i, j)$ is labelled $1$ if it is land and $0$ if it is water. Any two cells of the grid which share a side, and are both land are said to belong to the same island. 

Islandia holds two contests a year, the first at $(x_a, y_a)$ and the second at $(x_b, y_b)$. Ashish will need to travel from cell $(x_a, y_a)$ to $(x_b, y_b)$. To do so, he can perform a sequence of zero or more moves. In each move if he is at $(x_i, y_i)$, he can perform one of two actions:


- Type 1: Move from $(x_i, y_i)$ to some land cell $(x_j, y_j)$ that lies on a different island at a cost of $| x_i - x_j | + | y_i - y_j |$
- Type 2: Move from $(x_i, y_i)$ to some land cell $(x_j, y_j)$ that lies on the same island at a cost of $0$.


Let the *beauty* of a sequence of moves be the number of moves of type $1$ while traveling from $(x_a, y_a)$ to $(x_b, y_b)$. We define the *simple cost* as the minimum cost of a sequence with $\mathrm{beauty} \leq 1$.

Ashish wants to figure out the maximum beauty possible to go from $(x_a,y_a)$ to $(x_b, y_b)$ without exceeding the *simple* cost. However, Ashish only knows $(x_a, y_a)$. Find the answer for **every possible** land cell $(x_b, y_b)$.

Note that we **DO NOT need to minimize the cost of the trip**, only maximize the beauty without exceeding the simple cost.

### Input

- The first line contains an integer $T$, the number of test cases. Then $T$ test cases follow.
- The first line of each test case contains an integer $N$.
- The following $N$ lines each contains a string $S=s_1 s_2 \ldots s_N$. The string on the $i$-th line represents the $i$-th row of the grid, where $s_{j}$ is $1$ if the cell $(i, j)$ is land, and $0$ if it is water.
- The last line of each test case contains two integers $x_{a}$ and $y_{a}$ where $(x_a, y_a)$ represents the cell where the first contest will be held. It is guaranteed that this cell will be a land cell.

### Output

For each test case, print $N$ lines, each containing the $N$ space-separated integers. The $j$-th value of the $i$-th line represents the maximum beauty possible on a journey from $(x_a, y_a)$ to $(i, j)$ satisfying the mentioned conditions, if the cell $(i, j)$ is land. If $(i, j)$ is a water cell or belongs to the same island as $(x_a, y_a)$, the value to be printed is 0.

### Constraints

- $1 \leq T \leq 20$
- $1 \leq N \leq 200$
- $1\le x_a, y_a\le N$
- The sum of $N^2$ over all cases does not exceed $4\cdot 10^4$

###Subtasks

**Subtask #1 (15 points):**
- $N \leq 50$
- The sum of $N^2$ over all cases does not exceed $2500$

**Subtask #2 (35 points):**
- $N \leq 100$
- The sum of $N^2$ over all cases does not exceed $10^4$

**Subtask #3 (50 points):** Original constraints

###Sample Input 1
```
2
2
00
01
2 2
5
00001
10010
00001
00000
01010
2 4
```
###Sample Output 1
```
0 0 
0 0 
0 0 0 0 1 
1 0 0 0 0 
0 0 0 0 1 
0 0 0 0 0 
0 2 0 1 0 
```

###Sample Input 2
```
2
3
011
010
001
2 2
9
110000011
001100001
100100111
011000010
000110011
000010100
000011111
111101001
101110110
3 1
```

###Sample Output 2
```
0 0 0 
0 0 0 
0 0 1 
1 1 0 0 0 0 0 3 3 
0 0 1 1 0 0 0 0 3 
0 0 0 1 0 0 3 3 3 
0 1 1 0 0 0 0 3 0 
0 0 0 2 2 0 0 3 3 
0 0 0 0 2 0 2 0 0 
0 0 0 0 2 2 2 2 2 
1 1 1 1 0 2 0 0 2 
1 0 1 1 1 0 6 6 0 
```

###Sample Input 3
```
2
7
1011101
0000000
0000000
0000000
0000000
0000000
0000000
1 1
9
111111101
100000000
100000000
100000000
100000000
100000000
100000000
100000000
111111101
9 9
```

###Sample Output 3
```
0 0 1 1 1 0 2 
0 0 0 0 0 0 0 
0 0 0 0 0 0 0 
0 0 0 0 0 0 0 
0 0 0 0 0 0 0 
0 0 0 0 0 0 0 
0 0 0 0 0 0 0 
1 1 1 1 1 1 1 0 4 
1 0 0 0 0 0 0 0 0 
1 0 0 0 0 0 0 0 0 
1 0 0 0 0 0 0 0 0 
1 0 0 0 0 0 0 0 0 
1 0 0 0 0 0 0 0 0 
1 0 0 0 0 0 0 0 0 
1 0 0 0 0 0 0 0 0 
1 1 1 1 1 1 1 0 0 
```

###Explanation

**Sample 1, test case 2:**

The simple cost from $(2, 4)$ to $(5, 2)$ is $| 2 - 5 | + | 4 - 2 | = 3 + 2 = 5$. We can achieve a beauty of $2$ without exceeding the simple cost in the following manner:

- Perform a move of type $1$ from $(2, 4)$ to $(5, 4)$ at a cost of $3$.
- Perform a move of type $1$ from $(5, 4)$ to $(5, 2)$ at a cost of $2$.

**Sample 3, test case 1:**

The simple cost from $(1, 1)$ to $(1, 7)$ is $| 1 - 1 | + | 1 - 7 | = 0 + 6 = 6$. However we can achieve a beauty of $2$ without exceeding the simple cost in the following manner:

- Perform a move of type $1$ from $(1, 1)$ to $(1, 3)$ at a cost of $2$.
- Perform a move of type $2$ from $(1, 3)$ to $(1, 5)$ at a cost of $0$.
- Perform a move of type $1$ from $(1, 5)$ to $(1, 7)$ at a cost of $2$.

Note that the cost of some sequence with beauty $> 1$ might be lower than the simple cost.

**Sample 3, test case 2:**

In the second case of third sample, the simple cost from $(9, 9)$ to $(1, 9)$ is $| 9 - 1 | + | 9 - 9 | = 8 + 0 = 8$. However we can achieve a beauty of $4$ without exceeding the simple cost in the following manner:

- Perform a move of type $1$ from $(9, 9)$ to $(9, 7)$ at a cost of $2$.
- Perform a move of type $2$ from $(9, 7)$ to $(1, 7)$ at a cost of $0$.
- Perform a move of type $1$ from $(1, 7)$ to $(1, 9)$ at a cost of $2$.
- Perform a move of type $1$ from $(1, 9)$ to $(1, 7)$ at a cost of $2$.
- Perform a move of type $1$ from $(1, 7)$ to $(1, 9)$ at a cost of $2$.

Also note that in the same sample the answer for $(1, 7)$ will be $1$, not $3$ as the simple cost from $(9, 9)$ to $(1, 7)$ is $2$. This can be achieved by performing a move of type $1$ from $(9, 9)$ to $(9, 7)$ at cost of $2$ and then a move of type $2$ from $(9, 7)$ to $(1, 7)$ at a cost of $0$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>