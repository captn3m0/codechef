---
category_name: easy
problem_code: GRID
problem_name: 'Sherlock and the Grid'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: darkshadows
problem_tester: null
date_added: 5-06-2014
tags:
    - cook50
    - darkshadows
    - dynamic
    - simple
editorial_url: 'http://discuss.codechef.com/problems/GRID'
time:
    view_start_date: 1411324200
    submit_start_date: 1411324200
    visible_start_date: 1411324200
    end_date: 1735669800
    current: 1493558152
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [English](http://www.codechef.com/download/translated/COOK50/english/GRID.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/COOK50/mandarin/GRID.pdf) and [Russian](http://www.codechef.com/download/translated/COOK50/russian/GRID.pdf) as well.

Sherlock is stuck. There is a **N X N** grid in which some cells are empty (denoted by ‘**.**’), while some cells have rocks in them (denoted by ‘**\#**’). Sherlock is on the South of the grid. He has to watch what is happening on the East of the grid. He can place a mirror at **45** degrees on an empty cell in the grid, so that he'll see what is happening on East side by reflection from the mirror.


But, if there's a rock in his line of sight, he won't be able to see what's happening on East side. For example, following image shows all possible cells in which he can place the mirror. />/>

![](//www.codechef.com/download/COOK50/grid.jpg)

You have to tell Sherlock in how many possible cells he can place the mirror and see what's happening on East side.

### Input

First line, **T**, the number of testcases. Each testcase will consist of **N** in one line. Next **N** lines each contain **N** characters.

### Output

For each testcase, print the number of possible options where mirror can be placed to see on the East side.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N** ≤ **1000**

### Example

<pre><b>Input:</b>
2
3
#..
#..
#..
3
#.#
#.#
#.#

<b>Output:</b>
6
0
</pre>### Explanation

**Example case 1.** All places where rock are not there are valid positions.

**Example case 2.** No valid positions./>



**Note:** Large input data. Use fast input/output.

Time limit for PYTH and PYTH 3.1.2 has been set 8s./>/>
