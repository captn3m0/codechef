---
category_name: easy
problem_code: CHEFFA
problem_name: 'Chef And Fibonacci Array'
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
    - 'CPP 6.3'
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
    - 'PYTH 3.5'
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
problem_author: berezin
problem_tester: null
date_added: 10-09-2014
tags:
    - aug17
    - berezin
    - dynamic
    - easy
editorial_url: 'https://discuss.codechef.com/problems/CHEFFA'
time:
    view_start_date: 1503048600
    submit_start_date: 1503048600
    visible_start_date: 1503048600
    end_date: 1735669800
    current: 1514815999
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/AUG17/mandarin/CHEFFA.pdf), [russian](http://www.codechef.com/download/translated/AUG17/russian/CHEFFA.pdf) and [vietnamese](http://www.codechef.com/download/translated/AUG17/vietnamese/CHEFFA.pdf) as well.

Chef has an array **A** = (**A1**, **A2**, ..., **AN**), which has **N** integers in it initially. Chef found that for i ≥ 1, if **Ai** > 0, **Ai+1** > 0, and **Ai+2** exists, then he can decrease both **Ai**, and **Ai+1** by one and increase **Ai+2** by one. If **Ai+2** doesn't exist, but **Ai** > 0, and **Ai+1** > 0, then he can decrease both **Ai**, and **Ai+1** (which will be the currently last two elements of the array) by one and add a new element at the end, whose value is 1.

Now Chef wants to know the number of different arrays that he can make from **A** using this operation as many times as he wishes. Help him find this, and because the answer could be very large, he is fine with you reporting the answer modulo 109+7.

Two arrays are same if they have the same number of elements and if each corresponding element is the same. For example arrays **(2,1,1)** and **(1,1,2)** are different.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases.
- The first line contains a single integer **N** denoting the initial number of elements in **A**.
- The second line contains **N** space-separated integers: **A1**, **A2**, ... , **AN**.

### Output

For each test case, output answer modulo 109+7 in a single line.

### Constraints

- 1 ≤ **T** ≤ 5
- 1 ≤ **N** ≤ 50
- 0 ≤ **Ai** ≤ 50

### Subtasks

- **Subtask 1** (20 points) : 1 ≤ **N** ≤ 8, 0 ≤ **Ai** ≤ 4
- **Subtask 2** (80 points) : Original constraints

### Example

<pre><b>Input:</b>
3
3
2 3 1
2
2 2
3
1 2 3

<b>Output:</b>
9
4
9
</pre>
### Explanation

**Example case 1.**

We'll list the various single steps that you can take (ie. in one single usage of the operation):

- (2, 3, 1) → (2, 2, 0, 1)
- (2, 2, 0, 1) → (1, 1, 1, 1)
- (1, 1, 1, 1) → (1, 1, 0, 0, 1)
- (1, 1, 0, 0, 1) → (0, 0, 1, 0, 1)
- (1, 1, 1, 1) → (1, 0, 0, 2)
- (1, 1, 1, 1) → (0, 0, 2, 1)
- (2, 3, 1) → (1, 2, 2)
- (1, 2, 2) → (0, 1, 3)

So all the arrays you can possibly get are:

(2, 3, 1), (2, 2, 0, 1), (1, 1, 1, 1), (1, 1, 0, 0, 1), (0, 0, 1, 0, 1), (1, 0, 0, 2), (0, 0, 2, 1), (1, 2, 2), and (0, 1, 3)

Since there are 9 different arrays that you can reach, the answer is 9.
