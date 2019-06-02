---
category_name: easy
problem_code: ROBOTG
problem_name: 'Safe Robot'
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
problem_author: lg5293
problem_tester: errichto
date_added: 14-03-2017
tags:
    - bruteforce
    - cook80
    - easy
    - lg5293
    - string
editorial_url: 'https://discuss.codechef.com/problems/ROBOTG'
time:
    view_start_date: 1489949100
    submit_start_date: 1489949100
    visible_start_date: 1489949100
    end_date: 1735669800
    current: 1493558181
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK80/mandarin/ROBOTG.pdf), [Russian](http://www.codechef.com/download/translated/COOK80/russian/ROBOTG.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK80/vietnamese/ROBOTG.pdf) as well.

There is a rectangular grid of cells consisting of **n** rows and **m** columns. You will place a robot on one of the grid cells and provide it with a *command string* **s**, consisting of characters ‘L’, ‘R’, ‘U’, ‘D’. After being placed, the robot will follow the instructions of the command string, where 'L' corresponds moving to the left, 'R' towards the right, 'U' for moving up, and 'D' means down.

You have already selected the command string **s**, and are wondering if it is possible to place the robot in one of the grid cells initially and have it always stay entirely within the grid upon execution of the command string **s**. Output “safe” if there is a starting cell for which the robot doesn’t fall off the grid on following command **s**, otherwise, output "unsafe".

### Input

The first line of input will contain an integer **T**, the number of test cases.

Each test case will be on two lines.

The first line will have two space separated integers **n,m**.

The second line will have the command string **s**.

### Output

For each test case, output "safe" (without quotes) or "unsafe" (without quotes) in a new line.

### Constraints

- 1 ≤ **T** ≤ 1,000
- 1 ≤ **n,m** ≤ 10
- 1 ≤ **|s|** ≤ 10

### Example

<pre>
<b>Input:</b>
5
1 1
R
2 3
LLRU
3 2
LLRU
4 3
ULURUDRDLD
3 6
RURUR

<b>Output:</b>
unsafe
safe
unsafe
safe
safe
</pre>
### Explanation

For the first case, there is only one grid square, so we must place our robot there. When the robot follows the command, it'll fall off, so it is unsafe.

For the second case, we can place the robot on the bottom right grid square. Here is an image denoting the moves that the robot will make. ![](https://snag.gy/l4krZU.jpg)
