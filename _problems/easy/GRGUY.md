---
category_name: easy
problem_code: GRGUY
problem_name: 'Gravity Guy'
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
problem_author: ma5termind
problem_tester: laycurse
date_added: 1-04-2015
tags:
    - aug15
    - dynamic
    - greedy
    - ma5termind
    - simple
editorial_url: 'http://discuss.codechef.com/problems/GRGUY'
time:
    view_start_date: 1439803800
    submit_start_date: 1439803800
    visible_start_date: 1439803800
    end_date: 1735669800
    current: 1493558152
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/AUG15/mandarin/GRGUY.pdf) and [Russian](http://www.codechef.com/download/translated/AUG15/russian/GRGUY.pdf).

Chef likes to play games a lot. Gravity Guy is one such interesting game.

"_Gravity Guy is an arcade side-scrolling game in which the player controls Gravity Guy by tapping the screen to switch gravity. The objective in this game is to run as far as possible while avoiding being trapped by obstacles, falling, or flying off the screen. If hit by obstacles, the game is over._"

Chef is so addicted to this game that each night he dreams of himself being in the game as Gravity Guy. He has two lanes in front of him represented by two strings of equal length named as **L1** and **L2**. Each of the two lanes consists of some clean blocks represented by **'.'** and some dirty blocks represented by **'#'**.

Chef can start running from the beginning of any of the two lanes and cannot step over any dirty block **( '#' )** encountered during his journey. He has to complete his journey by reaching the end block of any of the two lanes.

Chef can use the following jumps to reach his destination. Considering chef is at **xth** block of some lane.

- He can jump to **x+1th** block of the same lane.
- He can switch gravity quickly and jump to **xth** block of the other lane.
- He can switch gravity and jump to **x+1th** block of the other lane.

You have to tell him whether he can reach his destination or not. If it is possible for him to reach his destination, then Chef is interested in knowing the minimum number of gravity switches required to reach the destination.

### Input

First line of input contains a single integer **T** denoting the number of test cases. Each test case consists of **2** lines. First line of each test case contains a string denoting lane **L1**. Second line of each test case contains a string denoting lane **L2**.

### Output

For each test case, print **"Yes"** (without quotes) in the first line if Chef is able to reach the destination followed by a line containing an integer denoting minimum number of gravity switches required to reach to the destination. Print a single line containing the word **"No"** (without quotes) otherwise.

### Constraints

- **1 ≤ T ≤ 105**
- **1 ≤ |L1| ≤ 2 × 105**, where **|S|** denotes the length of string **S**
- **|L1| = |L2|**

### Subtasks

**Subtask 1 (25 points)**

- Sum of **|L1|** over all test cases in one file it at most **200**.
- Only "Yes"/"No" response will be evaluated.


**Subtask 2 (25 points)**

- Sum of **|L1|** over all test cases in one file it at most **200**.


**Subtask 3 (25 points)**

- Sum of **|L1|** over all test cases in one file it at most **106**.
- Only "Yes"/"No" response will be evaluated.


**Subtask 4 (25 points)**

- Sum of **|L1|** over all test cases in one file it at most **106**.

### Example

<pre><b>Input:</b>
3
#...#
.###.
#.#.#.
.#.#.#
#...
#...

<b>Output:</b>
Yes
2
Yes
5
No

</pre>### Explanation
- **Test 1:** Chef will start his journey from **L2**, switch from **L2** to **L1** and finally land up at last block of **L2** by switching from **L1** to **L2**. Therefore, he requires total 2 gravity switches to reach the destination.
- **Test 3:** Chef cannot start his journey as starting block of both the lanes **L1 & L2** are dirty and he cannot step over them.


In Subtask 1 and Subtask 3, only "Yes"/"No" response will be evaluated. Thus, for example, the output

<pre>
Yes
1
Yes
8
No


</pre>is considered as a correct output for the example input.