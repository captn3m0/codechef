---
category_name: medium
problem_code: WW2
problem_name: 'World War 2'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: darkshadows
problem_tester: null
date_added: 19-08-2014
tags:
    - cook50
    - darkshadows
    - exponentiation
    - medium
editorial_url: 'http://discuss.codechef.com/problems/WW2'
time:
    view_start_date: 1411324200
    submit_start_date: 1411324200
    visible_start_date: 1411324200
    end_date: 1735669800
    current: 1493557957
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [English](http://www.codechef.com/download/translated/COOK50/english/WW2.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/COOK50/mandarin/WW2.pdf) and [Russian](http://www.codechef.com/download/translated/COOK50/russian/WW2.pdf) as well.

_**Richard Winters: We're not lost, Private... we're in Normandy.**_

![](//www.codechef.com/download/COOK50/ww2.jpg)

In WW2, allies have placed their mines on the ground which can be considered as a gird of size **N**\***M**. Rows are numbered by integers from **1** to **N** and columns are numbered by integers from **1** to **M**. Each cell **(i,j)** has a mine in it if **(i+j)** is divisible by **2**. All the other cells are empty.


Two cells are neighbors if they share a boundary or a corner. Your aim is to move from the first row to the last row using some special rules that the automatic mine placing system follows. The mines won't blow if the following rules are followed:
/>/>/>

- If your current row number is odd, from a 'mined' cell(ie. cell having a mine in it) you can move only to a neighboring 'mined' cells in the next row, and similarly, from a 'not mined'(ie. an empty cell) cell you can only move to a neighboring 'not mined' cell in the next row.

/>

- If your current row number is even, you can move to any neighboring cell in the next row, irrespective of the mining.


/>

You have to find the number of ways to reach row number **N** starting from row number **1**, modulo **109+7**. Two ways are different, if there is at least one different cell on the paths.

### Input

First line contains **T**, the number of testcases. Each testcase consists of **N** and **M** in one line.

### Output

For each testcase, print the required answer in one line.

### Constraints

14. **1** ≤ **T** ≤ **10**
15. **1** ≤ **N** ≤ **109**
16. **1** ≤ **M** ≤ **30**
### Example

<pre><b>Input:</b>
2
1 5
2 5

<b>Output:</b>
5
8
</pre>### Explanation

**Example case 1.**You can start at any of the 5 cells available.

**Example case 2.**

8 ways are:

(1,1) to (2,2)

(1,2) to (2,1)

(1,2) to (2,3)

(1,3) to (2,2)

(1,3) to (2,4)

(1,4) to (2,3)

(1,4) to (2,5)

(1,5) to (2,4)
/>/>/>/>/>/>/>/>/>/>/>
