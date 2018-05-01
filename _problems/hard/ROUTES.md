---
category_name: hard
problem_code: ROUTES
problem_name: 'Safe Routes'
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
problem_author: xcwgf666
problem_tester: Rubanenko
date_added: 22-07-2013
tags:
    - dynamic
    - ltime03
    - medium
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/ROUTES'
time:
    view_start_date: 1377419555
    submit_start_date: 1377419555
    visible_start_date: 1377419423
    end_date: 1735669800
    current: 1493556824
layout: problem
---
All submissions for this problem are available.Alice is the queen of ChefLand. She has initiated a road reform recently. The reform will last for **M** days.

Initially, there are **N** towns and no roads in ChefLand. Every day one bidirectional road will be built. On the **i**-th day, the road connecting the towns **Ai** and **Bi** will be built.

Nevertheless, Alice worries that if there is a road that will occur in **every** route from the town **A** to the town **B** for some pair of towns **A** and **B**, criminals might attack everyone who is traveling from the town **A** to the town **B** (or vice versa) for sure. So she calls such an unordered pair (**A**, **B**) _unsafe_.

You are given a plan of the road reform. Please, output the number of unsafe unordered pairs of towns, after each of **M** days.

### Input

The first line of input consists of the numbers **N** and **M** - the number of towns and the number of days.

The following **M** lines will describe the road reform. The **i**-th line will contain two integers **X** **Y**. That means that the bidirectional road, connecting the towns **X** and **Y** will be built during the **i**-th day.

### Output

Output **M** lines. The **i**-th line should contain the number of unsafe pairs of towns after the **i**-th day.

### Example

<pre><b>Input:</b>
10 10
6 7
1 10
8 4
9 7
10 4
5 7
1 3
5 2
6 1
8 6

<b>Output:</b>
1
2
3
5
9
12
16
20
45
35

</pre>### Scoring

Subtask 1 (22 points): 1 <= **N** <= 5, 1 <= **M** <= 5.

Subtask 2 (13 points): 1 <= **N** <= 100, 1 <= **M** <= 100.

Subtask 3 (20 points): 1 <= **N** <= 5000, 1 <= **M** <= 5000.

Subtask 4 (45 points): 1 <= **N** <= 5\*105, 1 <= **M** <= 5\*105.
