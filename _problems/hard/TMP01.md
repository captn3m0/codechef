---
category_name: hard
problem_code: TMP01
problem_name: 'To Queue or not to Queue'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: gerald
problem_tester: xcwgf666
date_added: 24-07-2013
tags:
    - gerald
    - hard
    - sept13
    - strings
    - suffix
editorial_url: 'http://discuss.codechef.com/problems/TMP01'
time:
    view_start_date: 1379323800
    submit_start_date: 1379323800
    visible_start_date: 1379323800
    end_date: 1735669800
    current: 1493556875
layout: problem
---
All submissions for this problem are available.Chef has a string **S**. Initially, this string is empty. Also, Chef has a sequence of operations. Each operation is of one of the following two types:

- add character to the end of the string **S**, so the length of **S** increases by 1.
- delete the first character of **S**, so the length of **S** decreases by 1.

After each operation Chef asks you the number of distinct substrings of the current string **S**. Please answer his questions!

### Input

The first line of input contains **Q** - the number of operations. Then **Q** lines follow, each of these lines describes the operation.

- Add operation is of the form "+ **C**", where **C** is a lowercase English letter.
- Delete operation is of the from "-".

It is guaranteed that after each operation, the length of **S** is a positive integer.

### Output

Just to make the size of your output smaller, Chef asks you the sum of answers of all **Q** operations modulo **1000000007**.
So, print a single integer - the sum of answers for all operations (the sum of **Q** numbers) modulo **1000000007**.

### Constraints

1 ≤ Q ≤ 1000000

### Example

<pre><b>Input:</b>
8
+ a
+ b
+ a
+ a
-
-
-
+ a

<b>Output:</b>
27
</pre>### Explanation

In the first test case the string **S** transforms as follows:

- After the first operation **S** = a. The number of distinct substrings is 1: a.
- After the second operation **S** = ab. The number of distinct substrings is 3: a, b, ab.
- After the third operation **S** = aba. Answer is 5: a, b, ab, ba, aba.
- After the fourth operation **S** = abaa. Answer is 8: a, b, ab, ba, aa, aba, baa, abaa.
- After the fifth operation **S** = baa. Answer is 5: a, b, ba, aa, baa.
- After the sixth operation **S** = aa. Answer is 2: a, aa.
- After the seventh operation **S** = a. Answer is 1: a.
- After the eighth operation **S** = aa. Answer is 2: a, aa.

The sum is **1 + 3 + 5 + 8 + 5 + 2 + 1 + 2 = 27**, **27 modulo 1000000007 = 27**, so, you should print 27.
