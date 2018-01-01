---
category_name: easy
problem_code: GRAYSC
problem_name: 'The Gray-Similar Code'
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
problem_author: shangjingbo
problem_tester: laycurse
date_added: 9-05-2012
tags:
    - july12
    - medium
    - pigeonhole
    - search
    - shangjingbo
editorial_url: 'http://discuss.codechef.com/problems/GRAYSC'
time:
    view_start_date: 1342000207
    submit_start_date: 1342000207
    visible_start_date: 1341999849
    end_date: 1735669800
    current: 1493558152
layout: problem
---
All submissions for this problem are available.The Gray code (see [wikipedia](http://en.wikipedia.org/wiki/Gray_code) for more details) is a well-known concept. One of its important properties is that every two adjacent numbers have exactly one different digit in their binary representation.

In this problem, we will give you **n** non-negative integers in a sequence **A\[1..n\] (0<=A\[i\]<2^64)**, such that every two adjacent integers have exactly one different digit in their binary representation, similar to the Gray code.

Your task is to check whether there exist 4 numbers **A\[i1\], A\[i2\], A\[i3\], A\[i4\] (1 <= i1 < i2 < i3 < i4 <= n)** out of the given **n** numbers such that **A\[i1\] xor A\[i2\] xor A\[i3\] xor A\[i4\] = 0**. Here **xor** is a [bitwise operation](http://en.wikipedia.org/wiki/Bitwise_operation#XOR) which is same as **^** in C, C++, Java and **xor** in Pascal.

### Input

First line contains one integer **n (4<=n<=100000)**. Second line contains **n** space seperated non-negative integers denoting the sequence **A**.

### Output

Output “Yes” (quotes exclusive) if there exist four distinct indices **i1, i2, i3, i4** such that **A\[i1\] xor A\[i2\] xor A\[i3\] xor A\[i4\] = 0**. Otherwise, output "No" (quotes exclusive) please.

### Example

<pre>
<b>Input:</b>

5
1 0 2 3 7


<b>Output:</b>

Yes

</pre>