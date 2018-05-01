---
category_name: easy
problem_code: FORGETPW
problem_name: 'Forgot Password'
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
problem_author: stzgd
problem_tester: shiplu
date_added: 9-05-2014
tags:
    - ad
    - june14
    - simple
    - stzgd
editorial_url: 'http://discuss.codechef.com/problems/FORGETPW'
time:
    view_start_date: 1402911000
    submit_start_date: 1402911000
    visible_start_date: 1402911000
    end_date: 1735669800
    current: 1493558148
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JUNE14/mandarin/FORGETPW.pdf) and [Russian](http://www.codechef.com/download/translated/JUNE14/russian/FORGETPW.pdf).

Chef changed the password of his laptop a few days ago, but he can't remember it today. Luckily, he wrote the encrypted password on a piece of paper, along with the rules for decryption.

The encrypted password is a string **S** consists of ASCII printable characters except space (ASCII 33 - 126, in decimal notation, the same below). Read here for more details: [ASCII printable characters](http://en.wikipedia.org/wiki/Printable_characters#ASCII_printable_characters "ASCII printable characters").

Each rule contains a pair of characters **ci**, **pi**, denoting that every character **ci** appears in the encrypted password should be replaced with **pi**. Notice that it is not allowed to do multiple replacements on a single position, see **example case 1** for clarification.

After all the character replacements, the string is guaranteed to be a positive decimal number. The **shortest notation** of this number is the real password. To get the shortest notation, we should delete all the unnecessary leading and trailing zeros. If the number contains only non-zero fractional part, the integral part should be omitted (the shortest notation of "0.5" is ".5"). If the number contains zero fractional part, the decimal point should be omitted as well (the shortest notation of "5.00" is "5").

Please help Chef to find the real password.

### Input

The first line of the input contains an interger **T** denoting the number of test cases.
The description of **T** test cases follows.

The first line of each test case contains a single interger **N**, denoting the number of rules.

Each of the next **N** lines contains two space-separated characters **ci** and **pi**,
denoting a rule.

The next line contains a string **S**, denoting the encrypted password.

### Output

For each test case, output a single line containing the real password.

### Constraints

- 1 ≤ **T** ≤ 1000
- 0 ≤ **N** ≤ 94
- All characters in **S** and **ci** may be any ASCII printable character except space. (ASCII 33 - 126)
- All **ci** in a single test case are distinct.
- **pi** is a digit ("0" - "9") or a decimal point "." (ASCII 46).
- The total length of **S** in a single input file will not exceed 106.

### Example

<pre>
<b>Input:</b>
4
2
5 3
3 1
5
0
01800.00
0
0.00100
3
x 0
d 3
# .
0xd21#dd098x

<b>Output:</b>
3
1800
.001
321.33098
</pre>