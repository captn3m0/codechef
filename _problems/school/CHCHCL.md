---
category_name: school
problem_code: CHCHCL
problem_name: 'Chef and Chocolate'
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
problem_author: antoniuk1
problem_tester: xcwgf666
date_added: 13-02-2016
tags:
    - antoniuk1
    - aug16
    - cakewalk
editorial_url: 'http://discuss.codechef.com/problems/CHCHCL'
time:
    view_start_date: 1471253400
    submit_start_date: 1471253400
    visible_start_date: 1471253400
    end_date: 1735669800
    current: 1492506735
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/AUG16/mandarin/CHCHCL.pdf), [Russian](http://www.codechef.com/download/translated/AUG16/russian/CHCHCL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/AUG16/vietnamese/CHCHCL.pdf) as well.

Chef has a standard chocolate of **n** by **m** pieces. More formally, chocolate is a rectangular plate consisting of **n** rows and **m** columns.

Here you can see an example of a standard 5 by 7 chocolate.

![](https://s3.amazonaws.com/codechef_shared/download/upload/AUG16/choco.jpg)

He has two friends and they will play with this chocolate. First friend takes the chocolate and cuts it into two parts by making either a horizontal or vertical cut. Then, the second friend takes one of the available pieces and divides into two parts by either making a horizontal or vertical cut. Then the turn of first friend comes and he can pick any block of the available chocolates and do the same thing again. The player who cannot make a turn loses.

Now Chef is interested in finding which of his friends will win if both of them play optimally. Output "Yes", if the friend who plays first will win, otherwise print "No".

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The only line of each test case contains two space separated integers **n** and **m** - the sizes of the chocolate.

### Output

For each test case, output a single line containing one word "Yes" (without quotes) if there is a sequence of moves leading to the winning of the person who moves first and "No" (without quotes) otherwise.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **n, m** ≤ **109**

### Subtasks

**Subtask #1 (10 points):**- **1 ≤ **n**, **m** ≤ 10**

 **Subtask #2 (30 points):**- **n** = **1** or **m** = **1**

 **Subtask #3 (60 points):**  No additional constraints ### Example

<pre><b>Input:</b>
<tt>2
1 2
1 3</tt>

<b>Output:</b>
<tt>Yes
No</tt>
</pre>### Explanation

**Example case 1.** There is only one possible move, so the second player even won't have a chance to make move.

**Example case 2.** There are only two ways first player can make first move, after each of them only one move left, so the first player cannot win.
