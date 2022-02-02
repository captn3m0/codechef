---
category_name: easy
problem_code: CHEFARC
problem_name: 'Chef and Robots Competition'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: lexman
problem_tester: mugurelionut
date_added: 29-05-2016
tags:
    - bfs
    - easy
    - july16
    - lexman
editorial_url: 'http://discuss.codechef.com/problems/CHEFARC'
time:
    view_start_date: 1468402200
    submit_start_date: 1468402200
    visible_start_date: 1468402200
    end_date: 1735669800
    current: 1493558115
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JULY16/mandarin/CHEFARC.pdf), [Russian](http://www.codechef.com/download/translated/JULY16/russian/CHEFARC.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JULY16/vietnamese/CHEFARC.pdf) as well.

In Chefland, there is a monthly robots competition. In the competition, a grid table of **N** rows and **M** columns will be used to place robots. A cell at row **i** and column **j** in the table is called cell **(i, j)**. To join this competition, each player will bring two robots to compete and each robot will be placed at a cell in the grid table. Both robots will move at the same time from one cell to another until they meet at the same cell in the table. Of course they can not move outside the table. Each robot has a movable range. If a robot has movable range **K**, then in a single move, it can move from cell **(x, y)** to cell **(i, j)** provided **(|i-x| + |j-y| &lt;= K)**. However, there are some cells in the table that the robots can not stand at, and because of that, they can not move to these cells. The two robots with the minimum number of moves to be at the same cell will win the competition.

Chef plans to join the competition and has two robots with the movable range **K1** and **K2**, respectively. Chef does not know which cells in the table will be used to placed his 2 robots, but he knows that there are 2 cells **(1, 1)** and **(1, M)** that robots always can stand at. Therefore, he assumes that the first robot is at cell **(1, 1)** and the other is at cell **(1, M)**. Chef wants you to help him to find the minimum number of moves that his two robots needed to be at the same cell and promises to give you a gift if he wins the competition.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

- The first line of each test case contains **4** space-separated integers **N M K1 K2** denoting the number of rows and columns in the table and the movable ranges of the first and second robot of Chef.
- The next **N** lines, each line contains **M** space-separated numbers either 0 or **1** denoting whether the robots can move to this cell or not (0 means robots can move to this cell, **1** otherwise). It makes sure that values in cell **(1, 1)** and cell **(1, M)** are 0.

### Output

For each test case, output a single line containing the minimum number of moves that Chef’s 2 robots needed to be at the same cell. If they can not be at the same cell, print **-1**.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N, M** ≤ **100**
- 0 ≤ **K1, K2** ≤ **10**

###  Subtasks 

 **Subtask #1 : (25 points)**

- **K1 = K2 = 1**

 **Subtask # 2 : (75 points)**

Original Constraints 
### Example

<pre><b>Input:</b>
2
4 4 1 1
0 1 1 0
0 1 1 0
0 1 1 0
0 0 0 0
4 4 1 1
0 1 1 0
0 1 1 0
0 1 1 0
1 0 0 1

<b>Output:</b>
5
-1
</pre>
### Explanation

**Example case 1.** Robot 1 can move (1, 1) -&gt; (2, 1) -&gt; (3, 1) -&gt; (4, 1) -&gt; (4, 2) -&gt; (4, 3), and robot 2 can move (1, 4) -&gt; (2, 4) -&gt; (3, 4) -&gt; (4, 4) -&gt; (4, 3) -&gt; (4, 3), they meet at cell (4, 3) after 5 moves.

**Example case 2.** Because the movable range of both robots is 1, robot 1 can not move from (3, 1) to (4, 2), and robot 2 can not move from (3, 4) to (4, 3. Hence, they can not meet each other.
