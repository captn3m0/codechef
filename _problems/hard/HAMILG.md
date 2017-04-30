---
category_name: hard
problem_code: HAMILG
problem_name: 'A game on a graph'
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
max_timelimit: '2 - 5'
source_sizelimit: '50000'
problem_author: xellos0
problem_tester: mugurelionut
date_added: 11-02-2015
tags:
    - game
    - graphs
    - hard
    - july15
    - matching
    - xellos0
editorial_url: 'http://discuss.codechef.com/problems/HAMILG'
time:
    view_start_date: 1436779800
    submit_start_date: 1436779800
    visible_start_date: 1436779800
    end_date: 1735669800
    current: 1493556724
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](/download/translated/JULY15/mandarin/HAMILG.pdf) and [Russian](/download/translated/JULY15/russian/HAMILG.pdf).

Two players, Askar and Bob, play a game with a token on an undirected graph **G**. The game goes as follows:

- Askar chooses a starting vertex and places the token on this vertex.
- The players now alternate turns; Bob moves first.
- In his turn, each player has to move the token along exactly one edge to another vertex.
- It's not allowed to move the token to some vertex if it was on that vertex earlier during the game (including the starting vertex).
- The player who can't make a move loses.

A vertex v is called a winning vertex if Askar is able to win after choosing this v as the starting vertex. Assume that both players play optimally.

Given the graph **G**, determine how many winning vertices exist.

### Input

- The first line of the input contains an integer **T** - the number of test cases.
- The first line of each test case contains two integers **N** and **M**, denoting the number of vertices and the number of edges of **G**.
- The following **M** lines describe the edges of **G**. Each of these lines contains two integers **x** and **y**, denoting an edge between vertices **x** and **y**.

### Output

For each test case, output a single line containing the number of winning vertices.

### Constraints

- **1** ≤ **T** ≤ **100**
- **N-1** ≤ **M** ≤ **N(N-1)/2**
- **1** ≤ **x,y** ≤ **N**
- **x** ≠ **y**
- All unordered pairs **(x,y)** will be distinct
- The graph in each test case will be connected
- Sum of **M** over all test cases in a single file will never exceed **106**.

### Subtasks

_Subtask 1 (8 points)_: **1 ≤ N ≤ 18**

_Subtask 2 (19 points)_: **1 ≤ N ≤ 40**

_Subtask 3 (26 points)_: **1 ≤ N ≤ 200**

_Subtask 4 (47 points)_: **1 ≤ N ≤ 2000**

The time limit is 2 seconds for subtasks 1-3 and 5 seconds for subtask 4.

### Example

 ```
<b>Input:</b>
3
4 6
1 2
1 3
4 1
4 2
4 3
2 3
8 7
3 2
1 2
4 2
5 1
6 3
7 1
8 3
3 2
1 2
2 3

<b>Output:</b>
0
4
2

```
### Explanation

**Example case 1.** The graph is a complete graph with 4 vertices, so the game will always last 3 turns; in the 4th turn, Askar will have no way to move and lose.

**Example case 2.** If Askar places the token on vertex 7, Bob will have to move it to vertex 1 and Askar can then move it to vertex 5 and win. A similar strategy exists for vertices 5, 6 and 8.

**Example case 3.** If Askar places the token on vertex 1, Bob will have to move it to vertex 2 and Askar can then move it to vertex 3 and win. The case when Askar starts at vertex 3 is analogous. On the contrary, if Askar starts at vertex 2, then Bob can move the token to either vertex 1 or 3, and in both cases Askar can't make a move and loses.