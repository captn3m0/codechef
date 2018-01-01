---
category_name: easy
problem_code: CHEFA
problem_name: 'Chef and easy problem'
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
problem_author: furko
problem_tester: stzgd
date_added: 17-09-2014
tags:
    - cakewalk
    - furko
    - ltime16
    - sorting
editorial_url: 'http://discuss.codechef.com/problems/CHEFA'
time:
    view_start_date: 1411893000
    submit_start_date: 1411893000
    visible_start_date: 1411893000
    end_date: 1735669800
    current: 1493558115
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME16/mandarin/CHEFA.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME16/russian/CHEFA.pdf).

Chef and Roma are playing a game. Rules of the game are quite simple.
Initially there are **N** piles of stones on the table.
In each turn, a player can choose one pile and remove it from the table.
Each player want to maximize the total number of stones removed by him.
Chef takes the first turn.

Please tell Chef the maximum number of stones he can remove assuming that both players play optimally.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a single integer **N** denoting the number of piles.

The second line contains **N** space separated integers **A1**, **A2**, ..., **AN** denoting the number of stones in each pile.

### Output

For each test case, output a single line containg the maximum number of stones that Chef can remove.

### Constraints

- 1 ≤ **Ai** ≤ 109
- Subtask 1 (35 points): **T** = 10, 1 ≤ **N** ≤ 1000
- Subtask 2 (65 points): **T** = 10, 1 ≤ **N** ≤ 105

### Example

<pre>
<b>Input:</b>
2
3
1 2 3
3
1 2 1

<b>Output:</b>
4
3

</pre>