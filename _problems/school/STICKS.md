---
category_name: school
problem_code: STICKS
problem_name: Sticks
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
problem_author: kingofnumbers
problem_tester: mgch
date_added: 27-05-2016
tags:
    - cook71
    - greedy
    - kingofnumbers
    - simple
editorial_url: 'http://discuss.codechef.com/problems/STICKS'
time:
    view_start_date: 1466965800
    submit_start_date: 1466965800
    visible_start_date: 1466965800
    end_date: 1735669800
    current: 1492506743
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK71/mandarin/STICKS.pdf), [Russian](http://www.codechef.com/download/translated/COOK71/russian/STICKS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK71/vietnamese/STICKS.pdf) as well.

Chef and his little brother are playing with sticks. They have total **N** sticks. Length of **i**-th stick is **Ai**. Chef asks his brother to choose any four sticks and to make a rectangle with those sticks its sides. Chef warns his brother to not to break any of the sticks, he has to use sticks as a whole. Also, he wants that the rectangle formed should have the maximum possible area among all the rectangles that Chef's brother can make.

Chef's little brother takes this challenge up and overcomes it. Can you also do so? That is, you have to tell whether it is even possible to create a rectangle? If yes, then you have to tell the maximum possible area of rectangle.

### Input

The first line contains a single integer **T** denoting the number of test-cases. **T** test cases follow.

The first line of each test case contains a single integer **N** denoting the number of sticks.

The second line of each test case contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the lengths of sticks.

### Output

For each test case, output a single line containing an integer representing the maximum possible area for rectangle or -1 if it's impossible to form any rectangle using the available sticks.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **N** ≤ **103**
- **1** ≤ sum of **N**'s over all test-cases in a single test file ≤ **103**
- **1** ≤ **Ai** ≤ **103**

### Example

<pre><b>Input:</b>
<tt>2
5
1 2 3 1 2
4
1 2 2 3</tt>

<b>Output:</b>
<tt>2
-1</tt>

</pre>### Explanation
**Example case 1.** Chef's brother can choose sticks of lengths 1, 2, 1, 2. He can create a rectangle with area 1 \* 2 = 2.

**Example case 2.** It's impossible to choose 4 sticks so that they form a rectangle.
