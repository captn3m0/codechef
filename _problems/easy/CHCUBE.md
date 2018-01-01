---
category_name: easy
problem_code: CHCUBE
problem_name: 'Chef and Cube'
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
problem_tester: mugurelionut
date_added: 8-04-2015
tags:
    - antoniuk1
    - cakewalk
    - implementation
    - july15
editorial_url: 'http://discuss.codechef.com/problems/CHCUBE'
time:
    view_start_date: 1436779800
    submit_start_date: 1436779800
    visible_start_date: 1436779800
    end_date: 1735669800
    current: 1493558115
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](/download/translated/JULY15/mandarin/CHCUBE.pdf) and [Russian](/download/translated/JULY15/russian/CHCUBE.pdf).

One day, Chef found a cube which has each of its sides painted in some color out of black, blue, red, green, yellow and orange.

Now he asks you to check if he can choose three sides such that they are pairwise adjacent and painted in the same color.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases.
- A single line of each test case contains six words denoting the colors of painted sides in the order: front, back, left, right, top and bottom, respectively.
 
### Output

For each test case, output a single line containing the word "YES" or "NO" (without quotes) corresponding to the answer of the problem.

### Constraints

- **1** ≤ **T** ≤  **50000**
- Each color will be from the list {"black", "blue", "red", "green", "yellow", "orange"}
 
### Subtasks

**Subtask 1: (25 points)**

- **1** ≤ **T** ≤  **12000**
- For each test case there will be at most three different colors
 
**Subtask 2: (75 points)**

- Original constraints
 
### Example

 ```
<b>Input:</b>
2
blue yellow green orange black green
green yellow green orange black green
 
<b>Output:</b>
NO
YES

<pre>### Explanation
**Example case 1.**

There are no three sides with the same color.

![explanation](/download/JULY15/CHCUBE1.jpg)

**Example case 2.**

In this test case, the front, bottom and left sides are green (see picture).

![explanation](/download/JULY15/CHCUBE2.jpg)
