---
category_name: easy
problem_code: RESERVOI
problem_name: Reservior
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
problem_author: admin2
problem_tester: null
date_added: 3-01-2017
tags:
    - ad
    - admin2
    - jan17
    - simple
editorial_url: 'https://discuss.codechef.com/problems/RESERVOI'
time:
    view_start_date: 1484731800
    submit_start_date: 1484731800
    visible_start_date: 1484731800
    end_date: 1735669800
    current: 1493558180
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN17/mandarin/RESERVOI.pdf), [Russian](http://www.codechef.com/download/translated/JAN17/russian/RESERVOI.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JAN17/vietnamese/RESERVOI.pdf) as well.

You are given a structure of a water reservoir. The reservoir is a 2 dimensional structure of height **N** and width **M**. It can be thought of divided into **M** vertical sections, each of equal width. The reservoir height is of **N** blocks. Each block of the reservoir can contain either water, brick or air. We will denote the water by character 'W', brick by 'B' and air by 'A'.

You are given representation of reservoir at a fixed instant. Can you tell whether the current state of reservoir is stable, i.e. it will remain on the same state forever or not?

For example, let the reservoir be

<pre>
WW
BB
</pre>
This is not stable, as the water in the block (1, 1) can overflow to the left, similarly water in block (1, 2) can overflow to the right too. ```

BWB
BBB
<pre>
This is stable, as the water at block (1, 2) is entrapped between bricks from all sides. ```

AWA
BBB
</pre>
This is not stable, as the water at block (1, 2) might overflow to the left or the right. ```

BAA
ABB
<pre>
This is not stable, as there is a brick at block (1, 1) and air at (2, 1). The brick will go down and air will come up, so its not stable too. ```

BWAAB
BWBWB
BBBBB
</pre>
This is not stable too, as there is water at block (1, 2) and air at (1, 3), and (1, 4). The water will move towards those blocks. ```

BBB
BAB
BBB
<pre>
So brick at (1, 2) is loose and without support, and hence will fill the space beneath it, which is right now filled with air. That is, the brick will go down and replace the air ```

BBB
BWB
BBB
</pre>
This is also unstable due to the same reason as the above. Now, you are given description of reservoir. Can you tell whether the current state of reservoir is stable or not?

### Input

The first line of input contains an integer **T** denoting number of test cases. Description of **T** test cases follows.

The first line of each test case, contains two integers **N** and **M** denoting the height and width of reservoir, respectively.

Each of the next **N** lines a string of length **M**. The **j**-th character in the **i**-th of the line denotes content at block **(i, j)**. The characters can be 'B' denoting brick, 'A' denoting air, 'W' denoting water.

### Output

For each test case, output a line containing "yes" or "no" (without quotes) corresponding to the situation whether the reservoir is stable or not?

### Constraints

- **1** ≤ **T** ≤ **50**
- **1** ≤ **N, M** ≤ **1000**

**Subtask #1: (15 points)**

- There is no water in the reservoir.

**Subtask #2: (25 points)**

- **1** ≤ **N, M** ≤ **100**

**Subtask #3: (60 points)**- **original constraints**

### Example

<pre><b>Input:</b>
7
2 2
WW
BB
2 3
BWB
BBB
2 3
AWA
BBB
2 3
BAA
ABB
3 5
BWAAB
BWBWB
BBBBB
3 3
BBB
BAB
BBB
BBB
BWB
BBB

<b>Output:</b>
no
yes
no
no
no
no
no
</pre>
### Explanation

All the examples are explained in the problem statement itself.
