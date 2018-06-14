---
category_name: challenge
problem_code: STEPAVG
problem_name: 'Stepping Average'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - PERL6
    - TEXT
    - CLOJ
    - FS
max_timelimit: '0.873947'
source_sizelimit: '50000'
problem_author: gennady.korotkevich
problem_tester: chmel_tolstiy
date_added: 30-09-2011
tags:
    - challenge
    - gennady
    - nov11
editorial_url: 'http://discuss.codechef.com/problems/STEPAVG'
time:
    view_start_date: 1321004315
    submit_start_date: 1321004315
    visible_start_date: 1321004089
    end_date: 1735669800
    current: 1525454457
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Consider the following weird way of finding the average of **N** numbers. Take any two of the numbers and replace them with their average; repeat this operation exactly **N**-1 times. The only remaining number is called the _stepping average_ of the initial set. Note that a set may obviously have different stepping averages depending on our choice for every operation. 

Your task is, given **N** integers, find a way of performing the operations such that the resulting stepping average is as close to the given integer **K** as possible. Note that this is a challenge problem: you don't have to find the best possible solution, but the better is your solution the more points you get.

### Input

The first line of the input contains an integer **T** -- the number of test cases (no more than 10). Each test case consists of two lines -- the first of them contains two positive integers **N** and **K** (**N** ≤ 1000, **K** ≤ 109), the second contains **N** space-separated positive integers **A1**..**AN** (**Ai** ≤ 109).

### Output

The output for each test case should contain exactly **N**-1 pairs of integers. **i**-th pair (1-based) **x y** means that numbers **Ax** and **Ay** are chosen at the corresponding operation, their average is written to **AN+i**, and **Ax** and **Ay** can't be used any more. See example explanation for more clarity.

### Scoring

Your score for each test case is just the absolute difference between **K** and your remaining number. Your final score is the average of all test case scores. Your goal is to minimize the final score.

Note that in order for your submission not to be judged as 'Wrong Answer' the following conditions should be satisfied:

- your output should contain exactly **N**-1 pairs of positive integers separated by at least one space for each test case and nothing else;
- your output should contain integers strictly less that **N**+**i** in the **i**-th pair (1-based) for each test case;
- all integers in your output for each test case should be different.

### Example

<pre>
<b>Input:</b>
1
5 5
9 1 6 3 4

<b>Output:</b>
5 2
4 6
3 1
7 8

<b>Explanation:</b>
</pre>We have 5 integers here: 9 1 6 3 4. The first operation is 5 2, so the 6th number becomes (4+1)/2 = 2.5, and the 2nd and the 5th numbers are removed, so we have 9 x 6 3 x 2.5 now (here x means a removed number). Then, 4 6 means that the 7th number becomes (3+2.5)/2 = 2.75, and the 4th and the 6th numbers are removed, resulting in 9 x 6 x x x 2.75. Then, after 3 1 we get x x x x x x 2.75 7.5, and after 7 8 we get x x x x x x x x 5.125. The only number left after the operations is 5.125, so your score for the test case is 0.125. ### Test Case Generation

Every official input file contains exactly 10 test cases. In every test case **N** is equal to 1000, **K** is chosen randomly and uniformly between 1 and 109, and all **Ai** are chosen randomly and uniformly between 1 and 109 as well.
