---
category_name: school
problem_code: PERFCONT
problem_name: 'A Balanced Contest'
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
    - COB
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
    - kotlin
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
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: alex_2oo8
date_added: 9-09-2017
tags:
    - admin2
    - cakewalk
    - oct17
editorial_url: 'https://discuss.codechef.com/problems/PERFCONT'
time:
    view_start_date: 1508146200
    submit_start_date: 1508146200
    visible_start_date: 1508146200
    end_date: 1735669800
    current: 1514815984
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/OCT17/mandarin/PERFCONT.pdf), [russian](http://www.codechef.com/download/translated/OCT17/russian/PERFCONT.pdf) and [vietnamese](http://www.codechef.com/download/translated/OCT17/vietnamese/PERFCONT.pdf) as well.

Chef wants to organize a contest. Predicting difficulty levels of the problems can be a daunting task. Chef wants his contests to be balanced in terms of difficulty levels of the problems.

Assume a contest had total **P** participants. A problem that was solved by at least half of the participants (i.e. **P / 2** (integer division)) is said to be cakewalk difficulty. A problem solved by at max **P / 10** (integer division) participants is categorized to be a hard difficulty.

Chef wants the contest to be balanced. According to him, a balanced contest must have exactly 1 cakewalk and exactly 2 hard problems. You are given the description of **N** problems and the number of participants solving those problems. Can you tell whether the contest was balanced or not?

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

The first line of each test case contains two space separated integers, **N, P** denoting the number of problems, number of participants respectively.

The second line contains **N** space separated integers, **i**-th of which denotes number of participants solving the **i**-th problem.

### Output

For each test case, output "yes" or "no" (without quotes) denoting whether the contest is balanced or not.

### Constraints

- 1 ≤ **T, N** ≤ 500
- 1 ≤ **P** ≤ 108
- 1 ≤ Number of participants solving a problem ≤ **P**

### Subtasks

- **Subtask #1** (40 points): **P** is a multiple of 10
- **Subtask #2** (60 points): Original constraints

### Example

<pre>
<b>Input</b>
6
3 100
10 1 100
3 100
11 1 100
3 100
10 1 10
3 100
10 1 50
4 100
50 50 50 50
4 100
1 1 1 1

<b>Output</b>
yes
no
no
yes
no
no
</pre>### Explanation

**Example case 1.**: The problems are of hard, hard and cakewalk difficulty. There is 1 cakewalk and 2 hard problems, so the contest is balanced.

**Example case 2.**: The second problem is hard and the third is cakewalk. There is 1 cakewalk and 1 hard problem, so the contest is not balanced.

**Example case 3.**: All the three problems are hard. So the contest is not balanced.

**Example case 4.**: The problems are of hard, hard, cakewalk difficulty. The contest is balanced.

**Example case 5.**: All the problems are cakewalk. The contest is not balanced.

**Example case 6.**: All the problems are hard. The contest is not balanced.
