---
category_name: easy
problem_code: MINIMAX
problem_name: Minimax
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: errichto
problem_tester: null
date_added: 19-06-2017
tags:
    - errichto
time:
    view_start_date: 1498908900
    submit_start_date: 1498908900
    visible_start_date: 1498908900
    end_date: 1735669800
    current: 1514816992
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKFL17/mandarin/MINIMAX.pdf), [Russian](http://www.codechef.com/download/translated/SNCKFL17/russian/MINIMAX.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKFL17/vietnamese/MINIMAX.pdf) as well.

Let's consider a square grid with **N** rows and **N** columns, both numbered 1 through **N**. Each cell contains one integer. Let ri denote the minimum value in the i-th row, and let Ci denote the maximum value in the i-th column. A grid is called _nice_ if and only if the following condition holds true:

max(r1, r2, ..., r**N**) = min(C1, C2, ..., C**N**)

Chef has a square grid and can change some of its elements (numbers in the cells). Find the minimum possible number of elements Chef should change, so that the new grid is nice.

An element can be changed to any integer.

### Input

The first line of the input contains an integer **N**, denoting the size of the grid.

The following **N** lines describe the grid. The i-th of those lines contains **N** integers, denoting the numbers in the i-th row.

### Output

Print one integer, denoting the minimum number of changes required to make the grid nice.

### Constraints

- 1 ≤ **N** ≤ 1000
- Each number in the initial grid is between 1 and 106, inclusive.

### Examples

<pre><b>Input1:</b>
3
10 20 30
20 10 30
10 5 35

<b>Output1:</b>
1


<b>Input2:</b>
3
10 20 10
20 10 5
30 30 35

<b>Output2:</b>
0


<b>Input3:</b>
4
1 1 3 4
5 1 1 8
9 10 1 1
1 14 15 1

<b>Output3:</b>
2

</pre>### Explanation
**Example #1.** In the first example, initially we have r1 = 10, r2 = 10 and r3 = 5. For columns, we have C1 = 20, C2 = 20 and C3 = 35.

max(r1, r2, r3) = 10 and min(C1, C2, C3) = 20, and so the given grid isn't nice. Chef can change the second number in the first row from 20 to 10, to get the following nice grid:

<pre>10 <b>10</b> 30
20 10 30
10 5 35
</pre>The answer is 1 because we must change at least 1 number.
**Example #2.** The provided grid is already nice, so the answer is 0.
