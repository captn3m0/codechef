---
category_name: school
problem_code: REMISS
problem_name: 'Chef and Remissness'
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
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: shiplu
problem_tester: rustinpiece‎
date_added: 31-01-2014
tags:
    - cakewalk
    - cook43
    - shiplu
editorial_url: 'http://discuss.codechef.com/problems/REMISS'
time:
    view_start_date: 1392575400
    submit_start_date: 1392575400
    visible_start_date: 1392575400
    end_date: 1735669800
    current: 1492507629
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK43/mandarin/REMISS.pdf) and [Russian](http://www.codechef.com/download/translated/COOK43/russian/REMISS.pdf) as well.

Chef is now a corporate person. He has to attend office regularly. But chef does not want to go to office, rather he wants to stay home and discover different recipes and cook them.

In the office where chef works, has two guards who count how many times a person enters into the office building. Though the duty of a guard is 24 hour in a day, but sometimes they fall asleep during their duty and could not track the entry of a person in the office building. But one better thing is that they never fall asleep at the same time. At least one of them remains awake and counts who enters into the office.

Now boss of Chef wants to calculate how many times Chef has entered into the building. He asked to the guard and they give him two integers **A** and **B**, count of first guard and second guard respectively.

Help the boss to count the minimum and maximum number of times Chef could have entered into the office building.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of the **T** test cases follows.

Each test case consists of a line containing two space separated integers **A** and **B**.

### Output

For each test case, output a single line containing two space separated integers, the minimum and maximum number of times Chef could have entered into the office building.

### Constraints

- **1** ≤ **T** ≤ **100**
- 0 ≤ **A, B** ≤ **1000000**

### Example

<pre><b>Input:</b>
1
19 17

<b>Output:</b>
19 36
</pre>