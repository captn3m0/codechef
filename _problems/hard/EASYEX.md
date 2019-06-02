---
category_name: hard
problem_code: EASYEX
problem_name: 'Easy exam'
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
max_timelimit: '5 - 20'
source_sizelimit: '50000'
problem_author: pavel1996
problem_tester: mugurelionut
date_added: 13-06-2015
tags:
    - advanced
    - combinatorics
    - fft
    - hard
    - july15
    - maths
    - pavel1996
editorial_url: 'http://discuss.codechef.com/problems/EASYEX'
time:
    view_start_date: 1436779800
    submit_start_date: 1436779800
    visible_start_date: 1436779800
    end_date: 1735669800
    current: 1493556697
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese ](/download/translated/JULY15/mandarin/EASYEX.pdf) and [Russian](/download/translated/JULY15/russian/EASYEX.pdf).

One day Chef had an exam on probability theory. Nothing interesting, but the exam was going fishily easy. And finally Chef got to the last question:

 "Suppose you have a dice with **K** faces with numbers from **1** to **K** written on it, and integers **L** and **F**(**0 < L <= K**). You roll it **N** times. Let **ai** be the number of times (out of the **N** rolls) that a face with number **i** written on it came up as the top face of the dice. Find the mathematical expectation of the value **a1F \* a2F \* ... \* aL**F." 

 "I'll drop out of university and won't be allowed to cook" - Chef is frightened! Help him now or he will never be able to please you with tasty dishes again.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. Each of the following **T** lines describe one test case and contain 4 space-separated integers **N, K, L** and **F**.

### Output

Let the answer for a test case be an fraction **P / Q**, where **P** and **Q** are integers. Let integer **X** be **P \* Q-1 modulo 2003**, where **Q-1 modulo 2003** is the modular multiplicative inverse of **Q** modulo **2003** or 0 if **Q-1 modulo 2003** doesn't exist. For each test case, output a single line containing the integer **X** for this test case.

### Constraints

- **1** ≤ **T** ≤ **50**
- 0 < **N, K** ≤ **109**
- 0 < **F ≤ 1000**
- 0 < **L \* F** ≤ **50 000**
- **Subtask #1\[39 points\]: F = 1**
- **Subtask #2\[61 points\] : no additional constraints**
 
### Example

 ```
<b>Input</b>
1
2 6 2 1

<b>Output:</b>
779
<pre>
### Explanation

We roll the 6-face dice 2 times, and we are interested in the value **a1 \* a2**. The only two possible scenarios when this value is not zero are **(1, 2)** and **(2, 1)**. Both of them have **a1 \* a2 = 1** and happen with probability **1 / 36** each. It means that **P / Q = (1 + 1) / 36 = 1 / 18**, so the answer is, **X = 779**.
