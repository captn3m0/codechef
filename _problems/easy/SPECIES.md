---
category_name: easy
problem_code: SPECIES
problem_name: 'Bear and Species'
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
problem_author: errichto
problem_tester: kingofnumbers
date_added: 24-03-2017
tags:
    - dfs
    - errichto
    - flood_fill_algorithm
    - graph
    - ltime46
    - simple
editorial_url: 'https://discuss.codechef.com/problems/SPECIES'
time:
    view_start_date: 1490461200
    submit_start_date: 1490461200
    visible_start_date: 1490461200
    end_date: 1735669800
    current: 1493558188
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME46/mandarin/SPECIES.pdf), [Russian](http://www.codechef.com/download/translated/LTIME46/russian/SPECIES.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME46/vietnamese/SPECIES.pdf) as well.

Bearland can be represented as a square grid that consists of **N** rows and **N** columns. Two cells are called adjacent if they share a side. In the input, each cell is described by one character:

- '.' is an empty cell.
- 'B', 'G' or 'P' is a cell inhabited by bears of one species — brown, grizzly or polar bears respectively.
- '?' is a cell inhabited by bears of one species but you don't know which one. Note that this cell can't be empty.

Grizzly bears are the most aggressive species. If a cell is inhabited by grizzly bears, all adjacent cells should be empty, because otherwise there would be fights between bears.

Brown and polar bears are a bit calmer. All brown bears are fine with other brown bears in adjacent cells, but they would fight with bears of any other species. Similarly, polar bears would fight with bears of any species other than polar bears.

Let X denote the number of question marks. Since each question mark represents one of the three species, there are 3X ways to replace them with characters 'B', 'G' and 'P' (denoting the species that live in that cell). Find the number of such ways that there are no fights between bears. Print the answer modulo (109+7).

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains an integer **N** denoting the size of the grid.

The following **N** lines describe the grid. Each of those lines contains a string of length **N**. Each character is one of five: '.', '?', 'B', 'G', 'P'.

### Output

For each test case, output a single line containing one integer — the number of ways to replace question marks to avoid fights in Bearland, modulo (109+7).

### Constraints

- 1 ≤ **T** ≤ 50
- 2 ≤ **N** ≤ 50

### Subtasks

- Subtask #1 (30 points): 2 ≤ **N** ≤ 3
- Subtask #2 (30 points): Each character in the grid will be either '.' or '?'.
- Subtask #3 (40 points): Original constraints.

### Example

<pre><b>Input:</b>
</pre>6
3
..?
.?B
G..
2
GG
..
3
?..
.??
??.
3
??P
???
??B
7
?.?.?.?
.?.?.?.
?.?.?.?
.?.?.?.
?.?.?.?
.?.?.?.
?.?.?.?
2
PP
PP
<pre>
<b>Output:</b>
1
0
6
0
288603514
1
</pre>### Explanation

**Test case 1.** We are given the grid of size 3 × 3. One of the already fixed cells is inhabited by brown bears. They would fight with bears of any species other than brown bears, so adjacent cells with question marks must by inhabited by brown bears as well. Hence, there is only 1 way to replace question marks (both of them must be replaced by 'B').

**Test case 2.** In the given grid, there are two adjacent cells both inhabited by grizzly bears. They will fight with each other, so the answer is 0 — it's impossible to replace question marks so that there would be no fights (it doesn't matter that there are no question marks at all).

**Test case 3.** There are 6 ways:

<pre>B.. B.. G.. G.. P.. P..
.BB .PP .BB .PP .BB .PP
BB. PP. BB. PP. BB. PP.
</pre>**Test case 4.** No matter how we replace question marks, bears in some two adjacent cells will start a fight. The answer is 0.
