---
category_name: easy
problem_code: CHCINEMA
problem_name: 'Chef and cinema'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: omelyanenko
problem_tester: xcwgf666
date_added: 29-07-2015
tags:
    - binary
    - dec15
    - easy
    - greedy
    - omelyanenko
editorial_url: 'http://discuss.codechef.com/problems/CHCINEMA'
time:
    view_start_date: 1450085400
    submit_start_date: 1450085400
    visible_start_date: 1450085400
    end_date: 1735669800
    current: 1493558115
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC15/mandarin/CHCINEMA.pdf), [Russian](http://www.codechef.com/download/translated/DEC15/russian/CHCINEMA.pdf) and [Vietnamese](http://www.codechef.com/download/translated/DEC15/vietnamese/CHCINEMA.pdf) as well.

Probably everyone has experienced an awkward situation due to shared armrests between seats in cinemas. A highly accomplished cinema manager named "Chef" decided to solve this problem.

When a customer wants to buy a ticket, the clerk at the ticket window asks the visitor if they need the armrests, and if so, which of them: left, right, or both. We know that out of the audience expected to show up, **L** of them only need the left armrest, **R** of them need just the right one, **Z** need none and **B** need both. Your task is to calculate the maximum number of people that can attend the show. In the cinema hall there are **N** rows with **M** seats each. There is only one armrest between two adjacent seats. Seats at the beginning and at the end of the row have two armrests

### Input

Input begins with an integer T: the number of test cases.
Each test case consists of a single line with 6 space-separated integers: **N**, **M**, **Z**, **L**, **R**, **B**.

### Output

For each test case, output a line containing the answer for the task.

### Constraints and Subtasks

- **1** ≤ **T** ≤ **105**

**Subtask 1 : 10 points** - **1** ≤ **N, M** ≤ **3**
- 0 ≤ **Z**, **L**, **R**, **B** ≤ **3**

**Subtask 2 : 20 points** - **1** ≤ **N, M** ≤ **30**
- 0 ≤ **Z**, **L**, **R** ≤ **30**
- 0 ≤ **B** ≤ **109**

**Subtask 3 : 30 points**- **1** ≤ **N, M** ≤ **106**
- 0 ≤ **Z**, **L**, **R** ≤ **106**
- 0 ≤ **B** ≤ **1016**

**Subtask 4 : 40 points**- **1** ≤ **N, M** ≤ **108**
- 0 ≤ **Z**, **L**, **R**, **B** ≤ **1016**

### Example

<pre><b>Input:</b>
<tt>2
2 2 3 2 1 1
3 3 1 2 0 9</tt>

<b>Output:</b>
<tt>4
8</tt>
</pre>
### Explanation

'L' - needs left
'R - needs right
'Z' - doesn't need any
'B' - needs both
'-' - empty place
**Example case 1.**
ZZ
ZB
**Example case 2.**
LLB
BZB
B-B
