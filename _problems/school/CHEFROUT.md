---
category_name: school
problem_code: CHEFROUT
problem_name: 'Chef and his daily routine'
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
problem_author: admin2
problem_tester: null
date_added: 4-05-2017
tags:
    - admin2
    - long
    - may17
editorial_url: 'https://discuss.codechef.com/problems/CHEFROUT'
time:
    view_start_date: 1495099800
    submit_start_date: 1495099800
    visible_start_date: 1495099800
    end_date: 1735669800
    current: 1497283936
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/MAY17/mandarin/CHEFROUT.pdf), [russian](http://www.codechef.com/download/translated/MAY17/russian/CHEFROUT.pdf) and [vietnamese](http://www.codechef.com/download/translated/MAY17/vietnamese/CHEFROUT.pdf) as well.

Chef's daily routine is very simple. He starts his day with cooking food, then he eats the food and finally proceeds for sleeping thus ending his day. Chef carries a robot as his personal assistant whose job is to log the activities of Chef at various instants during the day. **Today** it recorded activities that Chef was doing at N different instants. These instances are recorded in chronological order (in increasing order of time). This log is provided to you in form of a string **s** of length N, consisting of characters 'C', 'E' and 'S'. If **s**\[i\] = 'C', then it means that at the i-th instant Chef was cooking, 'E' denoting he was eating and 'S' means he was sleeping.

You have to tell whether the record log made by the robot could possibly be correct or not.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The only line of each test case contains string **s**.

### Output

For each test case, output a single line containing "yes" or "no" (without quotes) accordingly.

### Constraints

- 1 ≤ **T** ≤ 20
- 1 ≤ N ≤ 105

### Subtasks

- **Subtask #1** (40 points) : 1 ≤ N ≤ 100
- **Subtask #2** (60 points) : original constraints

### Example

<pre><b>Input:</b>
5
CES
CS
CCC
SC
ECCC

<b>Output:</b>
yes
yes
yes
no
no

</pre>### Explanation
**Example case 1.** "CES" can correspond to a possible record of activities of Chef. He starts the day with cooking, then eating and then sleeping.

**Example case 2.** "CS" can also correspond to a possible record of activities of Chef. He starts the day with cooking, then eating and then sleeping. Robot recorded his cooking and sleeping in order. He might not have recorded his eating activity.

**Example case 4.** "SC" can not correspond to Chef's activities. Here it means that Chef slept first, then he cooked the food, which is impossible for Chef to do on some particular day.
