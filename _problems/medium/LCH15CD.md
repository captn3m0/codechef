---
category_name: medium
problem_code: LCH15CD
problem_name: 'Candidate walk'
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
max_timelimit: '1 - 2'
source_sizelimit: '50000'
problem_author: pavel1996
problem_tester: rubanenko
date_added: 25-12-2014
tags:
    - dynamic
    - easy
    - implementation
    - ltime20
    - pavel1996
editorial_url: 'http://discuss.codechef.com/problems/LCH15CD'
time:
    view_start_date: 1422174600
    submit_start_date: 1422174600
    visible_start_date: 1422174600
    end_date: 1735669800
    current: 1493557732
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME20/mandarin/LCH15CD.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME20/russian/LCH15CD.pdf).

 Elections in Bytetown are coming soon!

 Candidate Boris is going to have a small walk. Bytetown can be represented as **N**-dimensional cube with edge size **D**. Initially Boris stands in cell with coordinates **(0, 0, ... 0)** and his destination is cell **(D-1, D-1,... D-1)**. His route consists of chain of the cells, where each pair of consecutive cells differs in exactly one coordinate by 1 and sum of coordinates strictly increases during his walk. Note that Boris walks through the **cells** not points.

But not all the people in Bytetown are going to vote for Boris. Some of them are sure that Boris is a liar and bribetaker and they will tell it to Boris if they meet him. Boris doesn't like such people and avoids them. He knows that at cell with coordinares **(i0, i1,..., iN-1)** he will meet **(i0^ i1^...^iN-1)x(i0+ i1+...+ iN-1)** such people (in other words XOR-sum of coordinates times arithmetic sum of coordinates). Try to help him to find minimal number of unfriendly people he will have to meet.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. Each of the next **T** lines contain two integer **N** and **D**.

### Output

Output **T** lines. Every line should contain one integer - the minimal number of unfriendly people among all the possible routes Boris will have to meet for the corresponding test case.

### Constraints

- **1** ≤ **T** ≤ **20**
- **1** ≤ **N** ≤ **10**
- Total number of cells in one cube doesn't exceed **216**

###  Subtasks 

**Subtask #1**\[26 points\]: **N = 1**
**Subtask #2**\[29 points\]: **N = 2**
**Subtask #3**\[45 points\]: **N > 2**

<pre><h3>Example</h3>
<b>Input:</b>
4
1 2
1 3
2 2
2 3
<b>Output:</b>
1
5
1
10
</pre>