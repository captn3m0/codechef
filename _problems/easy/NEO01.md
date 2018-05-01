---
category_name: easy
problem_code: NEO01
problem_name: 'Chef and the Feast'
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
problem_author: neo1tech9_7
problem_tester: null
date_added: 13-05-2017
tags:
    - neo1tech9_7
time:
    view_start_date: 1497259800
    submit_start_date: 1497259800
    visible_start_date: 1497259800
    end_date: 1735669800
    current: 1497284414
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Russian](http://www.codechef.com/download/translated/JUNE17/russian/NEO01.pdf).

Chef has prepared a feast with **N** dishes for you. You like Chef's cooking, and so you want to eat all the dishes he has prepared for you. You are also given an array **A** of size **N**, where **Ai** represents the happiness you get by eating the i-th dish.You will eat all the dishes in a series of steps. In each step, you pick a non empty subset of the remaining dishes and eat them. The happiness you get from eating these dishes is the size of the subset multiplied by the sum of the individual happiness from the dishes in the subset. You want to maximize the happiness you get from the entire feast, which is the sum of happiness in each step.

### Input

 The first line contains T, the number of test cases.

The first line of each test case contains a single integer **N**, denoting the number of dishes prepared by the Chef.

The second line of each test case contains contains **N** space-separated integers: **A1**, **A2**, ..., **AN** denoting the happiness gained by eating the dishes.

### Output

Output a single number denoting the maximum happiness you can get from the feast.

### Constraints

- **1** ≤ **T** ≤ **8**
- **1** ≤ **N** ≤ **105**
- **-108** ≤ **Ai** ≤ **108**

### Subtasks

- Subtask #1: **Ai** ≤ 0 (30 points)
- Subtask #2: Original Constraints (70 points)

### Example 1

<pre><b>Input:</b>
1
3
-8 0 -2 

<b>Output:</b>
-10
</pre>### Example 2

<pre><b>Input:</b>
1
3
1 2 3

<b>Output:</b>
18
</pre>### Explanation

**Example case 1.** You can eat the first dish in the first step, the second dish in the second step and the third dish in the third step. total happiness = 1\*(-8) + 1\*0 + 1\*(-2) = -10
