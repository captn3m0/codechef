---
category_name: easy
problem_code: COOKGAME
problem_name: 'Cooking Game'
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
problem_author: kingofnumbers
problem_tester: errichto
date_added: 16-02-2017
tags:
    - combinatorics
    - cook79
    - easy
    - kingofnumbers
editorial_url: 'https://discuss.codechef.com/problems/COOKGAME'
time:
    view_start_date: 1487529000
    submit_start_date: 1487529000
    visible_start_date: 1487529000
    end_date: 1735669800
    current: 1493558132
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK79/mandarin/COOKGAME.pdf), [Russian](http://www.codechef.com/download/translated/COOK79/russian/COOKGAME.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK79/vietnamese/COOKGAME.pdf) as well.

Chef is playing a new computer game in which he is the chef of a restaurant and is required to prepare the dishes ordered by the customers with high quality and in time.

Chef will start in level 1 and whenever Chef passes a level in this game he will advance to the next level, but if Chef fails, he will return to level 1.

Chef has already played **N** rounds, but he can't remember what the levels were in all the rounds. He will give you an array **A** of length **N** such that **Ai** is equal to **-1** if Chef can't remember what level the **i**-th round was, otherwise it will contain positive integer denoting the level of the round.

Now Chef is asking you to count the number of ways to fill the missing numbers (ie. the **-1**s) of the array with level numbers, so that it corresponds to a valid game. Since the answer can be large, output it modulo **109+7**.

### Input

First line contains an integer **T**, the number of test-cases.

First line of each test-case contains an integer **N**.

Second line contains **N** space-separated integers, which are the elements of the array **A**.

### Output

Output the answer for each test-case in new line, the number of ways modulo **109+7**.

### Constraints

- **1** ≤ **T** ≤ **10,000**
- **1** ≤ **N** ≤ **100,000**
- sum of **N** in all test-cases will not exceed **100,000**
- **1** ≤ **Ai** ≤ **N** or **Ai** = **-1**

### Example

<pre><b>Input:</b>
1
6
1 1 2 -1 -1 2

<b>Output:</b>
2
</pre>
### Explanation

The only two valid fully filled arrays are (1,1,2,3,1,2) and (1,1,2,1,1,2). Hence the answer is 2.
