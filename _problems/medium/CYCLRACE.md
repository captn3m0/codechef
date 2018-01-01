---
category_name: medium
problem_code: CYCLRACE
problem_name: 'Cyclist Race'
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
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: cenadar
problem_tester: antoniuk1
date_added: 19-09-2015
tags:
    - cenadar
    - convex
    - jan16
    - med
editorial_url: 'http://discuss.codechef.com/problems/CYCLRACE'
time:
    view_start_date: 1452504600
    submit_start_date: 1452504600
    visible_start_date: 1452504600
    end_date: 1735669800
    current: 1493557611
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN16/mandarin/CYCLRACE.pdf), [Russian](http://www.codechef.com/download/translated/JAN16/russian/CYCLRACE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JAN16/vietnamese/CYCLRACE.pdf) as well.

Chef has been invited to be a judge for a cycling race.

You may think about cyclists in the race as points on a line. All the cyclists start at the same point with an initial speed of zero. All of them move in the same direction. Some cyclists may force their cycles to speed up. The change of speed takes place immediately. The rest of the time, they move with a constant speed. There are **N** cyclists in total, numbered from **1** to **N**.

In order to award points to the participants, Chef wants to know how far the cyclists have reached at certain points of time.

Corresponding to the above two, there will be two types of queries.

1. Change the speed of cyclist **i** at some time.
2. Ask for the position of the race leader at some time.

There are **Q** queries. Each query of first type is described by the type of the query (1), the time **Time**, the cyclist number **cyclist**, and the new speed **NewSpeed**. Each query of second type is described by the type of the query (2), and the time **Time**.

Initial speed of all the cyclists is 0.

### Input

The first line of input contains two space-separated integers, **N** and **Q**.

Next **Q** lines contain queries, one per line. Each line constists of several space-separated integers. First integer is **Type**, it is either **1** or **2** denoting the type of the query. If the type of the query is **1**, then three integers follow: **Time**, **cyclist** and **NewSpeed**. If the type of the query is **2**, then one integer follows: **Time**. All the queries are sorted by time, e.g., value **Time** of the next query is greater or equeal than value **Time** for current query.

### Output

Output integers **A1**, **A2**, … , **AR** each in a separate line. Here **Ai** is the answer for the **i**th query of type **2** in the current test case and **R** is the total number of queries of this type in the test case.

### Constraints

- **1** ≤ **N** ≤ **50000**
- **1** ≤ **Q** ≤ **105**
- ≤ **Time** ≤ **109**
- **1** ≤ **NewSpeed** ≤ **109**
- **1** ≤ **cyclist** ≤ **N**
- **The speed of any cyclist cannot decrease.**

### Subtasks

- **Subtask #1 \[25 points\]: N ≤ 5000 and Q ≤ 10000**
- **Subtask #2 \[75 points\]: No additional constraints**

### Example

<pre><b>Input:</b>
5 14
1 1 1 2
1 1 2 5
1 2 3 4
1 2 4 7
2 3
2 4
1 5 5 4
2 5
2 6
1 7 5 8
2 7
2 8
2 9
2 10

<b>Output:</b>
10
15
21
28
35
42
49
56

</pre>