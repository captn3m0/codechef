---
category_name: easy
problem_code: STFM
problem_name: 'Chef and Strange Formula'
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
problem_author: antoniuk1
problem_tester: shangjingbo
date_added: 15-08-2014
tags:
    - antoniuk1
    - easy
    - feb15
    - math
editorial_url: 'http://discuss.codechef.com/problems/STFM'
time:
    view_start_date: 1424079000
    submit_start_date: 1424079000
    visible_start_date: 1424079000
    end_date: 1735669800
    current: 1493558190
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/FEB15/mandarin/STFM.pdf) and [Russian](http://www.codechef.com/download/translated/FEB15/russian/STFM.pdf).

For positive integer **x** let define function **F(x) = 1 \* (1! + x) + 2 \* (2! + x) + .. + x \* (x! + x)**.

**"k!"** means factorial: **k! = 1 \* 2 \* .. \* k**

Chef wants to calculate **F(p1) + F(p2) + ... + F(pn)**.

As answer could be large, help him, calculate value modulo **m**.

### Input

8. First line contains two integers **n** and **m**.
9. Next line contains **n** space separated integers **pi**.
### Output

11. Output a single line containing one integer --- calculated value modulo **m**.
### Constraints

- **1** ≤ **n** ≤  **105**
- **1** ≤ ****pi**** ≤  **1018**
- **1** ≤ **m** ≤  **107**

###  Subtasks 

- Subtask #1: **1** ≤ ****pi**** ≤  **6**  (10 points)
- Subtask #2: **1** ≤ ****pi**** ≤  **7 \* 103**  (25 points)
- Subtask #3: **m** - prime number (25 points)
- Subtask #4: original constraints (40 points)

### Example

<pre><b>Input:</b>
5 7
1 2 3 4 5

<b>Output:</b>
6

<h3>Explanation</h3>

</pre>18. F(1) = 1 \* (1! + 1) = 219. F(2) = 1 \* (1! + 2) + 2 \* (2! + 2) = 3 + 8 = 11
20. F(3) = 1 \* (1! + 3) + 2 \* (2! + 3) + 3 \* (3! + 3) = 4 + 10 + 27 = 41
21. F(4) = 1 \* (1! + 4) + 2 \* (2! + 4) + 3 \* (3! + 4) + 4 \* (4! + 4) = 5 + 12 + 30 + 112 = 159
22. F(5) = 1 \* (1! + 5) + 2 \* (2! + 5) + 3 \* (3! + 5) + 4 \* (4! + 5) + 5 \* (5! + 5) = 794
F(1) + F(2) + F(3) + F(4) + F(5) = 2 + 11 + 41 + 159 + 794 = 1007 1007 modulo 7 = 6
