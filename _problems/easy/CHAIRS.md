---
category_name: easy
problem_code: CHAIRS
problem_name: Chairs
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
problem_tester: errichto
date_added: 14-02-2017
tags:
    - cook79
    - kingofnumbers
    - simple
editorial_url: 'https://discuss.codechef.com/problems/CHAIRS'
time:
    view_start_date: 1487529000
    submit_start_date: 1487529000
    visible_start_date: 1487529000
    end_date: 1735669800
    current: 1493558113
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK79/mandarin/CHAIRS.pdf), [Russian](http://www.codechef.com/download/translated/COOK79/russian/CHAIRS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK79/vietnamese/CHAIRS.pdf) as well.

There are **N** chairs placed in circular order. Some of the chairs are empty while others have a child sitting in it. You are required to change the places of the children so that all the children sit next to each other (i.e. they form a connected segment). You can do that by doing the following operation a number of times:

Choose a child and tell him to walk around the circle in clockwise order or anti-clockwise order until he finds the first empty chair, and tell him to sit there.

What is the minimum number of operations required to make all children sit next to each other?

### Input

The first line contains **T**, the number of test-cases.

The first line of each test-case contains **N**, the number of chairs.

The second line of each test-case contains a binary string of length **N**. If the **i**-th character is 1 then the **i**-th chair has a child initially. Otherwise (i.e. the **i**-th character is 0) it's empty.

### Output

For each test case, output a single line containing a single integer donating minimum number of operations needed.

### Constraints

- **1** ≤ **T** ≤ **5,000**
- **1** ≤ sum of **N** in all test-cases ≤ **106**
- at least one chair will be occupied

### Example

<pre><b>Input:</b>
1
8
10001010

<b>Output:</b>
2

</pre>### Explanation
The initial configuration is:

<pre>       
                 <b>1</b>
              0    0
           1          0
              0    0
                  1

</pre>We can tell the child who is **boldened** to move counter-clockwise, and the new configuration will be:
<pre>       
                 0
              <b>1</b>    0
           1          0
              0    0
                  1

</pre>because he has moved to the first empty chair on his way.
Now, we again tell him to move counter-clockwise, and now the new configuration will be:

<pre>       
                 0
              0    0
           1          0
              <b>1</b>    0
                  1

</pre>because he moved counter-clockwise, found an occupied chair, and hence kept moving. The next chair was vacant, and he sat down there.
Note that, in this example, we moved the same child twice, but this need not be the case. We can move different children in different moves.

You can check that this is the best we can do, and 2 is the minimum.
