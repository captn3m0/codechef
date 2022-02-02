---
category_name: challenge
problem_code: NSUDOKU
problem_name: 'Sudoku Solver'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: admin
problem_tester: null
date_added: 11-08-2009
tags:
    - admin
time:
    view_start_date: 1251196670
    submit_start_date: 1251196670
    visible_start_date: 1251196670
    end_date: 1735669800
    current: 1528985566
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Quoting [ Wikipedia ](http://en.wikipedia.org/wiki/Sudoku) : "Sudoku is a logic-based, combinatorial number-placement puzzle. The objective is to fill a 9×9 grid so that each column, each row, and each of the nine 3×3 boxes (also called blocks or regions) contains the digits from 1 to 9 only one time each. The puzzle setter provides a partially completed grid." The rules for an N2 X N2 sudoku are as follows :

- The board is consists of N2 rows and N2 columns.
- Numbers between 1 and N2(inclusive) are to be filled in each row such that :
- All numbers in each row are distinct.
- All numbers in each column are distinct.
- All numbers in the sub-matrix having rows from (i\*N + 1) to(i + 1)\*N, and columns from (j\*N + 1) to (j + 1)\*N both inclusive, should be distinct. 0 &lt;= i,j &lt;= N-1. Rows and columns are 1 indexed. Each such sub-matrix is called a "box" or "region".


For this problem, you are required to solve a general N2X N2 sudoku puzzle. Given a partially filled sudoku board, you have to fill it in as "perfect" a manner as possible. ### Input : 

The first line contains N,K. The following K lines contain 3 numbers: x, y and d. 1 &lt;= x,y,d &lt;= N^2. This means that a number d is present on the board at position (x,y) 2 &lt;= N &lt;= 30 0 &lt;= K &lt;= N4At most 50% of the board will be covered at the start. All positions (x,y) in the input will be unique.

### Output :

The output consists of N2 rows having N2 numbers each. Each number should be between 1 and N2 (inclusive) and separated by a space. If the initial grid has a number d at position (x,y), then even the output should have the number d at position (x,y).

### Scoring :

- For each row and every number K in the range 1 to N2 that is missing from the row, incurs a penalty of 1.
- For each column and every number K in the range 1 to N2 that is missing from the column, incurs a penalty of 1.
- Similary, for each box and every number K in the range 1 to N2 that is missing from the box, incurs a penalty of 1.

A box (as explained above) is a N X N square and the grid can be divided into N2 such non-overlapping boxes. ### Example :

### Input:

<pre>
2 4
1 2 1
2 4 4
3 3 1
4 1 3
</pre>
### Output:

<pre>
2 1 3 4
1 2 4 4
3 4 1 2
3 2 4 1
</pre>
### Penalty:

 (0 + 1 + 0 + 0) + (1 + 1 + 1 + 1) + (2 + 2 + 1 + 1) = 11
