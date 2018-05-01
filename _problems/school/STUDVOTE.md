---
category_name: school
problem_code: STUDVOTE
problem_name: 'Drumpf for President!'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: pushkarmishra
date_added: 29-07-2016
tags:
    - ad
    - admin2
    - cakewalk
    - ltime38
editorial_url: 'http://discuss.codechef.com/problems/STUDVOTE'
time:
    view_start_date: 1469901600
    submit_start_date: 1469901600
    visible_start_date: 1469901600
    end_date: 1735669800
    current: 1492506735
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME38/mandarin/STUDVOTE.pdf), [Russian](http://www.codechef.com/download/translated/LTIME38/russian/STUDVOTE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME38/vietnamese/STUDVOTE.pdf) as well.

![](https://codechef_shared.s3.amazonaws.com/upfiles/young-donald-trump-military-school.jpg)Donald Drumpf has spent the entire summer lobbying to gather votes for the upcoming student government election. At his University, there are a total of **N** students. Each student in the university casts a vote. The size of student government is determined by the number of students that get at least **K** votes.

Each person that receives at least **K** votes is given a post in the student government. The Dean noticed that every year, there are a few students who vote for themselves. He decided to add a rule to disqualify any such individuals who vote for themselves i.e they cannot be part of the student government.

You are given an array **A**, where **Ai** denotes the person who the **i**-th person voted for. Can you compute the size of the student government?

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

For each test case, first line consists of two space separated integers **N**, **K**.

Second line consists of **N** space separated integers denoting the array **A**, where **i**-th integer denotes **Ai**.

### Output

For each test case, output a single line containing an integer corresponding to the size of the student government.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **K** ≤ **N**
- **1** ≤ **Ai** ≤ **N**

### Subtasks

**Subtask #1: (30 points)**- **1** ≤ **N** ≤ **3**

**Subtask #2: (70 points)**- **1** ≤ **N** ≤ **100**

### Example

<pre><b>Input:</b>
<tt>2
3 2
2 1 2
2 1
1 2</tt>

<b>Output:</b>
<tt>1
0</tt>
</pre>### Explanation

In **first test case**, there are **3** students. A student must receive at least **2**votes to be part of the student government. Student **1** votes for student **2**, student **2** votes for student **1** and student **3** votes for student **2**. Thus, Student **2** receives **2** votes and is the only one eligible for student government.

In **second test case**, although both students receive the required amount of votes, they are both disqualified as they had voted for themselves. Thus, size of the student government is 0.
