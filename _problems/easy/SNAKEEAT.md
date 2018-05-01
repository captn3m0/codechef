---
category_name: easy
problem_code: SNAKEEAT
problem_name: 'Snake Eating'
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
problem_author: admin3
problem_tester: kingofnumbers
date_added: 18-05-2017
tags:
    - admin3
    - binary
    - easy
    - snckql17
    - sorting
editorial_url: 'https://discuss.codechef.com/problems/SNAKEEAT'
time:
    view_start_date: 1495625400
    submit_start_date: 1495625400
    visible_start_date: 1495625400
    end_date: 1735669800
    current: 1497284103
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKQL17/mandarin/SNAKEEAT.pdf), [Russian](http://www.codechef.com/download/translated/SNCKQL17/russian/SNAKEEAT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKQL17/vietnamese/SNAKEEAT.pdf) as well.

The Chef has acquired a vicious bunch of snakes, and these snakes are ever hungry and end up eating each other. In particular, each snake i has a length **Li**, whose initial value is given to you. A snake can eat any other snake which is not longer than itself. That is, snake i can eat snake j (i ≠ j), if **Li** ≥ **Lj**. And when a snake eats another snake, its length increases by 1. That is, **Li** increases by 1. A snake can eat multiple other snakes.

The Chef doesn't care about snakes eating each other. All he wants is to have as many snakes as possible, which are at least some particular lengths long. You are given **Q** values: **K1, K2, .., KQ**. Treat each of them independently and output the answer for each. That is, for each **Ki**, assume that you start out from the beginning with all the snakes alive and the lengths as the initial values given in the input, and find out the maximum number of snakes you can get whose length is at least **Ki**.

### Input

- The first line contains an integer **T**, which is the number of testcases. The description of each testcase follows.
- The first line of each testcase contains two integers: **N** and **Q**, which denote the number of snakes initially, and the number of queries, respectively.
- The second line contains **N** space separated integers: **L1, L2, .., LN**, the initial lengths of the snakes.
- The i-th of the next **Q** lines contains a single integer, **Ki**.

### Output

- For each testcase, output **Q** lines, the i-th of which should have a single integer: The maximum number of snakes the Chef can get which are of length at least **Ki**.

### Constraints

- 1 ≤ **T** ≤ 5
- 1 ≤ **N, Q** ≤ 105
- 1 ≤ **Li** ≤ 109
- 1 ≤ **Ki** ≤ 109

### Example

<pre><b>Input:</b>
2
5 2
21 9 5 8 10
10
15
5 1
1 2 3 4 5
100
<b>Output:</b>
3
1
0
</pre>### Explanation

In the first testcase, first query, the second snake (length 9) can eat the fourth snake (length 8), and hence make its length 10. Now, there are four snakes left, and their lengths are {21, 10, 5, 10}. So, we have three snakes with length ≥ 10: Two snakes of length 10 and one snake of length 21. This is the best you can do.

In the second query, no matter what happens, you cannot get more than one snake of length ≥ 15.

In the second testcase, no matter what happens, you cannot get any snake of length ≥ 100. Hence the answer is 0.
