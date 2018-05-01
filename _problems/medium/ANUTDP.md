---
category_name: medium
problem_code: ANUTDP
problem_name: 'The Dirty Path'
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
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: anudeep2011
problem_tester: kostya_by
date_added: 26-09-2014
tags:
    - anudeep2011
    - bfs
    - binary
    - cook51
    - dfs
    - easy
    - sorting
editorial_url: 'http://discuss.codechef.com/problems/ANUTDP'
time:
    view_start_date: 1413744000
    submit_start_date: 1413744000
    visible_start_date: 1413744000
    end_date: 1735669800
    current: 1493557912
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK51/mandarin/ANUTDP.pdf) and [Russian](http://www.codechef.com/download/translated/COOK51/russian/ANUTDP.pdf) as well.

Bob is currently at origin. Bob walks only on X-axis and towards right always. Bob can walk one unit to right, that is from **(a,0)** to **(a+1, 0)**. Bob can also jump two units to right, that is from **(a, 0)** to **(a+2, 0)**. However, few coordinates are dirty and Bob does not want to step on those. Bob wants to know the number of ways going to **(Y, 0)** from **(0, 0)**. Two ways are considered to be different if there exists an integer **j** such that the location of Bob after **j** steps is different.

Sounds like a well known problem? Right!! Bob quickly came up with a perfect solution.

A valid path should contain '.' which represent a clean coordinate or '#' which represents a dirty coordinate.
If the length of the path is **LEN**, then Bob's program calculates and prints number of ways to reach **(LEN-1, 0)** from **(0, 0)**.

An integer **X** is considered to be a good integer if Bob's program prints **X** for some valid path.

You have to write a program to output **Y**, where **Y** is **N**th good number in the range **L** to **R**. You should also print the valid path that would make Bob's program output **Y**.
If there are multiple valid paths, you can output any of them. Please see the output section for more details.

### Input

The first line of the input contains an integer **T** denoting the number of test cases.
Only line of each test case contains 3 integers **L**, **R** and **N**.

### Output

For each test case, output the **N** th good number, followed by space, followed by a valid path. If no such number exists, just output -1.

A valid path should contain '.' which represent a clean coordinate or '#' which represents a dirty coordinate.

For example, "..##.." represents 6 coordinates, (0, 0) (1, 0) .. (5.0) out of which (2, 0) and (3,0) are dirty.

### Constraints

- **1** ≤ **T** ≤ **10^5**
- 0 ≤ **L** ≤ **R** ≤  **10^8**
- **1** ≤ **N** ≤  **10^5**

### Example

<pre><b>Input</b>
4
1 3 1
6 9 3
1 3 3
6 9 4

<b>Output</b>
1 .
9 ....#....
3 ....
-1
</pre>### Explanation

**Testcase #1** 
Good numbers in range \[1,3\] are 1, 2, 3. 1st of those is 1. There is one way to reach (0, 0) from (0, 0).

**Testcase #2** 
Good numbers in range \[6,9\] are 6, 8, 9. 3rd of those is 9.

**Testcase #4** 
There are only 3 good numbers in range \[6,9\].
