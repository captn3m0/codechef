---
category_name: medium
problem_code: RRSERVER
problem_name: Servers
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
problem_tester: tuananh93
date_added: 5-09-2014
tags:
    - Rubanenko
    - cook53
    - dp
    - medium
editorial_url: 'http://discuss.codechef.com/problems/RRSERVER'
time:
    view_start_date: 1419186616
    submit_start_date: 1419186616
    visible_start_date: 1419186616
    end_date: 1735669800
    current: 1493557891
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK53/mandarin/RRSERVER.pdf) and [Russian](http://www.codechef.com/download/translated/COOK53/russian/RRSERVER.pdf) as well.

There are **N** servers which you have to place in **N** slots. Slots and servers are numbered from **1** to **N**.
A distance between slots **i** and **j** is **|i - j|**. There are **M** pairs of servers that should be connected by wire. You are to place all the servers in the slots so the total wire length is minimized.

### Input

The first line of the input contains two integer numbers **N** and **M**. Then **M** lines follow. Each of them contains two numbers **a** and **b**, which means that server **a** and server **b** should be connected to each other.

### Output

Output single integer — minimal wire length required to connect all the servers arranged in **N** slots.

### Constraints

**1 ≤ N ≤ 20** 
**0 ≤ M ≤ N \* (N - 1) / 2**

### Example

<pre><b>Input:</b>
3 2
1 2
1 3
<b>Output:</b>
2
</pre>
### Explanation

One of the optimal arrangements is **\[2, 1, 3\]**
