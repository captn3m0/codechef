---
category_name: challenge
problem_code: ADDCHAIN
problem_name: 'Addition chains'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - PERL6
    - TEXT
    - CLOJ
    - FS
max_timelimit: '0.19467'
source_sizelimit: '50000'
problem_author: anton_lunyov
problem_tester: laycurse
date_added: 11-06-2012
tags:
    - anton_lunyov
    - challenge
    - july12
editorial_url: 'http://discuss.codechef.com/problems/ADDCHAIN'
time:
    view_start_date: 1342000293
    submit_start_date: 1342000293
    visible_start_date: 1341999849
    end_date: 1735669800
    current: 1525454414
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.An *addition chain* for a positive integer **N** is a sequence of positive integers **C = (A0, A1, ..., AL)** such that

- **1 = A0 < A1 < ... < AL – 1 < AL = N**,
- for each **i** such that **1 ≤ i ≤ L** there exist integers **j** and **k** such that **0 ≤ j, k < i** and **Ai = Aj + Ak**.

The integer **L** is called the *length* of the chain **C**.

For example, **C = (1, 2, 3, 6, 12, 15)** is an addition chain of length **5** for **N = 15**. Indeed,

**A0 = 1**,
**A1 = 2 = 1 + 1 = A0 + A0**,
**A2 = 3 = 2 + 1 = A1 + A0**,
**A3 = 6 = 3 + 3 = A2 + A2**,
**A4 = 12 = 6 + 6 = A3 + A3**,
**A5 = 15 = 3 + 12 = A2 + A4**.

It is, in fact, the shortest addition chain for **N = 15**.

Your task is to find some addition chain for a given positive integer **N**.

**The shorter chain you will find the better score you will get.**

### Input

The only line of the input file contains an integer **N**, the number for which you need to find an addition chain.

### Output

The first line of the output file should contain an integer **L ≤ 500**, the length of your addition chain for the value of **N** given in the input file. **L** lines should follow. **i**th line should contain two non-negative integers **j\[i\]** and **k\[i\]** both less than **i** separated by exactly one space. Their meaning is that for your addition chain, **Ai** is equal to **Aj\[i\] + Ak\[i\]**. More specifically, your output will be considered as correct if and only if all of the following conditions hold:

- **1 ≤ L ≤ 500**;
- **0 ≤ j\[i\], k\[i\] < i** for all **i** such that **1 ≤ i ≤ L**;
- for the sequence  **(A0, A1, ..., AL)** defined by the rules **A0 = 1** and **Ai = Aj\[i\] + Ak\[i\]** for **i = 1, 2, ..., L** we have **1 = A0 < A1 < ... < AL – 1 < AL = N**.

**Your program will get Accepted if and only if it returns correct output for each test case within a given time limit.**

### Scoring

Your score for a test file is the length of your addition chain, that is, an integer **L**. The total score for a submission is the average score across all test files. Your goal is to minimize the total score.

### Constraints

**1** < **N** < **10100**

### Example

<pre>
<b>Input:</b>
15

<b>Output:</b>
6
0 0
1 0
2 0
0 3
4 4
4 5
</pre>
### Explanation

Sample output represents an addition chain **(1, 2, 3, 4, 5, 10, 15)** for **N = 15**. Your score for such output will be **6**. Note that according to the problem statement shorter chain is possible for this value of **N** but you don't need to find the shortest chain since this is a challenge problem. Also note that order in which we write numbers **j\[i\]** and **k\[i\]** for the given **i** doesn't matter.

### Test Generation

Values of **N** are generated using different strategies. There are **50** official test files in all. Among them there are **8** files where **N < 100000**, **5** files where **N** is a random decimal string of the length **100** (that is, each digit of **N** is distributed uniformly in the range **\[0, 9\]** except the first digit which is distributed in the range **\[1, 9\]**), **8** files where binary representation of **N** is a random string of the random length from **300** to **332** (that is, at first an integer **L** is chosen randomly in the range **\[300, 332\]** and then **L** digits **d1, d2, ..., dL** are chosen so that  **d1 = 1** and each  **di, 2 ≤ i ≤ L,** is uniformly distributed in the range **\[0, 1\]**. After that **N** is set to **d1 ∙ 2L-1 + d2 ∙ 2L-2 + ... + dL-1 ∙ 2 + dL**, that is, **d1d2...dL** is the binary representation of **N**). Other **29** files generated using some special strategies which we prefer to keep in secret.
