---
category_name: easy
problem_code: DIVQUERY
problem_name: 'Chef and The Divisibility Queries'
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
problem_author: rustinpiece
problem_tester: Rubanenko
date_added: 10-08-2013
tags:
    - cook37
    - medium
    - offline
    - rustinpiece
editorial_url: 'http://discuss.codechef.com/problems/DIVQUERY'
time:
    view_start_date: 1376852100
    submit_start_date: 1376852100
    visible_start_date: 1376852100
    end_date: 1735669800
    current: 1493558214
layout: problem
---
All submissions for this problem are available.The Chef is given a sequence of **N** integers **A1, A2, ..., AN**. He has to process **Q** queries on the above sequence. Each query is represented by three integers:

- **L R K** =&gt; report cardinality of **{ i : K** divides **Ai**, **L** ≤ **i** ≤ **R }**. In other words, how many integers in the subsequence starting at **L**th element and ending at **R**th element are divisible by **K**.

### Input

The first line of the input contains two space separated integer **N** and **Q**.
The following line contains **N** space separated integers giving the sequence **A1, A2, ..., AN**.
Then there will be **Q** lines each containing three space separated integers **L R K**, representing a query.

### Output

For each query output the result in one line.

### Constraints

- **1** ≤ **N, Q**  ≤ **100000 (105)**
- **1** ≤ **Ai**  ≤ **100000 (105)**
- **1** ≤ **L** ≤ **R** ≤ **N**
- **1** ≤ **K**  ≤ **100000 (105)**

### Example

<pre><b>Input:</b>
8 5
3 5 1 4 6 9 12 6
3 6 2
3 6 4
4 8 3
2 6 7
8 8 6

<b>Output:</b>
2
1
4
0
1
</pre>