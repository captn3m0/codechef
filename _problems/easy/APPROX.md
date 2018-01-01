---
category_name: easy
problem_code: APPROX
problem_name: Approximately
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
problem_author: xcwgf666
problem_tester: anton_lunyov
date_added: 26-12-2012
tags:
    - march13
    - simple
    - simple
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/APPROX'
time:
    view_start_date: 1363000152
    submit_start_date: 1363000152
    visible_start_date: 1363000099
    end_date: 1735669800
    current: 1493558107
layout: problem
---
All submissions for this problem are available.Chef has recently learnt some new facts about the famous number **π**. For example, he was surprised that ordinary fractions are sometimes used to represent this number approximately. For example, **22/7**, **355/113** or even **103993/33102**.

Soon, by calculating the value of **22/7** and **355/113** on paper Chef became quite disappointed because these values are not precise enough. For example, **22/7** differs in the third digit after the decimal point. So, these values are definitely should not be used for serious calculations.

However, Chef doesn't know anything about **103993/33102**. This fraction is quite inconvenient to calculate on paper. Chef is curious how precise this value is. So he asks you to help him and to calculate the first **K** digits after the decimal point of such an approximation of **π**. He consider this ordinary fraction as infinite decimal fraction so formally he asks you to calculate this approximation **truncated** to the first **K** digits after the decimal point.

### Input

The first line of the input contains an integer **T**, denoting the number of test cases. The description of **T** test cases follows. The only line of each test case contains a single integer **K**.

### Output

For each test case output a single line containing the value of **103993/33102** truncated to the first **K** digits after the decimal point. Note that for **K = 0** you should output just **"3"** without decimal point (quotes are for clarity).

### Constraints

- ≤ **K** ≤ **106**
- **1** ≤ **T** ≤ **2000**
- The sum of **K** over the input does not exceed **106**

### Example

<pre>
<b>Input:</b>
3
0
6
20

<b>Output:</b>
3
3.141592
3.14159265301190260407

</pre>### Explanation
**Example case 1.** Here **K = 0** so we don't need to output any digits after the decimal point. The decimal point itself also should not be output.

**Example case 2.** Note that here we **truncate** (not round) the actual value of **103993/33102** to **6** digits after the decimal point. As you see from example case 3 rounded value here differs from truncated one.

**Example case 3.** This example is only to show that this approximation of **π** is also far from perfect :)
