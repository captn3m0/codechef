---
category_name: challenge
problem_code: FLOOD
problem_name: Flood
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
    - ERL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '1.48'
source_sizelimit: '50000'
problem_author: admin
problem_tester: friggstad
date_added: 19-03-2010
tags:
    - admin
    - april10
    - challenge
editorial_url: 'http://discuss.codechef.com/problems/FLOOD'
time:
    view_start_date: 1271170073
    submit_start_date: 1271170073
    visible_start_date: 1271170073
    end_date: 1735669800
    current: 1525454418
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Each year in the rainy season, the LCD province in Byteland is flooded with water. The province has the form of a rectangular land divded into unit cells of M lines and N columns. Some cells are flooded and some cells are not. Each flooded cell has a water depth level which is a positive integer.

Because of flood, the land is divided into several islands, each island consists of the cells that can move around one another but cannot move to cells in different islands. The people can move between two non flooded cells if these cells have at least one common point.

To improve the transportation quality during the flooding season, the LCD's goverment decides to raise some flooded cells to become non flooded cells so that after the process, the people are able to travel between any two non flooded cells.

To make a flooded cell whose water depth level is D become non flooded, the workers need to put in D units of clay.

The government wants to achieve the goal using the fewest units of clay possible.

### Input

The first line contains t, the number of test cases (about 20), each test case has the following form.

The first line contains two number M and N (1 <= M, N <= 200).

Each line in the next M lines contain N numbers describing the status of each cell in the land. If a cell is not flooded, the corresponding number is -1 while if it is flooded the corresponding number is the cell's water depth level.

Each test case's input is separated by a blank line.

### Output

For each test case, output the result in the following format.

The first line contains T, the number of units of clay used.

The second line contains a number S which is the number of flooded cells needed to raise.

Each line in the next S lines contains two numbers representing the row and column index (1-based) of a raised cell.

Print a blank line after each test case's output.

### Scoring

For each test case, your program's score is equal to T/H in which H is the number of units of clays to raise all the flooded cell.

### Example

<pre>
<b>Input</b>
1

3 3
-1 10 -1
10  2 10
-1 10 -1

<b>Output</b>
2
1
2 2
</pre>
This output will give score to be 2 / (10 + 10 + 2 + 10 + 10) = 1/ 21
