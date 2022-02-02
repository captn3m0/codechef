---
category_name: easy
problem_code: AMSGAME1
problem_name: 'Subtraction Game 1'
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
problem_author: 'satej '
problem_tester: gamabunta
date_added: 11-05-2013
tags:
    - cakewalk
    - cook34
    - gcd
    - satej
editorial_url: 'http://discuss.codechef.com/problems/AMSGAME1'
time:
    view_start_date: 1368988200
    submit_start_date: 1368988200
    visible_start_date: 1368988200
    end_date: 1735669800
    current: 1493558104
layout: problem
---
All submissions for this problem are available.Chef is playing a game on a sequence of **N** positive integers, say **A1, A2, ... AN**. The game is played as follows.

- If all the numbers are equal, the game ends.
- Otherwise 
    - Select two numbers which are unequal
    - Subtract the smaller number from the larger number
    - Replace the larger number with the result from above (see the explanation section for clarity)

Chef has already figured out that the game **always terminates**. He also knows, for a given sequence of integers, the game will always terminate on the **same value**, no matter how the game is played. Chef wants you to simulate the game for him and tell him on which value will the game terminate for a given sequence of integers.

### Input

The first line of the input contains an integer **T**, the number of test cases. Then follow the description of **T** test cases. The first line of each test case contains a single integer **N**, the length of the sequence. The second line contains **N** positive integers, each separated by a single space.

### Output

For each test case, **output a single integer** - the value of all the numbers when they are **equal** (and the game terminates), on a line by itself.

### Constraints

**1 ≤ T ≤ 100**
**1 ≤ N ≤ 1000**
**1 ≤ Ai ≤ 109**

### Sample

<pre>
<b>Input</b>
3
2
10 12
2
5 9
3
6 10 15

<b>Output</b>
2
1
1

</pre>
### Explanation

**Test Case 1:** Since there are only two numbers, the operations are forced.

- { 10, 12 } =&gt; Replace 12 with ( 12 - 10 = 2 ) =&gt; { 10, 2 }
- { 10, 2 } =&gt; Replace 10 with ( 10 - 2 = 8 ) =&gt; { 8, 2 }
- { 8, 2 } =&gt; Replace 8 with ( 8 - 2 = 6 ) =&gt; { 6, 2 }
- { 6, 2 } =&gt; Replace 6 with ( 6 - 2 = 4 ) =&gt; { 4, 2 }
- { 4, 2 } =&gt; Replace 4 with ( 4 - 2 = 2 ) =&gt; { 2, 2 }

The value of all the numbers when the game ends is **2**.

**Test Case 2:** Since there are only two numbers, the operations are forced.

- { 5, 9 } =&gt; Replace 9 with ( 9 - 5 = 4 ) =&gt; { 5, 4 }
- { 5, 4 } =&gt; Replace 5 with ( 5 - 4 = 1 ) =&gt; { 1, 4 }
- { 1, 4 } =&gt; Replace 4 with ( 4 - 1 = 3 ) =&gt; { 1, 3 }
- { 1, 3 } =&gt; Replace 3 with ( 3 - 1 = 2 ) =&gt; { 1, 2 }
- { 1, 2 } =&gt; Replace 2 with ( 2 - 1 = 1 ) =&gt; { 1, 1 }

The value of all the numbers when the game ends is **1**.

**Test Case 3:** One way to play the game is

- { 6, 10, 15 } =&gt; Replace 15 with ( 15 - 6 = 9 ) =&gt; { 6, 10, 9 }
- { 6, 10, 9 } =&gt; Replace 10 with ( 10 - 6 = 4 ) =&gt; { 6, 4, 9 }
- { 6, 4, 9 } =&gt; Replace 9 with ( 9 - 6 = 3 ) =&gt; { 6, 4, 3 }
- { 6, 4, 3 } =&gt; Replace 6 with ( 6 - 4 = 2 ) =&gt; { 2, 4, 3 }
- { 2, 4, 3 } =&gt; Replace 3 with ( 3 - 2 = 1 ) =&gt; { 2, 4, 1 }
- { 2, 4, 1 } =&gt; Replace 4 with ( 4 - 2 = 2 ) =&gt; { 2, 2, 1 }
- { 2, 2, 1 } =&gt; Replace first 2 with ( 2 - 1 = 1 ) =&gt; { 1, 2, 1 }
- { 1, 2, 1 } =&gt; Replace 2 with ( 2 - 1 = 1 ) =&gt; { 1, 1, 1 }

The value of all the numbers when the game ends is **1**. You may try to play the game differently and observe that **the game will always end when all the values are 1**.
