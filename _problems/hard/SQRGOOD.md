---
category_name: hard
problem_code: SQRGOOD
problem_name: 'Simplify the Square Root'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
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
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: liouzhou_101
problem_tester: null
date_added: 8-12-2017
tags:
    - dirichlet
    - hard
    - jan18
    - liouzhou_101
    - number
editorial_url: 'https://discuss.codechef.com/problems/SQRGOOD'
time:
    view_start_date: 1516008600
    submit_start_date: 1516008600
    visible_start_date: 1516008600
    end_date: 1735669800
    current: 1525454407
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/JAN18/mandarin/SQRGOOD.pdf), [Russian](http://www.codechef.com/download/translated/JAN18/russian/SQRGOOD.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JAN18/vietnamese/SQRGOOD.pdf) as well.

Tiny Wong the chef used to be a mathematics teacher in a senior high school. At that time, he always used to tell his students that when there is a square root of some number in one’s final result, it should be simplified by factoring out the largest square divisor of this number. For example, √ 12  = 2 √ 3 . Therefore, if an integer **n** has a square divisor, i.e. there is a number **d** > 1 such that **d2** divides **n**, then the square root of **n** needs to be simplified.

Tiny himself should generate for homework some number whose square root needs simplifying. Since he used to major in Computer Science, he prefers random numbers. Therefore, he randomly chose a number **n** and decided to use the **n**-th smallest number whose square root needs simplifying in today’s homework.

Since the **n**-th such number is too large for him to deal with, Tiny Wong is lost in thought. Would you please help him?

### Input

The first and only line of the input contains a single integer **n**.

**Note**: the number **n** is not fixed for each test case. Instead, it will be generated dynamically, so it may be different for each run of your program. For each test case, **n** is generated in the following way: we have two fixed numbers **L** and **R**; **n** will be chosen uniformly at random from all integers between **L** and **R** inclusive.

**Note 2**: Due to dynamically generated test cases, the problem is technically configured as interactive, thus reading until EOF will not work. Attempting to use any input method that expects EOF at the end will result in TLE verdict.

### Output

Print a single line containing one integer — the **n**-th number whose square root needs simplifying.

### Constraints

1 ≤ **n** ≤ 1018
### Subtasks

**Subtask #1 (6 points):** 1 ≤ **n** ≤ 107

**Subtask #2 (17 points):** 1 ≤ **n** ≤ 1014

**Subtask #3 (27 points):** 1 ≤ **n** ≤ 1016

**Subtask #4 (50 points):** 1 ≤ **n** ≤ 1018

### Example

<pre><b>Input:</b>

4

<b>Output:</b>

12
</pre>
### Explanation

The first 4 numbers whose square roots need simplifying are 4, 8, 9 and 12.
