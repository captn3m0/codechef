---
category_name: hard
problem_code: TRICONT
problem_name: 'Chef and Guard Towers'
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
max_timelimit: '9'
source_sizelimit: '50000'
problem_author: kevinsogo
problem_tester: xcwgf666
date_added: 2-07-2016
tags:
    - aug16
    - binary
    - hard
    - kevinsogo
    - sqrt
editorial_url: 'http://discuss.codechef.com/problems/TRICONT'
time:
    view_start_date: 1471253400
    submit_start_date: 1471253400
    visible_start_date: 1471253400
    end_date: 1735669800
    current: 1493557001
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/AUG16/mandarin/TRICONT.pdf), [Russian](http://www.codechef.com/download/translated/AUG16/russian/TRICONT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/AUG16/vietnamese/TRICONT.pdf) as well.

Chef holds all his secret recipes inside his house. For this reason, Chef wants to make his house secure. To do so, Chef wants to install **guard towers** in his house.

Unfortunately, due to high costs, Chef can only activate **3** guard towers each night. Chef considers his house **safe** if the triangle formed by these **3** guard towers as vertices _strictly_ contains his house. Chef's house is located at **(0, 0)**.

On the **ith** day, Chef plans to install a guard tower at location **(xi, yi)**. Chef wants to know how effective each installation is. Specifically, after every installation, Chef wants to know the number of subsets of **3** guard towers he can activate so that his house becomes safe. Please help him answer this question!

This is an _online_ problem, so you won't get the next point unless you answer the question first. Don't forget to flush the output after every print statement. Please see the note section for details about how to flush the standard output.!

### Input

The first line of input contains a single integer **N**. The next **N** lines describe the points.

The **ith** line contains two integers **xi** and **yi** denoting the location of Chef's **ith** guard tower, **(xi, yi)**.

### Output

Output **N** lines. The **ith** line must contain a single integer, the answer to Chef's question after the **ith** installation.

### Constraints

- **|xi|**, **|yi|** ≤ **106**
- The points are distinct.
- **(xi, yi) ≠ (0, 0)**

### Subtasks

- **Subtask #1: (11 points)** **3** ≤ **N** ≤ **1000**
- **Subtask #2: (24 points)** **3** ≤ **N** ≤ **12000**
- **Subtask #3: (65 points)** **3** ≤ **N** ≤ **400000**

### Example

<pre><b>Input:</b>
<tt>6
2 3
3 2
-1 -1
3 3
4 1
5 5
</tt>

<b>Output:</b>
<tt>0
0
1
1
2
2</tt>
</pre>### Explanation

- After the first and second installations, there aren't enough guard towers for Chef to choose from.
- After the third and fourth installations, there is one set of guard towers that make Chef's house safe: **{(2, 3), (3, 2), (-1, -1)}**.
- After the fifth and sixth installations, there are two sets of guard towers that make Chef's house safe: **{(2, 3), (3, 2), (-1, -1)}** and **{(2, 3), (4, 1), (-1, -1)}**.

### Note

You can flush the standard output in C++ by writing fflush(stdout). In Java, you can do that by System.out.flush(). Please read the documentations of a particular language for more details.
