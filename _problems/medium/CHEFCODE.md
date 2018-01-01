---
category_name: medium
problem_code: CHEFCODE
problem_name: 'Chef and Subsequences'
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
problem_author: prateekg603
problem_tester: null
date_added: 5-05-2017
tags:
    - long
    - may17
    - prateekg603
editorial_url: 'https://discuss.codechef.com/problems/CHEFCODE'
time:
    view_start_date: 1495099800
    submit_start_date: 1495099800
    visible_start_date: 1495099800
    end_date: 1735669800
    current: 1497284426
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/MAY17/mandarin/CHEFCODE.pdf), [russian](http://www.codechef.com/download/translated/MAY17/russian/CHEFCODE.pdf) and [vietnamese](http://www.codechef.com/download/translated/MAY17/vietnamese/CHEFCODE.pdf) as well.

Though our Head Chef retired from sport programming long back, but that did not affect his passion to contribute to the programming community. He still remains engaged by creating new problems and passing it on to the online judges. Last Night, he thought of a following problem for which he could not figure out a solution. You being his friend from the older days of programming decide to help him.

Find the number of non-empty subsequences in the given list of **N** integers such that the product of the values in the subsequences does not exceed **K**

### Input

First line of the input will contain two space separated integers **N** and **K**. Next and last line of the input contains **N** space separated integers

### Output

Print the answer to the given test case in a separate line.

### Constraints

- **1** ≤ **N** ≤ **30**
- **1** ≤ **K, Ai** ≤ **10^18**

### Subtasks

**Subtask #1 : (30 points)**

- **1 ≤ N ≤ 10**

**Subtask #2 : (70 points)**

- **1 ≤ N ≤ 30**

### Example

<pre><b>Input:</b>
3 4
1 2 3

<b>Output:</b>
5

</pre>### Explanation
For the given sample case, there are **7** non-empty subsequences out of which **2** have their product > **4**. Those include {**2**, **3**} and {**1**, **2**, **3**}. Hence, the answer is **7** - **2** = **5**.
