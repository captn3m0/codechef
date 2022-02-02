---
category_name: challenge
problem_code: ALICGARD
problem_name: 'Alice and her garden'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 10-02-2017
tags:
    - admin2
time:
    view_start_date: 1487496600
    submit_start_date: 1487496600
    visible_start_date: 1487496600
    end_date: 1735669800
    current: 1525454415
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Alice loves nature a lot. She owns her own large beautiful garden. Her garden is very neatly organized in a square shape of **n × n** cells. The cell at **i**-th row and **j**-th column is denoted by cell **(i, j)**. At each cell, she has a small portion for growing a plant of flowers. Also, she knows very well the number of flowers that will grow on a plant at a particular cell. In particular, this information is given you by two dimensional array **flowers**, where **flowersi, j**, which denotes the number of flowers that grow on the plant at the **(i, j)**-th cell. If you pluck flowers of a plant, they will regrow after **regrowi, j** hours.

Alice wants to wander in her garden a lot, and to collect as many flowers as possible. She starts her journey from cell **(x, y)**. She has to make a move at the end of each hour. In that single hour, she will pluck the flowers at the plant at her cell if the flowers are grown on the plant. At the end of the hour, she can move to adjacent cell of the current cell. Two cells are said to be adjacent to each other if they share an edge or corner with each other, i.e. in general a cell can have at most 8 adjacent cells. She can also decide to stay at the same cell too.

There is a limit on number of times that she can visit a particular cell, as the flower plants are very sensitive to touch by humans. This limit is provided you by a two dimensional array **limit**, where **limiti, j** denotes the maximum number of times she can be at **(i, j)**-th cell during her entire journey. Note that if Alice decides to stay on the same cell, then this will also be counted towards visiting a particular cell. You are not allowed to visit **(i, j)**-th cell more than **limiti, j** times.

Her father manages this large garden. Sometimes he feels the need of protecting some plants from the pollen of other flowers. For this, he can choose a sub-matrix of plants (rectangular section/sub-matrix of cells) and decide to build a fence around them. She is not allowed to cross the fence without paying a penalty. With each crossing of fence, she has to pay a penalty of **penalty** Rs.

The information about the fences will be provided you as follows. There are **F** fences of rectangular shape, which will be denoted by coordinates of its top left and bottom right coordinates. Each pair of fences is disjoint (more than this the fences don't even touch other, i.e. no two cells of different fences are adjacent to each other). The generation algorithm of the fences is provided in the next sections.

Alice wants to maximize her profit by selling the flowers she can collect during her journey. Cost of each of the fruit is fixed at 1 Rs. You will be playing this game on the behalf of Alice. Can you please help her in achieving that?

You are allowed to make as many moves as you want respecting the conditions on the limit for each of the cells. If at some point, you decide to exit the game, you can output "EXIT" to stop the game.

So, in summary, you can make any of the below given two moves. From current cell **(x, y)**, your each move can be one of the following types.

1. **EXIT**: After this move, no further moves are allowed. Your final score will be your score achieved till now.
2. **MOVE **X, Y****: It will mean that Alice is moving from cell **(x, y)** to cell adjacent cell **(X, Y)**, or she can decide to stay at the same cell **(x, y)** too.

Possible reasons for your program getting a WA verdict:

- You visit a cell more than the corresponding limit.
- In **MOVE** move, **(X, Y)** is not valid, i.e. it is neither adjacent to **(x, y)**, nor it is equal to **(x, y)**. The cell **(X, Y)** will be invalid if it is outside the cells of garden.
- You don't make a EXIT move at the end.

### Input

First line of the input will contain four space separated integers **n, F, x, y, penalty**, where **n** denotes the height/width of the garden, **F** denotes number of fences, **x, y** denotes the **(x, y)**-th cell of the garden where Alice starts her journey, **penalty** denotes the penalty for crossing the fence.

Each of the next **n** lines, each line contains **n** space separated integers. The **j**-th integer in the **i**-th of the line will denote the value of **flowersi, j**.

Each of the next **n** lines, each line contains **n** space separated integers. The **j**-th integer in the **i**-th of the line will denote the value of **limiti, j**.

Each of the next **n** lines, each line contains **n** space separated integers. The **j**-th integer in the **i**-th of the line will denote the value of **regrowi, j**.

Each of the next **F** lines, each line contains **4** space separated integers denoting **x1i**, **y1i**, **x2i**, **y2i**, denoting the top left coordinates and bottom right coordinates of the region enclosed by the **i**-th fence.

### Example Input &amp; Output

<pre>
<b>Input</b>
2 1 1 1 1
1 2
1 4
2 2
2 2
1 2
2 3
2 2 2 2

<b>Output</b>
MOVE 1 2
MOVE 1 1
MOVE 1 2
MOVE 2 2
MOVE 2 1
MOVE 2 2
EXIT
</pre>
### Explanation

The garden is of dimensions **2 × 2**. Alice can visit each cell at max 2 times. She starts the journey from cell **(1, 1)**.

Initially, she will pluck the 1 flower at the cell **(1, 1)**. After that in the first move, she moves to cell **(1, 2)** and collects **2** flowers. After that, she moves cell **(1, 1)** back, and collects 1 more flower. After that she goes back to cell **(1, 2)** again collecting another **2** flowers. Till now, she has collected 6 flowers.

After this she decided to enter into the fence by moving to cell **(2, 2)**. She has to pay a penalty of **1** Rs for it. She however plucks **4** flowers at this cell. After that she goes to cell **(2, 1)**. For making this move, she has to again pay a penalty of **1** Rs. She gets the 1 flower at cell **(2, 1)** too. After this, she moves to cell **(2, 2)** by paying a penalty of **1** Rs. But this time she won't be able to gain any flower as the flowers have not regrown at this cell yet. After this, she exists the game.

You can see that she collected total 11 flowers and paid a penalty of 3 Rs. So, she got a gain of **8** Rs.

Note this answer may not be optimal. There are ways in which she can get a better score, though.

### Constraints and test generation

#### Generation of fence:

Let **W = sqrt(n)**. We will divide the rectangle into **W \* W** regions symmetrically (It can be thought as of drawing **W - 1** equally spaced horizontal and vertical lines.). In each of these regions created, we will be building a fence whose height and width will be uniformly randomly between **1, W - 1**.

#### Type 1

- **n = 100**
- **1 ≤ x, y ≤ n**, generated uniformly randomly
- **penalty = 25 \* 50000**
- **1 ≤ flowersi, j ≤ 105**, generated uniformly randomly
- **5 ≤ limiti, j ≤ 15** , generated uniformly randomly
- **1 ≤ regrowi, j ≤ 10**, generated uniformly randomly

#### Type 2

- **n = 100**
- **1 ≤ x, y ≤ n**, generated uniformly randomly
- **penalty = 15 \* 50000**
- **1 ≤ flowersi, j ≤ 105**, generated uniformly randomly
- **5 ≤ limiti, j ≤ 15** , generated uniformly randomly
- **1 ≤ regrowi, j ≤ 100**, generated uniformly randomly

#### Type 3

- **n = 196**
- **1 ≤ x, y ≤ n**, generated uniformly randomly
- **penalty = 50 \* 50000**
- **1 ≤ flowersi, j ≤ 105**, generated uniformly randomly
- **5 ≤ limiti, j ≤ 15** , generated uniformly randomly
- **1 ≤ regrowi, j ≤ 20**, generated uniformly randomly

#### Type 4

- **n = 196**
- **1 ≤ x, y ≤ n**, generated uniformly randomly
- **penalty = 40 \* 50000**
- **1 ≤ flowersi, j ≤ 105**, generated uniformly randomly
- **5 ≤ limiti, j ≤ 15** , generated uniformly randomly
- **1 ≤ regrowi, j ≤ 200**, generated uniformly randomly

### Score

There will be total 20 test files, 5 for each of the types of the tests described above. During the contest your solution will be judged on all the test files, but the score shown will only be for 20% of the test files (i.e. 1 of each test type). However, if you solution gets non-AC verdict on any of the test files, you will get zero score and will be notified about it with the corresponding non-AC verdict for the entire problem. Your score for each test file will be total number of flowers collected divided by **n \* n**. For example, the score for sample example will be 8/(2 \* 2) = 2. The overall score of the problem will be sum of scores of each of the test files. Again to remind, the score shown during the contest will be the score only on the 20% of the test files.
