---
category_name: easy
problem_code: CHFANS
problem_name: 'Chef and Two Fans'
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
max_timelimit: '0.4'
source_sizelimit: '50000'
problem_author: abeyaar
problem_tester: null
date_added: 6-09-2015
tags:
    - abeyaar
time:
    view_start_date: 1441555684
    submit_start_date: 1441555684
    visible_start_date: 1420050600
    end_date: 1735669800
    current: 1493558127
layout: problem
---
All submissions for this problem are available.Chef is studying Rotational Motion in physics. Here is preparing for Engineering Entrance exam. He's stuck in a problem. Which states that "Two fans, each with a single blade are rotating one above the other, about the same axis of rotation and both blades have the same length. Consider the blade as a rod. Both the fans are rotating indefinitely. 


Fans can rotate in either **clockwise** or **anticlockwise** direction. There is a dot marked on the blade of both the fans and the dot is marked at the same distance from the center of rotation.
You're be given speeds of the fans. />/>

3. Clockwise rotation - positive speed.
4. Anticlockwise rotation - negative speed.


Help Chef to find the number of distinct points the dots will coincide on the circumference of rotation. />

### Input

First line consists of **T** Test cases.
Each of the next **T** lines consists of Two numbers **S1** and **S2** which describes the speed of rotation of both the fans respectively

### Output

Print **T** lines with each containing the required answer.

### Constraints

11. 1 ≤ **T** ≤ 100
12. **S1** ≠ **S2**
13. **S1,S2** ≠ 0
14. -100000 ≤ **S1,S2** ≤ 100000.
### Example

```
<b>Input:</b>
3
1 2
6 5
1 -2

<b>Output:</b>
1
1
3

```