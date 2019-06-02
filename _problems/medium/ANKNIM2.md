---
category_name: medium
problem_code: ANKNIM2
problem_name: 'Bored of Nim'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: code_master01
problem_tester: rubanenko
date_added: 25-05-2015
tags:
    - code_master01
    - cook59
    - fft
    - game
    - medium
editorial_url: 'http://discuss.codechef.com/problems/ANKNIM2'
time:
    view_start_date: 1434911400
    submit_start_date: 1434911400
    visible_start_date: 1434911400
    end_date: 1735669800
    current: 1493557470
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK59/mandarin/ANKNIM2.pdf) and [Russian](http://www.codechef.com/download/translated/COOK59/russian/ANKNIM2.pdf) as well.

Rahul and Rashi are bored of playing the game of [ Nim](https://en.wikipedia.org/?title=Nim) all day. More so, Rahul has been losing all the games. Actually, the array of stone piles for a game is always selected by Rashi from a huge **N**-length array **A**. This selected array is always a subarray of **A**.

Rahul, now frustrated by his losing streak, insists that he would play the next game only if she chooses a game array of length **m**.

Can you find the number of such subarrays that Rashi can choose so that Rahul still loses? Moreover, since the value of **m** is decided by Rahul, can you do this for all possible values of **m**?

Please note that Rahul is always the first player.

### Input:

The first line contains an integer **T**, the number of test cases to follow. In each of the test cases, the first line contains a single integer **N**, and the next line contains **N** integers, representing the array **A**.

### Output:

Output the results of each test case on a new line. For each test case, output the results for all values of **m**, that is, **m** = 1, **m** = 2 ... **m** = **N**, separated by a single space.

### Constraints:

- 1 ≤ **T** ≤ 3
- 1 ≤ **N** ≤ 105
- 0 ≤ **A\[i\]** ≤ 109
- 1 ≤ **m** ≤ **N**

### Example:

**Sample Input:**

<pre>
2
6
1 2 3 2 1 3
4
1 1 1 1

</pre>
**Sample Output:**

<pre>
0 0 3 0 0 1
0 3 0 1

</pre>
**Explanation**

<pre>
For the first test case and m = 3, required sub-arrays are [1,2,3], [3,2,1] and [2,1,3].
</pre>