---
category_name: easy
problem_code: SEAGRP
problem_name: 'Sereja and Graph'
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
problem_author: sereja
problem_tester: gerald
date_added: 9-06-2013
tags:
    - jan14
    - matching
    - medium
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/SEAGRP'
time:
    view_start_date: 1389605400
    submit_start_date: 1389605400
    visible_start_date: 1389605400
    end_date: 1735669800
    current: 1493558185
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN14/mandarin/SEAGRP.pdf) and [Russian](http://www.codechef.com/download/translated/JAN14/russian/SEAGRP.pdf).

Sereja has undirected graph, which consists of **n** vertexes and **m** edges. Sereja can delete edges from the graph. Now Sereja is interested in one question : is it possible to delete edges in the graph so that the degree of each vertex in the graph will be equal **1**?

Please, help Sereja.

### Input

First line contains integer **T**. **T** testcases follow. The first line of each testcase contains integers **n** and **m**. Following **m** lines contain descriptions of the edges of the graph, each line contains two numbers — indexes of the vertexes, which are connected with edge. There can be multiple edges in the graph, but can not be any loops.

### Output

For each test case print **"YES"**, if you can remove the edges so that the degrees of all vertexes will be equal to **1**, and **"NO"** otherwise. Print the words without quotation marks.

### Constraints

- **1** <= **T** <= **10**
- **1** <= **n, m** <= **100**

### Example

<pre><b>Input:</b>
3
2 2
1 2
1 2
3 2
1 2
2 3
4 6
1 2
1 3
1 4
2 3
2 4
3 4

<b>Output:</b>
YES
NO
YES
</pre>