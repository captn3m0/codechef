---
category_name: school
problem_code: FLOW014
problem_name: 'Grade The Steel'
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
problem_author: vicky002
problem_tester: null
date_added: 27-04-2015
tags:
    - vicky002
time:
    view_start_date: 1436519986
    submit_start_date: 1436519986
    visible_start_date: 1436519986
    end_date: 1735669800
    current: 1492507586
layout: problem
---
All submissions for this problem are available.A certain grade of steel is graded according to the following conditions.

3. Hardness must be greater than 50.
4. Carbon content must be less than 0.7.
5. Tensile strength must be greater than 5600.



The grades are as follows:

7. Grade is 10 if all three conditions are met.
8. Grade is 9 if conditions (i) and (ii) are met.
9. Grade is 8 if conditions (ii) and (iii) are met.
10. Grade is 7 if conditions (i) and (iii) are met.
11. Garde is 6 if only one condition is met.
12. Grade is 5 if none of three conditions are met.
 

Write a program, if the user gives values of hardness, carbon content and tensile strength of the steel under consideration and display the grade of the steel.

### Input

The first line contains an integer **T**, total number of testcases. Then follow **T** lines, each line contains three numbers **hardness**, **carbon content** and **tensile strength** of the steel.

### Output

Print Grade of the steel depending on Conditions.

### Constraints

- 1 **≤** **T** **≤** 1000
- 1**≤** **hardness, carbon content, tensile strength** **≤** 10000

### Example

<pre>
<b>Input</b>

3 
53 0.6 5602
45 0 4500
0 0 0 
<b>Output</b>

10
6
6
</pre>