---
category_name: medium
problem_code: SHDWCMP
problem_name: 'Company Club Membership'
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
max_timelimit: '1 - 3'
source_sizelimit: '50000'
problem_author: grumpy_gordon
problem_tester: lg5293
date_added: 20-06-2017
tags:
    - binary
    - dfs
    - grumpy_gordon
    - hard
    - ltime49
    - partial
    - segment
time:
    view_start_date: 1498323600
    submit_start_date: 1498323600
    visible_start_date: 1498323600
    end_date: 1735669800
    current: 1514817224
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/LTIME49/mandarin/SHDWCMP.pdf), [russian](http://www.codechef.com/download/translated/LTIME49/russian/SHDWCMP.pdf) and [vietnamese](http://www.codechef.com/download/translated/LTIME49/vietnamese/SHDWCMP.pdf) as well.

You are working in a company with **N** employees numbered from 0 to **N - 1**, and employee 0 is the director. Each employee, except the director, has a supervisor. The director doesn't have a supervisor. Let's call employee **v**, an ancestor of employee **u** if and only if **v** is the supervisor of **u** or **v** is an ancestor of the supervisor of **u**.

Also, each employee belongs to exactly one club at any moment. Employee **i** belongs to club number **Ci** initially. The company has assemblies for which all the employees of the company gather. During an assembly, the employees introduce each other, in a particular fashion. Employee **v** introduces employee **a** to employee **b** if **a, b, v** are from the same club, **a** is ancestor of **v** and **v** is ancestor of **b**.

Also some employees may change their club. You are given these changes, and you need to calculate the total number of introduces if an assembly was to be held after each such club membership change.

### Input

- The first line contains two integers, **N** and **Q**, denoting the number of employees in the company and the number of club membership changes, respectively.
- The second line contains **N - 1** space-separated integers: **P1**, **P2**, ..., **PN - 1**, denoting the supervisors. **Pi** is the supervisor of employee **i**.
- The third line contains **N** space-separated integers: **C0**, **C1**, ..., **CN - 1**, denoting the clubs. **Ci** is the club that employee **i** belongs to initially.
- Then, **Q** lines follow which contain the numbers **X1**, **X2**, .., **XQ**, one in each line. That is, line number **i + 3** contains **Xi**. What it denotes is explained below.

The queries are encoded, and have to be decoded online. The i-th change (i running from 1 to **Q**) is that employee number (**i** - 1) mod **N** changes his club to (**Xi + ans**) mod **N**. Where **ans** is the previous output (Note that, even for i = 1, there is a "previous output", because as is explained below, the first output has to be before any change).

### Output

You have to output **Q + 1** lines. Line number **i + 1** should contain the answer for the original company after first **i** changes. That is, you should output the answer for the original company, and then after each club membership change.

### Constraints

- **1** ≤ **N** ≤ **500000**
- **1** ≤ **Q** ≤ **500000**
- 0 ≤ **Pi** i
- 0 ≤ **Ci** N
- 0 ≤ **Xi** N

### Subtasks

- Subtask #1 (30 points): **N**, **Q** ≤ **2000**
- Subtask #2 (20 points): **N** ≤ **2000**
- Subtask #3 (35 points): **N**, **Q** ≤ **100000**
- Subtask #4 (15 points): Original constraints

### Example

<pre><b>Input:</b>
9 2
0 0 1 1 2 3 3 5
1 0 1 0 2 1 0 0 1
5
8

<b>Output:</b>
6
3
2
</pre>
### Explanation

We represent employee **v** introducing employee **a** to employee **b**, by the triplet (**a, v, b**).

Initially, before any change, there are a total of 6 introduces. They are:

- (0, 2, 5)
- (0, 2, 8)
- (0, 5, 8)
- (2, 5, 8)
- (1, 3, 6)
- (1, 3, 7)

So, the first output is 6. So **ans** = 6 now. To decode the first change, we consider (**X1 + ans**) mod **N** = (5 + 6) mod 9 = 2. So, employee (**i** - 1) mod **N** = employee 0, changes his club to 2. After this change, the number of introduces reduces. There is no new introduce triplet formed, but the triplets (0, 2, 5), (0, 2, 8) and (0, 5, 8) are no longer valid. Hence, there are only 3 introduces which are:

- (2, 5, 8)
- (1, 3, 6)
- (1, 3, 7)

So the second output is 3, and **ans** becomes 3 now.

To decode the second change, we consider (**X2 + ans**) mod **N** = (8 + 3) mod 9 = 2. So, employee (**i** - 1) mod **N** = employee 1, changes his club to 2. Now, some old introduces are lost, and some new ones formed. The introduces after this change are:

- (2, 5, 8)
- (0, 1, 4)

So the third output is 2.
