---
category_name: easy
problem_code: RECTQUER
problem_name: 'Rectangular Queries'
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
problem_author: Rubanenko
problem_tester: gerald
date_added: 6-11-2013
tags:
    - Rubanenko
    - dec13
    - easy
    - prefix
editorial_url: 'http://discuss.codechef.com/problems/RECTQUER'
time:
    view_start_date: 1387186200
    submit_start_date: 1387186200
    visible_start_date: 1387186200
    end_date: 1735669800
    current: 1493558180
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC13/mandarin/RECTQUER.pdf) and [Russian](http://www.codechef.com/download/translated/DEC13/russian/RECTQUER.pdf).

This time Chef does not want to bother you with long story, so the problem description will be as short as possible. You are given a square matrix **A**, which has **N** rows and **N** columns. Chef wants you to answer following queries: given a rectangular submatrix with upper-left corner in (**X1**, **Y1**) and lower-right corner in (**X2**, **Y2**), and you are to count number of disctinct elements in this submarix, i.e count number of such distinct **Ai, j** that (**X1**  **≤ i ≤**  **X2**) and (**Y1**  **≤ j ≤**  **Y2**). \[You may assume that **i** is looping through the rows and **j** through columns\]

### Input

The first line of the input file will contain single integer **N**. Then **N** lines with **N** numbers in each follow - description of the matrix. The rows are indexed from top to bottom that is top row has index 1, and columns are indexed from left to right that is left column has index 1. There is a single integer **Q** that follows on the next line right after the matrix description - number of Chef's queries. Then **Q** queries follow. Each query is described by four integers - **X1, Y1, X2**, and **Y2**.

### Output

Output **Q** integers, each in a separate line - answers for the queries.

### Constraints

- 1≤**N**≤300
- 1≤**Q**≤105
- 1≤**Ai, j**≤10
- 1≤**X1**≤**X2**≤**N**
- 1≤**Y1**≤**Y2**≤**N**

### Example

```
<b>Input:</b>
3
1 2 3
3 2 1
5 6 3
3
1 1 2 3
2 2 2 2
1 1 3 3 

<b>Output:</b>
3
1
5

```