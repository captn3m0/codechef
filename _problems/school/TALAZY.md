---
category_name: school
problem_code: TALAZY
problem_name: 'Lazy Jem'
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
problem_author: tuananh93
problem_tester: errichto
date_added: 8-09-2016
tags:
    - ad
    - cakewalk
    - cook74
    - tuananh93
editorial_url: 'http://discuss.codechef.com/problems/TALAZY'
time:
    view_start_date: 1474223400
    submit_start_date: 1474223400
    visible_start_date: 1474223400
    end_date: 1735669800
    current: 1492506743
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK74/mandarin/TALAZY.pdf), [Russian](http://www.codechef.com/download/translated/COOK74/russian/TALAZY.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK74/vietnamese/TALAZY.pdf) as well.

Jem is famous for his laziness at school. He always leaves things to last minute. Now Jem has **N** problems in the assignment of "Advanced topics in algorithm" class to solved. The assignment is due tomorrow and as you may guess he hasn't touch any of the problems. Fortunately he got a plan as always.

The first step will be buying a pack of Red Bull and then to work as hard as he can. Here is how he is going to spend the remaining time:

Jem will not take a break until he finishes at least half of the remaining problems. Formally, if **N** is even then he will take he first break after finishing **N** / 2 problems. If **N** is odd then the break will be after he done (**N** + 1) / 2 problems. Each of his break will last for **B** minutes. Initially, he takes **M** minutes in solving a problem, after each break he will take twice more time in solving a problem, i.e. **2 \* M** minutes per problem after the first break.

Jem will start working soon and ask you to help him calculate how much time it will take until he finish the last problem!

### Input

The first line contains a single integer **T** represents the number of test cases in the input.

Each line in the next **T** line contains three integers **N**, **B** and **M** represents a test case. ### Output

For each test case output a single line containing an integer represent how much time Jem will need (in minutes).

### Constraints

- **1 ≤ **T** ≤ 100**
- **1 ≤ **N**, **B**, **M** ≤ 108**

### Example

<pre>
<b>Input</b>:
2
9 1 2
123456 123456 123456

<b>Output</b>:
45
131351258112
</pre>
### Explanation

In the first test case, Jem will proceed as below:

- Initially, Jem has 9 problems to solve. since it is an odd number, Jem will finish the first (9 + 1) / 2 = 5 problems with speed of 2 minutes/problem.
- After that, Jem takes 1 minute break.
- Now he has 4 problems to solve, which is an even number, so Jem will solve the next 4 / 2 = 2 problems. his speed after the first break has now became 4 minutes/problem.
- Again, he takes a 1 minute break.
- he has now 2 problems left so he do one more problem in 8 minutes.
- He takes 1 minute break.
- he solves the last problem in 16 minutes.

So, Jem will need time = 5 × 2 + 1 + 2 × 4 + 1 + 8 + 1 + 16 = 45
