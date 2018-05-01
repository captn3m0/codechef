---
category_name: hard
problem_code: FURGRAPH
problem_name: 'Mario and Luigi'
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: furko
problem_tester: xcwgf666
date_added: 14-12-2015
tags:
    - april16
    - furko
    - graphs
    - hard
    - segment
    - treaps
editorial_url: 'http://discuss.codechef.com/problems/FURGRAPH'
time:
    view_start_date: 1460374200
    submit_start_date: 1460374200
    visible_start_date: 1460374200
    end_date: 1735669800
    current: 1493556711
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL16/mandarin/FURGRAPH.pdf), [Russian](http://www.codechef.com/download/translated/APRIL16/russian/FURGRAPH.pdf) and [Vietnamese](http://www.codechef.com/download/translated/APRIL16/vietnamese/FURGRAPH.pdf) as well.

 Mario and Luigi are very lazy guys. These are not the guys from some game, these are the ones playing games all the time. Recently, they bought a new game named "Graph Vertices chooser".

The rules of this game are pretty simple. It's a two player game with each player taking alternating turns starting with Mario. You are given a weighed graph. All the vertices are initially unmarked. In each turn, a player chooses an unmarked vertex and mark it to red or black color (Mario marks red whereas Luigi marks black). The game ends when there is no any unmarked vertex left. After the end of the game, Mario's score will be weight of all the edges in graph such that both the end points of the edge are colored red. Similarly, score of Luigi is sum of weight of edges with both end points being black.

Mario would like to maximize difference between his and Luigi points, while Luigi would like to minimize the difference between Mario's and his score. Both player optimally.

Now, you are the one who decided to be the coach of both the players. You want to create many graphs for Mario and Luigi to train. For that, you decided to take a graph **H** of **N** vertices. Initially, there is no edge in graph **H**. One by one, you will add an edge in the graph **H** and ask the both the players to play on the newly created graph. You will add **M** such edges. For each of the **M** graphs, you have to tell the difference between points of Mario and Luigi at the end of the game, when they play the game on that graph. Note that self loops and multi-edges are allowed to exist.

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

The first line of each test case contains two integers **N** and **M** denoting number of vertexes and number of edges to be added by the coach.

Each of the next **M** lines contains description of each edge **u**, **v**, **c**, denoting two vertexes and cost of edge.

### Output

For each test case, output **M** lines containing the difference between Mario's and Luigi's points after adding the **i-th** edge, for each **i**.

You should add edges one by one (with same order as they follows in input), and every time output the difference between points of Mario and Luigi at the end of each game.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N, M** ≤ **105**
- **1** ≤ **u, v** ≤ **N**
- **1** ≤ **c** ≤ 109
- Self loops and multiple edges are allowed.

### Subtasks

- **Subtask 1** (10 points): **1** ≤ **N** ≤ **10**, **1** ≤ **M** ≤ **100**
- **Subtask 2** (40 points): **1** ≤ **N, M** ≤ **2000**
- **Subtask 3** (50 points): original constraints

### Example

<pre><b>Input:</b>
1
5 4
1 2 1
1 3 1
1 4 1
1 5 1

<b>Output:</b>
0
1
1
2
</pre>