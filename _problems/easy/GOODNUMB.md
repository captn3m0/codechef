---
category_name: easy
problem_code: GOODNUMB
problem_name: 'Good Numbers'
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
problem_author: admin2
problem_tester: null
date_added: 23-06-2016
tags:
    - admin2
time:
    view_start_date: 1467052140
    submit_start_date: 1467052140
    visible_start_date: 1467052140
    end_date: 1735669800
    current: 1493558150
layout: problem
---
All submissions for this problem are available.A number is called a square free number if there does not exist a number greater than 1, whose square divides the number evenly/perfectly. For example, number 8 is not a square free number as number 4 (which is square of 2), divides 8. Similarly, number 4 is also not a square free number. However numbers 1, 3, 6 all are square free numbers.

A number **n** is called a _good number_ if following properties hold.

- It is a square free number.
- Let **s** denote the sum of all divisors of **n** (including non-trivial divisors like 1 and itself). Let **c** denote the number of prime numbers dividing **s**. Number **c** should be a prime number.

You will two numbers **L, R**, you have to find sum of divisors (including non-trivial) of all the good numbers in the range **L** to **R**, both inclusive.

Please note that  is not considered a prime number.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The only line of the each test case contains two space separated integers **L, R** denoting the range for which you have to find sum of divisors of good numbers.

### Output

For each test case, output a single line corresponding to answer of the test case.

### Constraints and Subtasks

**Subtask #1 (30 points)**

- 1 ≤ **T** ≤ **103**
- 1 ≤ **L ≤ R ≤** **103**

**Subtask #2 (70 points)**

- 1 ≤ **T** ≤ **105**
- 1 ≤ **L ≤ R ≤** **105**

### Example

<pre><b>Input</b>
2
1 5
6 10

<b>Output:</b>
6
30

</pre>### Explanation
- Following number in the range 1 to 10 are square free numbers : 1, 2, 3, 5, 6, 7, 10.
- Sum of their divisors will be 1, 3, 4, 6, 12, 8, 18 respectively.
- Number of prime divisors of their sum of divisors will be 0, 1, 1, 2, 2, 1, 2 respectively.
- So, the number 5, 6, 10 are good numbers.

**Example case 1**. Only good number in 1 to 5 is 5. Sum of divisors of 5 is 6.

**Example case 2**. In the range 6 to 10, number 6 and 10 are good. Sum of their divisors is 12 + 18 = 30.
