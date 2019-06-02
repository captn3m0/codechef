---
category_name: easy
problem_code: COMPCLUB
problem_name: 'Company and Club Hierarchies'
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
    - PYPY
    - PYTH
    - 'PYTH 3.5'
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
problem_author: admin3
problem_tester: lg5293
date_added: 23-06-2017
tags:
    - admin3
    - dfs
    - dp
    - dynamic
    - ltime49
    - medium
editorial_url: 'https://discuss.codechef.com/problems/COMPCLUB'
time:
    view_start_date: 1498323600
    submit_start_date: 1498323600
    visible_start_date: 1498323600
    end_date: 1735669800
    current: 1514816001
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/LTIME49/mandarin/COMPCLUB.pdf), [russian](http://www.codechef.com/download/translated/LTIME49/russian/COMPCLUB.pdf) and [vietnamese](http://www.codechef.com/download/translated/LTIME49/vietnamese/COMPCLUB.pdf) as well.

You are working in a company with **N** employees numbered from 0 to **N - 1**, and employee 0 is the director. Each employee, except the director, has a supervisor. The director doesn't have a supervisor. Let's call employee **v**, an ancestor of employee **u** if and only if **v** is the supervisor of **u** or **v** is an ancestor of the supervisor of **u**.

Also, each employee belongs to exactly one club. Employee **i** belongs to club number **Ci**. And each club has some internal levels, which are actually independent of the company hierarchy. Each member of a club has a Level Number. The Level Number of employee **i** is denoted by **Ki**. The higher the Level Number, the more important he is in the club.

Each club wants to advertise, and for that, they want to claim that people who are more important in their club, end up being superior in the company. So they want to find such instances. More precisely, for every employee **v**, a sequence of company employees (**e1, e2, ..., eq**) is a *good* sequence starting at **v**, if all of these conditions hold true:

- **e1 = v**.
- All of them are part of the same club.
- **ei** is an ancestor of **ei+1**, for i = 1 to q - 1.
- **K**\[**e1**\] = q - 1, **K**\[**e2**\] = q - 2, ..., **K**\[**eq**\] = 0.

For each employee **v**, you want to find the total number of *good* sequences starting with it. As these numbers could be very large, output the answers modulo 109+7.

### Input

- The first line of the input contains an integer **T**, denoting the number of test cases. The description of each testcase follows.
- The first line of each test case contains two integers, **N** and **X**, denoting the number of employees in the company and a bound on the size of the Level Numbers, as mentioned in the Constraints section below.
- The second line contains **N - 1** space-separated integers: **P1**, **P2**, ..., **PN - 1**, denoting the supervisors. **Pi** is the supervisor of employee **i**.
- The third line contains **N** space-separated integers: **C0**, **C1**, ..., **CN - 1**, denoting the clubs. **Ci** is the club that employee **i** belongs to.
- The fourth line contains **N** space-separated integers: **K0**, **K1**, ..., **KN - 1**, denoting the Level Numbers. **Ki** is the Level number of employee **i**.

### Output

For each test case, you have to output **N** lines. Line number **i + 1** should contain the answer for employee **i**.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **N** ≤ **500000**
- **1** ≤ **X** ≤ **N**
- 0 ≤ **Pi** i
- 0 ≤ **Ci** N
- 0 ≤ **Ki** X
- **1** ≤ Sum of **N** over all test cases ≤ **1000000**

### Subtasks

**Subtask #1** (20 points):

- Sum of integers in the output of all testcases ≤ **20000**, and
- Sum of **N** over all test cases ≤ **5000**

**Subtask #2** (30 points):

- **N** ≤ **5000**, and
- Sum of **N** over all test cases ≤ **20000**

**Subtask #3** (25 points):

- **N** ≤ **100000**, and
- Sum of **N** over all test cases ≤ **500000**

**Subtask #4** (25 points):

- Original constraints

### Example

<pre><b>Input:</b>
1
5 3
0 1 2 3
0 0 0 0 0
2 1 1 0 0

<b>Output:</b>
4
2
2
1
1

</pre>
### Explanation

- Good sequences starting at employee 0: (0, 1, 3), (0, 1, 4), (0, 2, 3), (0, 2, 4)
- Good sequences starting at employee 1: (1, 3), (1, 4)
- Good sequences starting at employee 2: (2, 3), (2, 4)
- Good sequences starting at employee 3: (3)
- Good sequences starting at employee 4: (4)
