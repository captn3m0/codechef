---
category_name: school
problem_code: OMWG
problem_name: 'One more weird game'
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
problem_author: pavel1996
problem_tester: karanaggarwal
date_added: 11-06-2016
tags:
    - basic
    - ltime37
    - pavel1996
    - simple
    - trial
editorial_url: 'http://discuss.codechef.com/problems/OMWG'
time:
    view_start_date: 1466874000
    submit_start_date: 1466874000
    visible_start_date: 1466874000
    end_date: 1735669800
    current: 1492506735
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME37/mandarin/OMWG.pdf), [Russian](http://www.codechef.com/download/translated/LTIME37/russian/OMWG.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME37/vietnamese/OMWG.pdf) as well.

Leha is playing a very interesting game. The game will be played on a rectangular grid consisting of **N** rows and **M** columns. Initially all the cells of the grid are uncolored.

Leha's initial score is zero. At each turn, he chooses some cell that is yet not colored, and colors that cell. The score obtained in this step will be number of neighboring colored cells of the cell that Leha colored in this step. Two cells are neighbors of each other if they share a side between them. The game will end when all the cells are colored. Finally, total score obtained at the end of the game will sum of score obtained in each turn.

Leha wants to know what maximum score he can get? Can you please help him in finding this out?

### Input

The first line contains a single integer **T** denoting the number of test cases. **T** test cases follow.

Each of the following **T** lines contains two space-separated integers **N, M** denoting the dimensions of the grid.

### Output

For each test case, output a single line containing an integer corresponding to the maximal possible score Leha can obtain.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **N, M** ≤ **1 000**

### Subtasks

- **Subtask #1\[30 points\]**: **1** ≤ **N, M** ≤ **3**
- **Subtask #2\[70 points\]**: **1** ≤ **N, M** ≤ **1 000**

### Example

<pre><b>Input:</b>
1
2 2

<b>Output:</b>
4

</pre>### Explanation
Leha can obtain total score 4 in the following way.

- In the first step, he colors down left cell, all the neighboring cells of this cell are uncolored. So, it adds  to total score.
- In second step, he can color upper right cell, it also adds total  to the score.
- In third step, he can color top left cell. There are two neighboring cell of this cell, both of which are colored. So, this add **2** to the score.
- In the last step, he can choose the remaining down right cell. There are two neighboring cell of this cell, both of which are colored. So, this also add **2** to the score.

Leha can't obtain a score more than 4. Hence 4 is the answer.
