---
category_name: easy
problem_code: CHEFRP
problem_name: 'Chef and new recipe'
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
problem_author: abhra73
problem_tester: kevinsogo
date_added: 3-03-2015
tags:
    - abhra73
    - basic
    - cakewalk
    - may15
editorial_url: 'http://discuss.codechef.com/problems/CHEFRP'
time:
    view_start_date: 1431941400
    submit_start_date: 1431941400
    visible_start_date: 1431941400
    end_date: 1735669800
    current: 1493558120
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MAY15/mandarin/CHEFRP.pdf) and [Russian](http://www.codechef.com/download/translated/MAY15/russian/CHEFRP.pdf).

Rupsa recently started to intern under Chef. He gave her **N** type of ingredients of varying quantity  **A1, A2, ..., AN** respectively to store it. But as she is lazy to arrange them she puts them all in a storage box.

Chef comes up with a new recipe and decides to prepare it. He asks Rupsa to get **two** units of each type ingredient for the dish. But when she went to retrieve the ingredients, she realizes that she can only pick one item at a time from the box and can know its type only after she has picked it out. The picked item is not put back in the bag.

She, being lazy, wants to know the maximum number of times she would need to pick items from the box in the worst case so that it is guaranteed that she gets at least two units of each type of ingredient. If it is impossible to pick items in such a way, print -1.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases.
- The first line of each test case contains a single integer **N** denoting the number of different type of ingredients.
- The second line contains **N** space-separated integers **A1, A2, ..., AN** denoting the quantity of each ingredient.

### Output

- For each test case, output a single line containing an integer denoting the answer corresponding to that test case.

### Constraints

- **1 ≤ T ≤ 10**
- **1 ≤ N ≤ 105**
- **1 ≤ Ai ≤ 104**

### Sub tasks

- Subtask #1: **1 ≤ N ≤ 1000** (30 points)
- Subtask #2: original constraints (70 points)

### Example

```
<b>Input:</b>
2
2
2 2
1
6

<b>Output:</b>
4
2

```
### Explanation

- **In Example 1,** she need to pick up all items.
- **In Example 2,** since there is only one type of ingredient, picking two items is enough.