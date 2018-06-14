---
category_name: school
problem_code: CHN15A
problem_name: 'Mutated Minions'
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
problem_author: arjunarul
problem_tester: null
date_added: 26-10-2015
tags:
    - acmchn15
    - arjunarul
    - cakewalk
    - modulo
editorial_url: 'http://discuss.codechef.com/problems/CHN15A'
time:
    view_start_date: 1420050600
    submit_start_date: 1420050600
    visible_start_date: 1420050600
    end_date: 1735669800
    current: 1528985554
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Gru has not been in the limelight for a long time and is, therefore, planning something particularly nefarious. Frustrated by his minions' incapability which has kept him away from the limelight, he has built a transmogrifier — a machine which mutates minions.

Each minion has an intrinsic characteristic value (similar to our DNA), which is an integer. The transmogrifier adds an integer **K** to each of the minions' characteristic value.

Gru knows that if the new characteristic value of a minion is divisible by 7, then it will have Wolverine-like mutations.

Given the initial characteristic integers of **N** minions, all of which are then transmogrified, find out how many of them become Wolverine-like.

### Input Format:

The first line contains one integer, **T**, which is the number of test cases. Each test case is then described in two lines.

The first line contains two integers **N** and **K**, as described in the statement.

The next line contains **N** integers, which denote the initial characteristic values for the minions.

### Output Format:

For each testcase, output one integer in a new line, which is the number of Wolverine-like minions after the transmogrification.

### Constraints:

- **1 ≤ T ≤ 100**
- **1 ≤ N ≤ 100**
- **1 ≤ K ≤ 100**
- All initial characteristic values lie between 1 and 105, both inclusive.

### Example

<pre>
<b>Input:</b>
1
5 10
2 4 1 35 1

<b>Output:</b>
1
</pre>### Explanation:

After transmogrification, the characteristic values become {12,14,11,45,11}, out of which only 14 is divisible by 7. So only the second minion becomes Wolverine-like.
