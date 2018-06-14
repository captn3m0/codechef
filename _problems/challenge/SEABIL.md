---
category_name: challenge
problem_code: SEABIL
problem_name: '(CH) Serejs and Billiards'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: null
date_added: 7-10-2016
tags:
    - april17
    - challenge
    - sereja
time:
    view_start_date: 1492421400
    submit_start_date: 1492421400
    visible_start_date: 1492421400
    end_date: 1735669800
    current: 1525199670
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL17/mandarin/SEABIL.pdf), [Russian](http://www.codechef.com/download/translated/APRIL17/russian/SEABIL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/APRIL17/vietnamese/SEABIL.pdf) as well.

Sereja likes to play billiards. Here is simplified version of it. Initially there is a table of size **N\*N**. The table is divided by **N+1** horizontal and **N+1** vertical lines. The lines are numbered from 0 to **N** from left to the right and in the same way from 0 in the top to **N** in the bottom. The intersection of the horizontal Line **i** and the vertical Line **j** is a point which will be denoted by **(i,j)**. The points **(0,0), (0, N), (N, 0), (N, N)** are the corners of the table. Initially, there are **M** balls on the table, at the points **(Xi, Yi) (0 ≤ Xi, Yi ≤ N)**. Each ball has its cost **Zi**. In one move, Sereja can hit any one ball by giving it a velocity **(Vx, Vy)**, (**Vx** and **Vy** should belong to the set {-1, 0, 1}) and a starting energy **E (1 ≤ E ≤ 4 \* N)**. After this there will be **E** actions: - At the beginning of each action, the ball will be moving from the old point **(X, Y)** to a new point **(X', Y')**. We initially set **X' = X+Vx** and **Y' = Y+Vy**.
- But if the new point becomes equal to **(-1, -1)** or **(-1, N + 1)** or **(N + 1, -1)** or **(N + 1, N + 1)** then it is counted as the ball being pocketed, and hence the cost of the ball is added to the total score. The ball is then removed from the table, and no more actions are produced. This move ends.
- If **X'** becomes equal to **-1**, we replace **X'** by **1** and **Vx** by **1**.
- If **X'** becomes equal to **N + 1**, we replace **X'** by **N-1** and **Vx** by **-1**.
- If **Y'** becomes equal to **-1**, we replace **Y'** by **1** and **Vy** by **1**.
- If **Y'** becomes equal to **N + 1**, we replace **Y'** by **N-1** and **Vy** by **-1**.
- If the new point already contains another ball we remove the old ball and the new ball will have a new cost which is the sum of both the balls. The process will be continued with the new ball, with whatever velocity it already had.

Sereja wants to make at most **4\*M** moves. Each move also decreases the total score by **1**. Your task is to play the game so as to maximize the total score. ### Input

- The first line of the input contains an integer **T** denoting the number of test cases.
- The first line of each test case contains two integers **N,M**.
- The next **M** lines of the test case contains three numbers **Xi, Yi, Zi** each.

### Output

- For each test case, the first line should be an integer **K** - the number of moves you want to make.
- The next **K** lines should contain five numbers **X, Y, Vx, Vy, E**. You should ensure that the point **(X, Y)** contains some ball at that moment. Otherwise, your solution will be marked as WA.

### Constraints

55. **1** ≤ **T** ≤ **10**
56. **1** ≤ **N** ≤ **100**
57. **1** ≤ **M** ≤ **1000**
58. 0 ≤  **Xi, Yi**  ≤ **N**
59. **-100** ≤  **Zi**  ≤ **100**
60. Initially, no two balls will be at the same point.
### Example

<pre><b>Input:</b>
3
3 3
1 1 2
2 2 2
3 0 2
100 1
99 99 15
100 2
60 70 0
90 15 -100

<b>Output:</b>
2
2 2 -1 -1 4
3 0 -1 1 4
1
99 99 1 1 50
0


</pre>### Explanation

**Test case 2.** The grid size is **N** = 100. To get points for the only ball, we should give it velocity (1, 1) and the starting energy at least 2, so it could reach the point (101, 101). The starting energy is 50 in the provided output, what is also allowed and will lead to the ball reaching the point (101, 101) after 2 units of time and giving us 15 points. But because we have made 1 move, the total score reduces by 1, and hence the final total score is 15 - 1 = 14.

**Test case 3.** There are two balls, both with non-positive score (cost). Please note that it's allowed to not make moves at all, as you can see in the provided output.

### Scoring

Your judge score for each test case will be calculated as **max(total\_score, 1)**, where **total\_score** is the total score described in the statement. If **S** is your total judge score over all the tests, and if **W** is the maximum total judge score among all participants, then your displayed score will be equal to **S/W**. ### Test generation

Each test will contain **T=10** and **N = 100**. **M** will be generated randomly in range \[500, 1000\]. All balls positions will be generated randomly. There will be four types of tests: - Each Zi is a random value in the range \[1, 3\]
- Each Zi is a random value in the range \[-3, 3\]
- Each Zi is a random value in the range \[1, 100\]
- Each Zi is a random value in the range \[-100, 100\]
