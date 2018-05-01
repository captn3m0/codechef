---
category_name: easy
problem_code: CHEFRRUN
problem_name: 'Chef and Round Run'
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
problem_author: berezin
problem_tester: xcwgf666
date_added: 8-04-2016
tags:
    - aug16
    - berezin
    - graph
    - simple
editorial_url: 'http://discuss.codechef.com/problems/CHEFRRUN'
time:
    view_start_date: 1471253400
    submit_start_date: 1471253400
    visible_start_date: 1471253400
    end_date: 1735669800
    current: 1493558120
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/AUG16/mandarin/CHEFRRUN.pdf), [Russian](http://www.codechef.com/download/translated/AUG16/russian/CHEFRRUN.pdf) and [Vietnamese](http://www.codechef.com/download/translated/AUG16/vietnamese/CHEFRRUN.pdf) as well.

Chef cooks nice receipes in the cafeteria of his company. The cafe contains **N** boxes with food enumerated from **1** to **N** and are placed in a circle in clocwise order (boxes **1** and **N** are adjacent). Each box has unlimited amount of food with a tastyness level of **Ai**. Chef invented a definition of a magic box!

- Chef picks a box **i** and stays in front of it.
- Now Chef eats food from box **i** and **skips** next **Ai** boxes.
- Now Chef is staying at some other (probably even the same!) box and repeats.
- Box **i** is a magic box if at some point of such game started from box **i**, Chef will find himself staying in front of it again.

When Chef came home, Chef's dog Tommy asked him about how many magic boxes were in the cafe? Help Chef to in finding that!

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a single integer **N** denoting the number of boxes.

The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the tastyness levels of each box.

### Output

For each test case, output a single line containing number of magical boxes.

### Constraints

- **1** ≤ sum of all **N** over all the test cases in a single test file ≤ **106**
- 0 ≤ **Ai** ≤ **109**

### Subtasks

- **Subtask #1 (30 points):** **1** ≤ sum of all **N** over all the test cases ≤ **104**; **1** ≤ **N** ≤ **1000**
- **Subtask #2 (70 points):** **1** ≤ sum of all **N** over all the test cases ≤ **106**; **1** ≤ **N** ≤ **105**

### Example

<pre><b>Input:</b>
<tt>3
4
1 1 1 1
4
3 0 0 0
4
0 0 0 2</tt>
<b>Output:</b>
<tt>4
1
2</tt>
</pre>### Explanation

**Example case 1.**

Here are Chef's paths if he starting from each the box: ```

<b>1</b>-><b>3</b>-><b>1</b>
<b>2</b>-><b>4</b>-><b>2</b>
<b>3</b>-><b>1</b>-><b>3</b>
<b>4</b>-><b>2</b>-><b>4</b>
<pre>As you see, all **4** boxes are magical. **Example case 2.**

Here are Chef's paths if he starts from each box appropriately: ```

<b>1</b>-><b>1</b>
<b>2</b>-><b>3</b>-><b>4</b>-><b>1</b>-><b>1</b>
<b>3</b>-><b>4</b>-><b>1</b>-><b>1</b>
<b>4</b>-><b>1</b>-><b>1</b>
</pre>AS you see, only box **1** is magical.
