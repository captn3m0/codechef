---
category_name: medium
problem_code: KMHAMHA
problem_name: Kamehameha
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
problem_author: kaushik_iska
problem_tester: shangjingbo
date_added: 12-09-2013
tags:
    - bipartite
    - easy
    - kaushik_iska
    - matching
    - oct13
editorial_url: 'http://discuss.codechef.com/problems/KMHAMHA'
time:
    view_start_date: 1381743000
    submit_start_date: 1381743000
    visible_start_date: 1381743000
    end_date: 1735669800
    current: 1493557709
layout: problem
---
All submissions for this problem are available.###  Read problems statements in Mandarin Chinese [here](http://www.codechef.com/download/translated/OCT13/mandarin/KMHAMHA.pdf)

### Problem Statement

City of Byteland can be described as a **2D** grid of cells. Each cell may or may not contain a demon. You are given the list of cells that contain demons.

In a single Kamehameha attack, Goku can kill all the demons stading in a row or in a column. But using Kamehameha drains Goku's power. You are to tell the minimum number of Kamehameha attacks that will be required by Goku to destroy all the demons.

### Input

The first line contains **T** the number of test cases. The first line of each test case contains **N** the number of cells where enemies are present. The following **N** lines contain two integers X and Y each describing the index of the cell in which the demon is present.

### Output

For each case print the minimum number of attacks that are needed to kill all the monsters.

### Constraints

- 1 ≤ T ≤ 10
- 1 ≤ N ≤ 1000
- 1 ≤ X, Y ≤ 109

### Example

<pre>
<b>Input</b>
1
3
0 0
1 0
0 1

<b>Output</b>
2

</pre>