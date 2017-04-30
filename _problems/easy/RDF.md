---
category_name: easy
problem_code: RDF
problem_name: 'Random decreasing function'
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
problem_author: Rubanenko
problem_tester: anton_lunyov
date_added: 7-08-2012
tags:
    - Rubanenko
    - dynamic
    - easy
    - expectation
    - march13
editorial_url: 'http://discuss.codechef.com/problems/RDF'
time:
    view_start_date: 1363000209
    submit_start_date: 1363000209
    visible_start_date: 1363000099
    end_date: 1735669800
    current: 1493558180
layout: problem
---
All submissions for this problem are available.Andriy and Serhiy are little students from the Lyceum of Kremenchuk. Yesterday there was a great party in the city - Chef's birthday. There were a lot of famous programmers at the party and, of course, everybody gave a gift to Chef. Andriy and Serhiy also didn't come empty-handed. Andriy gave Chef two integer numbers **N** and **K**. Serhiy was more inventive and gave Chef a strange function called "Random-Decreasing-Function", or "**RDF**" abbreviated. The function has the following form:

```
RDF(N, K)
    <b>for</b> i = 1 <b>to</b> K
        <b>do</b> N = random(N)
    <b>return</b> N
```In above language function **random(N)** returns any integer in the range **\[0, N)** with equal probability. Let's consider that **random(0) = 0**. Chef likes both gifts very much and he plays with them every day, let alone that he forgot about his restaurant. Chef runs this function plenty times a day. The only trouble is that results are too unexpected for Chef. Now he asks you to find the expected result of **RDF(N, K)**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. The only line of each test case contains two space-separated integers **N** and **K**.

### Output

For each test case, output a single line containing the expected result of **RDF(N, K)**. Your answer will be considered as correct if it has an absolute or relative error less than **10−6**. More formally if the expected output is **A** and your output is **B**, your output will be considered as correct if and only if
**|A − B| ≤ 10−6 \* max{|A|, |B|, 1}**./>

### Constrains

- **1** ≤ **T** ≤ **500000** (**5 \* 105**)
- **1** ≤ **N** < **100000** (**105**)
- ≤ **K** < **100000** (**105**)

### Example

```

<b>Input:</b>
3
6 1
4 2
4 3

<b>Output:</b>
2.5
0.3750
0.0416667

```
### Explanation

**Example case 1.** **RDF(6, 1)** returns each of the numbers **0, 1, 2, 3, 4, 5** with probability **1/6**. Hence the expected value is
**(0 + 1 + 2 + 3 + 4 + 5) / 6 = 2.5**./>

**Example case 2.** Value of **N** when **RDF(4, 2)** is called may change by one of the following scenarios:

- **4 → 0 → 0** with probability **1/4**.
- **4 → 1 → 0** with probability **1/4**.
- **4 → 2 → 0** with probability **1/8**.
- **4 → 2 → 1** with probability **1/8**.
- **4 → 3 → 0** with probability **1/12**.
- **4 → 3 → 1** with probability **1/12**.
- **4 → 3 → 2** with probability **1/12**.

Hence the expected value is
**0 \* 1/4 + 0 \* 1/4 + 0 \* 1/8 + 1 \* 1/8 + 0 \* 1/12 + 1 \* 1/12 + 2 \* 1/12 = 1/8 + 1/12 + 1/6 = 3/8 = 0.375**./>

**Example case 3.** You should figure it out by yourself.