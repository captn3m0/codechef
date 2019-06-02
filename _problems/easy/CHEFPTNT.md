---
category_name: easy
problem_code: CHEFPTNT
problem_name: 'Chef And The Patents'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: nerdyninja
problem_tester: r_64
date_added: 19-01-2018
tags:
    - feb18
    - implementation
    - math
    - nerdyninja
    - simple
editorial_url: 'https://discuss.codechef.com/problems/CHEFPTNT'
time:
    view_start_date: 1518427800
    submit_start_date: 1518427800
    visible_start_date: 1518427800
    end_date: 1735669800
    current: 1525198882
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/FEB18/mandarin/CHEFPTNT.pdf), [Russian](http://www.codechef.com/download/translated/FEB18/russian/CHEFPTNT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/FEB18/vietnamese/CHEFPTNT.pdf) as well.

Chef has decided to start a new firm called PatentChef. However, he's stuck with some big legal issues. Their firm has received offers from a lot of companies, so Chef told his friend Junior Chef to look over some patent cases and solve them as quickly as he can.

Junior Chef is very smart and has an eye for every little detail. He quickly found a case and went ahead to solve it. The patent case is as follows:

There are **N** patents to be filed for a company. Chef’s firm has the first **M** months of the year 2018 to finish this task. (The months in a year are numbered 1 through 12.) Chef's firm has **K** workers (including Junior Chef) available to work on this case. Each worker can prepare exactly one patent per month.

Junior Chef assigns work to workers starting from the first month of the year. He can have any workers work on this case on any month provided that they're chosen according to the following conditions:

- Each worker can only work on this patent case for at most one month.
- Each worker has to work either on an even month or an odd month of the year. You are given a string **S** with length **K** and the following meaning: for each valid **i**, if the **i**-th character of **S** is E, worker **i** has to work on an even month; if it's O, this worker has to work on an odd month.
- At most **X** workers can work on this patent case each month.

Determine whether Chef’s firm and Junior Chef can finish this patent case in time.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains four space-separated integers **N**, **M**, **X** and **K**.
- The second line contains a single string **S**.

### Output

For each test case, print a single line containing the string "yes" if it's possible to finish the patent case or "no" otherwise (without quotes).

### Constraints

- 1 ≤ **T** ≤ 1000
- 0 ≤ **X** ≤ 106
- 1 ≤ **N**, **K** ≤ 106
- 0 ≤ **M** ≤ 12
- 1 ≤ sum of **K** over all test cases ≤ 107
- **|S|** = **K**
- each character of **S** is either E or O

### Subtasks

**Subtask #1 (20 points):** 1 ≤ **N** ≤ **M** ≤ 12

**Subtask #2 (80 points):** original constraints

### Example

<pre><b>Input:</b>

2
4 4 2 4
EEOO
4 3 1 4
EEOO

<b>Output:</b>

yes
no
</pre>
### Explanation

**Example case 1:** The firm can prepare 2 patents per month, so in the first month (odd), workers 3 and 4 can work on 2 patents, and in the second month (even), workers 1 and 2 can work on the remaining 2 patents.

**Example case 2:** There is no way for multiple workers to work on the same (even or odd) month. Hence, it's impossible to finish 4 patents in 3 months.
