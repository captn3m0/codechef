---
category_name: challenge
problem_code: MAXDIFFW
problem_name: 'Maximum Difference Walk'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
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
    - CLOJ
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: mugurelionut
problem_tester: mugurelionut
date_added: 11-08-2014
tags:
    - challenge
    - game
    - july15
    - mugurelionut
editorial_url: 'http://discuss.codechef.com/problems/MAXDIFFW'
time:
    view_start_date: 1436779800
    submit_start_date: 1436779800
    visible_start_date: 1436779800
    end_date: 1735669800
    current: 1525199668
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](/download/translated/JULY15/mandarin/MAXDIFFW.pdf) and [Russian](/download/translated/JULY15/russian/MAXDIFFW.pdf).

Chef has a complete directed graph composed of **N** vertices. The graph contains a directed edge from every vertex **i** (**1 ≤ i ≤ N**) to every other vertex **j** (**j != i**) .We will denote such an edge by **(i, j)** and we will say that **i** is its **starting vertex** and **j** is its **destination vertex**. Thus, there are **N(N-1)** directed edges overall. Each of the directed edges has a unique cost in the range **1, 2, ... N(N-1)**.

Chef wants to play a game on this graph and has chosen you as his opponent. The game consists of alternating moves and you make the first move. Your first move consists of choosing a directed edge from the graph. Let's assume that this edge is **(v1, v2)**. Then Chef will choose an edge **(v2, v3)**. After that, at his/her turn, each player (whether you or Chef) will choose a directed edge which **has not been chosen before** by any of the players and whose starting vertex is the destination vertex of the directed edge chosen in the previous move (by the opponent). Thus, at your second move, you will choose an edge **(v3, v4)**, then Chef will choose an edge **(v4, v5)**, and so on. The game will end when the player whose turn is next cannot make any move (meaning that the destination vertex of the last chosen edge has no unselected outgoing edges left). Note that depending on how the game is played, the final move may be made by either Chef or you. Also note that the sequence of selected edges denotes a walk in Chef's graph, which may visit the same vertex zero or more times, but cannot visit the same directed edge more than once.

At the end of the game your **game score GSyou** and Chef's **game score GSChef** will be computed. **GSyou** is defined as the sum of the costs of all the edges you selected during the game and **GSChef** is analogously defined as the sum of the costs of all the edges Chef selected during the game. Your final score **FS** for the game is defined as the difference **GSyou - GSChef** (note that **FS** could be zero or negative as well).

Chef implemented his strategy in the interactive judge for this problem. However, this problem seems very complex to Chef, so he could only implement one of the two **basic** strategies described below:

1. Strategy **MAX**: Let's assume that the last edge you selected is **(a, b)** and it is now Chef's turn to move. Chef will select the non-selected edge **(b, c)** having **maximum cost** among all the possible edges he can select (if any).
2. Strategy **RANDOM**: Let's assume that the last edge you selected is **(a, b)** and it is now Chef's turn to move. Among all the non-selected edges **(b, c)**, Chef will select one uniformly at random.
 
Your task is to write a program which plays the game against Chef (i.e. against the interactive judge). Your program will have perfect information about the graph before making the first move, but will not know Chef's strategy before-hand. Once you start playing, though, you may be able to guess Chef's strategy from the moves he makes.

### Input

The first line contains the number **N**, representing the number of vertices in the graph. Then **N** lines describing the graph follow. The **ith** of these lines contains **N** integers representing the costs of the directed edges having **i** as their starting vertex. The **jth** of these **N** numbers represents the cost **C(i, j)** of the directed edge **(i, j)**. **C(i, i)** will be 0 for all the vertices **i**.

### Interaction with the judge

After reading the information describing the graph you will start interacting with the judge. Whenever it is your turn you will print a line containing two space-separated integers **a** and **b**, meaning that you selected the edge **(a, b)**. Whenever it is Chef's turn you will read from the standard input two integers **c** and **d**, meaning that Chef selected the edge **(c, d)**. Remember that after every line you print you need to **flush** the output.

### Test case generation

There are **20** test cases. Overall there are only **10** different graphs, but for each graph there is a test case for each of the **2** strategies that Chef implemented (thus, the number of test cases is **10\*2 = 20**). For each test case Chef will use only one of the 2 strategies (i.e., he will not change strategies during the game) - the strategy that Chef uses for each test case is actually predefined, but this information is not available to you at the beginning of the game.

All the **10** graphs have **N = 50** and the cost of each directed edge is chosen uniformly at random from the range **1...N(N-1)** (with the constraint that all the edge costs are different).

### Scoring

Your score for each test case will be the value **FS**. If **FS ≤ 0**, then you will get **Wrong answer** - this means that you need to obtain a game score larger than Chef's on every test case. It is guaranteed that this is possible on all the official test cases. Your overall score will be the average score on all the test cases.

During the contest, your score is computed on only the first 4 test cases (they correspond to 2 different graphs and each of the 2 strategies for each graph). The score for the other 16 test cases is considered 0 during the contest (but your program is evaluated on all the test cases and you will only get **Correct answer** if you correctly solve all the 20 test cases, i.e., if **FS > 0** on all the test cases). After the contest, your program will be re-evaluated on all the test cases and the correct score for each test case will be considered.

### Example

 ```
<b>Input:</b>
3
0 1 2
3 0 4
5 6 0

2 3
1 3
2 1

<b>Output:</b>
1 2
3 1
3 2

<pre>### Explanation

The example test case describes a graph with **N = 3** vertices. The Output section describes your moves, while the Input section contains Chef's moves using strategy **MAX** (after the description of the graph). The interaction is as follows. First, you choose the edge (1,2) (with cost 1). Then, Chef chooses the maximum outgoing edge from 2: edge (2,3) (with cost 4). Then you choose the edge (3,1) (with cost 5). Then, Chef chooses the only remaining outgoing edge from 1: edge (1,3) (with cost 2). Then you choose the edge (3,2) (with cost 6). Then, Chef chooses the only remaining outgoing edge from 2: edge (2,1) (with cost 3). At your turn, you cannot make any moves anymore, so the game ends. GSyou is equal to 1+5+6 = 12. GSChef is equal to 4+2+3 = 9. The score for this test is 12-9 = 3.
