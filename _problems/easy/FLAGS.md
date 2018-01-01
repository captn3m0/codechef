---
category_name: easy
problem_code: FLAGS
problem_name: 'Counting Flags'
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
problem_author: kostya_by
problem_tester: rustinpiece
date_added: 31-05-2014
tags:
    - combinatorics
    - cook47
    - easy
    - kostya_by
editorial_url: 'http://discuss.codechef.com/problems/FLAGS'
time:
    view_start_date: 1403464500
    submit_start_date: 1403464500
    visible_start_date: 1403464500
    end_date: 1735669800
    current: 1493558145
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK47/mandarin2/FLAGS.pdf) and [Russian](http://www.codechef.com/download/translated/COOK47/russian/FLAGS.pdf) as well.

Mike is a famous traveler. He visits about 100 countries a year and buys the flag of each country he has been to.

Mike knows, that there are some flags, that correspond to one pattern, but colored in different ways. E.g. the flag of Ireland([link](http://en.wikipedia.org/wiki/File:Flag_of_Ireland.svg)) and the flag of Belgium([link](http://en.wikipedia.org/wiki/File:Flag_of_Belgium.svg)). In this problem we consider only **five** 2,2cm✕1,1cm patterns of flags:

![](/download/extimages/e0a288110c029176f586f6eac23b4546.jpg)

There are **N** different colors available to paint the flags and the colors are denoted by integers from 1 to **N**.
Mike wants you to count the number of different well-painted flags. We call a flag well-painted if it's made according to the following algorithm:

- Pick up one of the flag patterns considered above;
- Paint each one-colored polygon on the pattern in a color encoded by an integer from **1** to **N**. Different colors are encoded with different integers. If two different one-colored polygons share a common side(not corner), than they must be painted in different colors. In any other case they can be painted in both equal and different colors.

Two flags are different, if they look different(have at least one pixel painted with different color).

Help Mike!

### Input

The first line of the input contains integer **T**, denoting the number of testcases. The description of **T** testcases follows.

The only line of each test case contains integer **N**, denoting the number of different colors, that can be used while painting a flag pattern.

### Output

For each testcase, output a single line containing an integer - the answer for the corresponding query.

### Constraints

1 ≤ **T** ≤ 10 000;

1 ≤ **N** ≤ 10 000 for each testcase.

### Example

<pre><b>Input:</b>
3
1
2
3

<b>Output:</b>
0
4
42

</pre>### Explanations:
There are **four** different well-painted flags for **N** = 2 different colors :

![](/download/extimages/57c2f54761cda108c18bd840f4638fda.jpg)

### Text version of the pictures: 

**Picture 1**

112233

112233

112233

111111

222222

333333

112222

112222

113333

122223

111333

144443

111222

333222

333444

**Picture 2**

112211

112211

112211

221122

221122

221122

111111

222222

111111

222222

111111

222222
