---
category_name: easy
problem_code: MAXIEDGE
problem_name: 'Maximize Grid Score'
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
    - 'CPP 6.3'
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
    - 'PYTH 3.5'
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
problem_author: admin2
problem_tester: null
date_added: 28-06-2017
tags:
    - admin2
time:
    view_start_date: 1498908900
    submit_start_date: 1498908900
    visible_start_date: 1498908900
    end_date: 1735669800
    current: 1514816310
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKFL17/mandarin/MAXIEDGE.pdf), [Russian](http://www.codechef.com/download/translated/SNCKFL17/russian/MAXIEDGE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKFL17/vietnamese/MAXIEDGE.pdf) as well.

You are given a 2 × **N** grid (2 rows, **N** columns) consisting of lower case English characters (i.e. from 'a' to 'z'). Two cells are said to be adjacent if they share a side with each other.

The *score* of such a grid is defined to be the number of unordered pairs of adjacent cells, which have the same character in them.

You want to rearrange the letters of the grid in such a way that the score is maximized and print the new rearranged grid. If there are multiple solutions, you can print any.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follow.

The first line of each test case contains an integer **N**, denoting the number of columns in the grid.

Each of the next two lines contains a string consisting of **N** lowercase English characters, describing the first and the second rows of the grid respectively.

### Output

For each test case, output two lines, each containing a string of length **N**. These should describe the first and the second rows of the rearranged grid.

### Constraints

- 1 ≤ **T**, **N** ≤ 500

### Example

<pre>
<b>Input</b>
2
2
ab
ba
4
aabb
bbcc

<b>Output</b>
aa
bb
bbac
bbac
</pre>
### Explanation

Let (r, c) denote the cell on the r-th row and c-th column.

**Example case 1**: The score of the new grid is 2. The two unordered pairs of cells are {(1, 1), (1, 2)} (these two cells share a side, and have the same letter 'a' in them) and {(2, 1), (2, 2)} (these two cells share a side, and have the same letter 'b' in them). This is the maximum score that we can obtain.
