---
{"category_name":"challenge","problem_code":"CONGRID","problem_name":"Connect on a Grid (Challenge)","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"physics0523","problem_tester":"","date_added":"13-09-2020","tags":{"0":"physics0523"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CONGRID","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/NOV20/hindi/CONGRID.pdf), [Bengali](https://www.codechef.com/download/translated/NOV20/bengali/CONGRID.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/NOV20/mandarin/CONGRID.pdf), [Russian](https://www.codechef.com/download/translated/NOV20/russian/CONGRID.pdf), and [Vietnamese](https://www.codechef.com/download/translated/NOV20/vietnamese/CONGRID.pdf) as well.

You are given a grid with $N$ rows (numbered $1$ through $N$ from top to bottom) and $N$ columns (numbered $1$ through $N$ from left to right). Let's denote a cell in the $i$-th row and the $j$-th column by $(i,j)$.

There are $K$ checkpoints (numbered $1$ through $K$) in the grid. For each valid $i$, the $i$-th checkpoint is in the cell $(X_i,Y_i)$ and it has two parameters $L_i$ and $R_i$.

A path with length $l$ is a sequence of pairwise distinct cells $(r_1,c_1) \rightarrow (r_2,c_2) \rightarrow \ldots \rightarrow (r_l,c_l)$ such that for each valid $i$, the cell $(r_i,c_i)$ shares a side with the cell $(r_{i+1},c_{i+1})$. Let's call the cells $(r_1,c_1)$ and $(r_l,c_l)$ the *endpoints* of the path.

We are interested in sets of paths which satisfy the following conditions:
- Each path must start in a checkpoint and end in a different checkpoint. It must not contain any other cells with checkpoints.
- The paths are disjoint, i.e. no cell may be in two or more paths.
- For each path: let's denote its length by $C$ and the checkpoints it connects by $p$ and $q$; then, $\max(L_p,L_q) \le C \le \min(R_p,R_q)$ must hold.

Your goal is to find a valid set of paths whose size is as large as possible.

### Input
- The first line of the input contains two space-separated integers $N$ and $K$.
- $K$ lines follow. For each valid $i$, the $i$-th of each lines contains four space-separated integers $X_i$, $Y_i$, $L_i$ and $R_i$. 

### Output
- First, print a line containing a single integer $M$ ― the number of paths in your set.
- Then, print $M$ lines. For each valid $i$, the $i$-th of these lines should contain two space-separated integers $S_i$ and $T_i$, followed by a space and a string $F_i$, describing the $i$-th of your paths in the following way:
    - The path starts in the cell containing the $S_i$-th checkpoint and ends in the cell containing the $T_i$-th checkpoint.
	- $F_i$ describes the sequence of moves used to reach the ending cell from the starting cell.
	- Let's denote the current cell by $(x, y)$; initially, this is $(X_{S_i}, Y_{S_i})$. Then, for each character $c$ of $F_i$ from the beginning to the end:
	    - If $c$ is 'L', we move to the cell $(x,y-1)$.
	    - If $c$ is 'R', we move to the cell $(x,y+1)$.
	    - If $c$ is 'U', we move to the cell $(x-1,y)$.
	    - If $c$ is 'D', we move to the cell $(x+1,y)$.
	- At the end of this process, $(x, y)$ should be $(X_{T_i}, Y_{T_i})$.

### Constraints 
- $N = 500$
- $2 \le K \le N^2$
- $K$ is even
- $1 \le X_i, Y_i \le N$ for each valid $i$
- $2 \le L_i \le R_i \le 64$ for each valid $i$

### Example Input
```
6 6
1 2 4 5
2 3 3 8
3 6 2 6
4 1 3 7
4 6 3 3
6 6 1 10
```

### Example Output
```
3
1 4 LDDD
2 3 RRRD
6 5 UU
```

### Explanation
The positions of checkpoints are marked by integers in the following grid:
```
.1....
..2...
.....3
4....5
......
.....6
```

We choose a set of $3$ paths:
- From checkpoint $1$ to checkpoint $4$: $(1,2)\rightarrow(1,1)\rightarrow(2,1)\rightarrow(3,1)\rightarrow(4,1)$.
- From checkpoint $2$ to checkpoint $3$: $(2,3)\rightarrow(2,4)\rightarrow(2,5)\rightarrow(2,6)\rightarrow(3,6)$.
- From checkpoint $6$ to checkpoint $5$: $(6,6)\rightarrow(5,6)\rightarrow(4,6)$.

### Test generation
The source code used to generate test data can be downloaded [here](https://codechef_shared.s3.amazonaws.com/download/Images/NOV20/CONGRID/CONGRID_input_generator.cpp).

First, a parameter $E$ to limit the lengths of the paths is chosen. $E$ can be $8$, $16$, $32$ or $64$. There are $3$ test files for each value of $E$.

The generator constructs a set $H$ of disjoint undirected paths covering the whole grid as follows:
- For each pair $(r, c)$ ($1 \le r, c \le N$), add the path which contains only the cell $(r, c)$ to $H$. Now, $H$ contains $N^2$ paths.
- Let $S$ be the set of all $4N^2$ tuples $(x,y,d)$, where $x$ and $y$ are integers between $1$ and $N$ and $d = (d_0,d_1)$ is a pair of integers from the set $\{(-1,0),(1,0),(0,-1),(0,1)\}$.
- While $S$ is not empty, choose an element $(x,y,d)$ from $S$ uniformly randomly and remove it from $S$. Let's denote $A=(x,y)$ and $B=(x+d_0,y+d_1)$.
- If $B$ is not a valid cell in the grid, continue the process.
- Otherwise, find the path $P \in H$ that has the cell $A$ as an endpoint and the path $Q \in H$ that has the cell $B$ as an endpoint.
- If both paths $P$ and $Q$ exist (it follows that they are unique) and the sum of their lengths does not exceed $E$, then remove $P$ and $Q$ from $H$ and add the path formed by concatenating them (and connecting cells $A$ and $B$) to $H$. Note that the paths can be concatenated because the cells $A$ and $B$ are adjacent.

Afterwards, paths with length $1$ are removed from $H$. For each path that remains in $H$, a checkpoint is placed in each of its endpoints (therefore, $K = 2|H|$). The checkpoints are numbered randomly.

Next, the parameters $L_1, L_2, \ldots, L_K$ and $R_1, R_2, \ldots, R_K$ are generated. For each the path $P \in H$:
- Let's denote the length of this path by $l$.
- We choose an integer $t$ between $0$ and $\min(8, E/4)$ uniformly randomly.
- Then, for each of its endpoints, choose its parameters $L_i$ and $R_i$ uniformly randomly and independently among all pairs of integers $(L, R)$ which satisfy $2 \le L \le l \le R \le E$ and $R - L = t$.

### Scoring
If you do not output a set of paths satisfying all constraints, you will receive the WA verdict.

The score of each test file is $(2M/K)^4$, where $K/2$ is the maximum possible value of $M$. The score of a submission is the sum of scores of all test files. Your goal is to maximise the score of your submission.

There are 12 test files. During the contest, the displayed score will account for exactly 4 test files (one for each value of $E$), i.e. your score reflects your submission's performance on 33% of the test files. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to include the sum of your program's scores over the other 8 test files.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>