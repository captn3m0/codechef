---
category_name: easy
problem_code: PPNUM
problem_name: 'Polo the Penguin and the Numbers'
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
problem_author: witua
problem_tester: null
date_added: 23-09-2013
tags:
    - ad
    - cook39
    - easy
    - witua
editorial_url: 'http://discuss.codechef.com/problems/PPNUM'
time:
    view_start_date: 1382293800
    submit_start_date: 1382293800
    visible_start_date: 1382293800
    end_date: 1735669800
    current: 1493558174
layout: problem
---
All submissions for this problem are available.###  Read problems statements in Russian [here](http://www.codechef.com/download/translated/COOK39/russian/PPNUM.pdf)

Polo, the Penguin, likes numbers. He says that the goodness of a number is itself multiplied by the number of digits in it's decimal representation. For example, the goodness of the integer **474** is **474\*3 = 1422**.

Help him to count the sum of goodness of all integers from **L** to **R**, inclusive. Since the answer can be too large, output it modulo **1,000,000,007 (10^9+7)**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. The only line of each test case contains the pair of integers **L** and **R**, separated by a single space.

### Output

For each test case, output a single line containing the answer to the corresponding test case.

### Constraints

- **1** ≤ **T** ≤ **1,000**
- **1** ≤ **L** ≤ **R** ≤ **1,000,000,000 (10^9)**

### Example

<pre><b>Input:</b>
1
9 12

<b>Output:</b>
75

</pre>
### Explanation

**Example case 1.** The answer is **9\*1 + 10\*2 + 11\*2 + 12\*2 = 75**.
