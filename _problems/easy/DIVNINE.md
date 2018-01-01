---
category_name: easy
problem_code: DIVNINE
problem_name: 'Divisibility by 9'
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
problem_author: kevinsogo
problem_tester: null
date_added: 3-06-2015
tags:
    - kevinsogo
    - snck15el
editorial_url: 'http://discuss.codechef.com/problems/DIVNINE'
time:
    view_start_date: 1434135600
    submit_start_date: 1434135600
    visible_start_date: 1434135600
    end_date: 1735669800
    current: 1493558139
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCK15EL/mandarin/DIVNINE.pdf) , [Russian](http://www.codechef.com/download/translated/SNCK15EL/russian/DIVNINE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCK15EL/vietnamese/DIVNINE.pdf)

Chef Zidane likes the number **9**. He has a number **N**, and he wants to turn it into a multiple of **9**. He cannot add or remove digits, and he can only change one digit at a time. The only allowed operation is to increment or decrement a digit by one, and doing this takes exactly one second. Note that he cannot increase a digit **9** or decrease a digit , and the resulting number must not contain any leading zeroes unless **N** has a single digit.

Chef Zidane wants to know the minimum amount of time (in seconds) needed to accomplish this. Please help him, before his kitchen gets overwhelmed with mist!

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

Each test case consists of one line containing a single positive integer **N**.

### Output

For each test case, output a single line containing the answer.

### Constraints

- **1** ≤ **T** ≤ **105**
- **1** ≤ **N** ≤ **10105**
- **N** will not contain leading zeroes.
- Each test file is at most 3Mb in size.

### Example

<pre><b>Input:</b>
</pre>4
1989
86236
90210
99999999999999999999999999999999999999988

<pre>
<b>Output:</b>
</pre>0
2
3
2

<pre>
</pre>### Explanation
**Example case 1.** 1989 is already divisible by 9, so no operations are needed to be performed.

**Example case 2.** 86236 can be turned into a multiple of 9 by incrementing the first and third digit (from the left), to get 96336. This takes 2 seconds.

**Example case 3.** 90210 can be turned into a multiple of 9 by decrementing the third digit twice and the fourth digit once, to get 90000. This takes 3 seconds.
