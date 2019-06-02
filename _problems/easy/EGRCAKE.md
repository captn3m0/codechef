---
category_name: easy
problem_code: EGRCAKE
problem_name: 'Chef and cakes'
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
problem_author: egor_bobyk
problem_tester: iscsi
date_added: 20-09-2015
tags:
    - egor_bobyk
    - gcd
    - nov15
    - simple
editorial_url: 'http://discuss.codechef.com/problems/EGRCAKE'
time:
    view_start_date: 1447666200
    submit_start_date: 1447666200
    visible_start_date: 1447666200
    end_date: 1735669800
    current: 1493558141
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV15/mandarin/EGRCAKE.pdf), [Russian](http://www.codechef.com/download/translated/NOV15/russian/EGRCAKE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/NOV15/vietnamese/EGRCAKE.pdf) as well.

Chef has bought **N** robots to transport cakes for a large community wedding. He has assigned unique indices, from 1 to **N**, to each of them. How it will happen?

Chef arranges the **N** robots in a row, in the (increasing) order of their indices. Then, he chooses the first **M** robots and moves them to the end of the queue. Now, Chef goes to the robot at the first position in the row and hands it one cake. He then notes this robot's index (say k) in his notebook, and goes to the kth position in the row. If the robot at this position does not have a cake, he give him one cake, notes his index in his notebook, and continues the same process. If a robot visited by Chef already has a cake with it, then he stops moving and the cake assignment process is stopped.

Chef will be satisfied if all robots have a cake in the end. In order to prepare the kitchen staff for Chef's wrath (or happiness :) ), you must find out if he will be satisfied or not? If not, you have to find out how much robots have a cake, so that the kitchen staff can prepare themselves accordingly.

### Input

- The first line of input contains a single integer **T** denoting the number of test cases.
- The single line of each test cases contains two space separated integers **N** and **M**.

### Output

For each of the **T** test cases, output a single line:

- If all **N** robots have a cake, output **"Yes"** (without quotes).
- Otherwise, output **"No"** (without quotes) followed by a space and the **number of robots** which have a cake.

### Constraints and Subtasks

- **1** ≤ **T** ≤ **10**
- 0 ≤ **M** < **N**

**Subtask 1: 25 points**

- **1** ≤ **N** ≤ **10^5**

**Subtask 3: 75 points**

- **1** ≤ **N** ≤ **10^9**

### Example

<pre><b>Input:</b>
3
2 0
2 1
4 2

<b>Output:</b>
No 1
Yes
No 2

</pre>
### Explanation

In test case 1, we have two robots indexed 1 and 2. They are arranged as (1 2). Chef goes to the first robot, gives him a cake, and moves to position 1. In the next step, he sees that robot at this position already has a has cake. So Chef stops moving, and our **answer** is **"No 1"**.

In test case 2, we again have two robots indexed 1 and 2. Initially, they are arranged as (1 2). Then, Chef moves robot#1 to the end of the row, and thus the arrangement becomes (2 1). Chef goes to the robot at the first position, which is robot#2. Chef hands him a cake, and moves to position 2. Then, he hands a cake to robot#1 at position 2, and moves back to the first position. Since, robot#2 at the first position already ahs a cake, Chef stops moving. All **N** robots have cakes, so Chef is satisfied, and our **answer** is **"Yes"**.

In the 3rd test case, we have the following arrangement of robots: (3 4 1 2). Only robots with indices 3 and 1 will get cakes. So our **answer** is **"No 2"**.
