---
category_name: hard
problem_code: GERALD08
problem_name: 'Chef and Tree Game'
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
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: gerald
problem_tester: white_king
date_added: 13-03-2014
tags:
    - april14
    - gerald
    - hackenbush
    - medium
editorial_url: 'http://discuss.codechef.com/problems/GERALD08'
time:
    view_start_date: 1397468591
    submit_start_date: 1397468591
    visible_start_date: 1397467741
    end_date: 1735669800
    current: 1493556718
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL14/mandarin/GERALD08.pdf) and [Russian](http://www.codechef.com/download/translated/APRIL14/russian/GERALD08.pdf).

Chef has a rooted tree **G**, consisting of **N** vertices. Each edge of the tree has a color black or white.

Once Chef's friend Ksen offered Chef to play a game on the tree **G**. The game has very simple rule:

- The players make moves in the game alternately.
- On his move Chef deletes a single undeleted black edge. On her move Ksen deletes a single undeleted white edge.
- When some edge has been deleted, all the edges that now aren't connected (directly or indirectly) to the root will be deleted too.
- One who cannot move lose the game.

Chef really likes the game. The only problem is that Ksen knows the game very well. So she always plays optimally. That's why Chef has decided to choose the order of moves. Help Chef: tell him who will win the game if he moves first, and also who will win the game if Ksen moves first. Consider that Chef plays optimally too.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each testcase contains a single integer **N**. Then **N - 1** lines follows. Each contains three integers **Ui**, **Vi**, **Ci**. These integers denotes the current edge of the tree: the first two numbers means the numbers of vertices connected by the edge, the last number denotes the color of the edge (zero means black, one means white). Consider all vertices of the tree **G** are numbered from **1** to **N**. The root has number **1**.

### Output

For each test case, output a single line containing two strings: the name of the winner if Chef moves first, and the name of the winner if Chef moves second.

### Constraints

- **1** ≤ **T** ≤ **1000**
- **1** ≤ **N** ≤ **100000**
- **1** ≤ **Ui**, **Vi** ≤ **N**
- 0 ≤ **Ci** ≤ **1**
- It's guaranteed that the sum of **N** values for all tests doesn't exceed 100000.

### Example

<pre><b>Input:</b>
5
1
2
1 2 0
2
1 2 1
3
1 2 0
1 3 1
3
1 2 0
2 3 1

<b>Output:</b>
Ksen Chef
Chef Chef
Ksen Ksen
Ksen Chef
Chef Chef
</pre>