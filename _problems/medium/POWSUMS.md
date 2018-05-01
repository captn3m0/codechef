---
category_name: medium
problem_code: POWSUMS
problem_name: 'Power Sums'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: alex_2oo8
problem_tester: alex_2oo8
date_added: 11-03-2016
tags:
    - alex_2oo8
    - dynamic
    - matrix
    - medium
    - oct16
editorial_url: 'http://discuss.codechef.com/problems/POWSUMS'
time:
    view_start_date: 1476696600
    submit_start_date: 1476696600
    visible_start_date: 1476696600
    end_date: 1735669800
    current: 1493557852
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/OCT16/mandarin/POWSUMS.pdf), [Russian](http://www.codechef.com/download/translated/OCT16/russian/POWSUMS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/OCT16/vietnamese/POWSUMS.pdf) as well.

Chef has **n** non-negative integers **a1, a2, ..., an**. He defined the following function **f(k) = (a1k + a2k + ... + ank) mod (109 + 7)** over them.

Chef knows the values **f(1), f(2), ..., f(n)**, but he has forgotten the values **a1, a2, ..., an**.

Now Chef wants to evaluate the function **f** over some integers (total **Q** of them), can you please help him in this?

### Input

The first line of the input contains an integer **T** denoting the number of test cases. **T** test cases follow.

Each test case consists of three lines.

The first line contains two space separated integers **n** and **Q**.

The second line contains **n** space separated integers - the values of **f(1), f(2), ..., f(n)**.

The third line contains **Q** space separated integers **x1, x2, ..., xq**, where **xi** denotes the number in the **i**-th query.

### Output

For each test case, print a single line containing **Q** space separate integers denoting the values of **f(x1), f(x2), ..., f(xq)**.

### Constraints

- **1** ≤ **n** ≤ **300**
- **1** ≤ **Q** ≤ **30**
- 0 ≤ **f(i)** 109 + 7
- **n** xi ≤ **1018**
- It is guaranteed that given information is enough to restore the function **f** and that there exist exactly one such function.

### Subtasks

- Subtask #1: **T = 100**; **xi** ≤ **4** (8 points)
- Subtask #2: **T = 1**; **xi** ≤ **5000** (42 points)
- Subtask #3: **T = 1**; **1** ≤ **n** ≤ **42** (13 points)
- Subtask #4: **T = 1**; **1** ≤ **n** ≤ **100** (17 points)
- Subtask #5: **T = 1**; original constraints (20 points)

### Example

<pre>
<b>Input:</b>
1
4 3
4 6 10 18
5 6 30

<b>Output:</b>
34 66 73741819
</pre>### Explanation

**Test case 1.** The initial **4** numbers Chef has are **1, 2, 0, 1**, so, the function **f** was defined as follows: **f(k) = (1k + 2k + 0k + 1k) mod (109 + 7) = (2k + 2) mod (109 + 7)**.

So, the values given in the input are: **```

f(1) = (2<sup>1</sup> + 2) mod (10<sup>9</sup> + 7) = 4
f(2) = (2<sup>2</sup> + 2) mod (10<sup>9</sup> + 7) = 6
f(3) = (2<sup>3</sup> + 2) mod (10<sup>9</sup> + 7) = 10
f(4) = (2<sup>4</sup> + 2) mod (10<sup>9</sup> + 7) = 18
<pre>**
And the values Chef asked you to calculate are: **```

f(5) = (2<sup>5</sup> + 2) mod (10<sup>9</sup> + 7) = 34
f(6) = (2<sup>6</sup> + 2) mod (10<sup>9</sup> + 7) = 66
f(30) = (2<sup>30</sup> + 2) mod (10<sup>9</sup> + 7) = 1073741826  mod (10<sup>9</sup> + 7) = 73741819
</pre>**
### Note

You can read about the modulo operation (mod) here: [https://en.wikipedia.org/wiki/Modulo\_operation](https://en.wikipedia.org/wiki/Modulo_operation).
