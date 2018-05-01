---
category_name: hard
problem_code: CLOWAY
problem_name: 'Future of draughts'
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
max_timelimit: '2 - 10'
source_sizelimit: '50000'
problem_author: kaizer
problem_tester: laycurse
date_added: 12-07-2015
tags:
    - algebra
    - aug15
    - fourier
    - graph
    - kaizer
    - linear
    - spectral
    - super
editorial_url: 'http://discuss.codechef.com/problems/CLOWAY'
time:
    view_start_date: 1439803800
    submit_start_date: 1439803800
    visible_start_date: 1439803800
    end_date: 1735669800
    current: 1493556662
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/AUG15/mandarin/CLOWAY.pdf) and [Russian](http://www.codechef.com/download/translated/AUG15/russian/CLOWAY.pdf).

**2367. The Earth.**  
The world we know doesn't exist anymore. All has been changed during the inevitable evolution, but only Chef retains his former self.

Peoples don’t play ordinary draughts we know, mankind has enhanced it. Present games are held on an undirected graph, instead of the board. Before a game starts, one player chooses a vertex of the graph and puts a checker (called the _game checker_) on it. Then the players take turns alternately. In a single turn, a player moves the game checker from its current vertex, say **v**, to some neighbour (see note) of **v**. The game goes on until one of the players surrenders. The player who moves last is considered as the winner. This game may seems to you confusing. Strange even, and imperfect, but don’t bother about it.

Chef would like to become the best in this game so he needs training. During training, Chef plays by himself. Being very tired, all of his moves are absolutely random as well as his choice for the initial position of the game checker. He has **T** game-graphs (indexed **1** to **T**), and a very tiresome trainer who forces him to train again and again. For the **i**th training session, the trainer gives 3 numbers to Chef: **Li**, **Ri**, and **Ki**. Chef has to carry out a few simultaneous games against himself on game-graphs indexed between **Li** and **Ri** (both included).

Specifically, after the trainer gives him such an order, for each game-graph in range **Li** … **Ri** Chef **randomly** sets initial position of the game checker. Further, for each of the following steps, he should choose a **random non-empty subset** of the set of allowed game-graphs. Then he **randomly** moves one checker in **all** of these chosen game-graphs. The whole training ends after finite number of steps if the set of current positions after last step is the same as the set of initial positions. Note that Chef must make at least one move during this training.

The trainer wants **Q** training sessions, as described above, and for each one of them Chef would like to know how many ways of his play lead to the whole training ending within **Ki** steps or less. Since the answer could be very large, print it modulo **1000000007**.

### Input

The first line of the input contains a single integer **T** denoting the number of graphs. The description of **T** graphs follows.
The first line of each graph description contains two integers **Nk**, **Mk** denoting the number of vertices and the number of edges in the **k**-th graph. Next **Mk** lines contain two space separated integers - 1-indexed indices of vertex pairs linked with an edge.
It is guaranteed that there are no multiple edges (two or more edges incident on the same two vertices) or loops (an edge connecting a vertex to itself).

After graph descriptions, a single line contains an integer **Q**, denoting the number of training sessions. Each of the next **Q** lines contain three space-separated integers, with the **i**th line containing the integers **Li**, **Ri**, **Ki**, respectively, describing the **i**th training session.

### Output

For each query, print a single integer - the number Chef would like to find out modulo **1000000007** (**109+7**).

### Constraints and Subtasks

- **1** ≤ **T**, **Nk** ≤ **50**
- 0 ≤ **Mk** ≤ **Nk×(Nk−1)/2**
- **1** ≤ **Q** ≤ **2×105**
- **1** ≤ **Li** ≤ **Ri** ≤ **T**
- **1** ≤ **Ki** ≤ **104**

**Subtask 1: (10 points)**

- **Li** = **Ri**
- **1** ≤ **Ki** ≤ **100**
- Time Limit is **2** seconds

**Subtask 2: (25 points)**

- **1** ≤ **Ki** ≤ **100**
- Time Limit is **2** seconds

**Subtask 3: (25 points)**

- **1** ≤ **Ki** ≤ **2×103**
- **1** ≤ **Nk** ≤ **15**
- Time Limit is **8** seconds

**Subtask 4: (40 points)**

- **1** ≤ **T** ≤ **20**
- Time Limit is **10** seconds

### Example

<pre><b>Input:</b>
1
3 3
1 2
2 3
1 3
3
1 1 1
1 1 3
1 1 4

<b>Output:</b>
0
12
30

<b>Input:</b>
2
3 2
1 2
2 3
2 1
1 2
3
1 1 6
1 2 2
1 2 10

<b>Output:</b>
28
22
915822
</pre>### Explanation

**Example case 1.**
Starts from: (ways of play with length in range \[1, 4\]) 
**1:**  (1,2,1), (1,3,1), (1,2,3,1), (1,3,2,1), (1,2,3,2,1), 
(1,3,2,3,1), (1,2,1,3,1),(1,3,1,2,1),(1,2,1,2,1),(1,3,1,3,1) 
**2, 3:**  similar to 1. 
So, the number of ways of play with length at most 3 equals **4×3** = **12**. 
And, the number of ways of play with length at most 4 equals to **10×3** = **30**.

**Example case 2.**
Starts from: (ways of play with length = 2)
 **(1,1):** ((1,1), (2,1), (1,1)), ((1,1), (1,2), (1,1)), ((1,1), (2,2), (1,1)) 
 **(2,1):** ((2,1), (1,1), (2,1)), ((2,1), (2,2), (2,1)), ((2,1), (3,1),(2,1)),
((2,1), (1,2),(2,1)),((2,1),(3,2),(2,1))
 **(3,1):** similar to (1,1) 
So, the according to symmetry of second graph number of ways equals to **(3×2+5)×2** = **22**.

### Note

In an undirected graph, a vertex **u** is called a neighbour of vertex **v**, if **u** and **v** are connected via an edge.
