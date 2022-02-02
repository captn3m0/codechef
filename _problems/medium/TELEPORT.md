---
category_name: medium
problem_code: TELEPORT
problem_name: Teleports
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: gainullinildar
problem_tester: melfice
date_added: 26-05-2017
tags:
    - gainullinildar
    - ltime48
    - medium
    - segment
    - sqrt
editorial_url: 'https://discuss.codechef.com/problems/TELEPORT'
time:
    view_start_date: 1495899840
    submit_start_date: 1495899840
    visible_start_date: 1495899840
    end_date: 1735669800
    current: 1497284442
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME48/mandarin/TELEPORT.pdf), [Russian](http://www.codechef.com/download/translated/LTIME48/russian/TELEPORT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME48/vietnamese/TELEPORT.pdf) as well.

Teleports are magical devices. If there is a teleport located at point (x, y) and has radius **R**, then it can transport a person from any point (a, b) such that |x-a|+|y-b| ≤ **R** to any point (c, d) such that |x-c|+|y-d| ≤ **R**.

Initially there are no teleports. You need to process operations of two types:

- Add a new teleport at the location (**x**, **y**)
- Report whether it is possible to reach teleport **j** from teleport **i**, where by teleport **i**, we mean the teleport added during the i-th operation

Note that you can transport from a teleport to a location which does not contain a teleport as well.

### Input

- The first line of the input contains two integers, **Q**, and **R**, denoting the total number of operations and the radius of each teleport.
- The i-th of the next **Q** lines contains one operation, which will be one of the following two types: 
    - + **x y** — add a new teleport at location (**x**, **y**). This teleport will be called teleport i.
    - ? **i j** — Report whether it is possible to reach teleport **j** from teleport **i**

### Output

For each operation, output a single line containing "DA" (without quotes) if we can reach teleport **j** from teleport **i** or "NET" (without quotes) otherwise.

### Constraints

- 1 ≤ **Q**, **R**, **x**, **y** ≤ 100,000
- It is guaranteed that all operations are valid. In particular, if there is an operation of the form ? i j, then it is guaranteed that the i-th and j-th operations were insert operations.

### Subtasks

- Subtask #1 (30 points): 1 ≤ **Q** ≤ 2000
- Subtask #2 (70 points): Original constraints.

### Example

<pre><b>Input:</b>
5 1
+ 2 2
+ 3 3
? 1 2
+ 100 3
? 2 4

<b>Output:</b>
DA 
NET
</pre>
### Explanation

The first two operations make us add teleports at the locations (2, 2) and (3, 3).

 Then, we need to find if the 2nd teleport can be reached from the 1st teleport. From teleport at (2, 2) we can reach the point (2, 3) (because |2-2|+|2-3|

 Then we add teleport 4 at (100, 3).

 In the last operation, we are asked whether we can reach the teleport at (100, 3) from the teleport at (3, 3). We cannot, and hence the answer is NET.
