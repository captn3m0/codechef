---
category_name: easy
problem_code: LEMOUSE
problem_name: 'Little Elephant and Mouses'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: witua
problem_tester: tuananh93
date_added: 20-03-2012
tags:
    - dynamic
    - june13
    - simple
    - witua
editorial_url: 'http://discuss.codechef.com/problems/LEMOUSE'
time:
    view_start_date: 1371461400
    submit_start_date: 1371461400
    visible_start_date: 1371461400
    end_date: 1735669800
    current: 1493558162
layout: problem
---
All submissions for this problem are available.It is well-known that the elephants are afraid of mouses. The Little Elephant from the Zoo of Lviv is not an exception.

The Little Elephant is on a board **A** of **n** rows and **m** columns (0-based numeration). At the beginning he is in cell with coordinates **(0; 0)** and he wants to go to cell with coordinates **(n-1; m-1)**. From cell **(x; y)** Little Elephant can go either to **(x+1; y)** or **(x; y+1)**.

Each cell of the board contains either **1** or 0. If **A\[i\]\[j\] = 1**, then there is a single mouse in cell **(i; j)**. Mouse at cell **(i; j)** scared Little Elephants if and only if during the path there was at least one such cell **(x; y)** (which belongs to that path) and **|i-x| + |j-y| .**

Little Elephant wants to find some correct path from **(0; 0)** to **(n-1; m-1)** such that the number of mouses that have scared the Little Elephant is minimal possible. Print that number.

### Input

First line contains single integer **T** - the number of test cases. Then **T** test cases follow. First line of each test case contain pair of integers **n** and **m** - the size of the board. Next **n** lines contain **n** strings, each of size **m** and consisted of digits 0 and **1**.

### Output

In **T** lines print **T** integer - the answers for the corresponding test.

### Constraints

**1** T 50

**2** n, m 100

### Example

<pre>
<b>Input:</b>
2
3 9
001000001
111111010
100100100
7 9
010101110
110110111
010011111
100100000
000010100
011011000
000100101

<b>Output:</b>
9
10

</pre>
### Explanation

**Example case 1:** The optimized path is: (0, 0) -&gt; (0, 1) -&gt; (0, 2) -&gt; (0, 3) -&gt; (0, 4) -&gt; (0, 5) -&gt; (0, 6) -&gt; (0, 7) -&gt; (0, 8) -&gt; (1, 8) -&gt; (2, 8). The mouses that scared the Little Elephant are at the following cells: (1, 0), (1, 1), (1, 2), (1, 3), (1, 4), (1, 5), (1, 7), (0, 2), (0, 8).

**Example case 2:** The optimized path is: (0, 0) -&gt; (1, 0) -&gt; (1, 1) -&gt; (2, 1) -&gt; (2, 2) -&gt; (3, 2) -&gt; (3, 3) -&gt; (4, 3) -&gt; (4, 4) -&gt; (5, 4) -&gt; (5, 5) -&gt; (6, 5) -&gt; (6, 6) -&gt; (6, 7) -&gt; (6, 8). The 10 mouses that scared the Little Elephant are at the following cells: (0, 1), (1, 0), (1, 1), (2, 1), (3, 3), (4, 4), (5, 4), (5, 5), (6, 6), (6, 8).
