---
category_name: easy
problem_code: CALC
problem_name: 'Calculator '
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
    - 'CPP 6.3'
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
    - 'PYTH 3.5'
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
problem_author: kingofnumbers
problem_tester: null
date_added: 4-07-2017
tags:
    - easy
    - july17
    - kingofnumbers
    - math
    - simple
editorial_url: 'https://discuss.codechef.com/problems/CALC'
time:
    view_start_date: 1500283800
    submit_start_date: 1500283800
    visible_start_date: 1500283800
    end_date: 1735669800
    current: 1514816303
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JULY17/mandarin/CALC.pdf), [Russian](http://www.codechef.com/download/translated/JULY17/russian/CALC.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JULY17/vietnamese/CALC.pdf) as well.

Chef has a calculator which has two screens and two buttons. Initially, each screen shows the number zero. Pressing the first button increments the number on the first screen by 1, and each click of the first button consumes 1 unit of energy.

Pressing the second button increases the number on the second screen by the number which is currently appearing on the first screen. Each click of the second button consumes **B** units of energy.

Initially the calculator has **N** units of energy.

Now chef wonders what the maximum possible number is, that he gets on the second screen of the calculator, with the limited energy.

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

Each test case is described using a single line containing two integers, **N** and **B**.

### Output

For each test case, output a single line containing the answer to this test case.

### Constraints

- 1 ≤ **T** ≤ 10,000
- 1 ≤ **N, B** ≤ 1,000,000,000

### Subtasks

- Subtask 1 (20 points): 1 ≤ **N, B** ≤ 1,000
- Subtask 2 (80 points): Original constraints

### Example

<pre><b>Input:</b>
3
10 2
8 5
6 1

<b>Output:</b>
12
3
9

</pre>### Explanation
**Example case 1.** There are 10 units of energy available. Pressing second button takes 2 units of energy. Chef can achieve 12 on the second screen as follows.

- Press first button to get scores (1, 0). 9 units of energey is left.
- Press first button to get scores (2, 0). 8 units of energy remaining.
- Press first button to get scores (3, 0). 7 units of energy remaining.
- Press first button to get scores (4, 0). 6 units of energy remaining.
- Press second button to get scores (4, 4). 4 units of energy remaining.
- Press second button to get scores (4, 8). 2 units of energy remaining.
- Press second button to get scores (4, 12). 0 units of energy remaining.
