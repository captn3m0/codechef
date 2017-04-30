---
category_name: easy
problem_code: CHSHIFU
problem_name: 'Chef Shifu and Celebration'
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
problem_author: wittyceaser
problem_tester: null
date_added: 22-06-2016
tags:
    - wittyceaser
time:
    view_start_date: 1467052140
    submit_start_date: 1467052140
    visible_start_date: 1467052140
    end_date: 1735669800
    current: 1493558129
layout: problem
---
All submissions for this problem are available.Chef Shifu wanted to celebrate the success of his new restaurant with all his employees. He was willing to host a party and he had decided the location of the party as well. However, Chef Shifu was a shy person and wanted to communicate with the least possible employees to inform them about the party, and that these employees could inform their friends.
Note that an employee could only inform his/her immediate friends about the party, not his/her friends’ friends.
Chef Shifu has a list of all the friendships among his employees. Help him find the minimum number of employees he should inform, so that every employee knows about the celebration party.

### Input

First line contains a single integer **T** - the total number of testcases.

**T** testcases follow. For each testcase:

The first line contains 2 space-separated integers **N** and **M** - the total number of employees working under Chef Shifu and the number of friendship relations.

**M** lines follow - each line contains 2 space-separated integers **u** and **v**, indicating that employee **u** is a friend of employee **v** and vice-versa.

The employees are numbered from 1 to N, and each employee is assigned a distinct integer./>/>/>/>

### Output

For each testcase, print the **minimum** number of employees to be informed on a new line.

### Constraints

**Subtask 1: 5 points**

1 ≤ **T** ≤ 5

1 ≤ **N** ≤ 4

0 ≤ **M** ≤ N\*(N-1)/2
/>/>/>/>

**Subtask 2: 35 points**

1 ≤ **T** ≤ 5

1 ≤ **N** ≤ 15

0 ≤ **M** ≤ N\*(N-1)/2
/>/>/>/>

**Subtask 3: 60 points**

1 ≤ **T** ≤ 5

1 ≤ **N** ≤ 20

0 ≤ **M** ≤ N\*(N-1)/2/>/>/>

### Example

**Input**

```

2
3 3
1 2
2 3
1 3
4 3
1 2
2 3
3 4

```
**Output**

```

1
2

```
**Explanation**

In testcase 1, since every employee is a friend of every other employee, we just need to select 1 employee.

In testcase 2, selecting employees 2 and 4 would ensure that all 4 employees are represented.
Similarly, selecting employees 1 and 3 would also ensure that all 4 employees are selected.
In both cases, we must select 2 employees in the best case.