---
{"category_name":"challenge","problem_code":"NBOTS","problem_name":"(Challenge) Nanobots","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":10,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"7-04-2020","tags":{"0":"alei","1":"alei","2":"challenge","3":"dynamic","4":"greedy","5":"may20"},"problem_difficulty_level":"Unavailable","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/NBOTS","time":{"view_start_date":1589189402,"submit_start_date":1589189402,"visible_start_date":1589189402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=NBOTS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/MAY20/hindi/NBOTS.pdf), [Bengali](https://www.codechef.com/download/translated/MAY20/bengali/NBOTS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MAY20/mandarin/NBOTS.pdf), [Russian](https://www.codechef.com/download/translated/MAY20/russian/NBOTS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MAY20/vietnamese/NBOTS.pdf) as well.

To heal people with virus infections, Ada designed small robots (nanobots) that travel through the bloodstream, scanning all tissues of the body.

The nanobots have detected a region of infected cells described by a matrix with $N$ rows (numbered $1$ through $N$ from top to bottom) and $N$ columns (numbered $1$ through $N$ from left to right). For each valid $r$ and $c$, the cell in row $r$ and column $c$ has a membrane with thickness $T_{r,c}$.

To prevent the spread of the virus, the nanobots surrounded the infected region and decided to destroy all the infected cells. The nanobots can form a powerful laser with force $F$ and shoot this laser horizontally from the left or from the right of any row, or vertically from the top or from the bottom of any column. Whenever the laser is fired, it breaks through the maximum number of cells in its way such that the total thickness of these cells' membranes is less than or equal to $F$ and destroys them; the cells that lie behind them are unaffected. Formally, if the laser destroys $C$ cells, then they are the first $C$ cells which lie in the laser's way (from the direction in which it is fired), haven't been destroyed before, and the sum of thicknesses of their membranes is at most $F$.

The laser may be fired multiple times from any directions in any rows or columns. It may also be fired repeatedly in the same direction and the same row or column. However, each shot uses a lot of the nanobots' energy, so Ada wants to destroy all cells using as few shots as possible.

Let $H$ be the minimum number of shots needed to destroy all cells when using only horizontal shots, and $V$ the minimum number of shots needed to destroy all cells when using only vertical shots. Ada programmed the nanobots to perform $K = \mathrm{min}(V,H)$ shots. Help Ada write a program that uses a strictly smaller number of shots.

### Input
- The first line of the input contains two space-separated integers $N$ and $F$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains $N$ space-separated integers $T_{i,1}, T_{i,2}, \ldots, T_{i,N}$.
- The last line contains a single integer $K$.

### Output
First, print a line containing a single integer $S$ ($K \gt S$) ― the number of shots you want to make.

Then, print $S$ lines describing the shots. Each of these lines should contain a character $X$, followed by a space and an integer $Y$.

$X$ can be 'L', 'R', 'U' or 'D', denoting a laser fired from the left, right, up or down respectively. If $X$ is 'L' or 'R', then $Y$ denotes the row in which the laser is fired; otherwise, $Y$ denotes the column in which the laser is fired.

### Constraints
- $N = F = 512$
- $1 \le T_{i,j} \le F$ for each valid $i, j$
- there is a solution that uses less than $K$ shots

### Example Input
```
4 10
2 6 4 3
1 2 3 4
3 2 3 5
6 9 1 1
8
```

### Example Output
```
7
L 1
U 3
D 4
U 2
D 1
L 4
R 1
```

### Explanation
The shots and the state of the grid in between the shots are shown below. The positions of the laser in the shots are denoted by '*' and destroyed cells are denoted by 'X'.

```
 L 1       U 3       D 4

               *
*X X 4 3   X X X 3   X X X 3
 1 2 3 4   1 2 X 4   1 2 X X
 3 2 3 5   3 2 X 5   3 2 X X
 6 9 1 1   6 9 1 1   6 9 1 X
                           *

 U 2       D 1       L 4
   *
 X X X 3   X X X 3   X X X 3
 1 X X X   X X X X   X X X X
 3 X X X   X X X X   X X X X
 6 9 1 X   X 9 1 X  *X X X X
           *
```

### Test Generation
- Let $Z=\{1, F/4, F/2, 3F/4, F\}$.
- For each pair of elements $(L, R)$ of $Z$ such that $L \lt R$, except $(3F/4, F)$, there is one test file that uses these parameters $L$ and $R$ to generate the matrix $T$.
- For each valid $i$ and $j$, $T_{i,j}$ is chosen uniformly randomly between $L$ and $R$ (inclusive).

### Scoring
If $S \ge K$, you will receive the Wrong Answer verdict; otherwise, the score of a test file is $K-S$. The score of a submission is the sum of scores of all test files. Your goal is to maximise the score of your submission.

There are nine test files. During the contest, the displayed score will account for exactly 3 test files, i.e. your score reflects your submission's performance on approximately 33% (3/9) of the test files. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to include the sum of your program's scores over the other 6 test files.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>