---
category_name: easy
problem_code: ANUARM
problem_name: 'The Army'
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
problem_author: anudeep2011
problem_tester: kostya_by
date_added: 30-09-2014
tags:
    - anudeep2011
    - cook51
    - simple
editorial_url: 'http://discuss.codechef.com/problems/ANUARM'
time:
    view_start_date: 1413744000
    submit_start_date: 1413744000
    visible_start_date: 1413744000
    end_date: 1735669800
    current: 1493558106
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK51/mandarin/ANUARM.pdf) and [Russian](http://www.codechef.com/download/translated/COOK51/russian/ANUARM.pdf) as well.

**N** Soldiers are lined up for a memory test. They are numbered from 0 to **N-1** from left to right.

In the test, there are **M** rounds. In each round, Captain selects one position. Soldier at that position will be numbered 0. All the soldiers to the right of selected position will be numbered one greater than the soldier to his left. All the soldiers to the left of selected position will be numbered one greater than the soldier to his right. 
eg. if **N** = 6 and selected position is 3, then the numbering will be \[3, 2, 1, 0, 1, 2\].

 After **M** rounds, Captain asked each soldier to shout out the greatest number he was assigned during the **M** rounds. In order to check the correctness, Captain asked you to produce the correct values for each soldier (That is the correct value each soldier should shout out).

### Input

The first line of the input contains an integer **T** denoting the number of test cases.
First line of each test case contains two integers, **N** and **M**.
Second line of each test case contains **M** integers, the positions selected by Captain, in that order.

### Output

For each test case, output one line with **N** space separated integers.

### Constraints

- **1** ≤ **T** ≤ **10^4**
- **1** ≤ **N** ≤ **10^5**
- **1** ≤ **M** ≤ **10^5**
- **1** ≤ **Sum of N over all testcases** ≤ **10^5**
- **1** ≤ **Sum of M over all testcases** ≤ **10^5**
- 0 ≤ **Positions selected by captain** ≤ **N-1**

### Example

<pre><b>Input</b>
2
4 1
1
6 2
2 3

<b>Output</b>
1 0 1 2
3 2 1 1 2 3

</pre>